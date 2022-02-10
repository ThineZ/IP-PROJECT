<?php require 'header.php'?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' type="text/css" href='CSS/index.css'>
  <link rel='stylesheet' type="text/css" href='CSS/flickity.css'>
  <link rel='stylesheet' type='text/css' href='footer.css'>
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
</head>

<body>
  <div class="grid-layout">
    <div class="carousell">
      <div class="carousel"
        data-flickity='{ "fade": true, "imagesLoaded": true , "wrapAround": true, "autoPlay": true}'>
        <div class="carousel-cell">
          <img class="carousel-cell-image" src="CSS/img/1.jpg" />
        </div>
        <div class="carousel-cell">
          <img class="carousel-cell-image" src="CSS/img/2.jpg" />
        </div>
        <div class="carousel-cell">
          <img class="carousel-cell-image" src="CSS/img/3.jpg" />
        </div>
      </div>
    </div>
    <div class="intro">
      <p><strong class="text-one">Know more about Scandinavian Design:</strong></br><strong class="text-two">Colours &
          Materials</strong></p>
      <div class="text-three">
        <p>Ask almost anyone about what an average Scandinavian kitchen looks like, and you’ll
          probably get the same reaction: simple and all-white. Certainly, the Nordic countries have
          perfected the all-white kitchen look, however, the reason their kitchens are so impressive
          isn’t the absence of colour. It’s their combined use of shades and materials – the Nordic
          colour palette. We hope this collage of colours and materials will provide some inspiration
          to your idea of a perfect house.</p>
      </div>
    </div>
    <div class="layout-one">
      <div class="tem-layout">
        <div class="pic">
        </div>
        <div class="color">
          <span>
            MOSS
          </span>
          <span>
            GREEN
          </span>
        </div>
        <div class="txt">
        </div>
      </div>
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