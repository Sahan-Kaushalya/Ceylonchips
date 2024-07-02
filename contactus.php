<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resource/logo/ricon.ico" class="ico"/>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>

</head>
<body>

   <div class="preloader">
        <img src="resource\logo\preloader.gif" alt="Loading..." class="preloader-img">
        <h1 class="text text-light fw-semibold text-center" style="font-family:Cookie;">Ceylon Chips</h1>
    </div>

<div class="overflow-x-hidden content">
   <?php include "header.php"; ?>
   <div class="mt-5 mt-lg-0 mt-sm-0 mt-md-0">

   <div class="container-fluid vh-100 d-flex justify-content-center background border border-bottom border-2 border-start-0 border-end-0">
        <div class="row align-content-center">


            <div class="col-12 p-5 ps-md-0 p-md-0 p-lg-0">
                <div class="row justify-content-center gap-3">

                  

                    <!-- Contact Us -->

                    <div class="col-12 col-lg-5 col-md-5 col-sm-5 border border-3 border-dark br mt-4 mt-lg-0 mt-sm-0 mt-md-0">
                        <div class="row ">


                            <div class="col-12">
                                <p class="fs-2 p-3 text-light">Contact Us</p>
                            </div>

                              <div class="col-12 d-none" id="msgdiv">
                                  <div class="alert alert-danger text-center formmsg mb-4  p-4 border rounded-4 fs-5" role="alert" id="msg"></div>
                              </div>
                        
                            <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-control-plaintext">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-control-plaintext">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 p-2 ">
                                        <div class="form-group ">
                                            <button type="button" class="btn btn-primary " style="font-family:Roboto;" onclick="sendMsg();">Send Message</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                 

                    <!-- Contact information -->
                    <div class="col-12 col-lg-4 col-md-5 col-sm-4 border border-3 border-dark br d-none d-lg-block d-md-block">
                        <div class="row">
                            <h3 class="text-light fs-2 p-3">Contact information</h3>
                            <p class="p-3 text-bg-danger fs-5">We're open for any suggestion or just to have a chat</p>

                            <div class="fs-3 text-light">
                                <p><i class="bi bi-house-fill fs-4 ic"></i><span class="fs-5 ic">Address:</span>1,22 Gajaba Mawatha , Gampaha 11000.</p>
                            </div>

                            <div class="fs-3 text-light">
                                <p><i class="bi bi-envelope-at-fill fs-4 ic"></i><span class="fs-5 ic">Email:</span><a href="mailto:ceylonchips@gmail.com" class="text-light text-decoration-none" >ceylonchips@gmail.com</a></p>
                            </div>

                            <div class="fs-3 text-light">
                                <p><i class="bi bi-telephone-fill fs-4 ic"></i><span class="fs-5 ic">Phone:</span> <a href="tel:+94770796383" class="text-light text-decoration-none" >+94 770 796 383</a></p>
                            </div>

                            <div class="fs-3 text-light">
                                <p><i class="bi bi-printer-fill fs-4 ic"></i><span class="fs-5 ic">Phone:</span> <a href="tel:+94771769931" class="text-light text-decoration-none" >+94 771 769 931</a></p>
                            </div>

                            <div class="fs-3 text-light">
                                <p><i class="bi bi-globe-asia-australia fs-4 ic"></i><span class="fs-5 ic">Website:</span> <a href="ceylonchips.kesug.com" class="text-light text-decoration-none" >ceylonchips.kesug.com</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  


</div>
<?php include "news.php";?>
<?php include "footer.php"; ?>
<?php include "chatbot.php";?>
</div>


<script src="bootstrap.js"></script>
<script src="bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>