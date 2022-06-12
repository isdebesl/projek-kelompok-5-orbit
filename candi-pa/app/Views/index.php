<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Candi Indonesia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url() ?>/css/style.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
  <section class="head" id="home">
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?= base_url() ?>/img/lost-tourists-finding-way.jpg" alt="" />
        </div>
        <div class="swiper-slide">
          <img src="<?= base_url() ?>/img/lukas-fitria-adi-setiawan-o9zfhvV99Sw-unsplash0.jpg" alt="" />
        </div>
        <!-- Slides -->
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <div class="navbar d-flex justify-content-around align-items-center">
      <div class="icon col-3 d-flex justify-content-start align-items-center">
        <img src="<?= base_url() ?>/img/slice3.png" alt="" />
        <p>FC Engine</p>
      </div>
      <div class="text col-5">
        <ul class="d-flex justify-content-end">
          <li class="px-3" type="none"><a href="#home">Home</a></li>
          <li class="px-3" type="none"><a href="#content">About</a></li>
          <li class="px-3" type="none"><a href="#fine">Fine</a></li>
          <li class="px-3" type="none"><a href="#owner">Owner</a></li>
        </ul>
      </div>
    </div>
    <div class="header">
      <div class="container mx-auto">
        <h1>The Most Beautiful Thing in The World is, of Course, The World Itself.</h1>
        <div class="try">
          <p>Try Now</p>
          <div
            class="down d-flex justify-content-center align-items-center mx-auto border border-5 border-primary border-opacity-50">
            <a href=""><i class="fas fa-angle-down"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="content section" id="content">
    <h2>About</h2>
    <div class="h-content">
      <img src="<?= base_url() ?>/img/candi/bali-pagoda-indonesia.jpg" alt="" />
    </div>
    <div class="text">
      <h3>Candi Indonesia</h3>
      <p>
        Candi merupakan bangunan replika tempat tinggal para dewa yang sebenarnya, yaitu Gunung Mahameru. Karena itu, seni
        arsitekturnya dihias dengan
        berbagai macam ukiran dan pahatan berupa pola hias yang disesuaikan dengan alam Gunung Mahameru. Candi-candi dan pesan
        yang disampaikan lewat
        arsitektur, relief, serta arca-arcanya tak pernah lepas dari unsur spiritualitas, daya cipta, dan keterampilan para
        pembuatnya.
      </p>
    </div>
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide d-flex justify-content-evenly align-items-center">
          <div class="samping">
            <img src="<?= base_url() ?>/img/candi/apryan-widodo-9yIg3rV6sDM-unsplash.jpg" alt="" />
          </div>
          <div class="tengah">
            <img src="<?= base_url() ?>/img/candi/depati-allam-jy3ePiJ_FBs-unsplash.jpg" alt="" />
          </div>
          <div class="samping">
            <img src="<?= base_url() ?>/img/candi/famous-borobudur-temple-mungkid-indonesia.jpg" alt="" />
          </div>
        </div>
        <div class="swiper-slide d-flex justify-content-evenly align-items-center">
          <div class="samping">
            <img src="<?= base_url() ?>/img/candi/depati-allam-jy3ePiJ_FBs-unsplash.jpg" alt="" />
          </div>
          <div class="tengah">
            <img src="<?= base_url() ?>/img/candi/famous-borobudur-temple-mungkid-indonesia.jpg" alt="" />
          </div>
          <div class="samping">
            <img src="<?= base_url() ?>/img/candi/leo-chandra-ePgZdpLO_Vc-unsplash.jpg" alt="" />
          </div>
        </div>
        <div class="swiper-slide d-flex justify-content-evenly align-items-center">
          <div class="samping">
            <img src="<?= base_url() ?>/img/candi/famous-borobudur-temple-mungkid-indonesia.jpg" alt="" />
          </div>
          <div class="tengah">
            <img src="<?= base_url() ?>/img/candi/leo-chandra-ePgZdpLO_Vc-unsplash.jpg" alt="" />
          </div>
          <div class="samping">
            <img src="<?= base_url() ?>/img/candi/apryan-widodo-9yIg3rV6sDM-unsplash.jpg" alt="" />
          </div>
        </div>
        <div class="swiper-slide d-flex justify-content-evenly align-items-center">
          <div class="samping">
            <img src="<?= base_url() ?>/img/candi/leo-chandra-ePgZdpLO_Vc-unsplash.jpg" alt="" />
          </div>
          <div class="tengah">
            <img src="<?= base_url() ?>/img/candi/apryan-widodo-9yIg3rV6sDM-unsplash.jpg" alt="" />
          </div>
          <div class="samping">
            <img src="<?= base_url() ?>/img/candi/depati-allam-jy3ePiJ_FBs-unsplash.jpg" alt="" />
          </div>
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>
  </section>
  <section class="fine section" id="fine">
    <h2>Fine Candi</h2>
    <div class="image">
      <div class="h-fine">
        <img src="<?= base_url() ?>/img/candi/steffen-b-28joUilHigc-unsplash.jpg" alt="" class="img-preview" />
      </div>
    </div>
    <div class="fine-candi">
      <div class="serch">
        <form action="/Home/save" method="post" role="form" enctype="multipart/form-data">
          <?= csrf_field(); ?>
          <!-- <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02" />
            <label class="input-group-text" for="inputGroupFile02">-</label>
          </div> -->
          <div class="form-group">
            <div class="form-group row">
              <div class="col-sm-10">
                <div class="input-group mb-3 upload">
                  <input type="file" class="form-control" id="pro_image" name="pro_image" value="<?= old('pro_image'); ?>"
                    onchange="previewImg()">
                  <label class="input-group-text" for="pro_image">Upload</label>
                  <div class="invalid-feedback">
                    <?//= $validation->getError('pro_image'); ?>
                  </div>
                  <button type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>

        </form>
      </div>
      <div class="text">
        <h3>Search Result</h3>
        <table class="form" style="width: 100%">
          <tr class="align-top">
            <td><b>Nama</b></td>
            <td style="width: 2%">:</td>
            <td style="width: 82%">Candi Borobudur</td>
          </tr>
          <tr class="align-top">
            <td><b>Alamat</b></td>
            <td style="width: 1%">:</td>
            <td>Jl. Badrawati, Kw. Candi Borobudur, Borobudur, Kec. Borobudur, Kabupaten Magelang, Jawa Tengah. Rute</td>
          </tr>
          <tr class="align-top">
            <td><b>Jam Buka</b></td>
            <td style="width: 1%">:</td>
            <td>Setiap Hari, 06:30 - 16:30</td>
          </tr>
          <tr class="align-top">
            <td><b>Rating</b></td>
            <td style="width: 1%">:</td>
            <td>
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                class="fas fa-star-half-alt"></i>
              <span> /4.5</span>
            </td>
          </tr>
          <tr class="align-top">
            <td><b>Ulasan</b></td>
            <td style="width: 1%">:</td>
            <td>As of May 2022 the structure is not accessible to climb but still amazing to walk around and enjoy.</td>
          </tr>
        </table>
        <a href="">More Ulasan</a>
      </div>
    </div>
    <div class="image"></div>
  </section>
  <section class="owner section" id="owner">
    <h2>Owner</h2>
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide d-flex justify-content-around">
          <div class="satu">
            <img src="<?= base_url() ?>/img/user/slice1.png" alt="" />
            <h4>Adam Ramdan</h4>
            <p class="title">Desain & Web Development</p>
          </div>
          <div class="satu">
            <img src="<?= base_url() ?>/img/user/slice2.png" alt="" />
            <h4>Adam Ramdan</h4>
            <p class="title">Desain & Web Development</p>
          </div>
          <div class="dua">
            <img src="<?= base_url() ?>/img/user/slice3.png" alt="" />
            <h4>Adam Ramdan</h4>
            <p class="title">Desain & Web Development</p>
          </div>
        </div>
        <div class="swiper-slide d-flex justify-content-around">
          <div class="satu">
            <img src="<?= base_url() ?>/img/user/slice2.png" alt="" />
            <h4>Adam Ramdan</h4>
            <p class="title">Desain & Web Development</p>
          </div>
          <div class="satu">
            <img src="<?= base_url() ?>/img/user/slice3.png" alt="" />
            <h4>Adam Ramdan</h4>
            <p class="title">Desain & Web Development</p>
          </div>
          <div class="dua">
            <img src="<?= base_url() ?>/img/user/slice1.png" alt="" />
            <h4>Adam Ramdan</h4>
            <p class="title">Desain & Web Development</p>
          </div>
        </div>
        <div class="swiper-slide d-flex justify-content-around">
          <div class="satu">
            <img src="<?= base_url() ?>/img/user/slice3.png" alt="" />
            <h4>Adam Ramdan</h4>
            <p class="title">Desain & Web Development</p>
          </div>
          <div class="satu">
            <img src="<?= base_url() ?>/img/user/slice1.png" alt="" />
            <h4>Adam Ramdan</h4>
            <p class="title">Desain & Web Development</p>
          </div>
          <div class="dua">
            <img src="<?= base_url() ?>/img/user/slice2.png" alt="" />
            <h4>Adam Ramdan</h4>
            <p class="title">Desain & Web Development</p>
          </div>
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <!-- <div class="swiper-scrollbar"></div> -->
    </div>
  </section>
  <section class="footer">
    <h5>Copyright &copy; By Ar-Kun 2022</h5>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script type="module">
  import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js';

  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
  </script>
  <script>
  function previewImg() {

    const image = document.querySelector('#pro_image');
    const imgLabel = document.querySelector('.input-group-text');
    const imgPreview = document.querySelector('.img-preview');

    imgLabel.textContent = image.files[0].name;

    const fileImage = new FileReader();
    fileImage.readAsDataURL(image.files[0])

    // imgLabel.setAttribute('style', 'display: hidden;');

    fileImage.onload = function(e) {
      imgPreview.src = e.target.result;
    }
  }
  </script>
</body>

</html>