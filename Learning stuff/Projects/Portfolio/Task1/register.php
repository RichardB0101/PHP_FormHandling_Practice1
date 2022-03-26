<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <div class="wrapperLogin">
    <form action="addon.php" id="regForm" method="post">
      <label>Create username:</label></br>
      <input
        id="usernameReg"
        type="text"
        name="username"
      /></br></br>
      <label>Create password:</label></br>
      <input
        id="passwordReg"
        type="text"
        name="password"
      /></br></br>
      <label>Enter birthdate:</label></br>
      <input type="date" id="birthDate" name="birthDate" value="2022-1-1" min=1860-12-31 max="2022-01-01">
      </br></br>

      <button type="submit" >Create account</button></br></br>
      <button type="submit">Login</button>
    
    </form>
    </div>

  </body>
</html>
    