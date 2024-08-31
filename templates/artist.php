<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/artist.css">
    <link rel="shortcut icon" href="../assets/images/ui/logo.svg" sizes="192x192">
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Italiana&family=Oswald:wght@700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .swiper-container body {
            background: #212121;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .swiper-container {
            width: 100%;
            margin-top: -15vw;
            border-radius: 27px;
            overflow: hidden;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 350px;
            height: 350px;
            transition: transform 0.3s ease-in-out;
            border-radius: 27px;
            overflow: hidden;
        }

        img {
            width: 100%;
            border-radius: 27px;
            -webkit-box-reflect: below 1px linear-gradient(transparent, transparent, #0005);
            transition: transform 0.3s ease-in-out;
        }

        .swiper-slide:hover {
            transform: scale(1.2);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8);
            cursor: pointer;
        }

        .swiper-slide:hover img {
            transform: scale(1.1);
            border-radius: 27px;
        }

        .id {
            color: #fff;
            font-size: 18px;
            font-weight: bold;
        }

        .swiper-button-prev {
            margin-left: -1vh;
            color: #fff;
        }

        .swiper-button-next {
            margin-right: -1vh;
            color: #fff;
        }

        .swiper-slide {
            position: relative;
        }

        .date-label {
            font-family: "Italiana";
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .artwork-label {
            font-family: "Italiana";
            font-weight: bold;
            position: absolute;
            bottom: 30px;
            margin-left: 80px;
            font-size: 25px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }


        .artwork-label_2 {
            font-family: "Italiana";
            font-weight: bold;
            position: absolute;
            bottom: 30px;
            margin-left: 20px;
            font-size: 25px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .artwork-label_3 {
            font-family: "Italiana";
            font-weight: bold;
            position: absolute;
            bottom: 30px;
            margin-left: 130px;
            font-size: 25px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }


        .artwork-label_4 {
            font-family: "Poppins";
            font-weight: bold;
            position: absolute;
            bottom: 30px;
            margin-left: 60px;
            font-size: 25px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .artwork-label_5 {
            font-family: "Poppins";
            font-weight: bold;
            position: absolute;
            bottom: 30px;
            margin-left: 20px;
            font-size: 25px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
    </style>

    <title>Artist-section</title>
</head>

<body>
    <?php include 'components/header.php' ?>
    <div class="artist-section">
    <?php
        include '../src/includes/db.php';

        $id = $_GET['id'];
        $result = mysqli_query($database, "SELECT * from artists WHERE user_id = {$id} LIMIT 1");

        if ($result->num_rows == 0) {
            echo 'No results found';
            die;
        }

        $artist = $result->fetch_assoc();
        $image = $artist['user_image'];
        $fullName = "{$artist['first_name']} {$artist['last_name']}";
        $description = (empty($artist['description'])) ? 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est debitis earum reiciendis? Dolorem dicta fugit natus, assumenda, possimus perferendis commodi ex amet tenetur corrupti expedita temporibus totam esse modi. Quam?' : $artist['description'];

        echo "
            <img src='../assets/images/compiled/{$image}' class='Up_img'>
            <div id='artist-container'>
                <div class='artist_'><img class='main' src='../assets/images/compiled/{$image}'></div>
                <div class='artist_'>
                    <h1 class='vin'>{$fullName}</h1>
                </div>
            </div>

            <div class='artist-background'>
                <p class='description'>{$description}</p>
            </div>
        ";
        $database->close();
    ?>
    </div>



    <div class="content_3">
        <h1 class="sig">signature</h1>
        <h2 class="master">MASTERPIECES</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="traverse.html"> <img src="../assets/images/compiled/The Starry Night_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p class="date">1889</p>
                            </span><span class="artwork-label">
                                <p class="size">The Starry Night</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="../assets/images/compiled/Wheatfield with Cypresses_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p class="date">1889</p>
                            </span><span class="artwork-label_2">
                                <p class="size">Wheatfield with Cypresses</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="../assets/images/compiled/Irises_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p class="date">1889</p>
                            </span><span class="artwork-label_3">
                                <p class="size">Irises</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="../assets/images/compiled/Cafe Terrace at Night_1880.webp" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p class="date">1880</p>
                            </span><span class="artwork-label_4">
                                <p class="size">Cafe Terrace at Night</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="../assets/images/compiled/Vase with Fifteen Sunflower_1880.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p class="date">1880</p>
                            </span><span class="artwork-label_5">
                                <p class="size">Vase with Fifteen Sunflower</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"> <img src="../assets/images/compiled/The Starry Night_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p class="date">1889</p>
                            </span><span class="artwork-label">
                                <p class="size">The Starry Night</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="../assets/images/compiled/Wheatfield with Cypresses_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p class="date">1889</p>
                            </span><span class="artwork-label_2">
                                <p class="size">Wheatfield with Cypresses</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="../assets/images/compiled/Irises_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p class="date">1889</p>
                            </span><span class="artwork-label_3">
                                <p class="size">Irises</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="../assets/images/compiled/Cafe Terrace at Night_1880.webp" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p class="date">1880</p>
                            </span><span class="artwork-label_4">
                                <p class="size">Cafe Terrace at Night</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="../assets/images/compiled/Vase with Fifteen Sunflower_1880.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p class="date">1880</p>
                            </span><span class="artwork-label_5">
                                <p class="size">Vase with Fifteen Sunflower</p>
                            </span>
                        </figcaption>
                </div></a>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next id"></div>
            <div class="swiper-button-prev id"></div>
        </div>
    </div>


    <div class="container min-vh-100">
        <footer class="py-5">
            <div id="footer_container" class="row">
                <div class="col-6 col-md-2 mb-3 heads">
                    <ul class="nav flex-column">
                        <li class="nav_first_element nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                        <li class="nav_first_element nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Developers</a></li>
                        <li class="nav_first_element nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Purpose</a></li>

                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <ul class="nav flex-column">
                        <li class=" nav_elements1 nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contacts</a></li>
                        <li class="nav_elements1 nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Traverse</a></li>
                        <li class="nav_elements1 nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Classifications</a></li>
                    </ul>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 icons">
                    <p class="nav_first_element" id="nav_">© 2024 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3" id="first"><a class="link-body-emphasis" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2vw" height="2vw" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2vw" height="2vw" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2vw" height="2vw" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                </svg></a></li>
                    </ul>
                </div>
        </footer>
    </div>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 5,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: true,
            },
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>