<footer>
  <div class="footer border-top pt-5 mt-5">
    <div class="container">
      <div class="row border-bottom pb-6">
        <div class="col-4">
          <h6>Subcribe to our newsletter</h6>
          <form class="position-relative" action="">
            <input class="form-control" type="text" name="subcribe" id="" placeholder="Enter email addres">
            <button class="btn" type="submit"><i class="fa-solid fa-arrow-right"></i></button>
          </form>
        </div>
        <div class="col-2"></div>
        <div class="col">
          <h6>Home</h6>
          <a href="">
            <p>Agency</p>
          </a>
          <a href="">
            <p>E-commerce</p>
          </a>
          <a href="">
            <p>Education</p>
          </a>
          <a href="">
            <p>Music</p>
          </a>
        </div>
        <div class="col">
          <h6>Blog</h6>
          <a href="">
            <p>Blog News</p>
          </a>
          <a href="">
            <p>Blog Listing</p>
          </a>
          <a href="">
            <p>Blog Article</p>
          </a>
        </div>
        <div class="col">
          <h6>Page</h6>
          <a href="">
            <p>Pricing</p>
          </a>
          <a href="">
            <p>Testimonial</p>
          </a>
          <a href="">
            <p>Career</p>
          </a>
          <a href="">
            <p>Portofolio</p>
          </a>
        </div>
        <div class="col">
          <h6>Company</h6>
          <a href="">
            <p>About Us</p>
          </a>
          <a href="">
            <p>Contact</p>
          </a>
          <a href="">
            <p>FAQ</p>
          </a>
          <a href="">
            <p>Privacy</p>
          </a>
        </div>
      </div>
      <div class="py-2 px-3 d-flex">
        <div class="logo">
          <img src="{{asset('img/logo.png')}}" alt="">
        </div>
        <div class="mx-auto d-flex align-items-center">
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
<script src="{{asset('js/wizard.js')}}"></script>
</footer>
<script src="{{asset('js/wizard.js')}}"></script>
<script src="/path/to/cdn/bootstrap.min.js"></script>
<!-- JavaScript and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!-- JavaScript for validations only -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<!-- Our script! :) -->
<script src="../dist/enchanter.js"></script>
<script>
    var registrationForm = $('#registration');
    var formValidate = registrationForm.validate({
        errorClass: 'is-invalid',
        errorPlacement: () => false
    });

    const wizard = new Enchanter('registration', {}, {
        onNext: () => {
            if (!registrationForm.valid()) {
                formValidate.focusInvalid();
                return false;
            }
        }
    });
</script>
