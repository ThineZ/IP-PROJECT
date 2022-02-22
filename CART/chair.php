<html>

<head>
    <script src="../JS/header.js" defer></script>
    <script src="../JS/chair.js" defer></script>
    <script src="../JS/chairTOcart.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' href='../CSS/chair.css'>
</head>

<body>
    <div class="chair-background">
        <a href="../shop.php">
            <div class="back-home"></div>
        </a>
        <a href="../shop.php"><label class="back-label"><span></span></label></a>
        <div class="product-layout">
            <div class="product-img">
                <img src="../CSS/img/chair.png" alt="item-one" id="zoom">
                <div id="modal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-img" id="img01">
                </div>
                <span class="product-name">OAK GREEN CHAIR</span>
                <span class="des">DESCRIPTION</span>
                <p class="product-info">Inspired by the modern vintage look,
                    Veronic Lounge Chair is a classy piece of
                    furniture that wraps herself in unique
                    colours. Stuffed with high density foam,
                    her slanted frame contours your body
                    as you sit back and relax, providing you
                    with the superior comfort you need.</p>
            </div>
            <table class="table-info">
                <tbody>
                    <tr style="height: 23px;">
                        <td style="width: 242px; height: 23px;">WIDTH:</td>
                        <td style="width: 246.167px; height: 23px;">68</td>
                    </tr>
                    <tr style="height: 23px;">
                        <td style="width: 242px; height: 23px;">DEPTH:</td>
                        <td style="width: 246.167px; height: 23px;">68.5</td>
                    </tr>
                    <tr style="height: 23px;">
                        <td style="width: 242px; height: 23px;">HEIGHT:</td>
                        <td style="width: 246.167px; height: 23px;">76</td>
                    </tr>
                    <tr style="height: 63px;">
                        <td style="width: 242px; height: 63px;">MATERIAL:</td>
                        <td style="width: 246.167px; height: 63px;">FRAME: Malaysian oak<br />UPHOLSTERY: Barras Fabric</td>
                    </tr>
                    <tr style="height: 23px;">
                        <td style="width: 242px; height: 23px;">LEAD TIME:</td>
                        <td style="width: 246.167px; height: 23px;">7 - 10 Days </td>
                    </tr>
                    <tr style="height: 36.5px;">
                        <td style="width: 242px; height: 36.5px;">REQUIRES ASSEMBLY:</td>
                        <td style="width: 246.167px; height: 36.5px;">NO</td>
                    </tr>
                </tbody>
            </table>
            <!-- <a href="cart.php" id="chair"><input type="button" value="Add to Cart"></a> -->
            <button class="chair" id="chair">Add to Cart</button>
        </div>
    </div>
</body>

</html>