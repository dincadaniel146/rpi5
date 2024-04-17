<!DOCTYPE html>
<html lang="">
    <head>
    <meta charset="UTF-8">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Bun venit !</title>
    </head>
    <body>
      <!-- Mesaj de confirmare -->
    @if(session('success'))
   <div id="mesaj-confirmare" class="alert alert-success " role="alert">
  <strong>{{session('success')}}</strong>
</div>
<!-- Mesaj de eroare -->
@elseif(session('error'))
<div id="mesaj-confirmare" class="alert alert-danger " role="alert">
  <strong>{{session('error')}}</strong>
</div>
@endif

    <nav class="navbar  navbar-expand-lg navbar-light" style="background: linear-gradient(to left, #eff2f7, #c7d0d9);">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/pngegg.png') }}" alt="Logo" width="190" height="50" class="d-inline-block align-text-top">
    </a>

    <!-- Navbar toggler button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar options -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#noutati">Noutati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#os">Sistemul de operare</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#proiecte">Proiecte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#contact">Contact</a>
        </li>
        <!-- Add more navbar options as needed -->
      </ul>
    </div>
  </div>
</nav>





<header class="bg-dark py-5 position-relative" >
  <!-- Background Image -->
  <img class="position-absolute top-0 start-0 w-100 h-100 z-index-0" src="{{ asset('img/imaginebackground.jpg') }}" alt="Description of my image">
  <div class="container px-5 position-relative">
    <div class="row gx-5 align-items-center justify-content-center">
      <div class="col-lg-6 col-xl-5 col-xxl-4">
        <div class="my-5 text-center text-xl-start position-relative">
          <h1 class="display-5 fw-bolder text-black mb-2 z-index-1">Raspberry Pi 5</h1>
          <p class="lead fw-bold text-black-50 mb-4 z-index-1">Cu viteza de 2-3 ori mai mare decât generația anterioară și având siliciu proiectat intern pentru cea mai bună performanță posibilă, experiența Raspberry Pi este redefinită.</p>
        </div>
      </div>
      <div class="col-lg-6 col-xl-7 col-xxl-8 text-center">
        <!-- Raspberry Pi Image -->
        <img id="parallax-img" class="img-fluid my-5 z-index-1" src="https://assets.raspberrypi.com/static/c671804c05a51efc4e3c2a1bdcbafbcf/e8238/raspberry-pi-5.webp" alt="Raspberry Pi 5" height="20" width="440" />
      </div>
    </div>
    
   
  </div>
</header>



<div class="bg-dark py-5 position-relative" style="background-image: url('https://static.vecteezy.com/system/resources/previews/015/279/252/original/viva-magenta-background-abstract-wave-curved-wavy-line-smooth-stripe-red-deep-pink-raspberry-gradient-color-horizontal-illustration-vector.jpg'); height:600px;">
<div class="card mx-auto" style="width: 30rem; height:320px; border-radius: 30px; " >

  <div class="card-body">
    
    <h1 class="text-center" style="padding-bottom: 50px;">
      <span style="color: #8c0b0b; font-weight: lighter;">De ce</span> 
      <span style="color: #8c0b0b; font-weight: bold;">Raspberry Pi?</span>
    </h1>
    <p class="card-text text-center lead fw-bold text-black-100 mb-4">Raspberry Pi este computerul tău mic și puternic. Dacă aveți nevoie de un hub inteligent pentru acasă, de un computer de personal sau dacă doriți să vizionați un film, puteți face totul cu Raspberry Pi.</p>
    <div class="d-flex justify-content-center">

    <a href="https://www.raspberrypi.com/products/raspberry-pi-5/" class="btn btn-danger ">Cumpara acum</a>
</div>
  </div>
</div>
</div>




<div id="noutati" class="container"style="padding-top: 100px; ">
  <div class="row align-items-center " style="padding-top:50px">
    <div class="col-md-6">
      <h2>RP1</h2>
    <p class=" lead fw-bold text-black-100 mb-4">Raspberry Pi 5 este construit folosind controlerul I/O RP1, un pachet care conține siliciu proiectat intern la Raspberry Pi. USB 3 are o lățime de bandă totală mai mare, pentru viteze de transfer mult mai rapide. Conectorii pentru cameră și afișaj DSI sunt interschimbabili, astfel încât puteți avea unul din fiecare sau două la fel.</p>
    </div>
    <div class="col-md-6">       
      <img src="https://assets.raspberrypi.com/static/30b0a05490a436a282259a767caba3fb/83b0f/rp1.webp" style="border-radius: 10px;" width="500" height="350" alt="Image 1">
    </div>
  </div>
  <div class="row align-items-center" style="padding-top:200px">
    <div class="col-md-6 order-md-2" >
      <h2>Mai mult de două ori mai rapid</h2>
      <p class=" lead fw-bold text-black-100 mb-4">Raspberry Pi 5 dispune de procesorul quad-core Arm Cortex A76 Broadcom BCM2712 la 2,4 GHz, ceea ce îl face de până la trei ori mai rapid decât generația anterioară. Cu variante RAM de până la 8 GB, aceasta este cea mai rapidă și mai fluidă experiență Raspberry Pi de până acum.</p>
    </div>
    <div class="col-md-6 order-md-1">
      <img src="https://assets.raspberrypi.com/static/76ec39ad312906148a43b0e5e1ab0e36/83b0f/soc.webp" style="border-radius: 10px;" width="500" height="350" alt="Image 2">
    </div>
  </div>


  <div class="row align-items-center" style="padding-top:200px;padding-bottom:200px;">
    <div class="col-md-6 order-md-1" >
      <h2>PCI express</h2>
      <p class=" lead fw-bold text-black-100 mb-4">Această adăugare la Raspberry Pi vă permite să conectați un SSD M.2 la Raspberry Pi, oferindu-vă un transfer rapid de date și o pornire super-rapidă.</p>
    </div>
    <div class="col-md-6 order-md-2">
      <img src="https://assets.raspberrypi.com/static/6fa72be44172792c5541c84c9ef467ef/83b0f/pci-express.webp" style="border-radius: 10px;" width="500" height="350" alt="Image 2">
    </div>
  </div>
