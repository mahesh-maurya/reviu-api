<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Video_model extends CI_Model
{
	//video
	public function createvideo($user,$title,$description,$location,$lat,$long,$rating,$videourl,$status,$category,$siteuser,$siteurl)
	{
//        echo "siteurl".$siteurl;
		$data  = array(
			'user' => $user,
			'title' => $title,
			'description' => $description,
			'location' => $location,
			'lat' => $lat,
			'long' => $long,
			'rating' => $rating,
			'videourl' => $videourl,
			'category' => $category,
			'siteuser' => $siteuser,
			'siteurl' => $siteurl,
			'status' => $status
		);
//        print_r($data);
		$query=$this->db->insert( 'video', $data );
		
		return  1;
	}
	public function postvideo($title,$userid,$latitude,$longitude,$location,$rating,$video,$category,$image,$siteurl,$siteuser)
	{
		$data  = array(
			'user' => $userid,
			'title' => $title,
			'location' => $location,
			'lat' => $latitude,
			'long' => $longitude,
			'rating' => $rating,
			'status' => 1,
			'category' => $category,
			'image' => $image,
			'siteurl' => $siteurl,
			'siteuser' => $siteuser,
			'videourl' => $video
		);
		$query=$this->db->insert( 'video', $data );
		$videoid=$this->db->insert_id();
		if(!$query)
			return  0;
		else
			return  $videoid;
	}
	public function postvideoforapi($title,$userid,$latitude,$longitude,$location,$rating,$video,$category,$image,$siteurl,$siteuser,$tag,$type,$productlink,$price)
	{
        if($type=="product")
            {
            $type=1;
        }
        else
            {
            $type=0;
        }
		$data  = array(
			'user' => $userid,
			'title' => $title,
			'location' => $location,
			'lat' => $latitude,
			'long' => $longitude,
			'rating' => $rating,
			'status' => 1,
			'category' => $category,
			'image' => $image,
			'siteurl' => $siteurl,
			'siteuser' => $siteuser,
			'type' => $type,
			'productlink' => $productlink,
			'price' => $price,
			'videourl' => $video
		);
		$query=$this->db->insert( 'video', $data );
		$videoid=$this->db->insert_id();
        $alltag = explode(",", $tag);
        $tag1=$alltag[0];
        $tag2=$alltag[1]; 
        $this->db->query("INSERT INTO `videotags`(`video`, `tag`) VALUES ('$videoid','$tag1')");
        $this->db->query("INSERT INTO `videotags`(`video`, `tag`) VALUES ('$videoid','$tag2')");
        
		if(!$query)
			return  0;
		else
			return  $videoid;
	}
    function viewvideo($startfrom,$totallength)
	{
		$query=$this->db->query("SELECT `video`.`id`, `video`.`user`, `video`.`title`, `video`.`description`,`video`. `location`,`video`. `lat`,`video`. `long`, `video`.`timestamp`, `video`.`rating`, `video`.`videourl`, `video`.`status`,`user`.`firstname`,`user`.`lastname` 
FROM `video`
INNER JOIN `user` ON `video`.`user`=`user`.`id` 
		ORDER BY `video`.`id` ASC LIMIT $startfrom,$totallength")->result();
        $return=new stdClass();
        $return->query=$query;
        $return->totalcount=$this->db->query("SELECT count(*) as `totalcount` FROM `video`
INNER JOIN `user` ON `video`.`user`=`user`.`id` ")->row();
        $return->totalcount=$return->totalcount->totalcount;
		return $return;
//		return $query;
	}
    
    function adduserlikes($videoid,$user)
	{
        if($user==0 || $user=="")
        {
            return 0;
        }
        else
        {
            $query=$this->db->query("SELECT  `video`.`likes` AS `videolikes` FROM `uservideolikes`
    INNER JOIN `user` ON `uservideolikes`.`user`=`user`.`id`
    INNER JOIN `video` ON `uservideolikes`.`video`=`video`.`id`
    WHERE `uservideolikes`.`user`='$user' AND `uservideolikes`.`video`='$videoid'")->row();
            if(empty($query))
            {
                $likes=$query->videolikes;
                $insertlikes=$likes+1;
                $this->db->query("INSERT INTO `uservideolikes`(`user`, `video`) VALUES ('$user','$videoid')");
                $this->db->query("UPDATE `video` SET `likes`='$insertlikes' WHERE `id`='$videoid'");
                return 1;
            }
            else
            {
                $this->db->query("DELETE FROM `uservideolikes` WHERE `user`='$user' AND `video`='$videoid'");
                $likes=$query->videolikes;
                $insertlikes=$likes-1;
                $this->db->query("UPDATE `video` SET `likes`='$insertlikes' WHERE `id`='$videoid'");
                return -1;
            }
        }
	}
    
    function addviewcount($videoid)
	{
        $query=$this->db->query("SELECT  * FROM `video` WHERE `id`='$videoid'")->row();
        $view=$query->views;
        $newviews=$view+1;
        $this->db->query("UPDATE `video` SET `views`='$newviews' WHERE `id`='$videoid'");
        
	}
    
    function getvideosforuser($userid,$category)
	{
        if($category=="")
        {
            $query=$this->db->query("SELECT `video`.`id`, `video`.`user`, `video`.`title`, `video`.`description`,`video`. `location`,`video`. `lat`,`video`. `long`, `video`.`timestamp`, `video`.`rating`, `video`.`videourl`, `video`.`status`, `video`.`category`,`user`.`firstname`,`user`.`lastname` 
FROM `video`
INNER JOIN `user` ON `video`.`user`=`user`.`id` 
WHERE `video`.`user`='$userid'
		ORDER BY `video`.`id` ASC ")->result();
        }
        else
        {
		$query=$this->db->query("SELECT `video`.`id`, `video`.`user`, `video`.`title`, `video`.`description`,`video`. `location`,`video`. `lat`,`video`. `long`, `video`.`timestamp`, `video`.`rating`, `video`.`videourl`, `video`.`status`, `video`.`category`,`user`.`firstname`,`user`.`lastname` 
FROM `video`
INNER JOIN `user` ON `video`.`user`=`user`.`id` 
WHERE `video`.`user`='$userid' AND `video`.`category`='$category'
		ORDER BY `video`.`id` ASC ")->result();
        }
        
		return $query;
	}
    
    function getvideosbyuser($userid)
	{
		$query=$this->db->query("SELECT `video`.`id`, `video`.`user`, `video`.`title`, `video`.`description`,`video`. `location`,`video`. `lat`,`video`. `long`, `video`.`timestamp`, `video`.`rating`, `video`.`videourl`, `video`.`status`, `video`.`category`,`user`.`firstname`,`user`.`lastname` 
FROM `video`
LEFT OUTER JOIN `user` ON `video`.`user`=`user`.`id` 
WHERE `video`.`siteuser`='$userid'
		ORDER BY `video`.`id` DESC LIMIT 0,10")->result();
        
		return $query;
	}
    
    
	public function getstatusdropdown()
	{
		$status= array(
			 "1" => "Has Types",
			 "0" => "No Types",
			);
		return $status;
	}
	public function beforeedit( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'video' )->row();
		return $query;
	}
	public function editvideo($id,$user,$title,$description,$location,$lat,$long,$rating,$videourl,$status,$category,$siteuser,$siteurl)
	{
		$data = array(
			'user' => $user,
			'title' => $title,
			'description' => $description,
			'location' => $location,
			'lat' => $lat,
			'long' => $long,
			'rating' => $rating,
			'videourl' => $videourl,
			'category' => $category,
			'siteuser' => $siteuser,
			'siteurl' => $siteurl,
			'status' => $status
		);
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'video', $data );
		
		return 1;
	}
	function deletevideo($id)
	{
		$query=$this->db->query("DELETE FROM `video` WHERE `id`='$id'");
		
	}
	
	public function getvideodropdown()
	{
		$query=$this->db->query("SELECT * FROM `video`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->title;
		}
		
		return $return;
	}
	
	public function getvideobyoperatordropdown()
	{
        $userid=$this->session->userdata('id');
		$query=$this->db->query("SELECT * FROM `video` WHERE `siteuser`='$userid'  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->title;
		}
		
		return $return;
	}
	
    
    function getallvideos()
	{
		$query=$this->db->query("SELECT `video`.`id`,`video`.`image`,`video`.`likes`,`video`.`views`, `video`.`user`, `video`.`title`, `video`.`description`,`video`. `location`,`video`. `lat`,`video`. `long`, `video`.`timestamp`, `video`.`rating`, `video`.`videourl`, `video`.`status`, `video`.`category`,`user`.`firstname`,`user`.`lastname` 
FROM `video`
LEFT OUTER JOIN `user` ON `video`.`user`=`user`.`id` 
LEFT OUTER JOIN `category` ON `video`.`category`=`category`.`name` 
		ORDER BY `video`.`id` DESC LIMIT 0,9 ")->result();
        
		return $query;
	}
    
    function getvideotagsbyvideo($id)
	{
		$query=$this->db->query("SELECT `videotags`.`id`, `videotags`.`video`, `videotags`.`tag`, `videotags`.`timestamp`,`video`.`title` AS `videotitle` 
FROM `videotags`
INNER JOIN `video` ON `videotags`.`video`=`video`.`id` WHERE `videotags`.`video`='$id'")->result();
        
		return $query;
	}
    
    function getvideobyid($id)
	{
		$query=$this->db->query("SELECT `video`.`id`,`video`.`image`,`video`.`likes`,`video`.`views`, `video`.`user`, `video`.`title`, `video`.`description`,`video`. `location`,`video`. `lat`,`video`. `long`, `video`.`timestamp`, `video`.`rating`, `video`.`videourl`, `video`.`status`, `video`.`category`,`user`.`firstname`,`user`.`lastname`,`user`.`contact` AS `usercontact` 
FROM `video`
LEFT OUTER JOIN `user` ON `video`.`user`=`user`.`id` 
LEFT OUTER JOIN `category` ON `video`.`category`=`category`.`name` WHERE `video`.`id`='$id' 
		ORDER BY `video`.`id` DESC ")->row();
		return $query;
	}
	function getrelatedvideosid($id){
	$query=$this->db->query("SELECT `relatedvideoid` FROM `relatedvideos` WHERE `videoid`='$id'");
		 if($query->num_rows() > 0) {
        $ids = $query->result();
    }
		return $ids;	
	}
	public function getrelatedvideos($multiplevideos){
		$returnarray=array();
		foreach ($multiplevideos as $row){
		$query=$this->db->query("SELECT `video`.`id`,`video`.`image`,`video`.`likes`,`video`.`views`, `video`.`user`, `video`.`title`, `video`.`description`,`video`. `location`,`video`. `lat`,`video`. `long`, `video`.`timestamp`, `video`.`rating`, `video`.`videourl`, `video`.`status`, `video`.`category`,`user`.`firstname`,`user`.`lastname`,`user`.`contact` AS `usercontact` 
FROM `video`
LEFT OUTER JOIN `user` ON `video`.`user`=`user`.`id` 
LEFT OUTER JOIN `category` ON `video`.`category`=`category`.`name` WHERE `video`.`id`='$row->relatedvideoid' 
		ORDER BY `video`.`id` DESC ")->row();
			
			array_push($returnarray,$query);
			
		}
		return $returnarray;
		 } 
    
    function getcategorydropdown()
	{
		$query=$this->db->query("SELECT * FROM `category`")->result();
        
		return $query;
	}
    
    function getvideosbysiteurl($siteurl)
	{
        $q="SELECT `video`.`id`, `video`.`user`, `video`.`title`, `video`.`description`,`video`. `location`,`video`. `lat`,`video`. `long`, `video`.`timestamp`, `video`.`rating`, `video`.`videourl`, `video`.`status`, `video`.`category`,`user`.`firstname`,`user`.`lastname` 
FROM `video`
LEFT OUTER JOIN `user` ON `video`.`user`=`user`.`id` 
WHERE `video`. `siteurl`='$siteurl'
		ORDER BY `video`.`id`";
//        echo $q;
		$query=$this->db->query("SELECT `video`.`id`,`video`. `user`,`video`. `title`,`video`. `description`,`video`. `location`,`video`. `lat`,`video`. `long`,`video`. `timestamp`,`video`. `rating`,`video`. `videourl`,`video`. `status`,`video`. `category`,`video`. `image`,`video`. `likes`,`video`. `views`,`video`. `siteuser`,`video`. `siteurl` ,`user`.`firstname`,`user`.`lastname`
FROM `video`  LEFT OUTER JOIN `user` ON `video`.`user`=`user`.`id` 
WHERE `video`.`siteurl`='$siteurl'
ORDER BY `video`.`id`")->result();
        
		return $query;
	}
    function getvideobyidforpopup($id)
	{
		$query=$this->db->query("SELECT `video`.`id`,`video`. `user`,`video`. `title`,`video`. `description`,`video`. `location`,`video`. `lat`,`video`. `long`,`video`. `timestamp`,`video`. `rating`,`video`. `videourl`,`video`. `status`,`video`. `category`,`video`. `image`,`video`. `likes`,`video`. `views`,`video`. `siteuser`,`video`. `id` ,`user`.`firstname`,`user`.`lastname`,`video`.`type` AS `type`,`video`.`productlink` AS `productlink`,`video`.`price` AS `price`
FROM `video`  LEFT OUTER JOIN `user` ON `video`.`user`=`user`.`id` 
WHERE `video`.`id`='$id'
ORDER BY `video`.`id`")->row();
        $query->tag=$this->db->query("SELECT `videotags`.`id`, `videotags`.`video`, `videotags`.`tag`, `videotags`.`timestamp`,`video`.`title` AS `videotitle` 
FROM `videotags`
INNER JOIN `video` ON `videotags`.`video`=`video`.`id` WHERE `videotags`.`video`='$id'")->result();
        $querycheck=$this->db->query("SELECT  * FROM `uservideolikes`
    WHERE `uservideolikes`.`video`='$id' AND `uservideolikes`.`user`='1'")->row();
        if(empty($querycheck))
        {
            $query->like=0;
        }
        else
        {
            $query->like=1;
        }
		return $query;
	}
    
	
	public function gettotallikesofvideo( $id )
	{
		
        $query=$this->db->query("SELECT COUNT(`id`) AS `likes` FROM `uservideolikes` WHERE `video`='$id'")->row();;
		return $query;
	}
	
    public function postvideofromapp($operator,$video)
	{
//        echo $video;
//        echo $operator;
		$data  = array(
			'siteuser' => $operator,
			'videourl' => $video
		);
		$query=$this->db->insert( 'video', $data );
		$videoid=$this->db->insert_id();
        $return = new stdClass;
        $return->videoID=$videoid;
        $return->videoURL="http://146.148.93.13/reviu-api/ReviuBackend/uploads/".$video;
		if(!$query)
			return  0;
		else
			return  $return;
	}
}
?>