<html>
    <head>
        <title>Ritabrata</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="portfolio of ritabrata goswami.">
        <meta name="author" content="ritabrata goswami">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
        <style type="text/css">
        html {scroll-behavior:smooth;}
        body {
            background-image:url("./portfolio-files/photos/wallpapersden.com_programming-coding-language.jpg");
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-position: center;
            /* font-family: Georgia, times, serif; */
            line-height: 1.5em;
            margin: 0px;
        }
        #wrapper{
            margin:50px auto 50px auto; 
            border:1px solid #ffffff; 
            background-color:white; 
            width: 1100px;
            border-radius: 2px;
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
        #brightness-container{margin-top:60px;}
        #background-adjustment{
            float:right;
            /* padding:0px 8px; */
            margin-right:10px;
            font-size:13px;
        }
        #sun-icon{display:none}
        #visit-home{
            background:#1f1f1f;
            color:white;
            font-size:14px;
            padding:5px 10px;
            margin-left:15px;
            border-radius:2px;
        }
        #visit-home:hover{
            cursor:pointer;
            transition:0.3s;
            background:#777777;
        }
        #photo{
            width:70px;
            height:70px;
            border-radius:50%;
            margin-right: 10px;
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

        /* Below container CSS */

        #container {display: flex;}  
        #left-container{flex:35%;}
        #right-container{flex:65%;}
        .left-container-sub-one,.right-container-sub-one{
            margin-top: 50px;
        }
        .address,.contact,.skills,.interest{margin-top:25px;}
        .experience-block{margin-top:40px;}
        .edu-block{margin-top:40px;}
        .exp-desc{margin-top:25px;}
        table{margin:auto;}
        table,tr,td,th{border: 1px solid #000000;}
        th,td{padding:7px 5px;}
        td{
            font-size:13.5px;
            text-align: center;
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
       #lwr-brightness-container{display:none;}
       @media only screen and (max-width: 1230px) {
            #wrapper{
                margin:50px auto 50px auto; 
                border:1px solid #ffffff; 
                background-color:white; 
                width: 900px;
                border-radius: 2px;
            }
        } 
        @media only screen and (max-width: 1000px) {
            #wrapper{
                margin:50px auto 50px auto; 
                border:1px solid #ffffff; 
                background-color:white; 
                width: 700px;
                border-radius: 2px;
            }
        }
        @media only screen and (max-width: 830px) {
            #wrapper{
                margin:50px auto 50px auto; 
                border:1px solid #ffffff; 
                background-color:white; 
                width: 620px;
                border-radius: 2px;
            }
        }
        @media only screen and (max-width: 700px) {
            #container {flex-direction: column;} 
            #left-container{margin-left:20%;} 
            #right-container{margin-left:20%;}
            #wrapper{
                margin:50px auto 50px auto; 
                border:1px solid #ffffff; 
                background-color:white; 
                width: 470px;
                border-radius: 2px;
            }
            th,td{padding:9px 3px;}
        }
        @media only screen and (max-width: 520px) {
            #wrapper{
                width: 100%;
                border:none;
            }
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
            body{background-image:none;}
            #left-container{
                /* border:1px solid #ffff00;  */
                /* margin:auto;  */
                margin-top:30px; 
                /* margin-left:30%; */
                width:90%;
            } 
            #right-container{
                /* border:1px solid #ffff00; */
                margin-top:20px;
                width:90%;
            }
            .left-container-sub-one{
                /* border:1px solid #ffff00; */
                /* margin-left: 50%; */
                margin-top:70px;
            }
            td,th{font-size:12px;}
        }
        @media only screen and (max-width: 370px){
            td,th{font-size:10.5px;}
            /* table{margin-left:20%;} */
        } 
        </style>
    </head>
    <body>
        <div id="wrapper">
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
            </div>
            <span id="visit-home">Home Page</span>

            <div id = 'container'>
                <div id="left-container">
                    <div class="left-container-sub-one">
                        <h3 class="w3-center">Ritabrata Goswami</h3>
                        <h5 class="w3-center" style="margin-bottom:40px;">Backend Developer</h5>
                        <p class="w3-center address">
                            <i class = 'fa fa-home w3-text-teal w3-xlarge'></i><br/>
                            <span style="font-size:13.5px;">Hooghly, West Bengal, India.</span>
                        </p> 
                        <p class="w3-center contact">
                            <i class = 'fa fa-envelope w3-xlarge w3-text-teal'></i><br/>
                            <span style="font-size:13.5px;">1995ritabrata@gmail.com</span><br/>
                            <span style="font-size:12px; font-weight:bold;">Or</span><br/>
                            <span style="font-size:13.5px;">ritabratagoswami95@gmail.com</span>
                        </p>
                        <p class="w3-center skills">
                            <h5 class="w3-center">Skills</h5>
                            <div style="margin-left:50px;">
                                <ul style="font-size:13.5px;">
                                    <li>Backend Development.</li>
                                    <li>HTML, CSS, W3.CSS.</li>
                                    <li>Javascript.</li>
                                    <li>jQuery.</li>
                                    <li>PHP & Laravel(Framework).</li>
                                    <li>ExpressJS.</li>
                                    <li>Python & Flask(mini-framework).</li>
                                    <li>SQL.</li>
                                </ul>
                            </div>
                        </p>
                        <p class="w3-center interest">
                            <h5 class="w3-center">Area of Interest's</h5>
                            <div style="text-align:center;">
                                <div style="font-size:13.5px;"><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span> Cloud Technology</div>
                                <div style="font-size:13.5px;"><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span> Aviation Technology</div>
                                <div style="font-size:13.5px;"><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span> Re-newable Energy</div>
                                <div style="font-size:13.5px;"><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span><span class="fa fa-star w3-text-yellow"></span> Traction Engineering</div>
                            </div>
                        </p>
                        <div class="w3-center w3-margin-top">
                            <a href="./portfolio-files/upload_cv/cv-ritabrata.docx" download><button class="w3-button w3-green w3-hover-black w3-margin-top">Download CV</button></a>
                        </div>
                    </div>
                </div> <!--- end left container --->
                <div id="right-container">
                    <div class="right-container-sub-one w3-margin-left">
                        <h3><i class="fa fa-code w3-text-teal"></i> Language Known</h3>
                        <hr style="width:50%; height:0.5px; background:#1f1f1f;"/>
                        <div>
                            <p style="font-size:13.5px;">Javascript, PHP, Laravel, Python, Flask, ExpressJS</p>
                            <p style="font-size:13.5px;">MySQL, SQL-server</p>
                        </div>
                        <div class="experience-block">
                            <h3><i class="fa fa-briefcase w3-text-teal"></i> Experience</h3>
                            <hr style="width:50%; height:0.5px; background:#1f1f1f;"/>
                            <div>
                                <h4>Name: </h4><span style="font-size:13.5px;">Webhibe technologies pvt ltd</span>
                                <h4>Timeline: </h4><span style="font-size:13.5px;">July 2022 - Aug 2022</span>
                                <h4>Description: </h4><span style="font-size:13.5px;">Join as a junior LAMP stack deveploer. Worked on Linux OS. I was assigned to work on admin panel and dynamic the front end using PHP, AJAX, MySQL. In some application Laravel were also used. Worked on websites such as E-grocery, Blogging pages, Online Delivery App.</span>
                            </div>
                            <hr style="width:30%; margin:auto; margin-top:20px; height:1px; background:#1f1f1f;"/>
                            <div class="exp-desc">
                                <h4>Name: </h4><span style="font-size:13.5px;">Aiinhome technologies pvt ltd</span>
                                <h4>Timeline: </h4><span style="font-size:13.5px;">Dec 2022 - Present</span>
                                <h4>Description: </h4><span style="font-size:13.5px;">Join as a Backend deveploer. I work on verious projects on python and Flask (to develop API). Also work on SQL-server write SP for Flask API.</span>
                            </div>
                        </div>
                        <div class="edu-block">
                            <h3><i class="fa fa-university w3-text-teal"></i> Education</h3>
                            <hr style="width:50%; height:1px; background:#1f1f1f;"/>
                            <table id="table">
                                <tr class="tbl-row">
                                    <th class="set-col">University/Board</th>
                                    <th class="set-col">Exam</th>
                                    <th class="set-col">Timeline</th>
                                </tr>
                                <tr class="tbl-row">
                                    <td class="set-col">WBBSE</td>
                                    <td class="set-col">Matriculation</td>
                                    <td class="set-col">2011</td>
                                </tr>
                                <tr class="tbl-row">
                                    <td class="set-col">WBCHSE</td>
                                    <td class="set-col">12th exam</td>
                                    <td class="set-col">2013</td>
                                </tr>
                                <tr class="tbl-row">
                                    <td class="set-col">WBUT(MAKAUT)</td>
                                    <td class="set-col">B.Tech in Electrical Engineering</td>
                                    <td class="set-col">3rd feb 2018</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div> <!--- end right container --->
            </div> <!--- container end --->
            <div id="lwr-brightness-container" class="">
                <span id="lwr-background-adjustment">
                    <span id="lwr-moon-icon">Adjustment: <i class="fa fa-moon-o icon-for-adjustment" style="font-size:20px; cursor:pointer;" title="dark mode"></i></span>
                    <span id="lwr-sun-icon">Adjustment: <i class="fa fa-sun-o icon-for-adjustment" style="font-size:20px; cursor:pointer;" title="bright mode"></i></span>
                </span>
            </div>
            <div class="w3-bar w3-black w3-padding-large w3-margin-top" style="text-align:center;">
                <span style="font-size:11px;">&copy; Ritabrata Goswami - April 2023</span>
            </div>
        </div>  <!---- end wrapper ---->

        <button class = 'w3-button w3-btn w3-blue w3-hover-green to-top' id = 'top'><a href = '#wrapper'><i class = 'fa fa-arrow-up'> Top</i></a></button>

        <div id="wait-container">
            <div id="wait" style="">
                <i class="fa fa-spinner w3-spin w3-text-blue" style="font-size:60px"></i>
                <span class="w3-text-white" style="font-size:20px;">Waiting...</span>
            </div>
        </div>

        <script>
            $(document).ready(()=>{
                $(document).ajaxStart(function(){
                    $("#wait-container").css("display", "block");
                    $("#wait").css("display", "block");
                });
                $(document).ajaxComplete(function(){
                    $("#wait-container").css("display", "none");
                    $("#wait").css("display", "none");
                });
                $("#visit-home").click(function(){
                    $("body").load("/");
                    // window.history.pushState('demo_profile.html', 'xyz', '/Ritabrata/html/demo_portfolio.html');
                    window.location.href = '/';
                });
            });
            window.onscroll = () => {
                if(document.body.scrollTop > 400 || document.documentElement.scrollTop > 400)
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
                    document.getElementById('table').style.borderColor = '#ffff80';
                    var element = document.getElementsByClassName('tbl-row');
                    var tblBorder = document.getElementsByClassName('set-col');
                    for(var i = 0; i < element.length; i++)
                    {
                        element[i].style.color = '#ffffff';
                    }
                    for(var j = 0; j < tblBorder.length; j++)
                    {
                        tblBorder[j].style.borderColor = '#ffff80';
                    }
                }
                if(color == '#ffffff')
                {
                    document.getElementById('wrapper').style.color = '#000000';
                    document.getElementById('table').style.borderColor = '#000000';
                    var element = document.getElementsByClassName('tbl-row');
                    var tblBorder = document.getElementsByClassName('set-col');
                    for(var i = 0; i < element.length; i++)
                    {
                        element[i].style.color = '#000000';
                    } 
                    for(var j = 0; j < tblBorder.length; j++)
                    {
                        tblBorder[j].style.borderColor = '#000000';
                    }
                }
            }
            document.getElementById('moon-icon').addEventListener('click', () => {
                setCookie('color', '#443c3d', 'none', 'block'); 
                document.getElementById('wrapper').style.backgroundColor = '#443c3d'; 
                document.getElementById('wrapper').style.color = '#ffffff'; 
                var element = document.getElementsByClassName('tbl-row');
                var tblBorder = document.getElementsByClassName('set-col');
                for(var i = 0; i < element.length; i++)
                {
                    element[i].style.color = '#ffffff';
                }
                for(var j = 0; j < tblBorder.length; j++)
                {
                    tblBorder[j].style.borderColor = '#ffff80';
                }
                document.getElementById('table').style.borderColor = '#ffff80';
                document.getElementById('moon-icon').style.display = 'none';
                document.getElementById('sun-icon').style.display = 'block';

            });
            document.getElementById('sun-icon').addEventListener('click', () => {
                setCookie('color', '#ffffff', 'none', 'block'); 
                document.getElementById('wrapper').style.backgroundColor = '#ffffff'; 
                document.getElementById('wrapper').style.color = '#000000';
                var element = document.getElementsByClassName('tbl-row');
                var tblBorder = document.getElementsByClassName('set-col');
                for(var i = 0; i < element.length; i++)
                {
                    element[i].style.color = '#000000';
                } 
                for(var j = 0; j < tblBorder.length; j++)
                {
                    tblBorder[j].style.borderColor = '#000000';
                }
                document.getElementById('table').style.borderColor = '#000000';
                document.getElementById('moon-icon').style.display = 'block';
                document.getElementById('sun-icon').style.display = 'none';
            });

            document.getElementById('lwr-moon-icon').addEventListener('click', () => {
                setCookie('color', '#443c3d', 'none', 'block'); 
                document.getElementById('wrapper').style.backgroundColor = '#443c3d'; 
                document.getElementById('wrapper').style.color = '#ffffff'; 
                var element = document.getElementsByClassName('tbl-row');
                var tblBorder = document.getElementsByClassName('set-col');
                for(var i = 0; i < element.length; i++)
                {
                    element[i].style.color = '#ffffff';
                }
                for(var j = 0; j < tblBorder.length; j++)
                {
                    tblBorder[j].style.borderColor = '#ffff80';
                }
                document.getElementById('table').style.borderColor = '#ffff80';
                document.getElementById('lwr-moon-icon').style.display = 'none';
                document.getElementById('lwr-sun-icon').style.display = 'block';

            });
            document.getElementById('lwr-sun-icon').addEventListener('click', () => {
                setCookie('color', '#ffffff', 'none', 'block'); 
                document.getElementById('wrapper').style.backgroundColor = '#ffffff'; 
                document.getElementById('wrapper').style.color = '#000000';
                var element = document.getElementsByClassName('tbl-row');
                var tblBorder = document.getElementsByClassName('set-col');
                for(var i = 0; i < element.length; i++)
                {
                    element[i].style.color = '#000000';
                } 
                for(var j = 0; j < tblBorder.length; j++)
                {
                    tblBorder[j].style.borderColor = '#000000';
                }
                document.getElementById('table').style.borderColor = '#000000'; 
                document.getElementById('lwr-moon-icon').style.display = 'block';
                document.getElementById('lwr-sun-icon').style.display = 'none';
            });
        </script>
    </body>
</html>