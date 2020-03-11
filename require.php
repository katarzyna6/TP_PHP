<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Navigation en PHP</title>
    
</head>
<body>
    <h1>Bonjour !</h1>
    <ul class="menu">
        <li><a href="index.php?page=article0">Les articles sur les nouvelles technologies.</a></li>
        <li><a href="index.php?page=article1">Cacadvisor</a></li>
        <li><a href="index.php?page=article2">Quelles tendances pour la santé digitale en 2020 ?</a></li>
    </ul>

    <div class="content">
        <?php require "html/$page.php" ?> 
    </div>

</body>
</html>