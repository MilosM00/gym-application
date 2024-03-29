<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c28c53cee.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="css/index.css">
    <script src="js/hamburger.js" defer></script>
    <script src="js/index.js" defer></script>
    <script src="js/modal.js" defer></script>
    <title>GYM</title>
</head>
<body>

    <!-- START navbar.php -->

        <?php 
        
            include("navbar.php");

        ?>

    <!-- START navbar.php -->

    <!-- START HERO -->

    <div class="hero">
        <div class="hero-overlay">
            <p style="padding-bottom:20px;">Don't give up on your dreams, or your dreams will give up on you.</p>
            <p>Be a better version of yourself, we can help you!</p>
            <div>
                <a href="#about" class="hero-learn-more">Learn More</a>
                <a href="#pricelist" class="hero-pricelist">Pricelist</a>
            </div>
        </div>
    </div>

    <!-- END HERO -->

    <!-- START MORE INFO -->
    <div class="more-info" id="about">

        <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit</p>

        <div class="more-info-div">

            <div>
                <img src="images/power-lifting-workout.png" alt="gym" />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo magni, a voluptate, explicabo illum soluta!</p>
            </div>
    
            <div>
                <img src="images/gym-workout.png" alt="gym" />
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut unde natus doloremque amet totam impedit!</p>
            </div>
    
            <div>
                <img src="images/street-workout.png" alt="gym" />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis optio ex totam officiis eaque dolorum odio!</p>
            </div>

        </div>

    </div>
    <!-- END MORE INFO  -->

    <!-- START TAPE -->
    <div class="tape">

        <p>Be a better version of yourself, we can help you!</p>
        <a href="#pricelist">PRICELIST</a>

    </div>
    <!-- END TAPE -->

    <!-- START INSTRUCTORS -->
    <div class="instructors" id="instructor">

        <p>Meet Our Instructors</p>

        <div>

            <div class="instructors-div-one">
                <div class="instructor-media">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
                <div class="instructor-info">Carl White <br /> Instructor</div>
            </div>
            
            <div class="instructors-div-two">
                <div class="instructor-media">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
                <div class="instructor-info">Ana Brown <br /> Instructor</div>
            </div>
            
            <div class="instructors-div-three">
                <div class="instructor-media">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                </div>
                <div class="instructor-info">John Johnson <br /> Instructor</div>
            </div>

        </div>

    </div>
    <!-- END INSTRUCTORS -->

    <!-- START TAPE -->
    <div class="tape">

        <p>Be a better version of yourself, we can help you!</p>
        <a href="#pricelist">PRICELIST</a>

    </div>
    <!-- END TAPE -->

    <!-- START PRICELIST -->
    <div class="pricelist" id="pricelist">

        <p>Take A Look At Our Prices</p>

        <div class="pricelist-div">

            <div class="price-one">
                <p>LOREM</p>
                <p>50$ <span style="font-size: 18px">per month</span></p>
                <ul>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                </ul>
                <button class="button-price">BUY</button>
            </div>
            
            <div class="price-two">
                <p>IPSUM</p>
                <p>70$ <span style="font-size: 18px">per month</span></p>
                <ul>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                </ul>
                <button class="button-price">BUY</button>
                <div><i class="fa fa-star"></i></div>
            </div>
            
            <div class="price-three">
                <p>DOLOR</p>
                <p>100$ <span style="font-size: 18px">per month</span></p>
                <ul>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                    <li>✔ Lorem ipsum dolor</li>
                </ul>
                <button class="button-price">BUY</button>
            </div>

        </div>
    </div>
    <!-- END PRICELIST -->

    <!-- START CONTACT -->
    <div class="contact" id="contact">

        <div>
            <i class="fa fa-envelope"></i>
            <p>gym@gym.com</p>
            <a href="mailto:gym@gym.com">Contact Us</a>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>123456789</p>
            <a href="tel:123456789">Call Us</a>
        </div>

    </div>
    <!-- END CONTACT -->

    <!-- START footer.php -->
    <?php 
    
        include("footer.php");
    
    ?>
    <!-- END footer.php -->

    <!-- START MODAL -->
    <div class="modal"></div>
    <div class="modal-box">
        <i class="fa fa-times" id="close-modal"></i>
        <i class="fa fa-info" id="info-circle"></i>
        <p>Are you sure that you want <b><span class="pack-name" style="color:#F28C28;"></span></b> pack?</p>
        <p><span class="pack-name"></span> pack costs <span class="pack-price"></span> $</p>
        <a href="#" class="pack-url">BUY</a>
    </div>
    <!-- END MODAL -->

</body>
</html>