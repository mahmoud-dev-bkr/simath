<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Exam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <style>
        .col-lg-4 {
            width: 80%;
            margin: auto;
        }

        .levels-link {
            padding: 5px;
            background-color: gray;
            color: white;
            display: block;
            margin: 20px;
            transition: all 0.8s
        }

        .levels-link:hover {
            color: white;
            background-color: #411160;
        }

        .pro-name {

            /* font-family: Cursive , "Courier New", monospace; */
            font-family: Georgia, serif;
            font-size: 100px;
            font-style: oblique;
        }



        @media only screen and (min-width: 1000px) {
            .nav-ul {
                display: flex;
                justify-content: space-between;
            }

            nav {
                width: 100%;
            }
        }

    </style>
    <style>
        .buttons {
            display: flex;
            flex-wrap: wrap;
            width: 135px;
            height: 180px;
            background-color: white;
            position: fixed;
            bottom: 10px;
            margin: auto;
        }

        .buttons>div {
            width: 40px;
            height: 40px;
            background-color: #86c8e9;
            color: white;
            margin: 3px;
            text-align: center;
            cursor: pointer;
            padding: 12px;

        }

        .buttons>.clear {
            width: 85px;
        }

        @media only screen and (max-width: 500px) {
            .div .text-box {
                width: 100px;
            }

            .buttons {
                width: 90%;
                height: 220px;
                right: 0px;
                left: 0px;
            }

            .buttons>div {
                width: 31%;
                height: 50px;
            }
        }

        @media only screen and (max-width: 1000px) {
            .ques {
                margin-left: 30%;
                margin-top: 10px;
            }

        }

    </style>
</head>


<body onload='document.form.result.focus();'>


    <div class="wrapper">

        @include('inc.header')





        <section class="forum-page">
            <div class="container">
                <div class="forum-questions-sec">
                    <div class="row">
                        <div class="col-lg">
                            <form action="ex1.php" method="post">

                                <div class="widget widget-user">
                                    <h3 class="title-wd" style="text-align:center">
                                        <p style="font-size:60px;" id="demo">{{ $min_remain }}</p>
                                    </h3>



                                </div>
                                <!--widget-user end-->
                            </form>

                        </div>
                        <div class="widget widget-user ques"
                            style="border:1px solid black ; width:130px; height:100px; ">
                            <div style="font-size:35px; text-align:center; margin:30px  ">
                                5
                            </div>

                        </div>
                        <!--widget-user end-->
                    </div>

                    <div class="col-lg-4">
                        <div class="forum-post-view">
                            <div class="usr-question">

                                <div class="usr_quest" style="text-align:center;">
                                    <h1 style="font-size:30px">
                                        {{-- display step name --}}
                                        Step name
                                    </h1>
                                    {{-- start question --}}
                                    @foreach ($questions as $q)

                                        <div style="border:1px solid black; margin:20px">

                                            {{-- question number --}}
                                            <p>5</p>
                                            <p style="font-size:20px; margin:20px">+</p>
                                            <p style="font-size:20px; margin:20px">5</p>




                                            <div class="div" style="margin:10px 5px 20px 5px">
                                                <form id="form">

                                                    <input class="text-box" name="student_answer" type="number"
                                                        id="result" inputmode="numeric" autofocus
                                                        placeholder="ادخل النتيجه" size="15">


                                                    <input class="text-box" name="timer" id="timer" type="text"
                                                        placeholder="ادخل النتيجه" size="15" style="display:none"
                                                        name="time">
                                                    <!--7<input class="submit" onclick="saveTimer()"  type="submit" value="التالي" style="margin-top:20px; width:80px; height:30px; background-color:#411160; color:white;">-->
                                                    {{-- <div class="buttons">
                                                    <div class="button" onclick="display('1')"> 1 </div>
                                                    <div class="button" onclick="display('2')"> 2 </div>
                                                    <div class="button" onclick="display('3')"> 3 </div>
                                                    <div class="button" onclick="display('4')"> 4 </div>
                                                    <div class="button" onclick="display('5')"> 5 </div>
                                                    <div class="button" onclick="display('6')"> 6 </div>
                                                    <div class="button" onclick="display('7')"> 7 </div>
                                                    <div class="button" onclick="display('8')"> 8 </div>
                                                    <div class="button" onclick="display('9')"> 9 </div>
                                                    <div class="button" onclick="clearScreen()">c</div>
                                                    <div class="button" onclick="display('0')"> 0 </div>
                                                    <div class="button"> <input onclick="saveTimer()"
                                                            style="background-color:#86c8e9;width:30px;height:100%; color:white; border:none;"
                                                            type="submit" value="التالي"> </div>
                                                </div> --}}
                                                </form>

                                            </div>

                                        </div>

                                        {{-- end question --}}
                                    @endforeach


                                </div>
                            </div>
                            <!--usr-question end-->
                        </div>
                        <!--forum-post-view end-->


                    </div>
                    <div class="col">



                    </div>
                    <!--widget-user end-->
                </div>
            </div>
    </div>
    <!--forum-questions-sec end-->
    </div>
    </section>
    <!--forum-page end-->




    <div class="overview-box" id="question-box">
        <div class="overview-edit">
            <h3>Ask a Question</h3>
            <form action="ex1.php" method="POST">
                <input type="text" name="question" placeholder="Type Question Here">
                <input type="text" name="tags" placeholder="Tags">
                <textarea placeholder="Description"></textarea>
                <button type="submit" class="save">Submit</button>
                <button type="submit" class="cancel">Cancel</button>
            </form>
            <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
        </div>
        <!--overview-edit end-->
    </div>
    <!--overview-box end-->

    </div>
    <!--theme-layout end-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    //    time is up
                    document.querySelector('#demo').textContent = "Timeout"
                    setTimeout(() => {
                        // window.location = '/timeout'
                    }, 1000);
                }
            }, 1000);
        }

        window.onload = function() {
            var minutes = 60 * {{ $min_remain }},
                display = document.querySelector('#demo');
            startTimer(minutes, display);
        };

    </script>



    <script>
        function saveTimer() {
            xhr = new XMLHttpRequest();
            const timer = document.getElementById('demo');
            if (timer == "Timeout") {
                timer = 0;
            }
            const timer_input = document.getElementById('timer');
            timer_input.value = timer.textContent;

        };

        function display(value) {
            document.getElementById("result").value += value;
        }

        function clearScreen() {
            document.getElementById("result").value = "";
        }

    </script>


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>


</body>

</html>
