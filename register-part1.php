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
    <script src="Registrasi/register-part1.js" type="text/javascript"></script>
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
        background-color: #F8FFF8;

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
      <link href="Registrasi/register-part1.css" rel="stylesheet" />
      <title>Register Part 1 - O-Share</title>
      <meta property="og:title" content="Register Part 1 - O-Share" />
      <div class="register-part1-container">
        <div class="register-part1-container01">
          <div class="register-part1-container02" data-aos="zoom-in" data-aos-delay="300">
            <img
              alt="image"
              src="public/playground_assets/group%20105.svg"
              class="register-part1-image"
            />
            <img
              alt="image"
              src="public/playground_assets/logo1.svg"
              class="register-part1-image1"
            />
          </div>
          <div class="register-part1-container03">
            <div class="register-part1-container04">
              <h1 class="register-part1-text" data-aos="fade-up" data-aos-delay="300">Registrasi</h1>
              <span class="register-part1-text01"  data-aos="fade-up" data-aos-delay="400">
                <span>Silahkan melakukan registrasi</span>
                <br />
                <span>dengan melengkapi data-data dibawah ini</span>
              </span>
              <img  data-aos="fade-up" data-aos-delay="500"
                alt="image"
                src="public/playground_assets/group%20106.svg"
                class="register-part1-image2"
              />
            </div>
            <form class="register-part1-form">
              <button type="button" class="register-part1-button button" data-aos="fade-up" data-aos-delay="1300">Yuk Dilanjut</button>
              <div class="register-part1-container05"  data-aos="fade-up" data-aos-delay="600">
                <input
                  type="text"
                  placeholder="Masukkan nama lengkap"
                  class="register-part1-textinput input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/bx_bxs-user.svg"
                  class="register-part1-image3"
                />
                <span class="register-part1-text04">Nama Lengkap</span>
                <span class="notif n1 fn"></span>
              </div>
              <div class="register-part1-container06" data-aos="fade-up" data-aos-delay="800">
                <input
                  type="text"
                  placeholder="Masukkan nama panggilan"
                  class="register-part1-textinput1 input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/bx_bxs-user.svg"
                  class="register-part1-image4"
                />
                <span class="register-part1-text05">Nama Panggilan</span>
                <span class="notif n1 cn"></span>
              </div>
              <div class="register-part1-container07" data-aos="fade-up" data-aos-delay="900">
                <select name="" id="" class="register-part1-textinput2 input">
                  <option value="0" name="Pname" class="register-part1-">Pilihlah Provinsi</option>
                </select>
                <img
                  alt="image"
                  src="public/playground_assets/map_city-hall.svg"
                  class="register-part1-image5"
                />
                <span class="register-part1-text06">Provinsi</span>
                <span class="notif n1 pn"></span>
              </div>
              <div class="register-part1-container08" data-aos="fade-up" data-aos-delay="1000">
                <input
                  type="text"
                  placeholder="Masukkan alamat surel"
                  class="register-part1-textinput3 input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/ic_sharp-email.svg"
                  class="register-part1-image6"
                />
                <span class="register-part1-text07">Alamat Surel</span>
                <span class="notif n1 sn"></span>
              </div>
              <div class="register-part1-container09" data-aos="fade-up" data-aos-delay="1100">
                <select name="" id="" class="register-part1-textinput4 input">
                  <option value="0" name="kname" class="register-part1-">Pilihlah Kabupaten</option>
                </select>
                <img
                  alt="image"
                  src="public/playground_assets/bx_bxs-city.svg"
                  class="register-part1-image7"
                />
                <span class="register-part1-text08">Kabupaten/Kota</span>
                <span class="notif n1 kn"></span>
              </div>
              <div class="register-part1-container10" data-aos="fade-up" data-aos-delay="700">
                <input
                  type="number"
                  placeholder="Masukkan no telepon"
                  class="register-part1-textinput5 input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/call%20btn.svg"
                  class="register-part1-image8"
                />
                <span class="register-part1-text09">No Telepon</span>
                <span class="notif n1 tn"></span>
              </div>
            </form>
            <span class="register-part1-text10" data-aos="fade-up" data-aos-delay="1200">Sudah punya akun ?</span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>