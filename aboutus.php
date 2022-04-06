<?php
if($_POST) {
    if(
   floatval( $height = $_POST['height']) and
    floatval($weight = $_POST['weight'])) {


        $results = round($weight / ($height * $height), 2);

        $bmi = "";
        if ($results >= 18.5 and $results <= 24.9) {
            $bmi = "$results You are healthy";
        } elseif ($results >= 0 and $results < 18.5) {
            $bmi = "$results You are underweight";
        } elseif ($results > 24.9 and $results < 100) {
            $bmi = "$results You are Obese";

        }
    }else{
        $bmi="invalid";
    }
}else{

    $bmi="";
}




?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="JS/bootstrap.min.js"></script>
        <title>About us</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: black;">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)"><img src="images/logo2.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html"><span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="active" href="javascript:void(0)"><span>About</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)"><span>Classes</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)"><span>Schedule</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)"><span>Contacts</span></a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a href="" class="btn-custom" style="    margin-right: 0;
                    text-transform: uppercase;
                    font-size: 12px;
                    font-weight: 700;
                    background: #e1193e;
                    padding: 10px 10px;
                    color: #fff;
                    position: relative;
                    margin-right: 10px;
                    text-decoration-line: none;
                    z-index: 0;
                    border-radius: 4px;">BecomeAMember</a>
                    </li>
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="button">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div id="conainer" style="margin-top: 75px;">
            <div class="row">
                <div class="carousel-item active" id="car">
                    <div class="carousel-caption">
                        <h3 style="font-size: 35px; font-weight: 3000;">About us</h3>
                    </div>
                </div>
            </div>
            <div class="row" style="width: 80%; margin-left: auto;margin-right: auto; padding-top:50px;">
                <div class="col">
                    <img src="images/shii.png" style="height: 400px;width: 300px;">
                </div>
                <div class="col">
                    <h1 style="color:red; font-size:15px;">INFORMATION ABOUT US</h1>
                    <H2 style="font-size: 30px;">BRAINERS FITNESS CLUB<span style="color: #e1193e; font-size: 30px;">CROSSFIT</span><br>AND WORKOUT TRAINING CENTER</H2>
                    <P>Brainers fitness club is a work out center accomodating people whose<br> main interest is to keep fit. We are located at Nyahururu Town
                    </P>
                    <div>
                        <a href=""><i class="fa fa-long-arrow-right fa text-danger m-2"> <span style="color:black">MEN FITNESS AND WORKOUT</span></i></a><br>
                        <a href=""><i class="fa fa-long-arrow-right fa text-danger m-2"> <span style="color:black">WOMEN FITNESS AND WORKOUT</span></i></a><br>
                        <a href=""><i class="fa fa-long-arrow-right fa text-danger m-2"> <span style="color:black">PERSONAL TRAINNINGS</span></i></a>
                    </div>
                </div>
            </div>
            <div class="row" style="width: 80%; margin-left: auto;margin-right: auto; 
        background-color: blue; color: white; font-size: 25px; text-align: center; border-radius: 10px; padding: 5px;">
                <div class="col">
                    <div style="font-size: 40px;">10+</div>
                    <div>years of experience</div>
                </div>
                <div class="col">
                    <div style="font-size: 40px;">20+</div>
                    <div>fitness trainers</div>
                </div>

                <div class="col">
                    <div style="font-size: 40px;"> 200+</div>
                    <div>Best equipment</div>
                </div>
                <div class="col">
                    <div style="font-size: 40px;">5k</div>
                    <div>satisfied client</div>
                </div>

            </div>

        </div>
        </div>
        </div>
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <div class="row mt-5" style="text-align: center;">
                <span style="color:red;font-family: Arial;">TESTIMONIAL</span>
                <H1 style="font-weight:700;">HAPPY PEOPLE</H1>
            </div>

            <div class="carousel-inner bg-light mt-5" style="width:80%; margin-right:auto;margin-left:auto;">
                <div class="carousel-item active">

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div><i class="fa fa-quote-right"></i></div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                                    <div class="row">
                                        <div class="col-3"><img src="images/g2.jpg" style="height:70px;width:70px;"></div>
                                        <div class="col">
                                            <div>
                                                <h4>Walter Chelimo</h4>
                                            </div>
                                            <div><span style="color:red;">DIRECTOR</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div><i class="fa fa-quote-right"></i></div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                                    <div class="row">
                                        <div class="col-3"><img src="images/g2.jpg" style="height:70px;width:70px;"></div>
                                        <div class="col">
                                            <div>
                                                <h4>Walter Chelimo</h4>
                                            </div>
                                            <div><span style="color:red;">DIRECTOR</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div><i class="fa fa-quote-right"></i></div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                                    <div class="row">
                                        <div class="col-3"><img src="images/g2.jpg" style="height:70px;width:70px;"></div>
                                        <div class="col">
                                            <div>
                                                <h4>Walter Chelimo</h4>
                                            </div>
                                            <div><span style="color:red;">DIRECTOR</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div><i class="fa fa-quote-right"></i></div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                                    <div class="row">
                                        <div class="col-3"><img src="images/g2.jpg" style="height:70px;width:70px;"></div>
                                        <div class="col">
                                            <div>
                                                <h4>Walter Chelimo</h4>
                                            </div>
                                            <div><span style="color:red;">DIRECTOR</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div><i class="fa fa-quote-right"></i></div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                                    <div class="row">
                                        <div class="col-3"><img src="images/g2.jpg" style="height:70px;width:70px;"></div>
                                        <div class="col">
                                            <div>
                                                <h4>Walter Chelimo</h4>
                                            </div>
                                            <div><span style="color:red;">DIRECTOR</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div><i class="fa fa-quote-right"></i></div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                                    <div class="row">
                                        <div class="col-3"><img src="images/g2.jpg" style="height:70px;width:70px;"></div>
                                        <div class="col">
                                            <div>
                                                <h4>Walter Chelimo</h4>
                                            </div>
                                            <div><span style="color:red;">DIRECTOR</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
            </div>

        </div>
        <div class="row" id="bmi" style="background-image: url('images/bmi.jpeg');background-repeat: no-repeat;
    background-size:cover;
    width:%;margin-left: auto;margin-right: auto; margin-top: 5%;">
            <div class="row" style=" margin-left: 9%;padding-top:3%; padding-bottom: 2%;">
                <span style="color:red;font-size:14px;padding-bottom: 1%;">GET YOUR BOD MAX INDEX</span>
                <h3 style="color: white;font-weight: bolder;">WHAT IS YOUR <b style="color:red;font-weight: bold;">BMI?...</b></h3>
            </div>
            <div class="row" style="width:40%; margin-left: 10%;">

                <form method="POST" style="background-color: midnightblue;padding-left:10%;padding-top:10%;padding-bottom:20%;color:white;font-weight: 2000;">
                    <div style="">
                        <label><i><b>YOUR HEIGHT</b></i></label>
                    </div>
                    <div style="padding-top:5px;">
                        <input type="float" name="height" placeholder="meters" style="width:80%;height:50px;padding-left: 4%; color:white;background-color:transparent; border:1px solid grey;">
                    </div>
                    <div>
                        <label><i><b>YOUR WEIGHT</b></i></label>
                    </div>
                    <div style="padding-top:5px;">
                        <input type="float" name="weight" placeholder="kgs" style="width:80%;height:50px; padding-left: 4%; color:white;background-color:transparent; border:1px solid grey;"><br>
                    </div>
                    <div style="padding-top:20px;">
                        <input type="submit" value="COMPUTE BMI" style="width:39%;height:50px;text-align:center;background-color: red; color:white;border:none;font-weight:bold;">
                        <input type="text" value="<?php echo $bmi;?>" placeholder="Pounds" style="width:40%;color:red;padding-left:4%;height:50px;border:1px solid red;background-color:transparent">
                    </div>

                </form>

            </div>
        </div>
        <div class="row" style="background-color: rgb(28, 28, 39);">
            <div class="col p-5-sm-4">
                <img src="images/logo2.png">
                <p style="color: antiquewhite;">Lorem ipsum dolor sit, amet consectetu</p>
                <a href=""><i class="fa fa-twitter fa-2x text-primary m-2"></i></a>
                <a href=""><i class="fa fa-facebook fa-2x text-primary m-2"></i></a>
                <a href=""><i class="fa fa-instagram fa-2x text-danger m-2"></i></a>
                <a href=""><i class="fa fa-whatsapp fa-2x text-success m-2"></i></a>
            </div>
            <div class="col-sm-4">
                <h1 style="color: aliceblue;">Explore</h1>
                <div>
                    <a href=""><i class="fa fa-arrow-right "> <span>About us</span></i></a>
                </div>
                <div>
                    <a href=""><i class="fa fa-arrow-right"> <span> Awesome classes</span></i></a>
                </div>
                <div>
                    <a href=""><i class="fa fa-arrow-right"> <span>Pricing packages</span></i></a>
                </div>
                <div>
                    <a href=""><i class="fa fa-arrow-right"> <span> Schedule</span></i></a>
                </div>
            </div>
            <div class="col-sm-4">
                <h1 style="color: aliceblue;">Our contacts</h1>
                <div>
                    <a href=""><i class="fa fa-address-card-o "><span> P.O BOX 20300-1100 Laikipia university, Laikipia county, Nyahururu, Kenya
                </span></i></a>
                </div><br>
                <div>
                    <a href=""><i class="fa fa-phone "><span>+254710453786
                </span></i></a>
                </div><br>

                <div>
                    <a href="mailto:brainer@info.ac.ke"><i class="fa fa-envelope"><span>info@brainer.ac.ke
                </span><br>
                </i>
                </a>
                </div>
            </div>
        </div>
        </div>
        <footer>
            &copy;All rights reserverved by brainers
        </footer>

    </body>
    </html>