<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>contact us</title>
  <link rel="stylesheet" href="../css/contactus.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="#">Sharath Tours and Travels</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact Us</a>
        </li>
        <a href="#contact"><button class="btn book-now-button " type="button">Book Now</button></a>
      </ul>
    </div>
  </nav>
  <div class="image">

  </div>
  <div class="container mt-5">
    <div class="form-content homecontect">
        <div id="contact" class="contact-form-action">
            <h4>Get a Quote</h4>
            <!-- Ensure there is only one form tag -->
            <form class="row g-3 messenger-box-form" method="post" action="">
                <!-- Your Name -->
                <div class="col-lg-6 responsive-column">
                    <div class="input-box">
                        <label class="label-text" for="name">Your Name</label>
                        <div class="form-group">
                            <span class="fa fa-user form-icon"></span>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Your name" required>
                        </div>
                    </div>
                </div>
                <!-- Phone No. -->
                <div class="col-lg-6 responsive-column">
                    <div class="input-box">
                        <label class="label-text" for="phone">Phone No.</label>
                        <div class="form-group">
                            <span class="fa fa-phone form-icon"></span>
                            <input class="form-control" type="text" id="phone" name="phone" placeholder="Your Phone" required>
                        </div>
                    </div>
                </div>
                <!-- Email Id -->
                <div class="col-lg-6 responsive-column">
                    <div class="input-box">
                        <label class="label-text" for="email">Email Id.</label>
                        <div class="form-group">
                            <span class="fa fa-envelope-o form-icon"></span>
                            <input class="form-control" type="text" id="email" name="email" placeholder="Your Email Id" required>
                        </div>
                    </div>
                </div>
                <!-- Service -->
                <div class="col-lg-6 responsive-column">
                    <div class="input-box">
                        <label class="label-text" for="fleets">Service</label>
                        <div class="form-group">
                            <span class="fa fa-cab form-icon"></span>
                            <select name="fleets" id="fleets" class="form-control" >
                                <option hidden="" disabled="disabled" selected="selected" value="">Select A Car</option>
                                <option value="Sedan Cars">Sedan Cars</option>
                                <option value="Maruti Ertiga">Maruti Ertiga</option>
                                <option value="Toyota Innova">Toyota Innova</option>
                                <option value="Innova Crysta">Innova Crysta</option>
                                <option value="Maharaja Tempo Traveller">Maharaja Tempo Traveller</option>
                                <option value="Semi-sleeper Maharaja TT">Semi-sleeper Maharaja TT</option>
                                <option value="12 Seater Tempo Traveller">12 Seater Tempo Traveller</option>
                                <option value="14 Seater Tempo Traveller">14 Seater Tempo Traveller</option>
                                <option value="Force Urbania">Force Urbania</option>
                                <option value="20 Seater Tempo Traveller">20 Seater Tempo Traveller</option>
                                <option value="21 Seater MinBus">21 Seater MinBus</option>
                                <option value="24 Seater Min Bus">24 Seater Min Bus</option>
                                <option value="Luxury Bharat Benz">Luxury Bharat Benz</option>
                                <option value="33 Seater Bus">33 Seater Bus</option>
                                <option value="Multi Axle Volvo Bus">Multi Axle Volvo Bus</option>
                                <option value="50 Seater Bus">50 Seater Bus</option>
                            </select>
                            <span id="car_error" class="text-danger"></span>
                        </div>
                    </div>
                </div>
                <!-- Type Travel -->
                <div class="col-lg-6 responsive-column">
                    <div class="input-box">
                        <label class="label-text" for="travel">Type Travel</label>
                        <div class="form-group">
                            <span class="fa fa-asterisk form-icon"></span>
                            <select name="typetravel" id="travel" class="form-control" >
                                <option hidden="" disabled="disabled" selected="selected" value="">Where do you need to Travel</option>
                                <option value="With in City">With in City</option>
                                <option value="Outstation">Outstation</option>
                                <option value="Airport">Airport</option>
                            </select>
                            <span id="travel_error" class="text-danger"></span>
                        </div>
                    </div>
                </div>
                <!-- Date -->
                <div class="col-lg-6 responsive-column">
                    <div class="input-box">
                        <label class="label-text" for="date">Date</label>
                        <div class="form-group">
                            <span class="fa fa-calendar form-icon"></span>
                            <input placeholder="Date" class="textbox-n form-control" type="text" onfocus="(this.type='date')" id="date" name="date" />
                            <span id="date_error" class="text-danger"></span>
                        </div>
                    </div>
                </div>
                <!-- CAPTCHA -->
                <div class="col-lg-12 text-center">
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey=""></div>
                        <span id="captcha_error" class="text-danger"></span>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="col-lg-12">
                    <div class="btn-box text-center">
                        <button name="submit" type="submit" class="theme-btn send-message-btn" id="send-message-btn">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="contactus">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="list-group">
            <div class="list-group-item">
              <i class="fa fa-map-marker icon-element"></i>
              <h5 class="title1 font-size-16 pb-1">Sharath Tours and Travels</h5>
              <p class="map__desc">No 244, 19th Main Rd, Sector 4, HSR Layout, Bengaluru, Karnataka 560102</p>
            </div>
            <div class="list-group-item">
              <i class="fa fa-phone icon-element"></i>
              <h5 class="title1 font-size-16 pb-1">Phone</h5>
              <p class="map__desc">Mobile: +91 89710 40400</p>
            </div>
            <div class="list-group-item">
              <i class="fa fa-whatsapp icon-element"></i>
              <h5 class="title1 font-size-16 pb-1">Whatsapp</h5>
              <p class="map__desc">+91 89710 40400</p>
            </div>
            <div class="list-group-item">
              <i class="fa fa-envelope-o icon-element"></i>
              <h5 class="title1 font-size-16 pb-1">Email</h5>
              <p class="map__desc">sharathtoursandtravels9@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
        <div class="footer-content">
            <p class="footer-text">
                sharathtoursandtravels© 2023 All rights reserved.<br> 
                <small><a href="">Terms & Conditions</a></small>
            </p>
        </div>
    </div>
</footer>

  
  

</div>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>