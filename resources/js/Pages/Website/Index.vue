<template>
    <Header />

    <!-------------------------------------------------------Carousel----------------------------------------------------------------------->

    <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
    >
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
            ></button>
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
            ></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/user_image/a.AVIF" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-area">
                        <b>Heling Hands For Orphans And Widows</b>
                    </h5>

                    <div class="sliderbtn">
                        <a class="btn btn-primary" href="#" role="button"
                            >Submit Information</a
                        >
                        <a class="btn btn-primary" href="#" role="button"
                            >Read More</a
                        >
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img
                    src="/user_image/sliderpic2.jpg"
                    class="d-block w-100"
                    alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-area">
                        <b>Heling Hands For Orphans And Windows </b>
                    </h5>
                    <div class="sliderbtn">
                        <a class="btn btn-primary" href="#" role="button"
                            >Submit Information</a
                        >
                        <a class="btn btn-primary" href="#" role="button"
                            >Read More</a
                        >
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img
                    src="/user_image/sliderpic3.jpg"
                    class="d-block w-100 h-50"
                    alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-area">
                        <b>Heling Hands For Orphans And Windows </b>
                    </h5>
                    <div class="sliderbtn">
                        <a class="btn btn-primary" href="#" role="button"
                            >Submit Information</a
                        >
                        <a class="btn btn-primary" href="#" role="button"
                            >Read More</a
                        >
                    </div>
                </div>
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!------------------------------------------carousel End--------------------------------------------->

    <!--------------------------------------------Cards start----------------------------------------------------------->
    <div class="card-div">
        <section class="articles">
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img
                            src="/user_image/foodicone.png"
                            alt=""
                            class="card-img"
                        />
                    </figure>
                    <div class="article-body text-center m-2">
                        <h1>Foods</h1>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos
                            ducimus qui blanditiis excepturi voluptatum deleniti
                            atque.
                        </p>
                        <a href="#" class="read-more">
                            Read more
                            <span class="sr-only"
                                >about this is some title</span
                            >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="/user_image/volunteericone.png" alt="" />
                    </figure>
                    <div class="article-body text-center m-2">
                        <h1>Volunteers</h1>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos
                            ducimus qui blanditiis excepturi voluptatum deleniti
                            atque.
                        </p>
                        <a href="#" class="read-more">
                            Read more
                            <span class="sr-only"
                                >about this is some title</span
                            >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="/user_image/donitionicone.png" alt="" />
                    </figure>
                    <div class="article-body text-center m-2">
                        <h1>Make donation</h1>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos
                            ducimus qui blanditiis excepturi voluptatum deleniti
                            atque.
                        </p>
                        <a href="#" class="read-more">
                            Read more
                            <span class="sr-only"
                                >about this is some title</span
                            >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        </section>
    </div>
    <!-----------------------------------------------End card------------------------------------------------------------>

    <!--------------------------------------------------section mission--------------------------------------------------------------------->

    <div class="clearfix mission-div">
        <img
            src="/user_image/mission.jpg"
            class="col-md-6 float-md-end mb-3 ms-md-3 img-mission"
            alt="..."
        />
        <h3 class="mission-h3 fa-fade">
            <i class="fa-regular fa-heart fa-flip"></i> MISSION AND GOALS
        </h3>

        <h1 class="mission-h1">
            <b
                >We Can Save More Lifes With
                <h1 style="color: #b01104; display: inline">
                    <b>Your Helping </b>
                </h1>
                Hand</b
            >
        </h1>
        <p>
            There are many variations of passages of Lorem Ipsum available, but
            the majority have suffered alteration in some form, by injected
            humour, or randomised words which don't look even slightly
            believable.
        </p>
        <h2 style="color: #b01104">
            <img src="/user_image/missionicone1.png" width="60px" /> Healthy
            Food
        </h2>

        <p>
            There are many variations of passages of Lorem Ipsum available the
            majority have suffered alteration injected humour.
        </p>
        <h2 style="color: #b01104">
            <img src="/user_image/missionicone2.png" width="60px" /> Financial
            Support
        </h2>
        <p>
            There are many variations of passages of Lorem Ipsum available the
            majority have suffered alteration injected humour.
        </p>
    </div>
    <!------------------------------------------mission end --------------------------------------------------------->

    <!------------------------------------------count section------------------------------------------------------->
    <div class="count">
        <div class="wrapper">
            <div class="container">
                <i class="fa-solid fa-check fa-flip i-i"></i>
                <span class="num" data-val="400">000</span>
                <span class="text"> + Project Done</span>
            </div>
            <div class="container">
                <i class="fas fa-smile-beam fa-flip i-i"></i>
                <span class="num" data-val="340">000</span>
                <span class="text">+ Help People</span>
            </div>
            <div class="container">
                <i class="fas fa-list fa-flip i-i"></i>
                <span class="num" data-val="225">000</span>
                <span class="text">+ Our Volunteer</span>
            </div>
            <div class="container">
                <i class="fa-solid fa-crown fa-flip i-i"></i>
                <span class="num" data-val="280">000</span>
                <span class="text">+ Win Awards</span>
            </div>
        </div>
    </div>

    <!-----------------------------------------------count section End------------------------------------------------------>

    <!-------------------------------------------------about us section--------------------------------------------------------------------->

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

    <!-----------------------------------------------------Video section start------------------------------------------------------>

    <div class="video-container">
        <div class="text-column">
            <h1><b>Helping Hands for oraphans and Widows</b></h1>
            <p>
                Alkhidmat Foundation Pakistan is committed to providing orphan
                and abandoned children with the support they need to lead a
                fulfilling life. Currently, over 1,400 children receive quality
                education, healthcare, nutritious food, clothing, and toys
                through Alkhidmat Orphan Care Program. However, millions of
                orphans in Pakistan still lack access to basic necessities.
                Through Alkhidmat Orphan Care Program and Orphan Family Support
                Program, the foundation aims to uplift social conditions of
                orphans in Pakistan. The Orphan Family Support Program provides
                financial support for education and everyday expenses to orphan
                children aged 16 or below, while ensuring comprehensive mental,
                social, and moral growth through a multi-module framework.
                Alkhidmat Foundation Pakistan relies on its network of
                volunteers across all 135 districts of Pakistan to identify
                potential candidates for support. The financial support
                provided.
            </p>
        </div>
        <div class="video-column">
            <!-- Replace the URL with your video's embed code or use an iframe for embedding the video -->
            <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/your_video_id"
                frameborder="0"
                allowfullscreen
            ></iframe>
        </div>
    </div>
    <!-----------------------------------------------------Video section end-------------------------------------------------------------->

    <!----------------------------------------------------galleray section start----------------------------------------------------------->
    <div class="gallery-div">
        <h3 style="color: #eb3521">PHOTO GALLERY</h3>
        <h1>
            <b
                >Explore Our Recent Helping
                <h1 style="color: #eb3521; display: inline">
                    <br />
                    <b>Photo </b>
                </h1>
                Gallery</b
            >
        </h1>

        <div class="my-3d-gallery">
            <div id="my-3d-gallery-continer">
                <div class="gallery-img"></div>
                <div class="gallery-img">
                    <img src="/user_image/gallery/pic1.jpg" alt="" />
                </div>
                <div class="gallery-img">
                    <img src="/user_image/gallery/pic2.jpg" alt="" />
                </div>
                <div class="gallery-img">
                    <img src="/user_image/gallery/pic3.jpg" alt="" />
                </div>
                <div class="gallery-img">
                    <img src="/user_image/gallery/pic4.jpg" alt="" />
                </div>
                <div class="gallery-img">
                    <img src="/user_image/gallery/pic5.jpg" alt="" />
                </div>
                <div class="gallery-img">
                    <img src="/user_image/gallery/pic6.jpg" alt="" />
                </div>
                <div class="gallery-img">
                    <img src="/user_image/gallery/pic7.jpg" alt="" />
                </div>
                <div class="gallery-img">
                    <img src="/user_image/gallery/pic8.jpg" alt="" />
                </div>
                <div class="gallery-img">
                    <img src="/user_image/gallery/pic9.jpg" alt="" />
                </div>
                <div class="gallery-img">
                    <img src="/user_image/gallery/pic10.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!-----------------------------------------------Gallery section End------------------------------------------------------>

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

    <!---------------------------------------------Volunteer section End------------------------------------------->
