  <!-- footer start here       -->
  <footer>
            <div class="container footer-style">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="copyright">
                            <li class="copyright-text">&copy Copyright : 2020<span class="vr-line">|</span></li>
                            <li>XYZ<span class="vr-line">|</span></li>
                            <li>All Rights Reserved</li>
                        </ul>
                    </div>
                    <div class="col-md-6 social">
                        <ul class="social-button ">
                            <li><a class=" text-muted" href="#"><span class="badge baage-style"><i
                                            class="fab fa-facebook-f"></i></span></a></li>
                            <li><a class=" text-muted" href="#"><span class="badge baage-style"><i
                                            class="fab fa-twitter"></i></span></a></li>
                            <li><a class=" text-muted" href="#"><span class="badge baage-style"><i
                                            class="fab fa-youtube"></i></span></a></li>
                            <li><a class=" text-muted" href="#"><span class="badge baage-style"><i
                                            class="fab fa-linkedin-in"></i></span></a></li>
                            <li><a class=" text-muted" href="#"><span class="badge baage-style"><i
                                            class="fab fa-instagram"></i></span></a></li>
                        </ul>
                    </div>
                </div>
       
            </div>
        </footer>
        <!-- footer end here  -->
        <!-- go to top start here  -->
        <a href="#" welcome-section" class="badge fixed-bottom scroll-top"><i
            class=" text-white fas fa-chevron-up"></i></a>

        </main>



    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function ()
        {
            var options = {
                whatsapp: "+919673885690", // WhatsApp number
                call_to_action: "Message us", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function ()
        {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/615aaf8c25797d7a890221c6/1fh53rftn';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- owlcarousel JavaScript -->
    <!-- <script src="/OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script> -->


    </div>
    </div>
    </section>
 <script src="/WOW-master/dist/wow.js"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>

   <!-- go to top js start here  -->
    <script>
        const toTop = document.querySelector(".scroll-top");

        window.addEventListener("scroll", () => {
            if(window.pageYOffset > 100){
                toTop.classList.add("active");
            }else {
                toTop.classList.remove("active")
            }
        })
    </script>
    <!-- go to top js end here  -->


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
        </script>


      <!-- Active change on clike start here --> 
      <script type="text/javascript">
          $(".nav-link").on("click", function(){
          $(".nav-link").find("active").removeClass("active");
          $(this).addClass("active");
        });
      </script>



      <!-- Active change on clike start here -->



</body>

</html>