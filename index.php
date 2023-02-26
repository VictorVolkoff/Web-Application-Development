<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>

<body>

    <header>
        <h2 class="margin_h2">
            Разработка Веб-приложений
        </h2>
        <?php
        print "Hello World!";
        $login = $_POST['login'];
        print "Вывел " . $login;
        $mysqli = new mysqli("localhost", "root", "", "task1");
        if ($mysqli->connect_errno) {
            print 'Ошибка соединения: ' . $mysqli->connect_errno;
            print 'Ошибка соединения: ' . $mysqli->connect_error;
        }
        $sql = "INSERT INTO users(login, password) VALUES ('tast', 'test')";
        $result = $mysqli->query($sql);
        ?>
    </header>

    <nav>
        <ul>
            <li>
                <a href="index.html">Главная</a>
            </li>
            <li>
                <a href="reg.html">Регистраиция</a>
            </li>
            <li>
                <a href="auth.html">Авторизация</a>
            </li>
            <li>
                <a href="hidden_page.html">Скрытая страница</a>
            </li>
        </ul>
    </nav>

    <div id="main">

        <div>Пример регистрации</div>
        <form action="" method="post">
            <input type="text" name="login">
            <input type="submit" value="отправить">
        </form>

    </div>

    <footer>
        <h2 class="margin_h2">
            Белый, 2012
        </h2>
    </footer>
</body>

</html>