</div>


<div id="os" class="bg-dark py-5 position-relative" style="background: rgb(2,0,36); background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(8,31,135,1) 42%, rgba(7,43,143,1) 46%, rgba(7,52,149,1) 49%, rgba(6,68,159,1) 54%, rgba(0,212,255,1) 100%); background-position: bottom;">

  <div class="container px-5 position-relative">
    <div class="row gx-5 align-items-center justify-content-center">
      <div class="col-lg-6 col-xl-5 col-xxl-4">
        <div class="my-5 text-center text-xl-start position-relative">
          <h1 class="display-5 fw-bolder text-white mb-2 z-index-1">Sistemul de operare Raspberry PI OS</h1>
          <p class="lead fw-bold text-white-50 mb-4 z-index-1">Raspberry Pi are nevoie de un sistem de operare pentru a funcționa. Asta este. Sistemul de operare Raspberry Pi (denumit anterior Raspbian) este sistemul nostru de operare acceptat oficial. </p>
          <a href="https://www.raspberrypi.com/software/operating-systems/"><button type="button" action="" class="btn btn-primary">Descarca</button></a>

        </div>
      </div>
      <div class="col-lg-6 col-xl-7 col-xxl-8 text-center">
        <!-- Raspberry Pi Image -->
        <img class="img-fluid my-5 z-index-1" src="https://assets.raspberrypi.com/static/opengraph-6d80de9a444335c577028951fd1bab78.png" style="border-radius: 50px;" alt="Raspberry Pi 5" >
      </div>
    </div>
  </div>
</div>


<div id="proiecte" class="bg-dark py-5 position-relative" style="background-image: url('https://w0.peakpx.com/wallpaper/272/381/HD-wallpaper-minimalist-forms-colores-heart-pastel-pink-white.jpg')">
    <h1 class="text-center" style="padding-bottom: 10px;">
        <span style="font-weight: light;">Proiecte interesante care folosesc Raspberry Pi</span>
    </h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="row row-cols-1 row-cols-md-3 g-4 g-xl-4">
                <div class="col d-flex justify-content-center">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="https://www.raspberrypi.com/tutorials/tutorials/images/hotspot/hero.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Găzduiește un hotspot Wi-Fi cu un Raspberry Pi</h5>
                            <p class="card-text">Acest hotspot Wi-Fi găzduit de Raspberry Pi se conectează la o rețea Wi-Fi pentru oaspeți, apoi rulează o rețea Wi-Fi privată separată pentru toate dispozitivele dvs.</p>
                            <a href="#" class="btn btn-primary">Mai mult</a>
                        </div>
                    </div>
                </div>
  <div class="col d-flex justify-content-center">
    <div class="card text-center" style="width: 18rem;">
      <img src="https://www.raspberrypi.com/tutorials/tutorials/images/MAGPI_ROUTER_002-800x533.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Blocați reclamele acasă cu Pi-hole</h5>
        <p class="card-text">Pi-hole blochează reclamele pe internet de la router, eliminând reclamele care absorb lățimea de bandă și care invadează confidențialitatea din întreaga rețea.</p>
        <a href="#"> Mai mult</a>
      </div>
    </div>
  </div>
  <div class="col d-flex justify-content-center">
    <div class="card text-center" style="width: 18rem;">
      <img src="https://www.raspberrypi.com/tutorials/tutorials/images/Camera-Module-3-webcam-800x533.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cameră web USB Raspberry Pi plug-and-play</h5>
        <p class="card-text">Camerele web au, în general, calitate scăzută și rezoluție scăzută, așa că am realizat un tutorial pentru a vă arăta cum să vă construiți propria cameră web Raspberry Pi de înaltă calitate.</p>
        <a href="#"> Mai mult</a>
      </div>
    </div>
  </div>
  <div class="col d-flex justify-content-center">
    <div class="card text-center" style="width: 18rem;">
      <img src="https://www.raspberrypi.com/tutorials/tutorials/images/Antenna-scaled.jpg" class="card-img-top" alt="...">
      <div class="card-body" style="height:240px;">
        <h5 class="card-title">Construiește-ți propria stație de recepție prin satelit meteo</h5>
        <p class="card-text">Construiți o stație de sol prin satelit cu Raspberry Pi și colectați date din spațiu.</p>
        <a href="#"> Mai mult</a>
      </div>
    </div>
  </div>
  <div class="col d-flex justify-content-center">
    <div class="card text-center" style="width: 18rem;">
      <img src="https://www.raspberrypi.com/tutorials/tutorials/images/Babbage-800x533.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Construiește-ți propriul tracker de zbor Raspberry Pi</h5>
        <p class="card-text">Primiți semnale de la transponderele aeronavei și urmăriți zborurile cu un Raspberry Pi 3 A+ și un radio USB definit cu software la preț redus.</p>
        <a href="#"> Mai mult</a>
      </div>
    </div>
  </div>
  <div class="col d-flex justify-content-center">
    <div class="card text-center" style="width: 18rem;">
      <img src="https://www.raspberrypi.com/tutorials/tutorials/images/MAGIC-MIRROR-800x533.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cum să construiești o oglindă inteligentă super-subțire</h5>
        <p class="card-text">O oglindă inteligentă este un proiect de vis pentru mulți producători. Tutorialul nostru pas cu pas aduce această construcție impresionantă la îndemână.</p>
        <a href="#"> Mai mult</a>
      </div>
    </div>
  </div>
