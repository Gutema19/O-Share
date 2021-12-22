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
    <meta property="twitter:card" content="summary_large_image" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="Pengguna/pengguna.js" type="text/javascript"></script>
    <link href="Registrasi/register-part1.css"rel="stylesheet"/>
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
      <link href="Pengguna/pengguna.css" rel="stylesheet" />
      <title>Pengguna - O-Share</title>
      <meta property="og:title" content="Pengguna - O-Share" />
      <div class="pengguna-container">
        <div class="pengguna-container01">
          <div class="pengguna-container02" data-aos="fade-down">
            <div class="pengguna-container03">
              <button type="button" class="bullet-menu">
                <img
                alt="image"
                src="public/playground_assets/Group 23.svg"
                class="tentang-image00"
              />
              </button>
              <span class="pengguna-text">Pengguna</span>
            </div>
            <div class="pengguna-container04">
              <img
                alt="image"
                src="public/playground_assets/logo.svg"
                class="pengguna-image01"
              />
            </div>
            <div class="pengguna-container05">
              <button class="pengguna-button button">Keluar</button>
            </div>
          </div>
          <div class="list-menu">
               
          </div>
        </div>
        <div class="pengguna-container06">
          <div class="pengguna-container07">
            <form class="pengguna-form">
              <div class="pengguna-container08" data-aos="fade-up">
                <div class="pengguna-container09"><img class="pengguna-container09" src="" alt="foto-profil"></div>
                <div class="pengguna-container10">
                  <h1 class="pengguna-text01">
                    <span class="pengguna-text02"></span>
                  </h1>
                  <div class="pengguna-container11">
                    <img
                      alt="image"
                      src="public/playground_assets/bi_gender-ambiguous.svg"
                      class="pengguna-image02"
                    />
                    <span class="pengguna-text03">Jenis Kelamin</span>
                  </div>
                  <div class="pengguna-container12">
                    <input
                      type="radio"
                      name="radio"
                      class="pengguna-radiobutton"
                      value="1"
                    />
                    <span class="pengguna-text04">Laki-laki</span>
                  </div>
                  <div class="pengguna-container13">
                    <input
                      type="radio"
                      name="radio"
                      class="pengguna-radiobutton1"
                      value="4"
                    />
                    <span class="pengguna-text05">Lainnya</span>
                  </div>
                  <div class="pengguna-container14">
                    <input
                      type="radio"
                      name="radio"
                      class="pengguna-radiobutton2"
                      value="2"
                    />
                    <span class="pengguna-text06">Perempuan</span>
                  </div>
                  <div class="pengguna-container15">
                    <input
                      type="radio"
                      name="radio"
                      class="pengguna-radiobutton3"
                      value="3"
                    />
                    <span class="pengguna-text07">Privasi</span>
                  </div>
                </div>
              </div>
              <div class="pengguna-container16" data-aos="fade-up" data-aos-delay="600">
                <input
                  type="text"
                  placeholder="Masukkan nama lengkap"
                  class="pengguna-textinput input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/bx_bxs-user.svg"
                  class="pengguna-image03"
                />
                <span class="pengguna-text08">Nama Lengkap</span>
                <span class="notif n2 fn"></span>
              </div>
              <div class="pengguna-container17" data-aos="fade-up" data-aos-delay="800">
                <input
                  type="text"
                  placeholder="Masukkan nama panggilan"
                  class="pengguna-textinput1 input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/bx_bxs-user.svg"
                  class="pengguna-image04"
                />
                <span class="pengguna-text09">Nama Panggilan</span>
                <span class="notif n2 cn"></span>
              </div>
              <div class="pengguna-container18" data-aos="fade-up" data-aos-delay="900">
              <select name="" id="" class="pengguna-textinput2 input">
                  <option value="0" name="Pname" class="register-part1-">Pilihlah Provinsi</option>
              </select>
                <img
                  alt="image"
                  src="public/playground_assets/map_city-hall.svg"
                  class="pengguna-image05"
                />
                <span class="pengguna-text10">Provinsi</span>
                <span class="notif n2 pn"></span>
              </div>
              <div class="pengguna-container19" data-aos="fade-up" data-aos-delay="1000">
                <input
                  type="text"
                  placeholder="Masukkan alamat surel"
                  class="pengguna-textinput3 input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/ic_sharp-email.svg"
                  class="pengguna-image06"
                />
                <span class="pengguna-text11">Alamat Surel</span>
                <span class="notif n2 sn"></span>
              </div>
              <div class="pengguna-container20" data-aos="fade-up" data-aos-delay="1100">
              <select name="" id="" class="pengguna-textinput4 input">
                  <option value="0" name="kname" class="register-part1-">Pilihlah Kabupaten</option>
              </select>
                <img
                  alt="image"
                  src="public/playground_assets/bx_bxs-city.svg"
                  class="pengguna-image07"
                />
                <span class="pengguna-text12">Kabupaten/Kota</span>
                <span class="notif n2 kn"></span>
              </div>
              <div class="pengguna-container21" data-aos="fade-up" data-aos-delay="700">
                <input
                  type="number"
                  placeholder="Masukkan no telepon"
                  class="pengguna-textinput5 input"
                />
                <img
                  alt="image"
                  src="public/playground_assets/call btn.svg"
                  class="pengguna-image08"
                />
                <span class="pengguna-text13">No Telepon</span>
                <span class="notif n2 tn"></span>
              </div>
              <img  data-aos="fade-up" data-aos-delay="500"
                alt="image"
                src="public/playground_assets/rectangle%2044.svg"
                class="pengguna-image09"
              />
              <button type="button" class="pengguna-button1 button"  data-aos="fade-up" data-aos-delay="1200">Simpan</button>
            </form>
            <img data-aos="fade-left" data-aos-delay="500"
              alt="image"
              src="public/playground_assets/group%20101.svg"
              class="pengguna-image10"
            />
          </div>
        </div>
        <div class="pengguna-container22" data-aos="fade-up" data-aos-delay="500">
          <h1 class="pengguna-text14">
            <span class="pengguna-text15">Riwayat Donasi</span>
            <span class="pengguna-text16"></span>
          </h1>
        </div>
        <div class="pengguna-container23">
          <table class="table table-borderless pt1" data-aos="fade-up" data-aos-delay="300">
            <thead data-aos="fade-up" data-aos-delay="300">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Donasi</th>
                <th scope="col">Kategori Donasi</th>
                <th scope="col">keterangan</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
        <div class="pengguna-container24">
          <div class="pengguna-container25">
            <img
              alt="image"
              src="public/playground_assets/group%2096.svg"
              class="pengguna-image11"
            />
          </div>
          <div class="pengguna-container26">
            <h1 class="pengguna-text17">Fitur-fitur</h1>
            <span class="pengguna-text18">Rumah</span>
            <span class="pengguna-text19">Donasi</span>
            <span class="pengguna-text20">Pengguna</span>
            <span class="pengguna-text21">Tentang</span>
          </div>
          <div class="pengguna-container27">
            <h1 class="pengguna-text22">Kategori</h1>
            <span class="pengguna-text23">Donasi Uang</span>
            <span class="pengguna-text24">Donasi Bahan Pangan</span>
            <span class="pengguna-text25">Donasi Barang</span>
          </div>
          <img
            alt="image"
            src="public/playground_assets/group%2097.svg"
            class="pengguna-image12"
          />
          <div class="pengguna-container28">
            <h1 class="pengguna-text26">Media Sosial</h1>
            <a data-aos-delay="500" href="https://github.com/">
              <span class="pengguna-text27">Facebook</span>
            </a>
            <a data-aos-delay="500" href="https://twitter.com/OShareOfficial">
              <span class="pengguna-text28">Twitter</span>
            </a>  
            <a data-aos-delay="500" href="https://github.com/">
              <span class="pengguna-text29">Instagram</span>
            </a>  
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
