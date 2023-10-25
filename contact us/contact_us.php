<?php

include 'dbcon.php';


if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);



    $insert = "INSERT INTO contact_us(name, email,message) values('$name','$email','$message')";

    $query = mysqli_query($con, $insert);

    if ($query) {
        echo '<script>alert("Your Contact Form is Submitted Sucessfully.")</script>';
        header("refresh:1 ; url=../contact us/contact_us.php");
    } else {
        echo '<script>alert("Unsuccessful Form Submition!!!")</script>';
    }
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/nicepagecon.css" media="screen">
    <link rel="stylesheet" href="../css/contact.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.11.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <meta name="theme-color" content="#30415b">
    <meta property="og:title" content="Page 5">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
    <header class="u-clearfix u-header u-header" id="sec-6a9f">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <nav id="navbar">
                <ul>
                    <div class="nav-img">
                        <img src="../img/omsportsshopee logo.png" alt="" srcset="">
                    </div>
                    <li> <a href="../html/home1.html">Home</a> </li>
                    <li> <a href="../store/store.php">Store</a> </li>
                    <li> <a href="../special_items/special_items.php">Special Items</a> </li>
                    <li> <a href="../aboutus/about_us.php">About Us</a> </li>
                    <li> <a href="../contact us/contact_us.php">Contact</a> </li>
                    <!-- <li> <a href="#">Payment</a> </li> -->
                </ul>
            </nav>
            <button class="btn"> <a href="../login_register/logout.php">Logout</a></button>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-nav-container"></div>
                <div class="u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-1">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-5.html">Page 5</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-clearfix u-section-1" id="sec-6fc2">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-black u-clearfix u-section-2" id="sec-ea8f">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-col">
                        <div class="u-size-30">
                            <div class="u-layout-row">
                                <div class="u-size-30">
                                    <div class="u-layout-col">
                                        <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                                <h2 class="u-text u-text-default u-text-1">Contact Us</h2><span class="u-icon u-icon-circle u-text-palette-3-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60">
                                                        <use xlink:href="#svg-a491"></use>
                                                    </svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-a491" style="enable-background:new 0 0 60 60;">
                                                        <g>
                                                            <path d="M30,26c3.86,0,7-3.141,7-7s-3.14-7-7-7s-7,3.141-7,7S26.14,26,30,26z M30,14c2.757,0,5,2.243,5,5s-2.243,5-5,5
		s-5-2.243-5-5S27.243,14,30,14z"></path>
                                                            <path d="M29.823,54.757L45.164,32.6c5.754-7.671,4.922-20.28-1.781-26.982C39.761,1.995,34.945,0,29.823,0
		s-9.938,1.995-13.56,5.617c-6.703,6.702-7.535,19.311-1.804,26.952L29.823,54.757z M17.677,7.031C20.922,3.787,25.235,2,29.823,2
		s8.901,1.787,12.146,5.031c6.05,6.049,6.795,17.437,1.573,24.399L29.823,51.243L16.082,31.4
		C10.882,24.468,11.628,13.08,17.677,7.031z"></path>
                                                            <path d="M42.117,43.007c-0.55-0.067-1.046,0.327-1.11,0.876s0.328,1.046,0.876,1.11C52.399,46.231,58,49.567,58,51.5
		c0,2.714-10.652,6.5-28,6.5S2,54.214,2,51.5c0-1.933,5.601-5.269,16.117-6.507c0.548-0.064,0.94-0.562,0.876-1.11
		c-0.065-0.549-0.561-0.945-1.11-0.876C7.354,44.247,0,47.739,0,51.5C0,55.724,10.305,60,30,60s30-4.276,30-8.5
		C60,47.739,52.646,44.247,42.117,43.007z"></path>
                                                        </g>
                                                    </svg></span>
                                                <p class="u-align-left u-custom-font u-heading-font u-res-move-started u-text u-text-default u-text-2">Om Sports Shopee.
                                                    MIT-WPU,Pune.
                                                </p><span class="u-icon u-icon-circle u-text-palette-3-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60">
                                                        <use xlink:href="#svg-481f"></use>
                                                    </svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-481f" style="enable-background:new 0 0 60 60;">
                                                        <g>
                                                            <path d="M42.595,0H17.405C14.977,0,13,1.977,13,4.405v51.189C13,58.023,14.977,60,17.405,60h25.189C45.023,60,47,58.023,47,55.595
		V4.405C47,1.977,45.023,0,42.595,0z M15,8h30v38H15V8z M17.405,2h25.189C43.921,2,45,3.079,45,4.405V6H15V4.405
		C15,3.079,16.079,2,17.405,2z M42.595,58H17.405C16.079,58,15,56.921,15,55.595V48h30v7.595C45,56.921,43.921,58,42.595,58z"></path>
                                                            <path d="M30,49c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S32.206,49,30,49z M30,55c-1.103,0-2-0.897-2-2s0.897-2,2-2
		s2,0.897,2,2S31.103,55,30,55z"></path>
                                                            <path d="M26,5h4c0.553,0,1-0.447,1-1s-0.447-1-1-1h-4c-0.553,0-1,0.447-1,1S25.447,5,26,5z"></path>
                                                            <path d="M33,5h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S32.447,5,33,5z"></path>
                                                            <path d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
		c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		C61.128,16.434,61.128,9.085,56.612,4.569z"></path>
                                                            <path d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
		s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z"></path>
                                                            <path d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		C1.065,15.799,1.065,9.72,4.802,5.983z"></path>
                                                            <path d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z"></path>
                                                        </g>
                                                    </svg></span>
                                                <p class="u-custom-font u-heading-font u-text u-text-default u-text-3">9876546576 <br>9876546574
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-size-30">
                                    <div class="u-layout-col">
                                        <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-2">
                                            <div class="u-container-layout u-container-layout-2">
                                                <div class="u-form u-form-1">
                                                    <form action="../contact us/contact_us.php" method="post" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form-1">
                                                        <input type="hidden" id="siteId" name="siteId" value="2019794">
                                                        <input type="hidden" id="pageId" name="pageId" value="2019795">
                                                        <div class="u-form-group u-form-name">
                                                            <label for="name-23d6" class="u-form-control-hidden u-label">Name</label>
                                                            <input type="text" placeholder="Enter your Name" id="name-23d6" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                                                        </div>
                                                        <div class="u-form-email u-form-group">
                                                            <label for="email-23d6" class="u-form-control-hidden u-label">Email</label>
                                                            <input type="email" placeholder="Enter a valid email address" id="email-23d6" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                                                        </div>
                                                        <div class="u-form-group u-form-message">
                                                            <label for="message-23d6" class="u-form-control-hidden u-label">Message</label>
                                                            <textarea placeholder="Enter your message" rows="4" cols="50" id="message-23d6" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
                                                        </div>
                                                        <div class="u-form-group u-form-submit">
                                                            <button id="contactbtn" name="submit">Sumbit </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-30">
                            <div class="u-layout-row">
                                <div class="u-container-style u-image u-layout-cell u-left-cell u-size-15 u-size-30-md u-image-1">
                                    <div class="u-container-layout u-container-layout-3"></div>
                                </div>
                                <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-4">
                                    <div class="u-container-layout u-valign-middle u-container-layout-4">
                                        <h3 class="u-text u-text-default u-text-4">We are looking forward to start a project with you! </h3>
                                    </div>
                                </div>
                                <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-5">
                                    <div class="u-container-layout u-valign-middle u-container-layout-5">
                                        <p class="u-custom-font u-heading-font u-text u-text-default u-text-5"></p>
                                    </div>
                                </div>
                                <div class="u-container-style u-image u-layout-cell u-right-cell u-size-15 u-size-30-md u-image-2">
                                    <div class="u-container-layout u-container-layout-6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-8060">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">You Can Contact Us With This Platforms.</p>
        </div>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-whatsapp"></a>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
        <p class="u-text">
        <footer id="footer">Copyright © 2022 Sports Shop.in | All rights reserved</footer>
        </p>
        <div>
    <p>Location</p>
    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.2466210648786!2d73.81269391475224!3d18.517754187410674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfb9e53a05f9%3A0x2be5e8da02be693e!2sMIT%20World%20Peace%20University!5e0!3m2!1sen!2sin!4v1662560660783!5m2!1sen!2sin" width="1300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </section>
</body>

</html>