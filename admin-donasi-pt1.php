<!DOCTYPE html>

<html lang="en">
  <head>
    <title>O-Share</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Admin Donasi/admin-donasi-pt1.js" type="text/javascript"></script>
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
      <link href="Admin Donasi/admin-donasi-pt1.css" rel="stylesheet" />
      <title>Admin Donasi Pt1 - O-Share</title>
      <meta property="og:title" content="Admin Donasi Pt1 - O-Share" />
      <div class="admin-donasi-pt1-container">
        <div class="admin-donasi-pt1-container1">
          <div class="admin-donasi-pt1-container2" data-aos="fade-down" data-aos-delay="300">
            <div class="admin-donasi-pt1-container3">
              <button class="admin-donasi-pt1-button button"><img src="public/playground_assets/bx_bx-arrow-back.svg" alt="btn-bck"></button>
              <span class="admin-donasi-pt1-text">Daftar Donasi</span>
            </div>
            <div class="admin-donasi-pt1-container4">
              <img
                alt="image"
                src="public/playground_assets/logo.svg"
                class="admin-donasi-pt1-image"
              />
            </div>
            <div class="admin-donasi-pt1-container5">
              <button class="admin-donasi-pt1-button1 button">Keluar</button>
            </div>
          </div>
        </div>
        <div class="admin-donasi-pt1-container6">
          <h1 class="admin-donasi-pt1-text1">
            <span data-aos="fade-down" data-aos-delay="300">Yuk Cek</span>
            <br />
            <span data-aos="fade-down" data-aos-delay="310">Donasi Masuk</span>
          </h1>
          <img data-aos="fade-left" data-aos-delay="300"
            alt="image"
            src="public/playground_assets/sittingwomanadmin.svg"
            class="admin-donasi-pt1-image1"
          />
        </div>
        <div class="admin-donasi-pt1-container7">
          <table class="table table-borderless pt1" data-aos="fade-up" data-aos-delay="300">
            <thead data-aos="fade-up" data-aos-delay="300">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Kabupaten</th>
                <th scope="col">Donasi</th>
                <th scope="col">Kategori</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
        
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
