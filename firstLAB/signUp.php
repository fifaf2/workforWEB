<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPENOTHING - Регистрация</title>
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
            <h1>Регистрация</h1>
            <form action="signUpn-db.html" method="POST">
                <input type="text" name="surnameUser" placeholder="Фамилия*" required>
                <input type="text" name="nameUser" placeholder="Имя*" required>
                <input type="text" name="patronymicUser" placeholder="Отчество">
                <input type="text" name="loginUser" placeholder="Логин*" required>
                <input type="password" name="passwordUser" placeholder="Пароль*" required>
                
                <div class="agreement">
                    <input type="checkbox" name="soglasieUser" id="soglasie" required>
                    <label for="soglasie">Согласие на обработку данных</label>
                </div>

                <button type="submit" class="submit-btn">СОЗДАТЬ АККАУНТ</button>
            </form>
            <p>Есть аккаунт?<a href="signIn.php">Войти</a></p>
        </div>
    </main>

</body>
</html>