<!-- START BEFORE NAV -->

<div class="before-nav">
    <a href="register.php">Register</a>
    <a href="login.php">Log In</a>
</div>

<!-- END BEFORE NAV -->

<!-- START NAV -->

<nav class="nav">
    <a href="index.php#"><img src="images/barbell-logo.jpg" alt="gym" /></a>
    <ul>
        <li><a href="index.php#">Home</a></li>
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#instructor">Instructors</a></li>
        <li><a href="index.php#pricelist">Pricelist</a></li>
        <li><a href="index.php#contact">Contact</a></li>
    </ul>
    <i id="hamburger-button" class="fa fa-bars"></i>
</nav>

<div class="hamburger-nav">
    <ul>
        <li class="hamburger-li"><a href="index.php">Home</a></li>
        <li class="hamburger-li"><a href="index.php#about">About</a></li>
        <li class="hamburger-li"><a href="index.php#instructor">Instructors</a></li>
        <li class="hamburger-li"><a href="index.php#pricelist">Pricelist</a></li>
        <li class="hamburger-li"><a href="index.php#contact">Contact</a></li>
    </ul>
</div>

<!-- END NAV -->

<style>
    
/* START NAV */

.nav{
    padding-top: 10px;
    padding-bottom: 10px;
    width: 100%;
    color: #fff;
    background: linear-gradient(to right, #CC5500, #F28C28);

    display: flex;
    justify-content: space-evenly;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 10;
}

.nav > a > img{
    width: 70px;
    height: 70px;
    border-radius: 50%;
}

.nav > ul{
    display: flex;
    gap: 20px;
}

.nav > ul > li{
    list-style: none;
}

.nav > ul > li > a{
    text-decoration: none;
    color: #fff;
    font-size: 20px;
}

.hamburger-nav{
    background: linear-gradient(to right, #CC5500, #F28C28);
    display: none;
    justify-content: center;
    align-items: center;
    width: 100%;
    position: sticky;
    top: 90px;
    z-index: 10;
}

.hamburger-nav > ul{
    padding-top: 20px;
    padding-bottom: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 5px;
}

.hamburger-nav > ul > li{
    list-style: none;
}

.hamburger-nav > ul > li > a{
    text-decoration: none;
    color: #fff;
    font-size: 20px;
}

#hamburger-button{
    display: none;
    font-size: 25px;
}

@media (max-width: 650px) {
    .nav{
        justify-content: space-between;
        padding-left: 15px;
        padding-right: 15px;
    }

    .nav > ul{
        display: none;
    }

    #hamburger-button{
        display: block;
    }
}

/* END NAV */

/* START BEFORE NAV */

.before-nav{
    padding-top: 15px;
    padding-bottom: 15px;
    padding-right: 20px;
    background-color: #1a1a1a;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 10px;
}

.before-nav > a{
    background-color: #F28C28;
    color: #fff;
    padding: 5px;
    border-radius: 4px;
    width: 100px;
    text-align: center;
    text-decoration: none;
}

/* END BEFORE NAV */

</style>

<?php // THIS IS PHP ?>