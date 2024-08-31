<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/eras.css">
    <link rel="shortcut icon" href="Images/Untitled84_20240418143344.png" sizes="192x192">
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/bogam" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Italiana&family=Oswald:wght@700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .swiper-container body {
            background: #212121;
            font-size: 14px;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .swiper-container {
            width: 100%;
            margin-top: -14vh;
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
    </style>

    <title>Eras-section</title>
</head>

<body>
    <div class="background-container">
        <div class="era-title">
            <h1>Rococo</h1>
            <div class="vertical-line"></div>
            <p class="year">1720 - 1760</p>
        </div>

        <div class="descriptions">
            <div class="first-description">
                <p>Flourished in France during the 1720s and 30s, the Rococo style emerged from the workshops of artisans rather than grand architects. This explains its prominence in furniture, silver, and ceramics.</p>
            </div>
            <div class="second-description">
                <p>Named for the French term 'rocaille" meaning rock or shell, Rococo embraced nature's whimsical forms. Shells, scrolling vines, and playful asymmetry became hallmarks of the style.</p>
            </div>
            <div class="third-description">
                <p>Rebelling against the rigid order of Classicism, Rococo reveled in ornament and theatricality. Often seen as the final flourish of the Baroque era, it challenged formality with a lighthearted and dekoratif spirit.</p>
            </div>
        </div>
    </div>



    <div class="content_3">
        <div class="title-texts">
            <h1>notable <span>ARTISTS</span></h1>
            <h2>in the era</h2>
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="masterpieces.html"> <img src="The Starry Night_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p>1889</p>
                            </span><span class="artwork-label">
                                <p>The Starry Night</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="Wheatfield with Cypresses_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p>1889</p>
                            </span><span class="artwork-label_2">
                                <p>Wheatfield with Cypresses</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="Irises_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p>1889</p>
                            </span><span class="artwork-label_3">
                                <p>Irises</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="Cafe Terrace at Night_1880.webp" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p>1880</p>
                            </span><span class="artwork-label_4">
                                <p>Cafe Terrace at Night</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="Vase with Fifteen Sunflower_1880.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p>1880</p>
                            </span><span class="artwork-label_5">
                                <p>Vase with Fifteen Sunflower</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="masterpieces.html"> <img src="The Starry Night_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p>1889</p>
                            </span><span class="artwork-label">
                                <p>The Starry Night</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="Wheatfield with Cypresses_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p>1889</p>
                            </span><span class="artwork-label_2">
                                <p>Wheatfield with Cypresses</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="Irises_1889.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p>1889</p>
                            </span><span class="artwork-label_3">
                                <p>Irises</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="Cafe Terrace at Night_1880.webp" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p>1880</p>
                            </span><span class="artwork-label_4">
                                <p>Cafe Terrace at Night</p>
                            </span>
                        </figcaption>
                </div></a>
                <div class="swiper-slide"><a href="traverse.html"><img src="Vase with Fifteen Sunflower_1880.svg" alt="">
                        <figcaption>
                            <span class="date-label">
                                <p>1880</p>
                            </span><span class="artwork-label_5">
                                <p>Vase with Fifteen Sunflower</p>
                            </span>
                        </figcaption>
                </div></a>


            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next id"></div>
            <div class="swiper-button-prev id"></div>
        </div>

        <div class="return">
            <h2>return to the<a href="traverse.html"><span class="traverse-link"> Traverse?</span></a></h2>
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



</body>

</html>