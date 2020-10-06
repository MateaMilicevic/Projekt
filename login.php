<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="login-box">
            <form action ="process.php" method="POST">
                <div class="user-box">
                    <lable> Username: </lable>
                    <input type="text" id="user" name="username"/>
                </div>
                <div class="user-box">
                    <lable> Password: </lable>
                    <input type="password" id="pass" name="password"/>
                </div>
                <div>
                    <input type="submit" id="btn" value="login"/>
                </div>
            </form>
        </div>
        
    </body>
</html>