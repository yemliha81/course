<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
</head>
<body>
    <div>
        <a href="<?php echo BASE_URL.'language/change_language/tr';?>">TR</a>
        <a href="<?php echo BASE_URL.'language/change_language/en';?>">EN</a>
    </div>
    <div>
        <a href="/"><?php echo $language['home'];?></a> 
        <a href=""><?php echo $language['about_us'];?></a> 
        <a href=""><?php echo $language['contact'];?></a>
    </div>
    <?php foreach($products as $product){ ?>
        <div>
            <?php echo $product['product_name_'.$_SESSION['language']];?>
        </div>
        <div>
            <?php echo $product['description_'.$_SESSION['language']];?>
        </div>
    <?php } ?>
</body>
</html>