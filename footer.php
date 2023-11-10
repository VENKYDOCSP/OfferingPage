<!-- footer -->
<div class="foot-back">
  <div class="container">
    <div class="row   py-5">
      <div class="col-12 col-md-4 my-auto"> <img class="img-fluid" src="https://res.cloudinary.com/tuskmelonimagestorage/image/upload/v1687344357/atmosco/Group_37299_mfcert.svg" alt=""></div>
      <div class="col-12 col-md-4 my-auto p-4 ">
        <p class="foo-li"><a class="foot-a" href="project">Our Services</a></p>
        <p class="foo-li"><a class="foot-a" href="project">Project</a> </p>
        <p class="foo-li"> <a class="foot-a" href="Sustainability">Activities</a></p>
        <p class="foo-li"><a class="foot-a" href="contectus">Contact Us</a></p>
        <p class="foo-li"> <a class="foot-a" href="about_us">About Us</a></p>
      </div>

      <div class="col-12 col-md-4  p-4">
        <p class="foo-li">Follow us at</p>
        <div class="d-flex gap-3 pt-4">
          <img class="img-fluid" style="cursor: pointer;" src="https://res.cloudinary.com/tuskmelonimagestorage/image/upload/v1687413979/atmosco/Group_37786_srgs5z.svg" alt="">
          <img class="img-fluid" style="cursor: pointer;" src="https://res.cloudinary.com/tuskmelonimagestorage/image/upload/v1687414119/atmosco/Group_37793_fc9ebc.svg" alt="">
          <img class="img-fluid" style="cursor: pointer;" src="https://res.cloudinary.com/tuskmelonimagestorage/image/upload/v1687414154/atmosco/Group_37794_cqsp8m.svg" alt="">
          <a target="_blank" href="https://www.linkedin.com/company/atmastco-limited/?originalSubdomain=in"> <img class="img-fluid" style="cursor: pointer;" src="https://res.cloudinary.com/tuskmelonimagestorage/image/upload/v1687414185/atmosco/Group_37795_enlcpk.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="fo-cpri text-center py-3 my-auto">
  <p class="pt-1">©2022. ATMASTCO Pvt. Ltd. All Rights Reserved</p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script>
  $(window).scroll(function() {
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
  });
</script>
<script>
  var sticky = document.querySelector('.nav-sticky');
  if (sticky.style.position !== 'nav-sticky') {
    var stickyTop = sticky.offsetTop;
    document.addEventListener('scroll', function() {
      window.scrollY >= stickyTop ?
        sticky.classList.add('fixed') :
        sticky.classList.remove('fixed');
    });
  }
</script>
<script>
  var currentUrl = window.location.href;
  var navLinks = document.querySelectorAll(".nav-link");
  for (var i = 0; i < navLinks.length; i++) {
    var link = navLinks[i];
    if (link.href === currentUrl) {
      link.classList.add("active-link");
      break;
    }
  }
</script>
<!-- readmore less -->
<script>
  $('.moreless-button').click(function() {
    $('.moretext').slideToggle();
    if ($('.moreless-button').text() == "Read more") {
      $(this).text("Read less")
    } else {
      $(this).text("Read more")
    }
  });
  // 2nd
  $('.moreless-button1').click(function() {
    $('.moretext1').slideToggle();
    if ($('.moreless-button1').text() == "Read more") {
      $(this).text("Read less")
    } else {
      $(this).text("Read more")
    }
  });
  // 3nd
  $('.moreless-button2').click(function() {
    $('.moretext2').slideToggle();
    if ($('.moreless-button2').text() == "Read more") {
      $(this).text("Read less")
    } else {
      $(this).text("Read more")
    }
  });
  // 4th
  $('.moreless-button3').click(function() {
    $('.moretext3').slideToggle();
    if ($('.moreless-button3').text() == "Read more") {
      $(this).text("Read less")
    } else {
      $(this).text("Read more")
    }
  });
    // 5th
    $('.moreless-button4').click(function() {
    $('.moretext4').slideToggle();
    if ($('.moreless-button4').text() == "Read more") {
      $(this).text("Read less")
    } else {
      $(this).text("Read more")
    }
  });
    // 6th
    $('.moreless-button5').click(function() {
    $('.moretext5').slideToggle();
    if ($('.moreless-button5').text() == "Read more") {
      $(this).text("Read less")
    } else {
      $(this).text("Read more")
    }
  });
