<html>

<head>
    <script src="../JS/header.js" defer></script>
    <script src="../JS/chairTOcart.js" defer></script>
    <script src="../JS/itemRemove.js" defer></script>
    <script src="../JS/payment.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' href='../CSS/cart.css'>
</head>

<body>
    <div class="cart-background">
        <a href="../shop.php">
            <div class="back-home"></div>
        </a>
        <a href="../shop.php"><label class="back-label"><span></span></label></a>
        <div class="cart-layout">
            <h1>CART</h1>
            <p id="info">You don't have any items in your cart.
                Start shopping :)</p>
            <div class="cart-item-one" id="first-item">
                <div class="del-btn" id="del-btn"><span>&times;</span></div>
                <div class="product-img"></div>
                <div class="description">
                    <span>OAK GREEN CHAIR</span>
                </div>
                <div class="quantity">
                    <button class="plus" type="button" name="button" id="plus">
                        <span>&plus;</span>
                    </button>
                    <input type="text" name="amount" value="1">
                    <button class="minus" type="button" name="button" id="minus">
                        <span>&minus;</span>
                    </button>
                </div>
                <div class="price" id="price"></div>
            </div>
        </div>
        <button class="payment" id="payment">Payment</button>
    </div>
</body>

</html>