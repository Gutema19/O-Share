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
    <script src="Lupa Sandi/lupa-sandi-part2.js" type="text/javascript"></script>
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
      <link href="Lupa Sandi/lupa-sandi-part2.css" rel="stylesheet" />
      <title>Lupa Sandi Part 2 - O-Share</title>
      <meta property="og:title" content="Lupa Sandi Part 2 - O-Share" />
      <div class="lupa-sandi-part2-container">
        <div class="lupa-sandi-part2-container1">
          <div class="lupa-sandi-part2-container2" data-aos="zoom-in" data-aos-delay="300">
            <img
              alt="image"
              src="public/playground_assets/group%20108.svg"
              class="lupa-sandi-part2-image"
            />
            <img
              alt="image"
              src="public/playground_assets/logo1.svg"
              class="lupa-sandi-part2-image1"
            />
          </div>
          <div class="lupa-sandi-part2-container3">
            <div class="lupa-sandi-part2-container4">
              <h1 class="lupa-sandi-part2-text" data-aos="fade-up" data-aos-delay="300">Lupa Kata Sandi</h1>
              <span class="lupa-sandi-part2-text1" data-aos="fade-up" data-aos-delay="400">
                <span>Silahkan memasukkan alamat surel anda</span>
                <br />
                <span>terlebih dahulu dalam memperbaharui kata sandi anda</span>
              </span>
              <img
                alt="image" data-aos="fade-up" data-aos-delay="450"
                src="public/playground_assets/group%20107.svg"
                class="lupa-sandi-part2-image2"
              />
            </div>
            <form class="lupa-sandi-part2-form">
              <div class="lupa-sandi-part2-container5" data-aos="fade-up" data-aos-delay="500">
                <input
                  type="password"
                  placeholder="Masukkan kata sandi"
                  class="lupa-sandi-part2-textinput input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/ri_lock-password-fill1.svg"
                  class="lupa-sandi-part2-image3"
                />
                <span class="lupa-sandi-part2-text4">Kata Sandi</span>
                <img
                  alt="image"
                  src="public/playground_assets/el_eye-close.svg"
                  class="lupa-sandi-part2-image4"
                  onclick="showpass()"
                />
                <span class="notif n3 ks"></span>
              </div>
              <div class="lupa-sandi-part2-container6" data-aos="fade-up" data-aos-delay="700">
                <input
                  type="password"
                  placeholder="Konfirmasi kata sandi anda"
                  class="lupa-sandi-part2-textinput1 input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/fluent_password-24-filled.svg"
                  class="lupa-sandi-part2-image5"
                />
                <span class="lupa-sandi-part2-text5">
                  Konfirmasi Kata Sandi
                </span>
                <img
                  alt="image"
                  src="public/playground_assets/el_eye-close.svg"
                  class="lupa-sandi-part2-image6"
                  onclick="showpass1()"
                />
                <span class="notif n3 kks"></span>
              </div>
              <button class="lupa-sandi-part2-button button" data-aos="fade-up" data-aos-delay="700">
                Ingat Masuk
              </button>
            </form>
            <span class="lupa-sandi-part2-text6" data-aos="fade-up" data-aos-delay="750">Sudah ingat kata sandi ?</span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
