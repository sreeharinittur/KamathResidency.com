<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>complete responsive hotel booking website design tutorial</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap');

:root{
   --main-color:#2B1103;
   --sub-color:#DCC69C;
   --white:#fff;
   --border:.1rem solid rgba(220, 198, 156, .3);
}

*{
   font-family: 'Montserrat', sans-serif;
   margin: 0; padding: 0;
   box-sizing: border-box;
   outline: none; border: none;
   text-decoration: none;
}

*::selection{
   background-color: var(--sub-color);
   color: var(--main-color);
}

*::-webkit-scrollbar{
   height: .5rem;
   width: 1rem;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--sub-color);
   border-radius: 5rem;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
   scroll-behavior: smooth;
   scroll-padding-top: 2rem;
}

body{
   background-color: var(--main-color);
}

section{
   padding: 3rem 2rem;
   max-width: 1200px;
   margin: 0 auto;
}

.btn{
   display: inline-block;
   cursor: pointer;
   padding: 1rem 3rem;
   border: var(--border);
   font-size: 1.8rem;
   color: var(--sub-color);
   text-align: center;
   text-transform: capitalize;
   transition: .2s linear;
   margin-top: 1rem;
   background-color: var(--main-color);
}

.btn:hover{
   border-radius: 5rem;
   background-color: var(--sub-color);
   color: var(--main-color);
}

.header{
   padding-bottom: 0;
}

.header .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap: 1.5rem;
}

.header .flex .logo{
   color: var(--sub-color);
   font-size: 2.5rem;
}

.header .flex .btn{
   margin-top: 0;
}

.header .flex .fa-bars{
   font-size: 3rem;
   cursor: pointer;
   color: var(--sub-color);
   display: none;
}

.header .navbar{
   display: flex;
   align-items: center;
   justify-content: space-evenly;
   gap: 1.5rem;
   margin-top: 2rem;
   background-color: var(--sub-color);
   padding: .5rem;
   border-radius: .5rem;
}

.header .navbar a{
   font-size: 1.8rem;
   color: var(--main-color);
   padding: 1rem 3rem;
   border-radius: .5rem;
}

.header .navbar a:hover{
   background-color: var(--main-color);
   color: var(--sub-color);
}

.home .box img{
   border-radius: .5rem;
   height: 70vh; /* Increased height */
   width: 100%;
   object-fit: cover;
}
.navbar {
       display: flex;
       justify-content: space-between;
       align-items: center;
       background-color: #333; /* Adjust background color as needed */
       padding: 10px;
   }
   .navbar a {
       color: white;
       text-decoration: none;
       padding: 10px;
   }
   .navbar a:hover {
       background-color: #575757;
   }
   .nav-user {
       position: relative;
   }
   .nav-user .dropdown-menu {
       display: none;
       position: absolute;
       right: 0;
       background-color: white;
       color: black;
       border: 1px solid #ddd;
       margin-top: 5px;
   }
   .nav-user:hover .dropdown-menu {
       display: block;
   }
   .dropdown-item {
       padding: 10px;
       text-decoration: none;
       color: black;
   }
   .dropdown-item:hover {
       background-color: #f1f1f1;
   }
   .nav-login-register {
       list-style: none;
       padding: 0;
       margin: 0;
       display: flex;
   }
   .nav-login-register li {
       margin-left: 10px;
   }
   .nav-login-register a {
       color: white;
       text-decoration: none;
       padding: 10px;
   }
   .nav-login-register a:hover {
       background-color: #575757;
   }

.home .box .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap: 1.5rem;
   flex-wrap: wrap;
   margin-top: 1.5rem;
}

.home .box .flex h3{
   font-size: 2.5rem;
   color: var(--sub-color);
   text-transform: capitalize;
}

.swiper-wrapper {
   display: flex;
   width: 100px; /* Adjust width as needed */
   height: 500px; /* Adjust height as needed */
}

.swiper-button-prev{
   left: 0%;
}

.swiper-button-next{
   right: 0;
}

.swiper-button-next,
.swiper-button-prev{
   padding: 3rem 2rem;
   background-color: var(--white);
   top: 40%;
   opacity: .7;
}

.swiper-button-next::after,
.swiper-button-prev::after{
   color: var(--main-color);
   font-size: 2rem;
}

.swiper-button-next:hover,
.swiper-button-prev:hover{
   opacity: 1;
}

.availability form .flex{
   display: flex;
   flex-wrap: wrap;
   gap: 1.5rem;
}

.availability form .flex .box{
   flex: 1 1 20rem;
}

