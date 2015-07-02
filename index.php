<!DOCTYPE html>

<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet" type="text/css">
    <link href="css/mobile.css" rel="stylesheet" type="text/css">

    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <scirpt src="https://cdn.webrtc-experiment.com/ffmpeg_asm.js">
        </script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <style>
            video {
                width: 499px;
                height: 310px;
            }
            
            canvas {
                width: 499px !important;
                height: 310px !important;
            }
        </style>

        <script src="https://www.webrtc-experiment.com/RecordRTC.js">
        </script>
        <title>Reviu API</title>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
</head>
<?php ////$ip=! empty($_SERVER[ 'HTTP_X_FORWARDED_FOR']) ? $_SERVER[ 'HTTP_X_FORWARDED_FOR'] : $_SERVER[ 'REMOTE_ADDR']; //$ip="202.177.226.207" ; //$url="http://freegeoip.net/json/$ip" ; ////$url="http://freegeoip.net/json/202.177.226.207" ; //$ch=c url_init(); //echo $ip. " ip"; //curl_setopt($ch, CURLOPT_URL, $url); //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); //$data=c url_exec($ch); //curl_close($ch); //print_r($data); //if ($data) { // $location=j son_decode($data); // // $lat=$ location->latitude; // $lon = $location->longitude; //echo $lat; // echo $lon; // $sun_info = date_sun_info(time(), $lat, $lon); // print_r($sun_info); //} ?>

<body>
    <div class="container2" style="max-width:840px;">
        <div class="" style="min-height: 577px;">
            <div class="main-box">
                <div class="row">
                    <div class=" col-md-12">
                        <div class="head-top">
                            <img src="images/redbtn.png">
                            <img src="images/yellowbtn.png">
                            <img src="images/greenbtn.png">
                        </div>
                    </div>
                </div>
                <div class="pro-logo">
                    <div class="row">
                        <div class=" col-md-6">
                            <img src="images/snap.png">
                        </div>
                        <div class=" col-md-6">

                            <p class="name-tx">Powered by Reviu</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left:0px;margin-right:0px;">
                    <div class=" col-md-8">
                        <div class="right-box">
                            <div class="vid-box">
                                <div class="image-box">
                                    <div class="number">
                                        <p><span class="remainingsec">30</span> sec</p>
                                    </div>
                                    <h1 style="display:none;">
<!--
        <a href="https://github.com/muaz-khan/WebRTC-Experiment/tree/master/RecordRTC">RecordRTC</a>
        <a href="https://github.com/muaz-khan/WebRTC-Experiment/tree/master/RecordRTC-to-PHP">PHP</a>
        <a href="https://github.com/muaz-khan/WebRTC-Experiment/tree/master/ffmpeg">FFmpeg</a>
