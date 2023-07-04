<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Contact Us</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <style>
        body {
        background-color: #f8f9fa;
        }
        
        .contact-section {
        padding: 100px 0;
        }
        
        .contact-heading {
        text-align: center;
        margin-bottom: 50px;
        }
        
        .contact-form {
        background-color: #fff;
        border-radius: 5px;
        padding: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .contact-form label {
        font-weight: bold;
        }
        
        .contact-form textarea {
        resize: none;
        }
        
        .contact-form button {
        width: 100%;
        }
        .card {
        border-radius: 15px;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <div style="padding-top: 20px;" class="heading_container heading_center">
            <h2>
                Contact <span>Us</span>
            </h2>

        </div>
        <div>
        <iframe src="https://www.google.com/maps/d/embed?mid=17RpwImwXgMNsl35SuqMtw_Tm2x1OKCM&ehbc=2E312F" width="100%" frameborder="2" style="border:2" height="450"></iframe>
        </div>

        <div class="container">
            <div class="contact-section">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                <form class="contact-form">
                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kandy</h5>
                        <address>
                        <strong>Showroom 1</strong><br>
                        283/B, Main Street Kandy City, <br>
                        Central, Sri Lanka <br>
                        TELEPHONE: 081 123 6410
                        </address>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kandy</h5>
                        <address>
                        <strong>Showroom 2</strong><br>
                        456 Matale Road, Akurana,<br>
                        Kandy, Central, Sri Lanka <br>
                        TELEPHONE: 081 230 6220
                        </address>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Matale</h5>
                        <address>
                        <strong>Showroom 3</strong><br>
                        789 Main Street, <br>
                        Matale, Central, Sri Lanka <br>
                        TELEPHONE: 066 133 6246
                        </address>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        @include('home.footer')
        <!-- footer end -->
        <div class="cpy_">
            <p class="mx-auto">© 2023 Web Solution By <a href="https://yusry-website-hosting.web.app/">Mohamed Yusry</a><br>
            
            </p>
        </div>

      <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
      </script>

      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>