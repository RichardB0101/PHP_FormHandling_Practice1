<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="wrapperLogin">
    <form action="register.php" id="loginForm" method="post">
      <label>Username:</label></br>
      <input
        id="usernameLogin"
        type="text"
        name="username"
        placeholder="Enter username"
      /></br></br>
      <label>Password:</label></br>
      <input
        id="passwordLogin"
        type="text"
        name="password"
        placeholder="Enter password"
      /></br></br>
    <button type="submit" >Register</button></br></br>
    
    </form>

    <form action="register.php">
        <button type="submit">Sign In</button>
    </form>

    </div>
  </body>
</html>
    