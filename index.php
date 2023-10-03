<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona - Sebastian Kłak</title>
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div id="loading_screen"></div>
    <div id="menu">
        <div value="0" class="menu active">
            <a href="#header"><i class="bi bi-house"></i></a>
        </div>
        <div value="1" class="menu">
            <a href="#contact"><i class="bi bi-envelope"></i></a>
            
        </div>
        <div value="2" class="menu">
            <a href="#projects"><i class="bi bi-folder"></i></a>
        </div>
        <div value="3" class="menu">
            <a href="https://github.com/xYaure" target="_blank"><i class="bi bi-github"></i></a>
        </div>
    </div>
    <div id="container">
        <section id="header">
            <h1><span></span>Witam cię na mojej stronie internetowej</h1>
            <h5>~ Sebastian Kłak ~</h5>
        </section>
        <section id="experiance">
            <h1>Języki które znam</h1>
            <div id="exp">
                <ul>
                    <li value="3">C#
                        <span></span>
                    </li>
                    <li value="5">HTML
                        <span></span>
                    </li>
                    <li value="4">PHP
                        <span></span>
                    </li>
                    <li value="3.5">JavaScript
                        <span></span>
                    </li>
                    <li value="1.2">REACT
                        <span></span>
                    </li>
                    <li value="3.5">MYSQL
                        <span></span>
                    </li>
                </ul>
            </div>
            <div id="close"></div>
        </section>
        <section id="projects">
            <h1>Moje projekty</h1>
            <p>TWORZE PROJEKTY ... (kłamie)</p>
        </section>
        <section id="contact">
            <h1>Kontakt do mnie</h1>
            <div>
                <ol>
                    <li>Nr. tel.: +49 123 456 789</li>
                    <li>E-Mail: <a target="_blank" href="mailto: sebastianklak955@gmail.com"> sebastianklak955@gmail.com</a></li>
                    <li><span class="insta">Instagram</span>: <a target="_blank" href="https://www.instagram.com/_se.ba.stian/"> _se.ba.stian</a></li>
                    <li>You<span style="color:red">Tube</span>: <a target="_blank" href="https://www.youtube.com/channel/UChfCAmWDcoRk7EYwIMXUuAQ"> SE BA</a></li>
                </ol>
            </div>
        </section>
        <section id="comments">
            <h1>Komentarze</h1>
            <form action="wyslij.php" method="post">
                <input type="text" placeholder="Podaj swoje imię" name="imie" required>
                <textarea placeholder="Treść" cols="30" rows="10" max-length="200" name="tresc" required></textarea>
                <button>Wyślij</button>
            </form>
            <?php
                $conn = mysqli_connect('localhost','yaure','IzakskkVV1!!','yaure');
                $z = "SELECT * FROM komentarze WHERE 1";
                $q = mysqli_query($conn, $z);
                $n = mysqli_num_rows($q);
                for ($i=0; $i < $n; $i++) { 
                    $r = mysqli_fetch_array($q);
                    echo "
                    <div class='comment'>
                        <p>$r[1]:</p>
                        <p>`$r[2]`</p>
                    </div>
                    ";
                }

                mysqli_close($conn);
            ?>
        </section>
    </div>
    <footer>
        <p>Cała zawartość zastrzeżona przez: Sebastian Kłak &copy;</p>
    </footer>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>