<!-- START FOOTER -->
<footer>
    <div class="center-footer">
        <a href="#"><img src="images/barbell-logo.jpg" alt="gym" /></a>
        <p>
            Don't give up on your dreams, or your dreams will give up on you. <br />
            Be a better version of yourself, we can help you!
        </p>
        <div>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<!-- START AFTER FOOTER -->
<div class="after-footer">
    <p>
        © <span class="year"></span> Developed And Designed By <a href="https://github.com/milosm00" target="_blank">MM</a>. <br />
    </p>
</div>

<script>
    let year = document.querySelector(`.year`);

    let date = new Date();
    year.textContent = date.getFullYear();
</script>
<!-- END AFTER FOOTER -->

<style>

/* START FOOTER */

footer{
    padding-top: 50px;
    padding-bottom: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #1a1a1a;
    color: #fff;
}

.center-footer{
    display: flex;
    flex-direction: column;
    align-items: left;
    justify-content: flex-start;
    gap: 10px;
}

.center-footer > a > img{
    width: 70px;
    height: 70px;
    border-radius: 50%;
}

.center-footer > p{
    font-size: 16px;
    max-width: 300px;
}

.center-footer > div{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: left;
    gap: 10px;
}

.center-footer > div > a{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    color: #000;
    background-color: #fff;
    border-radius: 4px;
    width: 35px;
    height: 35px;
    text-decoration: none;
    transition: 0.4s;
}

.center-footer > div > a:hover{
    color:#fff;
    background-color: #F28C28;
}
/* END FOOTER */

/* START AFTER FOOTER */

.after-footer{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 20px;
    padding-bottom: 20px;
    background-color: #111111;
    color: #fff;
}

.after-footer > p > a{
    color:#fff;
    transition: 0.4s;
}

.after-footer > p > a:hover{
    color:#F28C28;
    text-decoration: none;
}

/* END AFTER FOOTER */

</style>

<?php // THIS IS PHP ?>