</script>
<!-- carousel -->
<script type="text/javascript">
  $(document).on('ready', function() {
    $(".regular").slick({
      dots: false,
      infinite: true,
      slidesToShow: 4,
      autoplaySpeed: 1500,
      autoplay: true,
      slidesToScroll: 1,
      pauseOnHover: false,
      arrows: false,
      // centerMode:true
      // fade:true
    });
  });
</script>
<script type="text/javascript">
  $(document).on('ready', function() {
    $(".regulari").slick({
      dots: false,
      infinite: true,
      slidesToShow: 4,
      autoplaySpeed: 1500,
      autoplay: true,
      slidesToScroll: 1,
      arrows: false,
      pauseOnHover: false
      // centerMode:true
      // fade:true
    });
  });
</script>
<script>
  $('.hommecaro').slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    autoplaySpeed: 2000,
    autoplay: true,
    slidesToScroll: 1,
    arrows: false,
    pauseOnHover: false
  });
  $('.hommecaroi').slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    autoplaySpeed: 2000,
    autoplay: true,
    slidesToScroll: 1,
    arrows: false
    // centerMode: true,
  });
</script>
<!-- project carousel -->
<script>
  $('.projectcaro').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    autoplaySpeed: 2000,
    autoplay: true,
    slidesToScroll: 1,
    arrows: false,  
    pauseOnHover: false,
    responsive: [{
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    }]
  });
</script>
<script type="text/javascript">
  $(document).on('ready', function() {
    $(".regularii").slick({
      dots: false,
      infinite: true,
      slidesToShow: 4,
      autoplaySpeed: 1500,
      autoplay: true,
      slidesToScroll: 1,
      arrows: false,
      pauseOnHover: false, 
    rtl: true,
      // centerMode:true
      // fade:true
    });
  });
</script>
<script>
  $('.projectcaro2').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    autoplaySpeed: 1500,
    autoplay: true,
    slidesToScroll: 1,
    arrows: false,  
    pauseOnHover: false,
    responsive: [{
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    }]
  });
</script>
<script>
  $('.projectcarot').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    autoplaySpeed: 1500,
    autoplay: true,
    slidesToScroll: 1,
    arrows: false,  
    pauseOnHover: false,
    responsive: [{
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    }]
  });
</script>
<!-- counter -->
<script>
  var a = 0;
  $(window).scroll(function() {
    var oTop = $("#counter-box").offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $(".counter").each(function() {
        var $this = $(this),
          countTo = $this.attr("data-number");
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        }, {
          duration: 2850,
          easing: "swing",
          step: function() {
            //$this.text(Math.ceil(this.countNum));
            $this.text(
              Math.ceil(this.countNum).toLocaleString("en")
            );
          },
          complete: function() {
            $this.text(
              Math.ceil(this.countNum).toLocaleString("en")
            );
            //alert('finished');
          }
        });
      });
      a = 1;
    }
  });
</script>
<!-- change range  -->
<script>
  $(document).ready(function() {
    var slides = $(".scroll");
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide, 3000);
    var rangeInput = $("#slideRange");
    var rangeFill = $(".range-fill");
    rangeInput.on("input", function() {
      var value = $(this).val();
      currentSlide = value - 1;
      slides.removeClass("active");
      slides.eq(currentSlide).addClass("active");
      rangeFill.css("width", "calc((100% / 3) * " + value + ")");
    });

    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      slides.removeClass("active");
      slides.eq(currentSlide).addClass("active");
      rangeInput.val(currentSlide + 1);
      rangeFill.css("width", "calc((100% / 4) * " + (currentSlide + 1) + ")");
    }
  });
</script>
<!-- multiple tabs -->
<script>
  function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("Variable");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(cityName).style.display = "block";
  }
  var Div = document.querySelectorAll('.DivHighlight');

  function handleClick() {
    Div.forEach(function(element) {
      element.classList.remove('highlight');
      element.classList.remove('default')
    });
    this.classList.add('highlight');
  }
  Div.forEach(function(element) {
    element.addEventListener('click', handleClick);
  });
</script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script> -->
</body>

</html>