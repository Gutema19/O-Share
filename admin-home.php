<?php 
    session_start();

    if(!isset($_SESSION['loginadmin'])){
        header('Location: /O-Share/O-Share/login.php');
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
    <script src="Admin Rumah/admin-home.js" type="text/javascript"></script>
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
        background-color: #FAFFFA;

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
    <link rel="stylesheet" href="style.css"/>
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
      <link href="Admin Rumah/admin-home.css" rel="stylesheet" />
      <title>Admin Home - O-Share</title>
      <meta property="og:title" content="Admin Home - O-Share" />
      <div class="admin-home-container">
        <div class="admin-home-container01" data-aos="fade-down" data-aos-delay="300">
          <div class="admin-home-container02">
            <div class="admin-home-container03">
              <span class="admin-home-text">Dashboard</span>
            </div>
            <div class="admin-home-container04">
              <img
                alt="image"
                src="public/playground_assets/logo.svg"
                class="admin-home-image"
              />
            </div>
            <div class="admin-home-container05">
              <button class="admin-home-button button">Keluar</button>
            </div>
          </div>
        </div>
        <div class="admin-home-container06">
          <h1 class="admin-home-text1">
            <span data-aos="fade-up" data-aos-delay="300">Hi Admin,</span>
            <br />
            <span data-aos="fade-up" data-aos-delay="350">Mari Sama-sama</span>
            <br />
            <span data-aos="fade-up" data-aos-delay="400">Kita Layani Mereka</span>
            <span class="admin-home-text7"></span>
          </h1>
        </div>
        <div class="admin-home-container07">
          <div class="admin-home-container08" data-aos="fade-up" data-aos-delay="300">
            <div class="admin-home-container09">
              <button class="admin-home-button1 button"><img src="public/playground_assets/ic_round-read-more.svg" alt="baca"></button>
            </div>
          </div>
          <div class="admin-home-container10" data-aos="fade-up" data-aos-delay="350">
            <div class="admin-home-container11">
              <button class="admin-home-button2 button"><img src="public/playground_assets/ic_round-read-more.svg" alt="baca"></button>
            </div>
          </div>
          <div class="admin-home-container12" data-aos="fade-up" data-aos-delay="400">
            <div class="admin-home-container13">
              <button class="admin-home-button3 button"><img src="public/playground_assets/ic_round-read-more.svg" alt="baca"></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
