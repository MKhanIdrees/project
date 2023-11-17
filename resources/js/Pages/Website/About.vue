<template>
<Header/>


<div class="about-title">
        <h1>About <span>Us</span></h1>
    </div>

    <div class="about-btn">
        <router-link class="btn btn-primary" to="/" role="button">Home</router-link>
        <router-link class="btn btn-primary" to="/about" role="button">About</router-link>
    </div>

    <div class="about-container">
        <div class="about-section">
            <img
                class="about-img"
                src="/user_image/abc.jpg"
                alt="About Us Image"
            />
            <div class="about-content">
                <h2 style="color: red">About Us</h2>

                <h1>
                    <b
                        >We Are Non-Profit Charity
                        <h2 style="color: red; display: inline">
                            Organization
                        </h2>
                        Provide
                    </b>
                </h1>

                <h2 class="about-h2">Our Story</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum quis egestas erat. Curabitur eu arcu consequat,
                    laoreet est eu, finibus arcu.
                </p>

                <h2 class="about-h2">Our Mission</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum quis egestas erat. Curabitur eu arcu consequat,
                    laoreet est eu, finibus arcu.
                </p>
            </div>
        </div>
    </div>

    <!----------------------------------------------------about section end------------------------------------------------------------>

    <!-------------------------------------------------Volunter-members section---------------------------------------------------->

    <div class="volunteer-text">
        <h4 style="color: #eb3521">OUR VOLUNTEERS</h4>
        <h1>
            Meet With Our
            <h2 style="color: red; display: inline"><b> Awesome </b></h2>
            <br />
            Volunteers
        </h1>
    </div>
    <div class="Volunteer-container">
        <div class="volunteer-box">
            <div class="image">
                <img src="/user_image/v.jpg" />
            </div>
            <div class="name_job">David Chrish</div>

            <h2>Volunteer</h2>

            <div class="volunteer-btns">
                <button>Contact</button>
            </div>
        </div>
        <div class="volunteer-box">
            <div class="image">
                <img src="/user_image/v2.jpg" alt="" />
            </div>
            <div class="name_job">Kristina Bellis</div>
            <h2>Volunteer</h2>

            <div class="volunteer-btns">
                <button>Read More</button>
            </div>
        </div>
        <div class="volunteer-box">
            <div class="image">
                <img src="/user_image/v3.jpeg" alt="" />
            </div>
            <div class="name_job">Kristina Bellis</div>

            <h2>Volunteer</h2>

            <div class="volunteer-btns">
                <button>Read More</button>
            </div>
        </div>

        <div class="volunteer-box">
            <div class="image">
                <img src="/user_image/v4.jpg" alt="" />
            </div>
            <div class="name_job">Kristina Bellis</div>

            <h2>Volunteer</h2>

            <div class="volunteer-btns">
                <button>Read More</button>
            </div>
        </div>
    </div>

    <div class="Volunteer-container" style="margin-top: 50px">
        <div class="volunteer-box">
            <div class="image">
                <img src="/user_image/v.jpg" />
            </div>
            <div class="name_job">David Chrish</div>

            <h2>Volunteer</h2>

            <div class="volunteer-btns">
                <button>Contact</button>
            </div>
        </div>
        <div class="volunteer-box">
            <div class="image">
                <img src="/user_image/v2.jpg" alt="" />
            </div>
            <div class="name_job">Kristina Bellis</div>
            <h2>Volunteer</h2>

            <div class="volunteer-btns">
                <button>Read More</button>
            </div>
        </div>
        <div class="volunteer-box">
            <div class="image">
                <img src="/user_image/v3.jpeg" alt="" />
            </div>
            <div class="name_job">Kristina Bellis</div>

            <h2>Volunteer</h2>

            <div class="volunteer-btns">
                <button>Read More</button>
            </div>
        </div>

        <div class="volunteer-box">
            <div class="image">
                <img src="/user_image/v4.jpg" alt="" />
            </div>
            <div class="name_job">Kristina Bellis</div>

            <h2>Volunteer</h2>

            <div class="volunteer-btns">
                <button>Read More</button>
            </div>
        </div>
    </div>

    <!---------------------------------------------Volunteer section End------------------------------------------->

    <!----------------------------------------------footer section----------------------------------------------->
<Footer/>

</template>

<script>
import Header from './Header.vue';
import Footer from './Footer.vue';

export default {
    components:{
        Header,
        Footer,
    }
};
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
