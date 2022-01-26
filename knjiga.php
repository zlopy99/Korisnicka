
<?php
     include 'templates/inc/header.php';

        $id = 0; // to be passed
        $id = $_GET['id'];

        $txt_file = new SplFileObject('data.txt');

        $txt_file->seek($id);
        //echo $txt_file->current();
        
        $dijelovi = explode(";", $txt_file->current());
        ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script src="js/scripts.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/not.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Recenzija knjiga</title>
  </head>
<body class="bg-dark">
    <!--
    <div>
      
      <header>

      </header>
      <h1></h1>
    </div>
-->

        
<div class="container border mt-5 bg-white">  
<h1 class="kdata"><?php echo $dijelovi[1] ."<br>"; ?></h1>
  <div class="row bg-light p-2">
    <div class="col-4">
      <img src="<?php echo $dijelovi[6]; ?>" alt="Error" class="img-fluid mx-auto d-block">
    </div>
    
    <div class="kinfo col-8 mt-0">
      <h1 class="kdata">Autor: <?php echo $dijelovi[2] ."<br>"; ?></h1>
      <h1 class="kdata">Godina izdanja: <?php echo $dijelovi[3] ."<br>"; ?></h1>
      <h1 class="kdata">Tip knjige: <?php echo $dijelovi[4]; ?></h1>
      <h1 class="kdata">Ocjena:</h1>
      <h1 class="ocijeni">Ocijeni:</h1>
      <div class="rate"> 
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label>
      </div>
    </div>
    
    <div class="row px-4">
      <button type="button" class="btn btn-info" onclick="myFunction()">Opis</button>
      <div id="kopis">
        <?php echo $dijelovi[5] ."<br>"; ?>
      </div>
    </div>

    <div class="col-md-12 kom"> 
      <hr>
      <h1 class="centertxt">Komentiraj</h1>
      <input type="text" id="recenzija" placeholder="Ostavi recenziju">
      <button type="button" class="spremikom btn btn-info" id="objavi">Objavi</button>
      <ul id="unordered">
    
      </ul>
    </div>
    <div class="col-md-12"> 
      <hr>
      <h1 class="centertxt">Recenzije</h1>
    </div>
    <div id="recenzije">

  </div>  
</div>



  



      

      

     

      
    

    
</body>
</html>
