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
    <script src="js/hamburger.js" defer></script>
    <script src="js/form.js" defer></script>
    <title>Form</title>
</head>
<body>
    
    <!-- START navbar.php -->
    <?php include("navbar.php"); ?>
    <!-- END navbar.php -->

    <!-- START FORM -->

    <?php 
    
        $pack = $_GET["pack"];

    ?>

    <div class="form-container">

        <p>Please, enter your data.</p>

        <form class="form" method="POST" action="thank-you.php">

            <label class="label-first-name">First Name</label>
            <input class="input-first-name" style="margin-bottom: 30px;" type="text" placeholder="Your First Name..." name="firstName" />
            
            <label class="label-last-name">Last Name</label>
            <input class="input-last-name" style="margin-bottom: 30px;" type="text" placeholder="Your Last Name..." name="lastName" />
            
            <label class="label-phone">Phone Number</label>
            <input class="input-phone" style="margin-bottom: 30px;" type="text" placeholder="Your Phone Number..." name="phone" />

            <label class="label-email">Email Address</label>
            <input class="input-email" style="margin-bottom: 30px;" type="text" placeholder="Your Email Address..." name="email" />

            <input type="hidden" name="pack" value="<?php echo $pack; ?>" />

            <input class="button-submit" type="submit" value="SUBMIT" />

        </form>
    </div>
    <!-- END FORM -->

    <style>

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        /* START FORM */

        .form-container{
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .form-container > p{
            font-size: 25px;
            text-align: center;
            padding-bottom: 30px;
        }

        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: linear-gradient(to right, #F28C28, #CC5500);
            border-radius: 15px;
            padding: 20px;
            width: 700px;
        }

        form > input{
            width: 100%;
            color: #000;
            font-size: 16px;
            border-radius: 4px;
            padding: 10px;
            border: none;
        }

        form > input:focus{
            outline: none;
        }

        form > label{
            width: 100%;
            color: #fff;
            font-size: 16px;
            font-weight: 800;
        }

        .button-submit{
            width: 150px;
            padding: 10px;
            background-color: #fff;
            color: #000;
            border-radius: 4px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            font-weight: 800;
        }

        @media (max-width: 740px) {
            form{
                width: 100%;
            }

            .form-container{
                padding-left: 20px;
                padding-right: 20px;
            }
        }

        /* END FORM */

    </style>

    <!-- START footer.php -->
    <?php include("footer.php"); ?>
    <!-- END footer.php -->

</body>
</html>