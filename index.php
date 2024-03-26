<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

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
        <p class="background-image-text">Quiz</p>
    </div>


    <section class="container quiz_container">

        <form action="score.php" method="post">


            <div id="box_1" class="box">
                <h1 class="mainHeading">If you develop a new medical condition that affects your ability to drive,
                    whatshouldyou
                    do?</h1>
                <div class="RadioButton">
                    <label>
                        <input type="radio" name="medical_condition1" value="Inform the DVLA only"> <span
                            class="radioP">Inform the DVLA only</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="medical_condition1" value="Tell TfL immediately"> <span
                            class="radioP">Tell TfL immediately</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="medical_condition1" value="Wait for a week to see if things improve">
                        <span class="radioP">Wait for a week to see if things
                            improve </span>
                    </label>
                    <br>



                </div>
                <div class="row RadioButton">
                    <div class="col-md-4 centerr">
                        <button id="1" type="button" class="button-back btn_back">
                            <span class="arrow">&larr;</span> Back
                        </button>
                    </div>
                    <div class="col-md-4">
                        <p class="center">1 of 10</p>
                    </div>
                    <div class="col-md-4 center">
                        <button id="2" type="button" class="button-next btn_next">
                            Next <span class="arrow">&rarr;</span>
                        </button>
                    </div>
                </div>
            </div>

            <div id="box_2" class="box">
                <h1 class="mainHeading">What part of the vehicle are PHV licence discs attached?</h1>

                <div class="RadioButton">
                    <label>
                        <input type="radio" name="medical_condition2" value="rear windscreen only"> <span
                            class="radioP">rear windscreen only</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="medical_condition2" value="front windscreen only"> <span
                            class="radioP">front windscreen only</span>
                    </label>
                    <br>

                    <label>
                        <input type="radio" name="medical_condition2" value="front and rear
                        windscreens"> <span class="radioP">front and rear
                            windscreens</span>
                    </label>
                    <br>

                </div>

                <div class="row RadioButton">
                    <div class="col-md-4 centerr">
                        <button id="2" type="button" class="button-back btn_back"><span class="arrow">&larr;</span>
                            Back</button>
                    </div>
                    <div class="col-md-4">
                        <p class="center">2 of 10</p>
                    </div>
                    <div class="col-md-4 center">
                        <button id="3" type="button" class="button-next btn_next">Next <span
                                class="arrow">&rarr;</span></button>
                    </div>
                </div>
            </div>


            <div id="box_3" class="box">
                <h1 class="mainHeading">Who is in charge of setting a fare or giving an accurate estimate to a member of
                    the
                    public?</h1>

                <div class="RadioButton">
                    <label>
                        <input type="radio" name="medical_condition3" value="The private hire vehicle operator"> <span
                            class="radioP">The private hire vehicle operator</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="medical_condition3" value="The driver of the private hire vehicle">
                        <span class="radioP">The driver of the private hire vehicle</span>
                    </label>
                    <br>

                    <label>
                        <input type="radio" name="medical_condition3" value="DVLA"> <span class="radioP">DVLA</span>
                    </label>
                    <br>

                </div>

                <div class="row RadioButton">
                    <div class="col-md-4 centerr">
                        <button id="3" type="button" class="button-back btn_back"><span class="arrow">&larr;</span>
                            Back</button>
                    </div>
                    <div class="col-md-4">
                        <p class="center">3 of 10</p>
                    </div>
                    <div class="col-md-4 center">
                        <button id="4" type="button" class="button-next btn_next">Next <span
                                class="arrow">&rarr;</span></button>
                    </div>
                </div>
            </div>

            <div id="box_4" class="box">
                <h1 class="mainHeading">What measures could you take to lower the chances of a passenger becoming aggressive towards you? </h1>

                <div class="RadioButton">
                    <label>
                        <input type="radio" name="medical_condition4" value="Speak calmly and ask them questions."> <span class="radioP">Speak calmly and ask them questions.</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="medical_condition4" value="Speak louder to make sure they know what you are trying to say."> <span class="radioP">Speak louder to make sure they know what you are trying to say.</span>
                    </label>
                    <br>

                    <label>
                        <input type="radio" name="medical_condition4" value="Try to pay no attention to them and hope they calm down"> <span class="radioP">Try to pay no attention to them and hope they calm down</span>
                    </label>
                    <br>

                </div>

                <div class="row RadioButton">
                    <div class="col-md-4 centerr">
                        <button id="4" type="button" class="button-back btn_back"><span class="arrow">&larr;</span>
                            Back</button>
                    </div>
                    <div class="col-md-4">
                        <p class="center">4 of 10</p>
                    </div>
                    <div class="col-md-4 center">
                        <button id="5" type="button" class="button-next btn_next">Next <span
                                class="arrow">&rarr;</span></button>
                    </div>
                </div>
            </div>

            <div id="box_5" class="box">
                <h1 class="mainHeading">READ THE TPH CAREFULLY AND ANSWER THE QUESTION BELOW:</h1>
                <h1 class="mainHeading">TPH Notice 11/20 Carriage of e-scooters and e-unicycles</h1>
                <h1 class="mainHeading">Ban on e-scooters and e-unicycles on TfL services</h1>
                <h1 class="mainHeading">Transport for London (TfL) has announced that all privately-owned e-scooters and
                    e-unicycles, including those that can be folded or carried, will not be permitted on its
                    services from Monday 13 December 2021</h1>
                <h1 class="mainHeading">This is the result of safety concerns about these items following recent fires
                    on
                    transport premises and services. Customers in possession of such devices will not be permitted to
                    enter
                    any
                    premises on TfL’s network or travel on any of its services, including on the Tube, buses,
                    Overground,
                    TfL
                    Rail, Trams and DLR.</h1>
                <h1 class="mainHeading">This guidance does not include foldable e-bikes, that are generally subject to
                    better
                    manufacturing standards and the batteries are usually positioned in a place where
                    they are less likely to be damaged, and so are less of a fire risk.</h1>


                <h1 class="mainHeading RadioButton">Which two statements are correct:</h1>

                <div class="RadioButton11">
                    <label>
                        <input type="checkbox" name="medical_condition5" value="privately-owned
                            e-scooters
                            and
                            e-unicycles are allowed on TfL services as long as they are folded safely and
                            securely"> <span class="radioP">privately-owned
                            e-scooters
                            and
                            e-unicycles are allowed on TfL services as long as they are folded safely and
                            securely</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="medical_condition5" value="foldable e-bikes are NOT
                            covered
                            by this notice"> <span class="radioP">foldable e-bikes are NOT
                            covered
                            by this notice</span>
                    </label>
                    <br>

                    <label>
                        <input type="checkbox" name="medical_condition5" value="privately-owned
                            e-scooters
                            and
                            e-unicycles are allowed on any TfL services"> <span class="radioP">privately-owned
                            e-scooters
                            and
                            e-unicycles are allowed on any TfL services</span>
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="medical_condition5" value="According to Section 165
                            of
                            the
                            Equality Act 2010 PHV drivers wheelchair accessible taxis can charge reasonable extra amount
                            of
                            wheelchair users"> <span class="radioP">According to Section 165
                            of
                            the
                            Equality Act 2010 PHV drivers wheelchair accessible taxis can charge reasonable extra amount
                            of
                            wheelchair users</span>
                    </label>

                </div>
                <input type="hidden" name="medical_condition_append" id="medical_condition_append">

                <div class="row RadioButton">
                    <div class="col-md-4 centerr">
                        <button id="5" type="button" class="button-back btn_back"><span class="arrow">&larr;</span>
                            Back</button>
                    </div>
                    <div class="col-md-4">
                        <p class="center">5 of 10</p>
                    </div>
                    <div class="col-md-4 center">
                        <button id="6" type="button" class="button-next btn_next">Next <span
                                class="arrow">&rarr;</span></button>
                    </div>
                </div>
            </div>


            <div id="box_6" class="box">
                <h1 class="mainHeading">READ THE TPH CAREFULLY AND ANSWER THE QUESTION BELOW:</h1>
                <h1 class="mainHeading">Taxi private hire notice 19/21
                </h1>
                <h1 class="mainHeading">The Divisional Court has today (Monday 6 December) given judgment in a case
                    about
                    the
                    role of London private hire vehicle (PHV) operators and the contracts that they enter into with
                    passengers.
                </h1>
                <h1 class="mainHeading">The case concerned the Supreme Court’s judgment of 19 February 2021 in Uber BV
                    v.
                    Aslam
                    and the Divisional Court has now confirmed that:
                </h1>
                <h1 class="mainHeading">“…..in order to operate lawfully under the Private Hire Vehicles (London) Act
                    1998 a
                    licensed operator who accepts a booking from a passenger is required to enter as principal into a
                    contractual obligation with the passenger to provide the journey which is the subject of the
                    booking.”
                </h1>
                <h1 class="mainHeading">All London PHV operators will need to carefully consider the Divisional Court’s
                    judgment
                    and take steps to ensure that they comply with it, including considering whether any changes to
                    their
                    way of
                    working are required.</h1>




                <h1 class="mainHeading RadioButton">QUESTION: Who gave the judgement regarding Private hire operators’
                    contracts
                    with passengers?
                </h1>

                <div class="RadioButton">
                    <label>
                        <input type="radio" name="medical_condition6" value="DVLA"> <span class="radioP">DVLA</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="medical_condition6" value="TfL"> <span class="radioP">TfL</span>
                    </label>
                    <br>

                    <label>
                        <input type="radio" name="medical_condition6" value="The Supreme Court"> <span class="radioP">The Supreme Court</span>
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="medical_condition6" value="The Divisional Court"> <span class="radioP">The Divisional Court</span>
                    </label>

                </div>

                <div class="row RadioButton">
                    <div class="col-md-4 centerr">
                        <button id="6" type="button" class="button-back btn_back"><span class="arrow">&larr;</span>
                            Back</button>
                    </div>
                    <div class="col-md-4">
                        <p class="center">6 of 10</p>
                    </div>
                    <div class="col-md-4 center">
                        <button id="7" type="button" class="button-next btn_next">Next <span
                                class="arrow">&rarr;</span></button></button>
                    </div>
                </div>
            </div>

            <div id="box_7" class="box">
                <h2 class="drag_h2">Drag the words into the spaces to complete the sentence.</h2>
                <h3 class="redheading">Any remaining words must be put in the red box.</h3>

                <h4 class="fill-in">Ridesharing is <span class="fill-in-the-blank"></span> people who do not <span
                        class="fill-in-the-blank"></span> each other pay separate fares and travel together in the
                    same.<span class="fill-in-the-blank"></span></h4>

                <div class="tables_ui" id="t_draggable1">
                    <div class="">
                        <h2 class="words_incorrectwords">Words</h2>
                        <div class="custom_row">
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">Known</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">when</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">vehicle</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">vehicles</div>
                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">Know</div>
                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">when</div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="tables_ui" id="t_draggable7">
                    <h2 class="words_incorrectwords">Incorrect words</h2>
                    <div class="custom_row table-background">
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">
                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">
                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">
                        </div>
                    </div>
                </div>
                <input type="hidden" id="incorrectWordsInput1" name="incorrect_words1">
                <div class="row RadioButton">
                    <div class="col-md-4 centerr">
                        <button id="7" type="button" class="button-back btn_back"><span class="arrow">&larr;</span>
                            Back</button>
                    </div>
                    <div class="col-md-4">
                        <p class="center">7 of 10</p>
                    </div>
                    <div class="col-md-4 center">
                        <button id="8" type="button" class="button-next btn_next">Next <span
                                class="arrow">&rarr;</span></button>
                    </div>
                </div>
            </div>


            <div id="box_8" class="box">
                <h2 class="drag_h2">Drag the words into the spaces to complete the sentence.</h2>
                <h3 class="redheading">Any remaining words must be put in the red box.</h3>

                <h4>
                    Ensure your operator is aware if your passenger is unaccompanied, <span
                        class="fill-in-the-blank"></span>
                    and ensure you have the name of the adult <span class="fill-in-the-blank"></span>
                    meeting the child at the journey's end, which your <span class="fill-in-the-blank"></span> should
                    provide.
                </h4>


                <div class="tables_ui" id="t_draggable1">
                    <div class="">
                        <h2 class="words_incorrectwords"> Words</h2>
                        <div class="custom_row">
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">child</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">who will</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">children</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">who will be</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">operators</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">operator</div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tables_ui" id="t_draggable8">
                    <h2 class="words_incorrectwords">Incorrect words</h2>
                    <div class="custom_row table-background">
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>

                    </div>
                </div>
                <input type="hidden" id="incorrectWordsInput2" name="incorrect_words2">


                <div class="row RadioButton">
                    <div class="col-md-4 centerr">
                        <button id="8" type="button" class="button-back btn_back"><span class="arrow">&larr;</span>
                            Back</button>
                    </div>
                    <div class="col-md-4">
                        <p class="center">8 of 10</p>
                    </div>
                    <div class="col-md-4 center">
                        <button id="9" type="button" class="button-next btn_next">Next <span
                                class="arrow">&rarr;</span></button>
                    </div>
                </div>
            </div>


            <div id="box_9" class="box">
                <h2 class="drag_h2">Drag the words into the spaces to complete the sentence.</h2>
                <h3 class="redheading">Any remaining words must be put in the red box.</h3>

                <h4>
                    As a driver , you may have to <span class="fill-in-the-blank"></span> or adults who are at a risk.
                    You
                    may
                    come into <span class="fill-in-the-blank"></span> with passengers that are being trafficked ,
                    exploited
                    ,abused or who are in need of help in some other way. you can help with this and you should know
                    what to
                    do
                    if you have concerns that a person is at risk . you might notice things which do not seem quite
                    right
                    and
                    you could be in a postion to <span class="fill-in-the-blank"></span> to the police that may help
                    protect
                    someone at risk.
                </h4>



                <div class="tables_ui" id="t_draggable1">
                    <div class="">
                        <h2 class="words_incorrectwords">Words</h2>
                        <div class="custom_row">
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">contact</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">transport children</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">contact</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">reported something</div>
                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">children transport</div>
                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">report something</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tables_ui" id="t_draggable9">
                    <h2 class="words_incorrectwords">Incorrect words</h2>
                    <div class="custom_row table-background">
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                    </div>
                </div>
                <input type="hidden" id="incorrectWordsInput3" name="incorrect_words3">

                <div class="row RadioButton">
                    <div class="col-md-4 centerr">
                        <button id="9" type="button" class="button-back btn_back"><span class="arrow">&larr;</span>
                            Back</button>
                    </div>
                    <div class="col-md-4">
                        <p class="center">9 of 10</p>
                    </div>
                    <div class="col-md-4 center">
                        <button id="10" type="button" class="button-next btn_next">Next <span
                                class="arrow">&rarr;</span></button>
                    </div>
                </div>
            </div>

            <div id="box_10" class="box">
                <h2 class="drag_h2">Drag the words into the spaces to complete the sentence.</h2>
                <h3 class="redheading">Any remaining words must be put in the red box.</h3>

                <h4>
                    The <span class="fill-in-the-blank"></span> provides you with essential information to help you give
                    your
                    <span class="fill-in-the-blank"></span> the safe and professional service they expect. it also
                    includes
                    information on your <span class="fill-in-the-blank"></span>as a PHV driver
                </h4>


                <div class="tables_ui" id="t_draggable1">
                    <div class="">
                        <h2 class="words_incorrectwords">Words</h2>
                        <div class="custom_row">
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">handbook</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">passengers</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">responsible</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">Passenger</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">hands book</div>

                            </div>
                            <div class="t_sortable" style="width:25%;border:1px solid black;">
                                <div class="custom_cell">responsibilities</div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tables_ui" id="t_draggable10">
                    <h2 class="words_incorrectwords">Incorrect words</h2>
                    <div class="custom_row table-background">
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                        <div class="t_sortable" style="width:25%;border:1px solid black;">

                        </div>
                    </div>
                </div>
                <input type="hidden" id="incorrectWordsInput4" name="incorrect_words4">


                <div class="row RadioButton">
                    <div class="col-md-4 centerr">
                        <button id="10" type="button" class="button-back btn_back"><span class="arrow">&larr;</span>
                            Back</button>
                    </div>
                    <div class="col-md-4">
                        <p class="center">10 of 10</p>
                    </div>
                    <div class="col-md-4 center">
                        <button id="11" type="submit" type="button" class="button-next btn_next btn_submit">Submit <span
                                class="arrow">&#10003;</span></button>
                    </div>
                </div>
            </div>
        </form>
    </section>

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
    <script>
        $(document).ready(function () {
            $(".box").hide();
            $("#box_1").show();

            $(".btn_next").on("click", function () {
                if ($(this).closest(".box").attr("id") !== "box_10") {
                    $(this).closest(".box").hide().next().show();
                }
            });

            $(".btn_back").on("click", function () {
                if ($(this).closest(".box").attr("id") !== "box_1") {
                    $(this).closest(".box").hide().prev().show();
                }
            });
            $(".t_sortable").sortable({
                connectWith: ".t_sortable",
                items: ".custom_cell",
                zIndex: 999990,
                receive: function (event, ui) {
                    if ($(this).find('.custom_cell').length > 1) {
                        $(ui.sender).sortable('cancel');
                    }
                }
            }).disableSelection();
        });

        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        $(document).ready(function() {
    $(".btn_submit").click(function() {
        
        var incorrectWords1 = [];
        
        
        $("#t_draggable7 .custom_cell").each(function() {
           
            incorrectWords1.push($(this).text());
        });
        
       
        var concatenatedWords1 = incorrectWords1.join(",");
        
        
        $("#incorrectWordsInput1").val(concatenatedWords1);

        var incorrectWords2 = [];
        
        
        $("#t_draggable8 .custom_cell").each(function() {
           
            incorrectWords2.push($(this).text());
        });
        
       
        var concatenatedWords2 = incorrectWords2.join(",");
        
        
        $("#incorrectWordsInput2").val(concatenatedWords2);

        var incorrectWords3 = [];
        
        
        $("#t_draggable9 .custom_cell").each(function() {
           
            incorrectWords3.push($(this).text());
        });
        
       
        var concatenatedWords3 = incorrectWords3.join(",");
        
        
        $("#incorrectWordsInput3").val(concatenatedWords3);

        var incorrectWords4 = [];
        
        
        $("#t_draggable10 .custom_cell").each(function() {
           
            incorrectWords4.push($(this).text());
        });
        
       
        var concatenatedWords4 = incorrectWords4.join(",");
        
        
        $("#incorrectWordsInput4").val(concatenatedWords4);

        
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('.RadioButton11 input[type="checkbox"]');
    const hiddenInput = document.getElementById('medical_condition_append');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const checkedBoxes = document.querySelectorAll('.RadioButton11 input[type="checkbox"]:checked');
            
            if (checkedBoxes.length > 2) {
                alert('You can only select up to 2 options.');
                checkbox.checked = false;
                return;
            }

           
            let selectedValues = [];
            checkedBoxes.forEach(function(checkedBox) {
                selectedValues.push(checkedBox.value);
            });
            hiddenInput.value = selectedValues.join(',');
        });
    });
});
    </script>






    <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.min.js">
</body>

</html>