<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>ABOUT US</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>WHY CHOOSE US?</h3>
         <p>At Bookly, we believe books should feel personal—like they were chosen just for you. That’s why we hand-select our collection with a blend of passion, expertise, and a little bit of magic. We aim to give you a seamless, enjoyable experience from browsing to delivery.</p>
         <p>Expect quality books, fast shipping, and customer service that treats you like family. Your next favorite story is only a click away.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">CLIENT'S REVIEWS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Bookly never disappoints. The books arrive in perfect condition, and the selection always feels thoughtfully chosen. It’s like having your own personal book curator!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alex</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I love Bookly! The service is smooth, the staff is friendly, and the books? Absolutely worth every peso. Highly recommended for all book lovers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jasmine</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Amazing experience! My order arrived faster than expected, and the packaging was beautiful. Bookly really knows how to make every purchase feel special.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jack</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I’ve ordered many times, and Bookly always delivers. The quality, the service, the convenience—everything is top-notch. I’ll definitely keep coming back!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jerlyn</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Bookly made reading fun again for me. I discovered so many great titles I wouldn’t have found on my own. They really know what readers want!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Bookly exceeded my expectations! The books arrived beautifully packed, and the quality is fantastic definitely my new favorite place to shop for books</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Angeline</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">GREATE AUTHORS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/daniel hadler.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>DANIEL HADLER </h3>
      </div>

      <div class="box">
         <img src="images/jk rowling.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>JK ROWLING</h3>
      </div>

      <div class="box">
         <img src="images/andre aciman.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>ANDRÉ ACIMAN</h3>
      </div>

      <div class="box">
         <img src="images/suzzane collins.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>SUZZANE COLLINS</h3>
      </div>

      <div class="box">
         <img src="images/ransom riggs.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>RANSOM RIGGS</h3>
      </div>

      <div class="box">
         <img src="images/jane austen.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>JANE AUSTEN</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>