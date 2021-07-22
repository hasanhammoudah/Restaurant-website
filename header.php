<!DOCTYPE html>
<?php session_start();  ?>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com -->
    <title>Bootstrap Theme Company Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }

        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }

        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }

        .jumbotron {
            background-image: url("img/img1.jpg");
            color: #FFC93C;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }

        .container-fluid {
            padding: 60px 50px;
        }

        .bg-grey {
            background-color: #f6f6f6;
        }

        .logo-small {
            color: #f4511e;
            font-size: 50px;
        }

        .logo {
            color: #f4511e;
            font-size: 200px;
        }

        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
            background-color: #99154E;

        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;

        }

        .carousel-control.right,
        .carousel-control.left {
            background-image: none;
            color: #f4511e;
        }

        .carousel-indicators li {
            border-color: #f4511e;
        }

        .carousel-indicators li.active {
            background-color: #f4511e;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }

        .item span {
            font-style: normal;
        }

        .panel {
            border: 1px solid #f4511e;
            border-radius: 0 !important;
            transition: box-shadow 0.5s;
        }

        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
        }

        .panel-footer .btn:hover {
            border: 1px solid #f4511e;
            background-color: #fff !important;
            color: #f4511e;
        }

        .panel-heading {
            color: #fff !important;
            background-color: #f4511e !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .panel-footer {
            background-color: white !important;
        }

        .panel-footer h3 {
            font-size: 32px;
        }

        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }

        .panel-footer .btn {
            margin: 15px 0;
            background-color: #f4511e;
            color: #fff;
        }

        .navbar {
            margin-bottom: 0;
            background-color: #99154E;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            font-family: Montserrat, sans-serif;
        }

        .navbar li a,
        .navbar .navbar-brand {
            color: #fff !important;
        }

        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: #f4511e !important;
            background-color: #fff !important;
        }

        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }

        footer .glyphicon {
            font-size: 20px;
            margin-bottom: 20px;
            color: #f4511e;
        }

        .slideanim {
            visibility: hidden;
        }

        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }

            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }

            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }

        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }

        #sm {
            list-style-type: none;
            width: 200px;
            background-color: #99154F;
            padding: 0;
            margin: 0;
        }

        #sm li {
            text-align: center;
            border-bottom: 1px solid #fff;

        }

        #sm li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 8px 16px;
        }

        ul li {
            list-style-type: none;


        }

       
        #crt tr th{text-align: center}
        #tbl{
            border-collapse: collapse;
            width: 50%;
        }
        #tb1 th,td{
            text-align: left;
            padding: 8px;
        }
        #tb1 tr:nth-child(even) {background-color: #f2f2f2;}

#mu-restaurant-menu {
  display: inline;
  float: left;
  width: 100%;
  padding: 100px 0;
}

.mu-restaurant-menu-area {
  display: inline;
  float: left;
  width: 100%;
}

.mu-restaurant-menu-content {
  display: inline;
  float: left;
  margin-top: 30px;
  width: 100%;
}

.mu-restaurant-menu {
  display: inline-block;
  width: 100%;
  text-align: center;
  border: none;
}

.mu-restaurant-menu li {
  display: inline-block;
  float: none;
}

.mu-restaurant-menu li a {
  font-family: "Open Sans", sans-serif;
  font-size: 18px;
  border-radius: 0;
  color: #fff;
  font-size: 18px;
  margin: 0 15px;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}

.mu-restaurant-menu li a:hover,
.mu-restaurant-menu .active a,
.mu-restaurant-menu .active a:hover,
.mu-restaurant-menu .active a:focus {
  background-color: #FFF;
}

.mu-tab-content-area {
  display: inline;
  float: left;
  width: 100%;
  padding: 50px 0;
}

.mu-tab-content-left {
  display: inline;
  float: left;
  padding-right: 15px;
  width: 100%;
}

.mu-tab-content-right {
  display: inline;
  float: left;
  padding-left: 15px;
  width: 100%;
}

.mu-menu-item-nav li {
  border-bottom: 1px dashed #ccc;
  display: inline;
  float: left;
  margin-bottom: 20px;
  padding-bottom: 15px;
  width: 100%;
}

.mu-menu-item-nav li:last-child {
  border-bottom: none;
  margin-bottom: 0;
}

.mu-menu-item-nav li .media .media-left {
  width: 110px;
  height: 110px;
}

.mu-menu-item-nav li .media .media-left a,
.mu-menu-item-nav li .media .media-left a img {
  display: block;
  width: 110px;
  height: 110px;
}

.mu-menu-item-nav li .media .media-body .media-heading {
  font-size: 20px;
  margin-bottom: 10px;
}

.mu-menu-item-nav li .media .media-body .media-heading a {
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}

.mu-menu-item-nav li .media .media-body .mu-menu-price {
  font-size: 16px;
  font-weight: bold;
  letter-spacing: 1.5px;
  line-height: 20px;
}

.mu-menu-item-nav li .media .media-body p {
  margin-top: 10px;
  font-size: 14px;
}
      

    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php
                if (isset($_SESSION["user"])) {
                    echo ' <a class="navbar-brand" href="signout.php">SIGN OUT</a>
                         ';
                }
                ?>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (!isset($_SESSION['user']))
                        echo '<li><a href="login.php ">SIGN IN</a></li>
                              <li><a href="signup.php">SIGN UP</a></li>';
                    ?>

                    <li><a href="index.php">MENU</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1>Five Star Restaurants</h1>
        <p>Order Anywhere Anytime</p>
    </div>