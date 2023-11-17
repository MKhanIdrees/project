<template>

    <!----------------------------------------------footer section----------------------------------------------->

    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Helping Hands <span>for Orphan and widows</span></h3>

            <p class="footer-links">
                <router-link to="/">Home</router-link>
                |
                <router-link to="/about">About</router-link>
                |
                <router-link to="/contact">Contact</router-link>
                |
                <router-link to="/blog">Blog</router-link>
            </p>

            <p class="footer-company-name">
                Copyright © 2021 <strong>SagarDeveloper</strong> All rights
                reserved
            </p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>KPK</span> Swat</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 74**9**258</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p>
                    <a href="mailto:sagar00001.co@gmail.com">xyz@gmail.com</a>
                </p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <strong>Sagar Developer</strong> is a Youtube channel where you
                can find more creative CSS Animations and Effects along with
                HTML, JavaScript and Projects using C/C++.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>
</template>

<script>
export default {

}
</script>
<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
}

/*--------------------------------------------navbar start-----------------------------------------------------  */

.navbar_color {
    width: 100%;
    min-height: 60px;
    margin: 0px;
    padding: 0px;
    list-style: none;

    background: linear-gradient(to bottom, #33ccff 0%, #003300 91%);
}

.nav-link {
    color: white !important;
    margin-right: 20px;
    font-size: 15px;
    font-weight: 600;
}

/*---------------------------------------------Navbar end-----------------------------------------------------------*/

/*--------------------------------------------------about us section------------------------------------------------------------------*/
.about-title h1 {
    color: #e0ac1c;
    font: normal 36px "Cookie", cursive;
    margin: 0;
    text-align: center;
    font-size: 84px;
    font-weight: bold;
    margin-bottom: 10px;
    margin-top: 50px;
}

.about-title h1 span {
    color: #b87707;
}
.about-btn {
    text-align: center;
    color: red;
}

.about-btn a {
    background-color: #e0ac1c;
}

.about-container {
    max-width: 70%px;
    margin: 0 auto;
    margin-top: 50px;

    background-color: #e5f2e1;
}

.about-h2 {
    color: red;
}
.about-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.about-img {
    max-width: 50%;
    border-radius: 100px;
    box-shadow: 0 2px 30px rgba(15, 10, 10, 25.6);
}

.about-content {
    max-width: 45%;
}

@media screen and (max-width: 800px) {
    .about-section {
        flex-direction: column;
        align-items: center;
    }

    .about-img {
        max-width: 100%;
        margin-bottom: 1rem;
        margin-top: 50px;
    }

    .about-content {
        max-width: 100%;
    }
}

/*--------------------------------------------------About section End-------------------------*/

/*----------------------------------------------------Volunter-member section-------------------------------------*/

.Volunteer-container {
    max-width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center !importants;
    flex-wrap: wrap;
}
.Volunteer-container .volunteer-box {
    width: calc(25% - 10px);
    background: lightgray;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 15px 25px;
    border-radius: 5px;
    box-shadow: 0 2px 20px rgba(15, 10, 10, 15.6);
}
.volunteer-text {
    text-align: center;
    margin-bottom: 50px;
    margin: 100px;
}
.Volunteer-container .volunteer-box .image {
    margin: 10px 0;
    height: 150px;
    width: 150px;
    background: #8e44ad;
    padding: 0px;
    border-radius: 50%;
}
.volunteer-box .image img {
    height: 100%;
    width: 100%;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #fff;
}

.volunteer-box .name_job {
    margin: 10px 0 3px 0;
    color: #8e44ad;
    font-size: 18px;
    font-weight: 600;
    color: #c20c21;
}

.volunteer-btns {
    margin-top: 20px;
    margin-bottom: 5px;
    display: flex;
    justify-content: space-between;
    width: 100%;
}
.volunteer-btns button {
    background-color: #c20c21;
    width: 100%;
    padding: 9px 0px;
    outline: none;
    border: 2px solid #8e44ad;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    font-weight: 400;
    color: #8e44ad;
    transition: all 0.3s linear;
}
.volunteer-btns button:first-child {
    background-color: #c20c21;
    margin-right: 5px;
}
.volunteer-btns button:last-child {
    color: #fff;
    margin-left: 5px;
}
.volunteer-btns button:first-child:hover {
    background: #8e44ad;
    color: #fff;
}
.volunteer-btns button:hover {
    color: #fff;
}
@media (max-width: 1045px) {
    .Volunteer-container .volunteer-box {
        width: calc(50% - 10px);
        margin-bottom: 20px;
    }
}
@media (max-width: 710px) {
    .Volunteer-container .volunteer-box {
        width: 100%;
    }
}

@media (max-width: 375px) {
    .Volunteer-container .volunteer-box {
        width: 100%;
    }
}

/*---------------------------------Volunteer end-----------------------------------------*/

/*---------------------------------footer start----------------------------------------*/

footer {
    position: fixed;
    bottom: 0;
}

@media (max-height: 800px) {
    footer {
        position: static;
    }
}

.footer-distributed {
    background-color: #2d2a30;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left {
    width: 30%;
}

.footer-distributed h3 {
    color: #ffffff;
    font: normal 36px "Cookie", cursive;
    margin: 0;
}

.footer-distributed h3 span {
    color: #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links {
    color: #ffffff;
    margin: 20px 0 12px;
}

.footer-distributed .footer-links a {
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: inherit;
}

.footer-distributed .footer-company-name {
    color: #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center {
    width: 35%;
}

.footer-distributed .footer-center i {
    background-color: #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p {
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin: 0;
}

.footer-distributed .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 2;
}

.footer-distributed .footer-center p a {
    color: #e0ac1c;
    text-decoration: none;
}

/* Footer Right */

.footer-distributed .footer-right {
    width: 30%;
}

.footer-distributed .footer-company-about {
    line-height: 20px;
    color: #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span {
    display: block;
    color: #ffffff;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons {
    margin-top: 25px;
}

.footer-distributed .footer-icons a {
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 2px;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;
    margin-right: 3px;
    margin-bottom: 5px;
}

.footer-distributed .footer-icons a:hover {
    background-color: #3f71ea;
}

.footer-links a:hover {
    color: #3f71ea;
}

@media (max-width: 880px) {
    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }
    .footer-distributed .footer-center i {
        margin-left: 0;
    }
}
</style>

