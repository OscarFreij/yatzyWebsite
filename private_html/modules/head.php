<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yatzy Online</title>
    <link rel="stylesheet" href="static/css/master.css">
    <?php

    if(isset($_GET['page']))
    {
        ?>
        <link rel="stylesheet" href="static/css/<?=$_GET['page']?>.css">
        <?php
    }
    else
    {
        ?>
        <link rel="stylesheet" href="static/css/play.css">
        <?php
    }

    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>