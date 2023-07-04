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
      <title>About Us</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <div class="heading_container heading_center">
            <h2>
                About <span>Us</span>
            </h2>

            <h4>Welcome To Rapid Computing</h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <p>
                    Welcome to Rapid Computing! We are a leading provider of cutting-edge technology products and solutions for individuals and businesses. With a passion for innovation and a commitment to excellence, we strive to offer the latest and most reliable computing products to meet the evolving needs of our customers.

                    At Rapid Computing, we understand the importance of technology in today's fast-paced world. Whether you are a tech enthusiast, a professional seeking powerful computing solutions, or a business looking to streamline your operations, we have you covered. Our wide range of products includes high-performance laptops, desktops, tablets, accessories, and much more.

                    What sets us apart is our dedication to delivering exceptional customer experiences. We believe in building lasting relationships with our customers by providing personalized assistance, expert advice, and reliable support at every step of the way. Our team of knowledgeable professionals is always ready to help you find the perfect computing solutions tailored to your specific needs.

                    </p>

                    <p>
                    Whether you are a student, a professional, or a business owner, Rapid Computing is your one-stop shop for all your technology needs. Experience the convenience of shopping online with our user-friendly website, secure payment options, and prompt delivery services.

                    Thank you for choosing Rapid Computing as your preferred technology partner. We look forward to serving you and exceeding your expectations with our exceptional products and top-notch customer service. Explore our website and embark on a journey of seamless computing today!
                    </p>
                </div>
                <div class="col-md-10 offset-md-1 text-center">
                    <img src="/images/2.webp" width="450" height="350" style="padding-bottom: 20px;" alt="">
                </div>
            </div>
        </div>
    

      


      
      

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