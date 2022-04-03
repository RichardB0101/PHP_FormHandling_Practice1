<?php include_once 'header.php';?>

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
    <form id="submitForm" action="cont_page.php">
        <button type="submit">Sign In</button>
    </form>


  <?php include_once 'footer.php'; ?>
    