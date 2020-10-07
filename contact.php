<!DOCTYPE html>
<html>
<head>
	<title>SK visuals | contact us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap css-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="webstyles.css" type="text/css">
  <link rel="stylesheet" href="responsive.css" type="text/css"> 
  <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>
 <header class="banner container-fluid">
    <div class="header_menu"> 
        <div class="contain container-fluid">
           <div class="logo" id="logo">
              <a href="index.php"><img src="images/visuals logo.png" alt="visuals logo"></a>
           </div>
          <nav class="menu" id="nav">
              <ul>
                 <li class="nav-item"><a href="index.php" class=""> Home </a></li>
                 <li class="nav-item"><a href="about.php" class=""> About us </a></li>
                 <li class="nav-item"><a href="services.php" class=""> Services </a></li>
                 <li class="nav-item"><a href="work.php" class=""> Our work </a></li>
                 <a href="contact.php" class="btn text-white btn-danger"> Contact us </a>
              </ul>
           </nav>
            <a href="#" class="bar_icon" onclick="responsive_nav()" ><i class="fas fa-bars"></i></a>
        </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 B_content">
            <div class="B_contentstyling">
              <h2>Welcome To Amazing Creativeness</h2>
              <p> Let's Grow your Business with </p>
              <h4> <span id="typing"> </span> </h4>
              <h5> We are Designated with  your Bussiness </h5>
              <a href="Services.php"> Let's explore possibiities </a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-12 B_img">
            <div class="img">
              <img src="images/contact banner.svg" class="img-fluid" alt="Maketing" style="width: 600px;"> 
            </div>
          </div>
       </div>
     </div>
   </div>
 </header>
  <br>
  <main class="container-fluid">
    <div class="container">
     <h2 class="text-center"> Contact us to get more Knowledge </h2>
      <hr style="width:15%; height: 8px; background-color:green;border-radius: 10px; margin:auto;">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 "><div class="form-group">            
          <form class="cont-form" id="forms" onsubmit="return validation()" action="contact data.php" method="POST">
            <label>Your full name </label>
            <small class="form-text">We'll never share your Details with anyone else.</small>
            <div class="form-control" id="user">
             <input type="text" id="name" name="name" placeholder="Name">
              <i class="fa fa-check-square" id="usquare"></i>
              <i class="fa fa-exclamation-circle" id="ucircle"></i>
              <small id="namewarn" >Error msg </small>
            </div>
            <br>
            <label> Your E-mail</label>
            <div class="form-control" id="user">
              <input type="text" id="mail" name="email" placeholder="Your e-mail">
              <i class="fa fa-check-square" id="esquare"></i>
              <i class="fa fa-exclamation-circle" id="ecircle"></i>
              <small id="ewarn">Error msg </small>
            </div>
            <br>
            <label>Mobile no.</label>
            <div class="form-control">
             <input type="text" id="contact" name="contact" placeholder="phone">
             <i class="fa fa-check-square" id="csquare"></i>
             <i class="fa fa-exclamation-circle" id="ccircle"></i>
             <small id="cwarn">Error msg </small>
            </div>
            <br>
            <label>Your Business name</label>
            <input type="text" name="client_business" class="form-control" placeholder="Company name">
            <br>
            <label>Your Business website</label>
            <input type="text" class="form-control" name="client_website" placeholder="Your Website (if any)">
            <br>
            <label>Any message for us</label>
            <textarea class="form-control" rows="5" name="client_message" placeholder="Any message for us"></textarea>
            <br>
            <button  type="submit" class="btn submit-button" name="submit">submit</button>
          </form>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
        <div class="cont_info">
         <h2> Get In Touch </h2>
          <ul>
            <li class="label"><span><i class="fa fa-envelope-open" aria-hidden="true"></i></span> E-mail <br>     
            <span class="list">info@example.com</span> </li>
            <li class="label"><span><i class="fa fa-phone" aria-hidden="true"></i></span> Phone<br>
            <span class="list"> 987654310 | 321654987 </span> </li>
            <li class="label"><span><i class="fa fa-address-card" aria-hidden="true"></i></span> Address<br>
            <span class="list"> Buidling no.5, Floor no.10 <br> ITO, New Delhi 110005, India</span> </li>
          </ul>
       </div>
     </div>
    </div>
  </div>
 </main>

 <section class="G_map container-fluid">
    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2672.1554572816026!2d77.24075151429543!3d28.62754278241971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfcd5197dd315%3A0x454bf462de4e12aa!2sITO%20Delhi!5e1!3m2!1sen!2sin!4v1596714998692!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </p>
 </section>


 <footer class="container-fluid news">
    <div class="container-fluid letter">
      <div class="newsletter">
        <input type="email" class="form-control" id="inputEmail4" placeholder="Subscribe our newsletter">
        <button type="submit" class="btn news-submit">
          <i class="fa fa-paper-plane" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </footer>
    <div class="container-fluid row footer">
      <div class="col-md-3 col-lg-3 col-sm-12  col-12 Qlinks">
        <h3> Quick links </h3>
        <ul>
          <a href=""><li> FAQ’s </li></a>
          <a href=""><li> Privacy policies </li> </a>
          <a href=""><li> Legal </li> </a>
          <a href=""><li>Refund & cancellation</li> </a>
          <a href=""><li>Sitemap </li> </a>
        </ul>
        <br>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 col-12 text-center mb-5">
        <a href="#logo"><img src="images/visuals logo.png" class="img-fluid" alt="Logo" width="150px"></a>
      </div>
      <div class="col-md-5 col-lg-5 col-sm-12 col-12 text-center Office">
       <h2> Our offices  </h2>
        <div class="Address d-flex">
          <div class="Address1">
           <h3 class="text-center"> Delhi </h3>
           <p>125/8, Noida,  near TGIP Mall, UP, 8456321789, Example@gmail.com</p>
          </div>
         <div class="Address2">
           <h3> Mumbai </h3>
           <p>125/8,  Santacruz,Near Obeari Mall, Mumbai, Maharashtra, 8456321789, Example@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center Copyright">
      <p> &copy Reserved 2020 </p>
    </div>

      <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/  zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="  sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="  sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/814f02a415.js" crossorigin="anonymous"></script>
  <script  src="formvalidate.js" type="text/javascript"></script>
  <script  src="javavisuals.js" type="text/javascript"></script>
       <script  src="typed.min.js" type="text/javascript"></script>
         <script type="text/javascript">
    var type = new Typed('#typing',{
    strings: ['','Social media marketing', 'WEB DEVELOPMENT','Digital Marketing','E-mail Marketing', 'E-commerce planning'],
    typeSpeed: 60,
    backSpeed: 20,
    bindInputFocusEvents: true,
    loop: true
  });

  </script>
</body>
</html>
