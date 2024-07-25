
<h3>Kategoriler</h3>
<?php foreach($categories as $cat){ ?>
    <div>
        <?= $cat['title'] ?> <a href="<?= CATEGORY_UPDATE.$cat['id'] ?> ">Düzenle</a> <a href="javascript:;" onclick="delete_category('<?= CATEGORY_DELETE.$cat['id'] ?>')">Sil</a>
    </div>
<?php } ?>

