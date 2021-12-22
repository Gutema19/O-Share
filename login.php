<?php 
    session_start();

    if(isset($_SESSION['login'])){
        header('Location: /O-Share/O-Share/donasi.php');
    exit;
    }
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>O-Share</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Login/login.js" type="text/javascript"></script>
    <script src="Jscript.js" type="text/javascript"></script>
    <style>
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}
    </style>
    <style>
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <script>
      AOS.init({
        delay: 0, 
        duration: 600, 
        easing: 'ease-out',
      });
    </script>
    <div>
      <link href="Login/login.css" rel="stylesheet" />
      <title>Login - O-Share</title>
      <meta property="og:title" content="Login - O-Share" />
      <div class="login-container">
        <div class="login-container1">
          <div class="login-container2" data-aos="zoom-in" data-aos-delay="300">
            <img 
              alt="image"
              src="public/playground_assets/group%20104.svg"
              class="login-image"
            />
            <img
              alt="image"
              src="public/playground_assets/logo1.svg"
              class="login-image1"
            />
          </div>
          <div class="login-container3">
            <div class="login-container4">
              <h1 class="login-text" data-aos="fade-up" data-aos-delay="300">Masuk</h1>
              <span class="login-text1" data-aos="fade-up" data-aos-delay="400">
                <span>Selamat datang pada situs resmi O-Share.</span>
                <br/>
                <span>
                  Silahkan masuk dengan alamat surel dan kata sandi anda
                </span>
              </span>
            </div>
            <form class="login-form">
              <div class="login-container5"  data-aos="fade-up" data-aos-delay="500">
                <input
                  type="text"
                  placeholder="Masukkan alamat surel anda"
                  class="login-textinput input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/ic_sharp-email.svg"
                  class="login-image2"
                />
                <span class="login-text4">Alamat Surel</span>
                <span class="notif nlogin"></span>
              </div>
              <div class="login-container6" data-aos="fade-up" data-aos-delay="600">
                <input
                  type="password"
                  placeholder="Masukkan kata sandi anda"
                  class="login-textinput1 input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/ri_lock-password-fill1.svg"
                  class="login-image3"
                />
                <span class="login-text5">Kata Sandi</span>
                <img onclick="showpass()"
                  alt="image"
                  src="public/playground_assets/el_eye-close.svg"
                  class="login-image4"
                />
                <span class="notif npass"></span>
              </div>
              <button class="login-button button" data-aos="fade-up" data-aos-delay="800">Masuk</button>
              <button class="login-button1 button"data-aos="fade-up" data-aos-delay="800">Yuk Daftar</button>
            </form>
            <span class="login-text6" data-aos="fade-up" data-aos-delay="700">Lupa Kata Sandi?</span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
