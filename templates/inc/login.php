<?php session_start(); /* Starts the session */
/* Check Login form submitted */if(isset($_POST['Submit'])){
/* Define username and associated password array */$logins = array('Marko12@gmail.com' => '123456','matemaric@gmail.com' => '123456','username2' => 'password2');
$admins = array('admin1' => '123456','admin2' => '123456','admin3' => 'lozinka');
$prof = array('martin12@gmail.com' => '123456','markomaric@gmail.com' => '123456','admin3' => 'lozinka');

/* Check and assign submitted Username and Password to new variable */$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */$_SESSION['UserData']['Username']=$logins[$Username];
header("location:user.php");
exit;
} 
else if (isset($admins[$Username]) && $admins[$Username] == $Password){
   $_SESSION['UserData']['Username']=$admins[$Username]; 
   header("location:admin.php");
}
else if (isset($prof[$Username]) && $prof[$Username] == $Password){
   $_SESSION['UserData']['Username']=$prof[$Username]; 
   header("location:prof.php");
}
else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Unijeli ste neispravne podatke</span>";
}
}
?>
<!DOCTYPE html>
<html>
    <head> 
        <title> Prijava</title>
        <link  href="../../css/lg.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="../../css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../../css/styles.css" type="text/css">
    </head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../index.php">Škola </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
</nav>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
      <div class="tbody">
      <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="center"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="middle" valign="center" class="login"><h2>Login</h2></td>
    </tr>
    <tr>
      <td align="right" valign="central">Email</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right" valign="central">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>
</body>
</html>

