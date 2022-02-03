<?php require 'header.php'?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type="text/css" href='CSS/index.css'>
    <link rel='stylesheet' type="text/css" href='CSS/flickity.css'>
</head>

<body>
    <div class="grid-layout">
        <div class="grid-layout">
            <p>GRID</p>
            <div class="carousell" data-flickity='{ "wrapAround": true }'>
                <div class="carousel-cell-one">
                    <img src="img/1.jpg" alt="1" 
                    width="100px" height="100px">
                </div>
                <div class="carousel-cell-two"></div>
                <div class="carousel-cell-three"></div>
            </div>
            <div class="intro">
                <p>Intro</p>
            </div>
            <div class="layout-one">
                <p>ONE</p>
            </div>
            <div class="layout-two">
                <p>TWO</p>
            </div>
            <div class="layout-three">
                <p>THREE</p>
            </div>
            <div class="layout-four">
                <p>FOUR</p>
            </div>
        </div>
    </div>
    <script src="JS\flickity.pkgd.js" defer></script>
</body>

</html>
<?php require 'footer.php'?>