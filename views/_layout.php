<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= ucfirst($page) ?></title>
    
</head>
<body>
    

    <main>
        <?php include_once 'views/' . $page . '_view.php'; ?>
    </main>
    
    <footer></footer>
    
</body>
</html>