<Footer/>
</template>

<script>
let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;
valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    }, duration);
});
import Header from './Header.vue';
import Footer from './Footer.vue';

export default {
    components: {
        Header,
        Footer,
    },
};
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
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

/* -------------------------------------------Carousel start------------------------------------------------------- */

.carousel-item {
    max-height: 500px !important;
    width: 100%;
    background: no-repeat scroll center scroll;
    -webkit-background-size: cover;
    background-size: cover;
}
.carousel-caption {
    bottom: 180px;
    margin-right: 100px;
    margin-left: 100px;
}

.carousel-item::before {
    content: "";
    max-height: 700px;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: black;
    opacity: 0.5;
}

.carousel-caption {
    bottom: 180px;
    padding-left: 100px;
    padding-right: 100px;
}

.text-area {
    font-size: 50px;
    font-weight: 400px;
    box-shadow: 0 2px 30px rgba(15, 10, 10, 25.6);
    border-radius: 6px;
}

.sliderbtn {
    margin-top: 40px;
    margin-right: 60px;
}

.btn {
    font-size: 20px;
    margin-left: 20px;
    background-color: #c20c21;
}

/*------------------------------------------------Carousel end------------------------------------------------------*/

/*------------------------------------------------Card start------------------------------------------------------------------*/
article {
    --img-scale: 1.001;
    --title-color: black;
    --link-icon-translate: -20px;
    --link-icon-opacity: 0;
    position: relative;
    border-radius: 16px;
    background: #fff;
    transition: all 0.4s ease-in-out;
    overflow: hidden;
    margin-top: 30px;
    box-shadow: 0 6px 10px rgba(10, 10, 15, 10.6);
}

