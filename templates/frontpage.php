<?php include 'inc/header.php';?>
<head>  
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light text-light">Postani član</h1>
        <p class="lead text-muted">Ako voliš čitati i ako voliš knjige,
              pozivamo te da se učlaniš u klub Recenzije knjiga. Online stranica Recenzije knjiga pravo je mjesto za tebe i sve knjigoljupce jer ovdje možeš naći široki izbor novih knjiga koje
              su stalno ažurirane kao i brojne druge pogodnosti.</p>
        <p>
          <a href="templates/inc/login.php" class="btn btn-primary my-2">Prijavi se</a>
          <a href="#kontakt" class="btn btn-secondary my-2">Kontaktiraj nas</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="mali_princ_novo.jpg" width="100%" min-height="225px"  role="img"><title>Placeholder</title>

            <div class="card-body bg-white">
              <p class="card-text"><b>Mali Princ</b> </br> <hr> Pripovjedačevo upoznavanje Malog princa dok popravlja svoj avion, potraga princa za shvaćanjem što mu cvijet znači perspektiva i vjerodostojnost odraslih.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=0'">Detalji</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=0#recenzija'">Komentari</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ocjena</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="druzba_pere_kvrdzice_lovrak.jpg" width="100%" min-height="225px" role="img"><title>Placeholder</title>

            <div class="card-body bg-white">
              <p class="card-text"><b>Družba Pere Kvržice</b> <br/> <hr>Djeca su odlučila obnoviti stari mlin kako bi ga predali nesložnim seljanima na uporabu.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=1'">Detalji</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=1#recenzija'">Komentari</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ocjena</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
           <img class="bd-placeholder-img card-img-top" src="zlocin_i_kazna_feniks.jpg" width="100%" min-height="225px" role="img"><title>Placeholder</title>

            <div class="card-body bg-white">
              <p class="card-text"><b>Zločin I Kazna</b><br><hr>Raskoljnikova muči ideja o izvršenju više pravde koju će ostvariti ubojstvom Aljone Ivanove, gramzive lihvarice čijim bi novcima usrećio siromašne, a kad ju ubije muči ga grižnja savjesti zbog toga što je učinio.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=2'">Detalji</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=2#recenzija'">Komentari</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ocjena</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

          <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="MobyDick.jpg" width="100%" min-height="225px" role="img"><title>Placeholder</title>

            <div class="card-body bg-white">
              <p class="card-text"><b>Moby Dick</b><br><hr>Neizmjerni i bojazni, a isto tako i očekivani kitovi predstavljaju za Ahaba, Ishmaela i cijelu posadu pravi kontrast dobra i zla.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=3'">Detalji</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=3#recenzija'">Komentari</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ocjena</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
          <div class="col">
          <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" src="Tom_Sojer.jpg" width="100%" min-height="225px" role="img"><title>Placeholder</title>

            <div class="card-body bg-white">
              <p class="card-text"><b>Tom Sojer</b><br><hr>Pustolovine dječaka Toma i njegovih prijatelja.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=4'">Detalji</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=4#recenzija'">Komentari</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ocjena</button>
                </div>
                <small class="text-muted"id="about">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="Gonic_Zmajeva.jpg" width="100%" min-height="225px"  role="img"><title>Placeholder</title>

            <div class="card-body bg-white">
              <p class="card-text"><b>Gonič Zmajeva</b> </br> <hr>Gonič zmajeva prvi je roman afganistanskog pisca Khaleda Hosseinija, koji je odmah postao uspješnicom, provevši čak 101 tjedan na listi najčitanijih naslova The New York Timesa.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=5'">Detalji</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="document.location='knjiga.php?id=5#recenzija'">Komentari</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ocjena</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
     <div class="about-top">
	<div class="container">
		<h3 class="w3l-title">O Nama</h3>
    <hr>
		<div class="w3layouts_header">
      <p> Mi smo studenti 4. i 5. godine računarstva fakulteta strojarstva, računarstva i elektrotehnike u Mostaru. Znamo se već dugi niz godina i dobri smo prijatelji. Svi jako volimo programirati i dizajnirati stvari pa smo se tako odlučili zajedno raditi na ovom projektu. Ovim projektom želimo proširiti svoje znanje o dizajnu korisničkog sučelja i timskom radu.</p>
		</div>
    <!--
		<div class="col-md-7 wthree-services-bottom-grids">
			<div class="wthree-services-left">
        <img src="school.jpg" alt="" width="400px" position="relative" float="left">
                                
			</div>-->
			
			<!--<div class="clearfix"> </div>-->
      </div>
      <!--<div class="clearfix"> </div>-->
	</div>
     </div>
      <div id="kontakt">
      <?php include 'inc/kontakt.php';?>
      </div>
</div>
</main>


<?php include 'inc/footer.php';



