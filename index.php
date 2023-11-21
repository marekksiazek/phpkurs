<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;500;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/phoneMenu.css">
    <title>Kurs na opiekuna</title>
</head>

<body>
    <div class="div_wrap">
        <div class="nav_wrap">
            <nav class="navigation" data-aos="fade-right">
                <img src="assets/color1/icon/white_icon_color1_background.png" alt="cours_logo" class="cours_logo">
                <ul class="navigation_list">
                    <li class="nav_item"><a href="#about_us">O kursie</a></li>
                    <li class="nav_item"><a href="#about_course">Program kursu</a></li>
                    <li class="nav_item"><a href="#contact">Kontakt</a></li>
                    <li class="nav_item buy_course"><a href="/register.php">Kup kurs!</a></li>
                    <li class="nav_item_right"><a href="/login.php">Zaloguj się</a></li>
                </ul>
            </nav>
        </div>
        <div class="menuPhone">
            <button class="burger" onclick="toggleMenu()">
            </button>
            <div class="menu">
                <nav>
                    <a href="#about_us" style="animation-delay: 0.2s;">O kursie</a>
                    <a href="#about_course" style="animation-delay: 0.3s;">Program kursu</a>
                    <a href="#contact" style="animation-delay: 0.4s;">Kontakt</a>
                    <a href="/register.php" style="animation-delay: 0.5s;">Kup kurs!</a>
                    <a href="/login.php">Zaloguj się</a>
                </nav>
            </div>
        </div>
        <div class="main_wrap">
            <div class="text_div">
                <img src="assets/base/text/base_textlogo_transparent_background.png" alt="text" class="course_text_img">
            </div>
            <main id="about_us" class="main_left" data-aos="fade-right">
                <div>
                    <h1>O kursie</h1>
                    <p>Program kursu został zaakceptowany przez Ministra Rodziny i Polityki Społecznej decyzją nr
                        22/2023.
                        <br>
                        Przeprowadzany jest pod nadzorem osób z doświadczeniem pedagogicznym i wieloletnim
                        doświadczeniem w
                        pracy z dziećmi do lat 3 oraz z przedszkolakami.
                    </p>
                </div>
            </main>
            <div class="photo_background_childrens" data-aos="fade-right">
                <img src="assets/childrens.jpg" alt="childrens" class="image_of_children">
            </div>
            <div class="photo_background_women" data-aos="fade-right">
                <img src="assets/woman.jpg" alt="women" class="image_of_women">
            </div>
            <main id="about_course" class="main_right" data-aos="fade-right">
                <div>
                    <h1>Program kursu</h1>
                    <p>Program 280-godzinnego kursu obejmuje następujące zagadnienia:</p>
                    <ul>
                        <li>Psychopedagogiczne podstawy rozwoju jednostki</li>
                        <li>Rozwój dziecka w okresie wczesnego dzieciństwa</li>
                        <li>Stymulowanie wszechstronnego rozwoju dziecka</li>
                        <li>Kompetencje opiekuna dziecka</li>
                        <li>Praktyki zawodowe (we własnym zakresie).</li>
                    </ul>
                    <p>
                        Ponadto kursant otrzymuje wzór dziennika praktyk.
                    </p>
                    <h2>Cena kursu: 699zł</h2>
                    <a href="/register.html" class="buy_course_in_div">Kup kurs!</a>
                </div>
            </main>
        </div>
        <div class="footer_wrap">
            <footer id="contact" class="footer">
                <div class="footer_div">
                    <div class="column">
                        <h2>Kontakt:</h2>
                        <p>Obsługa Administracyjna Zawiszy sp. z o.o.</p>
                        <p>Ul. Erazma Ciołka 10/213</p>
                        <p>01-402 Warszawa</p>
                        <p>NIP: 5272933837</p>

                    </div>
                    <div class="column">
                        <p class="mail">kontakt@kursnaopiekuna.pl</p>
                        <a href="https://kursnaopiekuna.pl/" class="link">www.kursnaopiekuna.pl</a>
                    </div>
                    <img src="assets/base/full/base_logo_transparent_background.png" alt="logo_footer" class="logo_footer">
                </div>
            </footer>
        </div>
    </div>
    <script src="scripts/app.js" type="text/javascript"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>