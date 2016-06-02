<?php


$var1 = $_POST['precip'];
$var2 = $_POST['temp'];
$var3 = $_POST['hail'];
$var4 = $_POST['area-damaged'];
$var5 = $_POST['severity'];
$var6 = $_POST['seed-tmt'];
$var7 = $_POST['germination'];
$var8 = $_POST['plant-growth'];
$var9 = $_POST['leaves'];
$var10 = $_POST['leafspots-halo'];
$var11 = $_POST['leafspot-size'];
$var12 = $_POST['leaf-malf'];
$var13 = $_POST['leaf-mild'];
$var14 = $_POST['stem'];
$var15 = $_POST['canker-lesion'];
$var16 = $_POST['fruiting-bodies'];
$var17 = $_POST['external-decay'];
$var18 = $_POST['int-discolor'];
$var19 = $_POST['fruit-pods'];
$var20 = $_POST['seeds'];
$var21 = $_POST['roots'];

  $arr = array('precip'=>$var1,
      'temp'=>$var2,
      'hail'=>$var3,
      'areadamaged'=>$var4,
      'severity'=>$var5,
      'seedtmt'=>$var6,
      'germination'=>$var7,
      'plantgrowth'=>$var8,
      'leaves'=>$var9,
      'leafspotshalo'=>$var10,
      'leafspotsize'=>$var11,
      'leafmalf'=>$var12,
      'leafmild'=>$var13,
      'stem'=>$var14,
      'cankerlesion'=>$var15,
      'fruitingbodies'=>$var16,
      'externaldecay'=>$var17,
      'intdiscolor'=>$var18,
      'fruitpods'=>$var19,
      'seed'=>$var20,
      'roots'=>$var21
      );

$array = json_encode($arr);

?>

<html>
  <head>
    <meta charset="UTF-8">

    <title>Sistem Pakar - Decision Tree</title>
    <meta name="description" content="Sistem Pakar 10 - Identifying Soybean by Decision Tree">
    <meta name="keywords" content="Sistem Pakar, sispak, sispak ipb">
    <meta name="author" content="Kelompok 6 Sispak">

    <link rel="stylesheet" href="pygment_trac.css">
    <link rel="stylesheet" href="sweetalert.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
    <script type="text/javascript" src="https://raw.github.com/strathausen/dracula/master/source/dracula_graph.js"></script>
    <script type="text/javascript" src="https://raw.github.com/DmitryBaranovskiy/raphael/master/raphael-min.js"></script>
    <script type="text/javascript" src="http://sigmajs.org/js/sigma.min.js"></script>
    <script type="text/javascript" src="https://raw.github.com/strathausen/dracula/master/js/dracula_graffle.js"></script>
    <script type="text/javascript" src="https://raw.github.com/strathausen/dracula/master/js/dracula_graph.js"></script>
    <script type="text/javascript" src="https://raw.github.com/strathausen/dracula/master/js/dracula_algorithms.js"></script>
    <script type="text/javascript" src="js/soybean.js"></script>
    <script type="text/javascript" src="http://d3js.org/d3.v2.js"></script>
    <script type="text/javascript" src="js/id3.js"></script>
    <script type="text/javascript" src="sweetalert.min.js"></script>
    <script type="text/javascript" src="sweetalert-dev.js"></script>
    <script type="text/javascript" src='https://www.google.com/jsapi?autoload={"modules":[{"name":"visualization","version":"1","packages":["orgchart"]}]}'></script>

    <script type="text/javascript">
      var samples = [<?php echo json_encode($arr);?>];
    </script>

    <script type="text/javascript">
    $(document).ready(function(){

      var testModel = id3(examples,'class',features);
      drawGraph(testModel,'canvas');
      renderSamples(samples,$("#samples"),testModel,'class',features);
      renderTrainingData(examples,$("#training"),'class',features);

      prediksi(samples,$("#prediksi"),testModel,'class',features);

    });

    </script>

    <script type="text/javascript">
    // function prediksi(){
    //   sweetAlert("dwadwa");
    // }
    </script>
  </head>
  <body style="background-color:#1abc9c;">
<?php echo ($array);?>
    <div hidden id='canvas'></div>
    <script type="text/javascript">

    </script>


  </body>
</html>
