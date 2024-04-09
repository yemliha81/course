<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cache Example</title>
</head>
<body>
    <h1>Categories</h1>
    <div>Is cached <?php echo $is_cached;?></div>
    <ul>
    <?php foreach ($categories as $item): ?>
        <li><?= $item['category_name'] ?></li> <!-- Change 'field_name' to your actual field name -->
    <?php endforeach; ?>
    </ul>
</body>
</html>
