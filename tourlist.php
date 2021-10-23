<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/docs.theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet">
</head>

<body>
    <?php require 'custom-header.php';?>
    <div class="container-fluid">
        <div class="page_header_top">
            <div class="page_header_img">
                <div class="container">
                    <div class="destination_content_only">
                        <!-- <h3>Tour List</h3> -->
                        <div class="progres">
                            <div class="progress-container" style="font-weight:bold;font-size:35px">
                                <label> T</label>
                                <label> O</label>
                                <label> U</label>
                                <label> R</label>
                                <label> -</label>
                                <label> -</label>
                                <label> L</label>
                                <label> I</label>
                                <label> S</label>
                                <label> T</label>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="home_destination my-4">
                <p>Home - <span style="color:#e8604c">Tours</span></p>
            </div>
        </div>
        <hr />
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="search_tourist">
                        <h5 class="mb-4">Search Tours</h5>
                        <div>
                            <input type="text" placeholder="Where To" class="form">
                        </div>
                        <div>
                            <input type="text" placeholder="When" class="form">
                        </div>
                        <div class="dropdown">
                            <button class="form dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JavaScript</a></li>
                            </ul>
                        </div>
                        <button type="button" class="btn2 for mt-3" style="color:#fff">SEARCH</button>
                    </div>
                    <div class="only_border">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button form" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><span style="color:black;font-size:20px;">Price</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <label>$200</label>
                                        <p><input id="volume" type="range" min="$10" max="100%" step="$10" value="30" style="width:100%;" /><span class="val vol" class="progress"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="wis mx-auto" />
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingtwo">
                                    <button class="accordion-button form" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo"><span style="color:black;font-size:20px;">Review Score</span>
                                    </button>
                                </h2>
                                <div id="collapsetwo" class="accordion-collapse collapse" aria-labelledby="headingtwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item"> <i class="fa fa-star" style="color:#ffa801"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="wis mx-auto" />
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button form" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span style="color:black;font-size:20px;">Category</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">City Tours</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">HostedTours</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">Adventure Tours</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">Group Tours</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">Couple Tours</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="wis mx-auto" />
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button form" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour"><span style="color:black;font-size:20px;">Duration</span>
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">0-24 Hours</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">1-2 days</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">2-3 days</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">4-5 days</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="check_box">
                                                <input type="checkbox">
                                            </div>
                                            <div class="star_check ml-3">
                                                <ul class="list-unstyled">
                                                    <li class="list-inline-item">5-10 days</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="wis mx-auto" />
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="tour_title_single">
                        <div class="tour_title_single_img">
                            <img src="images/tours-list-img-1.jpg">
                            <div class="tour_title_single_img_icon">
                                <i class="fa fa-heart" style="color:#ffff;"></i>
                            </div>
                        </div>
                        <div class="mascow">
                            <div class="star">
                                <i class="fa fa-star" style="color:gold"></i>
                                <span>8.0a superb</span>
                            </div>
                            <div class="city">
                                <h3>Muscow city Land</h3>
                                <p><span class="font-weight-bold" style="color:#e8604c;">$870/</span>per person</p>
                                <p class="text_content">Lorem ipsum available isn but the majority have suffered alteratin in some or form injected semper fames.</p>
                                <div class=" text-center mr-4 mth">
                                    <button type="button" class="btn-light mt-4 w-100 pt-2" style="background-color: #faf5ee;;">
                                        <ul class="list-unstyled pt-2">
                                            <li class="list-inline-item"><span><i class="fa fa-calendar"></i></span> 3 DAYS </li>
                                            <li class="list-inline-item"><span><i class="fa fa-user"></i></span> 12+ </li>
                                            <li class="list-inline-item"><span><i class="fa fa-calendar"></i></span> LOS ANGELES </li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour_title_single">
                        <div class="tour_title_single_img">
                            <img src="images/tours-list-img-2.jpg">
                            <div class="tour_title_single_img_icon">
                                <i class="fa fa-heart" style="color:#ffff;"></i>
                            </div>
                        </div>
                        <div class="mascow">
                            <div class="star">
                                <i class="fa fa-star" style="color:gold"></i>
                                <span>8.0a superb</span>
                            </div>
                            <div class="city">
                                <h3>Discover Depth of Beach</h3>
                                <p><span class="font-weight-bold" style="color:#e8604c;">$870/</span>per person</p>
                                <p class="text_content">Lorem ipsum available isn but the majority have suffered alteratin in some or form injected semper fames.</p>
                                <div class=" text-center mr-4 mth">
                                    <button type="button" class="btn-light mt-4 w-100 pt-2" style="background-color: #faf5ee;;">
                                        <ul class="list-unstyled pt-2">
                                            <li class="list-inline-item"><span><i class="fa fa-calendar"></i></span> 3 DAYS </li>
                                            <li class="list-inline-item"><span><i class="fa fa-user"></i></span> 12+ </li>
                                            <li class="list-inline-item"><span><i class="fa fa-calendar"></i></span> LOS ANGELES </li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour_title_single">
                        <div class="tour_title_single_img">
                            <img src="images/tours-list-img-3.jpg">
                            <div class="tour_title_single_img_icon">
                                <i class="fa fa-heart" style="color:#ffff;"></i>
                            </div>
                        </div>
                        <div class="mascow">
                            <div class="star">
                                <i class="fa fa-star" style="color:gold"></i>
                                <span>8.0a superb</span>
                            </div>
                            <div class="city">
                                <h3>Muscow city Land</h3>
                                <p><span class="font-weight-bold" style="color:#e8604c;">$870/</span>per person</p>
                                <p class="text_content">Lorem ipsum available isn but the majority have suffered alteratin in some or form injected semper fames.</p>
                                <div class=" text-center mr-4 mth">
                                    <button type="button" class="btn-light mt-4 w-100 pt-2" style="background-color: #faf5ee;;">
                                        <ul class="list-unstyled pt-2">
                                            <li class="list-inline-item"><span><i class="fa fa-calendar"></i></span> 3 DAYS </li>
                                            <li class="list-inline-item"><span><i class="fa fa-user"></i></span> 12+ </li>
                                            <li class="list-inline-item"><span><i class="fa fa-calendar"></i></span> LOS ANGELES </li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour_title_single">
                        <div class="tour_title_single_img">
                            <img src="images/tours-list-img-4.jpg">
                            <div class="tour_title_single_img_icon">
                                <i class="fa fa-heart" style="color:#ffff;"></i>
                            </div>
                        </div>
                        <div class="mascow">
                            <div class="star">
                                <i class="fa fa-star" style="color:gold"></i>
                                <span>8.0a superb</span>
                            </div>
                            <div class="city">
                                <h3>Muscow city Land</h3>
                                <p><span class="font-weight-bold" style="color:#e8604c;">$870/</span>per person</p>
                                <p class="text_content">Lorem ipsum available isn but the majority have suffered alteratin in some or form injected semper fames.</p>
                                <div class=" text-center mr-4 mth">
                                    <button type="button" class="btn-light mt-4 w-100 pt-2" style="background-color: #faf5ee;;">
                                        <ul class="list-unstyled pt-2">
                                            <li class="list-inline-item"><span><i class="fa fa-calendar"></i></span> 3 DAYS </li>
                                            <li class="list-inline-item"><span><i class="fa fa-user"></i></span> 12+ </li>
                                            <li class="list-inline-item"><span><i class="fa fa-calendar"></i></span> LOS ANGELES </li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour_title_single">
                        <div class="tour_title_single_img">
                            <img src="images/tours-list-img-5.jpg">
                            <div class="tour_title_single_img_icon">
                                <i class="fa fa-heart" style="color:#ffff;"></i>
                            </div>
                        </div>
                        <div class="mascow">
                            <div class="star">
                                <i class="fa fa-star" style="color:gold"></i>
                                <span>8.0a superb</span>
                            </div>
                            <div class="city">
                                <h3>National Park 2 Days Tour</h3>
                                <p><span class="font-weight-bold" style="color:#e8604c;">$870/</span>per person</p>
                                <p class="text_content">Lorem ipsum available isn but the majority have suffered alteratin in some or form injected semper fames.</p>
                                <div class=" text-center mr-4 mth">
                                    <button type="button" class="btn-light mt-4 w-100 pt-2" style="background-color: #faf5ee;;">
                                        <ul class="list-unstyled pt-2">
                                            <li class="list-inline-item"><span><i class="fa fa-calendar"></i></span> 3 DAYS </li>
                                            <li class="list-inline-item"><span><i class="fa fa-user"></i></span> 12+ </li>
                                            <li class="list-inline-item"><span><i class="fa fa-calendar"></i></span> LOS ANGELES </li>
                                        </ul>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="foter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="foter_logo">
                            <img src="images/footer-logo.png">
                            <p>"Welcome to our Trip and Tour Agency.<br> Loremsimply text amet cing elit."</p>
                            <hr class="w-75" />
                            <ul>
                                <li class="d-flex">
                                    <div class="foter_icon">
                                        <i class="fa fa-phone-square" style="color:#e8604c"></i>
                                    </div>
                                    <div class="foter_text ml-3">
                                        <a href="">+92 666 888 0000</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="foter_icon">
                                        <i class="fa fa-envelope" style="color:#e8604c"></i>
                                    </div>
                                    <div class="foter_text ml-3">
                                        <a href="">needhelp@company.com</a>
                                    </div>
                                </li>
                                <li class="d-flex mt-2">
                                    <div class="foter_icon">
                                        <i class="fa fa-map-marker" style="color:#e8604c"></i>
                                    </div>
                                    <div class="foter_text ml-3">
                                        <a href="">+92 666 888 0000</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="foter_logo">
                            <h3 class=" text-white font-weight-bold">Company</h3>
                            <ul class="footer-widget__company-list list-unstyled mt-4">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="#">Community Blog</a></li>
                                <li><a href="#">Rewards</a></li>
                                <li><a href="#">Work with Us</a></li>
                                <li><a href="#">Meet the Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="foter_logo">
                            <h3 class=" text-white font-weight-bold">Explore</h3>
                            <ul class="footer-widget__company-list list-unstyled mt-4">
                                <li><a href="about.php">Account</a></li>
                                <li><a href="#">Legal </a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Affilated Programm</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="foter_logo">
                            <h3 class=" text-white font-weight-bold">Newslatter</h3>
                            <div class="mt-4">
                                <input type="email" placeholder="Email Adderess" class="email">
                                <button type="button" class="Footer_button">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_social_div d-flex">
                <div class="button_foter text-center">
                    <span class="text-center">
                        <img src="images/right-arrow.png">
                    </span>
                </div>
                <div class="social py-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="social_icon d-flex">
                                <a href="" style="margin-left:35px;">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social_icon">
                                <p class="ml-3">@ Girish Copyright 2021, Bracket Web</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
            var total = "";
/*initialize*/

function progress(percent, $element) {
  var progressBarWidth = (percent * $element.width()) / 100;

  // $element.find('div').animate({ width: progressBarWidth }, 500).php(percent + "%&nbsp;");

  $element.find("div").animate({ width: progressBarWidth });
}

$(document).ready(function (e) {
  $("#volume").on("mousemove", function () {
    //alert();
    $(".vol").text($(this).val());
    player.setVolume($(this).val());
  });
});

        </script> -->

    <script>
        $(document).ready(function() {
            var inputs = $(".progress-container").find($("label"));
            for (var i = 0; i < inputs.length; i++) {
                var index = i + 1;
                var time = ((inputs.length) - i) * 100;
                $(".progress-container label:nth-child(" + index + ")").css("-webkit-animation", "anim 3s " + time + "ms infinite ease-in-out");
                $(".progress-container label:nth-child(" + index + ")").css("-animation", "anim 3s " + time + "ms infinite ease-in-out");
            }
        })
    </script>

</body>

</html>