<!DOCTYPE html>
<html>
    <head>
        <title>Ritabrata</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="portfolio of ritabrata goswami.">
        <meta name="author" content="ritabrata goswami">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
        <!-- <link rel="stylesheet" href="./portfolio-files/portfolio_css/portfolio_home_lwrx.css"> -->
        <script>
            $(document).ready(() => {
                // $('body').css({"background-image":"none"}).delay(50).fadeOut();
                $("#first-part").delay(200).fadeIn(); 
                $("#first-part").delay(2200).fadeOut(); 
                $("#second-part").delay(3300).fadeIn(); 
                $("#second-part").delay(2500).fadeOut(); 
                $("#third-part").delay(6700).fadeIn();
                // $('body').css({"background-image":"url('portfolio-files/photos/wallpapersden.com_programming-coding-language.jpg')", "background-repeat":"no-repeat", "background-attachment":"fixed", "background-position":"center", "line-height":"1.5em", "margin":"0px"}).delay(5700).fadeIn();
            });
        </script>
        <style type="text/css">
        html {scroll-behavior:smooth;}
        header, section, footer, aside, nav, article, figure, figcaption {display: block;}
        .wrp{
            margin:50px auto 50px auto; 
            border:1px solid #ffffff; 
            background-color:white; 
            width: 1100px;
            border-radius: 2px;
        }
        body {
            background-image:url("./portfolio-files/photos/wallpapersden.com_programming-coding-language.jpg");
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-position: center;
            /* font-family: Georgia, times, serif; */
            line-height: 1.5em;
            margin: 0px;
        }
        #social-media-item-container{
            float:right; 
            margin-top:7px;
        }
        .social-media-stackoverflow{
            background: #1f1f1f;
            color:white;
            width:30px;
            height:30px;
            padding:6px 4px;
            margin-right:6px;
            border-radius:50%;
        }
        .social-media-stackoverflow:hover{
            transition: 0.3s;
            box-shadow:0px 3px 5px #777777;
        }
        .social-media-git{
            background: #1f1f1f;
            color:white;
            width:30px;
            height:30px;
            padding:6px 2px;
            margin-right:6px;
            border-radius:50%;
        }
        .social-media-git:hover{
            transition: 0.3s;
            box-shadow:0px 3px 5px #777777;
        }
        .social-media-fb{
            background: #1f1f1f;
            color:white;
            width:30px;
            height:30px;
            padding:6px 10px;
            margin-right:5px;
            border-radius:50%;
        }
        .social-media-fb:hover{
            transition: 0.3s;
            box-shadow:0px 3px 5px #777777;
        }
        #visit-profile{
            background:#1f1f1f;
            color:white;
            font-size:14px;
            padding:5px 10px;
            margin-left:15px;
            border-radius:2px;
        }
        #visit-profile:hover{
            cursor:pointer;
            transition:0.3s;
            background:#777777;
        }
        #brightness-container{margin-top:60px;}
        #background-adjustment{
            float:right;
            /* padding:0px 8px; */
            margin-right:10px;
            font-size:13px;
        }
        #sun-icon{display:none}
        #about-container{
            margin-top:40px;
        }
        #photo{
            width:70px;
            height:70px;
            border-radius:50%;
            margin-right: 10px;
        }
        .message-container{
            width:80%;
            margin:auto;
            /* margin-top: 300px; */
            border-radius: 3px;
            box-shadow: 0px 3px 5px #777777;
        }
        .field{font-size:13.7px;}
        .touch{cursor:pointer;}
        .output-container{
            display: none;
            position:fixed;
            z-index: 2;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            top: 0;
            padding-top: 100px;
        }
        .display-box{
            width:600px;
            border-radius: 2px;
            margin:auto;
        }
        .close-model:hover{
            color:red;
            transition:0.5s;
        }
        .upload-logo {
            padding: 3px 8px;
            background: #000000;
            border-radius: 45px; 
            width: 30px;
            height:30px;
        /* border: 5px solid #00cc44; */
            margin: auto;
        }
        #wait-container{
            display: none;
            position:fixed;
            z-index: 2;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            top: 0;
            padding-top: 100px;
        }
        #wait{
            display:none;
            width:69px;
            height:89px;
            position:absolute;
            top:50%;
            left:50%;
            padding:2px;
        }
        .to-top {
            display: none; 
            position: fixed;
            z-index: 5;
            transition: 1s;
            top: 80%;
            right: 3%;
            /* float:right; */
        }
        .project-container{
            width:1000px; 
            margin-left:60px;
        }
        .code-box{
            width:220px;
            height:300px;
            background:#e6e6e6;
            box-shadow:0px 5px 3px #777777;
            float:left;
            margin-right:10px;
            margin-bottom:10px;
        }
        .code-box:hover{
            transition:0.5s;
            box-shadow:0px 8px 3px #777777;
        }
        #inside-box{
            width:200px;
            height:100px;
            border: 1px solid #f2f2f2;
            margin:auto;
            background:#ffffff;
        }
        .btn{
            width:100%;
            top:100%;
        }
        #contact-container{clear: left;}
        .project-img{
            width:200px;
            height:100px;
            opacity:0.7;
        }
        .project-img:hover{
            opacity:0.9;
            transition:0.3s;
        }
        #lwr-brightness-container{display:none;}
        @media only screen and (max-width: 1230px) {
            .project-container{
                width:800px; 
                margin-left:70px;
            }
            .wrp{
                margin:50px auto 50px auto; 
                border:1px solid #ffffff; 
                background-color:white; 
                width: 900px;
                border-radius: 2px;
            }
        } 
        @media only screen and (max-width: 1000px) {
            .project-container{
                width:500px; 
                margin-left:90px;
            }
            .wrp{
                margin:50px auto 50px auto; 
                border:1px solid #ffffff; 
                background-color:white; 
                width: 700px;
                border-radius: 2px;
            }
        }
        @media only screen and (max-width: 850px) {
            .project-container{
                width:500px; 
                margin-left:15px;
            }
            .wrp{
                margin:50px auto 50px auto; 
                border:1px solid #ffffff; 
                background-color:white; 
                width: 550px;
                border-radius: 2px;
            }
        }
        @media only screen and (max-width: 630px) {
            .project-container{
                width:400px; 
                margin-left:100px;
            }
            .wrp{
                margin:50px auto 50px auto; 
                border:1px solid #ffffff; 
                background-color:white; 
                width: 480px;
                border-radius: 2px;
            }
        }
        @media only screen and (max-width: 570px) {
            .wrp{
                margin:50px auto 50px auto; 
                border:1px solid #ffffff; 
                background-color:white; 
                width: 400px;
                border-radius: 2px;
            } 
            /* body{background-image:none;} */
            #brightness-container{display:none;}
            #lwr-sun-icon{display:none}
            #lwr-brightness-container{
                display:block;
                margin-top:20px;
            }
            #lwr-background-adjustment{
                margin-left:40%;
            }
            #lwr-moon-icon{text-align:center;}
            #lwr-sun-icon{text-align:center;}
            /* .code-box{text-align:center;} */
            /* .code-box{
                width:220px;
                height:300px;
            }
            #inside-box{
                width:70%;
                height:70px;
            }
            .project-img{
                width:70%;
                height:70px;
                opacity:0.7;
            } */
            .project-container{
                width:380px; 
                margin-left:60px;
            }
            #visit-profile{padding:3px 10px;}
            /* #photo{display:none;} */
        }
        @media only screen and (max-width: 520px) {
            .wrp{
                width:100%; 
                border:none;
            } 
            body{background-image:none;}
            .project-container{
                width:10%; 
                /* border: 1px solid #ffff00; */
            }
            .code-box{margin-left:12%;}
        }
        @media only screen and (max-width: 390px){
            .code-box{width:190px;}
            #inside-box{
                width:180px;
                height:80px;
            }
            .project-img{
                width:180px;
                height:80px;
                opacity:0.7;
            }
        }
        </style>
    </head>
    <body>
        <div id="first-part" style="display:none;">
            <style type = "text/css">
                #welcomin-one {
                    color: #005ce6; 
                    text-align: center; 
                    margin-top: 250px; 
                    font-family: arial; 
                    font-size: 40px;
                    font-weight: bold;
                }
                #welcomin-one-background{
                    position:fixed;
                    z-index: 2;
                    width: 100%;
                    height: 100%;
                    background: white;
                    top: 0;
                    padding-top: 100px;
                }
                @media only screen and (max-width: 850px) {#welcomin-one {font-size: 30px;}}
                @media only screen and (max-width: 450px) {#welcomin-one {font-size: 20px;}}
            </style>
            <div id="welcomin-one-background">
                <div id = "welcomin-one">Loading<span id = "dot1" style = "display: none;">.</span><span id = "dot2" style = "display: none;">.</span><span id = "dot3" style = "display: none;">.</span></div>
            </div>
            <script>
                $(document).ready(()=>{
                    $("#dot1").delay(1000).fadeIn(); 
                    $("#dot2").delay(1500).fadeIn(); 
                    $("#dot3").delay(2000).fadeIn();
                });
            </script>
        </div>
        <div id="second-part" style="display:none;">
            <style type = "text/css">
                #welcomin-two {
                    color: #005ce6; 
                    text-align: center; 
                    margin-top: 250px; 
                    font-family: arial; 
                    font-size: 40px; 
                    font-weight: bold;
                }
                #welcomin-two-background{
                    position:fixed;
                    z-index: 2;
                    width: 100%;
                    height: 100%;
                    background: white;
                    top: 0;
                    padding-top: 100px;
                }
                @media only screen and (max-width: 850px) {#welcomin-two {font-size: 30px;}}
                @media only screen and (max-width: 450px) {#welcomin-two {font-size: 20px;}}
            </style>
            <div id="welcomin-two-background">
                <div id = "welcomin-two">Welcome To Ritabrata's Portfolio</div>
            </div>
        </div>
        <div id="third-part" style="display:none;">
            <div class="wrp" id="wrapper">
                <div id="social-media-item-container">
                    <span class="social-media-stackoverflow">
                        <a href="https://stackoverflow.com/users/19814317/ritabrata-goswami" target="_blank" title="stack-overflow"><i class="fa fa-stack-overflow" style="font-size:19px;"></i></a>
                    </span>
                    <span class="social-media-git">
                        <a href="https://github.com/Ritabrata-Goswami" target="_blank" title="github"><i class="fa fa-github" style="font-size:19px; margin-left:5px; margin-top:1px;"></i></a>
                    </span>
                    <span class="social-media-fb">
                        <a href="https://www.facebook.com/ritabrata.goswami.98/" target="_blank" title="facebook"><i class="fa fa-facebook-f" style="font-size:16px;"></i></a>
                    </span>
                </div>
                <div id="brightness-container" class="">
                    <span id="background-adjustment">
                        <span id="moon-icon">Adjustment: <i class="fa fa-moon-o icon-for-adjustment" style="font-size:20px; cursor:pointer;" title="dark mode"></i></span>
                        <span id="sun-icon">Adjustment: <i class="fa fa-sun-o icon-for-adjustment" style="font-size:20px; cursor:pointer;" title="bright mode"></i></span>
                    </span>
                    <!-- <span><i class="fa fa-sun-o" style="font-size:17px;"></i></span> -->
                </div>
                <span id="visit-profile">Profile</span>
                <div id="about-container" class="w3-padding">
                    <h3>About</h3>
                    <hr style="width:50%; height:0.5px; background:#1f1f1f;"/>
                    <img id="photo" title="Ritabrata Goswami" onerror="this.onerror=null; this.src='portfolio-files/photos/upload-user-icon.jpg'" src="./portfolio-files/photos/profile-photo.jpg"/>
                    <p style="font-size:13.5px; line-height:25px;">Hello to you! I'm Ritabrata Goswami backend developer. I know PHP, Laravel, Javascript, NodeJS, Python, Flask. My favourit backend language to work is PHP as it is one of the most simple and demanded backend language that required by almost all the companies across the globe. Apart from backend language i also know MySQL and SQL-server. At the UI, i design web pages by basic HTML, CSS, Javascript and W3.css. Besides my development career i have degree in Electrical Engineering. I have also keen interest on recent technological trends such as Electric Vehicles, Re-newable energy development, Hydrogen Fuel cell, Traction Engineering. In free time i like to spend on youtube videos, games and chat with friends.</p>
                </div>
                <div class="w3-padding">
                    <h3>Projects</h3>
                    <hr style="width:50%; height:0.5px; background:#1f1f1f;"/>

                    @if(count($fetch_val_project) > 0)
                        <div class="w3-padding project-container">
                        @foreach($fetch_val_project as $result)
                            @if($result->type == 'PHP')
                            <div class="code-box">
                                <div class="w3-bar" style="font-size:11px; text-align:center;">{{$result->type}}</div>
                                <div id="inside-box">
                                    <img src="./portfolio-files/photos/PHP-logo.svg.png" class="project-img"/>
                                </div>
                                <div style="font-size:9px; text-align:center;">Uploaded: {{explode(" ",$result->time)[0]}}</div>
                                <div class="w3-center w3-padding" style="font-size:12px;">{{$result->description}}</div>
                                <div class="w3-padding">
                                    <a  href="./portfolio-files/upload-project/{{$result->file}}" download><button class="btn w3-button w3-blue w3-hover-black">Download</button></a>
                                </div>
                            </div>
                            @endif
                            @if($result->type == 'Laravel')
                            <div class="code-box">
                                <div class="w3-bar" style="font-size:11px; text-align:center;">{{$result->type}}</div>
                                <div id="inside-box">
                                    <img src="./portfolio-files/photos/laravel-logo.png" class="project-img"/>
                                </div>
                                <div style="font-size:9px; text-align:center;">Uploaded: {{explode(" ",$result->time)[0]}}</div>
                                <div class="w3-center w3-padding" style="font-size:12px;">{{$result->description}}</div>
                                <div class="w3-padding">
                                    <a  href="./portfolio-files/upload-project/{{$result->file}}" download><button class="btn w3-button w3-blue w3-hover-black">Download</button></a>
                                </div>
                            </div>
                            @endif
                            @if($result->type == 'Javascript')
                            <div class="code-box">
                                <div class="w3-bar" style="font-size:11px; text-align:center;">{{$result->type}}</div>
                                <div id="inside-box">
                                    <img src="./portfolio-files/photos/JS-logo.png" class="project-img"/>
                                </div>
                                <div style="font-size:9px; text-align:center;">Uploaded: {{explode(" ",$result->time)[0]}}</div>
                                <div class="w3-center w3-padding" style="font-size:12px;">{{$result->description}}</div>
                                <div class="w3-padding">
                                    <a  href="./portfolio-files/upload-project/{{$result->file}}" download><button class="btn w3-button w3-blue w3-hover-black">Download</button></a>
                                </div>
                            </div>
                            @endif
                            @if($result->type == 'NodeJS')
                            <div class="code-box">
                                <div class="w3-bar" style="font-size:11px; text-align:center;">{{$result->type}}</div>
                                <div id="inside-box">
                                    <img src="./portfolio-files/photos/nodejs-logo.png" class="project-img"/>
                                </div>
                                <div style="font-size:9px; text-align:center;">Uploaded: {{explode(" ",$result->time)[0]}}</div>
                                <div class="w3-center w3-padding" style="font-size:12px;">{{$result->description}}</div>
                                <div class="w3-padding">
                                    <a  href="./portfolio-files/upload-project/{{$result->file}}" download><button class="btn w3-button w3-blue w3-hover-black">Download</button></a>
                                </div>
                            </div>
                            @endif
                            @if($result->type == 'Python')
                            <div class="code-box">
                                <div class="w3-bar" style="font-size:11px; text-align:center;">{{$result->type}}</div>
                                <div id="inside-box">
                                    <img src="./portfolio-files/photos/159-1595848_python-logo-png-transparent-background-python-logo-png.png" class="project-img"/>
                                </div>
                                <div style="font-size:9px; text-align:center;">Uploaded: {{explode(" ",$result->time)[0]}}</div>
                                <div class="w3-center w3-padding" style="font-size:12px;">{{$result->description}}</div>
                                <div class="w3-padding">
                                    <a  href="./portfolio-files/upload-project/{{$result->file}}" download><button class="btn w3-button w3-blue w3-hover-black">Download</button></a>
                                </div>
                            </div>
                            @endif
                            @if($result->type == 'Flask')
                            <div class="code-box">
                                <div class="w3-bar" style="font-size:11px; text-align:center;">{{$result->type}}</div>
                                <div id="inside-box">
                                    <img src="./portfolio-files/photos/flask-logo.jpg" class="project-img"/>
                                </div>
                                <div style="font-size:9px; text-align:center;">Uploaded: {{explode(" ",$result->time)[0]}}</div>
                                <div class="w3-center w3-padding" style="font-size:12px;">{{$result->description}}</div>
                                <div class="w3-padding">
                                    <a  href="./portfolio-files/upload-project/{{$result->file}}" download><button class="btn w3-button w3-blue w3-hover-black">Download</button></a>
                                </div>
                            </div>
                            @endif
                            @if($result->type == 'HTML,CSS,JS')
                            <div class="code-box">
                                <div class="w3-bar" style="font-size:11px; text-align:center;">{{$result->type}}</div>
                                <div id="inside-box">
                                    <img src="./portfolio-files/photos/HTML-CSS-JS.jpg" class="project-img"/>
                                </div>
                                <div style="font-size:9px; text-align:center;">Uploaded: {{explode(" ",$result->time)[0]}}</div>
                                <div class="w3-center w3-padding" style="font-size:12px;">{{$result->description}}</div>
                                <div class="w3-padding">
                                    <a  href="./portfolio-files/upload-project/{{$result->file}}" download><button class="btn w3-button w3-blue w3-hover-black">Download</button></a>
                                </div>
                            </div>
                            @endif
                            @if($result->type == 'Data Analisys')
                            <div class="code-box">
                                <div class="w3-bar" style="font-size:11px; text-align:center;">{{$result->type}}</div>
                                <div id="inside-box">
                                    <img src="./portfolio-files/photos/8006551_1587324696_data analysis.jpg" class="project-img"/>
                                </div>
                                <div style="font-size:9px; text-align:center;">Uploaded: {{explode(" ",$result->time)[0]}}</div>
                                <div class="w3-center w3-padding" style="font-size:12px;">{{$result->description}}</div>
                                <div class="w3-padding">
                                    <a  href="./portfolio-files/upload-project/{{$result->file}}" download><button class="btn w3-button w3-blue w3-hover-black">Download</button></a>
                                </div>
                            </div>
                            @endif
                            @if($result->type == 'Machine Learning')
                            <div class="code-box">
                                <div class="w3-bar" style="font-size:11px; text-align:center;">{{$result->type}}</div>
                                <div id="inside-box">
                                    <img src="./portfolio-files/photos/machine-learning-examples-applications.png" class="project-img"/>
                                </div>
                                <div style="font-size:9px; text-align:center;">Uploaded: {{explode(" ",$result->time)[0]}}</div>
                                <div class="w3-center w3-padding" style="font-size:12px;">{{$result->description}}</div>
                                <div class="w3-padding">
                                    <a  href="./portfolio-files/upload-project/{{$result->file}}" download><button class="btn w3-button w3-blue w3-hover-black">Download</button></a>
                                </div>
                            </div>
                            @endif
                            @if($result->type == 'Deep Learning')
                            <div class="code-box">
                                <div class="w3-bar" style="font-size:11px; text-align:center;">{{$result->type}}</div>
                                <div id="inside-box">
                                    <img src="./portfolio-files/photos/machine-learning-examples-applications.png" class="project-img"/>
                                </div>
                                <div style="font-size:9px; text-align:center;">Uploaded: {{explode(" ",$result->time)[0]}}</div>
                                <div class="w3-center w3-padding" style="font-size:12px;">{{$result->description}}</div>
                                <div class="w3-padding">
                                    <a  href="./portfolio-files/upload-project/{{$result->file}}" download><button class="btn w3-button w3-blue w3-hover-black">Download</button></a>
                                </div>
                            </div>
                            @endif
                            @if($result->type == 'SQL' || $result->type == 'NoSQL')
                            <div class="code-box">
                                <div class="w3-bar" style="font-size:11px; text-align:center;">{{$result->type}}</div>
                                <div id="inside-box">
                                    <img src="./portfolio-files/photos/sql-logo.jpg" class="project-img"/>
                                </div>
                                <div style="font-size:9px; text-align:center;">Uploaded: {{explode(" ",$result->time)[0]}}</div>
                                <div class="w3-center w3-padding" style="font-size:12px;">{{$result->description}}</div>
                                <div class="w3-padding">
                                    <a  href="./portfolio-files/upload-project/{{$result->file}}" download><button class="btn w3-button w3-blue w3-hover-black">Download</button></a>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        </div>
                    @else
                        <div class="w3-padding w3-margin-top">
                            <h4 class="w3-center">No Projects Available Right Now.</h4>
                        </div>
                    @endif
                    
                </div>
                <div id="contact-container" class="w3-padding">
                    <h3>Contact</h3>
                    <hr style="width:50%; height:0.8px; background:#000000;"/>
                    <div class="message-container">
                        <div class="w3-card-4">
                          <div class="w3-container w3-green">
                            <h5 class="w3-padding-small">Fill the below fields</h5>
                          </div>
                          <div class="w3-padding w3-flat-clouds" id="fields-container">
                          <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}"/>
                             <p><label class="touch" for="enter-name">Name:</label><input type="text" name="enter_name" id="enter-name" placeholder="Enter your name" class="w3-input w3-border w3-padding field"/></p>
                             <p><label class="touch" for="enter-number-email">Email:</label><input type="text" name="enter-number-email" id="enter-number-email" placeholder="Enter your phone or email" class="w3-input w3-border w3-padding field"/></p>
                             <p><label class="touch" for="enter-message">Message:</label><textarea name="enter-message" id="enter-message" placeholder="Enter messages" class="w3-input w3-border w3-padding field" style="height:90px;"></textarea></p>
                             <p style="text-align:center; font-size:12px;"><span style="font-weight:bold;">Upload File</span> <i>(Only jpg, jpeg, png, pdf, txt, csv, docx, zip extensions are allowed. Limit up to 2MB.)</i></p>
                             <div class = 'upload-logo w3-margin-top'>
                                <label for="upload-file" class = ''>
                                  <i class = 'fa fa-upload w3-text-white' id="main-upload-icon" style="cursor:pointer;"></i>
                                  <input type = 'file' id = 'upload-file' style = 'display:none;'/>
                                </label>
                             </div>
                             <button class="w3-button w3-blue w3-hover-black" id="submit-btn" style="width:100%; cursor:pointer; margin-top:15px; border-radius:2px;">send</button>
                          </div>
                        </div>
                    </div>
                </div>
                <div id="lwr-brightness-container" class="">
                    <span id="lwr-background-adjustment">
                        <span id="lwr-moon-icon">Adjustment: <i class="fa fa-moon-o icon-for-adjustment" style="font-size:20px; cursor:pointer;" title="dark mode"></i></span>
                        <span id="lwr-sun-icon">Adjustment: <i class="fa fa-sun-o icon-for-adjustment" style="font-size:20px; cursor:pointer;" title="bright mode"></i></span>
                    </span>
                </div>
                <div class="w3-bar w3-black w3-padding-large w3-margin-top" style="text-align:center;">
                    <span style="font-size:11px;">&copy; Ritabrata Goswami - April 2023</span>
                </div>
            </div>

            <button class = 'w3-button w3-btn w3-blue w3-hover-green to-top' id = 'top'><a href = '#wrapper'><i class = 'fa fa-arrow-up'> Top</i></a></button>
    
            <div class="output-container" id="output-container">
                <div class="display-box w3-flat-wet-asphalt w3-padding">
                    <div class = "close-model" style = 'font-size: 30px; font-weight: bold; float: right; cursor:pointer;' id="cut-display">&times;</div>
                    <div id="content" style="text-align:center; margin-top:10px; margin-bottom:5px; font-size:14px;"></div>
                </div>
            </div>
        </div>

        <div id="wait-container">
            <div id="wait" style="">
                <i class="fa fa-spinner w3-spin" style="font-size:60px; color:#ffffcc;"></i>
                <span class="w3-text-white" style="font-size:20px;">Waiting...</span>
            </div>
        </div>

        <script>
            $(document).ready(()=>{
                $("#cut-display").click(()=>{$('#output-container').fadeOut(250);});
            });
            $(document).ready(()=>{
                $(document).ajaxStart(function(){
                    $("#wait-container").css("display", "block");
                    $("#wait").css("display", "block");
                });
                $(document).ajaxComplete(function(){
                    $("#wait-container").css("display", "none");
                    $("#wait").css("display", "none");
                });
                $("#visit-profile").click(function(){
                    $("body").load("/profile");
                    // window.history.pushState('demo_profile.html', 'xyz', '/Ritabrata/html/demo_profile.html');
                    window.location.href = '/profile';
                });
            });
            window.onclick = (event) => {
                if(event.target == document.getElementById("output-container")){document.getElementById("output-container").style.display = 'none';}
            }

            document.getElementById('submit-btn').addEventListener('click',()=>{
                var nameInsert = document.getElementById('enter-name').value;
                var emailInsert = document.getElementById('enter-number-email').value;
                var messageInsert = document.getElementById('enter-message').value;
                var getFile = document.getElementById('upload-file').files[0];
                var token_val = document.getElementById('csrf').value;

                var atTheRate = emailInsert.indexOf("@");
                var dotPosition = emailInsert.lastIndexOf(".");
                if(nameInsert == '' || emailInsert == '' || messageInsert == '')
                {
                    document.getElementById('output-container').style.display = 'block';
                    document.getElementById('content').innerHTML = '<span style="color:#ff6666;">Fields can\'t be left blank!</span>';
                    console.log('Fields can\'t be empty!');
                    return false;
                }
                else if(atTheRate < 1 || dotPosition < 6)
                {
                    document.getElementById('output-container').style.display = 'block';
                    document.getElementById('content').innerHTML = '<span style="color:#ff6666;">Please Provide Proper Email!</span>';
                    console.log('Email Format Is Wrong!');
                    return false;
                }
                else if(getFile === undefined)
                {
                    $.ajax({  
                        method:'POST',
                        url:'/message',
                        data: {
                            _token:token_val,
                            nameInsert:nameInsert,
                            emailInsert:emailInsert,
                            messageInsert:messageInsert,
                            fileInsert:'NULL'
                        },
                        // contentType:'application/json',
                        // dataType:'json',
                        success: (result) => {
                            console.log(result);
                            var successResult = JSON.parse(result);
                            if(successResult)
                            {
                                console.log(successResult);
                                document.getElementById('output-container').style.display = 'block';
                                document.getElementById('content').innerHTML = '<span style="text-align:center;"><i class="fa fa-check-circle" style="font-size:30px; color:#47d147;"></i></span><br/><span style="text-align:center; color:#47d147; font-size:17px;">' + successResult.message + '</span>';   
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) 
                        {
                            document.getElementById('output-container').style.display = 'block';
                            document.getElementById('content').innerHTML = 'Error Code:- ' + '<span style="color:#ff6666;">' + jqXHR.status + '</span>.<br/> Error Status:- ' + '<span style="color:#ff6666;">' + errorThrown + '!</span>';
                            console.log(jqXHR.status + '---' + errorThrown);
                        }
                    });
                    return true;
                }
                else
                {
                    var formData = new FormData();
                    formData.append('_token', token_val);
                    formData.append('nameInsert', nameInsert);
                    formData.append('emailInsert', emailInsert);
                    formData.append('messageInsert', messageInsert);
                    formData.append('fileInsert', getFile);

                    $.ajax({  
                        method:'POST',
                        url:'/message',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: (result) => {
                            console.log(result);
                            var successResult = JSON.parse(result);
                            if(successResult)
                            {
                                console.log(successResult);
                                document.getElementById('output-container').style.display = 'block';
                                document.getElementById('content').innerHTML = successResult.message;   
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) 
                        {
                            document.getElementById('output-container').style.display = 'block';
                            document.getElementById('content').innerHTML = 'Error Code:- ' + '<span style="color:#ff6666;">' + jqXHR.status + '</span>.<br/> Error Status:- ' + '<span style="color:#ff6666;">' + errorThrown + '!</span>';
                            console.log(jqXHR.status + '---' + errorThrown);
                        }
                    });
                    return true;
                }
            });

            window.onscroll = () => {
                if(document.body.scrollTop > 650 || document.documentElement.scrollTop > 650)
                {
                    document.getElementById('top').style.display = 'block';
                }
                else
                {
                    document.getElementById('top').style.display = 'none';
                }
            }

            //   user cookie
            var setCookie = function (n, val) 
            {
                var d = new Date();
                d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
                var expires = "expires=" + d.toGMTString();
                document.cookie = n + "=" + val + "; " + expires;
            }

            var getCookie = function (n) {
            var name = n + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) 
            {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1);
                if (c.indexOf(name) == 0) 
                {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
            }

            window.onload = function () {
                var favColor = document.body.style.backgroundColor;
                var color = getCookie('color');
                if (color == '') 
                {
                    document.body.style.backgroundColor = favColor;
                } 
                else 
                {
                    document.body.style.backgroundColor = color;
                }
                if(color == '#443c3d')
                {
                    document.getElementById('moon-icon').style.display = 'none';
                    document.getElementById('sun-icon').style.display = 'block';
                    document.getElementById('lwr-moon-icon').style.display = 'none';
                    document.getElementById('lwr-sun-icon').style.display = 'block';
                    document.getElementById('wrapper').style.color = '#ffffff';
                    document.getElementById('wrapper').style.backgroundColor = '#443c3d';
                    var element = document.getElementsByClassName('code-box');
                    for(var i = 0; i < element.length; i++)
                    {
                        element[i].style.boxShadow = 'none';
                        element[i].style.backgroundColor = '#4d004d';
                    }
                }
                if(color == '#ffffff')
                {
                    document.getElementById('wrapper').style.color = '#000000';
                    var element = document.getElementsByClassName('code-box');
                    for(var i = 0; i < element.length; i++)
                    {
                        element[i].style.boxShadow = '0px 5px 3px #777777';
                        element[i].style.backgroundColor = '#e6e6e6';
                    } 
                }
            }
            document.getElementById('moon-icon').addEventListener('click', () => {
                setCookie('color', '#443c3d', 'none', 'block'); 
                document.getElementById('wrapper').style.backgroundColor = '#443c3d'; 
                document.getElementById('wrapper').style.color = '#ffffff'; 
                var element = document.getElementsByClassName('code-box');
                for(var i = 0; i < element.length; i++)
                {
                    element[i].style.boxShadow = 'none';
                    element[i].style.backgroundColor = '#4d004d';
                }
                document.getElementsByClassName('message-container')[0].style.boxShadow = 'none';
                document.getElementById('moon-icon').style.display = 'none';
                document.getElementById('sun-icon').style.display = 'block';

            });
            document.getElementById('sun-icon').addEventListener('click', () => {
                setCookie('color', '#ffffff', 'none', 'block'); 
                document.getElementById('wrapper').style.backgroundColor = '#ffffff'; 
                document.getElementById('wrapper').style.color = '#000000';
                var element = document.getElementsByClassName('code-box');
                for(var i = 0; i < element.length; i++)
                {
                    element[i].style.boxShadow = '0px 5px 3px #777777';
                    element[i].style.backgroundColor = '#e6e6e6';
                } 
                document.getElementById('moon-icon').style.display = 'block';
                document.getElementById('sun-icon').style.display = 'none';
            });

            document.getElementById('lwr-moon-icon').addEventListener('click', () => {
                setCookie('color', '#443c3d', 'none', 'block'); 
                document.getElementById('wrapper').style.backgroundColor = '#443c3d'; 
                document.getElementById('wrapper').style.color = '#ffffff'; 
                var element = document.getElementsByClassName('code-box');
                for(var i = 0; i < element.length; i++)
                {
                    element[i].style.boxShadow = 'none';
                    element[i].style.backgroundColor = '#4d004d';
                }
                document.getElementsByClassName('message-container')[0].style.boxShadow = 'none';
                document.getElementById('lwr-moon-icon').style.display = 'none';
                document.getElementById('lwr-sun-icon').style.display = 'block';

            });
            document.getElementById('lwr-sun-icon').addEventListener('click', () => {
                setCookie('color', '#ffffff', 'none', 'block'); 
                document.getElementById('wrapper').style.backgroundColor = '#ffffff'; 
                document.getElementById('wrapper').style.color = '#000000';
                var element = document.getElementsByClassName('code-box');
                for(var i = 0; i < element.length; i++)
                {
                    element[i].style.boxShadow = '0px 5px 3px #777777';
                    element[i].style.backgroundColor = '#e6e6e6';
                } 
                document.getElementById('lwr-moon-icon').style.display = 'block';
                document.getElementById('lwr-sun-icon').style.display = 'none';
            });
        </script>
    </body>
</html>
