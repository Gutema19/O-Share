<?php 
    session_start();

    if(!isset($_SESSION['loginadmin']) && isset($_SESSION['id']) > 1){
        header('Location: /O-Share/O-Share/tentang.php');
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
      <link href="Tentang/tentang.css" rel="stylesheet" />
      <title>Tentang - O-Share</title>
      <meta property="og:title" content="Tentang - O-Share" />
      <div class="tentang-container">
        <div class="tentang-container01">
          <div class="tentang-container02" data-aos="fade-down">
            <div class="tentang-container03">
              <button type="button" class="bullet-menu">
                <img
                alt="image"
                src="public/playground_assets/Group 23.svg"
                class="tentang-image00"
              />
              </button>
              <span class="tentang-text">Tentang</span>
            </div>
            <div class="tentang-container04">
              <img
                alt="image"
                src="public/playground_assets/logo.svg"
                class="tentang-image01"
              />
            </div>
            <div class="tentang-container05">
              <input
                type="text"
                placeholder="Yuk cari donasi"
                class="tentang-textinput input src"
            />
            <button type="button" class="src-btn">
              <img
              alt="image"
              src="public/playground_assets/ant-design_search-outlined.svg"
              class="tentang-image00"
            />
            </button>
            </div>
          </div>
          <div class="tentang-container06">
            <img data-aos="fade-right"
              alt="image"
              src="public/playground_assets/dancingdoodle1.svg"
              class="tentang-image03"
            />
            <div class="tentang-container07">
              <h1 class="tentang-text01" data-aos="fade-up" data-aos-delay="500">
                <span>Semua Tentang</span>
                <br />
                <span>Kami</span>
                <br />
                <span>Ada Disini</span>
              </h1>
            </div>
            <a class="tentang-facebookkecil"  data-aos-delay="500" href="https://www.instagram.com/p/CXNf1CFvgiv/?utm_source=ig_web_copy_link">
              <img 
                alt="image"
                src="public/playground_assets/akar-icons_facebook-fill1.svg"
                class="tentang-image04"
              />
            </a>
            <a class="tentang-instagramkecil" data-aos-delay="500" href="https://www.instagram.com/p/CXNf1CFvgiv/?utm_source=ig_web_copy_link">
              <img
                alt="image"
                src="public/playground_assets/ant-design_instagram-filled1.svg"
                class="tentang-image05"
            />
            </a>
            <a class="tentang-twitterkecil" data-aos-delay="500" href="https://twitter.com/OShareOfficial">
              <img
                alt="image"
                src="public/playground_assets/ant-design_twitter-circle-filled1.svg"
                class="tentang-image06"
              />
            </a>
            <div class="tentang-container08">
              <span class="tentang-text07" data-aos="fade-up" data-aos-delay="400">
                Mari cari tahu tentang kami sebagai media yang membantu mereka
                yang membutuhkan
              </span>
              <a href="#tentang-kami">
                <button class="tentang-button button" data-aos="fade-up" data-aos-delay="500">Yuk Cari Tahu</button>
              </a>
            </div>
            <img data-aos="fade-left"
              alt="image"
              src="public/playground_assets/group%20102.svg"
              class="tentang-image07"
            />
          </div>
          <div class="list-menu">
               
          </div>
        </div>
        <div class="tentang-container09" id="tentang-kami">
          <h1 class="tentang-text08" data-aos="fade-up" data-aos-delay="400">
            <span>Tak Kenal</span>
            <br />
            <span>maka Tak Sayang</span>
            <span></span>
          </h1>
          <span class="tentang-text13" data-aos="fade-up" data-aos-delay="500">
            O-Share adalah platform yang menyediakan wadah untuk menggalang dana
            dan berdonasi secara online bagi individu, organisasi, komunitas,
            maupun perusahaan di Indonesia. Hadir sebagai platform yang aman dan
            transparan dalam penyaluran donasi karena saat ini marak penipuan
            dan penyalahgunaan bantuan donasi. Aplikasi ini berbasis web dimana
            ada banyak keunggulan yang dimiliki, diantaranya yaitu mudah
            dikembangkan, akses informasi lebih mudah, happy platform, dan
            antarmuka yang fleksibel.
          </span>
        </div>
        <div class="tentang-container10">
          <h1 class="tentang-text14" data-aos="fade-up" data-aos-delay="400"><span>Tim Kami</span></h1>
          <img data-aos="fade-left"
            alt="image"
            src="public/playground_assets/group%20103.svg"
            class="tentang-image08"
          />
          <span class="tentang-text16" data-aos="fade-up" data-aos-delay="500">
            <span>Kehadiran situs ini tidak terlepas dari mereka</span>
            <br />
            <span>yang telah bekerja keras dalam pembuatannya.</span>
          </span>
          <div class="tentang-container11">
            <div class="tentang-container12" data-aos="flip-right" data-aos-delay="400">
              <img 
                alt="image"
                src="public/playground_assets/group%2038.svg"
                class="tentang-image09"
              />
            </div>
            <div class="tentang-container13" data-aos="flip-right" data-aos-delay="500">
              <img
                alt="image"
                src="public/playground_assets/group%2039.svg"
                class="tentang-image10"
              />
            </div>
          </div>
          <div class="tentang-container14">
            <div class="tentang-container15">
              <div class="tentang-container16" data-aos="flip-right" data-aos-delay="400">
                <img
                  alt="image"
                  src="public/playground_assets/group%2040.svg"
                  class="tentang-image11"
                />
              </div>
              <div class="tentang-container17" data-aos="flip-right" data-aos-delay="500">
                <img
                  alt="image"
                  src="public/playground_assets/group%2041.svg"
                  class="tentang-image12"
                />
              </div>
              <div class="tentang-container18" data-aos="flip-right" data-aos-delay="600">
                <img
                  alt="image"
                  src="public/playground_assets/group%2042.svg"
                  class="tentang-image13"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="tentang-container19">
          <div class="tentang-container20">
            <h1 class="tentang-text19" data-aos="fade-up">Narahubung</h1>
            <span class="tentang-text20" data-aos="fade-up">
              Apabila terdapat pertanyaan ataupun hal lainnya anda dapat
              menghubungi kontak-kontak dibawah ini
            </span>
          </div>
          <div class="tentang-container21">
            <div class="tentang-container22" data-aos="fade-up" data-aos-delay="400">
                <a class="tentang-container23" data-aos="fade-up" data-aos-delay="500" href="https://www.instagram.com/p/CXNf1CFvgiv/?utm_source=ig_web_copy_link">
                  <img
                  alt="image"
                  src="public/playground_assets/akar-icons_facebook-fill%202.svg"
                  class="tentang-image14"
                />
                </a>
              <span class="tentang-text21">O-Share Official</span>
            </div>
            <div class="tentang-container24"  data-aos="fade-up" data-aos-delay="500">
              <a class="tentang-email" data-aos delay="500" href="mailto:OShareofficial@gmail.com">
                <img
                  alt="image"
                  src="public/playground_assets/cib_gmail.svg"
                  class="tentang-image15"
                />
              </a>
              <span class="tentang-text22">OShareofficial@gmail.com</span>
            </div>
            <div class="tentang-container25"  data-aos="fade-up" data-aos-delay="600">
              <a class="tentang-twitter" data-aos delay="500" href="https://twitter.com/OShareOfficial">
                <img
                  alt="image"
                  src="public/playground_assets/ant-design_twitter-circle-filled%202.svg"
                  class="tentang-image16"
                />
              </a>
              <span class="tentang-text23">@OShareOfficial</span>
            </div>
          </div>
        </div>
        <div class="tentang-container26">
          <div class="tentang-container27">
            <img
              alt="image"
              src="public/playground_assets/group%2096.svg"
              class="tentang-image17"
            />
          </div>
          <div class="tentang-container28">
            <h1 class="tentang-text24">Fitur-fitur</h1>
            <span class="tentang-text25">Rumah</span>
            <span class="tentang-text26">Donasi</span>
            <span class="tentang-text27">Pengguna</span>
            <span class="tentang-text28">Tentang</span>
          </div>
          <div class="tentang-container29">
            <h1 class="tentang-text29">Kategori</h1>
            <span class="tentang-text30">Donasi Uang</span>
            <span class="tentang-text31">Donasi Bahan Pangan</span>
            <span class="tentang-text32">Donasi Barang</span>
          </div>
          <img
            alt="image"
            src="public/playground_assets/group%2097.svg"
            class="tentang-image18"
          />
          <div class="tentang-container30">
            <h1 class="tentang-text33">Media Sosial</h1>
            <a class="tentang-facebookbawah" data-aos-delay="500" href="https://www.instagram.com/p/CXNf1CFvgiv/?utm_source=ig_web_copy_link">
              <span class="tentang-text34">Facebook</span>
            </a>
            <a class="tentang-facebookbawah" data-aos-delay="500" href="https://twitter.com/OShareOfficial">
              <span class="tentang-text35">Twitter</span>
            </a>
            <a class="tentang-facebookbawah" data-aos-delay="500" href="https://www.instagram.com/p/CXNf1CFvgiv/?utm_source=ig_web_copy_link">
              <span class="tentang-text36">Instagram</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
