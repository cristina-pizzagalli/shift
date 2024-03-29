<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shift</title>
  <meta charset="utf-8">
  <meta name="description" content="" />
  <meta name="keywords" content=""/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.ico?v=1.1"> 
  <link href="assets/css/reset.css" rel="stylesheet" type="text/css">
  <link href="assets/css/main.css" rel="stylesheet" type="text/css">
  <link href="assets/css/mobile.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:300,600,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <!-- bxSlider Javascript file -->
  <script src="assets/js/jquery.bxslider.js"></script>
  <!-- bxSlider CSS file -->
  <link href="assets/css/jquery.bxslider.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/css/jPushMenu.css" />
  <script src="assets/js/jPushMenu.js"></script>      

  <script type="text/javascript">
    $(document).ready(function(){ 
      $('.toggle-menu').jPushMenu(); 
      $('.bxslider').bxSlider({
        auto: true,
        easing: 'ease-in',
        pause: 15000
      });
      $('.bxslider-header').bxSlider({
        auto: true,
        easing: 'ease-in',
        pause: 10000
      });
    });
  </script>
  <script>
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top + (-0)
            }, 1000);
            return false;
          }
        }
      });
    });
  </script>
  <script>
    

  </script>
</head>

<body id="top">
  <div id="header">
    <a href="#top"><img src="assets/images/shift-logo.png" class="logo"/></a>     
    <div id="nav">          
      <a href="#whatwedo">services</a>
      <a href="#ouradvantage">advantage</a>
      <a href="#ourwork">work</a>
      <a href="#testimonial">testimonials</a>
      <a href="#clients">clients</a>
      <a href="#contact">contact</a>
    </div>
    <!-- Right menu element-->
    <div class="mobile-menu">
      <div class="mobile-header">
        <a class="toggle-menu menu-right push-body" href="#"><b><span></span></b></a>
      </div>
      <!-- Left menu element-->
      <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
        <ul>
          <li><a href="#whatwedo">services</a></li>
          <li><a href="#ouradvantage">advantage</a></li>
          <li><a href="#ourwork">work</a></li>
          <li><a href="#testimonial">testimonials</a></li>
          <li><a href="#clients">clients</a></li>
          <li><a href="#contact">contact</a></li>
        </ul>
      </nav>
    </div>
    <div class="clear"></div>
  </div>
  <div id="header-banner">
    <ul class="bxslider-header">
      <li style="background: url(assets/images/header-banner-bg.jpg); background-size: 100%; background-attachment: fixed;">
        <div class="slide-wrapper">
          <div class="slider-wrapper-inner">
            <h3>Design / strategy / COPYWRITING / PHOTOGRAPHY </h3>
            <h2>TIME to shift</h2>
            <p>At Shift Creative Studio, we do things differently.<br/>
            Our unique business model ensures high-quality work while keeping costs reasonable.<br/>
            It’s time to have your cake and eat it too!</p>
            <a href="#contact" class="contact-us">CONTACT US</a>
          </div>
        </div>
      </li>
      <li style="background: url(assets/images/header-banner-bg2.jpg); background-size: 100%; background-attachment: fixed;">
        <div class="slide-wrapper">
          <div class="slider-wrapper-inner">
            <h2>Targeted expertise</h2>
            <p>Our talented team of designers, developers and copywriters have the right experience and expertise to accomplish any task. No upsell. Just quality products from top to bottom.</p>
          </div>
       </div>
      </li>
    </ul>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div id="whatwedo">
    <div class="content">
      <h2>WHAT WE DO</h2>
      <p>We are problem solvers. Our wide array of creative services are tailored to businesses small and large.</p>
      <h4><span>Core Services</span></h4>
      <ul>
        <li>
          <img src="assets/images/whatwedo_icon_one.png"/>
          <h3>BRANDING</h3>
          <p>Branding is much more than just a logo. We perform internal competitor analysis, colour psychology study and scalability testing for each and every branding project. </p>
        </li>
        <li>
          <img src="assets/images/whatwedo_icon_two.png"/>
          <h3>DIGITAL</h3>
          <p>All our websites are WCAG compliant and hand-coded from scratch. We avoid open source frameworks such as WordPress or Drupal to guarantee compatibility and ease of mind.</p>
        </li>
        <li>
          <img src="assets/images/whatwedo_icon_three.png"/>
          <h3>Print</h3>
          <p>There is a time and place for a well-designed print collateral. All our designers have extensive traditional design training. Rest assured that it’s not a lost art among us.</p>
        </li>
      </ul>
      <div class="clear"></div>
      <ul>
        <li>
          <img src="assets/images/whatwedo_icon_four.png"/>
          <h3>Packaging</h3>
          <p>A well designed package not only respects the material, but also accurately communicates the product within. Ultimately improve brand equity and increase sales.  </p>
        </li>
        <li>
          <img src="assets/images/whatwedo_icon_five.png"/>
          <h3>environmental</h3>
          <p>Large format environmental graphics have its own set of rules. We create not only print-ready flat graphics but 3D environmental mock-ups as well.</p>
        </li>
        <li>
          <img src="assets/images/whatwedo_icon_six.png"/>
          <h3>COPYWRITING</h3>
          <p>Copywriting is a craft that most companies take for granted. From CTAs to product descriptions, the content we write are focused, strategic and concise.</p>
        </li>
      </ul>
      <div class="clear"></div>
      <h4><span>Additional Services</span></h4>
      <ul>
        <li>
          <img src="assets/images/whatwedo_icon_seven.png"/>
          <h3>photography</h3>
          <p>Our full-service design studio also offers product photography and lifestyle photography services, We are truly a one-stop shop.</p>
        </li>
        <li>
          <img src="assets/images/whatwedo_icon_eight.png"/>
          <h3>SEO Service</h3>
          <p>A great website is nothing if no one can find it. Our one-time SEO service is designed to optimize all codes and keywords. No monthly subscription required.  </p>
        </li>
        <li>
          <img src="assets/images/whatwedo_icon_nine.png"/>
          <h3>CONSULTATION</h3>
          <p>Interested but don’t know where to start? Have a chat with us at a local coffee shop and find out if any of our services can benefit your business. </p>
        </li>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
  <div id="ouradvantage">
    <div class="content">
      <h2>OUR ADVANTAGE</h2>
      <p>Not all design studios are created equal. At Shift, we’ve optimized our process and services to give our clients the best possible product.</p>
      <ul>
        <li>
          <img src="assets/images/advantage_icon_one.png"/>
          <h3>AGENCY QUALITY + STANDARD</h3>
          <p>All members of our core team have extensive experience in their respective fields and have worked in agencies on the biggest brands in the world such as Coca Cola & Unilever.</p>
        </li>
        <li>
          <img src="assets/images/advantage_icon_two.png"/>
          <h3>VIRTUAL COLLABORATION</h3>
          <p>By eliminating typical rent and insurance cost associated with a physical studio, we are able to keep our operating costs low. Less expenses means more savings for our clients.</p>
        </li>
        <li>
          <img src="assets/images/advantage_icon_three.png"/>
          <h3>Strategic scalability</h3>
          <p>Whatever the size of the project, we have the resources and expertise to get it done. Our extensive network of expert freelancers can provide support whenever needed.</p>
        </li>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
  <div id="ourwork">
    <div class="content">
      <h2>our recent work</h2>
      <p>We have been lucky enough to work with local boutiques as well as fortune 500 companies. Regardless of size or budget, we bring the same attention to detail and dedication to each project.</p>
      <div class="divide"></div>
    </div>
  </div>
  <div class="clear"></div>
  <div id="testimonial">
    <div class="quotes">
      <ul class="bxslider">
        <li>
          <p>We are very fortunate to have had the opportunity to work with Karl. He is not only capable in his professional area of design, but also possesses excellent communication skills. He is patient, responsible and cooperative. He applies his professional knowledge to meet clients’ needs. With his great design of our website, I have received a lot of positive feedback and attracted many new customers. Karl has done wonderful work that I have really appreciated.</p>
          <p class="name"><strong>Ming Wang</strong> - Owner, Naturelife Health Centre</p>
        </li>
        <li>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta in dui in accumsan. Nullam sed feugiat neque. Vestibulum eget velit nec felis ultricies lacinia a vel augue. Aenean pulvinar, odio vitae suscipit ullamcorper, ipsum lacus pretium erat, in bibendum mi ante ut lorem. Pellentesque gravida a lorem ac interdum. Aliquam mattis sapien libero, non semper arcu vestibulum at. Maecenas eu rutrum nulla, non porta odio.</p>
          <p class="name"><strong>Cristina Pizzagalli</strong> - Owner, A house in Waterdown</p>
        </li>
        <li>
          <p> Mauris consequat cursus nisl eget laoreet. Vestibulum porttitor, ante id efficitur venenatis, velit lorem mollis felis, eget elementum magna eros ac quam. Pellentesque faucibus maximus purus maximus interdum. Maecenas malesuada fringilla nisl, in feugiat tellus vestibulum tristique. Suspendisse in pretium mauris, id varius lorem. Ut blandit molestie nibh quis dapibus. Fusce dignissim sit amet nisl et vestibulum. Nunc feugiat neque in imperdiet interdum. </p>
          <p class="name"><strong>Finn Pizzagalli</strong> - Owner, A collection of balls</p>
        </li>
        <li>
          <p> Curabitur aliquam faucibus consectetur. Duis congue nunc augue, vel laoreet neque tempor id. Nam id velit pulvinar, sodales tortor porttitor, porta sem. Proin eget pellentesque eros. Suspendisse in nisl facilisis, venenatis quam et, pellentesque tellus. Etiam sed nunc id lacus volutpat euismod sed at risus. Mauris molestie urna et eleifend dictum. Praesent sollicitudin convallis orci, a rhoncus nisi gravida vel. </p>
          <p class="name"><strong>Sophie Eagar</strong> - Owner, Mental baggage</p>
        </li>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
  <div id="clients">
    <div class="content">
      <h2>our clients</h2>
      <p>We are humbled to have been a part of these amazing brands.</p>
      <div class="divide"></div>
      <ul>
        <li><img src="assets/images/client-logo-canadiantire.png"/></li>
        <li><img src="assets/images/client-logo-catalyst.png"/></li>
        <li><img src="assets/images/client-logo-nurun.png"/></li>
        <li><img src="assets/images/client-logo-bmo.png"/></li>
        <li><img src="assets/images/client-logo-achievers.png"/></li>
        <li><img src="assets/images/client-logo-guthrie.png"/></li>
        <li><img src="assets/images/client-logo-omli.png"/></li>
        <li><img src="assets/images/client-logo-mce.png"/></li>
        <li><img src="assets/images/client-logo-eeet.png"/></li>
        <li><img src="assets/images/client-logo-gas.png"/></li>
        <li><img src="assets/images/client-logo-pedalinx.png"/></li>
        <li><img src="assets/images/client-logo-primal.png"/></li>
        <li><img src="assets/images/client-logo-renew.png"/></li>
        <li><img src="assets/images/client-logo-pride.png"/></li>
        <li><img src="assets/images/client-logo-woodward.png"/></li>
        <li><img src="assets/images/client-logo-cbcf.png"/></li>
        <li><img src="assets/images/client-logo-huntshield.png"/></li>
        <li><img src="assets/images/client-logo-coop.png"/></li>
        <li><img src="assets/images/client-logo-broadstone.png"/></li>
        <li><img src="assets/images/client-logo-zuck.png"/></li>
        <li><img src="assets/images/client-logo-naturelife.png"/></li>
        <li><img src="assets/images/client-logo-medcan.png"/></li>
        <li><img src="assets/images/client-logo-oneworld.png"/></li>
        <li><img src="assets/images/client-logo-prosperity.png"/></li>
        <li><img src="assets/images/client-logo-phi.png"/></li>
        <li><img src="assets/images/client-logo-rng.png"/></li>
        <li><img src="assets/images/client-logo-home.png"/></li>
        <li><img src="assets/images/client-logo-bluecross.png"/></li>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
  <div id="contact">
    <div class="content">
      <h2>We’d Love to hear from you</h2>
      <p>A journey of a thousand miles begin with a single step. We’d love to take that step with you.<br/>Our virtual doors are always open.</p>
      <div class="main-container">
        <div class="fixer-container">
          <div class="contact-info">
            <span class="img"><img src="assets/images/contact-phone.png"/></span>
            <span class="info">416.993.3693</span>
            <span class="img"><img src="assets/images/contact-email.png"/></span>
            <span class="info"><a href=
        mailto:"karl@shiftcreativestudio.com">karl@shiftcreativestudio.com</a></span>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</body>
</html>