article a::after {
    position: absolute;
    inset-block: 0;
    inset-inline: 0;
    cursor: pointer;
    content: "";
}
article h1 {
    margin: 0 0 18px 0;
    font-size: 2.2rem;
    letter-spacing: 0.06em;
    color: var(--title-color);
    transition: color 0.3s ease-out;
}

/* basic article elements styling */
article h2 {
    margin: 0 0 18px 0;
    font-size: 1.9rem;
    letter-spacing: 0.06em;
    color: var(--title-color);
    transition: color 0.3s ease-out;
}

figure {
    margin: 0;
    padding: 0;
    aspect-ratio: 30/ 14;
    overflow: hidden;
}

article img {
    max-width: 55%;
    margin-top: 0px;
    margin-left: 60px;
    transform-origin: center;
    transform: scale(var(--img-scale));
    transition: transform 0.4s ease-in-out;
}

.article-body {
    padding: 24px;
}

article a {
    display: inline-flex;
    align-items: center;
    text-decoration: none;
    color: #28666e;
}

article a:focus {
    outline: 1px dotted #28666e;
}

article a .icon {
    min-width: 24px;
    width: 24px;
    height: 24px;
    margin-left: 5px;
    transform: translateX(var(--link-icon-translate));
    opacity: var(--link-icon-opacity);
    transition: all 0.3s;
}

/* using the has() relational pseudo selector to update our custom properties */
article:has(:hover, :focus) {
    --img-scale: 1.1;
    --title-color: #28666e;
    --link-icon-translate: 0;
    --link-icon-opacity: 1;
}

/************************
Generic layout (demo looks)
**************************/

*,
*::before,
*::after {
    box-sizing: border-box;
}

.articles {
    display: grid;
    max-width: 1000px;
    margin-inline: auto;
    grid-template-columns: repeat(auto-fill, minmax(280px, 2fr));
    gap: 24px;
}

