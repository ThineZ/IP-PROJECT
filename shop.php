<?php require 'header.php';?>
<html>

<head>
  <script src="JS\shop.js" defer></script>
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
          <button id="dropbtn" class="dropbtn">Dropdown</button>
        </div>
        <div id="myDropdown" class="scrollable-checkbox" >
          <input type="checkbox" /> This is checkbox <br />
          <input type="checkbox" /> This is checkbox <br />
          <input type="checkbox" /> This is checkbox <br />
          <input type="checkbox" /> This is checkbox <br />
          <input type="checkbox" /> This is checkbox <br />
          <input type="checkbox" /> This is checkbox <br />
          <input type="checkbox" /> This is checkbox <br />
        </div>
        <div class="container-two">
          <button id="dropbtn-one" class="dropbtn-one">DropdownOne</button>
        </div>
        <div id="myDropdown-one" class="scrollable-checkbox-one" >
          <input type="checkbox" /> This is checkbox1 <br />
          <input type="checkbox" /> This is checkbox <br />
          <input type="checkbox" /> This is checkbox <br />
        </div>
      </div>
      <div class="items-two">
      </div>
    </div>
  </div>
  <?php require 'footer.php';?>
</body>

</html>