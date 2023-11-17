<template>
    <Header />
    <div class="row">
        <div class="col-lg-3">
            <img src="/user_image/gallery/pic1.jpg">
        </div>
        <div class="col-lg-3">
            <img src="/user_image/gallery/pic2.jpg">
        </div>
        <div class="col-lg-3">
            <img src="/user_image/gallery/pic3.jpg">
        </div>
        <div class="col-lg-3">
            <img src="/user_image/gallery/pic4.jpg">
        </div>
        <div class="col-lg-3">
            <img src="/user_image/gallery/pic5.jpg">
        </div>
        <div class="col-lg-3">
            <img src="/user_image/gallery/pic6.jpg">
        </div>
        <div class="col-lg-3">
            <img src="/user_image/gallery/pic7.jpg">
        </div>
        <div class="col-lg-3">
            <img src="/user_image/gallery/pic8.jpg">
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
img{
    padding: 10px;
    height: 200px;
    width: 300px;
}
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

  /*--------------------------------------------------gallery section------------------------------------------------------------------*/
  .gallery-main{
        margin-left: 120px;
          width: 100%;
          margin-top: 40px;
  }
  .gallery-box{
   width: 20%;
   float: left;
   padding: 7px;
   padding-left: 10px;
   display: block;

  }

  img{
   width: 100%;
      border-radius: 4px;

  }

  img:hover{
    transform: scale(1.3,1.3);
    transition: .3s transform;

  }

  /*---------------------------------gallery end-----------------------------------------*/

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
