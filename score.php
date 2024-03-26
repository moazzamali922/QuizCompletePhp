<?php


$answer1=null;
$answer2=null;
$answer3=null;
$answer4=null;
$answer6=null;


if(isset($_POST['medical_condition1'])){
	$answer1=$_POST['medical_condition1'];
}

if(isset($_POST['medical_condition2'])){
	$answer2=$_POST['medical_condition2'];
}
if(isset($_POST['medical_condition3'])){
	$answer3=$_POST['medical_condition3'];
}
if(isset($_POST['medical_condition4'])){
	$answer4=$_POST['medical_condition4'];
}
if(isset($_POST['medical_condition_append'])){
	$answer5=$_POST['medical_condition_append'];
    
}
if(isset($_POST['medical_condition6'])){
	$answer6=$_POST['medical_condition6'];
}
if(isset($_POST['incorrect_words1'])){
	$answer7=$_POST['incorrect_words1'];
    
}
if(isset($_POST['incorrect_words2'])){
	$answer8=$_POST['incorrect_words2'];
    
}
if(isset($_POST['incorrect_words3'])){
	$answer9=$_POST['incorrect_words3'];
    
}
if(isset($_POST['incorrect_words4'])){
	$answer10=$_POST['incorrect_words4'];
}

$parts5 = explode(",", $answer5);

$answer_5_part_1 = $parts5[0] ?? null;
$answer_5_part_2 = $parts5[1] ?? null;

$parts7 = explode(",", $answer7);

$answer_7_part_1 = $parts7[0] ?? null;
$answer_7_part_2 = $parts7[1] ?? null;
$answer_7_part_3 = $parts7[2] ?? null;

$parts8 = explode(",", $answer8);

$answer_8_part_1 = $parts8[0] ?? null;
$answer_8_part_2 = $parts8[1] ?? null;
$answer_8_part_3 = $parts8[2] ?? null;

$parts9 = explode(",", $answer9);

$answer_9_part_1 = $parts9[0] ?? null;
$answer_9_part_2 = $parts9[1] ?? null;
$answer_9_part_3 = $parts9[2] ?? null;

$parts10 = explode(",", $answer10);

$answer_10_part_1 = $parts10[0] ?? null;
$answer_10_part_2 = $parts10[1] ?? null;
$answer_10_part_3 = $parts10[2] ?? null;


$correctAnswers = array(
    'Tell TfL immediately',
    'front and rear windscreens',
    'The private hire vehicle operator',
    'Speak calmly and ask them questions.',
    'privately-owned e-scooters and e-unicycles are NOT allowed on any TfL services,foldable e-bikes are NOT covered by this notice',
    'The Supreme Court',
    'when,know,vehicle',
    'child,who will be,operator',
    'transport children,contact,report something',
    'handbook,passengers,responsibilities'
);

$userAnswers = array(
    $answer1 ?? null,
    $answer2 ?? null,
    $answer3 ?? null,
    $answer4 ?? null,
    $answer5 ?? null,
    $answer6 ?? null,
    $answer7 ?? null,
    $answer8 ?? null,
    $answer9 ?? null,
    $answer10 ?? null
);

// Count the number of correct answers
$correctCount = 0;
$totalQuestions = count($correctAnswers);

for ($i = 0; $i < $totalQuestions; $i++) {
    // Check if the user answer matches the correct answer
    if ($userAnswers[$i] === $correctAnswers[$i]) {
        $correctCount++;
    }
}

// Calculate the score
$score = ($correctCount / $totalQuestions) * 100;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<style>
    .greenColor {
        color: green;
        font-weight: bold;
    }

    .redColor {
        color: red;
    }
</style>