-->
    </h1>

                                    <video id="preview" controls style=" height: 300px; max-width: 100%; vertical-align: top; width: 100%;"></video>


                                    <!--                        <button id="" class="record-button" ></button>-->



                                </div>
                                <div class="buttons">
                                    <div class="row">
                                        <div class="col-xs-3">
                                                <button type="button" class="btn-defaults retake">Retake</button>

                                        </div>
                                        <div class="col-xs-6">
                                            <span class="position"><img src="images/camera.png" id="record">
                                            <img src="images/resume.png" style="display:none" onclick="nowresume()" class="nowresume">
                        <img src="images/pause.png" style="display:none" id="pause"></span>
                                        </div>
                                        <div class="col-xs-3">
                                            <a href="#">
                                                <button type="button" class="btn-defaultp">Preview</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider scroll">
                                    <div class="img-content addvideos">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="left-box pull-right">
                            <div class="left-back">

                                <div class="drop-down categorydropdown">

                                    <select name="Icecream Flavours" placeholder="Category" class="categoryclass">
                                    </select>
                                </div>
                                <div class="content-box">
                                    <div class="content-text">

                                        <input class="textbox titleclass" type="text" value="" placeholder="Title">
                                        <input class="textbox locationclass" type="text" value="" placeholder="Location" onchange="changelatlong()">
                                        <input class="textbox latclass" type="hidden" value="" placeholder="lat">
                                        <input class="textbox longclass" type="hidden" value="" placeholder="long">
                                        <input class="textbox productlinkclass" style="display:none;" type="text" value="" placeholder="Product Link">
                                        <p>Powered by Foursquar</p>
                                        <input class="textbox tagsclass" type="text" value="" placeholder="Tag">
                                        <h5>ratings</h5>

                                        <input class="ratingclass" type="range" min="0" max="5" value="0" step="0.1" onchange="rangevalue1.value=value" />
                                        <output id="rangevalue1"></output>
                                        <div class="bottom">

                                            <a class="stop" id="stop" href="#" disabled>publish</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            //        console.log('hiiiii');
            //        alert("hiii");

            $(".categoryclass").change(function () {
                var catval = $(".categoryclass").val();
                if (catval == "product") {
                    $(".locationclass").hide();
                    $(".productlinkclass").show();

                } else {
                    $(".locationclass").show();
                    $(".productlinkclass").hide();
                }
            });

            $.getJSON(
                "http://localhost/reviu-api/ReviuBackend/index.php/json/getcategorydropdownfront", {
                    //                id: "123"
                },
                function (data) {
                    console.log(data);
                    nodata = data;
                    categorydropdown(data);
                }


            );

            function categorydropdown(data) {
                console.log(data);
                $('.categorydropdown select').html('');
                for (var i = 0; i < data.length; i++) {
                    $(".categorydropdown select").append("<option value='" + data[i].id + "'>" + data[i].name + "</option>");

                }

                $(".categorydropdown select").append("<option value='product'>Product</option>");


            };

            $.getJSON(
                "http://localhost/reviu-api/ReviuBackend/index.php/json/getvideosbyuser/10", {
                    //                id: "123"
                },
                function (data) {
                    console.log(data);
                    nodata = data;
                    videosliders(data);
                }


            );

            function categorydropdown(data) {
                console.log(data);
                $('.categorydropdown select').html('');
                for (var i = 0; i < data.length; i++) {
                    $(".categorydropdown select").append("<option value='" + data[i].id + "'>" + data[i].name + "</option>");

                }

                $(".categorydropdown select").append("<option value='product'>Product</option>");


            };

            $.getJSON(
                "http://localhost/reviu-api/ReviuBackend/index.php/json/getvideosbyuser/10", {
                    //                id: "123"
                },
                function (data) {
                    console.log(data);
                    nodata = data;
                    videosliders(data);
                }


            );

            function videosliders(data) {
                $(".addvideos").html("");
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                    var lastindex = data[i].videourl.lastIndexOf("-merged.webm")
                    var imagename = "http://localhost/reviu-api/thumbnails/" + data[i].videourl.slice(0, lastindex) + ".png";

                    $(".addvideos").append("<img src='" + imagename + "' style='height: 85px;vertical-align: top;' data-video=" + data[i].videourl + ">");
                }
                $(".addvideos img").click(function () {
                    //                            console.log($(this).attr("data-video")); 
                    preview.src = "http://localhost/reviu-api/uploads/" + $(this).attr("data-video");
                    preview.play();
                    preview.muted = false;
                });

            };

        });

        function changelatlong() {
            console.log($('.locationclass').val());
            $.getJSON(
                "https://maps.googleapis.com/maps/api/geocode/json?address=" + $('.locationclass').val() + "&key=AIzaSyAvqKowJmLC_xd0N-8e6BoCZf4-gWThOZQ", {
                    //                address: $(".locationclass".val())
                },
                function (data) {
                    console.log(data);
                    $('.latclass').val(data.results[0].geometry.location.lat);
                    $('.longclass').val(data.results[0].geometry.location.lng);
                    //                nodata=data;
                    //                changeareadropdown(data);

                }

            );
        }


        // todo: this demo need to be updated for Firefox.
        // it currently focuses only chrome.
        function PostBlob(audioBlob, videoBlob, fileName) {
            var formData = new FormData();
            formData.append('filename', fileName);
            formData.append('audio-blob', audioBlob);
            formData.append('video-blob', videoBlob);
            xhr('save.php', formData, function (ffmpeg_output) {
                console.log(ffmpeg_output);
                var category = $(".categoryclass option:selected").attr("value");
                //                console.log(category);
                var title = $(".titleclass").val();
                //                console.log(title);
                var location = $(".locationclass").val();
                var tags = $(".tagsclass").val();
                var ratingclass = $(".ratingclass").val();
                //                console.log(ratingclass);
                var video = ffmpeg_output;
                var video2 = video;
                var videolength = video2.length;
                var value = videolength - 12;
                var value = value - 8;
                var imagename = video2.substr(8, value);
                var image = imagename + ".png";
                var siteurl = window.location.href;
                var siteuser = 10;
                console.log(siteuser);
                $.getJSON(
                    "http://localhost/reviu-api/ReviuBackend/index.php/json/postVideoforapi?title=" + $(".titleclass").val() + "&lat=" + $(".latclass").val() + "&tag=" + $(".tagsclass").val() + "&long=" + $(".longclass").val() + "&useremail=wohlig@wohlig.com&location=" + $(".locationclass").val() + "&rating=" + $(".ratingclass").val() + "&siteuser=" + siteuser + "&category=" + $(".categoryclass option:selected").attr("value") + "&video=" + video + "&image=" + image + "&siteurl=" + siteurl + "", {
                        //                id:1234
                    },
                    function (data) {
                        console.log(data);
                        //                console.log(data.results[0].geometry.location.lat);
                        //                console.log(data.results[0].geometry.location.lng);
                        //                $('.latitudeclass').val(data.results[0].geometry.location.lat);
                        //                $('.longitudeclass').val(data.results[0].geometry.location.lng);
                        ////                console.log(parsxed.results[0].geometry);
                        //                nodata = data;
                        // $("#store").html(data);
                        //                allenquiries(data);
                        //                userdetails(data);

                    }
                );
                //                console.log(tags);
                document.querySelector('h1').innerHTML = ffmpeg_output.replace(/\\n/g, '<br />');
                preview.src = ffmpeg_output;
                preview.play();
                preview.muted = false;
            });
        }
        var record = document.getElementById('record');
        var pause = document.getElementById('pause');
        var stop = document.getElementById('stop');
        var audio = document.querySelector('audio');
        var recordVideo = document.getElementById('record-video');
        var preview = document.getElementById('preview');
        var container = document.getElementById('container');
        var isFirefox = !!navigator.mozGetUserMedia;
        var recordAudio, recordVideo;
        var shouldstop = true;
        //        var pausestop=10;
        var stopafter = 29;
        //        var pausenum=1;

        var myVar = setInterval(function () {
            myTimer()
        }, 1000);
        var timetobe=0;
        var videostate="pause";
        function myTimer() {
            if(videostate=="play")
            {
                timetobe++;
            }
        }

        record.onclick = function () {
            videostate="play";
            timetobe=0;
            shouldstop = true;
            //            pausenum=1;
            $("#preview").get(0).ontimeupdate = function () {

                //                var pausetime=pausenum*pausestop;
                var curtime = $("#preview").get(0).currentTime;
                console.log(curtime);
                if (shouldstop) {
                    $(".remainingsec").text(parseInt(stopafter - timetobe));
                    if (timetobe > stopafter) {
                        $(".remainingsec").text(0);
                        shouldstop = true;
                        $("#stop").click();
                    }
                }
            };


            $("#record").hide();
            $("#pause").show();
            $(".nowresume").hide();

            record.disabled = true;
            !window.stream && navigator.getUserMedia({
                audio: true,
                video: true
            }, function (stream) {
                window.stream = stream;
                onstream();
            }, function (error) {
                alert(JSON.stringify(error, null, '\t'));
            });
            window.stream && onstream();

            function onstream() {
                preview.src = window.URL.createObjectURL(stream);
                preview.play();
                preview.muted = true;
                recordAudio = RecordRTC(stream, {
                    bufferSize: 16384,
                    onAudioProcessStarted: function () {
                        if (!isFirefox) {
                            recordVideo.startRecording();
                        }
                    }
                });
                recordVideo = RecordRTC(stream, {
                    type: 'video'
                });
                recordAudio.startRecording();
                stop.disabled = false;
            }
        };
        var fileName;

        //        $("publish").click
        stop.onclick = function () {
            videostate="pause";
            timetobe=0;
            shouldstop = false;
            document.querySelector('h1').innerHTML = 'Getting Blobs...';
            record.disabled = false;
            stop.disabled = true;
            preview.src = '';
            preview.poster = 'load.gif';
            fileName = "videofile";
            if (!isFirefox) {
                recordAudio.stopRecording(function () {
                    document.querySelector('h1').innerHTML = 'Got audio-blob. Getting video-blob...';
                    recordVideo.stopRecording(function () {
                        document.querySelector('h1').innerHTML = 'Uploading to server...';
                        PostBlob(recordAudio.getBlob(), recordVideo.getBlob(), fileName);
                    });
                });
            }
        };

        function xhr(url, data, callback) {
            var request = new XMLHttpRequest();
            request.onreadystatechange = function (data) {
                if (request.readyState == 4 && request.status == 200) {
                    //console.log(data);
                    callback(request.responseText);
                }
            };
            request.open('POST', url);
            request.send(data);
        }

        pause.onclick = function () {
            console.log("Pause clicked");
            $(".nowresume").show();
            $("#pause").hide();
            videostate="pause";
            recordVideo.pauseRecording();
            recordAudio.pauseRecording();
            
            preview.pause();
            $("#preview").get(0).pause();
        }
        var nowresume = function () {
            videostate="play";
            $(".nowresume").hide();
            $("#pause").show();
            recordVideo.resumeRecording();
            recordAudio.resumeRecording();
            $("#preview").get(0).play();
        }
        
    </script>
    <script>
        $(document).ready(function () {
            $(".section").css("min-height", $(window).height());
            $(window).resize(function () {
                $(".section").css("min-height", $(window).height());
            });
            $(".retake").click(function() {
                record.onclick();
            });
        });
    </script>
</body>

</html>