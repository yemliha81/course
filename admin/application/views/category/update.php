<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori güncelleme</title>
</head>
<body>
    <h3>Kategori güncelleme</h3>
    <form action="<?= CATEGORY_UPDATE_POST ?>" method="POST">
        <div>
            Kategori Başlığı:
        </div>
        <div>
            <input type="text" name="title" placeholder="Başlık giriniz" value="<?=$category['title']?>" required />
        </div>
        <div>
            <input type="hidden" name="id" value="<?=$category['id']?>">
            <input type="submit" value="KAYDET">
        </div>
    </form>
</body>
</html>