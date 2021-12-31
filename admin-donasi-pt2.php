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
    <meta property="twitter:card" content="summary_large_image"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Admin Donasi/admin-donasi-pt2.js" type="text/javascript"></script>
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
        background-color: #FAFAFA;

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
        easing: 'ease-out',
      });
    </script>
    <div>
      <link href="Admin Donasi/admin-donasi-pt2.css" rel="stylesheet" />
      <title>Admin Donasi Pt2 - O-Share</title>
      <meta property="og:title" content="Admin Donasi Pt2 - O-Share" />
      <div class="admin-donasi-pt2-container">
        <div class="admin-donasi-pt2-container01">
          <div class="admin-donasi-pt2-container02" data-aos="fade-down" data-aos-delay="300">
            <div class="admin-donasi-pt2-container03">
              <button class="admin-donasi-pt2-button button"><img src="public/playground_assets/bx_bx-arrow-back.svg" alt="btn-bck"></button>
              <span class="admin-donasi-pt2-text">Donasi Masuk</span>
            </div>
            <div class="admin-donasi-pt2-container04">
              <img
                alt="image"
                src="public/playground_assets/logo.svg"
                class="admin-donasi-pt2-image"
              />
            </div>
            <div class="admin-donasi-pt2-container05">
              <button class="admin-donasi-pt2-button1 button">Keluar</button>
            </div>
          </div>
        </div>
        <div class="admin-donasi-pt2-container06">
          <h1 class="admin-donasi-pt2-text01">
            <span data-aos="fade-up" data-aos-delay="300">Validasi</span>
            <br />
            <span data-aos="fade-up" data-aos-delay="320">Donasi Masuk</span>
          </h1>
          <img data-aos="fade-left" data-aos-delay="300"
            alt="image"
            src="public/playground_assets/readingdoodleadmin.svg"
            class="admin-donasi-pt2-image1"
          />
        </div>
        <div class="admin-donasi-pt2-container07">
          <div class="admin-donasi-pt2-container08" data-aos="fade-up" data-aos-delay="300">
  
          </div>
        </div>
        <div class="admin-donasi-pt2-container09">
          <form class="admin-donasi-pt2-form">
            <div class="admin-donasi-pt2-container10" data-aos="fade-up" data-aos-delay="300">
              <input
                type="text"
                placeholder="placeholder"
                class="admin-donasi-pt2-textinput input"
              />
              <img
                alt="image"
                src="public/playground_assets/bx_bxs-user.svg"
                class="admin-donasi-pt2-image2"
              />
              <span class="admin-donasi-pt2-text05">Nama Lengkap</span>
            </div>
            <div class="admin-donasi-pt2-container11" data-aos="fade-up" data-aos-delay="350">
              <input
                type="text"
                placeholder="placeholder"
                class="admin-donasi-pt2-textinput1 input"
              />
              <img
                alt="image"
                src="public/playground_assets/bx_bxs-gift.svg"
                class="admin-donasi-pt2-image3"
              />
              <span class="admin-donasi-pt2-text06">Nama Donasi</span>
            </div>
            <div class="admin-donasi-pt2-container12" data-aos="fade-up" data-aos-delay="325">
            <select name="status" class="admin-donasi-pt2-textinput2 input">
                <option value="Ditunda">Ditunda</option>
                <option value="Diterima">Diterima</option>
                <option value="Ditolak">Ditolak</option>
              </select>
              <img
                alt="image"
                src="public/playground_assets/fluent_status-16-filled.svg"
                class="admin-donasi-pt2-image4"
              />
              <span class="admin-donasi-pt2-text07">Status Donasi</span>
            </div>
            <div class="admin-donasi-pt2-container13" data-aos="fade-up" data-aos-delay="375">
              <input
                type="text"
                placeholder="placeholder"
                class="admin-donasi-pt2-textinput3 input"
              />
              <img
                alt="image"
                src="public/playground_assets/call%20btn.svg"
                class="admin-donasi-pt2-image5"
              />
              <span class="admin-donasi-pt2-text08">No Telepon</span>
            </div>
            <div class="admin-donasi-pt2-container14">
              <input data-aos="fade-up" data-aos-delay="400"
                type="text"
                placeholder="placeholder"
                class="admin-donasi-pt2-textinput4 input"
              />
              <img data-aos="fade-up" data-aos-delay="400"
                alt="image"
                src="public/playground_assets/ic_baseline-photo.svg"
                class="admin-donasi-pt2-image6"
              />
              <span class="admin-donasi-pt2-text09" data-aos="fade-up" data-aos-delay="400">Foto Bukti</span>
              <input data-aos="fade-up" data-aos-delay="425"
                type="text"
                placeholder="placeholder"
                class="admin-donasi-pt2-textinput5 input"
              />
              <img data-aos="fade-up" data-aos-delay="425"
                alt="image"
                src="public/playground_assets/ic_sharp-category.svg"
                class="admin-donasi-pt2-image7"
              />
              <span class="admin-donasi-pt2-text10" data-aos="fade-up" data-aos-delay="425">Kategori Donasi</span>
            </div>
            <div class="admin-donasi-pt2-container15" data-aos="fade-up" data-aos-delay="425">
              <button type="button" class="admin-donasi-pt2-button2 button">
                Yuk Dilanjut
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