.card-div {
    background-color: #edf2ef;
    border-radius: 10px;
    margin-top: 50px;
    padding: 30px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 5.1);
}
.article-wrapper {
    background-color: #a6d19b;
}

@media screen and (max-width: 960px) {
    article {
        container: card/inline-size;
    }
}

.article-body {
    padding-left: 0;
}

.figure {
    width: 100px;
    height: 100%;
    overflow: hidden;
}
.card-img {
    width: 100%;
    height: 100%;
    aspect-ratio: 1;
    object-fit: cover;
}

.sr-only:not(:focus):not(:active) {
    clip: rect(0 0 0 0);
    clip-path: inset(50%);
    height: 1px;
    overflow: hidden;
    position: absolute;
    white-space: nowrap;
    width: 1px;
}

/*------------------------------------------------Card End--------------------------------------------------*/

/*--------------------------------------------------Mission goal section start---------------------------------------------------------*/

.mission-div {
    margin-top: 120px;
    margin-left: 75px;
    margin-right: 85px;

    border-radius: 10px;
}

.img-mission {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    border-radius: 25px;
    margin-top: 10px;
    box-shadow: 0 2px 30px rgba(15, 10, 10, 25.6);
}
.img-mission {
    max-width: 550px;
    max-height: 500px;
}

.mission-h3 {
    color: #b01104;
}

/*-------------------------------------------------mission goal section End ---------------------------------------------------------*/

/*---------------------------------------------------------Count section------------------------------------------------------------*/

.wrapper {
    position: absolute;
    height: 300px !important;
    background-color: black !important;
    box-shadow: 0 2px 30px rgba(15, 10, 10, 25.6);
    width: 100vw;
    transform: translate(-50%, -50%);
    margin-top: 200px;
    left: 50%;
    display: flex;
    justify-content: space-around;
    gap: 4px;
}
.container {
    width: 28vmin;
    height: 28vmin;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding: 1em 0;
    position: relative;
    font-size: 16px;
    border-radius: 0.5em;
    background-color: #21242b;
    border-bottom: 10px solid #18f98f;
    margin-top: 70px;
}
.i-i {
    color: #18f98f;
    font-size: 2.5em;
    text-align: center;
}
span.num {
    color: #ffffff;
    display: grid;
    place-items: center;
    font-weight: 600;
    font-size: 3em;
}
span.text {
    color: #e0e0e0;
    font-size: 1em;
    text-align: center;
    pad: 0.7em 0;
    font-weight: 400;
    line-height: 0;
}
@media screen and (max-width: 1024px) {
    .wrapper {
        width: 85vw;
    }
    .container {
        height: 26vmin;
        width: 26vmin;
        font-size: 12px;
    }
}
@media screen and (max-width: 768px) {
    .wrapper {
        width: 90vw;
        flex-wrap: wrap;
        gap: 30px;
    }
    .container {
        width: calc(50% - 40px);
        height: 30vmin;
        font-size: 14px;
    }
}
@media screen and (max-width: 480px) {
    .wrapper {
        gap: 15px;
    }
    .container {
        width: 100%;
        height: 25vmin;
        font-size: 8px;
    }
}

/*------------------------------------------------Count section End------------------------------------------------*/

/*--------------------------------------------------about us section------------------------------------------------------------------*/

.about-container {
    max-width: 70%px;
    margin: 0 auto;
    margin-top: 400px;
    box-shadow: 0 2px 30px rgba(15, 10, 10, 25.6);
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
        margin-top: 400px;
    }

    .about-content {
        max-width: 100%;
    }
}

/*--------------------------------------------------About section End-------------------------*/

/*---------------------------------------------------video section start-----------------------------------------------*/

/* Reset default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Set up the container as a flexbox to create a two-column layout */
.video-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 100%; /* Adjust the container width as needed */
    margin: 0 auto; /* Center the container */
    padding: 20px; /* Add some padding around the content */
    margin-top: 150px;
}

/* Style for the text column */
.text-column {
    flex: 1 0 300px; /* Take up 1/3 of the available space, with a minimum width of 300px */
    padding-right: 20px; /* Add some space between the text and video columns */
}

