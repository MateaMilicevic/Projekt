<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="frm">
            <form action ="process.php" method="POST">
                <p>
                    <lable> Username: </lable>
                    <input type="text" id="user" name="username"/>
                </p>
                <p>
                    <lable> Password: </lable>
                    <input type="password" id="pass" name="password"/>
                </p>
                <p>
                    <input type="submit" id="btn" value="login"/>
                </p>
            </form>
        </div>
        
    </body>
</html>