</div>
</div>

</div>
</div>





<div id="contact" class="container-fluid d-flex flex-column justify-content-center align-items-center" style="background: linear-gradient(to left, #eff2f7, #c7d0d9); height: 50rem;">
  <div class="container">
    <div style="padding-top:100px;">
      <h1 class="text-center">Abonați-vă la Raspberry Pi pentru rezumatul săptămânal al actualizărilor de produse și a proiectelor uimitoare</h1>
    </div>
    <form action="{{route('abonare')}}" method="POST" style="padding-top: 100px;">
    @csrf
      <div class="d-flex flex-column align-items-center">
        <div class="form-group" style="padding-bottom: 20px; width: 300px;">
          <label for="nume">Nume</label>
          <input type="text" class="form-control" id="nume"  name="nume" placeholder="Introduceti numele">
        </div>
        <div class="form-group" style="padding-bottom: 20px; width: 300px;">
          <label for="email">Adresa de mail</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Introduceti adresa de mail">
          <small id="emailHelp" class="form-text text-muted">Nu vom împărtăși e-mailul tău cu nimeni altcineva.</small>
        </div>
      </div>
      <div class="d-flex justify-content-center" style="padding-top: 20px;">
        <button type="submit" class="btn btn-primary">Trimite</button>
      </div>
    </form>
  </div>
  <div style="padding-bottom: 100px; padding-top: 50px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2446.135554078381!2d0.13773690000000002!3d52.186408699999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d87a794cf8fd89%3A0xd779f83bdc90b2fa!2sHills%20Rd%2C%20Cambridge%2C%20UK!5e0!3m2!1sen!2sro!4v1712255527493!5m2!1sen!2sro" width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>






 <footer class="bg-dark py-4 mt-auto" style="background: linear-gradient(to left, #eff2f7, #c7d0d9);">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-black">Copyright &copy; Raspberry Pi Foundation </div></div>
                    <div class="col-auto">
                        <a class="link-dark small" href="#!">Protectia datelor</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-dark small" href="#!">Termeni si conditii</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-darak small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <button type="button" class="btn btn-danger btn-floating btn-lg"  id="btn-back-to-top" style="position: fixed; bottom: 20px; right: 20px; display: none; width: 50px; height: 50px; border-radius: 50%; padding: 10px;">
  <h1 style="font-size: 20px; margin: 0;"> ^</h1>
</button>

</body>
</html>
<script>
//parallax
document.addEventListener('mousemove', parallax);

function parallax(e) {
  const img = document.getElementById('parallax-img');
  const speed = 10;

  const x = (window.innerWidth - e.pageX * speed) / 100;
  const y = (window.innerHeight - e.pageY * speed) / 100;

  img.style.transform = `translate(${x}px, ${y}px)`;
}

    </script>
    <script>
let mybutton = document.getElementById("btn-back-to-top");

// Cand derulam 20px din partea de sus a paginii afisam butonul
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// Inapoi sus
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
        </script>
        <script>
          //timeout alerta dupa 4s
          document.addEventListener('DOMContentLoaded', function(){
            const mesajconfirmare=document.getElementById('mesaj-confirmare');
            mesajconfirmare.style.display='block';
            setTimeout(function(){
              mesajconfirmare.style.display='none';
            }, 4000);
          });
          </script>