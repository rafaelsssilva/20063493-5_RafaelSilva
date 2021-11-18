<?php 
    require_once('function/load_page.php');
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" class="logo-img"></a>
            </div>
            <ul class="menu">
                <li><a href="index.php?page=quem_somos" class="menu-btn">Quem somos</a></li>
                <li><a href="index.php?page=contato" class="menu-btn">Contato</a></li>
                <li><a href="index.php?page=localizacao" class="menu-btn">Localização</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <div class="content">
        <?php load_page();?>
    </div>
    <footer>
        <span class="far fa-copyright"></span><span> Rafael da Silva e Silva  |  RA: 20063493-5  |  Disciplina: Back End I 53/2021  |  Sistemas para Internet.</span>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>