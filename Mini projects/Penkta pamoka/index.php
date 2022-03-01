<!DOCTYPE html>
<html>
    <head>
        <title>Formos</title>
    </head>
    <body>
        <div class="header">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Map</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Register form</h1>
            <p>Please complete register form</p>

            <!-- <form action="functions.php" method="post">
                <input type="text" name="user_email" placeholder="ernest.zaiko@gmail.com">
                <input type="submit" value="OK" name="create" />
            </form>

            <br>

            <form action="functions.php" method="post">
                <input type="number" name="skaicius1">
                <input type="number" name="skaicius2">
                <input type="submit" value="OK" name="submit">
            </form>

            <br>

            <form action="functions.php" method="post">
                <input type="number" name="skaicius1">
                <select name="veiksmas">
                    <option value="*">*</option>
                    <option value="-">-</option>
                    <option value="+">+</option>
                    <option value="/">/</option>
                </select>
                <input type="number" name="skaicius2">
                <input type="submit" value="OK" name="submit">
            </form>

            <br> -->

            <form action="functions.php" method="POST">
                Name: <input type="text" name="name" placeholder="Your Name" autocomplete="off"/><br/><br/>
                Lastname: <input type="text" name="lastname" placeholder="Your lastname" autocomplete="off"/><br/><br/>
                Email: <input type="text" name="email" placeholder="email@domain" autocomplete="off"/><br/><br/>
                Password: <input type="text" name="password" placeholder="Your password" autocomplete="off"/><br/><br/>
                Confirm password: <input type="text" name="confirm_password" placeholder="Repeat password" autocomplete="off"/><br/><br/>
                <input type="submit" value="Register" />
            </form>
        </div>
    </body>
</html>








<style>
    .header{background: #0000ff; color: #ccc; border-bottom: 1px solid;}
    .header ul{display: flex; flex-wrap: wrap;}
    .header li {margin-left: 20px;}
    .header a {color:#ff0000; text-decoration: none;}
    .content{width: 800px; margin: 0 auto; background: beige;}
</style>