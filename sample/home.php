<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
    <title>PowerDrift_ABCD</title>
    <link rel="stylesheet" href="styles/style_webdev.css">
</head>
<body>
    <header>
        <h1>Power Drift</h1>
    </header>
    <?php
        echo $_SESSION["username"];
    ?>
    <nav>
        <a href="review_car.php">Reviews</a>
        <a href="comparo.php">Comparisions</a>
        <a href="review.php">Our Suggestions</a>
        <a href="sell.php">Sell Used Cars</a>
        <?php
        if(isset($_SESSION["username"])){
            echo "<a href='includes/logout.inc.php'>Log Out</a>";
        }
        else{
            echo "<a href='index.php'>Log In</a>";
        }
        ?>
        
    </nav>
    <main>
        <section>
            <div class="container">
                <i style='font-size:48px' class='fas' id="Prev">&#xf104;</i>
                <i style='font-size:48px' class='fas' id="Next">&#xf105;</i>
                <div class="slide">
                    <img src="images/cre.jpg" alt="Kushaq" id="lastclone" >
                    <img src="images/n.jpg" alt="Creta" >
                    <img src="images/sel.jpg" alt="Harrrier" >
                    <img src="images/x7.jpg" alt="Hector" >
                    <img src="images/cre.jpg" alt="Kushaq" >
                    <img src="images/n.jpg" alt="Creta" id="firstclone" >
                </div>
            </div>
            <br>
        </section>
        <h1>By Our Youtube Channel</h1>
        <section>
            <h2>Latest Car Reviews</h2>
            <iframe width="33%" height="250"src="https://www.youtube.com/embed/IYXQ1lAkLEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="33%" height="250"src="https://www.youtube.com/embed/IqAfMbj5aVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="33%" height="250" src="https://www.youtube.com/embed/JSPgbFZGgYw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        <section>
            <h2>Latest Comparisions</h2>
            <iframe width="33%" height="250" src="https://www.youtube.com/embed/cXbETviuWWg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="33%" height="250" src="https://www.youtube.com/embed/B9E86-gZ7mw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="33%" height="250" src="https://www.youtube.com/embed/blDerWqsT8Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        <section>
            <h2>Latest Bike Reviews</h2>
            <iframe width="33%" height="250" src="https://www.youtube.com/embed/k0UrWxEQwJo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="33%" height="250" src="https://www.youtube.com/embed/k0sAANZdQH0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="33%" height="250" src="https://www.youtube.com/embed/X8SArMHDugs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        <section>
            <h2>Latest DragRaces by us</h2>
            <iframe width="33%" height="250" src="https://www.youtube.com/embed/jiFBfBZ7Mts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="33%" height="250" src="https://www.youtube.com/embed/yU59WvKPXQQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="33%" height="250" src="https://www.youtube.com/embed/6uW6PwEVNig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        <section>
            <br>
            <h3>Follow us on </h3>
            <br>
            <a href="https://www.instagram.com/PowerDrift/" target="_blank"><img src="images/R.png" alt="Instagram" width="3%" height="3%"></a>
            <a href="https://in.linkedin.com/company/powerdrift-studios-private-limited" target="_blank"><img src="images/80808_linkedin-logo-white-png.png" alt="Linkedin" width="3%" height="3%"></a>
            <a href="https://www.youtube.com/user/powerdriftofficial" target="_blank"><img src="images/R (1).png" alt="YouTube" width="3%" height="3%"></a>
            <a href="https://www.facebook.com/POWERDRIFTOFFICIAL" target="_blank"><img src="images/1509135366facebook-symbol-png-logo.png" alt="Facebook" width="3%" height="3%"></a>
        </section>
    </main>
    <footer>
        <a href="#">About Us</a>
        <a href="#">FAQ</a>
        <a href="#">Contact Us</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms and Conditions</a>
    </footer>
    <script src="java_webdev.js"></script>
</body>
</html>