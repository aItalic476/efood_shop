<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <?php wp_head();?>
    <title>Efood</title>
</head>
<body>

    <aside class="arrow" id="arrow">
      <div class="arrow__wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
        </svg>
      </div>
    </aside>

    <!--Header-->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <aside class="nav__logo">
                    Efood
                </aside>
                <aside class="nav__btn">
                    <div class="btn__dash"></div>
                    <div class="btn__dash"></div>
                    <div class="btn__dash"></div>
                </aside>
                <div class="nav__group">
                    <a href="https://tears-in-rain.ru/" class="nav__link">Home</a>
                    <a href="https://tears-in-rain.ru/menu/" class="nav__link">Menu</a>
                    <a href="https://tears-in-rain.ru/blog/" class="nav__link">Blog</a>
                    <a href="https://tears-in-rain.ru/contacts/" class="nav__link">Contacts</a>
                </div>
            </nav>

            <div class="header__inner">
                <aside class="header__hero">
                    <h1 class="hero__title">
                        super fast <span class="title__orange">Food</span>  
                        <span class="title__orange">delivery</span> service
                    </h1>
                    <p class="hero__subtitle">
                        We provide super fast-delivery service.
                    </p>
                    <p class="hero__subtitle">
                        Use our app and get a 50% discount!
                    </p>
                    <div class="hero__controls">
                        <a class="hero__btn" href="https://tears-in-rain/menu">Explore food</a>
                        <a href="#" class="hero__link">Download App</a>
                    </div>
                </aside>
                <aside class="header__image">
                    <img class="hero__image" src=<?=E_IMG_ROOT."/scooterist.png"?> alt="placeholder">
                </aside>
            </div>
        </div>
    </header>
    <!--Header-->
