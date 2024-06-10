<?php
error_reporting(0);
$namaundangan = $_GET['to'];
// if($namaundangan == '') {
//   header("Location: index123.php");
// }
?>
<!DOCTYPE html>
<html lang="id" class="notranslate" translate="no">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="google" content="notranslate" />
  <title>Avengers</title>
  <meta name="title" content="Avengers - nama" />
  <meta name="description" content="" />
  <meta itemprop="image" content="themes/cocomelon/cocomelon.jpg" />
  <link rel="icon" type="image/x-icon" href="images/media/1-media-1690692406.png" />
  <!-- Open Graph / Facebook -->
  <!-- <meta property="og:type" content="website" />
    <meta
      property="og:url"
      content="preview/cocomelon"
    />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta
      property="og:image"
      content="themes/cocomelon/cocomelon.jpg"
    /> -->

  <!-- css -->
  <?php
  $version = 3;
  ?>
  <link rel="stylesheet" href="plugins/splide@4.1.4/splide.min.css?v=<?php echo $version ?>" />
  <link rel="stylesheet" href="plugins/animate.css@4.1.1/animate.min.css?v=<?php echo $version ?>" />
  <link href="themes/bootstrap.min.css?v=<?php echo $version ?>" rel="stylesheet" />
  <link href="themes/theme.css?v=210823?v=<?php echo $version ?>" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=FontName&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Marvel&display=swap" rel="stylesheet">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Londrina+Solid&family=Luckiest+Guy&family=Varela+Round&display=swap");

    :root {
      --inv-bg: #aee6db;
      --inv-base: #491c08;
      --inv-accent: #00375c;
      ;
      --inv-border: #eff9f8;
      --font-base: "Varela Round", sans-serif;
      --font-accent: "Luckiest Guy", cursive;
      --font-latin: "Londrina Solid", cursive;
      --menu-bg: brown;
      --menu-inactive: #eff9f8;
      --menu-active: #00375c;
      ;
      --btn-color: #eff9f8;
    }

    .menu-item.is-active {
      background-color: var(--menu-active);
      /* color: var(--btn-color) !important; */
      color: #f8c830;
      /* color: rgb(225, 63, 60); */

      font-weight: bold;
      border-radius: 15px;
    }
  </style>
</head>

