<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <style>
        .grid-wrapper{
            display: grid;
            grid-template-columns: 1fr 4fr;
            gap: 10px;
            background-color: #dddddd;
            padding: 10px;
        }
        .left-block{
            background-color: #fff;
            padding: 10px;
            border: 1px solid #000000;
        }
        .prices{
            display: grid;
            grid-template-columns: 250px auto 250px 250px;
            gap: 10px;
            border: 1px solid #000000;
            padding: 10px;
        }
        .price{
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <h1>Hoşgeldiniz</h1>
    <h2>Güncel BTC ve Altcoin Fiyatları</h2>
    <div class="grid-wrapper">
        <div class="left-block">
            Sol Blok
        </div>
        <div class="prices">
            <?php foreach($btcPrices as $price): ?>
                <div class="price">
                    <p><?php echo $price[4]; ?></p>
                    <p><?php echo date('d-m-Y H:i', substr($price[6], 0, -3)); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>