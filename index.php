<?php require 'header.php'; ?>
<html>

<head>
  <script src="JS\flickity.pkgd.js" defer></script>
  <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js" defer></script>
  <script src="JS/header.js" defer></script>
  <link rel='stylesheet' type="text/css" href='CSS/index.css'>
  <link rel='stylesheet' type="text/css" href='CSS/index-mobile.css'>
  <link rel='stylesheet' type="text/css" href='CSS/flickity.css'>
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/flickity-fade@1/flickity-fade.css">
</head>

<body>
  <div class="grid-layout">
    <?php
    if (isset($_SESSION['userId'])) {
      echo '<p class="login-status">You are logged in!</p>';
    } else {
      echo '<p class="login-status">You are logged out!</p>';
    }
    ?>
    <div class="carousell">
      <div class="carousel" data-flickity='{ "fade": true, "imagesLoaded": true , "wrapAround": true, "autoPlay": true}'>
        <div class="carousel-cell">
          <div class="quiz">
            <input type="button" value="Go to Quiz">
            <a class="p-card" href="#">
              <div class="p-card">
                <p class="p-card">Take this quiz to find out
                  the best Scandinavian
                  theme for you!</p>
              </div>
              <div class="img-card"></div>
          </div>
          </a>
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
            <br>
            GREEN
          </span>
        </div>
        <div class="txt">
          <p>What's better for a nature-inspired house
            than the colour of nature itself? When you
            visualize the color green-bamboo, grassy
            meadows, pine forests, and lush tropical
            greenery may come to mind. This refreshing
            colour is gives off a serene feeling to your
            home.
            (Tip: Add greenery such as potted plants
            to make your space look more appealing
            and alive!)
          </p>
        </div>
      </div>
    </div>
    <div class="layout-two">
      <div class="tem-layout-one">
        <div class="pic-one">
        </div>
        <div class="color-one">
          <span>
            WOOD
          </span>
        </div>
        <div class="txt-one">
          <p>Wood is often incorporated into the
            design of a space through walls, wood
            slats, and flooring. Wooden toys, like that
            of Danish designer Kay Bojesen’s iconic
            wooden monkey introduced in 1951, can
            also be placed around rooms as playful
            accents. Often, designers juxtapose the
            hard, dense material with rugs or
            sheepskin textiles to soften the feel of a
            space. In keeping with the light and bright
            aesthetic of Scandinavian design, light
            woods such as beech, ash, and pine are
            typically used most.</p>
        </div>
      </div>
    </div>
    <div class="layout-three">
      <div class="tem-layout-two">
        <div class="pic-two">
        </div>
        <div class="color-two">
          <span>DUSTY<br>PINK</span>
        </div>
        <div class="txt-two">
          <p>If you're looking for a warmer accent tone,
            try styling your space with dusty blush
            colors that contrast white rooms. This
            feminine shade is an earthier version of
            standard pink, and reminds us of fresh
            roses and floral-scented rooms.
            Quick tip!
            To make your design more dynamic,
            introduce texture to your walls, furniture, or
            doors with patterns that break up deeper
            colors.</p>
        </div>
      </div>
    </div>
    <div class="layout-four">
      <div class="tem-layout-three">
        <div class="pic-three">
        </div>
        <div class="color-three">
          <span>WOOL</span>
        </div>
        <div class="txt-three">
          <p>Wool fabric is strong, hard-wearing, and
            naturally flame-retardant. It makes the
            perfect upholstery material, and soft
            furnishings. Many wools also have a natural
            coating on their surface which repels liquid,
            giving you time to mop up any spills that
            may occur. Most high quality upholstery
            wools will have a soft handle, however
            cashmere blends in particular are the
            softest, making them ideal for cushions
            and throws.</p>
        </div>
      </div>
    </div>
    <?php require 'footer.php'; ?>
</body>

</html>