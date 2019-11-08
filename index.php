
<!DOCTYPE html>
<html>
  <meta lang="en-GB">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1.0">
    <title>Home EN - Royal Asian Restaurant</title>
    <meta name="description" content="Royal, Asian, Restaurant, Chinese, Indian, Nepali, Thai, Food, Kaarli Pst 9, Tallinn, Estonia, Reservation, Booking, Online, Order, Takeaway"/>
    <!--jQuery include-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <!--Bootstrap CDN files-->
    <script src="form.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./component/css/style.css">    
    <script src="https://kit.fontawesome.com/d62bf6ec58.js" crossorigin="anonymous"></script>       
  </head>
  <body>
    <!--This is for navigation and all the header element like a logo and language selection-->
    <header>  
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="./component/Image/royalAsianRestaurant.png" alt="Royal Asia Restautant"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a class="nav-link m-auto" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutUs">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Our Menu
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./component/pages/appitiser.html">Appetisers</a>
                <a class="dropdown-item" href="./component/pages/soups.html">Soups</a>
                <a class="dropdown-item" href="./component/pages/salad.html">Salads</a>  
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./component/pages/chicken.html">Chicken</a>
                <a class="dropdown-item" href="./component/pages/pork.html">Pork</a>
                <a class="dropdown-item" href="./component/pages/beef.html">Beef</a>
                <a class="dropdown-item" href="./component/pages/lamb.html">Lamb</a>
                <a class="dropdown-item" href="./component/pages/seafood.html">Seafood</a>
                <a class="dropdown-item" href="./component/pages/other_meat.html">Other Meats</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./component/pages/vegetarian.html">Vegetarian</a>
                <a class="dropdown-item" href="./component/pages/side_dish.html">Side Dishes</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./component/pages/dessert.html">Desserts</a>
                <a class="dropdown-item" href="./component/pages/drinks.html">Drinks</a>      
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Our Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#service">Reservation</a>
                <a class="dropdown-item" href="#service">Take Away</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
          </ul>
          </div>
          <div class="language">
            <a href="./component/est/est-index.html"><img src="./component/Image/estonia.png" alt="est"></a>
            <a href="#"><img src="./component/Image/english-language.png" alt="eng"></a>
            <!-- <a href="#"><img src="./component/Image/russia.png" alt="rus"></a>-->
          </div>
      </nav>
    </header>
    <main>
      <!--Image Carousel  -->
      <div id="home">
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
          </ul>      
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./component/Image/image1.jpg" alt="img1">
            </div>
            <div class="carousel-item">
              <img src="./component/Image/image2.jpg" alt="img2">
            </div>
            <div class="carousel-item">
              <img src="./component/Image/image3.jpg" alt="img3">
            </div>
            <div class="carousel-item">
              <img src="./component/Image/image4.jpg" alt="img4">
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <!-- ######## -->
      <!--About Us page-->
      <div class="aboutUs" id="aboutUs">
        <div class="aboutUs-headingContent">
          <center><h2 class="aboutUs-heading">About Us</h2> </center> 
          <hr class="hr-style">
        </div>
        <div class="row">   
          <div class="col-md-12">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
              </ul>     
              <!-- The slideshow -->
              <div class="carousel-inner" id="carao">
                <div class="carousel-item active">
                  <img class="abt" src="./component/Image/about.jpg" alt="img1">
                </div>
                <div class="carousel-item">
                  <img class="abt" src="./component/Image/about1.jpg" alt="img2">
                </div>
              </div>   
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>    
          <div class="col-md-12" >
            <div class="aboutUs-content imae">
              <center>
                <h3>Welcome to the Royal Asian Restaurant!</h3>
                <p>We are located in Old town of Tallinn. <br> We offer delicious different kitchens’ cuisines such as Chinese, Thai, Indian & Nepali.<br>
                Our cuisines are made from fresh ingredients according to the original recipes.<br>Come and Enjoy with Us !!</p>
              </center>
            </div>
          </div>      
        </div>
      </div>
      <!--#####About Us -->
      <div class="menu" id="menu">
        <div class="menu-heading">
          <center>
            <h2>Some Special Dishes</h2>
          </center>
          <hr class="hr-style">
        </div>
        <div class="menu-list">
          <div class="row">
            <div class="offset-md-1"></div>
            <div class="col-md-3">
              <div class="menu-item-group " data-aos="fade-right" data-aos-duration="1000" >
                <div class="card">
                  <img class="card-img-top" src="./component/Image/appitiser.jpg" alt="Card image">
                  <div class="card-img-overlay">
                    <h4 class="card-title">Appetiser</h4>
                    <a href="./component/pages/appitiser.html" class="btn btn-primary btn-sm">More Related</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu-item-group"data-aos="fade-down" data-aos-duration="1000">
                <div class="card">
                  <img class="card-img-top" src="./component/Image/soup.jpg" alt="Card image">
                  <div class="card-img-overlay">
                    <h4 class="card-title">Soup</h4>
                    <a href="./component/pages/soups.html" class="btn btn-primary btn-sm">More Related</a>
                  </div>
                </div>
              </div> 
            </div>
            <div class="col-md-3">
              <div class="menu-item-group" data-aos="fade-left" data-aos-duration="1000">
                <div class="card">
                  <img class="card-img-top" src="./component/Image/chicken.jpg" alt="Card image">
                  <div class="card-img-overlay">
                    <h4 class="card-title">Chicken</h4>
                    <a href="./component/pages/chicken.html" class="btn btn-primary btn-sm">More Related</a>
                  </div>
                </div>
              </div>
            </div> 
          </div>
          <div class="row">
            <div class="offset-md-1"></div>
            <div class="col-md-3">
              <div class="menu-item-group " data-aos="fade-right" data-aos-duration="1000">
                <div class="card">
                  <img class="card-img-top" src="./component/Image/vegetarian.jpg" alt="Card image">
                  <div class="card-img-overlay">
                    <h4 class="card-title">Vegetarian</h4>
                    <a href="#" class="btn btn-primary btn-sm">More Related</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="menu-item-group"data-aos="fade-up" data-aos-duration="1000">
                <div class="card">
                  <img class="card-img-top" src="./component/Image/rice.jpg" alt="Card image">
                  <div class="card-img-overlay">
                    <h4 class="card-title">Fried Rice</h4>
                    <a href="./component/pages/side_dish.html" class="btn btn-primary btn-sm">More Related</a>
                  </div>
                </div>
              </div> 
            </div>
            <div class="col-md-3">
              <div class="menu-item-group" data-aos="fade-left" data-aos-duration="1000">
                <div class="card">
                  <img class="card-img-top" src="./component/Image/drinks.jpg" alt="Card image">
                  <div class="card-img-overlay">
                    <h4 class="card-title">Drinks</h4>
                    <a href="./component/pages/drinks.html" class="btn btn-primary btn-sm">More Related</a>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
      <!--######Menu List-->
      <!--Our Services-->
      <div class="service" id="service">
        <div class="services-heading-items">
          <center>
            <h2> Our Services</h2>
          </center>
          <hr class="hr-style">
        </div>
        <div class="services-options">
          <div class="row">
            <div class="offset-md-1"></div>
            <div class="col-md-5">
              <div class="reservationContent" data-aos="flip-up" data-aos-duration="1000">
                <center>  
                  <div class="icon-space">
                    <!--<i class="fa fa-bookmark fa-5x"></i>-->
                    <img src="./component/Image/reserve.png" alt="reservation">
                  </div>
                  <h4>Table Reservation</h4>    
                  <p>You can reserve a table in our restaurant and come at a scheduled time!</p>
                  <!--<a href="#">Reserve now! <i class="fas fa-arrow-right"></i></a></center>-->
                  <a href="tel:+37254633966"><i class="fas fa-phone"></i>  +37254633966<br>For Reservation Call Us!</a>
                </center>
              </div>
            </div>
            <div class="col-md-5">
              <div class="takeawaycontent" data-aos="flip-down" data-aos-duration="800">
                <center>  
                  <div class="icon-space">
                    <i class="fa fa-shopping-bag fa-5x"></i>
                  </div>
                  <h4>TakeAway Food</h4>
                  <p>Come and take it away with you!</p>
                  <!--<a href="#">TakeAway now! <i class="fas fa-arrow-right"></i></a></center>-->
                  <a href="tel:+37254633966"><i class="fas fa-phone"></i> +37254633966<br>Call Us!</a>
                </center>
              </div>
            </div>
            <div class="offset-md-1 col-md-5"></div>
          </div>
        </div> 
      </div>
      <!--####Our Services-->
      <!--Contact Page-->
      <div class="contact" id="contact">
        <div class="contact-heading-content">
          <center>
            <h2>Contact Us</h2>
          </center>
          <hr class="hr-style">
        </div>
        <div class="contact-content">
          <div class="row">
            <div class="offset-md-1"></div>
            <div class="col-md-5">
              <div class="embeddedmap" data-aos="zoom-out" data-aos-duration="1000">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2029.0651071795676!2d24.738989451348722!3d59.43198768160498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4692949c18c6e5ab%3A0x635aae3177461db0!2sKaarli%20puiestee%209%2C%2010142%20Tallinn%2C%20Estonia!5e0!3m2!1sen!2sin!4v1572353801489!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-content" data-aos="fade-left" data-aos-duration="1000">
                <center><h4>Drop Us a Message!</h4></center>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 mr-auto ml-auto">
                    <div class="panel panel-danger">
                      <div class="panel-body">
                        <form id="reused_form"  method="post" action= "send.php">
                          <div class="form-group">
                            <label><i class="fa fa-user" aria-hidden="true"></i> Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                          </div>
                          <div class="form-group">
                            <label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                          </div>
                          <div class="form-group">
                            <label><i class="fa fa-comment" aria-hidden="true"></i> Message</label>
                            <textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" name="submit">
                          </div>
                        </form>
                        <div id="error_message" style="width:100%; height:100%; display:none; ">
                          <h4>
                           <?= $result; ?>
                          </h4>
                          Sorry there was an error sending your form. 
                        </div>
                        <div id="success_message" style="width:100%; height:100%; display:none; ">
                          <h2>Success! Your Message was Sent Successfully.</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>           
              </div>
            </div>
            <div class="offset-md-1"></div>
          </div>
        </div>
      </div>
    </main>
    <footer class="footer-distributed">
      <div class="footer-left">
        <img src="./component/Image/royalAsianRestaurant.png">
        <h4>Royal <span> Asian</span> Restaurant</h4>      
        <p class="footer-links">
          <a href="#home">Home</a>
          |
          <a href="#aboutUs">About Us</a>
          |
          <a href="#menu">Our Menu</a>
          |
          <a href="#service">Our Service</a>
          |
          <a href="#contact">Contact</a>
        </p>
        <p class="footer-company-name"> RoyalAsian</p>
      </div>
      <div class="footer-center">
        <div>
          <a href="https://goo.gl/maps/Jrxxd3rGeQDYHFLy7" target="_blank"> <i class="fas fa-map-marker"></i>
            <p><span>Royal Asian Restaurant<br> 
               Kaarli Pst 9, Tallinn, Estonia
             </span>
            </p>
          </a>
        </div>
        <div>
          <a href="tel:+37254633966"><i class="fas fa-phone"></i>
            <p>+37254633966</p>
          </a>
        </div>
        <div>
          <p><a href="mailto:info@royalasian.ee"><i class="fas fa-envelope"></i>info@royalasian.ee</a></p>
        </div>
      </div>
      <div class="footer-right">
        <div class="footer-icons">
          <div>
            <a href="https://www.facebook.com/royalasian.ee/"><i class="fab fa-facebook-f"></i></a>  
          </div>
          <br>
          <div>
            <h4 style="color: aliceblue;">Language</h4>
            <a href="./component/est/est-index.html"><img src="./component/Image/estonia.png" alt="est"></a>
            <a href="#"><img src="./component/Image/english-language.png" alt="eng"></a>
            <!--<a href="#"><img src="./component/Image/russia.png" alt="rus"></a>-->
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <script>
      AOS.init();
    </script>
  </body>
</html>