<div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <img style="width:280px;" src="./img/Logo-2.png" />
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Address<span></span></p>
                        <!-- <p><i class="fa fa-map-marker-alt me-3"></i>2400 NW 30th Street Oklahoma City 73112</p> -->
                        <p><i class="fa fa-map-marker-alt me-3"></i>1525 E 2nd st edmond ok 73034</p>
                        <p><i class="fa fa-phone-alt me-3"></i>405-403-2827</p>
                        <p><i class="fa fa-envelope me-3"></i>iis.embroidery@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="about.php">About Us</a>
                        <a class="btn btn-link" href="contact.pyp">Contact Us</a>
                        <a class="btn btn-link" href="privacy-policy.php">Privacy Policy</a>
                        <a class="btn btn-link" href="terms.php">Terms & Condition</a>
                        <!-- <a class="btn btn-link" href="">Career</a> -->
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Payment Gateways<span></span></p>
                        <div class="row g-2">
                            <div class="col-10">
                                <img class="img-fluid" src="img/stripe-nobg.png" alt="Image">
                            </div>
                            <div class="col-10">
                                <img class="img-fluid" src="img/paypal-nobg.png" alt="Image">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Innovative Idea Solutions</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							<!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                        </div>
                        <!-- <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    $(document).ready(function(){
      $("#contact").submit(function(e){
        $("#form-submit").prop('disabled', true)
        $("#form-submit").html(`
          <span class="spinner-grow spinner-grow-min text-light" role="status" bis_skin_checked="1">
          </span>
          &nbsp; <span style='position:relative; top:-7px'> Sending...</span>
        `)
        const resetSubmitButton = ()=>{
            $("#contact").trigger("reset");
            $("#form-submit").html(`Send Message Now`)
            $("#form-submit").prop('disabled', false)
        }
        let data = {
          name: $("#name").val(),
          email: $("#email").val(),
          subject: $("#subject").val(),
          message: $("#message").val(),
          sendEmail: true,
        }
        console.log(data);
        e.preventDefault();
        $.ajax({
          url: 'functions/sendEmail.php',
          type: 'POST',
          data: data,
          success: function(response){
            resetSubmitButton()
            Swal.fire({
              icon: 'success',
              title: 'Congratulations',
              text: 'Your message has been sent to Creative Ado',
              confirmButtonColor: '#33ccc5',
            })
          },
          error: function(data){
            resetSubmitButton()
            console.log(data);
          }
        })
      })

      $("#newsLetterSubmit").click(function(){
        let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        let inputText = $("#newsLetterEmail").val();
        if(inputText && inputText.match(mailformat)) {
            $('#spinner').addClass('show');
        }
      })

    })
  </script>
</body>

</html>