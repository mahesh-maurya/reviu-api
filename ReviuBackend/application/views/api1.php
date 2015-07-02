<!DOCTYPE html>

<html>

<head>
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
    </script>
    <!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
    </style>

    <title>Reviu API</title>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
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
                        <i class="fa fa-street-view"></i>
                        <a href="" class="heartclass"  onclick="userlikes()"><i class="fa fa-heart link-act" id="heartid"></i></a>
                        <i class="fa fa-share"></i>

                    </div>

    <div class="det-share">
       <span>View Map</span>
         <span style="padding-right:8px;">Like</span>
          <span>Share</span>
    </div>

                    <div class="pro-text">
                        <p>SnapDeal.com<span>Rs.5999</span><a href="">Buy</a>
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
                        <a href="#"><img src="images/Monali.jpg"><span>Shalini Mehta</span><i>+</i>Follow</a>
                    </div>
                </div>
            </div>
        </div>

    </div>



</body>
<script>
    $( document ).ready(function() {
    console.log( "ready!" );
        var like=<?php echo $message->like;?>;
        console.log(like);
        if(like==0)
        {
            $( "#heartid" ).removeClass( "link-act" ).addClass( "" );
        }
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