<body>
<style>
        * {
            margin: 0;
            padding: 0;
        }

        .unique-ul-class {
            list-style-type: none;
            margin: 0;
            margin-left: 50px !important;
            padding: 0px 60px;
            overflow: hidden;
        }

        .unique-li-class {
            float: left;
        }

        .unique-li-class a {
            display: block;
            color: white;
            text-align: center;
            padding: 10px 10px;
            text-decoration: none;
        }

        /* Change color on hover */
        .unique-li-class a:hover {
            background-color: #111;
        }

        .head {
            background-color: #211D1E;
        }


        /* Font Awesome icons */
        .fab {
            font-size: 17px;
        }

        .fab:hover {
            opacity: 0.7;
        }

        .left_side {
            justify-content: center;
            align-items: start !important;
        }

        .RadioButton {
            margin-top: 40px !important;
        }

        .RadioButton11 {
            margin-top: 40px !important;
        }

        .radioP {
            margin-left: 5px !important;
            font-size: 20px !important;
        }

        .mainHeading {
            font-size: 1.8rem !important;
        }

        .center {
            text-align: center !important;
        }

        .button-back {
            display: inline-block !important;
            padding: 10px 20px !important;
            text-align: center !important;
            text-decoration: none !important;
            background-color: #151c6a !important;
            color: #fff !important;
            border: none !important;
            border-radius: 25px !important;
            cursor: pointer !important;
            margin-left: 10px !important;
        }

        .button-next {
            display: inline-block !important;
            padding: 10px 20px !important;
            text-align: center !important;
            text-decoration: none !important;
            background-color: #d99518 !important;
            color: #fff !important;
            border: none !important;
            border-radius: 25px !important;
            cursor: pointer !important;
            margin-left: 10px !important;
        }

        @media only screen and (max-width: 768px) {
            .mainHeading {
                font-size: 1.2rem !important;
            }

            .centerr {
                text-align: center !important;
            }
        }

        .redheading {
            color: red !important;
            font-size: 20px !important;
        }

        .fill-in {
            font-size: 20px !important;
        }

        .fill-in-the-blank {
            border-bottom: 1px solid black !important;
            width: 70px !important;
            display: inline-block !important;
        }

        .tables_ui {
            margin-bottom: 20px !important;
        }

        .table-header {
            display: flex !important;
            background-color: #f2f2f2 !important;
            border-bottom: 1px solid #ccc !important;
        }

        .column {
            flex: 1 !important;
            padding: 10px !important;
            font-weight: bold !important;
            text-align: center !important;
        }

        .t_sortable {
            border: 1px solid #ccc !important;
            height: 40px !important;
        }

        .custom_row {
            display: flex !important;
            border-bottom: 1px solid #ccc !important;
        }

        .custom_cell {
            flex: 1 !important;
            padding: 10px !important;
            text-align: center !important;
            cursor: move !important;
        }

        .table-background {
            background: rgba(255, 0, 0, 0.4) !important;
        }

        input[type="checkbox"] {
            position: unset !important;
        }

        .words_incorrectwords {
            font: 25px;
        }



        /* Boostrap Code  */
        .container {
            margin-right: auto;
            margin-left: auto;
            width: 90%;
            margin-top: 40px;
        }

        @media (min-width: 768px) {
            .col-md-4 {
                width: 33.33333%;
                float: left;
            }
        }


        @media (min-width: 768px) {
            .col-md-6 {
                width: 50%;
                float: left;
            }
        }


        @media (min-width: 768px) {
            .col-md-12 {
                width: 100%;
                float: left;
            }
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .row {
            margin-left: -15px;
            margin-right: -15px;
        }

        .box {
            display: none;
        }

        .drag_h2 {
            font-size: 30px;
        }

        .left_side {
            line-height: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            position: relative;
        }

        .uper_text {
            font-size: 12px;
        }

        .left_side::after {
            content: "";
            position: absolute;
            height: 50%;
            width: 1px;
            background-color: #ccc;
            top: 50;
            right: 0;
        }

        .bottom_text {
            font-weight: bold;
            color: #4F4A4A;
        }

        .topnav {
            overflow: hidden;
            background-color: #70D628;
            padding: 0px 130px;
            margin-top: 10px;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 21px;
            font-weight: 600;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }

        .quiz_container {
            padding: 70px !important;
        }

        .headerrr {
            padding: 0px 80px;
            margin-top: 5px;
        }

        .logo {
            margin-bottom: 10px;
            width: 140px;
        }

        .footer_row {
            margin-top: 20px;
        }

        .custom-footer {
            background-color: #70D628;
            color: #fff;
            padding: 20px 30px;
            margin-top: 30px;
        }

        .footer-heading {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .footer-menu-heading {
            color: #000;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .footer-menu {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column;
            line-height: 1.5rem;

        }

        .footer-menu-p {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column;

        }

        .footer-menu-a {
            text-align: start !important;
            color: #000;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        .footer_p_bottom {
            background-color: #000;

        }

        .footer_p {
            text-align: center;
            color: #fff;
            padding: 10px 0px;
            font-size: 17px;
            margin-bottom: 0px;
        }

        .icons-container {
            text-align: center;
            padding: 10px;
        }

        .icons-container .icon-link i {
            color: #000;
            font-size: 20px;
            padding: 5px;
        }

        .background-image-center {
            position: relative;
            width: 100%;
            height: 250px;
            background-image: url('./assets/img/background-image.png');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            font-size: 24px;
        }

        .background-image-text {
            color: #24353b;
            font-size: 46px;
            font-weight: bold;
        }
    </style>
    <div class="head">
        <ul class="unique-ul-class">
            <li class="unique-li-class"><a href="#" class="nav-icon home-icon"><i class="fab fa-twitter"></i></a></li>
            <li class="unique-li-class"><a href="#" class="nav-icon search-icon"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="unique-li-class"><a href="#" class="nav-icon envelope-icon"><i class="fab fa-linkedin"></i></a>
            </li>
            <li class="unique-li-class"><a href="#" class="nav-icon user-icon"><i class="fab fa-youtube"></i></a></li>
            <li class="unique-li-class"><a href="#" class="nav-icon user-icon"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
<header>
        <div class="container headerrr">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/img/logo.png" class="logo" alt="">
                </div>
                <div class="col-md-3 left_side">
                    <p class="uper_text">EMAIL</p>
                    <p class="bottom_text">info@uniconnection.co.uk</p>
                </div>
                <div class="col-md-3 left_side">
                    <p class="uper_text">PHONE</p>
                    <p class="bottom_text">+44-111-222-333</p>
                </div>

            </div>
        </div>
    </header>


    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">HOME</a>
        <a href="#news">ABOUT</a>
        <a href="#contact">SERVICES</a>
        <a href="#about">FAQ</a>
        <a href="#about">CONTACT</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="background-image-center">
        <p class="background-image-text">Test Result</p>
    </div>

    <!-- Displaying results -->
   
    <div class="container py-5">
        <div class="d-flex justify-content-between mt-4 align-items-end mb-3 flex-wrap">
            <h3 style="display: inline-block; border-bottom: 3px solid #d99518; padding-bottom: 0.25rem;">Test Breakdown
            </h3>
            <h3 class="text-primary">Score: <?php echo $score ?>%</h3>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-info question-box">

            <h5>Understanding your results</h5>

            <p>Correct answers are marked with <i class="fas fa-check-circle" style="color: green;"></i></p>
            <p>Incorrect answers are marked with <i class="fas fa-times-circle" style="color: red;"></i></p>

            <p>Answers you selected are marked with <i class="fas fa-arrow-right"></i></p>

        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>If you develop a new medical condition that affects your ability to drive, what should you do?
            </h4>
            <ul style="padding-left: 0px;">
			
				<?php if($answer1=="Inform the DVLA only"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
				
                <i class="fas fa-times-circle" style="color: red;"></i>
                Inform the DVLA only
            </ul>
            <ul style="padding-left: 0px;">
				<?php if($answer1=="Tell TfL immediately"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-check-circle" style="color: green;"></i>
                
                Tell TfL immediately
            </ul>
			
			<ul style="padding-left: 0px;">
				<?php if($answer1=="Wait for a week to see if things improve"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                
                Wait for a week to see if things improve
            </ul>
            
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>What part of the vehicle are PHV licence discs attached?</h4>
            <ul style="padding-left: 0px;">
				<?php if($answer2=="front and rear windscreens"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                
                <i class="fas fa-check-circle" style="color: green;"></i>
                front and rear windscreens
            </ul>
            <ul style="padding-left: 0px;">
				<?php if($answer2=="rear windscreen only"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                rear windscreen only
            </ul>
            <ul style="padding-left: 0px;">
			
				<?php if($answer2=="front windscreen only"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                front windscreen only
            </ul>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Who is in charge of setting a fare or giving an accurate estimate to a member of the public?</h4>
            <ul style="padding-left: 0px;">
            <?php if($answer3=="The private hire vehicle operator"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-check-circle" style="color: green;"></i>
                The private hire vehicle operator
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer3=="The driver of the private hire vehicle"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                The driver of the private hire vehicle
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer3=="DVLA"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                DVLA
            </ul>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>What measures could you take to lower the chances of a passenger becoming aggressive towards you?</h4>
            <ul style="padding-left: 0px;">
            <?php if($answer4=="Speak calmly and ask them questions."){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-check-circle" style="color: green;"></i>
                Speak calmly and ask them questions.
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer4=="Speak louder to make sure they know what you are trying to say."){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                Speak louder to make sure they know what you are trying to say.
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer4=="Try to pay no attention to them and hope they calm down"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                Try to pay no attention to them and hope they calm down
            </ul>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>READ THE TPH NOTICE CAREFULLY AND ANSWER THE QUESTION BELOW:</h4>
            <h5>TPH Notice 11/20 Carriage of e-scooters and e-unicycles
            </h5>
            <h5>
                Ban on e-scooters and e-unicycles on TfL services <br>
                Transport for London (TfL) has announced that all privately-owned e-scooters and e-unicycles, including
                those that can be folded or carried, will not be permitted on its
                <br>
                services from Monday 13 December 2021.
            </h5>
            <h5>
                This is the result of safety concerns about these items following recent fires on transport premises and
                services. Customers in possession of such devices will not be permitted to enter any premises on TfL’s
                network or travel on any of its services, including on the Tube, buses, Overground, TfL Rail, Trams and
                DLR.

            </h5>
            <h5>
                This guidance does not include foldable e-bikes, that are generally subject to better manufacturing
                standards and the batteries are usually positioned in a place where <br>
                they are less likely to be damaged, and so are less of a fire risk.
            </h5>

            <h4 class="mt-5">Which two statements are correct:</h4>
            <ul style="padding-left: 0px;">
            <?php 
        if (trim($answer_5_part_1) == "privately-owned e-scooters and e-unicycles are allowed on TfL services as long as they are folded safely and securely" || trim($answer_5_part_2) == "privately-owned e-scooters and e-unicycles are allowed on TfL services as long as they are folded safely and securely") { ?>				
            <i class="fas fa-arrow-right"></i>			
    <?php } ?>
                <i class="fas fa-check-circle" style="color: green;"></i>
                privately-owned e-scooters and e-unicycles are allowed on TfL services as long as they are folded safely
                and securely
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer_5_part_1=="privately-owned e-scooters and e-unicycles are NOT allowed on any TfL services" || $answer_5_part_2=="privately-owned e-scooters and e-unicycles are NOT allowed on any TfL services"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                privately-owned e-scooters and e-unicycles are NOT allowed on any TfL services
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer_5_part_1=="According to Section 165 of the Equality Act 2010 PHV drivers wheelchair accessible taxis can charge
                reasonable extra amount of wheelchair users" || $answer_5_part_2=="According to Section 165 of the Equality Act 2010 PHV drivers wheelchair accessible taxis can charge
                reasonable extra amount of wheelchair users"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                According to Section 165 of the Equality Act 2010 PHV drivers wheelchair accessible taxis can charge
                reasonable extra amount of wheelchair users
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer_5_part_1=="foldable e-bikes are NOT covered by this notice" || $answer_5_part_2=="foldable e-bikes are NOT covered by this notice"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                foldable e-bikes are NOT covered by this notice
            </ul>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>READ THE TPH NOTICE CAREFULLY AND ANSWER THE QUESTION BELOW:</h4>
            <h5>Taxi private hire notice 19/21</h5>
            <h5>
                The Divisional Court has today (Monday 6 December) given judgment in a case about the role of London
                private hire vehicle (PHV) operators and the contracts that they enter into with passengers. <br>
                The case concerned the Supreme Court’s judgment of 19 February 2021 in Uber BV v. Aslam and the
                Divisional Court has now confirmed that:
            </h5>
            <h5>
                “…..in order to operate lawfully under the Private Hire Vehicles (London) Act 1998 a licensed operator
                who accepts a booking from a passenger is required to enter as principal into a contractual obligation
                with the passenger to provide the journey which is the subject of the booking.”

            </h5>
            <h5>
                All London PHV operators will need to carefully consider the Divisional Court’s judgment and take steps
                to ensure that they comply with it, including considering whether any changes to their way of working
                are required.
            </h5>

            <h4 class="mt-5">QUESTION: Who gave the judgement regarding Private hire operators’ contracts with
                passengers?</h4>
            <ul style="padding-left: 0px;">
            <?php if($answer6=="The Supreme Court"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-check-circle" style="color: green;"></i>
                The Supreme Court
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer6=="The Divisional Court"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-check-circle" style="color: red;"></i>
                The Divisional Court
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer6=="TfL"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                TfL
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer6=="DVLA"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                DVLA
            </ul>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-info question-box">
            <h5>Understanding your results</h5>
            <p>Correct answers are marked with <i class="fas fa-check-circle" style="color: green;"></i></p>
            <p>Incorrect answers are marked with <i class="fas fa-times-circle" style="color: red;"></i></p>
            <p>Answers you selected are marked with <i class="fas fa-arrow-right"></i></p>
            <p>Correct answers are shown next to incorrect answers in [brackets]</p>
        </div>
        <?php
// Assume these are the answers submitted by the user
$answer_7_part_1 = isset($parts7[0]) ? $parts7[0] : null;
$answer_7_part_2 = isset($parts7[1]) ? $parts7[1] : null;
$answer_7_part_3 = isset($parts7[2]) ? $parts7[2] : null;

// Define the correct answers
$correct_answers = ['when', 'know', 'vehicle'];

// Check if any of the answers are null (not provided)
if ($answer_7_part_1 === null || $answer_7_part_2 === null || $answer_7_part_3 === null) {
    // Show the div with the warning message (as per your original requirement)
    echo '<div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>
            <ul style="padding-left: 0px;">
                Ridesharing is _ <span class="greenColor">[when]</span> people who do not _ <span
                    class="greenColor">[know]</span> each other pay separate fares and travel together in
                the same _ <span class="greenColor">[vehicle]</span> .
            </ul>
            <h5 class="redColor">You left some words unused or did not drag all the words into the incorrect words box.</h5>
        </div>';
} else {
    // If all answers are provided, show them with color coding based on correctness
    echo '<div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>';

    // For each answer, check correctness and set color
    $colors = [];
    foreach ([$answer_7_part_1, $answer_7_part_2, $answer_7_part_3] as $index => $answer) {
        $colors[] = $answer === $correct_answers[$index] ? 'greenColor' : 'redColor';
    }

    // Display the sentence with color-coded answers
    echo '<ul style="padding-left: 0px;">
            Ridesharing is <span class="'.$colors[0].'">['.$answer_7_part_1.']</span> people who do not <span class="'.$colors[1].'">['.$answer_7_part_2.']</span> each other pay separate fares and travel together in the same <span class="'.$colors[2].'">['.$answer_7_part_3.']</span>.
          </ul>
        </div>';
}
?>

<?php
// Assume these are the answers submitted by the user
$answer_8_part_1 = isset($parts8[0]) ? $parts8[0] : null;
$answer_8_part_2 = isset($parts8[1]) ? $parts8[1] : null;
$answer_8_part_3 = isset($parts8[2]) ? $parts8[2] : null;

// Define the correct answers
$correct_answers = ['child', 'who will be', 'operator'];

// Check if any of the answers are null (not provided)
if ($answer_8_part_1 === null || $answer_8_part_2 === null || $answer_8_part_3 === null) {
    // Show the div with the warning message (as per your original requirement)
    echo '<div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>
            <ul style="padding-left: 0px;">
            If your passenger is an unaccompanied _ <span class="greenColor"> [child]</span> , make sure your
            operator knows, and that you know the
            name of the adult _ <span class="greenColor"> [who will be] </span>meeting the child at the end of the
            journey. Your _ <span class="greenColor"> [operator] </span>should
            give you that information.
        </ul>
            <h5 class="redColor">You left some words unused or did not drag all the words into the incorrect words box.</h5>
        </div>';
} else {
    // If all answers are provided, show them with color coding based on correctness
    echo '<div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>';

    // For each answer, check correctness and set color
    $colors = [];
    foreach ([$answer_8_part_1, $answer_8_part_2, $answer_8_part_3] as $index => $answer) {
        $colors[] = $answer === $correct_answers[$index] ? 'greenColor' : 'redColor';
    }

    // Display the sentence with color-coded answers
    echo '<ul style="padding-left: 0px;">
    If your passenger is an unaccompanied <span class="'.$colors[0].'">['.$answer_8_part_1.']</span> make sure your
    operator knows, and that you know the
    name of the adult <span class="'.$colors[1].'">['.$answer_8_part_2.']</span> meeting the child at the end of the
    journey. Your <span class="'.$colors[2].'">['.$answer_8_part_3.']</span> should
    give you that information.
          </ul>
        </div>';
}
?>

<?php
// Assume these are the answers submitted by the user
$answer_9_part_1 = isset($parts9[0]) ? $parts9[0] : null;
$answer_9_part_2 = isset($parts9[1]) ? $parts9[1] : null;
$answer_9_part_3 = isset($parts9[2]) ? $parts9[2] : null;

// Define the correct answers
$correct_answers = ['transport children', 'contact', 'report something'];

// Check if any of the answers are null (not provided)
if ($answer_9_part_1 === null || $answer_9_part_2 === null || $answer_9_part_3 === null) {
    // Show the div with the warning message (as per your original requirement)
    echo '<div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>
            <ul style="padding-left: 0px;">
                As a driver, you may have to _ <span class="greenColor">[transport children]</span> or adults who are at
                risk. You may come into _
                <span class="greenColor"> [contact]</span> with passengers that are being trafficked, exploited, abused
                or who are in need of help in
                some other way. You can help with this and you should know what to do if you have concerns that a person
                is at risk. You might notice things which do not seem quite right and you could be in a position to _
                <span class="greenColor">[report something] </span> to the police that may help protect someone at risk.
            </ul>
            <h5 class="redColor">You left some words unused or did not drag all the words into the incorrect words box.</h5>
        </div>';
} else {
    // If all answers are provided, show them with color coding based on correctness
    echo '<div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>';

    // For each answer, check correctness and set color
    $colors = [];
    foreach ([$answer_9_part_1, $answer_9_part_2, $answer_9_part_3] as $index => $answer) {
        $colors[] = $answer === $correct_answers[$index] ? 'greenColor' : 'redColor';
    }

    // Display the sentence with color-coded answers
    echo '<ul style="padding-left: 0px;">
    As a driver, you may have to <span class="'.$colors[0].'">['.$answer_9_part_1.']</span> or adults who are at
    risk. You may come into <span class="'.$colors[1].'">['.$answer_9_part_2.']</span> with passengers that are being trafficked, exploited, abused
    or who are in need of help in
    some other way. You can help with this and you should know what to do if you have concerns that a person
    is at risk. You might notice things which do not seem quite right and you could be in a position to <span class="'.$colors[2].'">['.$answer_9_part_3.']</span> to the police that may help protect someone at risk.
          </ul>
        </div>';
}
?>


<?php
// Assume these are the answers submitted by the user
$answer_10_part_1 = isset($parts10[0]) ? $parts10[0] : null;
$answer_10_part_2 = isset($parts10[1]) ? $parts10[1] : null;
$answer_10_part_3 = isset($parts10[2]) ? $parts10[2] : null;

// Define the correct answers
$correct_answers = ['handbook', 'passengers', 'responsibilities'];

// Check if any of the answers are null (not provided)
if ($answer_10_part_1 === null || $answer_10_part_2 === null || $answer_10_part_3 === null) {
    // Show the div with the warning message (as per your original requirement)
    echo '<div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>
            <ul style="padding-left: 0px;">
                The <span class="greenColor"> _ [handbook]</span>  provides you with essential information to help you give your <span class="greenColor">_ [passengers]</span>  the safe
                and professional service they expect. It also includes information on your <span class="greenColor"> _ [responsibilities]</span> as a PHV
                driver.
            </ul>
            <h5 class="redColor">You left some words unused or did not drag all the words into the incorrect words box.</h5>
        </div>';
} else {
    // If all answers are provided, show them with color coding based on correctness
    echo '<div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>';

    // For each answer, check correctness and set color
    $colors = [];
    foreach ([$answer_10_part_1, $answer_10_part_2, $answer_10_part_3] as $index => $answer) {
        $colors[] = $answer === $correct_answers[$index] ? 'greenColor' : 'redColor';
    }

    // Display the sentence with color-coded answers
    echo '<ul style="padding-left: 0px;">
    The <span class="'.$colors[0].'">['.$answer_10_part_1.']</span> provides you with essential information to help you give your <span class="'.$colors[1].'">['.$answer_10_part_2.']</span> the safe
    and professional service they expect. It also includes information on your <span class="'.$colors[2].'">['.$answer_10_part_3.']</span> as a PHV
    driver.
          </ul>
        </div>';
}
?>
</div>
       <footer class="container-fluid custom-footer">
        <div class="row footer_row">
            <div class="col-md-2">
                <h5 class="footer-menu-heading">ABOUT US</h5>

                <ul class="footer-menu-p">
                    <li>
                        <p style="color: #464646;" class="footer-menu-a" href="#">Access a wealth of technical knowledge
                            with our library of
                            documents. From system requirements to user guides, our technical documents provide the
                            insights you need to make the most of your online learning experience.</p>
                    </li>

                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="footer-menu-heading">COURSES</h5>
                <ul class="footer-menu">
                    <li><a class="footer-menu-a" href="#">2 Year Online MBA General</a></li>
                    <li><a class="footer-menu-a" href="#">Certificate in HRM</a></li>
                    <li><a class="footer-menu-a" href="#">Certificate in Marketing</a></li>
                    <li><a class="footer-menu-a" href="#">Certificate in Finance</a></li>
                    <li><a class="footer-menu-a" href="#">Corporate Programs</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="footer-menu-heading">WHY UNI CONNECTIONS</h5>

                <ul class="footer-menu">
                    <li><a class="footer-menu-a" href="#">Introduction</a></li>
                    <li><a class="footer-menu-a" href="#">Learn Everywhere</a></li>
                    <li><a class="footer-menu-a" href="#">Modern Curriculum</a></li>
                    <li><a class="footer-menu-a" href="#">Placement Assistance</a></li>
                    <li><a class="footer-menu-a" href="#">Eligibility</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="footer-menu-heading">LEARNING EXPERIENCE</h5>

                <ul class="footer-menu">
                    <li><a class="footer-menu-a" href="#">Course Preparations</a></li>
                    <li><a class="footer-menu-a" href="#">Guided lessons</a></li>
                    <li><a class="footer-menu-a" href="#">Interactive Practice</a></li>
                    <li><a class="footer-menu-a" href="#">Virtual Classroom</a></li>
                    <li><a class="footer-menu-a" href="#">Peer Learning</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <img src="assets/img/logo.png" width="200" alt="">
                <div class="icons-container">
                    <a href="#" class="icon-link twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="icon-link facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="icon-link linkedin"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="icon-link youtube"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="icon-link instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

        </div>
    </footer>

    <div class="container-fluid footer_p_bottom">
        <p class="footer_p">© 2023 UNI CONNECTION. All Rights Reserved | Upbound.Studio</p>
    </div> 
    



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.min.js">
    <script>
         function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>
</body>

</html>