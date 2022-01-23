<php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>
<!DOCTYPE html>
<html >
<head>
<title>Predavač</title>
<link href="../../css/styles.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="../../css/not.css" type="text/css">
</head>

<body>
<?php include 'prof_nav.php';?>
 
 <div class="predmeti">
       <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <p class="card-text"><b>MATEMATIKA</b> </br> <hr> This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Detalji</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
       </div>
       </div>
      <div class="body"></div>
<div class="chat">
  <div class="profile">
      <img src='https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=a8ccd69bd6cc884f728949673c6829cf' alt=''>
  </div>
  <div class="message">
     Loren ipsum dolen sit a mor a mor a mor whatever, Loren ipsum dolen sit a mor a mor a mor whatever.
  </div>
  <div class="user">
     John Doe
  </div>
</div>

</body>
</html>

