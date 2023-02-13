<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="css/general.css">
    <?php?>
    <title>Document</title>
</head>
<body>
    <header>
        <ul class="navigation">
            <li><button class="burger"></button></li>
            <li><a href="" class="home"><img src="../img/home.svg" alt=""></a></li>
            <li>
                <form action="" class="form-search">
                    <button class="seek"></button>
                    <input type="text" name="search">
                </form>
            </li>
            <li><a href="" class="plus"></a></li>
            <li><button class="notification"></button></li>
            <li><button class="avatar"></button></li>
        </ul>
    </header>
    <main>
        <?=$content?>
    </main>
</body>
</html>