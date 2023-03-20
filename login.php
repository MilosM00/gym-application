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
    <title>Log In</title>
</head>
<body>

    <!-- START navbar.php -->
    <?php include("navbar.php"); ?>
    <!-- END navbar.php -->

    <!-- START LOGIN -->
    <div class="login-container">
        
        <p>Log In</p>

        <form>
            <label class="label-email">Email Address</label>
            <input class="input-email" style="margin-bottom: 30px;" type="text" placeholder="Your Email Address..." name="email" />
            
            <label class="label-password">Password</label>
            <input class="input-password" style="margin-bottom: 30px;" type="password" placeholder="Your Password..." name="password" />

            <input class="button-submit" type="submit" value="SUBMIT" />
        </form>
    </div>
    <!-- END LOGIN -->
    
    <!-- START footer.php -->
    <?php include("footer.php") ?>
    <!-- END footer.php -->

    <style>
        *{
            font-family: 'Open Sans', sans-serif;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        .login-container{
            padding-top: 50px;
            padding-bottom: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .login-container > p{
            font-size: 25px;
            padding-bottom: 30px;
        }

        .login-container > form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: linear-gradient(to right, #F28C28, #CC5500);
            border-radius: 15px;
            padding: 20px;
            width: 700px;
        }

        .login-container > form > input{
            width: 100%;
            color: #000;
            font-size: 16px;
            border-radius: 4px;
            padding: 10px;
            border: none;
        }

        .login-container > form > input:focus{
            outline: none;
        }

        .login-container > form > label{
            width: 100%;
            color: #fff;
            font-size: 16px;
            font-weight: 800;
        }

        .login-container > form > .button-submit{
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
            .login-container > form{
                width: 100%;
            }

            .login-container{
                padding-left: 20px;
                padding-right: 20px;
            }
        }
    </style>
    
</body>
</html>