.availability form .flex .box p{
   font-size: 2rem;
   color: var(--sub-color);
}

.availability form .flex .box .input{
   width: 100%;
   padding: 1rem 0;
   font-size: 1.8rem;
   background-color: var(--main-color);
   color: var(--white);
   border-bottom: var(--border);
   margin: 1rem 0;
}

.availability form .flex .box input[type="date"]::-webkit-calendar-picker-indicator{
   filter: invert(1);
}

.about .row{
   display: flex;
   flex-wrap: wrap;
   gap: 1.5rem;
   text-align: center;
   align-items: center;
}

.about .row .image{
   flex: 1 1 40rem;
}

.about .row .image img{
   width: 40rem;
   border-radius: .5rem;
}

.about .row .content{
   flex:1 1 40rem;
}

.about .row .content h3{
   font-size: 3rem;
   color: var(--sub-color);
   text-transform: capitalize;
   margin-bottom: 1rem;
}

.about .row .content p{
   line-height: 2;
   padding: 1rem 0;
   font-size: 1.7rem;
   color: var (--sub-color);
}

.about .row.revers{
   flex-flow: row-reverse;
   margin: 3rem 0;
   flex-wrap: wrap;
}

.services .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(28rem, 1fr));
   gap: 1.5rem;
   justify-content: center;
   align-items: flex-start;
}

.services .box-container .box{
   padding: 2rem;
   text-align: center;
}

.services .box-container .box img{
   height: 7rem;
   margin-bottom: 1rem;
}

.services .box-container .box h3{
   font-size: 2rem;
   color: var(--sub-color);
   text-transform: capitalize;
   margin: 1rem 0;
}

.services .box-container .box p{
   line-height: 2;
   font-size: 1.5rem;
   color:var(--sub-color);
}





.gallery form .flex{
   display: flex;
   flex-wrap: wrap;
   gap: 1.5rem;
}

.gallery form h3{
   background-color: var(--sub-color);
   color: var(--main-color);
   font-size: 2.5rem;
   margin-bottom: 2rem;
   border-radius: .5rem;
   padding: 1.2rem;
   text-align: center;
   text-transform: capitalize;
}



.gallery form .flex .box p{
   font-size: 1.8rem;
   color: var(--sub-color);
}

.gallery form .flex .box .input{
   padding: 1rem 0;
   margin: 1rem 0;
   border-bottom: var(--border);
   background: var(--main-color);
   color: var(--white);
   font-size: 1.8rem;
   width: 100%;
}

.gallery form .flex .box input[type="date"]::-webkit-calendar-picker-indicator{
   filter: invert(1);
}

.gallery img{
   height: 40rem;
   width: 60rem;
   border-radius: .5rem;
   object-fit: cover;
   margin-bottom: 4rem;
   user-select: none;
}

.swiper-pagination-bullets.swiper-pagination-horizontal{
   bottom: 0;
}

.swiper-pagination-bullet{
   background-color: var(--sub-color);
}

.swiper-pagination-bullet-active{
   background-color: var(--white);
}

.contact .row{
   display: flex;
   align-items: flex-start;
   gap: 3rem;
   flex-wrap: wrap;
}

.contact .row form{
   flex: 1 1 40rem;
   border: var(--border);
   border-radius: .5rem;
   padding: 2rem;
   text-align: center;
}

.contact .row .faq{
   flex: 1 1 40rem;
}

.contact .row form h3{
   margin-bottom: 1rem;
   border-radius: .5rem;
   padding: 1.2rem;
   color: var(--main-color);
   background-color: var(--sub-color);
   font-size: 2.2rem;
   text-transform: capitalize;
}

.contact .row form .box{
   padding: 1rem 0;
   margin: 1rem 0;
   border-bottom: var(--border);
   font-size: 1.8rem;
   color: var(--sub-color);
   background:var(--main-color);
   width: 100%;
}

.contact .row form .box::placeholder{
   color: rgba(220, 198, 156, .6);
}

.contact .row form textarea{
   height: 15rem;
   resize: none;
}

.contact .row .faq .title{
   padding-bottom: .5rem;
   font-size: 2.5rem;
   color: var(--sub-color);
   text-transform: capitalize;
   text-align: center;
}

.contact .row .faq .box{
   border-radius: .5rem;
   border: var(--border);
   margin-top: 2rem;
}

.contact .row .faq .box h3{
   background-color: var(--sub-color);
   color: var(--main-color);
   padding: 1.5rem;
   font-size: 2rem;
   border-radius: .5rem;
   cursor: pointer;
}

