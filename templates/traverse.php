<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/ui/logo.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Italiana&family=Oswald:wght@700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/traverse.css">
    <title>ArtHive | Traverse</title>
    <script src="../assets/js/traverse.js" defer></script>
</head>

<body>
    <?php include 'components/header.php' ?>

    <aside>
        <div class="era-nav-container">
            <div class="era-nav-img-wrapper" data-name="Byzantine">
                <img src="" draggable="false">
            </div>
            <div class="era-nav-img-wrapper" data-name="Romanesque">
                <img src="" draggable="false">
            </div>
            <div class="era-nav-img-wrapper" data-name="Gothic">
                <img src="" draggable="false">
            </div>
            <div class="era-nav-img-wrapper" data-name="Rennaissance">
                <img src="" draggable="false">
            </div>
            <div class="era-nav-img-wrapper" data-name="Mannerism">
                <img src="" draggable="false">
            </div>
            <div class="era-nav-img-wrapper" data-name="Baroque">
                <img src="" draggable="false">
            </div>
            <div class="era-nav-img-wrapper" data-name="Rococo">
                <img src="" draggable="false">
            </div>
        </div>
        <div class="era-nav-info">
            <img src="" draggable="false">
            <div class="era-nav-info-wrapper">
                <h3>NULL</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure expedita odio excepturi voluptas
                    ducimus molestias fugiat nam reiciendis optio sint, maxime perferendis quia quae eos aliquid!
                    Magnam laudantium fugit officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos,
                    necessitatibus maxime. Sapiente, aliquid molestias ullam quasi assumenda sit iste! Excepturi ipsam,
                    repudiandae tenetur accusantium eius dolore itaque nemo ex eos.
                </p>
            </div>
        </div>
    </aside>

    <div class="traverse-section">
        <div class="content_2">
            <div id="discover">
                <h1>discover art movements</h1>
            </div>
            <div id="different">
                <h2>in different eras</h2>
            </div>


            <div class="rectangle">
                <div id="inside">
                    <div>
                        <h3 id="featured">featured</h3>
                    </div>
                    <div id="artist">
                        <h3 id="artists">ARTISTS</h3>
                    </div>

                    <script>
                        document.getElementById('discover').classList.add('animate');
                        document.getElementById('different').classList.add('animate');
                    </script>


                    <div class="slider-container">
                        <div class="slide active">
                            <a href="artist.html#Van Gogh" target="_blank">
                                <div class="col-content">
                                    <img src="Vincent.webp">
                                    <h5>Vincent Van Gogh</h5>
                                    <p>
                                        << Know thine artist>>
                                    </p>
                                    <div class="overlay"></div>
                                </div>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="artist.html#Leonardo" target="_blank">
                                <div class="col-content_2">
                                    <img src="Leonardo.jpg">
                                    <h5>Leonardo da Vinci</h5>
                                    <p>
                                        << Know thine artist>>
                                    </p>
                                    <div class="overlay"></div>
                                </div>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="artist.html#Salvador" target="_blank">
                                <div class="col-content_3">
                                    <img src="Salvador.jpg">
                                    <h5>Salvador Dalì</h5>
                                    <p>
                                        << Know thine artist>>
                                    </p>
                                    <div class="overlay"></div>
                                </div>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="artist.html#Michaelangelo" target="_blank">
                                <div class="col-content_4">
                                    <img src="Michael.jpg">
                                    <h5>Michelangelo</h5>
                                    <p>
                                        << Know thine artist>>
                                    </p>
                                    <div class="overlay"></div>
                                </div>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="artist.html#Jean" target="_blank"></a>
                            <div class="col-content_5">
                                <img src="Jean.jpeg">
                                <h5>Jean-Honorè Fragonard</h5>
                                <p>
                                    << Know thine artist>>
                                </p>
                                <div class="overlay"></div>
                            </div>
                            </a>
                        </div>

                        <div class="navigation-auto">
                            <label for="radio1">
                                <div class="auto-btn1" onclick="slideTo(0)"></div>
                            </label>
                            <label for="radio2">
                                <div class="auto-btn2" onclick="slideTo(1)"></div>
                            </label>
                            <label for="radio3">
                                <div class="auto-btn3" onclick="slideTo(2)"></div>
                            </label>
                            <label for="radio4">
                                <div class="auto-btn4" onclick="slideTo(3)"></div>
                            </label>
                            <label for="radio5">
                                <div class="auto-btn5" onclick="slideTo(4)"></div>
                            </label>
                            <input type="radio" id="radio1" name="slider" />
                            <input type="radio" id="radio2" name="slider" />
                            <input type="radio" id="radio3" name="slider" />
                            <input type="radio" id="radio4" name="slider" />
                            <input type="radio" id="radio5" name="slider" />
                        </div>
                    </div>

                    <script>
                        let currentSlide = 0;
                        let slides = document.querySelectorAll('.slide');
                        let autoBtns = document.querySelectorAll('.auto-btn');
                        let radioButtons = document.querySelectorAll('input[type="radio"]');

                        function slideTo(index) {
                            currentSlide = index;
                            updateSlider();
                        }

                        function updateSlider() {
                            slides.forEach((slide, i) => {
                                if (i === currentSlide) {
                                    slide.classList.add('active');
                                } else {
                                    slide.classList.remove('active');
                                }
                            });
                            autoBtns.forEach((btn, i) => {
                                if (i === currentSlide) {
                                    btn.classList.add('active');
                                } else {
                                    btn.classList.remove('active');
                                }
                            });
                            radioButtons.forEach((radio, i) => {
                                if (i === currentSlide) {
                                    radio.checked = true;
                                } else {
                                    radio.checked = false;
                                }
                            });
                        }

                        // Initialize the slider
                        updateSlider();

                        // Auto-slide interval
                        setInterval(() => {
                            currentSlide = (currentSlide + 1) % slides.length;
                            slideTo(currentSlide);
                        }, 2000);
                    </script>

                    <div class="vertical-line"></div>

                </div>
            </div>


</body>

</html>