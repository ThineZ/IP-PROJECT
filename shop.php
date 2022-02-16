<?php require 'header.php'; ?>
<html>

<head>
  <script src="JS\shop.js" defer></script>
  <script src="JS/header.js" defer></script>
  <link rel='stylesheet' type='text/css' href='CSS/shop.css'>
</head>

<body>
  <div class="shop-layout">
    <div class="shop-grid-layout">
      <div class="h1">
        <h1>ALL PRODUCTS</h1>
      </div>
      <div class="items-one">
        <h3>FILTER</h3>
        <div class="container-one">
          <div id="triangle-down" class="triangle-down"></div>
          <div id="triangle-up" class="triangle-up"></div>
          <button id="dropbtn" class="dropbtn">TYPE</button>
        </div>
        <div id="myDropdown" class="scrollable-checkbox">
          <input id="sofa" type="checkbox" /> SOFA <br />
          <input id="dining" type="checkbox" /> DINING TABLE <br />
          <input id="cardboard" type="checkbox" /> CARDBOARD <br />
          <input id="bed" type="checkbox" /> BED FRAME <br />
          <input id="chair" onclick="chairChecked()" type="checkbox" /> CHAIR <br />
          <input id="table" onclick="tableChecked()" type="checkbox" /> WRITING TABLE <br />
          <input id="kitchen" type="checkbox" /> KITCHEN <br />
        </div>
        <div class="container-two">
          <div id="triangle-down-one" class="triangle-down-one"></div>
          <div id="triangle-up-one" class="triangle-up-one"></div>
          <button id="dropbtn-one" class="dropbtn-one">COLOR</button>
        </div>
        <div id="myDropdown-one" class="scrollable-checkbox-one">
          <input type="checkbox" /> red <br />
          <input type="checkbox" /> blue <br />
          <input type="checkbox" /> green <br />
        </div>
        <div class="container-three">
          <div id="triangle-down-two" class="triangle-down-two"></div>
          <div id="triangle-up-two" class="triangle-up-two"></div>
          <button id="dropbtn-two" class="dropbtn-one">SIZE</button>
        </div>
        <div id="myDropdown-two" class="scrollable-checkbox-two">
          <input type="checkbox" /> small <br />
          <input type="checkbox" /> middem <br />
          <input type="checkbox" /> large <br />
          <input type="checkbox" /> cups <br />
        </div>
      </div>
      <div class="items-two">
        <div class="item-grid">
          <div id="chair-info" class="chair-info">
            <img src="CSS/img/chair.png" alt="item-one" width="300px" height="300px">
            <span> OAK GREEN CHAIR <br> $119.00</span>
          </div>
          <div id="table-info" class="table-info">
            <img src="CSS/img/table.png" alt="item-one" width="300px" height="300px">
            <span> 105CM WRITING TABLE <br> $599.00</span>
          </div>

        </div>
      </div>
    </div>
  </div>
  <?php require 'footer.php'; ?>
</body>

</html>