.contact .row .faq .box p{
   padding:1.5rem 2rem;
   line-height: 2;
   font-size: 1.6rem;
   color: var(--sub-color);
   display: none;
}

.contact .row .faq .box.active p{
   display: inline-block;
}

.reviews{
   padding-top: 0;
}

.reviews .box{
   text-align: center;
   user-select: none;
   padding: 2rem;
   margin-bottom: 4rem;
}

.reviews .box img{
   height: 7rem;
   width: 7rem;
   border-radius: 50%;
   object-fit: cover;
}

.reviews .box h3{
   margin: 1.5rem 0;
   font-size: 2rem;
   color: var(--sub-color);
}

.reviews .box p{
   line-height: 2;
   font-size: 1.5rem;
   color: var(--sub-color);
}

.footer .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap: 1.5rem;
   justify-content: center;
   align-items: flex-start;
   padding-bottom: 3rem;
}

.footer .box-container .box a{
   display: block;
   font-size: 1.8rem;
   color: var(--sub-color);
   padding: 1rem 0;
}

.footer .box-container .box a:hover{
   color: var(--white);
}

.footer .box-container .box:first-child i{
   margin-right: 1.7rem;
}

.footer .box-container .box:nth-child(2){
   text-align: center;
}

.footer .box-container .box:last-child{
   text-align:right;
}

.footer .box-container .box:last-child i{
   margin-left: 1.7rem;
}

.footer .credit{
   border-radius: .5rem;
   padding: 2rem;
   text-align: center;
   color: var(--main-color);
   background-color: var(--sub-color);
   font-size: 2rem;
   /* margin-bottom: 8rem; */
}
.home .swiper-slide .flex h3 {
   color: #fff; /* Set the color of the text */
   font-size: 24px; /* Adjust the font size as needed */
   text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow for better visibility */
   position: absolute; /* Position the text */
   bottom: 20px; /* Adjust the position as needed */
   left: 500px; /* Adjust the position as needed */
   z-index: 1; /* Ensure it is above other elements */
   width:100px;
}
.home .swiper-slide .flex a {
   color: #fff; /* Set the color of the text */
   font-size: 24px; /* Adjust the font size as needed */
   text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add text shadow for better visibility */
   position: absolute; /* Position the text */
   bottom: 20px; /* Adjust the position as needed */
   left: 850px; /* Adjust the position as needed */
   z-index: 1; /* Ensure it is above other elements */
}


.facility .description h2 {
   margin: 0 0 10px 0;
   color: #333;
   font-size: 1.25em;
}

.facility .description p {
   color: #555;
   line-height: 1.4;
   font-size: 0.9em;
   margin: 0;
}

.facility.reverse {
   flex-direction: row-reverse;
}

.facility.reverse img {
   border-top-right-radius: 8px;
   border-bottom-right-radius: 8px;
   border-top-left-radius: 0;
   border-bottom-left-radius: 0;
}

@media (max-width: 768px) {
   .facility, .facility.reverse {
       flex-direction: column;
   }

   .facility img, .facility.reverse img {
       width: 100%;
       border-radius: 0;
   }

   .facility .description, .facility.reverse .description {
       padding: 10px;
   }

   .facility.reverse img {
       border-radius: 8px 8px 0 0;
   }
}

.description {
   padding: 20px;
   flex: 1;
   display: flex;
   flex-direction: column;
   justify-content: center;
}

.description h2 {
   margin-top: 0;
   color: #333;
   font-size: 1.5em;
}

.description p {
   color: #555;
   line-height: 1.6;
}

@media (max-width: 768px) {
   .facility, .facility.reverse {
       flex-direction: column;
   }

   .facility .image, .facility.reverse .image {
       max-width: 100%;
   }
}

/* media queries  */

@media (max-width:991px){

   html{
      font-size: 55%;
   }

   .header .flex .fa-bars{
      display: inline-block;
   }

   .header .flex .btn{
      display: none;
   }

   .header .navbar{
      flex-flow: column;
      padding: 2rem;
      display: none;
   }

   .header .navbar.active{
      display: flex;
   }

}

