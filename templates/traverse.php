<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='shortcut icon' href='../assets/images/ui/logo.svg'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <link href='https://fonts.cdnfonts.com/css/glacial-indifference-2' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap' rel='stylesheet'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
    <link href='https://fonts.cdnfonts.com/css/sansation' rel='stylesheet'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Italiana&family=Oswald:wght@700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='../assets/css/traverse.css'>
    <title>ArtHive | Traverse</title>
    <script src='../assets/js/traverse.js' defer></script>
</head>

<body>
    <?php include 'components/header.php' ?>

    <aside>
        <div class='era-nav-container'>
            <?php
            include '../src/includes/db.php';

            $eraNames = array(
                'Byzantine',
                'Romanesque',
                'Gothic',
                'Rennaissance',
                'Mannerism',
                'Baroque',
                'Rococo'
            );

            foreach ($eraNames as $eraName) {
                $result = mysqli_query($database, "SELECT * FROM eras WHERE name = '{$eraName}'");
                if (mysqli_num_rows($result) != 1) {
                    continue;
                }
                $eraData = mysqli_fetch_assoc($result);
                echo "
                    <div class='era-nav-border-wrapper'>
                        <div class='era-nav-img-wrapper' data-name='{$eraName}' data-img='{$eraData['era_image']}' data-desc=\"{$eraData['description']}\">
                        <img src='../assets/images/eras/{$eraData['era_image']}' draggable='false' onload=\"this.parentNode.style.background = 'unset'; this.style.opacity = 1;\">
                        </div>
                    </div>
                    ";
            };

            mysqli_close($database);
            ?>
        </div>
        <div class='era-nav-info'>
            <img src='' draggable='false'>
            <div class='era-nav-info-wrapper'>
                <h3>null</h3>
                <p>null</p>
            </div>
        </div>
    </aside>

    <div id='honeycomb1'>
        <?php include 'components/honeycomb.php' ?>
    </div>
    <div class='page-header'>
        <div class="header-container">
            <h1 id="discover">discover art movements</h1>
            <h2 id="different">in different eras</h2>
        </div>
    </div>
    <div class='featured-section'>
        <div class='vertical-line'></div>
        <div class='featured-label'>
            <h1>featured</h1>
            <h2>ARTISTS</h2>
        </div>
        <div class="slide-container">
            <div class='slide-info'>
                <h3>Test</h3>
                <a>>> Know thy artist</a>
            </div>
            <?php
            include '../src/includes/db.php';
            
            $result = mysqli_query($database, 'SELECT * from artists WHERE featured = 1 LIMIT 5');
            
            if ($result->num_rows == 0) {
                echo 'No results found';
                die;    
            }

            while ($row = $result->fetch_assoc()) {
                echo "
                    <div class='slide' dataset-name='{$row['first_name']} {$row['last_name']}'>
                        <img src='../assets/images/compiled/{$row['user_image']}' draggable='false' onload='this.parentNode.style.background = \"unset\"; this.style.opacity = 1;'>
                    </div>
                ";
            }
             
            $database->close();
            ?>
        </div>
        <div class="slide-controls">
            <button><</button>
            <button>></button>
        </div>
    </div>
    <!-- <div class='rectangle'>
                <div id='inside'>
                    <div>
                        <h3 id='featured'>featured</h3>
                    </div>
                    <div id='artist'>
                        <h3 id='artists'>ARTISTS</h3>
                    </div>
                    <div class='slider-container'>
                        <div class='slide active'>
                            <a href='artist.html#Van Gogh' target='_blank'>
                                <div class='col-content'>
                                    <img src='Vincent.webp'>
                                    <h5>Vincent Van Gogh</h5>
                                    <p>
                                        << Know thine artist>>
                                    </p>
                                    <div class='overlay'></div>
                                </div>
                            </a>
                        </div>
                        <div class='slide'>
                            <a href='artist.html#Leonardo' target='_blank'>
                                <div class='col-content_2'>
                                    <img src='Leonardo.jpg'>
                                    <h5>Leonardo da Vinci</h5>
                                    <p>
                                        << Know thine artist>>
                                    </p>
                                    <div class='overlay'></div>
                                </div>
                            </a>
                        </div>
                        <div class='slide'>
                            <a href='artist.html#Salvador' target='_blank'>
                                <div class='col-content_3'>
                                    <img src='Salvador.jpg'>
                                    <h5>Salvador Dalì</h5>
                                    <p>
                                        << Know thine artist>>
                                    </p>
                                    <div class='overlay'></div>
                                </div>
                            </a>
                        </div>
                        <div class='slide'>
                            <a href='artist.html#Michaelangelo' target='_blank'>
                                <div class='col-content_4'>
                                    <img src='Michael.jpg'>
                                    <h5>Michelangelo</h5>
                                    <p>
                                        << Know thine artist>>
                                    </p>
                                    <div class='overlay'></div>
                                </div>
                            </a>
                        </div>
                        <div class='slide'>
                            <a href='artist.html#Jean' target='_blank'></a>
                            <div class='col-content_5'>
                                <img src='Jean.jpeg'>
                                <h5>Jean-Honorè Fragonard</h5>
                                <p>
                                    << Know thine artist>>
                                </p>
                                <div class='overlay'></div>
                            </div>
                            </a>
                        </div>

                        <div class='navigation-auto'>
                            <label for='radio1'>
                                <div class='auto-btn1' onclick='slideTo(0)'></div>
                            </label>
                            <label for='radio2'>
                                <div class='auto-btn2' onclick='slideTo(1)'></div>
                            </label>
                            <label for='radio3'>
                                <div class='auto-btn3' onclick='slideTo(2)'></div>
                            </label>
                            <label for='radio4'>
                                <div class='auto-btn4' onclick='slideTo(3)'></div>
                            </label>
                            <label for='radio5'>
                                <div class='auto-btn5' onclick='slideTo(4)'></div>
                            </label>
                            <input type='radio' id='radio1' name='slider' />
                            <input type='radio' id='radio2' name='slider' />
                            <input type='radio' id='radio3' name='slider' />
                            <input type='radio' id='radio4' name='slider' />
                            <input type='radio' id='radio5' name='slider' />
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

                    <div class='vertical-line'></div>

                </div>
            </div> -->
    
    <div class="footer-wrapper">
        <?php include 'components/footer.php'; ?>
    </div>
</body>

</html>