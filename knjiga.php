
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
    
    <div class="row px-4" id="recenzija">
      <button type="button" class="btn btn-info" onclick="myFunction()">Opis</button>
      <div id="kopis">
        <?php echo $dijelovi[5] ."<br>"; ?>
      </div>
    </div>

    <div class="container p-5 mt-4" style="background-color: #f2f2f2;">
        <h2>Komentirajte</h2>
        <hr style="background-color:black">
        <form>
      <div class="row">
        <div class="col-25">
          <label for="fname">Ime</label>
        </div>
        <div class="col-75">
          <input type="text"  placeholder="Your name.." required name="fname" id="ImeKoment">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Recenzija</label>
        </div>
        <div class="col-75">
          <textarea placeholder="Write something.." style="height:200px" required name="subject" id="Recenzija"></textarea>
        </div>
      </div>
      <div class="row">
          <!--<input type="submit" class="btn btn-success"  value="Submit">-->
          <button class="btn btn-success" onclick="function1()">Submit</button>
      </div>
    <!--</div>-->
        </form>
    </div>

    <div class="col-md-12" style="background-color: #f2f2f2;"> 
      <hr>
      <h1 class="centertxt">Recenzije:</h1>
      <?php
        if($id == 0){
          echo '
        <ul class="list-group centertxt" id="Komentari">
        <li class="list-group-item d-flex justify-content-between align-items-center mt-3">
          Mislim da o ovoj knjizi ne treba puno pisati.
          Svi smo čuli za nju,čitali je barem jedanput u životu,znamo sadržaj tako da o njemu neću niti pisati.
        </li>
        <span class="badge-primary badge-pill">Vlaho Mikić</span>

        <li class="list-group-item d-flex justify-content-between align-items-center mt-3">
          "Mali princ" je knjiga koju vole svi naraštaji,jedna od najljepših knjiga ikada napisanih.Mala knjiga a toliko bogatstvo u njoj se nalazi.
          Prvi put je objavljena u Parizu 1943.godine,a do danas je prevedena na više od 300 svjetskih jezika.
        </li>
        <span class="badge-primary badge-pill">Miki Perić</span>

        <li class="list-group-item d-flex justify-content-between align-items-center mt-3">
          Ova vječna knjiga je,sa suvremenom tehnologijom doživjela novu dimenziju,po prvi put je možemo doživjeti u proširenoj stvarnosti uz pomoć aplikacije.
          Stranice koje su označene crvenom ružom vas vode u tu proširenu stvarnost u kojoj možete Malog princa šetati po stranici,
          igrati igru,uči u svijet Malog princa,a uz to neke stranice kriju i glazbeni sadržaj.
        </li>
        <span class="badge-primary badge-pill">Ana Anić</span>
      </ul>
        ';
        }?>
        <ul class="list-group centertxt" id="Komentari">
          <!--
          <li class="list-group-item d-flex justify-content-between align-items-center mt-3"></li>
          <span class="badge badge-primary badge-pill"></span>
      -->
        </ul>
    </div>
  </div>  
</div>

<script>
  const form = document.querySelector('form')
  console.log(form)
  form.addEventListener('submit', event => {
    // submit event detected
    event.preventDefault()
  })
   function function1() {
    let ime = document.getElementById('ImeKoment').value;
    let recenzija = document.getElementById('Recenzija').value;

    if(ime == "" || recenzija == ""){
      return;
    }
    else{
      let list = document.getElementById('Komentari');
      let novaRecenzija = document.createElement('li');
      novaRecenzija.className = "list-group-item d-flex justify-content-between align-items-center mt-3";
      let novoIme = document.createElement('span');
      novoIme.className = "badge-primary badge-pill";

      let imeNode = document.createTextNode(ime);
      let recenzijaNode = document.createTextNode(recenzija); 

      novoIme.appendChild(imeNode);
      novaRecenzija.appendChild(recenzijaNode);

      list.appendChild(novaRecenzija);
      list.appendChild(novoIme);

      document.getElementById("ImeKoment").value = "";
      document.getElementById('Recenzija').value = "";
      }
  }
</script>
</body>
</html>
