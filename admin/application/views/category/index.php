<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Listesi</title>
</head>
<body>
    <h3>Kategoriler</h3>
    <?php foreach($categories as $cat){ ?>
        <div>
            <?= $cat['title'] ?> <a href="<?= CATEGORY_UPDATE.$cat['id'] ?> ">Düzenle</a> <a href="javascript:;" onclick="delete_category('<?= CATEGORY_DELETE.$cat['id'] ?>')">Sil</a>
        </div>
    <?php } ?>
</body>
<script>
    
    function delete_category(url){
        if(confirm('Emin misiniz?')){
            window.location.href = url;
        }
    }

</script>
</html>