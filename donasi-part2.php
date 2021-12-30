<?php 
    session_start();

    if(!isset($_SESSION['login'])){
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
    <link href="Donasi/donasi-part1.css" rel="stylesheet"/>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Donasi/donasi-part2.js" type="text/javascript"></script>
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
    <link rel="stylesheet" href="./style.css" />
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
      <link href="Donasi/donasi-part2.css" rel="stylesheet" />
      <title>Donasi Part 2 - O-Share</title>
      <meta property="og:title" content="Donasi Part 2 - O-Share" />
      <div class="donasi-part2-container">
        <div class="donasi-part2-container01" data-aos="fade-down" data-aos-delay="300">
          <div class="donasi-part2-container02">
            <button type="button" class="bullet-menu bck">  
              <img
                alt="image"
                src="public/playground_assets/bx_bx-arrow-back.svg"
                class="tentang-image00"
              />
              </button>
            <span class="donasi-part2-text">Donasi</span>
          </div>
          <div class="donasi-part2-container03">
            <img
              alt="image"
              src="public/playground_assets/logo.svg"
              class="donasi-part2-image01"
            />
          </div>
          <div class="donasi-part2-container04"></div>
        </div>
        <div class="donasi-part2-container05">
          <form class="donasi-part2-form">
            <div class="donasi-part2-container06" data-aos="fade-up" data-aos-delay="300">
              <input
                type="text"
                placeholder="placeholder"
                class="donasi-part2-textinput input"
              />
              <img
                alt="image"
                src="public/playground_assets/bx_bxs-user.svg"
                class="donasi-part2-image02"
              />
              <span class="donasi-part2-text01">Nama Lengkap</span>
            </div>
            <div class="donasi-part2-container07" data-aos="fade-up" data-aos-delay="400">
              <input
                type="text"
                placeholder="placeholder"
                class="donasi-part2-textinput1 input"
              />
              <img
                alt="image"
                src="public/playground_assets/bx_bxs-gift.svg"
                class="donasi-part2-image03"
              />
              <span class="donasi-part2-text02">Nama Donasi</span>
            </div>
            <div class="donasi-part2-container08" data-aos="fade-up" data-aos-delay="350">
              <input
                type="text"
                placeholder="placeholder"
                class="donasi-part2-textinput2 input"
              />
              <img
                alt="image"
                src="public/playground_assets/ic_sharp-email.svg"
                class="donasi-part2-image04"
              />
              <span class="donasi-part2-text03">Alamat Surel</span>
            </div>
            <div class="donasi-part2-container09" data-aos="fade-up" data-aos-delay="450">
              <input
                type="text"
                placeholder="placeholder"
                class="donasi-part2-textinput3 input"
              />
              <img
                alt="image"
                src="public/playground_assets/call%20btn.svg"
                class="donasi-part2-image05"
              />
              <span class="donasi-part2-text04">No Telepon</span>
            </div>
            <div class="donasi-part2-container10" data-aos="fade-up" data-aos-delay="500">
              <input
                type="file"
                placeholder="placeholder"
                class="donasi-part2-textinput4 input"
                accept='image/*'
              />
              <img
                alt="image"
                src="public/playground_assets/ic_baseline-photo.svg"
                class="donasi-part2-image06"
              />
              <span class="donasi-part2-text05">Foto Bukti</span>
              <span class="notif n3 fp"></span>
              <input data-aos="fade-up" data-aos-delay="550"
                type="text"
                placeholder="placeholder"
                class="donasi-part2-textinput5 input"
              />
              <img data-aos="fade-up" data-aos-delay="550"
                alt="image"
                src="public/playground_assets/ic_sharp-category.svg"
                class="donasi-part2-image07"
              />
              <span class="donasi-part2-text06" data-aos="fade-up" data-aos-delay="550">Kategori Donasi</span>
            </div>
            <div class="donasi-part2-container11" data-aos="fade-up" data-aos-delay="600">
              <button type="button" class="donasi-part2-button button">Yuk Dilanjut</button>
            </div>
            <div class="donasi-part2-container12">
              <h1 class="donasi-part2-text07" data-aos="fade-up" data-aos-delay="300">Buat Donasi</h1>
              <span class="donasi-part2-text08" data-aos="fade-up" data-aos-delay="350">
                <span>Mari sumbangkan apa yang anda</span>
                <br />
                <span>miliki kepada mereka yang membutuhkan.</span>
              </span>
            </div>
          </form>
          <img data-aos="fade-left" data-aos-delay="300"
            alt="image"
            src="public/playground_assets/group%20113.svg"
            class="donasi-part2-image08"
          />
        </div>
        <div class="donasi-part2-container13">
          <div class="donasi-part2-container14">
            <img
              alt="image"
              src="public/playground_assets/group%2096.svg"
              class="donasi-part2-image09"
            />
          </div>
          <div class="donasi-part2-container15">
            <h1 class="donasi-part2-text12">Fitur-fitur</h1>
            <span class="donasi-part2-text13">Rumah</span>
            <span class="donasi-part2-text14">Donasi</span>
            <span class="donasi-part2-text15">Pengguna</span>
            <span class="donasi-part2-text16">Tentang</span>
          </div>
          <div class="donasi-part2-container16">
            <h1 class="donasi-part2-text17">Kategori</h1>
            <span class="donasi-part2-text18">Donasi Uang</span>
            <span class="donasi-part2-text19">Donasi Bahan Pangan</span>
            <span class="donasi-part2-text20">Donasi Barang</span>
          </div>
          <img
            alt="image"
            src="public/playground_assets/group%2097.svg"
            class="donasi-part2-image10"
          />
          <div class="donasi-part2-container17">
            <h1 class="donasi-part2-text21">Media Sosial</h1>
            <span class="donasi-part2-text22">Facebook</span>
            <span class="donasi-part2-text23">Twitter</span>
            <span class="donasi-part2-text24">Instagram</span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
