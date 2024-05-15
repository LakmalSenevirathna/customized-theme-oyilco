<!DOCTYPE html>
<html>
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- reponsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oyilco Engineering (pvt) Ltd</title>
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

    <!-- =========Hero start============-->
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px; font-weight:700; color:white;">Welcome to Oyilco Engineering</h1>
        <p>Delivering results, reliability, & rock solid dependability</p>
        
      </div>
    </div>
    <!-- =========Hero end============-->

        <!-- LOOKING AN ADEQUATE-->
    <section class="sec-pad about-us-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12 col-xs-12">
            <div class="about-us">
              <div class="sec-title">
                <h2>About us</h2>
                <div class="decor-line"></div>
              </div><img src="images/about/aboutus1.jpg" alt="">
              <p>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam.Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem.</p>
              <div class="row">
                <div class="col-md-6">
                  <ul>
                    <li>Our Company Growth</li>
                    <li>1000 Employed</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul>
                    <li>Our Company Growth</li>
                    <li>Customer Relationship</li>
                  </ul>
                </div>
              </div><a href="#" class="read-more btn">Read more </a>
            </div>
          </div>
          <div class="col-md-5 col-sm-12 col-xs-12">
            <div class="sec-title">
              <h2>Why choose us</h2>
              <div class="decor-line"></div>
            </div>
            <div class="faq-left-box">
              <div class="single-faq-left">
                <div class="icon-box"><img src="images/about/icon7.png" alt=""></div>
                <div class="text-box">
                  <h3>Advanced Technology</h3>
                  <p>Neque porro quisquam est, qui dolorem ipsum quira dolor sit amet, consectetur adipisci ui dolorem ipsum quira dolor sit amet, ui dolorem ipsum.</p>
                </div>
              </div>
              <div class="single-faq-left">
                <div class="icon-box"><img src="images/about/icon8.png" alt=""></div>
                <div class="text-box">
                  <h3>delivery on time</h3>
                  <p>Neque porro quisquam est, qui dolorem ipsum quira dolor sit amet, consectetur adipisci ui dolorem ipsum quira dolor sit amet, ui dolorem ipsum.</p>
                </div>
              </div>
              <div class="single-faq-left">
                <div class="icon-box"><img src="images/about/icon9.png" alt=""></div>
                <div class="text-box">
                  <h3>Certified Engineers</h3>
                  <p>Neque porro quisquam est, qui dolorem ipsum quira dolor sit amet, consectetur adipisci ui dolorem ipsum quira dolor sit amet, ui dolorem ipsum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PHP Mailer -->
    <?php 
        $msg = '';
        if(isset($_POST['sendmail'])){
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

          $mail->Subject = $_POST['name'];
          $mail->Body    = 'Name :'.$_POST['name']."<br>".'Email :'.$_POST['email']."<br>".'Phone :'.$_POST['phone'];
          $mail->AltBody = $_POST['phone'];

          if(!$mail->send()) {
              $msg = 'Something is wrong. Message cant be sent!';
              $msg = 'Something is wrong. Message cant be sent!'; //. $mail->ErrorInfo;
          } else {
            $msg = 'Your message sent successfully.';
          }
        }

    ?>
    <!-- End PHP Mailer -->
    
    <!-- We customer Support-->
    <section class="we-customer-support">
      <div class="work-image-ser"><img src="images/support/ser-img-left.jpg" alt=""></div>
      <div class="service-promo">
        <div class="service-t-content">
          <p>Any kind of business solution and consultation don’t hesitate to contact with us for immidiate customer support. We are love to here from you.</p>
          <form action="index.php" method="POST">
            <input type="text" name="name" placeholder="Your Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone">
            <input  type="submit" name="sendmail" value="SUBMIT NOW" class="btn btn2">
            <span style="color:red; font-weight:700; display:inline-block;"><?php  echo $msg; ?></span>
          </form>
        </div>
      </div>
    </section>

    <!-- Our Projects-->
    <section class="our-project sectpad">
      <div class="container clearfix">
        <div class="section_header common">
          <h2>Our Projects</h2>
        </div>
        <div class="our-pro-slider">
          <div class="pro-sliders">
            <div class="item">
              <div class="img-holder"><a href="images/projects/pro-img1.jpg" class="tt-gallery-1 lightbox"><span class="tt-gallery-1-overlay"></span>
                  <div class="project-post-image image_hover"><img src="images/projects/pro-img1.jpg" alt="Oil Plant Project" class="zoom_img_effect"><span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></div></a></div>
            </div>
            <div class="item">
              <div class="img-holder"><a href="images/projects/pro-img2.jpg" class="tt-gallery-1 lightbox"><span class="tt-gallery-1-overlay"></span>
                  <div class="project-post-image image_hover"><img src="images/projects/pro-img2.jpg" alt="Oil Plant Project" class="zoom_img_effect"><span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></div></a></div>
            </div>
            <div class="item">
              <div class="img-holder"><a href="images/projects/pro-img3.jpg" class="tt-gallery-1 lightbox"><span class="tt-gallery-1-overlay"></span>
                  <div class="project-post-image image_hover"><img src="images/projects/pro-img3.jpg" alt="Oil Plant Project" class="zoom_img_effect"><span class="tt-gallery-1-caption"><span class="tt-gallery-1-caption-table"><span class="tt-gallery-1-caption-inner"><span class="tt-gallery-1-search"><i class="fa fa-search"></i></span></span></span></span></div></a></div>
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