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
    <title>Register - Success</title>
</head>
<body>  

    <?php
    
        include("dbconnection.php");
    
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $code = $connection->prepare("insert into Customer(CustomerFirstName, CustomerLastName, CustomerEmail, CustomerPhone) values(?, ?, ?, ?)");
        $code->bind_param("ssss", $firstName, $lastName, $email, $phone);
        $code->execute();

    ?>
    
    <!-- START navbar.php -->
    <?php include("navbar.php"); ?>
    <!-- END navbar.php -->

    <!-- START REGISTER SUCCESS -->
    
    <div class="container-register-success">
        <i class="fa fa-check"></i>
        <p>
            You have been registered successfully!
        </p>
        <div>
            <a href="index.php">Home</a>
            <a href="#">Log In</a>
        </div>
    </div>

    <!-- END REGISTER SUCCESS -->

    <!-- START footer.php -->
    <?php include("footer.php"); ?>
    <!-- END footer.php -->

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        /* START REGISTER SUCCESS */

        .container-register-success{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 30px;
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .container-register-success > i{
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #228B22;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            font-size: 50px;
            color: #228B22;
        }

        .container-register-success > p{
            font-size: 30px;
            text-align: center;
        }

        .container-register-success > div{
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .container-register-success > div > a{
            text-decoration: none;
            color: #fff;
            background-color: #F28C28;
            padding: 10px;
            width: 150px;
            text-align: center;
            border-radius: 4px;
        }

        @media (max-width: 450px) {
            .container-register-success > p{
                font-size: 25px;
                padding-left: 10px;
                padding-right: 10px;
            }

            .container-register-success > div{
                flex-direction: column;
            }
        }

        /* END REGISTER SUCCESS */

    </style>

</body>
</html>