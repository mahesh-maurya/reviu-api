<!DOCTYPE html>

<html>

<head>
         <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.remodal.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    


    <!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "17c77c69-67a4-44ac-84df-96581a0b17c6", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<style>
       .link-act{
  color: #ededed !important;
  background: #EF4D64 !important;
  border-radius: 50px !important;
  height: 42px !important;
  width: 42px !important;
  font-size: 22px !important;
  -webkit-transition: all 0.5s!important;
  -moz-transition: all 1s!important;
  cursor: pointer!important;
  text-align: center!important;
  font-size: 22px!important;
  padding: 10px 0px 0px 0px!important;
  text-align: center!important;
  margin: 0px 15px!important;
} 
    .det-share ul {
    list-style: none;
    display: block;
}

.det-share ul li {
    display: inline-block;
    text-align: center;
/*    margin: 0px 25px 0px 12px;*/
}
    .pops {
    background:rgb(255, 255, 255);
    width: 30%;
    text-align: center;
    padding: 16px;
    position: absolute;
    z-index: 9;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
          border: 4px;
}
    .over {
    background: rgba(0, 0, 0, 0.45);
    min-height: 445px;
    position: absolute;
     width: 96.5%;
    z-index: 1;
}
    .pops i.fa.fa-times {
  float: right;
  position: relative;
  z-index: 9;
  bottom: 17px;
  right: -13px;
  font-size: 18px;
          cursor: pointer;
}
    </style>

    <title>Reviu API</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    
<!--
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "17c77c69-67a4-44ac-84df-96581a0b17c6", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
-->
</head>
<?php
//print_r($message);
$fullvideopath="http://localhost/reviu-api/uploads/".$message->videourl;
$name=$message->firstname." ".$message->lastname;
//$rating=(float)$message->rating;
$rating=$message->rating;
$roundvalue=round($message->rating);
if($roundvalue==$message->rating)
{
    $rating=$roundvalue.".0";
}
//echo $rating;
?>

<body>
    <div class="container2" style="max-width:840px;">

        <div class="vide-box">
          <div class="over" style="display:none">
           <div class="pops">
           <i id="close" class="fa fa-times"></i>
 <span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_googleplus_large' displayText='Google +'></span>
            </div>
           </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="video-descs">
                        <div class="feed-det ">
                            <p class="rating"><?php echo $rating;?></p>
                            <h5><?php echo $message->title;?> <br><span> by <?php echo $name;?></span></h5>
                            <p class="pull-right">Powered by Reviu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="video-desc">

                        <div class="vid-desc">
                            <video width="100%" controls>
                                <source src='<?php echo $fullvideopath;?>' type="video/mp4">
                                    <source src="mov_bbb.ogg" type="video/ogg">

                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
<input type="hidden" name="video" class="videoclass" value="<?php echo $message->id;?>">
<input type="hidden" name="user" class="userclass" value="<?php echo $message->user;?>">
                    <div class="icon-fon pull-left">
                       
                        <i class="fa fa-users"></i>
                        <a href="" class="heartclass"  onclick="userlikes()"><i class="fa fa-heart link-act" id="heartid"></i></a>
                        <i id="show" class="fa fa-share"></i>

                    </div>

    <div class="det-share">
    <ul>
        <li style="  margin: 0px 50px 0px 0px;"><?php echo $message->views;?></li>
        <li>Like</li>
        <li >Share</li>
    </ul>
<!--
       <span><?php echo $message->views;?></span>
       
         <span style="margin: 0px 0px 0px 30px;">Like</span>
          <span style=" margin: 0px 0px 0px 30px;">Share</span>
-->
    </div>

                    <div class="pro-text">
                        <p>SnapDeal.com<span>Rs.5999</span>
                        </p>

                    </div>
                    <div class="tag-desc">
                        <span>tags</span>
                        <?php
                        foreach($message->tag as $row)
                        {
                        $tag=$row->tag;
                            ?>
                            <a href=""> <i><?php echo $tag;?></i>
                        </a>
                            <?php
                        }
                        ?>
<!--
                        <a href="#"> <i>lorum</i>
                        </a>

                        <a href="#"> <i>Bpsfjfgjjum</i>
                        </a>
-->
                    </div>
                    <div class="follow">
                        <a href="#"><img src="images/Monali.jpg"><span>Shalini Mehta</span></a>
                    </div>
                </div>
            </div>
        </div>

    </div>



</body>
<script>
    $( document ).ready(function() {
    
    viewcount();
        
    function viewcount() {
        $.getJSON(
            "<?php echo base_url(); ?>index.php/json/addviewcount?videoid="+$('.videoclass').val(), {
            },
            function (data) {
                console.log(data);
//                if(data == 1)
//                {
//                    $( "#heartid" ).addClass( "link-act" );
//                }
//                else if(data == -1)
//                {
//                    $( "#heartid" ).removeClass( "link-act" ).addClass( "" );
//                }
//                $('.latclass').val(data.results[0].geometry.location.lat);
//                $('.longclass').val(data.results[0].geometry.location.lng);
//                nodata=data;
//                changeareadropdown(data);

            }

        );
    }
        
        
        
    console.log( "ready!" );
        var like=<?php echo $message->like;?>;
        console.log(like);
        if(like==0)
        {
            $( "#heartid" ).removeClass( "link-act" ).addClass( "" );
        }
        
        $("#show").click(function(){
    $(".over").show(300);
});
        $("#close").click(function(){
    $(".over").hide(300);
});
});
    function userlikes() {
        var user=$('.userclass').val();
        var user=1;
//        $( "p" ).addClass( "myClass yourClass" );
        $.getJSON(
            "<?php echo base_url(); ?>index.php/json/adduserlikes?user="+user+"&videoid="+$('.videoclass').val(), {
            },
            function (data) {
                console.log(data);
                if(data == 1)
                {
                    $( "#heartid" ).addClass( "link-act" );
                }
                else if(data == -1)
                {
                    $( "#heartid" ).removeClass( "link-act" ).addClass( "" );
                }
//                $('.latclass').val(data.results[0].geometry.location.lat);
//                $('.longclass').val(data.results[0].geometry.location.lng);
//                nodata=data;
//                changeareadropdown(data);

            }

        );
    }
</script>
    
</html>