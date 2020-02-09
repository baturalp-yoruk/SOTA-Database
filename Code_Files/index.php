<?php require_once("config.php");?>

<?php @session_start(); ?>
<html>
<head>
  <meta charset="utf-8" />
  <title>SOTA results</title>
</head>
<body>
  <form>
    <p>Are you an admin?</p>
    <button onclick=location.href="admin/admin.php" type="button" name="button">Yes</button>
    <button onclick=location.href="user/user.php" type="button" name="button">No</button>

  </form>
</body>
</html>
