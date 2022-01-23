<php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>

<!DOCTYPE html>
<html >
<head>
<title>Učenik</title>
<link href="../../css/styles.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="../../css/not.css" type="text/css">
</head>

<body>

    <?php include 'task.php';?>
 

  

</body>
</html>


