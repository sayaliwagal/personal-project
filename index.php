<?php include 'header.php'; ?>


<!-- Owl Stylesheets -->
<link rel="stylesheet" href="owl/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/assets/owlcarousel/assets/owl.theme.default.min.css">

    <!-- javascript -->
    <script src="owl/assets/vendors/jquery.min.js"></script>
    <script src="owl/assets/owlcarousel/owl.carousel.js"></script>

   


    <section >
        <div class="jarallax jmbotron jumbotron-fluid big-banner" id="welcome-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-8 offset-sm-2 info">
                        <h1 class=" text-center text-white">Lorem ipsum dolor</h1>
                        <p class="lead text-center text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="work.html" class="btn btn-md text-center rounded-pill"><i class="fas fa-play"></i>VIEW
                            OUR
                            WORK</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main>
        <section class="wow fadeInup" data-wow-offset="150">
        <div class="container-fluid x-box">
            <div class="row mx-auto">
                <div class="col-md-6 px-4 py-4">
                    <p class="text text-muted">
                        <span class="span">&#8243;</span><span class="p-span">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, reiciendis!</span>
                        <span class="span">&#8243;</span></p>
                    <p class="text-header text-muted">
                        <span class="badge badge-secondary bg-purpule">lorem</span> lorem impsum
                    </p>
                </div>

                <div class="col-md-6">
                    <h1 style="padding: 20px;">Lorem ipsum dolor</h1>
                    <p class="p-text text-muted">
                        <span class="baage bg-purpule bg-style">L</span>orem ipsum dolor sit amet consectetur adipisicing elit. Qui reprehenderit recusandae soluta voluptatum, totam facere accusantium in illo dolore sapiente.
                    </p>
                    <p class="p-text text-muted">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias totam ducimus non assumenda! Cupiditate, soluta. Earum maiores aperiam error eaque nostrum consequatur provident saepe, dolore, pariatur neque beatae ipsam amet, sapiente soluta eius laborum tempore veritatis. Illo eius reiciendis dolorum laboriosam, repellat aliquam necessitatibus omnis? Enim quam sequi quo veniam!

                    </p>
                    <a href="#" class="btn btn-outline-dark rounded-pill outlined-button"> Read More</a>
                </div>
            </div>
        </div>
        </section>


        <div class=" jarallax jmbotron jumbotron-fluid other-banner">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-8 offset-sm-2 info3 mb-5">
                        <a class=" mr-auto aling-item-center" href="#"><img
                                src="assets/image/best of chocolate-logos_transparent.png" width="150" height="150" alt=""></a>
                        <h1 class=" text-center text-white">Who We Are</h1>
                        <p class="lead text-center text-white">CLICK BELOW TO WATCH OUR VIDEO</p>
                        <a href="#" class="btn btn-md text-center watch-me rounded-pill"><i
                                class="fas fa-play"></i>WATCH VIDEO </a>
                    </div>
                    <div class="col-md-12 text-center mx-auto mt-5 d-block">
                        <a href="#work">
                            <i class="text-white downward-arrow fas fa-angle-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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
                    <div class=" pl-5 ml-5 mb-5">
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

        <!-- our service start here  -->
        <section id="service">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-md-2 pt-5 mt-5 div-text">
                        <h1 class="text-center">Our Services</h1>
                        <p class="text-muted text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem explicabo ratione sequi non veniam deserunt dolor labore incidunt dolore cupiditate iusto natus tempore omnis officiis unde in magni, voluptatum adipisci. Enim animi et sit autem perferendis id praesentium voluptates eum..</p>
                    </div>
                </div>
                <div class="mt-auto mb-auto"></div>
                <div class="row">
                    <div class="col-md-4">
                    <p class="text-center">
                            <span class="badge badge-st"><i class="fas fa-desktop"></i></span>
                     
                        <h2 class="h-text text-center">Lorem</h2>
                        <span class="no-more"><i class="fas fa-angle-down"></i></span>
                    </p>
                        <ul class="ul-item text-center text-muted">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <hr class="hr-dive">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <hr class="hr-dive">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <hr class="hr-dive">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <span class="icon">
                            <p class=" text-center">
                                <span class="badge badge-st"><i class="fas fa-paint-brush"></i></span>
                           
                            <h2 class="h-text text-center">Lorem</h2>
                            <span class="no-more"><i class="fas fa-angle-down"></i></span>
                            </p>
                        </span>
                        <ul class=" ul-item text-center text-muted">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <hr class="hr-dive">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <hr class="hr-dive">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <hr class="hr-dive">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p class="text-center text-center">
                            <span class="badge badge-st"><i class="fas fa-globe-americas"></i></span>
                        <h2 class="h-text text-center">Lorem</h2>
                        <span class="no-more"><i class="fas fa-angle-down"></i></span>
                        </p>
                        <ul class=" ul-item text-center text-muted">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <hr class="hr-dive">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <hr class="hr-dive">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                            <hr class="hr-dive">
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        </ul>
                    </div>
                    <a href="service.html" class="btn btn-md bg-purpule text-white sr-btn text-center rounded-pill">VIEW
                        ALL
                        SERVICES</a>
                </div>









                <div class="owl-carousel">
                <?php for($love= 0; $love < 20; $love++){ ?>
                    <div class="item">
                        <img src="https://picsum.photos/300/250?random=<?= rand('1','500') ?>" alt="First slide">
                    </div>
                <?php } ?>
                </div>
        </section>
        <!-- our service end here  -->

        <!-- contact start here    -->
        <section id="header">
            <div class="jumbotron jumbotron-fluid mt-5 color-img img-responsive text-center">
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



         <script>
        jQuery(document).ready(function ($)
        {
            $('.owl-carousel').owlCarousel({
                items: 4,
                loop: true,
                autoplay:true,
                autoplayTimeout:2000,

            });
        });
    </script>

        <?php include 'footer.php'; ?>
      