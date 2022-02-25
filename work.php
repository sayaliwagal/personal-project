<?php include 'header.php'; ?>


    <!-- header start here  -->
    <div class="jarallax jmbotron work-banner img-fluid" id="service-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-8 offset-sm-2 info pt-5 mt-5">
                    <h1 class=" text-center text-white p-2">Lorem, ipsum dolor.</h1>
                    <p class="lead text-center text-white pb-2">Lorem ipsum dolor sit, amet consectetur adipisicing.
                    </p>
                    <a href="#" class="btn btn-md text-center rounded-pill"><i class="fas fa-play"></i>WATCH VIDEO </a>
                </div>
            </div>
        </div>
    </div>
    <!-- header end here -->
    <!-- web desing start here  -->
    <main>
           <!-- work start here  -->
      <section id="work">
            <div class="container-fluid work">
                <div class="row ">
                    <div class="col-md-8">
                        <h1 class="mb-4">Our Work</h1>
                        <p class="text-muted ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, neque..</p>
                    </div>
                    <div class="col-md-4 pt-5 mt-5">
                        <a href="work.html" class="btn cta bg-purpule btn-lg text-white rounded-pill mt-5 ml-4"><i
                                class=" pr-2 fa fa-long-arrow-alt-right"></i></i>Our Work</a>
                    </div>
                    <div class=" pl-5 ml-5 mb-5 img">
                    </div>
                </div>

                <div class="container pr-4 pl-4 pb-4">
                    <div class="row">
                    <?php for ($kar=0; $kar < 6 ; $kar++) { ?>
                        <div class="col-md-4 mb-5" width="500" height="900">
                            <img class="img-fluid"
                                src="https://picsum.photos/350/200?random=<?= rand('1','500') ?>" alt="">
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </section><!-- work end here  -->

        <!-- contact start here    -->
        <section id="header">
            <div class=" jarallax jumbotron jumbotron-fluid mt-5 color-img img-responsive text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 pt-5 mt-5">
                            <a class=" mr-auto aling-item-center" href="#"><img src="assets/image/best of chocolate-logos_transparent.png" width="200" height="200" alt=""></a>
                            <h1 class="text-white text-center h1-text">Lorem ipsum dolor </h1>
                            <p class="text-white text-center caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem</p>
                            <p>
                                <a href="contact.html" class="btn cta bg-white btn-lg  rounded-pill"><i
                                        class=" pr-2 fas fa-play"></i>Contact Us</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact end here  -->
       
<?php include 'footer.php'; ?> 