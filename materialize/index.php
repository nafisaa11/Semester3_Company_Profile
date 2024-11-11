<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- MY CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body id="home" class="indigo lighten-5 scrollspy">

  <!-- NAVBAR -->
  <div class="navbar-fixed">
    <nav class="indigo darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo"><i class="material-icons">house</i>Dream House</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#about">About Us</a></li>
            <li><a href="#clients">Clients</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portofolio">Journey</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>



  <!-- SIDE NAVBAR -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#about">About Us</a></li>
    <li><a href="#clients">Clients</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#portofolio">Journey</a></li>
    <li><a href="#contact">Contact Us</a></li>

  </ul>

  <!-- SLIDER -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/1.jpg">
        <div class="caption center-align">
          <h1>Dream House</h1>
          <h5 class="light grey-text text-lighten-3">Mewujudkan Rumah Impian Anda, Bersama Kami</h5>
        </div>
      </li>
      <li>
        <img src="img/3d-house-model-with-modern-architecture.jpg">
        <div class="caption left-align">
          <h1>Dream House</h1>
          <h5 class="light grey-text text-lighten-3">Solusi Tepat untuk Properti Idaman</h5>
        </div>
      </li>
      <li>
        <img src="img/3d-house-model-with-modern-architecture (1).jpg">
        <div class="caption right-align">
          <h1>Dream House</h1>
          <h5 class="light grey-text text-lighten-3">Menghubungkan Anda dengan Hunian Terbaik</h5>
        </div>
      </li>
      <li>
        <img src="img/3d-rendering-house-model.jpg">
        <div class="caption center-align">
          <h1>Dream House</h1>
          <h5 class="light grey-text text-lighten-3">Pilihan Tepat untuk Investasi Properti Anda</h5>
        </div>
      </li>
    </ul>
  </div>

  <!-- About Us -->

  <section id="about" class="about scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center indigo-text text-darken-4">About Us</h3><br>
        <div class="col m6 light">
          <h5>We are Professional</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, fugiat quidem ea magni, dolore nostrum ad
            et doloremque voluptates rerum culpa tempore, deleniti provident quos! A ipsum ut et debitis minus id vero
            doloribus quo, deleniti ab tempore esse mollitia illum quae neque temporibus, sit tempora velit dicta beatae
            minima!</p>
        </div>
        <div class="col m6 light">
          <h5>Achievement History</h5>
          <p>PEMASARAN PROPERTI</p>
          <div class="progress">
            <div class="determinate indigo darken-4" style="width: 90%"></div>
          </div>
          <p>KONSULTASI PROPERTI</p>
          <div class="progress">
            <div class="determinate indigo darken-4" style="width: 97%"></div>
          </div>
          <p>PENYEWAAN PROPERTI</p>
          <div class="progress">
            <div class="determinate indigo darken-4" style="width: 85%"></div>
          </div>

        </div>
      </div>
    </div>
    </div>
  </section>


  <!-- CLIENTS -->

  <section id="clients" class="clients-container scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center indigo-text text-darken-4">Our Clients</h3><br><br>
        <div class="col m3 s12">
          <div class="photo">
            <img src="img/ikea.png" class="responsive-img materialboxed">
          </div>
        </div>
        <div class="col m3 s12">
          <div class="photo">
            <img src="img/indosat.png" class="responsive-img materialboxed">
          </div>
        </div>
        <div class="col m3 s12">
          <div class="photo">
            <img src="img/mandiri.png" class="responsive-img materialboxed">
          </div>
        </div>
        <div class="col m3 s12">
          <div class="photo">
            <img src="img/gojek.png" class="responsive-img materialboxed">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m3 s12">
          <div class="photo">
            <img src="img/tokopedia.png" class="responsive-img materialboxed">
          </div>
        </div>
        <div class="col m3 s12">
          <div class="photo">
            <img src="img/traveloka.png" class="responsive-img materialboxed">
          </div>
        </div>
        <div class="col m3 s12">
          <div class="photo">
            <img src="img/bni.png" class="responsive-img materialboxed">
          </div>
        </div>
        <div class="col m3 s12">
          <div class="photo">
            <img src="img/bca.png" class="responsive-img materialboxed">
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- PARALAX -->

  <div id="paralax" class="parallax-container scrollspy">
    <div class="parallax"><img src="img/member.jpg"></div>

    <div class="container clients ">
      <h3 class="center white-text"></h3> <br><br>
      <!-- <div class="row">
        <div class="col m4  s12 center">
          <img src="img/gojek.png" alt="gojek">
        </div>
        <div class="col m4 s12 center">
          <img src="img/tokopedia.png" alt="gojek">
        </div>
        <div class="col m4 s12 center">
          <img src="img/traveloka.png" alt="gojek">
        </div> -->
    </div>
  </div>
  </div>


  <!-- SERVICE -->

  <section id="services" class="services indigo darken-4 scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center white-text">Our Service</h3>
        <div class="col m4 s12">
          <div class="card-panel center indigo lighten-5 ">
            <i class="material-icons medium">attach_money</i>
            <h5>Pemasaran Properti</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptates.</p>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel center indigo lighten-5 ">
            <i class="material-icons medium">business_center</i>
            <h5>Konsultasi Properti</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptates.</p>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel center indigo lighten-5 ">
            <i class="material-icons medium">alarm_add</i>
            <h5>penyewaan Properti</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptates.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PORTOFOLIO -->


  <section id="portofolio" class="portofolio scrollspy">
    <div class="container">
      <div class="row">
        <h3 class=" center indigo-text text-darken-4">Our Journey</h3><br><br>
        <h5 class="indigo-text text-darken-4">Grand Haven Elite Housing</h5>
        <div class="col m3 s12">
          <div class="card-panel center">
            <img src="img/perum/p1.jpg" class="responsive-img materialboxed">
            <h5><a href=""></a>Grade Special</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptates.</p>
          </div>
        </div>
        <div class="col m3 s12">
          <div class="card-panel center">
            <img src="img/perum/p2.jpg" class="responsive-img materialboxed">
            <h5>Tipe A New</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptates.</p>
          </div>
        </div>
        <div class="col m3 s12">
          <div class="card-panel center">
            <img src="img/perum/p3.jpg" class="responsive-img materialboxed">
            <h5>Tipe A</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptates.</p>
          </div>
        </div>
        <div class="col m3 s12">
          <div class="card-panel center">
            <img src="img/perum/p4.jpg" class="responsive-img materialboxed">
            <h5>Tipe B New</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptates.</p>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <h5 class="indigo-text text-darken-4">Surya Indah Apartment</h5>
        <div class="col m3 s12">
          <div class="card-panel center">
            <img src="img/apart/a1.jpg" class="responsive-img materialboxed">
            <h5>Living Room Special Design</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptates.</p>
          </div>
        </div>
        <div class="col m3 s12">
          <div class="card-panel center">
            <img src="img/apart/a2.jpg" class="responsive-img materialboxed">
            <h5>Minimalize Special Room</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptates.</p>
          </div>
        </div>
        <div class="col m3 s12">
          <div class="card-panel center">
            <img src="img/apart/a3.jpg" class="responsive-img materialboxed">
            <h5>Modern Kitchen Set</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptates.</p>
          </div>
        </div>
        <div class="col m3 s12">
          <div class="card-panel center">
            <img src="img/apart/a4.jpg" class="responsive-img materialboxed">
            <h5>Warn Minimize Living Room</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, voluptates.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACK US -->

  <section id="contact" class="contact indigo darken-4 scrollspy">
    <div class="container">
      <h3 class="light white-text center">Contact Us</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel indigo lighten-5  center light">
            <i class="material-icons">email</i>
            <h5>Contact</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos error tempora aperiam in esse, eos
              obcaecati magni odit! Animi, cupiditate.</p>
          </div>
          <ul class="collection with-header light">
            <li class="collection-header center indigo lighten-5 ">
              <h5>Our Office</h5>
            </li>
            <li class="collection-item indigo lighten-5 ">Politeknik Elektronika Negeri Surabaya</li>
            <li class="collection-item indigo lighten-5 ">Jl. Raya ITS - Kampus PENS, Sukolilo, Surabaya</li>
            <li class="collection-item indigo lighten-5 ">Jawa Timur</li>
          </ul>
        </div>

        <div class="col m7 s12">
          <div class="card-panel indigo lighten-5 light">
            <h5 class="center">Please Fill Out This Form</h5>
            <form id="contactForm" action="">
              <div class="input-field">
                <input type="text" name="name" id="name" class="validate">
                <label for="name">Name</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="text" name="phone" id="phone">
                <label for="phone">Phone Number</label>
              </div>
              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                <label for="message">Textarea</label>
              </div>
              <button class="btn waves-effect indigo darken-4" type="submit" name="submit">Submit
                <i class="material-icons right">send</i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br><br><br>

  <!-- FOOTER -->

  <footer class="page-footer indigo darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Dream House</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum eveniet
            debitis delectus omnis ipsa magni commodi nihil doloremque repellendus amet!</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Quice Acces</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#about">About Us</a></li>
            <li><a class="grey-text text-lighten-3" href="#clients">Clients</a></li>
            <li><a class="grey-text text-lighten-3" href="#services">Services</a></li>
            <li><a class="grey-text text-lighten-3" href="#portofolio">Jurney</a></li>
            <li><a class="grey-text text-lighten-3" href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center">
        Jauharotun Nafisah D3 IT B PENS - Build With ❤️ -
      </div>
    </div>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 600,
      transition: 600,
      interval: 3000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50
    });



    // Cek status login dari Local Storage atau Cookie
    function checkLogin() {
      return localStorage.getItem('loggedIn') === 'true'; // Sesuaikan dengan metode penyimpanan status login
    }

    document.querySelectorAll('#contactForm input, #contactForm textarea').forEach(function (element) {
      element.addEventListener('focus', function (event) {
        if (!checkLogin()) {
          // Redirect ke halaman login jika belum login
          window.location.href = 'login2.php';
        }
      });
    });






  </script>
</body>

</html>