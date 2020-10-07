<!DOCTYPE html>
<html>
<head>
  <title>Sk visuals</title>
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
                 <li class="nav-item active"><a href="services.php" class=""> Services </a></li>
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
             <div class="">
               <img src="images/services banner.svg" class="img-fluid" alt="Marketing"> 
             </div>
            </div>
         </div>
        </div>
     </div>
  </header>
  <br>
  <section class="container-fluid">
    <div class="row servcontext p-3">
      <div class="col-lg-8 col-md-8 col-sm-12 col-12 ser_detail" id="SEO">
        <h3 class="text-center"> SEO </h3>
        <p class="text-justify"> SEO stands for<strong> “search engine optimization.”</strong> In simple terms, it means the process of improving your site to increase its positions for relevant searches in search engines. The better Position of  your pages have in search results, the more likely you are to get attention and attract prospectors and existing customers to your business.
        Search engines such as<a href="www.google.com" target="_blank"> Google </a>and <a href="www.bing.com" terget="_blank"> Bing </a> use bots to crawlers pages on the website, going from site to site, collect information about those pages and putting them in an indexed order. which we called ranking of website in the search result.
        Search ranking factors can be considered information and the user experience. For example, content quality and keyword research are key factors of content optimization, and crawlability and mobile-friendliness are important site architecture factors.
  
        <span id="dot">...</span>
        <span id="more">There are search algorithms used by the sarched engine prviders. which are designed to surface relevant, authoritative pages and provide users with an efficient search experience. Optimizing your site and content with these factors in mind can help your pages rank higher in the search results.
        Unlike paid search ads, you can’t pay search engines to get higher organic search rankings. <strong>Organic search rankings is more better than paid search ads.</strong>
        SEO is a fundamental part of digital marketing because people conduct milliions and  trillions of searches every year, often with commercial intent to find information about products and services. Search is often the primary source of digital traffic for brands and complements other marketing channels. Higher ranking in search results than your competitors can have a material impact on your bottom line.
        However, the search results have been evolving over the past few years to give users more direct answers and information that is more likely to keep users on the results page instead of driving them to other websites.
        Also note, features like rich results and Knowledge Panels in the search results can increase visibility and provide users more information about your company directly in the results.</span>
        <br>
        <br>
        <button type="button" class="btn btn-danger" id="readbutton" onclick="readmore()"> Read more </button>
        </p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-12">
        <img src="images/seo card.png" alt="seo image" class="img-fluid mt-5">
      </div>
    </div>
  </section>


  <section class="container-fluid">
   <div class="row servcontent p-3">
      <div class="col-lg-8 col-md-8 col-sm-12 col-12 ser_detail ">
        <h3 class="text-center"> Social media Marketing </h3>
        <p class="text-justify"> Social media marketing is the use of social media platforms to connect with your audience to build your brand, increase sales, and drive website traffic. This involves publishing great content on your social media profiles, listening to and engaging your followers, analyzing your results, and running social media advertisements.
        The major social media platforms (at the moment) are Facebook, Instagram, Twitter, LinkedIn, Pinterest, YouTube, and Snapchat.
        There are also a range of social media management tools that help businesses to get the most out of the social media platforms listed above. For example, Buffer is a platform of social media management tools, which can help you achieve success with your social media marketing. Whether you want to build a brand or grow your business, we want to help you succeed.
        <span id="dot1">...</span>
        <span id="more1">Nowadays, businesses use social media in a myriad of different ways. For example, a business that is concerned about what people are saying about its brand would monitor social media conversations and response to relevant mentions (social media listening and engagement). A business that wants to understand how it’s performing on social media would analyze its reach, engagement, and sales on social media with an analytics tool (social media analytics). A business that wants to reach a specific set of audience at scale would run highly-targeted social media ads (social media advertising).</span>
        <br>
        <br>
        <button type="button" class="btn btn-danger" id="readbutton1" onclick="readmore1()"> Read more </button>
        </p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-12">
        <img src="images/social media2.png" alt="social media" class="img-fluid mt-5">
      </div>
    </div>
  </section>


  <section class="container-fluid">
    <div class="row servcontext p-3">
      <div class="col-lg-8 col-md-8 col-sm-12 col-12 ser_detail ">
        <h3 class="text-center"> Web Development </h3>
        <p class="text-justify">Web Development is another given name to web programming where the technical programmers and their teams deal in framing & coding, which is to provide various assured functionalities & usability, working dynamically on live web production.
        We at SK VISUALS is always tend to be among the best coders available in the region, which can code along any open source script to custom coding of any PHP / JAVA web solution, as desired by the clients. The procedure for introducing a Software Development methodologies by our teams, while going for product development is also unique and we always try following a smooth start to butterly end during the Development of Website.
        While developing any website & related products, we always strive to give more concern on the adequate information of business functionality required and future integrations of the web products with other applications. To know more about what is WEB DEVELOPMENT and how it works then Click below. 
        <span id="dot2">...</span>
        <span id="more2">Website is an online platform dedicated to a particular topic, ranging from entertainment to networking. It represents a centrally managed group of web pages, containing text, images and all types of multi-media files. Its main purpose is to display content/offerings for its visitors. Customers find business information and product/service offerings on websites.
        Websites can have many functions and can be used in various forms such as personal, corporate, organizational, government, and e-commerce website etc.A website is a collection of publicly accessible, interlinked ‘Web pages’ that share a single domain name. This is basically a combination of multiple pages which hold information about your product/service/brand etc. Websites can be created and maintained by an individual, group, business or organization to serve a variety of purposes. Together, all publicly accessible websites constitute the World Wide Web.A website is also known as having a web presence for your brand, which means anyone with internet can see all the information about your brand at any point of time and anywhere. Since this is accessible from anywhere across the globe, the visibility of your brand is large unlike your brand visibility created through traditional marketing techniques of newspaper ads, brochures etc.If the business didn’t have a website, but only brochures, visiting cards or a vague entry in an online directory, your potential customers would not frequent that business but look for one that could provide the information they needed right away and from the comfort of their own home. This is the reality of living in the twenty-first century: customers find business information and product offerings predominantly on websites, and small businesses without an online presence are left behind</span>
        <br>
        <br>
        <button type="button" class="btn btn-danger" id="readbutton2" onclick="readmore2()"> Read more </button>
        </p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-12">
        <img src="images/web Development.png" alt="website Development" class="img-fluid mt-5">
      </div>
    </div>
 </section>


    <section class="container-fluid">
    <div class="row servcontent p-3">
      <div class="col-lg-8 col-md-8 col-sm-12 col-12 ser_detail ">
        <h3 class="text-center"> E-commerce planning </h3>
        <p class="text-justify"> E-commerce planning is essential before you set up your business in an online or digital world. It is needed if you are starting a business which depends totally online on a website. E-comm means that you have trade your products through an website to your customers and there is no physical interactions between both.
        Our team at SK VISUALS are Good at planning an E-comm and Guide you how to run a E-comm business. through a website. We are give you an approach to build a brand through an Digital medium.  
        <span id="dot3">...</span>
        <span id="more3">E-comm planning include research, Strategy, Products, website development, Marketing thorugh an Social media, SEO and many more things. We at Sk visuals are here to help and guide you how to make a plan, how to market, how to build branding  and your website User experience. We are also help you to get your target Audience to your website. and make sure you achieve your Targets of your business.</span>
        <br>
        <br>
        <button type="button" class="btn btn-danger" id="readbutton3" onclick="readmore3()"> Read more </button>
        </p>
      </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
          <img src="images/E-commerce.png" alt="E-commerce Business" class="img-fluid mt-5">
        </div>
    </div>
  </section>

  <br>
  <section class="container-fluid bg-dark mb-3">
    <div class="container quotes py-3">
     <p class="text-white text-center"><span class="quotes_dots">''</span> Without strategy, content is just stuff, and the world has enough stuff.<span  class="quotes_dots">,,</span>
     <br>
     <small>   Arjun Basu </small>
     </p>
    </div>
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
  <script  src="javavisuals.js" type="text/javascript"></script>
       <script  src="typed.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/  zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="  sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="  sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/814f02a415.js" crossorigin="anonymous"></script>
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