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
    <script src="Admin Donasi/admin-add-donasi.js" type="text/javascript"></script>
    <script src="Jscript.js" type="text/javascript"></script>
    <style>
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}
    </style>
    <style>
      html {
        font-family: Cardo;
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
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <script>
      AOS.init({
        delay: 0, 
        easing: 'ease-out',
      });
    </script>
    <div>
      <link href="Admin Donasi/admin-add-donasi.css" rel="stylesheet" />
      <title>Admin Add Donasi - O-Share</title>
      <meta property="og:title" content="Admin Add Donasi - O-Share" />
      <div class="admin-add-donasi-container">
        <div class="admin-add-donasi-container01">
          <div class="admin-add-donasi-container02" data-aos="fade-down" data-aos-delay="300">
            <div class="admin-add-donasi-container03">
              <button class="admin-add-donasi-button button"><img src="public/playground_assets/bx_bx-arrow-back.svg" alt="btn-bck"></button>
              <span class="admin-add-donasi-text">Donasi Masuk</span>
            </div>
            <div class="admin-add-donasi-container04">
              <img
                alt="image"
                src="public/playground_assets/logo.svg"
                class="admin-add-donasi-image"
              />
            </div>
            <div class="admin-add-donasi-container05">
              <button class="admin-add-donasi-button1 button">Keluar</button>
            </div>
          </div>
        </div>
        <div class="admin-add-donasi-container06">
          <h1 class="admin-add-donasi-text01">
            <span data-aos="fade-up" data-aos-delay="300">Tambah</span>
            <br />
            <span data-aos="fade-up" data-aos-delay="300">Data Donasi</span>
          </h1>
          <img data-aos="fade-left" data-aos-delay="300"
            alt="image"  
            src="public/playground_assets/unboxingdoodleadmin.svg"
            class="admin-add-donasi-image1"
          />
        </div>
        <div class="admin-add-donasi-container07">
          <div class="admin-add-donasi-container08" data-aos="fade-right" data-aos-delay="300">
            <h1 class="admin-add-donasi-text05">
              <span class="admin-add-donasi-text06">Tambahkan Data Donasi</span>
            </h1>
            <form class="admin-add-donasi-form">
              <div class="admin-add-donasi-container09">
                <input
                  type="text"
                  placeholder="placeholder"
                  class="admin-add-donasi-textinput input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/entypo-social_slideshare.svg"
                  class="admin-add-donasi-image2"
                />
                <span class="admin-add-donasi-text07">Nama Donasi</span>
                <span class="notif fd"></span>
              </div>
              <div class="admin-add-donasi-container10">
                <select name="" class="admin-add-donasi-textinput1 input">
                  <option value="0">Pilihlah Kategori Donasi</option>
                </select>
                <img
                  alt="image"
                  src="public/playground_assets/bx_bxs-category.svg"
                  class="admin-add-donasi-image3"
                />
                <span class="admin-add-donasi-text08">Kategori Donasi</span>
                <span class="notif ctgd"></span>
              </div>
              <div class="admin-add-donasi-container11">
                <img
                  alt="image"
                  src="public/playground_assets/jam_write-f.svg"
                  class="admin-add-donasi-image4"
                />
                <span class="admin-add-donasi-text09">Keterangan Donasi</span>
                <textarea
                  placeholder="placeholder"
                  class="admin-add-donasi-textarea textarea"
                ></textarea>
                <span class="notif ntd"></span>
              </div>
              <div class="admin-add-donasi-container12">
                <input
                  type="file"
                  placeholder="placeholder"
                  class="admin-add-donasi-textinput2 input"
                  accept="image/*"
                />
                <img
                  alt="image"
                  src="public/playground_assets/ic_baseline-photo.svg"
                  class="admin-add-donasi-image5"
                />
                <span class="admin-add-donasi-text10">Foto Donasi</span>
                <span class="notif fdnt"></span>
              </div>
              <div class="admin-add-donasi-container13">
                <button type="button" class="admin-add-donasi-button2 button">
                  Tambahkan
                </button>
              </div>
            </form>
          </div>
          <div class="admin-add-donasi-container14" data-aos="fade-left" data-aos-delay="300">
            <div class="admin-add-donasi-container15">
              <img src="" alt="picdnt" class="admin-add-donasi-container15">
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
