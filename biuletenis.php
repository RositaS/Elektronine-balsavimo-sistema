<?php
// examplepage.php
include 'functions.php';
date_default_timezone_set('Europe/Vilnius');
$data = date("Y-m-d H:i");
$pdo = pdo_connect_mysql();
?>

<?=template_header('Polls')?>

<div class="content home">
	<h2><?php echo $data?></h2>
    <p>InfoSA</p>
    <p>InfoSA pirmininko/-ės metinės veiklos ataskaitos tvirtinimas</p>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option1"> Tvirtinu
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="option2"> Netvirtinu
  </label>
  <p></p>
  <p>InfoSA pirmininko/-ės rinkimai</p>
    <p>	Kandidatai (-as) į KTU fakultetinės studentų atstovybės InfoSA pirmininko postą:
        <i>Pastaba: jei yra du ir daugiau kandidatų, balsuoti tik už vieną kandidatą.</i>
    </p>
  <p>Kandidatai:</p>
  <select class="custom-select custom-select-sm">
  <option value="1">Lina Linaitė</option>
  <option value="2">Ana Ananaitė</option>
  <option value="3">Paulė Paulaitė</option>
  </select>
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
  </script>
  <p>
  <div>
  <input id='1' type="checkbox" name="boxsize[]" onclick="CountChecks('kandidatai',3,this)" value="Tomas">Tomas
  </div>
  <div>
  <input id='2' type="checkbox" name="boxsize[]" onclick="CountChecks('kandidatai',3,this)" value="Patricija">Patricija
  </div> 
  <div>
  <input id='3' type="checkbox" name="boxsize[]" onclick="CountChecks('kandidatai',3,this)" value="Hana">Hana
  </div>
  <div>
  <input id='4' type="checkbox" name="boxsize[]" onclick="CountChecks('kandidatai',3,this)" value="Montana">Montana
  </div>
  </p>

  <p>Delegatai į KTU SA konferenciją (Pasirinkite 9)</p>
    <p>Kandidatai į KTU SA ataskaitinę-rinkiminę konferenciją:
        <i>Pastaba: renkami devyni KTU SA ataskaitinės–rinkiminės konferencijos delegatai, dešimtas pagal pareigas – fakultetinės studentų atstovybės pirmininkas.</i>
    </p>
  <p>
  <div>
  <input id='d1' type="checkbox" name="boxsize[]" onclick="CountChecks('delegatai',9,this)" value="Ina Inaitė">Ina
  </div>
  <div>
  <input id='d2' type="checkbox" name="boxsize[]" onclick="CountChecks('delegatai',9,this)" value="Ona Onaitė">Ona
  </div> 
  <div>
  <input id='d3' type="checkbox" name="boxsize[]" onclick="CountChecks('delegatai',9,this)" value="Jonas Jonaitis">Jonas
  </div>
  <div>
  <input id='d4' type="checkbox" name="boxsize[]" onclick="CountChecks('delegatai',9,this)" value="Paulė Paulaitė">Paulė
  </div>
  <div>
  <input id='d5' type="checkbox" name="boxsize[]" onclick="CountChecks('delegatai',9,this)" value="Toma Tomaitė">Toma
  </div>
  <div>
  <input id='d6' type="checkbox" name="boxsize[]" onclick="CountChecks('delegatai',9,this)" value="Eglė Eglaitė">Eglė
  </div>
  <div>
  <input id='d7' type="checkbox" name="boxsize[]" onclick="CountChecks('delegatai',9,this)" value="Sima Simaitė">Sima
  </div>
  <div>
  <input id='d8' type="checkbox" name="boxsize[]" onclick="CountChecks('delegatai',9,this)" value="Rita Ritaitė">Rita
  </div>
  <div>
  <input id='d9' type="checkbox" name="boxsize[]" onclick="CountChecks('delegatai',9,this)" value="Rasa Rasaitė">Rasa
  </div>
  <div>
  <input id='d10' type="checkbox" name="boxsize[]" onclick="CountChecks('delegatai',9,this)" value="Ūkas Ūkaitis">Ūkas
  </div>
  </p>
  <p></p>
  <p>InfoSA narių sąrašo tvirtinimas</p>
    <p>	Kandidatai į KTU Informatikos fakulteto Tarybą:
        Pastaba: renkami trys atstovai į fakulteto Tarybą, ketvirtasis – pagal pareigas yra fakultetinės atstovybės pirmininkas.
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
    <input type="radio" name="options" id="tvirtinu"> Tvirtinu
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="options" id="netvirtinu"> Netvirtinu
  </label>
  <p>InfoSA vertinimas balu</P>
  <select class="custom-select custom-select-sm">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  </select>
  <p></p>
  <p></p>
  <a href="pabaiga.php" class="btn btn-success">Pateikti</a>
</div>

  

  <?=template_footer()?>