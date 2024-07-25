<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        body{
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: 250px auto;
            height: 100vh;
            font-family: Arial;
        }
        .left-nav{
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            background-color: #f7f7f7;
            border-right: 1px solid #dddddd;
        }
        .right-content{
            gap: 10px;
            padding: 10px;
        }
        .content{
            background-color: #FFFFFF;
            padding: 10px;
        }
        .right-content .top-bar{
            background-color: #fff;
            padding: 10px;
            border-bottom: 1px solid #dddddd;
            text-align: right;
        }
    </style>
</head>
<body>
<?php include('left_nav.php') ?>
<div class="right-content">
    <div>
        <?php include ('top_bar.php'); ?>
    </div>
    <div class="content">
