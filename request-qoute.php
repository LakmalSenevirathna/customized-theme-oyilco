<!DOCTYPE html>
<html>
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- reponsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Quote | Oyilco Engineering (pvt) Ltd</title>
    <!-- Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- animate css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- owl-carousel-->
    <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="vendors/revolution/css/settings.css">
    <link rel="stylesheet" href="vendors/revolution/css/layers.css">
    <link rel="stylesheet" href="vendors/revolution/css/navigation.css">
    <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
    <!-- Main Css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    -->
  </head>
  <body>

          
    <!-- Header start-->
    <?php include('inc/navbar.php'); ?>
    <!-- Header End -->

    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Request a Quote</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
          <li><span>REQUEST A QUOTE</span></li>
        </ul>
      </div>
    </section>
                <!-- PHP Mailer -->
                <?php 
        $msg = '';
        if(isset($_POST['submitq'])){
          require 'PHPMailerAutoload.php';
          require 'credential.php';

          $mail = new PHPMailer;

          //$mail->SMTPDebug = 4;                               // Enable verbose debug output

          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = EMAIL;                 // SMTP username
          $mail->Password = PASS;                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to

          $mail->setFrom(EMAIL, 'Message From Client');
          $mail->addAddress('oyilcoengineering@gmail.com');     // Add a recipient
                     
          $mail->addReplyTo(EMAIL);
          

         // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
         // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
          $mail->isHTML(true);                                  // Set email format to HTML

          $mail->Subject = $_POST['subject'];
          $mail->Body    = '<h3>Name :</h3>'.$_POST['name']."<br>".
          'Email :'.$_POST['email']."<br>".
          'Subject :'.$_POST['subject']."<br>".
          'Company :'.$_POST['company']."<br>".
          'Project :'.$_POST['project']."<br>".
          'Message :'.$_POST['message'];
          $mail->AltBody = $_POST['subject'];

          if(!$mail->send()) {
              $msg = 'Something is wrong. Message cant be sent!';
              $msg = 'Something is wrong. Message cant be sent!'; //. $mail->ErrorInfo;
          } else {
            $msg = 'Your message sent successfully.';
          }
        }

    ?>
    <!-- End PHP Mailer -->
    <!-- Request a quote Page-->
    <section class="check-project testimonials sectpad touch">
      <div class="container clearfix touch_bg">
        <div class="section_header-r color">
          <h2>fill out below form</h2>
        </div>
        <div class="row m0 req-page-area touch_middle">
          <div class="col-md-8 col-sm-12 col-xs-12 pull-left input_form">
            <form  action="request-qoute.php" method="post">
              <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12"><span>Your Name</span>
                <input type="text" name="name" placeholder="Full Name" class="form-control">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m0"><span>Your Email</span>
                <input  type="email" name="email" placeholder="Email" class="form-control">
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Subject</span>
                <input  type="text" name="subject" placeholder="Subject" class="form-control">
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Your Company Name</span>
                <input  type="text" name="company" placeholder="Your Company Name" class="form-control">
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Project Name</span>
                <input  type="text" name="project" placeholder="Project Name" class="form-control">
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Give Some Details </span>
                <textarea rows="6" name="message" placeholder="Message" class="form-control"></textarea>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button type="submit" name="submitq" class="btn btn-default submit">Submit Now <i class="fa fa-angle-double-right"></i></button>
              </div>
            </form>
            <div>
            <p style="color:red; font-weight:700;"><?php  echo $msg; ?></p>
            </div>
          </div>
          <div class="col-md-4 hidden-sm text-left pull-right">
          </div>
          <div class="req-img"><img src="images/get-touch/1.jpg" alt="" class="img-responsive"></div>
        </div>
      </div>
    </section>
    <!-- Indurial Solution-->
    <section class="indurial-t-solution indurial-solution indpad anim-5-all indurial-t-solution3">
      <div class="container clearfix">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="indurial-solution-text text-center">
              <h2>If  You Need Any Industrial Solution. We Are Available For You</h2><span class="contactus-button2 text-center"><a href="contact.html" class="submit">Contact Us </a></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Indurial Solution-->

    <!-- Header start-->
        <?php include('inc/footer.php'); ?>
    <!-- Header End -->

  </body>

</html>