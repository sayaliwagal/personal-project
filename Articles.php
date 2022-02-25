<?php include 'header.php'; ?>









    <!-- <div class="card bg-dark text-white">
                        <img src="https://picsum.photos/300/250?random=<?= rand('1', '500') ?>" class="card-img" alt="...">
                        <div class="card-img-overlay">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                      </div> -->





    <main>
    <div class="jmbotron jumbotron-fluid Articles-banner" id="welcome-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8 offset-sm-2 info">
                    <h1 class=" text-center text-white pt-4">Lorem</h1>
                    <p class="lead text-center text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem nostrum, sed neque porro dolorum tempore.</p>
                    <a href="contact.html" class="btn btn-md text-center rounded-pill"><i
                            class="fas fa-play"></i>CONTACT US</a>
                </div>
            </div>
        </div>
    </div>

        <div class="container-fluid x-box">
            <div class="row mx-auto">
                <div class="col-md-6 px-4 ">
                    <p class="text text-muted">
                        <span class="span">&#8243;</span><span class="p-span">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime aperiam quaerat consectetur quia? Non, omnis.</span>
                        <span class="span text-muded">&#8243;</span>
                    </p>
                    <p class="text-header text-muted">
                        <span class="badge badge-secondary bg-purpule mr-2">Lorem ipsum</span>lorem
                    </p>
                </div>

                <div class="col-md-6 pt-5 mt-5">
                    <p class="p-text text-muted">
                        <span class="baage bg-purpule bg-style">L</span>orem ipsum dolor sit amet consectetur adipisicing elit. Iure aspernatur
                        modi quo! Eius maiores odit ad consectetur commodi, eaque voluptatem?
                    </p>
                    <p class="p-text text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus molestiae quae error neque numquam ipsam!
                        Repellendus est atque quo explicabo accusamus sequi debitis! Recusandae, inventore! Odio non iusto amet dolorum!

                    </p>
                </div>
            </div>
        </div>
        <!-- Latest Articles start here  -->
        <div class="row latest-Art">
            <div class="fadeOut owl-carousel owl-theme">
                <?php for ($like = 0; $like < 5; $like++) { ?>
                    <div class="item">
                       
                        <div class="card slide-1">

                            <img src="https://picsum.photos/300/250?random=<?= rand('1', '500') ?>" height="" alt="">

                            <div class="row slide-content card-img-overlay">
                                <div class=" col-md-12 ml-5 pl-5 ">
                                    <h5 class="text-left">Lorem, ipsum.</h5>
                                </div>
                                <div class=" col-md-3 text-left ">
                                    <h3 class="text-left mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati eligendi minus enim alias necessitatibus consequatur? Nam nobis alias quidem ab.</p>
                                </div>
                                <div class="col-md-3 offset-3">
                                    <a href="#" class="btn btn-md round-pill mb-4">READ MORE</a>
                                    <h6>Lorem, ipsum dolor.</h6>
                                    <h6>nov 6, 2021</h6>
                                </div>

                            </div>
                        </div>

                        <!-- </div> -->
                    </div>
                <?php } ?>

            </div>
        </div>
        <!-- Latest Articles end here  -->
        <!-- recent Articles start here  -->
        <div class="container">
            <div class="row ">
                <div class="col-md-12 mt-5 mx-5 px-5">
                    <h1 class="text-center" style="font-weight: 700;">Lorem, ipsum</h1>
                </div>
                
                <div class="col-md-12 mb-4 mt-3 mx-5 px-5">
                    <p class="mb-4 mt-5 mx-5 px-5 text-center text-muted" style="font-size: 22px; font-weight: 300; letter-spacing: 2px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatem explicabo iste assumenda quidem asperiores architecto exercitationem mollitia quibusdam beatae fuga!</p>
                </div>
            </div>
        </div>

        <div class=" jmbotron jumbotron-fluid ao-banner" style="height: 2100px;">
            <div class="container">
                <div class="row align-items-center">
                    <?php for ($kuch = 0; $kuch < 6; $kuch++) { ?>
                        <div class="card mb-5" style="width: 18rem;  height: 620px;">
                            <img class="card-img-top" src="https://picsum.photos/300/250?random=<?= rand('1', '500') ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur quas at in reiciendis nostrum nam.</a>
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">May 2nd, 2021<span class="vr-line-black">|</span><a href="#">Lorem ipsum dolor sit.</a> </h6>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga architecto numquam maxime atque alias dolor, saepe perspiciatis voluptate excepturi labore!</p>
                                <a href="#" class="btn btn-link">Read More ></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
            <!-- articles-archive start here  -->
            <section id="work">
                <div class="container work">
                    <div class="row ">
                        <div class="col-md-8">
                            <h1 class="mb-4">Lorem, ipsum.</h1>
                            <p class="text-muted ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti quod dignissimos fuga fugit nihil cupiditate excepturi pariatur ex vel magni..</p>
                        </div>
                            <div class="col-md-4 pt-5 mt-5">
                                <a href="work.html" class="btn cta bg-purpule btn-lg text-white rounded-pill mt-5 ml-4"><i class=" pr-2 fa fa-long-arrow-alt-right"></i></i>Our Work</a>
                            </div>
                            <div class=" pl-5 ml-5 mb-5 img">
                            </div>
                    </div>
                </div>
                    <div class="container pr-4 pl-4 pb-4">
                        <div class="row">
                            <?php for($Nhi=0; $Nhi < 5; $Nhi++) { ?>
                                <div class="col-md-3 mb-5">
                                    <img class="img-fluid" width="200" src="https://picsum.photos/300/250?random=<?= rand('1','500') ?>" alt="">
                                </div>
                                <div class="col-md-9 pl-0 ml-0">
                                    <h4 class="color-purple">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa minima aspernatur quaerat similique doloremque at?
                                    </h4>
                                    <h6 class="mb-2 text-muted">April 30th, 2021<span class="vr-line-black">|</span><a class="text-muted" href="#">Lorem, ipsum.</a> </h6>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, tempore quam? Cum quod,
                                    doloribus dolor vero quisquam consectetur
                                    dolores nostrum soluta nulla et sequi expedita nobis cupiditate culpa aut iste? [...]</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
            </section><!-- work end here  -->

           
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
        jQuery(document).ready(function($) {
            $('.owl-carousel').owlCarousel({
                items: 1,
                animateOut: 'fadeOut',
                // loop: true,
                // dots : false,
                nav: true,
                autoplay: true,
                autoplayTimeout: 6000,
            });
        });
    </script>



        
           <?php include 'footer.php'; ?>