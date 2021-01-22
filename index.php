<!doctype html>
<htm>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/favicon.ico" type="image/x-icon"></link>
        <link rel="icon" href="/favicon.png" sizes="32x32" type="image/png"></link>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous"></link>
        <link rel="stylesheet" href="/styles.css"></link>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <title>Finanziell</title>
        <script>
            function validateContactForm(){
                var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                if(document.forms['contactUs']['name'].value != '' &&
                document.forms['contactUs']['email'].value != '' &&
                document.forms['contactUs']['message'].value != '' &&
                document.forms['contactUs']['email'].value.match(mailformat)){
                    return true;
                }else{
                    return false;
                }
            }
            $(document).ready(function(){
                if(window.location.href.indexOf('?tryagain') > -1){
                    document.getElementById('error').style.display = 'block';
                    setTimeout(function(){
                        document.getElementById('error').style.display = 'none';
                    },3000);
                }
            });
            $.getJSON('local.json', function(json){
                jQuery.each($('.product'), function(index, element){
                    $('#'+element.id+' .p-title').text(json[index].name);
                    $('#'+element.id+' .p-desc').text(json[index].description)
                })
            });
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="header">
                        <nav class="navbar fixed-top navbar-expand-lg navbar-light f-navbar">
                            <div class="container-fluid">
                                <a href="#">
                                    <img src="assets/images/Finanziell_final.png" style="width: 148px;height:40px;">
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#navbarTogglerDemo01" 
                                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">
                                                Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#products">
                                                Products
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link pointer-cursor" data-bs-toggle="modal" data-bs-target="#contactUsModal">
                                                Contact Us
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link pointer-cursor" data-bs-toggle="modal" data-bs-target="#aboutUsModal">
                                                About Us
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="slider">
                        <div id="carouselFade" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-slide-to="0" class="active"></li>
                                <li data-bs-slide-to="1"></li>
                                <li data-bs-slide-to="2"></li>
                                <li data-bs-slide-to="3"></li>
                                <li data-bs-slide-to="4"></li>
                                <li data-bs-slide-to="5"></li>
                              </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <a href="#nps">
                                    <img src="assets/images/nps.jpg" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a href="#gold_loan">
                                    <img src="assets/images/Gold loan.png" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a href="#home_loan">
                                    <img src="assets/images/homeloan.png" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a href="#car_loan">
                                    <img src="assets/images/Car loan.jpg" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a href="#education_loan">
                                    <img src="assets/images/Educational loan.png" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a href="#mutual_funds">
                                    <img src="assets/images/mutual_funds_banner.png" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselFade" role="button" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselFade" role="button" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                        <div id="carousel-mobile" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-slide-to="0" class="active"></li>
                                <li data-bs-slide-to="1"></li>
                                <li data-bs-slide-to="2"></li>
                                <li data-bs-slide-to="3"></li>
                                <li data-bs-slide-to="4"></li>
                                <li data-bs-slide-to="5"></li>
                              </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <a href="#nps">
                                    <img src="assets/images/nps_mobile.jpg" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a href="#gold_loan">
                                    <img src="assets/images/gold_loan_mobile.png" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a href="#home_loan">
                                    <img src="assets/images/home_loan_mobile.png" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a href="#car_loan">
                                    <img src="assets/images/car_loan_mobile.png" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a href="#education_loan">
                                    <img src="assets/images/education_loan_mobile.png" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                              <div class="carousel-item">
                                <a href="#mutual_funds">
                                    <img src="assets/images/mutual_funds_mobile.png" class="d-block w-100 rounded" alt="...">
                                </a>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-mobile" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-mobile" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="products">
                        <div class="section-heading">
                            <a name="products">Products</a>
                        </div>
                        <div class="product" id="p1">
                            <a name="nps">
                                <div class="row">
                                    <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 description">
                                        <div class="center-top-down">
                                            <div class="p-title"></div>
                                            <div class="p-desc"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 product-image">
                                        <img src="assets/images/nps_icon.png" class="img-fluid">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product" id="p2">
                            <a name="gold_loan">
                                <div class="row">
                                    <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 product-image">
                                        <img src="assets/images/GoldV01.png" class="img-fluid">
                                    </div>
                                    <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 description">
                                        <div class="center-top-down">
                                            <div class="p-title"></div>
                                            <div class="p-desc"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product" id="p3">
                            <a name="home_loan">
                                <div class="row">
                                    <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 description">
                                        <div class="center-top-down">
                                            <div class="p-title"></div>
                                            <div class="p-desc"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 product-image">
                                        <img src="assets/images/homel .png" class="img-fluid">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product" id="p4">
                            <a name="car_loan">
                                <div class="row">
                                    <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 product-image">
                                        <img src="assets/images/Car.png" class="img-fluid">
                                    </div>
                                    <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 description">
                                        <div class="center-top-down">
                                            <div class="p-title"></div>
                                            <div class="p-desc"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product" id="p5">
                            <a name="education_loan">
                                <div class="row">
                                    <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 description">
                                        <div class="center-top-down">
                                            <div class="p-title"></div>
                                            <div class="p-desc"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 product-image">
                                        <img src="assets/images/Educational_V01.png" class="img-fluid">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product" id="p6">
                            <a name="mutual_funds">
                                <div class="row">
                                    <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 product-image">
                                        <img src="assets/images/mutual funds.png" class="img-fluid">
                                    </div>
                                    <div class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10 description">
                                        <div class="center-top-down">
                                            <div class="p-title"></div>
                                            <div class="p-desc"></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="movable-footer">
                <div class="col-12">
                    <span class="footer-head">Products</span>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <ul type="none">
                        <li>
                            <a href="#car_loan">
                                Car Loan
                            </a>
                        </li>
                        <li>
                            <a href="#education_loan">
                                Education Loan
                            </a>
                        </li>
                        <li>
                            <a href="#gold_loan">
                                Gold Loan
                            </a>
                        </li>
                        <li>
                            <a href="#home_loan">
                                Home Loan
                            </a>
                        </li>
                        <li>
                            <a href="#mutual_funds">
                                Mutual Funds
                            </a>
                        </li>
                        <li>
                            <a href="#nps">
                                National Pension Scheme
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <ul type="none">
                        <li>
                            <a class="pointer-cursor" data-bs-toggle="modal" data-bs-target="#contactUsModal">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a class="pointer-cursor" data-bs-toggle="modal" data-bs-target="#aboutUsModal">
                                About Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row f-footer">
                <div class="col-12">
                    <div id="footer">
                        <div class="footer_content">
                            <div>Finanziell</div>
                            <div>Copyright@2021</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="aboutUsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">About Us</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="margin:0 1rem;">
                    <p>
                        We at Finanziell are dedicated to our customers. Finanziell helps you choose what is best for you by considering certain parameters, to name a few 
                    </p>
                    <ul>
                        <li>Lowest possible Interest Rates</li>
                        <li>Least processing fees</li>
                        <li>Bank gradings</li>
                        <li>Foreclosure charges</li>
                        <li>Eligibility</li>
                    </ul>
                </div>
                <div style="margin:0 1rem;">
                    <p>
                        I Ashok Kumar Sethi aged 60 years is a Chartered Banker, CAIIB and retired 
                        chief associate from State Bank of India, India's largest lender, having
                        rich experience of 35 years also writing thesis/paper on "banking and finance-cross
                        sell as well as up sell products pricing with reference to long term strategic risk
                        management in climate change scenario".
                    </p>
                </div>
                <div class="aboutUs_card">
                    <div class="card-logo">
                        <img src="assets/images/Finanziell_final.png"/>
                    </div>
                    <div class="card-name">
                        <p>Ashok Kumar Sethi</p>
                        <span>
                            <span class="yellow-colored">Chartered</span>
                            Banker
                        </span>
                    </div>
                    <hr />
                    <div class="card-info">
                        <div style="margin:5px 0;color: #00192f;font-weight: 500;">
                            <span>Ex. CA (CSS)</span>
                            <img src="assets/images/sbi-logo.png" style="width:30px;margin:0 5px;
                                position: relative;top:-2px;"/>
                            <span>State Bank Of India</span>
                        </div>
                        <div>
                            <img src="assets/images/indian-flag.png" style="width:25px;"/>
                            <span>+91 94160 90985</span>
                        </div>
                        <div>
                            <span>Mail : sethi67plahisar@gmail.com 
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="modal fade" id="contactUsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Write to us...</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="contactUs" action="mail.php" method="post" onsubmit="return validateContactForm()">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Email" id="name" name="name" required>
                                <label for="floatingInput">Name</label>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" placeholder="Email" id="from" name="email" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control textarea-size" placeholder="Write your queries here..." id="content" name="message" required></textarea>
                            <label for="floatingTextarea">Your Query</label>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary send-btn" id="send_email" name="submit">SEND</button>
                    </div>
                </div>
                </form>
                <div class="row">
                    <div class="col">
                        <div class="divider">
                            <hr />
                            <span>OR</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col or-msg">
                        <div>You can message or whatsapp us at this contact</div>
                        <p>+91 94160 90985</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    <div id="error" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Message Not Sent!</strong> Please fill appropriate values and try again.
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>