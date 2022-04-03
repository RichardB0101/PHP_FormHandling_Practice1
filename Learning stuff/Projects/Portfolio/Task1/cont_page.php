<?php
session_start();
?>

<?php include_once 'header.php';?>

    
      <?php 

      $_SESSION["uniqueNumber"];
      echo '<p class="uniqueNum">' . $_SESSION["uniqueNumber"]   . '</p>';
      ?>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
        <input type="submit" name="plusBtn" value="+1">
      </form>
      <?php 

      if(isset($_GET["plusBtn"])){
        $_SESSION["uniqueNumber"]++;
      }
      
      ?>
      <form action="index.php">
        <button type="submit">Logout</button> 
      </form>
   





<?php include_once 'footer.php'; ?>


