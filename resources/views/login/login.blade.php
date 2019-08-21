<!DOCTYPE html>
<html>
<head>
    <title>Login2</title>
</head>
<body>
        <form method="post">
        	 @csrf
            <fieldset>
                <legend>Login</legend>
                Email:<input type="text" name="username"><br>
                Password:<input type="password" name="password"><br>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
</body>
</html>