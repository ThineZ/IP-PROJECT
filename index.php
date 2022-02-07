<?php require 'header.php'?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' type="text/css" href='CSS/index.css'>
  <link rel='stylesheet' type="text/css" href='CSS/flickity.css'>
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
</head>

<body>
  <div class="grid-layout">
    <div class="grid-layout">
      <p>GRID</p>
      <div class="carousell">
        <div class="carousel" data-flickity='{ "fade": true, "imagesLoaded": true , "wrapAround": true}'>
          <div class="carousel-cell">
            <img class="carousel-cell-image" src="https://picsum.photos/720/540/?image=517" />
          </div>
          <div class="carousel-cell">
            <img class="carousel-cell-image" src="https://picsum.photos/540/720/?image=696" />
          </div>
          <div class="carousel-cell">
            <img class="carousel-cell-image" src="https://picsum.photos/720/540/?image=56" />
          </div>
        </div>
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
  <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js" defer></script>
</body>

</html>
<?php require 'footer.php'?>