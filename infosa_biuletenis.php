<?php
date_default_timezone_set('Europe/Vilnius');
$data = date("Y-m-d H:i");
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>InfoSA balsavimas</title>
      <link rel="stylesheet" href="stylesheet.css" type="text/css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navtop">
          <div>
              <h1>Elektroninė balsavimo sistema</h1>
          </div>
    </nav>
  <div class="content home">
    <h2><?php echo $data?></h2>
      <p>InfoSA</p>
      <p>InfoSA pirmininko/-ės metinės veiklos ataskaitos tvirtinimas</p>
    <form action="infosa_insert.php" method="POST">
      <label class="btn btn-secondary">
        <input type="radio" name="options1" id="option1" value="Tvirtinu"> Tvirtinu
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="options1" id="option2" value="Netvirtinu"> Netvirtinu
      </label>
      <p></p>
      <p>InfoSA pirmininko/-ės rinkimai</p>
        <p>	Kandidatai (-as) į KTU fakultetinės studentų atstovybės InfoSA pirmininko postą:
            <i>Pastaba: jei yra du ir daugiau kandidatų, balsuoti tik už vieną kandidatą.</i>
        </p>
      <p>Kandidatai:</p>
      <input list="candidates" name="candidate" id="candidate">
      <datalist id="candidates">
        <option value="Lina Linaitė">
        <option value="Ana Ananaitė">
        <option value="Paulė Paulaitė">
      </datalist>
      <p></p>
      <p>Kandidatai į KTU informatikos fakulteto tarybą</p>
        <p>	Kandidatai į KTU Informatikos fakulteto Tarybą:
            <i>Pastaba: renkami trys atstovai į fakulteto Tarybą, ketvirtasis – pagal pareigas yra fakultetinės atstovybės pirmininkas.</i>
        </p>
      <script type="text/javascript">
      function CountChecks(whichlist,maxchecked,latestcheck) {

      var kandidatai = new Array("1", "2", "3", "4");
      var delegatai = new Array("d1", "d2", "d3", "d4", "d5", "d6", "d7", "d8", "d9", "d10");

      var iterationlist;
      eval("iterationlist="+whichlist);
      var count = 0;
      for( var i=0; i<iterationlist.length; i++ ) {
        if( document.getElementById(iterationlist[i]).checked == true) { count++; }
        if( count > maxchecked ) { latestcheck.checked = false; }
        }
      if( count > maxchecked ) {
        alert('Pasirinkite ' + maxchecked);
        }
      }
      function CountChecks1(whichlist,maxchecked,latestcheck) {

      var kandidatai = new Array("1", "2", "3", "4");
      var delegatai = new Array("d1", "d2", "d3", "d4", "d5", "d6", "d7", "d8", "d9", "d10");

      var iterationlist;
      eval("iterationlist="+whichlist);
      var count = 0;
      for( var i=0; i<iterationlist.length; i++ ) {
        if( document.getElementById(iterationlist[i]).checked == true) { count++; }
        if( count > maxchecked ) { latestcheck.checked = false; }
        }
      if( count != maxchecked ) {
        alert('Pasirinkite ' + maxchecked);
        }
      }
      </script>
      <p>
      <div class="form-check">
      <input id='1' type="checkbox" name="council1" class="form-check-input" onclick="CountChecks('kandidatai',3,this)" value="Tomas Blužas">
      <label for="1" class="form-check-label">Tomas Blužas</label>
      </div>
      <div class="form-check">
      <input id='2' type="checkbox" name="council2" class="form-check-input" onclick="CountChecks('kandidatai',3,this)" value="Patricija Petė">
      <label for="2" class="form-check-label">Patricija Petė</label>
      </div> 
      <div class="form-check">
      <input id='3' type="checkbox" name="council3" class="form-check-input" onclick="CountChecks('kandidatai',3,this)" value="Hana Bana">
      <label for="3" class="form-check-label">Hana Bana</label>
      </div>
      <div class="form-check">
      <input id='4' type="checkbox" name="council4" class="form-check-input" onclick="CountChecks('kandidatai',3,this)" value="Montana Krysko">
      <label for="4" class="form-check-label">Montana Krysko</label>
      </div>
      </p>
      <p>Delegatai į KTU SA konferenciją (Pasirinkite 9)</p>
        <p>Kandidatai į KTU SA ataskaitinę-rinkiminę konferenciją:
            <i>Pastaba: renkami devyni KTU SA ataskaitinės–rinkiminės konferencijos delegatai, dešimtas pagal pareigas – fakultetinės studentų atstovybės pirmininkas.</i>
        </p>
      <p>
      <div class="form-check">
      <input id='d1' type="checkbox" name="delegate1" class="form-check-input" onclick="CountChecks('delegatai',9,this)" value="Ina Inaitė">
      <label for="d1" class="form-check-label">Ina Inaitė</label>
      </div>
      <div class="form-check">
      <input id='d2' type="checkbox" name="delegate2" class="form-check-input" onclick="CountChecks('delegatai',9,this)" value="Ona Onaitė">
      <label for="d2" class="form-check-label">Ona Onaitė</label>
      </div> 
      <div class="form-check">
      <input id='d3' type="checkbox" name="delegate3" class="form-check-input" onclick="CountChecks('delegatai',9,this)" value="Jonas Jonaitis">
      <label for="d3" class="form-check-label">Jonas Jonaitis</label>
      </div>
      <div class="form-check">
      <input id='d4' type="checkbox" name="delegate4" class="form-check-input" onclick="CountChecks('delegatai',9,this)" value="Paulė Paulaitė">
      <label for="d4" class="form-check-label">Paulė Paulaitė</label>
      </div>
      <div class="form-check">
      <input id='d5' type="checkbox" name="delegate5" class="form-check-input" onclick="CountChecks('delegatai',9,this)" value="Toma Tomaitė">
      <label for="d5" class="form-check-label">Toma Tomaitė</label>
      </div>
      <div class="form-check">
      <input id='d6' type="checkbox" name="delegate6" class="form-check-input" onclick="CountChecks('delegatai',9,this)" value="Eglė Eglaitė">
      <label for="d6" class="form-check-label">Eglė Eglaitė</label>
      </div>
      <div class="form-check">
      <input id='d7' type="checkbox" name="delegate7" class="form-check-input" onclick="CountChecks('delegatai',9,this)" value="Sima Simaitė">
      <label for="d7" class="form-check-label">Sima Simaitė</label>
      </div>
      <div class="form-check">
      <input id='d8' type="checkbox" name="delegate8" class="form-check-input" onclick="CountChecks('delegatai',9,this)" value="Rita Ritaitė">
      <label for="d8" class="form-check-label">Rita Ritaitė</label>
      </div>
      <div class="form-check">
      <input id='d9' type="checkbox" name="delegate9" class="form-check-input" onclick="CountChecks('delegatai',9,this)" value="Rasa Rasaitė">
      <label for="d9" class="form-check-label">Rasa Rasaitė</label>
      </div>
      <div class="form-check">
      <input id='d10' type="checkbox" name="delegate10" class="form-check-input" onclick="CountChecks('delegatai',9,this)" value="Ūkas Ūkaitis">
      <label for="d10" class="form-check-label">Ūkas Ūkaitis</label>
      </div>
      </p>
      <p></p>
      <p>InfoSA narių sąrašo tvirtinimas</p>
        <p>Kandidatai į KTU Informatikos fakulteto Tarybą:
            <i>Pastaba: renkami trys atstovai į fakulteto Tarybą, ketvirtasis – pagal pareigas yra fakultetinės atstovybės pirmininkas.</i>
        </p>
      <p></p>
      <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Vardas</th>
          <th scope="col">Pavardė</th>
          <th scope="col">Kursas</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Tomas </th>
          <th scope="row">Tomaitis</th>
          <td>2</td>
        </tr>
        <tr>
          <th scope="row">Patricija</th>
          <th scope="row">Patricinė</th>
          <td>2</td>
        </tr>
        <tr>
          <th scope="row">Jonas</th>
          <th scope="row">Jonaitis</th>
          <td>2</td>
        </tr>
        <tr>
          <th scope="row">Saulė</th>
          <th scope="row">Saulytė</th>
          <td>2</td>
        </tr>
      </tbody>
      </table>
      <label class="btn btn-secondary">
        <input type="radio" name="options3" id="tvirtinu" value="Tvirtinu"> Tvirtinu
      </label>
      <label class="btn btn-secondary">
        <input type="radio" name="options3" id="netvirtinu" value="Netvirtinu"> Netvirtinu
      </label>
      <p>InfoSA vertinimas balu</P>
      <input list="ratings" name="rating" id="rating">
      <datalist id="ratings">
        <option value="1">
        <option value="2">
        <option value="3">
        <option value="4">
        <option value="5">
        <option value="6">
        <option value="7">
        <option value="8">
        <option value="9">
        <option value="10">
      </datalist>
      <p></p>
      <p></p>
      <button type="submit" name="submit" class="btn btn-primary">Pateikti</button>
    </form>
  </div>
  </body>
</html>