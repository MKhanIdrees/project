<template>
    <Header />
    <div class="contact-title">
        <h1>Contact <span>Us</span></h1>
      </div>

       <div class="contact-btn">
            <a class="btn btn-primary" href="home.html" role="button">Home</a>
            <a class="btn btn-primary" href="#" role="button">About</a>
          </div>

      <div class="container">
          <div class="content">
            <div class="left-side">
              <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Address</div>
                <div class="text-one">KPK swat</div>
                <div class="text-two">Kabal Dadahara</div>
              </div>
              <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Phone</div>
                <div class="text-one">+0098 9893 5647</div>
                <div class="text-two">+0096 3434 5678</div>
              </div>
              <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one">codinglab@gmail.com</div>
                <div class="text-two">info.codinglab@gmail.com</div>
              </div>
            </div>
            <div class="right-side">
              <div class="topic-text">Send us a message</div>
              <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
            <form action="#">
              <div class="input-box">
                <input type="text" placeholder="Enter your name">
              </div>
              <div class="input-box">
                <input type="text" placeholder="Enter your email">
              </div>
              <div class="input-box message-box">

              </div>
              <div class="button">
                <input type="button" value="Send Now" >
              </div>
            </form>
          </div>
          </div>
        </div>

    <Footer />
</template>

<script>
import Header from "./Header.vue";
import Footer from "./Footer.vue";

export default {
    components: {
        Header,
        Footer,
    },
};
</script>

<style scoped>

*{
    margin: 0; padding: 0;
    box-sizing: border-box;
  }
  body{

  }

   /*--------------------------------------------navbar start-----------------------------------------------------  */

  .navbar_color{
    width: 100%;
    min-height: 60px;
    margin:0px;
    padding:0px;
    list-style:none;

    background:linear-gradient(to bottom, #33ccff 0%, #003300 91%);

  }

  .nav-link{
    color: white !important;
    margin-right:20px;
    font-size: 15px;
      font-weight: 600;

  }

  /*---------------------------------------------Navbar end-----------------------------------------------------------*/



    /*-------------------------------------------------contact section----------------------------------------*/
  .contact-title h1 {
      color:#e0ac1c;
      font: normal 36px 'Cookie', cursive;
      margin: 0;
      text-align: center;
    font-size: 84px;
    font-weight: bold;
    margin-bottom: 10px;
    margin-top: 50px;
  }


  .contact-title h1 span {
      color: #b87707;
  }
  .contact-btn{
    text-align: center;
    color: red;
  }

  .contact-btn a {
    background-color: #e0ac1c;
  }
  .container{
    width: 85%;
    background: #fff;
    border-radius: 6px;
    padding: 20px 60px 30px 40px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    margin-top: 80px;
  }
  .container .content{
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .container .content .left-side{
    width: 25%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
    position: relative;
  }
  .content .left-side::before{
    content: '';
    position: absolute;
    height: 70%;
    width: 2px;
    right: -15px;
    top: 50%;
    transform: translateY(-50%);
    background: #afafb6;
  }
  .content .left-side .details{
    margin: 14px;
    text-align: center;
  }
  .content .left-side .details i{
    font-size: 30px;
    color: #3e2093;
    margin-bottom: 10px;
  }
  .content .left-side .details .topic{
    font-size: 18px;
    font-weight: 500;
  }
  .content .left-side .details .text-one,
  .content .left-side .details .text-two{
    font-size: 14px;

  }
  .container .content .right-side{
    width: 75%;
    margin-left: 75px;
  }
  .content .right-side .topic-text{
    font-size: 23px;
    font-weight: 600;

  }
  .right-side .input-box{
    height: 50px;
    width: 100%;
    margin: 12px 0;
  }
  .right-side .input-box input,
  .right-side .input-box textarea{
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    font-size: 16px;
    background: #F0F1F8;
    border-radius: 6px;
    padding: 0 15px;
    resize: none;
  }
  .right-side .message-box{
    min-height: 110px;
  }
  .right-side .input-box textarea{
    padding-top: 6px;
  }
  .right-side .button{
    display: inline-block;
    margin-top: 12px;
  }
  .right-side .button input[type="button"]{
    color: #fff;
    font-size: 18px;
    outline: none;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    background: #3e2093;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .button input[type="button"]:hover{
    background: #5029bc;
  }
  @media (max-width: 950px) {
    .container{
      width: 90%;
      padding: 30px 40px 40px 35px ;
    }
    .container .content .right-side{
     width: 75%;
     margin-left: 55px;
  }
  }
  @media (max-width: 820px) {
    .container{
      margin: 40px 0;
      height: 100%;
    }
    .container .content{
      flex-direction: column-reverse;
    }
   .container .content .left-side{
     width: 100%;
     flex-direction: row;
     margin-top: 40px;
     justify-content: center;
     flex-wrap: wrap;
   }
   .container .content .left-side::before{
     display: none;
   }
   .container .content .right-side{
     width: 100%;
     margin-left: 0;
   }
  }

    /*--------------------------------------------------contact section end---------------------------------------------*/
  /*---------------------------------footer start----------------------------------------*/

  footer {
      position: fixed;
      bottom: 0;
  }

  @media (max-height:800px) {
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

  .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
      display: inline-block;
      vertical-align: top;
  }

  /* Footer left */

  .footer-distributed .footer-left {
      width: 30%;
  }

  .footer-distributed h3 {
      color: #ffffff;
      font: normal 36px 'Cookie', cursive;
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
      ;
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
      background-color: #3F71EA;
  }

  .footer-links a:hover {
      color: #3F71EA;
  }

  @media (max-width: 880px) {
      .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
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
