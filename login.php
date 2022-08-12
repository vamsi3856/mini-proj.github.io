<html>
    <head>
        <title>login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="form.css">
        <style>
            body{
                background: -moz-linear-gradient(-45deg, #632c65 15%, #56a5e2 100%);
background: -webkit-linear-gradient(-45deg, #632c65 15%,#56a5e2 100%);
background: linear-gradient(135deg, #632c65 15%,#56a5e2 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#632c65', endColorstr='#56a5e2',GradientType=1 );
}
            </style>
    </head>
    <body>
        <div class="logform">
            <form action="validate.php" method="post">
                <h1>LOGIN</h1>
                <div class="txt">     
                <input type="text" id="username" name="username" required>
                <span></span>
                <label for="username">username</label>
                </div>
                <div class="txt">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label>password</label>
               </div>
         
            <input type="submit" value="Login" id="login" name="login">
            
            </form>
        </div>
        
    </body>
</html>