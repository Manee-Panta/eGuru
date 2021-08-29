<?php include_once("session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php include 'main.php';
    include 'nav1.php';
    $page_title = "eGuru";
    ?>


</head>

<body>
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="img/banner3.jpg" alt="Third slide"
                        style="height:556px; object-fit:cover;">
                    <div class="carousel-caption d-none d-md-block"
                        style="font-family:cursive; font-weight: bold; color:black;">
                        <h4 class="pb-5" style="height: 55px;">"You are never too old to be a programmer"</h4>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/img2.jpg" alt="Second slide"
                        style="height: 556px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block" style="color: black; font-weight:bold;">
                        <h4>First Learn And Then Remove "L"</h4>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/code.jpg " alt="First slide"
                        style="height: 556px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>You only have to know one thing</h3>
                        <h4>"You can learn anything"</h4>
                        </h5>

                    </div>
                </div>

            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </section>
    <!-- Start Text Banner -->
    <div class="container-fluid bg-info txt banner">
        <div class="row buttom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i>100+ Online Course</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-user mr-3"></i>Expert Instructors</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-certificate mr-3"></i>Online Certificate</h5>
            </div>
        </div>
    </div>
    <!-- End Text Banner -->
    <!--Start Hero Section-->
    <div class="container-fluid mycontainer">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron mt-1 mb-0 mx-0">
                    <h1 class="display-6" style="font-family:cursive;"> Find Your Course</h1>
                    <p class="lead">We help you maximize performance and build a healthy organization.</p>
                    <hr class="my-4">

                    <div class="row">
                        <div class="col-sm-4">Design <br><br>
                            <img src="img/design1.jpg" class="myimg" alt="Design">
                        </div>
                        <div class="col-sm-4">Development <br><br>
                            <img src="img/banner2.jpg" class="myimg" alt="Development">
                        </div>
                        <div class="col-sm-4">Analytic <br><br>
                            <img src="img/analytic.jpg" class="myimg" alt="Analytic">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Hero Section-->





    <!--Course-->
    <section class="course mt-5 ">
        <h2 class="text-center text-dark">Our Popular Courses</h2>
        <div class="contain my-5 mx-5">
            <!-- <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/python.png" alt="Card image cap"
                            style="height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Python</h5>
                            <p class="card-text">Python is an interpreted high-level general-purpose programming
                                language. Python's design philosophy emphasizes code readability with its notable use of
                                significant indentation.</p>
                            <a href="course.php" class="btn btn-primary">Learn Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/a.png" alt="Card image cap"
                            style="height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Web Development</h5>
                            <p class="card-text">Web development is the work involved in developing a Web site for the
                                Internet or an intranet. Web development can range from developing a simple single
                                static page of plain text to complex web applications.</p>
                            <a href="course.php" class="btn btn-primary">Learn Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/C.png" alt="Card image cap"
                            style="height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">C language</h5>
                            <p class="card-text">C is a general-purpose, procedural computer programming language
                                supporting structured programming, lexical variable scope, and recursion, with a static
                                type system.</p>
                            <a href="course.php" class="btn btn-primary">Learn Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/java.png" alt="Card image cap"
                            style="height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Java</h5>
                            <p class="card-text">Java is a powerful general-purpose programming language. It is used to
                                develop desktop and mobile applications, big data processing, embedded systems, and so
                                on</p>
                            <a href="course.php" class="btn btn-primary">Learn Now</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col">
                    <div class="card" style="background-color: white; border: none;">
                        <div class="card-body text-center">
                            <img class="img-fluid rounded-circle cover mb-4  " src="img/html.png" alt="Card image cap">
                            <h5 class="card-title text-center">HTML</h5>
                            <p class="card-text text-justify"
                                style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                                The HyperText Markup
                                Language, or HTML is the standard
                                markup language for documents designed to be displayed in a web browser. It can be
                                assisted by various technologies.</p>
                            <a href="course.php" class="btn btn-primary mx-5">Learn Now</a>
                        </div>

                    </div>

                </div>
                <div class="col">
                    <div class="card" style="background-color: white; border: none;">
                        <div class="card-body">
                            <img class="img-fluid rounded-circle cover mb-4 " src="img/course/java.png"
                                alt="Card image cap">
                            <h5 class="card-title">JAVA</h5>
                            <p class="card-text text-justify"
                                style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                                Java is a high-level
                                programming language originally
                                developed by Sun Microsystems and released in 1995. Java runs on a variety of platforms,
                                such as Windows, Mac OS, etc. </p>
                            <a href="course.php" class="btn btn-primary mx-5">Learn Now</a>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background-color: white; border: none;">
                        <div class="card-body">
                            <img class="img-fluid rounded-circle cover mb-4 " src="img/course/ruby.png"
                                alt="Card image cap">
                            <h5 class="card-title">RUBY</h5>
                            <p class="card-text text-justify "
                                style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                                Ruby is an interpreted,
                                high-level, general-purpose
                                programming language. It was designed and developed in the mid-1990s by Yukihiro "Matz"
                                Matsumoto in Japan. </p>
                            <a href="course.php" class="btn btn-primary mx-5;">Learn Now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container-fluid" style="background-color: #f4d0f0;">
        <div class="custom-jumbo">
            <div class="row text-center">
                <div class="col">
                    <h4 class="mt-5 custom-h4">Ready to join?</h4>
                    <br>
                    <a href="login.php" class="btn btn-primary custom-btn">Get Started Now</a>
                </div>

                <div class="col">
                    <img class="img-custom" alt="Study now" src="img/girl.png"><br>
                </div>
            </div>
        </div>
    </div>

    <!--Start Contact Us-->
    <section class="container-fluid text-center py-5" id="contact">
        <h3 class="pb-2 my-4">Get in touch with us today!</h3>
        <p class="lead pb-3">Send us a message and we will get back to
            you as soon as possible.</p>
        <a href="contact.php" class="btn  btn-lg mb-5 custom-btn" role="button">Contact us</a>
    </section>
    <!--End Contact Us-->
    <?php
    include 'footer.php';
    // include 'uparrow.php';
    ?>
    <!-- Scroll to top button-->
    <a class="scroll-to-top rounded" href="#page-top">

        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>

</body>

</html>