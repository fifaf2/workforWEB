<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPENOTHING - Вход</title>
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="navbar">
        <div class="logo">
            <img src="myfonts/logoС.svg" alt="logo"/>
        </div>
        <nav class="menu">
            <a href="main.php" class="inactive">HOME</a>
            <a href="#" class="inactive">SHOP</a>
            <a href="#" class="inactive">ABOUT</a>
            <a href="signIn.php" class="active">SIGN</a>
        </nav>
        <div class="user-actions">
            <button class="icon-btn">🔍</button>
            <button class="icon-btn">🛍️</button> 
            <button class="wallet-btn">CONNECT WALLET</button>
        </div>
    </header>

    <main class="auth-page">
        <div class="auth-card">
            <h1>Авторизация</h1>
            <form action="signIn-db.php" method="POST">
                <input type="text" name="loginUser" placeholder="Логин*" required>
                <input type="password" name="passwordUser" placeholder="Пароль*" required>
                <button type="submit" class="submit-btn">ВОЙТИ</button>
            </form>
            <p>Нет аккаунта?<a href="signUp.php">Зарегистрироваться</a></p>
        </div>
    </main>

</body>
</html>