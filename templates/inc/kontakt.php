<head> 
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
        <div class="container1 p-5">
            <h2>Kontaktirajte nas</h2>
            <hr style="background-color:black">
          <form>
          <div class="row">
            <div class="col-25">
              <label for="fname">Ime</label>
            </div>
            <div class="col-75">
              <input type="text"  placeholder="Your name.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Prezime</label>
            </div>
            <div class="col-75">
              <input type="text"placeholder="Your last name.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="country">Država</label>
            </div>
            <div class="col-75">
              <select required>
                <!--
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                -->
                <option value="croatia">Hrvatska</option>
                <option value="bih">Bosna i Hercegovina</option>
                <option value="serbia">Srbija</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="subject">Poruka</label>
            </div>
            <div class="col-75">
              <textarea placeholder="Write something.." style="height:200px" required></textarea>
            </div>
          </div>
          <div class="row">
              <input type="submit" formaction="/Korisnicka/templates/inc/scc.php" class="btn btn-success"  value="Submit">
          </div>
          </form>