<body>
  <main id="app">
    <div id="modalOverlay" class="modal-backdrop fade" style="display: none"></div>
    <!-- Loader -->
    <div id="loader" class="loader-wrapper">
      <span class="loader">
        <span class="loader-inner"></span>
      </span>
    </div>
    <!-- music -->
    <audio id="music" loop autoplay>
      <source
        src="https://assets.satumomen.com/musics/happy-birthday-song-cocomelon-nursery-rhymes-and-kids-songs.mp3" />
    </audio>
    <!-- end music -->
    <!-- invitation -->
    <div id="satuMomen" class="splide not-open" style="text-transform: capitalize;"
      data-guest="<?php echo $namaundangan ?>" data-group="Nama Group">
      <div class="splide__track invitation__track">
        <ul class="splide__list invitation__list">

          <!-- awal -->
          <li class="splide__slide invitation__slide">
            <div class="container-mobile cover" style="
                  background-image: url(images/avengers.webp);
                ">
              <div class="frame">

                <img class="frame-tl animate__animated animate__pulse animate__infinite infinite animate__slower"
                  src="themes/cocomelon/avengers1.webp" style="width: 100%; height: auto" alt="frame" />

                <img class="frame-bl animate__animated animate__pulse animate__infinite infinite animate__slower"
                  src="themes/cocomelon/avengers_bottom.webp" style="width: 100%; height: auto" alt="frame" />
              </div>

              <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100%">
                <div style="width: 100%">
                  <div class="text-center" style="position: absolute; top: 5vh; left: 0; right: 0">
                    <div class="editable font-latin animate__animated animate__fadeInDown animate__slower"
                      style="font-size: 20px"></div>
                  </div>
                </div>

                <div>
                  <div class="text-center animate__animated animate__fadeInDown animate__slower">

                    <div class="editable font-accent color-accent h3 mb-3"
                      style="border-radius: 15px; background-color: rgba(26, 25, 25, 0.7); padding: 10px; font-size: 35px; color: #f8c830;  box-shadow: 5px 5px 10px rgba(120, 0, 0, 0.5);">
                      Alvredo Kenzie A.
                    </div>
                    <div class="animate__animated animate__fadeInDown animate__slower image-editable"
                      style="height: 200px; width: 200px; margin: auto auto 20px; border-radius: 100%; overflow: hidden;">
                      <img src="themes/cocomelon/av.webp" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div
                      style="border-radius: 15px; background-color: rgba(26, 25, 25, 0.7); padding: 10px;  box-shadow: 5px 5px 10px rgba(120, 0, 0, 0.5);">
                      <div class="editable mb-1 animate__animated animate__fadeInUp animate__slower"
                        style="color: white">Hallo</div>
                      <div id="guestNameSlot"
                        class="editable color-accent h5 font-weight-bold mb-1 animate__animated animate__fadeInUp animate__slower"
                        style="color: #f8c830">
                        Semuanya</div>
                    </div>
                  </div>
                  <div class="text-center">

                    <br>
                    <button type="button"
                      class="btn-open-invitation btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow">
                      Open Invitation
                    </button>
                  </div>
                </div>



              </div>
            </div>
          </li>

          <!-- profile -->
          <li class="splide__slide invitation__slide">
            <div class="container-mobile" style="
                  background-image: url(images/avengers.webp);
                ">
              <div class="frame">

                <img src="themes/cocomelon/avengers_top2.webp" alt="frame"
                  class="frame-tr animate__animated animate__bounceInDown animate__slower" style="width: 100%;">

                <img class="frame-bl animate__animated animate__pulse animate__infinite infinite animate__slower"
                  src="themes/cocomelon/avengers_bottom2.webp" style="width: 100%; height: auto" alt="frame" />
              </div>

              <div class="d-flex justify-content-center align-items-center" style="height: 100%; padding-top: 25px; ">

                <div>
                  <div class=" animate__animated animate__zoomIn animate__slower"
                    style="height: auto; width: 203px; margin: auto auto 20px; overflow: hidden; border-radius: 10px;">
                    <img src="themes/cocomelon/profile.webp" style="width: 100%; height: 100%; object-fit: cover;">
                  </div>

                  <div
                    style="width: 100%; padding: 10px 10px; border-radius: 15px; background-color: rgba(26, 25, 25, 0.7); box-shadow: 5px 5px 10px rgba(120, 0, 0, 0.5);">
                    <div class="editable text-center mb-3 animate__animated animate__fadeInDown animate__slower"
                      style="font-size: 15px; font-weight: bold font-family: 'Marvel', sans-serif; color: white">
                      Teman - Teman<br>Datang Ya di Acara Ulang Tahun Ku</div>


                    <div class="text-center mb-4 animate__animated animate__fadeInUp animate__slower">
                      <div class="editable font-latin h4 mb-2" style="font-size: 28.8px; color: #f8c830">Alvredo Kenzie A.</div>
                      <div class="editable " style="color: var(--inv-bg); font-weight: 400;"> Putra dari  <i><b> Ibu April </b> </i></div>
                    </div>
                  </div>

                </div>

              </div>

            </div>
          </li>
          <!-- end profile -->


          <!-- Birthday -->
          <li class="splide__slide invitation__slide">
            <div class="container-mobile" style="
                  background-image: url(images/avengers.webp);
                ">
              <div class="frame">

                <img src="themes/cocomelon/avengers_top2.webp" alt="frame"
                  class="frame-tr animate__animated animate__bounceInDown animate__slower" style="width: 100%;">

                <img class="frame-bl animate__animated animate__pulse animate__infinite infinite animate__slower"
                  src="themes/cocomelon/avengers_bottom2.webp" style="width: 100%; height: auto" alt="frame" />
              </div>

              <div class="d-flex justify-content-center align-items-center" style="height: 100%">


                <div
                  style="width: 100%; padding: 20px 10px; border-radius: 15px; background-color: rgba(26, 25, 25, 0.7); box-shadow: 5px 5px 10px rgba(120, 0, 0, 0.5);">
                  <div class="editable font-accent animate__animated animate__fadeInUp animate__slower"
                    style="font-size: 48px; text-align: center; color: #f8c830;  font-family: 'Bangers', cursive; font-weight: 400;">
                    <!-- IS TURNING 5 -->
                    Birthday Party
                  </div>
                  <div class="text-center">
                    <div class="editable animate__animated animate__fadeInUp animate__slower"
                      style="font-size: 30px; font-family: 'Marvel', sans-serif; color: white">
                      12 Oktober 2023 <br>
                      Pukul 18.00 WIB - SELESAI
                    </div>

                    <br />
                    <br />
                    <div class="countdown-wrapper d-flex flex-column animate__animated animate__fadeInUp animate__slow"
                      data-datetime="2023-10-01T07:00">
                      <div class="countdown text-center">
                        <div class="countdown-item day" style="">
                          <div class="number">00</div>
                          <div class="text editable">Hari</div>
                        </div>
                        <div class="countdown-item hour" style="">
                          <div class="number">00</div>
                          <div class="text editable">Jam</div>
                        </div>
                        <div class="countdown-item minute" style="">
                          <div class="number">00</div>
                          <div class="text editable">Menit</div>
                        </div>
                        <div class="countdown-item second" style="">
                          <div class="number">00</div>
                          <div class="text editable">Detik</div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- end Birthday -->


          <!-- Acara -->
          <li class="splide__slide invitation__slide">
            <div class="container-mobile" style="
                  background-image: url(images/avengers.webp);
                ">
              <div class="frame">

                <img src="themes/cocomelon/avengers_top2.webp" alt="frame"
                  class="frame-tr animate__animated animate__bounceInDown animate__slower" style="width: 100%;">

                <img class="frame-bl animate__animated animate__pulse animate__infinite infinite animate__slower"
                  src="themes/cocomelon/avengers_bottom2.webp" style="width: 100%; height: auto" alt="frame" />
              </div>



              <div class="d-flex justify-content-center align-items-center" style="height: 100%">

                <div>
                  <div class="animate__animated animate__fadeInUp animate__slow" style="width: 100%;height: auto;border-radius: 10px;overflow: hidden;padding: 0px; background-color: brown; position: relative; border: 10px solid brown;  
                  transform: perspective(1000px) rotateX(20deg); box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);">
                    <iframe width="100%" height="230px" loading="lazy" allowfullscreen="allowfullscreen"
                      src="https://maps.google.com/maps?q=perumahan%20bumi%20permain,%20gang%20mawar%20no%2010,%20yukum%20jaya,%20kecamatan%20terbangg&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                      class="maps-embed" style="border: 0px;"></iframe>
                  </div>

                  <br>
                  <div
                    style="width: 100%; padding: 10px 10px; border-radius: 15px; background-color: rgba(26, 25, 25, 0.7);box-shadow: 5px 5px 10px rgba(120, 0, 0, 0.5); ">
                    <div class="editable text-center animate__animated animate__fadeInDown animate__slower"
                      style="font-size: 15px; font-weight: bold font-family: 'Marvel', sans-serif; color: white">
                      Perumahan Bumi Permain, Lingkungan V, RT/RW: 023/009, Yukum Jaya, Lampung Tengah, Lampung</div>
                  </div>

                  <div style="display: flex; justify-content: center; margin-top: 15px;">
                    <a href="https://www.google.com/maps/place/Warung+Intan,+Perumahan+Bumi+Permai,+Jl.+Mawar+No.10,+Yukum+Jaya,+Kec.+Terbanggi+Besar,+Kabupaten+Lampung+Tengah,+Lampung+34163/@-4.9072069,105.2061327,17z/data=!4m6!3m5!1s0x2e40a913c49db4ed:0x7ae62189c38d25d1!8m2!3d-4.9072069!4d105.2061327!16s%2Fg%2F11llcxdtvf"
                      target="_blank"
                      class="btn-maps-link btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow">Petunjuk
                      Ke Lokasi</a>
                  </div>
                </div>

              </div>

          </li>
          <!-- end Acara -->


          <!-- Gallery -->
          <li class="splide__slide invitation__slide">
            <div class="container-mobile" style="
                  background-image: url(images/avengers.webp);
                ">
              <div class="frame">

                <img src="themes/cocomelon/avengers_top2.webp" alt="frame"
                  class="frame-tr animate__animated animate__bounceInDown animate__slower" style="width: 100%;">

                <img class="frame-bl animate__animated animate__pulse animate__infinite infinite animate__slower"
                  src="themes/cocomelon/avengers_bottom2.webp" style="width: 100%; height: auto" alt="frame" />
              </div>



              <div class="d-flex justify-content-center align-items-center" style="height: 100%">

                <div style="width: 100%;">
                  <div class="text-center mb-4 animate__animated animate__fadeInDown animate__slower">
                    <div class="font-latin h4 mt-2 mb-2 editable"
                      style="color:  #f8c830;  border-radius: 15px; background-color: rgba(26, 25, 25, 0.7);box-shadow: 5px 5px 10px rgba(120, 0, 0, 0.5);">
                      Galeri Foto</div>
                  </div>

                  <div class="image-editable d-flex flex-wrap">

                    <div class="animate__animated animate__zoomIn animate__slower"
                      style="width: 31.333%; overflow: hidden; padding: 4px;  background-color: var(--menu-active); position: relative; border: 1px solid brown; border-radius: 10px; margin: 3px">
                      <div class="light" style="overflow: hidden; width: 100%; height: 100px; border-radius: 5px;"><img
                          src="themes/cocomelon/foto1.jpg" class="lightbox"
                          style="width: 100%; height: 100%; object-fit: cover;"></div>
                    </div>

                    <div class="animate__animated animate__zoomIn animate__slower"
                      style="width: 31.333%; overflow: hidden; padding: 4px; background-color: var(--menu-active); position: relative; border: 1px solid brown; border-radius: 10px; margin: 3px">
                      <div style="overflow: hidden; width: 100%; height: 100px; border-radius: 5px;"><img
                          src="themes/cocomelon/foto8.jpg" class="lightbox"
                          style="width: 100%; height: 100%; object-fit: cover;"></div>
                    </div>

                    <div class="animate__animated animate__zoomIn animate__slower"
                      style="width: 31.333%; overflow: hidden; padding: 4px; background-color: var(--menu-active); position: relative; border: 1px solid brown; border-radius: 10px; margin: 3px">
                      <div style="overflow: hidden; width: 100%; height: 100px; border-radius: 5px;"><img
                          src="themes/cocomelon/foto3.jpg" class="lightbox"
                          style="width: 100%; height: 100%; object-fit: cover;"></div>
                    </div>

                    <div class="animate__animated animate__zoomIn animate__slower"
                      style="width: 48%; overflow: hidden; padding: 4px; background-color: var(--menu-active); position: relative; border: 1px solid brown; border-radius: 10px; margin: 3px;">
                      <div style="overflow: hidden; width: 100%; height: 100px; border-radius: 5px;"><img
                          src="themes/cocomelon/foto4.jpg" class="lightbox"
                          style="width: 100%; height: 100%; object-fit: cover;"></div>
                    </div>

                    <div class="animate__animated animate__zoomIn animate__slower"
                      style="width: 48%; overflow: hidden; padding: 4px; background-color: var(--menu-active); position: relative; border: 1px solid brown; border-radius: 10px; margin: 3px;">
                      <div style="overflow: hidden; width: 100%; height: 100px; border-radius: 5px;"><img
                          src="themes/cocomelon/foto5.jpg" class="lightbox"
                          style="width: 100%; height: 100%; object-fit: cover;"></div>
                    </div>

                    <div class="animate__animated animate__zoomIn animate__slower"
                      style="width: 31.333%; overflow: hidden; padding: 4px; background-color: var(--menu-active); position: relative; border: 1px solid brown; border-radius: 10px; margin: 3px;">
                      <div style="overflow: hidden; width: 100%; height: 100px; border-radius: 5px;"><img
                          src="themes/cocomelon/foto1.jpg" class="lightbox"
                          style="width: 100%; height: 100%; object-fit: cover;"></div>
                    </div>

                    <div class="animate__animated animate__zoomIn animate__slower"
                      style="width: 31.333%; overflow: hidden; padding: 4px; background-color: var(--menu-active); position: relative; border: 1px solid brown; border-radius: 10px; margin: 3px;">
                      <div style="overflow: hidden; width: 100%; height: 100px; border-radius: 5px;"><img
                          src="themes/cocomelon/foto8.jpg" class="lightbox"
                          style="width: 100%; height: 100%; object-fit: cover;"></div>
                    </div>

                    <div class="animate__animated animate__zoomIn animate__slower"
                      style="width: 31.333%; overflow: hidden; padding: 4px; background-color: var(--menu-active); position: relative; border: 1px solid brown; border-radius: 10px; margin: 3px;">
                      <div style="overflow: hidden; width: 100%; height: 100px; object-fit: cover; border-radius: 5px;">
                        <img src="themes/cocomelon/foto3.jpg" class="lightbox"
                          style="width: 100%; height: 100%; object-fit: cover;">
                      </div>
                    </div>

                  </div>
                </div>

              </div>

          </li>
          <!-- end Gallery -->


          <!-- <li class="splide__slide invitation__slide">
            <div class="container-mobile" style="
                  background-image: url(themes/cocomelon/bg.webp);
                ">
              <div class="frame">
                <img class="frame-tl animate__animated animate__pulse animate__infinite infinite animate__slower"
                  src="themes/cocomelon/frame-tm.webp" style="width: 100%; height: auto" alt="frame" />
                <img class="frame-bl animate__animated animate__pulse animate__infinite infinite animate__slower"
                  src="themes/cocomelon/frame-bm.webp" style="width: 100%; height: auto" alt="frame" />
              </div>
              <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                <div style="width: 100%" class="text-center">
                  <div
                    class="font-accent color-accent h4 mb-2 editable animate__animated animate__fadeInDown animate__slower"
                    style="font-size: 30px">
                    Tanda Kasih
                  </div>
                  <div class="gift-1">
                    <div style="
                          width: 100%;
                          max-width: 350px;
                          margin: auto;
                          overflow: hidden;
                          margin-bottom: 20px;
                          border-radius: 15px;
                        " class="image-editable animate__animated animate__zoomIn animate__slower">
                      <img class="mb-4" src="images/benandfam.webp" style="width: 100%; height: 100%; object-fit: cover"
                        draggable="false" />
                    </div>
                    <div class="text-center animate__animated animate__zoomIn animate__slower">
                      <div class="editable account-number font-weight-bold h5 mb-0" style="font-size: 30px">
                        12345678
                      </div>
                      <div class="editable" style="font-size: 24px">
                        BCA : Sherly
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li> -->



          <li class="splide__slide invitation__slide">
            <div class="container-mobile" style="
                  background-image: url(images/avengers.webp);
                ">
              <div class="frame">

                <img src="themes/cocomelon/avengers_top2.webp" alt="frame"
                  class="frame-tr animate__animated animate__bounceInDown animate__slower" style="width: 100%;">

                <img class="frame-bl animate__animated animate__pulse animate__infinite infinite animate__slower"
                  src="themes/cocomelon/avengers_bottom2.webp" style="width: 100%; height: auto" alt="frame" />
              </div>
              <div class="watermark d-flex justify-content-center align-items-center" style="height: 100%">
                <div swtyle="width: 100%">
                  <div class="text-center">
                    <div class="editable quotes mb-3 animate__animated animate__fadeInDown animate__slower"
                      style="font-size: 20px; font-weight: bold; background: rgba(255, 255, 255, 0.7); padding: 10px; border-radius: 10px;">
                      Merupakan suatu kebahagiaan dan kehormatan bagi kami,
                      apabila teman-teman, berkenan hadir dan memberikan do'a.
                    </div>
                    <div class="editable font-italic animate__animated animate__fadeInDown animate__slow"
                      style="font-size: 20px; font-weight: bold; background: rgba(255, 255, 255, 0.7); padding: 10px; border-radius: 10px;">
                      Salam Hangat
                      <br>
                      Alvredo Kenzie A.

                    </div>
                   
                    <div class=" animate__animated animate__zoomIn animate__slower"
                    style="height: auto; width: 203px; margin: auto auto 20px; overflow: hidden; border-radius: 10px;">
                    <img src="themes/cocomelon/profile.webp" style="width: 100%; height: 100%; object-fit: cover;">
                  </div>
                    <div class="watermark-placeholder mt-5"></div>
                  </div>

                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div id="menuSlider" class="splide" style="border-radius: 10px; ">
      <div class="splide__track menu-track">
        <ul class="splide__list menu-list">
          <li class="splide__slide menu-item">
            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M9.144 20.782v-3.067c0-.777.632-1.408 1.414-1.413h2.875c.786 0 1.423.633 1.423 1.413v3.058c0 .674.548 1.222 1.227 1.227h1.96a3.46 3.46 0 0 0 2.444-1 3.41 3.41 0 0 0 1.013-2.422V9.866c0-.735-.328-1.431-.895-1.902l-6.662-5.29a3.115 3.115 0 0 0-3.958.071L3.467 7.963A2.474 2.474 0 0 0 2.5 9.867v8.703C2.5 20.464 4.047 22 5.956 22h1.916c.327.002.641-.125.873-.354.232-.228.363-.54.363-.864h.036Z"
                fill="currentColor" />
            </svg>
            <span>Home</span>
          </li>
          <li class="splide__slide menu-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-balloon"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M8 9.984C10.403 9.506 12 7.48 12 5a4 4 0 0 0-8 0c0 2.48 1.597 4.506 4 4.984ZM13 5c0 2.837-1.789 5.227-4.52 5.901l.244.487a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.244-.487C4.789 10.227 3 7.837 3 5a5 5 0 0 1 10 0Zm-6.938-.495a2.003 2.003 0 0 1 1.443-1.443C7.773 2.994 8 2.776 8 2.5c0-.276-.226-.504-.498-.459a3.003 3.003 0 0 0-2.46 2.461c-.046.272.182.498.458.498s.494-.227.562-.495Z" />
            </svg>
            <span>Profile</span>
          </li>
          <li class="splide__slide menu-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-balloon"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M8 9.984C10.403 9.506 12 7.48 12 5a4 4 0 0 0-8 0c0 2.48 1.597 4.506 4 4.984ZM13 5c0 2.837-1.789 5.227-4.52 5.901l.244.487a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.244-.487C4.789 10.227 3 7.837 3 5a5 5 0 0 1 10 0Zm-6.938-.495a2.003 2.003 0 0 1 1.443-1.443C7.773 2.994 8 2.776 8 2.5c0-.276-.226-.504-.498-.459a3.003 3.003 0 0 0-2.46 2.461c-.046.272.182.498.458.498s.494-.227.562-.495Z" />
            </svg>
            <span>Birthday</span>
          </li>
          <li class="splide__slide menu-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
              class="bi bi-calendar-heart" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5ZM1 14V4h14v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1Zm7-6.507c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
            </svg>
            <span>Acara</span>
          </li>

          <li class="splide__slide menu-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gift"
              viewBox="0 0 16 16">
              <path
                d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
            </svg>
            <span>Galery</span>
          </li>

          <!-- <li class="splide__slide menu-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gift"
              viewBox="0 0 16 16">
              <path
                d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
            </svg>
            <span>Ucapan</span>
          </li> -->

          <!-- <li class="splide__slide menu-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gift"
              viewBox="0 0 16 16">
              <path
                d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
            </svg>
            <span>Gift</span>
          </li> -->

          <li class="splide__slide menu-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
              class="bi bi-envelope-paper-heart-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="m3 7.5 3.5 2L8 8.75l1.5.75 3.5-2v-6A1.5 1.5 0 0 0 11.5 0h-7A1.5 1.5 0 0 0 3 1.5v6ZM2 3.133l-.941.502A2 2 0 0 0 0 5.4v.313l2 1.173V3.133Zm12 3.753 2-1.173V5.4a2 2 0 0 0-1.059-1.765L14 3.133v3.753Zm-3.693 3.324L16 6.873v6.5l-5.693-3.163Zm5.634 4.274L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM5.693 10.21 0 13.372v-6.5l5.693 3.338ZM8 1.982C9.664.309 13.825 3.236 8 7 2.175 3.236 6.336.31 8 1.982Z" />
            </svg>

            <span>Thanks</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- end invitation -->
    <div style="
          max-width: 500px;
          margin: auto;
          position: fixed;
          left: calc(100% - 60px);
          right: 0;
          bottom: 60px;
          gap: 12px;
        " class="d-flex align-items-end flex-column px-3 pb-3">
      <!-- <button
          id="btnQrModal"
          onclick="showModal(qrModal)"
          class="btn btn-float"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            width="20"
            height="20"
          >
            <path
              fill-rule="evenodd"
              d="M3 4.875C3 3.839 3.84 3 4.875 3h4.5c1.036 0 1.875.84 1.875 1.875v4.5c0 1.036-.84 1.875-1.875 1.875h-4.5A1.875 1.875 0 0 1 3 9.375v-4.5zM4.875 4.5a.375.375 0 0 0-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 0 0 .375-.375v-4.5a.375.375 0 0 0-.375-.375h-4.5zm7.875.375c0-1.036.84-1.875 1.875-1.875h4.5C20.16 3 21 3.84 21 4.875v4.5c0 1.036-.84 1.875-1.875 1.875h-4.5a1.875 1.875 0 0 1-1.875-1.875v-4.5zm1.875-.375a.375.375 0 0 0-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 0 0 .375-.375v-4.5a.375.375 0 0 0-.375-.375h-4.5zM6 6.75A.75.75 0 0 1 6.75 6h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75A.75.75 0 0 1 6 7.5v-.75zm9.75 0A.75.75 0 0 1 16.5 6h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zM3 14.625c0-1.036.84-1.875 1.875-1.875h4.5c1.036 0 1.875.84 1.875 1.875v4.5c0 1.035-.84 1.875-1.875 1.875h-4.5A1.875 1.875 0 0 1 3 19.125v-4.5zm1.875-.375a.375.375 0 0 0-.375.375v4.5c0 .207.168.375.375.375h4.5a.375.375 0 0 0 .375-.375v-4.5a.375.375 0 0 0-.375-.375h-4.5zm7.875-.75a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zm6 0a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zM6 16.5a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zm9.75 0a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zm-3 3a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75zm6 0a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-.75a.75.75 0 0 1-.75-.75v-.75z"
              clip-rule="evenodd"
            />
          </svg>
        </button> -->
      <button id="btnMusic" onclick="playMusic()" class="btn btn-float">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
          <path fill-rule="evenodd"
            d="M19.952 1.651a.75.75 0 0 1 .298.599v14.053a3 3 0 0 1-2.176 2.884l-1.32.377a2.553 2.553 0 1 1-1.403-4.909l2.311-.66a1.5 1.5 0 0 0 1.088-1.442V6.994l-9 2.572v9.737a3 3 0 0 1-2.176 2.884l-1.32.377a2.553 2.553 0 1 1-1.402-4.909l2.31-.66a1.5 1.5 0 0 0 1.088-1.442V5.25a.75.75 0 0 1 .544-.721l10.5-3a.75.75 0 0 1 .658.122z"
            clip-rule="evenodd" />
        </svg>
      </button>
    </div>
    <!-- lightbox -->
    <div id="lightboxWrapper" class="lightbox-wrapper">
      <div class="lightbox-list"></div>
      <a href="#" id="lightboxCloseBtn" class="btn-lightbox">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 0 1 1.414 0L10 8.586l4.293-4.293a1 1 0 1 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 0 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 0 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 0-1.414z"
            clip-rule="evenodd" />
        </svg>
      </a>
      <div class="lightbox-navigation">
        <a href="#" id="lightboxPrevBtn" class="lightbox-arrow" data-index="0">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
          </svg>
        </a>
        <a href="#" id="lightboxNextBtn" class="lightbox-arrow" data-index="0">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
          </svg>
        </a>
      </div>
    </div>
    <!-- end lightbox -->
    <!-- startQRModal -->
    <div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="qrModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="height: 100%">
          <div style="
                width: 100%;
                aspect-ratio: 16/9;
                background-size: cover;
                background-position: center;
                background-image: url(images/ben.jpg);
              "></div>
          <div class="text-center py-4 px-4">
            <div style="
                  display: flex;
                  justify-content: space-between;
                  align-items: start;
                  gap: 12px;
                ">
              <div style="text-align: left">
                <strong>30 Jan 2023</strong>
                <br />
                <p>09:05 WITA</p>
                <p>-</p>
              </div>

            </div>
            <hr style="
                  border-style: dashed;
                  margin-top: 1rem;
                  margin-bottom: 1rem;
                  border: 0;
                  border-top: 1px solid rgba(0, 0, 0, 0.1);
                " />
            <div style="margin-bottom: 20px">
              <div style="color: #b2b2b2">Name</div>
              <div>
                <?php echo $namaundangan ?>
              </div>
            </div>
            <div style="margin-bottom: 20px">
              <div style="color: #b2b2b2">Group</div>
              <div>Nama Group</div>
            </div>
          </div>
          <button onclick="closeModal(qrModal)" type="button" class="btn btn-close">
            <svg xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- endQRModal -->
    <!-- startRSVPModal -->
    <div class="modal fade" id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModal" aria-hidden="true">
    </div>
    <!-- endRSVPModal -->
  </main>

  <div class="modal fade" id="notSupport" tabindex="-1" role="dialog" aria-labelledby="notSupport" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius: 0.8rem">
        <div class="modal-body text-center justify-content-center align-items-center">
          <h2>Pemberitahuan</h2>
          <p>
            Browser yang kamu gunakan mungkin kurang kompatibel. Beberapa
            fungsi undangan ini mungkin tidak dapat berjalan dengan baik. Kami
            merekomendasikan Chrome. Klik tombol dibawah ini untuk
            mendownload.
          </p>
          <div class="d-flex justify-content-center">
            <a href="https://apps.apple.com/id/app/google-chrome/id535886823" class="btn p-1" target="_BLANK">
              <img src="images/btn_app_store.png" alt="AppStore" height="40px" />
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.android.chrome&hl=in&gl=US" class="btn p-1"
              target="_BLANK">
              <img src="images/btn_play_store.png" alt="PlayStore" height="40px" />
            </a>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-outline-secondary btn-block rounded-pill" onclick="closeModal(notSupport)">
            Tetap Akses
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- start script -->
  <script src="js/app.js?v=210823"></script>
  <script src="plugins/splide@4.1.4/splide.min.js"></script>
  <script src="themes/themev2.js?v=210823"></script>
  <script>
    var notSupport = document.getElementById("notSupport");
    function checkBrowser() {
      if (
        navigator.userAgent.indexOf("UCBrowser") != -1 ||
        navigator.userAgent.indexOf("MiuiBrowser") != -1 ||
        navigator.userAgent.indexOf("OppoBrowser") != -1
      ) {
        showModal(notSupport);
        if (loader) {
          loader.style.display = "none";
        }
      }
    }
    checkBrowser(); var notyBody = t.barDom.querySelector(".noty_body");
    if (notyBody) {
      notyBody.parentNode.removeChild(notyBody);
    }
  </script>
  <!-- end script -->
  <script></script>
</body>

</html>