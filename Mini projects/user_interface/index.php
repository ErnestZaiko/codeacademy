<html>

<head>
    <title>Our website</title>
</head>

<body>
    <h2>Prisijungti</h2>
    <form action="login.php" method="post">
        <input type="email" name="email" placeholder="john@gmail.com" autocomplete="off">
        <input type="password" name="password" placeholder="********" autocomplete="off">
        <input type="submit" value="Prisijungti">
    </form>
    <hr>
    <h2> Registracijos forma</h2>
    <form action="registration.php" method="post">
        <input type="text" name="first_name" placeholder="Vardas" autocomplete="off"><br>
        <input type="text" name="last_name" placeholder="Pavarde" autocomplete="off"><br>
        <input type="email" name="email" placeholder="emailas" autocomplete="off"><br>
        <input type="password" name="password1" placeholder="********" autocomplete="off"><br>
        <input type="password" name="password2" placeholder="********" autocomplete="off"><br>
        <input type="checkbox" name="agree_terms" id="agree_terms" autocomplete="off">
        <label for="agree_terms">Sutinku su registracijos taisyklemis.</label><br>
        <input type="submit" value="Registruotis">
    </form>
</body>

</html>