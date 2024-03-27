<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <link rel="stylesheet" href="<?=WEBROOT?>/css/style.css">
</head>
<body>
    
        <?php
            require_once(ROOT."/views/partial/menu.html.php");
            echo $contentForView
        ?>

</body>
</html>