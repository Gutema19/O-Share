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
    <script src="Registrasi/register-part2.js" type="text/javascript"></script>
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
      <link href="Registrasi/register-part2.css" rel="stylesheet" />
      <title>Register Part 2 - O-Share</title>
      <meta property="og:title" content="Register Part 2 - O-Share" />
      <div class="register-part2-container">
        <div class="register-part2-container01">
          <div class="register-part2-container02" data-aos="zoom-in" data-aos-delay="300">
            <img
              alt="image"
              src="public/playground_assets/group%20105.svg"
              class="register-part2-image"
            />
            <img
              alt="image"
              src="public/playground_assets/logo1.svg"
              class="register-part2-image1"
            />
          </div>
          <div class="register-part2-container03">
            <div class="register-part2-container04">
              <h1 class="register-part2-text"  data-aos="fade-up" data-aos-delay="300">Registrasi</h1>
              <span class="register-part2-text01" data-aos="fade-up" data-aos-delay="400">
                <span>Silahkan melakukan registrasi</span>
                <br />
                <span>dengan melengkapi data-data dibawah ini</span>
              </span>
            </div>
            <form class="register-part2-form">
              <button type="submit" class="register-part2-button button" data-aos="fade-up" data-aos-delay="1000">Ingat Masuk</button>
              <div class="register-part2-container05" data-aos="fade-up" data-aos-delay="600">
                <input
                  type="password"
                  placeholder="Masukkan kata sandi"
                  class="register-part2-textinput input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/ri_lock-password-fill1.svg"
                  class="register-part2-image3"
                />
                <span class="register-part2-text04">Kata Sandi</span>
                <span class="notif n2 ks"></span>
              </div>
              <div class="register-part2-container06" data-aos="fade-up" data-aos-delay="700">
                <input
                  type="password"
                  placeholder="Konfirmasi kata sandi anda"
                  class="register-part2-textinput1 input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/fluent_password-24-filled.svg"
                  class="register-part2-image4"
                />
                <span class="register-part2-text05">Konfirmasi Kata Sandi</span>
                <span class="notif n2 kks"></span>
              </div>
              <div class="register-part2-container07" data-aos="fade-up" data-aos-delay="800">
                <input
                  type="file"
                  placeholder="Masukkan foto profil"
                  class="register-part2-textinput2 input"
                  accept='image/*'
                />
                <img data-aos="zoom-in" data-aos-delay="500"
                  alt="image"
                  src="public/playground_assets/ic_baseline-photo.svg"
                  class="register-part2-image5"
                />
                <span class="register-part2-text06">Foto Profil</span>
                <span class="notif n2 fp"></span>
              </div>
              <div class="register-part2-container08" data-aos="fade-up" data-aos-delay="500">
                <div class="register-part2-container09">
                  <img
                    alt="image"
                    src="public/playground_assets/bi_gender-ambiguous.svg"
                    class="register-part2-image6"
                  />
                  <span class="register-part2-text07">Jenis Kelamin</span>
                </div>
                <div class="register-part2-container10">
                  <input
                    type="radio"
                    name="radio"
                    class="register-part2-radiobutton"
                    value="1"
                  />
                  <span class="register-part2-text08">Laki-laki</span>
                </div>
                <div class="register-part2-container11">
                  <input
                    type="radio"
                    name="radio"
                    class="register-part2-radiobutton1"
                    value="4"
                  />
                  <span class="register-part2-text09">Lainnya</span>
                </div>
                <div class="register-part2-container12">
                  <input
                    type="radio"
                    name="radio"
                    class="register-part2-radiobutton2"
                    value="2"
                  />
                  <span class="register-part2-text10">Perempuan</span>
                </div>
                <div class="register-part2-container13">
                  <input
                    type="radio"
                    name="radio"
                    class="register-part2-radiobutton3"
                    value="3"
                  />
                  <span class="register-part2-text11">Privasi</span>
                </div>
                <span class="notif n3 jk"></span>
              </div>
              <img src="public/playground_assets/Ellipse 5.svg" class="register-part2-container14">
            </form>
            <span data-aos="fade-up" data-aos-delay="900" class="register-part2-text12">Sudah punya akun ?</span>
          </div>
        </div>
        <img
          alt="image"
          src="public/playground_assets/el_eye-close.svg"
          class="register-part2-image7"
          onclick="showpass()"
        />
        <img data-aos="fade-up" data-aos-delay="600"
          alt="image"
          src="public/playground_assets/el_eye-close.svg"
          class="register-part2-image8"
          onclick="showpass1()"
        />
        <img data-aos="fade-up" data-aos-delay="700"
        alt="image"
        src="public/playground_assets/group%20107.svg"
        class="register-part2-image2"
      />
      </div>
    </div>
  </body>
</html>
