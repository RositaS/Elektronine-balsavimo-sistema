<?php
    require_once "config.php";

    session_start();

    if($_SESSION["username"] !== "admin") {
        header("location: error.php");
    }

    $queryCandidates = "SELECT candidate, count(*) as number FROM infosa_tvirtinimas GROUP BY candidate;";
    $queryOptions = "SELECT options, count(*) as numberOpt FROM infosa_tvirtinimas GROUP BY options;";
    $queryOptions1 = "SELECT options1, count(*) as numberOpt1 FROM infosa_tvirtinimas GROUP BY options1;";
    $queryRating = "SELECT AVG(rating) AS avgRtg FROM infosa_tvirtinimas;";
    $queryCouncil = "SELECT council, count(*) as numberCnc FROM infosa_council GROUP BY council;";
    $queryDelegate = "SELECT delegate, count(*) as numberDlg FROM infosa_delegate GROUP BY delegate;";
    $queryUsers = "SELECT user, count(*) as numberUsr FROM infosa_tvirtinimas;";

    $result = mysqli_query($link, $queryCandidates);
    $resultOpt = mysqli_query($link, $queryOptions);
    $resultOpt1 = mysqli_query($link, $queryOptions1);
    $resultRtg = mysqli_query($link, $queryRating);
    $resultCnc = mysqli_query($link, $queryCouncil);
    $resultDlg = mysqli_query($link, $queryDelegate);
    $resultUsr = mysqli_query($link, $queryUsers);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>InfoSA statistikos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = new google.visualization.arrayToDataTable([
                        ['Kandidatai', 'Balsai'],
                        <?php
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "['".$row["candidate"]."', ".$row["number"]."],";
                            }
                        ?>
                    ]);
                    var options = {
                        title: 'Balsai surinkti už pirmininkus',
                        'width':1000,
                        'height':600
                    };
                    var chart = new google.visualization.BarChart(document.getElementById('candidatesChart'));
                    chart.draw(data, options);


                    var dataOpt = new google.visualization.arrayToDataTable([
                        ['Tvirtinimas', 'Balsai'],
                        <?php
                            while($row = mysqli_fetch_array($resultOpt))
                            {
                                echo "['".$row["options"]."', ".$row["numberOpt"]."],";
                            }
                        ?>
                    ]);
                    var optionsOpt = {
                        title: 'Ar patvirtinti ataskaitą?',
                        'width':1000,
                        'height':800
                    };
                    var chartOpt = new google.visualization.PieChart(document.getElementById('optionsChart'));
                    chartOpt.draw(dataOpt, optionsOpt);


                    var dataOpt1 = new google.visualization.arrayToDataTable([
                        ['Tvirtinimas', 'Balsai'],
                        <?php
                            while($row = mysqli_fetch_array($resultOpt1))
                            {
                                echo "['".$row["options1"]."', ".$row["numberOpt1"]."],";
                            }
                        ?>
                    ]);
                    var optionsOpt1 = {
                        title: 'Patvirtinti narių sąrašą',
                        'width':1000,
                        'height':800
                    };
                    var chartOpt1 = new google.visualization.PieChart(document.getElementById('options1Chart'));
                    chartOpt1.draw(dataOpt1, optionsOpt1);


                    var dataCnc = new google.visualization.arrayToDataTable([
                        ['Tarybos nariai', 'Balsai'],
                        <?php
                            while($row = mysqli_fetch_array($resultCnc))
                            {
                                echo "['".$row["council"]."', ".$row["numberCnc"]."],";
                            }
                        ?>
                    ]);
                    var optionsCnc = {
                        title: 'Balsai už tarybos narius',
                        'width':1000,
                        'height':600
                    };
                    var chartCnc = new google.visualization.BarChart(document.getElementById('councilChart'));
                    chartCnc.draw(dataCnc, optionsCnc);


                    var dataDlg = new google.visualization.arrayToDataTable([
                        ['Delegatai', 'Balsai'],
                        <?php
                            while($row = mysqli_fetch_array($resultDlg))
                            {
                                echo "['".$row["delegate"]."', ".$row["numberDlg"]."],";
                            }
                        ?>
                    ]);
                    var optionsDlg = {
                        title: 'Balsai už delegatus',
                        'width':1000,
                        'height':600
                    };
                    var chartDlg = new google.visualization.BarChart(document.getElementById('delegateChart'));
                    chartDlg.draw(dataDlg, optionsDlg);
                }
            </script>
        </div>
    </head>
    <body>
        <nav class="navtop">
            <div>
                <h1>Elektroninė balsavimo sistema</h1>
            </div>
        </nav>
        <div class="content home" align="center">
            <br> <b>
            <p>InfoSA balsavimo rezultatų statistika</p>
            </b>
        </div>
        <div id="optionsChart" align="center"></div>
        <div id="candidatesChart" align="center"></div>
        <div id="councilChart" align="center"></div>
        <div id="delegateChart" align="center"></div>
        <div id="options1Chart" align="center"></div>
        <div align="center">
                <?php
                    $avg = mysqli_fetch_assoc($resultRtg);
                    echo "<b>Įvertinimo vidurkis: ". $avg['avgRtg']."</b>";
                ?>
        </div>
        <div align="center">
                <?php
                    $userCount = mysqli_fetch_assoc($resultUsr);
                    echo "<b>Balsavusių skaičius: ". $userCount['numberUsr']."</b>";
                ?>
        </div>
        <p></p>
        <div align="center">
        <a href="statistika.php" class="btn btn-primary">Grįžti į statistikų meniu</a>
        <a href="logout.php" class="btn btn-danger">Atsijungti</a>
        </div>
  </body>
</html>