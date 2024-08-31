<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/about-arthive.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    
    <title>ArtHive | About</title>
    <link rel="shortcut icon" href="../assets/images/ui/logo.svg" type="image/x-svg">
</head>

<body>
    <?php include 'components/header.php' ?>
    <div class="main-wrapper" style="margin-top: 180px;">
        <div class="logo">
            <img src="../assets/images/ui/logo.svg" class="logo">
        </div>
        <div class="title">
            <h1>ArtHive</h1>
            <p>A BUZZLING ARTWORK METROPOLIS</p>
        </div>
    </div>

    <div class="about-wrapper">
        <h1 class="title-with-lines">ABOUT
            <span class="line left"></span>
            <span class="line right"></span>
        </h1>
        <p>Welcome to ArtHive! A dazzling digital metropolis where art buzzes like a lively beehive.
            Our enchanted repository showcases a splendid collection of masterpieces from myriad eras and illustrious
            artists, delivering an immersive museum experience right to your screen. Inspired by the concept of an archive,
            ArtHive weaves together 'Art' and 'Hive' to conjure a magical space where creativity flourishes and is
            eternally celebrated. Step into our world and embark on a whimsical journey through artistic marvels,
            discovering the finest masterpieces that captivate the imagination and stir the soul.</p>
    </div>

    <script>
        // Get elements
        const mainWrapper = document.querySelector('.main-wrapper');
        const aboutWrapper = document.querySelector('.about-wrapper');
        const aboutTitle = aboutWrapper.querySelector('.title-with-lines');
        const aboutDescription = aboutWrapper.querySelector('p');

        // Add event listener to window scroll
        window.addEventListener('scroll', () => {
            // Get scroll position
            const scrollPosition = window.scrollY;

            // Add animation to main wrapper
            if (scrollPosition > 100) {
                mainWrapper.classList.add('float-up', 'active');
            }

            // Add animation to about wrapper
            if (scrollPosition > aboutWrapper.offsetTop - 200) {
                aboutTitle.classList.add('float-up', 'active');
                aboutDescription.classList.add('float-up', 'active');
            }
        });
    </script>
</body>

</html>