.text-column h1 {
    font-size: 34px;
    margin-bottom: 10px;
    color: #eb3521;
}

.text-column p {
    font-size: 20px;
    text-align: justify;
}

/* Style for the video column */
.video-column {
    flex: 2 0 300px; /* Take up 2/3 of the available space, with a minimum width of 300px */
    margin-top: 20px; /* Add some space at the top of the video column */
}

.video-column iframe {
    width: 100%; /* Ensure the video fills its container */
    height: 100%; /* Adjust the height as needed */
}

/* Media query for tablets and larger screens */
@media (min-width: 768px) {
    .container {
        max-width: 1000px; /* Adjust the container width for larger screens */
    }

    .text-column {
        flex: 1; /* Take up 50% of the available space */
        padding-right: 40px; /* Add more space between the text and video columns */
    }

    .video-column {
        flex: 1; /* Take up 50% of the available space */
        margin-top: 0; /* Remove the top margin for the video column */
    }
}

/* Media query for larger screens */
@media (min-width: 1200px) {
    .container {
        max-width: 1200px; /* Adjust the container width for larger screens */
    }
}

/*---------------------------------------------------video section end-----------------------------------------------*/

/*---------------------------------------------------Gallery section start-----------------------------------*/

.gallery-div {
    margin-top: 130px;
    text-align: center;
    background-color: white;
}
.my-3d-gallery {
    position: relative;
    perspective: 1500px;
    margin: 5% auto;
    width: 400px;
    height: 400px;
}
#my-3d-gallery-continer {
    position: absolute;
    width: 100%;
    height: 100%;
    animation: rotation 50s infinite linear;
    transform-style: preserve-3d;
}
#my-3d-gallery-continer:hover {
    animation-play-state: paused;
}
#my-3d-gallery-continer .gallery-img {
    position: absolute;
    display: block;
    left: 20px;
    top: 50px;
    width: 100%;
    height: 70%;
    overflow: hidden;
    border: solid 2px rgba(207, 207, 207, 0.5);
    background: transparent;
}
#my-3d-gallery-continer .gallery-img:nth-child(1) {
    transform: rotateY(0deg) translateZ(350px);
}
#my-3d-gallery-continer .gallery-img:nth-child(2) {
    transform: rotateY(60deg) translateZ(350px);
}
#my-3d-gallery-continer .gallery-img:nth-child(3) {
    transform: rotateY(120deg) translateZ(350px);
}
#my-3d-gallery-continer .gallery-img:nth-child(4) {
    transform: rotateY(180deg) translateZ(350px);
}
#my-3d-gallery-continer .gallery-img:nth-child(5) {
    transform: rotateY(240deg) translateZ(350px);
}
#my-3d-gallery-continer .gallery-img:nth-child(6) {
    transform: rotateY(300deg) translateZ(350px);
}
#my-3d-gallery-continer .gallery-img:nth-child(7) {
    transform: rotateY(360deg) translateZ(350px);
}
#my-3d-gallery-continer .gallery-img:nth-child(8) {
    transform: rotateY(420deg) translateZ(350px);
}
#my-3d-gallery-continer .gallery-img:nth-child(9) {
    transform: rotateY(480deg) translateZ(350px);
}
#my-3d-gallery-continer .gallery-img:nth-child(10) {
    transform: rotateY(540deg) translateZ(350px);
}
#my-3d-gallery-continer .gallery-img:nth-child(11) {
    transform: rotateY(600deg) translateZ(350px);
}

#my-3d-gallery-continer img {
    cursor: pointer;
    transition: all 0.5s ease;
    width: 100%;
    height: 100%;
}
#my-3d-gallery-continer img:hover {
    transform: scale(1.5, 1.5);
}

@keyframes rotation {
    from {
        transform: rotateY(0deg);
    }
    to {
        transform: rotateY(-360deg);
    }
}

/*--------------------------------------------------Gellary section End----------------------------------------*/

/*----------------------------------------------------Volunter-member section-------------------------------------*/

.Volunteer-container {
    max-width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
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
