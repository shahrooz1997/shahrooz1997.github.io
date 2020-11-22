<?php

// echo "salam";
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "hzare@ce.sharif.ir";
    $email_subject = "ce_hzare_contact_form";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['message']; // required

    // echo $first_name;
    // echo $email_from;
    // echo $comments;
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    // $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    $email_from = "unknown";
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    // $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    $first_name = "unknown";
  }
 
  // if(strlen($comments) < 2) {
  //   $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  // }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n\n\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
// @mail($email_to, $email_subject, $email_message);  
// $myfile = fopen("messages.txt", "wr") or die("Unable to open file!");
$txt = "user id date";
$myfile = file_put_contents('messages.txt', $email_message.PHP_EOL , FILE_APPEND | LOCK_EX);
fclose($myfile);
?>
 
<!-- include your own success html here -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/magnific-popup.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="../css/tooplate-style.css">

<title>HamidReza Website - Contact</title>
 
<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</div>

<!-- SERVICE SECTION -->
<section id="service" class="parallax-section" style="height: 100%">
     <div class="container">
          <div class="row">

               <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                    <!-- SECTION TITLE -->
                    <h2>Thanks for being awesome!</h2>
                    <p>I got your message and will be in touch with you very soon.</p>
               </div>
               
          </div>
     </div>
</section>

<!-- FOOTER SECTION -->
<!-- <footer>
    <div class="container">
        <div class="row">

               <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.8s">
                    <p class="white-color">Copyright &copy; 2017 
                    &nbsp| &nbspDesign: Tooplate, Improved by Shahrooz</p>
                    <div class="wow fadeInUp" data-wow-delay="1s">
                         <ul class="social-icon">
                              <li><a href="https://www.instagram.com/realshahrooz/" class="fa fa-instagram"></a></li>
                              <li><a href="https://github.com/shahrooz1997" class="fa fa-github"></a></li>
                              <li><a href="https://telegram.me/realshahrooz" class="fa fa-telegram"></a></li>
                              <li><a href="https://www.facebook.com/shahrooz.zr" class="fa fa-facebook"></a></li>
                         </ul>
                    </div>
          </div>
     </div>
</footer> -->

<!-- SCRIPTS -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.parallax.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/custom.js"></script>

<?php
 header( "refresh:5;url=http://ce.sharif.edu/~hzare" );
}
?>


