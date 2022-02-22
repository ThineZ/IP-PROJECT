<html>

<head>
  <link rel="stylesheet" href="../CSS/payment.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="../JS/payment.js" defer></script>
  <script src="../JS/header.js" defer></script>
</head>

<body>
  <div class="pay-background">
    <a href="../CART/cart.php">
      <div class="back-home"></div>
    </a>
    <a href="../CART/cart.php"><label class="back-label"><span></span></label></a>
    <div class="grid-layout">
      <div class="delivery">
        <h1>DELIVERY</h1>
      </div>
      <div class="question">
        <p>Is this your preferred shipping address?</p>
        <div id="address">
          <p>Comfy St 43 Blk 34 #04-12 (S249493)</p>
        </div>
        <label><input type="radio" name="yes_no" value="yes" />Yes</label>
        <label><input type="radio" name="yes_no" value="no" id="no" />No</label>
        <br><br>
        <textarea style="display: none" name="box" id="box" cols="60" rows="10"></textarea>
        <br>
        <input style="display: none" type="submit" name="submit" id="submit" />
      </div>
      <div class="line"></div>
      <div class="payment">
        <h1>PAYMENT</h1>
      </div>
      <div class="paymentcontent">
        <p><label>
            <p>Credit Card Number</p>
            <input type="text" name="ccn" id="ccn">
          </label></p>
        <p><label>
            <p>Expiring (MM/YY)</p>
            <input type="text" name="exp" id="exp">
          </label></p>
        <p><label>
            <p>CVV</p>
            <input type="text" name="cvv" id="cvv">
          </label></p>
      </div>
      <div class="done">
        <input type="submit" name="done" id="done">
      </div>
    </div>
  </div>
</body>

</html>