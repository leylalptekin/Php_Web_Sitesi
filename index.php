<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a7be095562.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

</head>
<body>
    <section id="menu">
        <div id="logo">Mendis</div>
        <nav>
            <a href=""><i class="fa-solid fa-house-user ikon"></i>Anasayfa</a>
            <a href=""><i class="fa-solid fa-circle-info ikon"></i></i>Hakkımda</a>
            <a href=""><i class="fa-solid fa-graduation-cap ikon"></i>Yetenekler</a>
            <a href=""><i class="fa-solid fa-people-group ikon"></i>Ekip</a>
            <a href=""><i class="fa-solid fa-phone ikon"></i>İletişim</a>
        </nav>
    </section>
    <section id="banner">
        <div id="black"></div>
    </section>
    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container">
            <div id="sol">
                <h5 id="h5Sol">
                    Lorke, ipsum dolor sit amet consectetur adipisicing elit.
                    <br> İsmail Bilener
                </h5>
            </div>
            <div id="sag">
                <span>M</span>
                <p id="psag">
                    endis ipsum dolor sit amet consectetur adipisicing elit. Quisquam vero non quasi fuga! Consectetur fugiat, ipsum aspernatur, voluptas officiis nisi sint aperiam sequi esse, sapiente modi suscipit saepe eveniet hic?
                </p>
            </div>
            <img src="container.jpg" alt=""
            class="img-fluid mt100">
            <p id="pSon">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium recusandae voluptates, animi necessitatibus accusantium minima odit quod magnam quos est, laborum ex dolore repudiandae, expedita qui? Natus quaerat voluptatum inventore!</p>
        </div>
    </section>
    <section id="yetenekler">
        <div class="container">

            <h3>Beceriler</h3>

            <div class="owl-carousel owl-theme">

                <div class="card item" data-merge=1.5>
                    <img src="yetenek.jpg" alt="" class="img-fluid">
                    <h5 class="h5Baslik">HTML5</h5>
                    <p class="cardP">Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="card item" data-merge=1.5>
                    <img src="yetenek.jpg" alt="" class="img-fluid">
                    <h5 class="h5Baslik">HTML5</h5>
                    <p class="cardP">Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="card item" data-merge=1.5>
                    <img src="yetenek.jpg" alt="" class="img-fluid">
                    <h5 class="h5Baslik">HTML5</h5>
                    <p class="cardP">Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="card item" data-merge=1.5>
                    <img src="yetenek.jpg" alt="" class="img-fluid">
                    <h5 class="h5Baslik">HTML5</h5>
                    <p class="cardP">Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="card item" data-merge=1.5>
                    <img src="yetenek.jpg" alt="" class="img-fluid">
                    <h5 class="h5Baslik">HTML5</h5>
                    <p class="cardP">Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="card item" data-merge=1.5>
                    <img src="yetenek.jpg" alt="" class="img-fluid">
                    <h5 class="h5Baslik">HTML5</h5>
                    <p class="cardP">Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">Ekip</h3>

            <div class="sutun">

                <img src="photo.jpg" alt="" class="img-fluid oval">

                <h4 class="ekipisim">İsmail Bilener</h4>
                <p class="ekipP">Yazılım Mühendisi Ekip Lideri</p>

                <div class="ekipSocial">
                    <a href=""><i class="fa-brands fa-facebook social"></i></a>
                    <a href=""><i class="fa-brands fa-square-twitter social"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin social"></i></a>
            </div>
        </div>

    </section>
    
    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>

            <form action="html.php" method="post">
            <div id="iletisimSeffaf">
                <div id="formgrup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">

                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">

                    </div>
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="Mail Adresiniz" required class="form-control">

                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                    </div>
                    <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Mesaj Giriniz" required class="form-control">
                    </textarea>
                    <input type="submit" value="Gönder">
                </div>

                <div id="adress">
                    <h4 id="adresbaslik">Adres : </h4>
                    <p class="adresP">Ulus Mahallesi</p>
                    <p class="adresP">Selvi Sokak No : 11/2</p>
                    <p class="adresP">531 291 43 57</p>
                    <p class="adresP">Email : bilenerr@outlook.com</p>
                </div>
            </div>
            </form>

            <footer>
                <div id="copyright">2022 | Tüm Hakları Saklıdır</div>
                <div id="socialfooter">
                    <a href=""><i class="fa-brands fa-facebook social"></i></a>
                    <a href=""><i class="fa-brands fa-square-twitter social"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin social"></i></a>
                </div>

                <a href="#menu"><i class="fa-solid fa-circle-up" id="up"></i></a>
            </footer>

        </div>
    </section>

    <script
  src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
  integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA="
  crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="script.js"></script>

</body>
</html>

<?php
    include("baglanti.php");

    if(isset($_POST["isim"] ,$_POST["tel"] ,$_POST["mail"] ,$_POST["konu"],$_POST["mesaj"]))
    {
        $adsoyad=$_POST["isim"];
        $telefon=$_POST["tel"];
        $email=$_POST["mail"];
        $konu=$_POST["konu"];
        $mesaj=$_POST["mesaj"];
    }

    $ekle="INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

    if($baglan->query($ekle)==TRUE)
    {
        echo "<script>alert('Mesajınız başarılı ile gönderilmiştir')</script>";
    }
    else
    {
        echo "<script>alert('Mesajınız gönderilirken bir hata oluştu!')</script>";
    }
?>