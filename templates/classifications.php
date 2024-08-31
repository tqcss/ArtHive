<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/Untitled84_20240418143344.png" sizes="192x192">
    <link rel="stylesheet" type="text/css" href="../assets/css/classifications.css">
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/bogam" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <title>ArtHive | Classifications</title>
    <link rel="shortcut icon" href="../assets/images/ui/logo.svg" type="image/x-icon">
</head>

<body class="fade-in">
    <div class="bg-image">
        <div class="navbar">
            <img src="../assets/images/ui/logo.svg" class="logo">
            <span>ArtHive</span>
            <ul>
                <li><a href="./index.php?route=foyer">Foyer</a></li>
                <li><a href="./index.php?route=traverse">Traverse</a></li>
                <li><a href="./index.php?route=classifications">Classifications</a></li>
            </ul>
        </div>


        <header>
            <h1 class="tailor-thy">tailor thy</h1>
            <h1 class="art-era"> ART ERA</h1>
            <h1 class="fancy">to thine fancy</h1>
        </header>

        <div class="container">
            <div class="carousel-outer">
                <div class="carousel-inner">
                    <?php
                    if (!isset($_GET['era'])) {
                        echo '
                        <a class="carousel-item active first-item" href="./index.php?route=classifications&era=Byzantine">
                            <span class="number">01 </span>
                            <div class="carousel-text">Byzantine</div>
                            <div class="carousel-year">527 - 1453</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Romanesque">
                            <span class="number">02 </span>
                            <div class="carousel-text">Romanesque</div>
                            <div class="carousel-year">1000 - 1150</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Gothic">
                            <span class="number">03 </span>
                            <div class="carousel-text">Gothic</div>
                            <div class="carousel-year">1140 - 1600</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Renaissance">
                            <span class="number">04 </span>
                            <div class="carousel-text">Renaissance</div>
                            <div class="carousel-year">1495 - 1527</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Mannerism">
                            <span class="number">05 </span>
                            <div class="carousel-text">Mannerism</div>
                            <div class="carousel-year">1520 - 1600</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Baroque">
                            <span class="number">06 </span>
                            <div class="carousel-text">Baroque</div>
                            <div class="carousel-year">1600 - 1725</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Rococo">
                            <span class="number">07 </span>
                            <div class="carousel-text">Rococo</div>
                            <div class="carousel-year">1720 - 1760</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Neoclassicism">
                            <span class="number">08 </span>
                            <div class="carousel-text">Neoclassicism</div>
                            <div class="carousel-year">1770 - 1840</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Romanticism">
                            <span class="number">09 </span>
                            <div class="carousel-text">Romanticism</div>
                            <div class="carousel-year">1800 - 1850</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Realism">
                            <span class="number">10 </span>
                            <div class="carousel-text">Realism</div>
                            <div class="carousel-year">1840 - 1870</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Pre-Rapahelite">
                            <span class="number">11 </span>
                            <div class="carousel-text">Pre-Raphaelite</div>
                            <div class="carousel-year">1848 - 1854</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Impressionism">
                            <span class="number">12 </span>
                            <div class="carousel-text">Impressionism</div>
                            <div class="carousel-year">1870 - 1900</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Naturalism">
                            <span class="number">13 </span>
                            <div class="carousel-text">Naturalism</div>
                            <div class="carousel-year">1880 - 1900</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Symbolism">
                            <span class="number">14 </span>
                            <div class="carousel-text">Symbolism</div>
                            <div class="carousel-year">1886 - 1900</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Post-Impressionism">
                            <span class="number">15 </span>
                            <div class="carousel-text">Post-Impressionism</div>
                            <div class="carousel-year">1886 - 1905</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Expressionism">
                            <span class="number">16 </span>
                            <div class="carousel-text">Expressionism</div>
                            <div class="carousel-year">1890 - 1939</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Art_Nouveau">
                            <span class="number">17 </span>
                            <div class="carousel-text">Art Nouveau</div>
                            <div class="carousel-year">1895 - 1915</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Cubism">
                            <span class="number">18 </span>
                            <div class="carousel-text">Cubism</div>
                            <div class="carousel-year">1905 - 1939</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Futurism">
                            <span class="number">19 </span>
                            <div class="carousel-text">Futurism</div>
                            <div class="carousel-year">1909 - 1918</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Dadasim">
                            <span class="number">20 </span>
                            <div class="carousel-text">Dadaism</div>
                            <div class="carousel-year">1912 - 1923</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Constructivism">
                            <span class="number">21 </span>
                            <div class="carousel-text">Constructivism</div>
                            <div class="carousel-year">1913 - 1930</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=New_Objectivity">
                            <span class="number">22 </span>
                            <div class="carousel-text">New Objectivity</div>
                            <div class="carousel-year">1918 - 1933</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Bauhaus">
                            <span class="number">23 </span>
                            <div class="carousel-text">Bauhaus</div>
                            <div class="carousel-year">1920 - 1925</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Harlem_Rennaissance">
                            <span class="number">24 </span>
                            <div class="carousel-text">Harlem Renaissance</div>
                            <div class="carousel-year">1920 - 1930</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Art_Deco">
                            <span class="number">25 </span>
                            <div class="carousel-text">Art Deco</div>
                            <div class="carousel-year">1920 -1935</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Precisionism">
                            <span class="number">26 </span>
                            <div class="carousel-text">Precisionism</div>
                            <div class="carousel-year">1920 - 1950</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Surrealism">
                            <span class="number">27 </span>
                            <div class="carousel-text">Surrealism</div>
                            <div class="carousel-year">1924 - 1945</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Abstract_Expressionism">
                            <span class="number">28 </span>
                            <div class="carousel-text">Abstract Expressionism</div>
                            <div class="carousel-year">1945 - 1960</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Pop_Art">
                            <span class="number">29 </span>
                            <div class="carousel-text">Pop Art</div>
                            <div class="carousel-year">1956 - 1969</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Arte_Povera">
                            <span class="number">30 </span>
                            <div class="carousel-text">Arte Povera</div>
                            <div class="carousel-year">1960 - 1969</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Minimalism">
                            <span class="number">31 </span>
                            <div class="carousel-text">Minimalism</div>
                            <div class="carousel-year">1960- 1975</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Op_Art">
                            <span class="number">32 </span>
                            <div class="carousel-text">Op Art</div>
                            <div class="carousel-year">1965 - 1970</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Photorealism">
                            <span class="number">33 </span>
                            <div class="carousel-text">Photorealism</div>
                            <div class="carousel-year">1968 - Present</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=LowBrow_Pop_Realism">
                            <span class="number">34 </span>
                            <div class="carousel-text">Lowbrow Pop Surrealism</div>
                            <div class="carousel-year">1970 - Present</div>
                        </a>
                        <a class="carousel-item" href="./index.php?route=classifications&era=Contemporary_Art">
                            <span class="number">35 </span>
                            <div class="carousel-text">Contemporary Art</div>
                            <div class="carousel-year">1978 - Present</div>
                        </a>';
                    } else {
                        include '../src/includes/db.php';
                        
                        $result = mysqli_query($database, "SELECT * from artists WHERE era = '{$_GET['era']}'");
                        $item = 1;
                        
                        if ($result->num_rows == 0) {
                            echo 'No results found';
                            die;
                        }


                        while ($row = $result->fetch_assoc()) {
                            $a = '';
                            if ($item < 10) {$a = '0';};
                            echo '
                            <a class="carousel-item" href="./index.php?route=artist&id='.$row['user_id'].'">
                                <span class="number">'.$a.$item.'</span>
                                <div class="carousel-text">'.$row['first_name'].' '.$row['last_name'].'</div>
                            </a>
                            ';
                            $item++;
                        }
                        
                        $database->close();
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>

</body>

</html>