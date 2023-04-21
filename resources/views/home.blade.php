<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav class="navbar color-primary">
        <div class="container">
                <span class="margin-logo navbar-brand text-light fw-bold logo-size">
                    Mas<span class="logo-bro">Bro</span>
                </span>
                <a href="#download" class="btn bg-light text-dark px-2 rounded-pill fw-bold">Download now!</a>
        </div>
    </nav>

    <section class="jumbotron color-primary">
        <div class="container text-center">
            <div class="row justify-content-around align-items-center">
              <div class="col-6">
                  <img src="{{asset('images/hero-container.png')}}" class="img-fluid hero-margin" alt="...">
              </div>
              <div class="col-6 d-flex justify-content-center align-items-center text-light">
                <h1 class="fw-bold text-end font-jumbotron">Mau ke kantin <br>tapi mager?<br>ada
                    <span class="text-light fw-bold">
                    Mas<span class="logo-bro">Bro</span>
                </span></h1>
              </div>
            </div>
          </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150"><path fill="#274F73" fill-opacity="1" d="M0,128L60,128C120,128,240,128,360,117.3C480,107,600,85,720,74.7C840,64,960,64,1080,74.7C1200,85,1320,107,1380,117.3L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

    <section class="jumbotron">
        <div class="container text-center mb-5">
            <h1 class="mb-5 fw-bold">About Me</h1>
            <div class="d-flex justify-content-around">
                <div class="d-flex flex-column text-start align-items-center justify-content-center">
                    <h4 style="word-wrap: break-word">Masbro merupakan aplikasi berbasis mobile yang <br> memungkinkan penggunanya untuk melakukan <br> pembelian makanan dan minuman pada kantin Politeknik <br> Elektronika Negeri Surabaya. Selain memesan makanan <br> dan minuman, pengguna juga bisa menentukan kapan <br> makanan akan diantar dan dimana akan diantar. <br> Pembayaran pada pesanan akan dilakukan ketika <br> pesanan sudah datang. Aplikasi ini merupakan wujud <br> nyata dalam meningkatkan efisiensi pemesanan makanan <br> oleh dosen Politeknik Elektronika Negeri Surabaya.</h4>
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3 d-flex align-items-center justify-content-center mb-3" style="height: 250px; width: 250px">
                        <img src="{{asset('images/pict-about.png')}}" alt="icon-food-cart" width="350px">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="jumbotron">
        <div class="container text-center mb-5 mt-5">
            <h1 class="mb-5 fw-bold">What we serve</h1>
            <div class="d-flex justify-content-around">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="rounded-circle bg-download p-3 d-flex align-items-center justify-content-center mb-3" style="height: 150px; width: 150px">
                        <img src="{{asset('images/Food-Cart.png')}}" alt="icon-food-cart" width="100px">
                    </div>
                    <h4 style="word-wrap: break-word">Pilih Menu <br> Sesukamu</h4>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="rounded-circle bg-download p-3 d-flex align-items-center justify-content-center mb-3" style="height: 150px; width: 150px">
                        <img src="{{asset('images/Future.png')}}" alt="icon-food-cart" width="100px">
                    </div>
                    <h4 style="word-wrap: break-word">Jam Antar <br> Flexibel</h4>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="rounded-circle bg-download p-3 d-flex align-items-center justify-content-center mb-3" style="height: 150px; width: 150px">
                        <img src="{{asset('images/Bribery.png')}}" alt="icon-food-cart" width="100px">
                    </div>
                    <h4 style="word-wrap: break-word">Pembayaran <br> Di Tempat</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="jumbotron" id="download">
        <div class=" text-center">
            <div class="parent-deskripsi">
                <div class="text-start text-light">
                    <h2>
                        Get start With <span class="text-light fw-bold">
                            <br>Mas<span class="logo-bro">Bro</span>
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis est id saepe quas repudiandae earum perferendis illo sapiente consequuntur sequi ut, aliquam aliquid. Inventore earum, eius quam sapiente dolor suscipit!
                    </p>
                    <div class="icon-download">
                        <a href="#" class="btn text-light px-2 rounded-pill fw-bold bg-download">Download now!</a>
                    </div>
                </div>
                <div class="child-gambar">
                    <img src="{{asset('images/phone-download.png')}}" class="img-fluid hero-margin" alt="...">
                </div>
            </div>
        </div>
    </section>

    <section class="jumbotron">
        <div class="container text-center mb-5 mt-5">
            <h1 class="mb-5 fw-bold">What Customer Says</h1>
            <div class="d-flex justify-content-around">
                <div class="d-flex flex-column text-start align-items-center justify-content-center">

                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-center mb-3" style="height: 600px; width: 850px">
                        <img src="{{asset('images/Customer-says.png')}}" alt="icon-food-cart" width="889px">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <p>&copy; 2023 My Website. All Rights Reserved.</p>
              </div>
              <div class="col-md-6">
                 <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Contact</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                 </ul>
              </div>
           </div>
        </div>
     </footer>
</body>
</html>
