<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="assets/css/stylelogin.css">
    
</head>
<body>
    <div class="container">
        <div class="img-container">
            
        </div>
        <div class="login-container">
            <form class="form-container" action="/postlogin" method="post">
            {{csrf_field()}}
            <h1>Login</h1>
             <div class="input-container email">
                <label for="email-input">Email</label><br/>
                <input type="email" name="email" class="form-control" require="true" id="email-input">
             </div>
             <div class="input-container pass">
                <label for="pass-input">Password</label><br/>
                <input type="password" name="password" class="form-control" require="true" id="pass-input">
            </div>
             
             <button class="btn" type="submit">Sign in</button>
            </form>
        </div>
    </div>

 
</div>
</body>
</html>