<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/foyer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ArtHive: A Buzzling Metropolis of Artworks & Masterpieces</title>
    <link rel="shortcut icon" href="../assets/images/ui/logo.svg" type="image/x-svg">
</head>

<body>
    <?php include 'components/header.php'?>

    <div class="banner fade-in">
        <div> <video src="../assets/videos/foyer-hero.mp4" type="video/mp4" autoplay muted></video></div>
        <div class="title">
            <div class=introduction>
                <p id="good">GOOD TYDINGS!</p>
                <h1>welcome to <span>ArtHive</span></h1>
            </div>
            <div id="Feel">
                <p>Feel free to explore the diversing splenders from the antiquity of historical masterpieces to the ever emerging contemporary art</p>
            </div>
            <div><a href="./index.php?route=traverse"><button class="button">LET'S TRAVERSE</button></a></div>
        </div>
    </div>

    <?php include 'components/footer.php'?>

    <script>
        setTimeout(() => {
            const content = document.querySelector('.content');
            content.classList.add('visible');
        }, 2000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>