@media (max-width:768px){

   .home .box img{
      height: 50vh; /* Increased height */
   }

   .swiper-button-next,
   .swiper-button-prev{
      top: 35%;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .header .flex .logo{
      font-size: 2rem;
   }

   .home .box img{
      height: 35rem; /* Increased height */
   }

   .about .row .image img{
      width: 100%;
   }

   .gallery img{
      height: 25rem;
      width: 30rem;
   }   
}


   </style>
</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <div class="flex">
      <a href="#home" class="logo" style="color:#2B1103;font-weight:bold;">Kamath Residency</a>
      <a href="rooms" class="btn" style="border-radius:30px">check availability</a>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

   <nav class="navbar">
   <a href="#home">Home</a>
   <a href="aboutus">About</a>
   <a href="rooms">Rooms</a>
   <a href="gallery">Gallery</a>
   <a href="contactus">Contact</a>
   <a href="menu">Menu</a>

   @if (Route::has('login'))
      @auth
         <div class="nav-user">
            <!-- User icon and name -->
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-user"></i> {{ Auth::user()->name }}
            </a>

            <!-- Dropdown menu -->
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="{{ route('mybookings') }}">MyBookings</a>
               <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
               </form>
            </div>
         </div>
      @else
         <ul class="nav-login-register">
            <li><a href="{{ url('login') }}">Login</a></li>
            @if (Route::has('register'))
               <li><a href="{{ url('register') }}">Register</a></li>
            @endif
         </ul>
      @endauth
   @endif
</nav>


</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="swiper home-slider" style="top:100px;border-radius:30px">

      <div class="swiper-wrapper" >
         <div class="box swiper-slide">
            <img src="images/reception.JPG" alt="">
            <div class="flex">
               <h3>Reception</h3>
               
            </div>
         </div>


         <div class="box swiper-slide">
            <img src="images/r2.JPG" alt="">
            <div class="flex">
               <h3>luxurious rooms</h3>
               
            </div>
         </div>
         
         <div class="box swiper-slide">
            <img src="images/r3.JPG" alt="">
            <div class="flex">
               <h3>luxurious rooms</h3>
               
            </div>
         </div>

         
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->







<!-- reviews section ends  -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <a href="tel:1234567890"><i class="fas fa-phone"></i> +123-456-7890</a>
         <a href="tel:1112223333"><i class="fas fa-phone"></i> +111-222-3333</a>
         <a href="mailto:shakhanas@gmail.com"><i class="fas fa-envelope"></i> shakhanas@gmail.com</a>
         <a href="#"><i class="fas fa-map-marker-alt"></i> mumbai, india - 400104</a>
      </div>

      <div class="box">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#reservation">reservation</a>
         <a href="#gallery">gallery</a>
         <a href="#contact">contact</a>
         <a href="#reviews">reviews</a>
      </div>

      <div class="box">
         <a href="#">facebook <i class="fab fa-facebook-f"></i></a>
         <a href="#">twitter <i class="fab fa-twitter"></i></a>
         <a href="#">instagram <i class="fab fa-instagram"></i></a>
         <a href="#">linkedin <i class="fab fa-linkedin"></i></a>
      </div>

   </div>


</section>

<!-- footer section ends -->








<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>
let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () => {
   navbar.classList.toggle('active');
}

window.onscroll = () => {
   navbar.classList.remove('active');
}

document.querySelectorAll('.contact .row .faq .box h3').forEach(faqBox => {
   faqBox.onclick = () => {
      faqBox.parentElement.classList.toggle('active');
   }
});

// Initialize Swiper for Home Slider
var swiperHomeSlider = new Swiper(".home-slider", {
   loop: true,
   slidesPerView: 1,            // Number of slides per view
   spaceBetween: 10,            // Space between slides
   grabCursor: true,            // Enable grab cursor
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
   autoplay: {
      delay: 1500, // Adjusted to 1.5 seconds
      disableOnInteraction: false,
   },
   speed: 2000, // Adjust the speed as needed
});

// Initialize Swiper for Gallery Slider
var swiperGallerySlider = new Swiper(".gallery-slider", {
   loop: true,
   slidesPerView: "auto",
   centeredSlides: true,
   grabCursor: true,
   spaceBetween: 10,            // Space between slides
   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },
   pagination: {
      el: ".swiper-pagination",
   },
   autoplay: {
      delay: 1500, // Adjusted to 1.5 seconds
      disableOnInteraction: false,
   },
   speed: 2000, // Adjust the speed as needed
});

// Initialize Swiper for Reviews Slider
var swiperReviewsSlider = new Swiper(".reviews-slider", {
   loop: true,
   slidesPerView: "auto",
   grabCursor: true,
   spaceBetween: 30,
   pagination: {
      el: ".swiper-pagination",
   },
   breakpoints: {
      768: {
        slidesPerView: 1,
      },
      991: {
        slidesPerView: 2,
      },
   },
   autoplay: {
      delay: 1500, // Adjusted to 1.5 seconds
      disableOnInteraction: false,
   },
   speed: 2000, // Adjust the speed as needed
});

</script>

</body>
</html>