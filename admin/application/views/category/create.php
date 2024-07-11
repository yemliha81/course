<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori ekleme</title>
</head>
<body>
    <h3>Kategori ekleme</h3>
    <form action="<?= CATEGORY_CREATE_POST ?>" method="POST">
        <div>
            Kategori Başlığı:
        </div>
        <div>
            <input type="text" name="title" placeholder="Başlık giriniz" required />
        </div>
        <div>
            <input type="submit" value="KAYDET">
        </div>
    </form>
</body>
</html>