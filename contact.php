<!DOCTYPE html>
<html>
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- reponsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact | Oyilco Engineering (pvt) Ltd</title>
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
        <h2>Contact Us</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index.php">Home</a></li>
          <li><span>Contact Us</span></li>
        </ul>
      </div>
    </section>
    <!-- Contact us Page-->
    <section class="core-projects touch">
      <div class="sectpad touch_bg">
        <div class="container clearfix">
          <h1>Stat connected</h1>
          <p>You can talk to our online representative at any time. Please use our Live Chat System on our website or<br>Fill up below instant messaging programs.</p>
          <div class="row touch_middle">
            <div class="col-md-4 open_hours">
              <div class="touch_top-con">
                <ul class="nav">
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-map-marker"></i></a></div>
                      <div class="media-body">No 555/1/A, Dewala Road, Maharanugegoda, Kadawatha</div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-envelope-o"></i></a></div>
                      <div class="media-body"><a href="mailto:info@oyilcoengineering.lk">info@oyilcoengineering.lk</a></div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-phone"></i></a></div>
                      <div class="media-body">071-1493889</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- PHP Mailer -->
    <?php 
        $msg = '';
        if(isset($_POST['submitcontact'])){
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
          $mail->Body    = 'Name :'.$_POST['name']."<br>".'Email :'.$_POST['email']."<br>".'Subject :'.$_POST['subject']."<br>".'Message :'.$_POST['message'];
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
            <div class="col-md-8 input_form">
              <form  action="contact.php" method="post">
                <input id="name" type="text" name="name" placeholder="First" class="form-control">
                <input id="email" type="email" name="email" placeholder="Email" class="form-control">
                <input id="subject" type="text" name="subject" placeholder="Subject" class="form-control">
                <textarea id="message" rows="6" name="message" placeholder="Message" class="form-control"></textarea>
                <div class="row m0">
                  <button type="submit" name="submitcontact" class="btn btn-default submit">Submit Now <i class="fa fa-angle-double-right"></i></button>
                </div>
              </form>
              <div>
                <p style="color:red; font-weight:700;"><?php  echo $msg; ?></p>
              </div>
      
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Footer start-->
        <?php include('inc/footer.php'); ?>
    <!-- Footer End -->

  </body>

</html>