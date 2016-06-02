<?php

  $outlook = "kampag";
  $temp = "kjasdhjk";
  $humidity = "ksjd";
  $wind = "ksjdfh";

  $arr = array('outlook' => $outlook, 'temp' => $temp, 'humidity' => $humidity, 'wind' => $wind );

  $array = json_encode($arr);

?>

<html>
  <head>
    <meta charset="UTF-8">

    <title>Sistem Pakar - Decision Tree</title>
    <meta name="description" content="Sistem Pakar 10 - Identifying Soybean by Decision Tree">
    <meta name="keywords" content="Sistem Pakar, sispak, sispak ipb">
    <meta name="author" content="Ivan Maulana">

    <link rel="stylesheet" href="pygment_trac.css">
    <link rel="stylesheet" href="sweetalert.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.1/css/formValidation.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
    <script type="text/javascript" src="https://raw.github.com/strathausen/dracula/master/source/dracula_graph.js"></script>
    <script type="text/javascript" src="https://raw.github.com/DmitryBaranovskiy/raphael/master/raphael-min.js"></script>
    <script type="text/javascript" src="http://sigmajs.org/js/sigma.min.js"></script>
    <script type="text/javascript" src="https://raw.github.com/strathausen/dracula/master/js/dracula_graffle.js"></script>
    <script type="text/javascript" src="https://raw.github.com/strathausen/dracula/master/js/dracula_graph.js"></script>
    <script type="text/javascript" src="https://raw.github.com/strathausen/dracula/master/js/dracula_algorithms.js"></script>
    <script type="text/javascript" src="js/examples.js"></script>
    <script type="text/javascript" src="js/tic-tac-examples.js"></script>
    <script type="text/javascript" src="js/voting-examples.js"></script>
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

      var testModel = id3(examples,'play',features);
      drawGraph(testModel,'canvas');
      renderSamples(samples,$("#samples"),testModel,'play',features);
      renderTrainingData(examples,$("#training"),'play',features);

      prediksi(samples,$("#prediksi"),testModel,'play',features);

    });

    </script>

    <script type="text/javascript">
    // function prediksi(){
    //   sweetAlert("dwadwa");
    // }
    </script>
  </head>
  <body>

    <form method="post" action="hasil.php" role="form" >
                                <div class="form-group">
                                    <label>Curah Hujan</label>
                            <select name="precip" class="js-example-basic-single form-control">
                              <option value="lt-norm">Rendah</option>
                              <option value="norm">Normal</option>
                              <option value="gt-norm">Tinggi</option>
                            </select>
                              </div>
                          <div class="form-group">
                            <label>Suhu</label>
                            <select name="temp" class="js-example-basic-single form-control">
                              <option value="lt-norm">Rendah</option>
                              <option value="norm">Normal</option>
                              <option value="gt-norm">Tinggi</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Hujan</label>
                            <select name="hail" class="js-example-basic-single form-control">
                              <option value="no">Tidak</option>
                              <option value="yes">Ya</option>
                            </select>
                          </div>
                          <div class="form-group">
                                    <label>Kerusakan Daerah</label>
                            <select name="area-damaged" class="js-example-basic-single form-control">
                              <option value="scattered">Tersebar</option>
                              <option value="low-areas">Kecil</option>
                              <option value="upper-areas">Cukup Besar</option>
                              <option value="whole-field">Seluruh Bidang</option>
                            </select>
                              </div>
                          <div class="form-group">
                                    <label>Kerusakan</label>
                            <select name="severity" class="js-example-basic-single form-control">
                              <option value="pot-severe">Cukup Parah</option>
                              <option value="severe">Parah</option>
                            </select>
                              </div>
                          <div class="form-group">
                            <label>Benih</label>
                            <select name="seed-tmt" class="js-example-basic-single form-control">
                              <option value="none">Tidak Ada</option>
                              <option value="fungicide">Fungisida</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Perkecambahan</label>
                            <select name="germination" class="js-example-basic-single form-control">
                              <option value="90-100">90% sampai 100%</option>
                              <option value="80-90">80% sampai 89%</option>
                              <option value="lt-80">Kurang dari 80%</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Pertumbuhan Tanaman</label>
                            <select name="plant-growth" class="js-example-basic-single form-control">
                              <option value="abnorm">Tidak Normal</option>
                              <option value="norm">Normal</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Daun</label>
                            <select name="leaves" class="js-example-basic-single form-control">
                              <option value="norm">Normal</option>
                              <option value="abnorm">Tidak Normal</option>
                            </select>
                          </div>
                          <!-- leafspot halo -->
                          <div class="form-group">
                            <label>Leafspots Halo</label>
                            <select name="leafspots-halo" class="js-example-basic-single form-control">
                              <option value="absent">Tidak Ada</option>
                              <option value="yellow-halos">Bercak Kuning</option>
                              <option value="no-yellow-halos">Bukan Bercak Kuning</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Ukuran Bintik Daun</label>
                            <select name="leafspot-size" class="js-example-basic-single form-control">
                              <option value="dna">Tidak Ada</option>
                              <option value="gt-1/8">Kurang Dari 1/8 bagian</option>
                              <option value="lt-1/8">Lebih Dari 1/8 bagian</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Daun (malf)</label>
                            <select name="leaf-malf" class="js-example-basic-single form-control">
                              <option value="absent">Tidak Ada</option>
                              <option value="present">Ada</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Cetakan Daun</label>
                            <select name="leaf-mild" class="js-example-basic-single form-control">
                              <option value="absent">Tidak Ada</option>
                              <option value="upper-surf">Permukaan Atas</option>
                              <option value="lower-surf">Permukaan Bawah</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Batang</label>
                            <select name="stem" class="js-example-basic-single form-control">
                              <option value="norm">Normal</option>
                              <option value="abnorm">Tidak Normal</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Canker Lesion</label><!-- -->
                            <select name="canker-lesion" class="js-example-basic-single form-control">
                              <option value="brown">Cokelat</option>
                              <option value="dna">Permukaan Atas</option>
                              <option value="dk-brown-blk">dk-brown-blk</option>
                              <option value="tan">tan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Bagian Pembuahan</label>
                            <select name="fruiting-bodies" class="js-example-basic-single form-control">
                              <option value="absent">Tidak Ada</option>
                              <option value="present">Ada</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Pembusukan Eksternal</label>
                            <select name="external-decay" class="js-example-basic-single form-control">
                              <option value="absent">Tidak Ada</option>
                              <option value="firm-and-dry">Kering</option>
                              <option value="watery">Berair</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Penghitaman Biji</label>
                            <select name="int-discolor" class="js-example-basic-single form-control">
                              <option value="none">Tidak Mengalami</option>
                              <option value="brown">Kecokelatan</option>
                              <option value="black">Hitam</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Fruits Pods</label>
                            <select name="fruit-pods" class="js-example-basic-single form-control">
                              <option value="norm">Normal</option>
                              <option value="diseased">Berpenyakit</option>
                              <option value="few-present">Beberapa Saat</option>
                              <option value="dna">dna</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Benih</label>
                            <select name="seeds" class="js-example-basic-single form-control">
                              <option value="norm">Normal</option>
                              <option value="abnorm">Tidak Normal</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Akar</label>
                            <select name="roots" class="js-example-basic-single form-control">
                              <option value="norm">Normal</option>
                              <option value="rooted">Busuk</option>
                              <option value="galls-cysts">Berkista</option>
                            </select>
                          </div>

                              <button type="submit" class="btn">Find Disease</button>
                            </form>

    

<script>
// $(document).ready(function() {
//     var titleValidators = {
//             row: '.col-xs-4',   // The title is placed inside a <div class="col-xs-4"> element
//             validators: {
//                 notEmpty: {
//                     message: 'The title is required'
//                 }
//             }
//         },
//         isbnValidators = {
//             row: '.col-xs-4',
//             validators: {
//                 notEmpty: {
//                     message: 'The ISBN is required'
//                 },
//                 isbn: {
//                     message: 'The ISBN is not valid'
//                 }
//             }
//         },
//         priceValidators = {
//             row: '.col-xs-2',
//             validators: {
//                 notEmpty: {
//                     message: 'The price is required'
//                 },
//                 numeric: {
//                     message: 'The price must be a numeric number'
//                 }
//             }
//         },
//         bookIndex = 0;

//     $('#bookForm')
//         .formValidation({
//             framework: 'bootstrap',
//             icon: {
//                 valid: 'glyphicon glyphicon-ok',
//                 invalid: 'glyphicon glyphicon-remove',
//                 validating: 'glyphicon glyphicon-refresh'
//             },
//             fields: {
//                 'book[0].title': titleValidators,
//                 'book[0].isbn': isbnValidators,
//                 'book[0].price': priceValidators
//             }
//         })

//         // Add button click handler
//         .on('click', '.addButton', function() {
//             bookIndex++;
//             var $template = $('#bookTemplate'),
//                 $clone    = $template
//                                 .clone()
//                                 .removeClass('hide')
//                                 .removeAttr('id')
//                                 .attr('data-book-index', bookIndex)
//                                 .insertBefore($template);

//             // Update the name attributes
//             $clone
//                 .find('[name="title"]').attr('name', 'book[' + bookIndex + '].title').end()
//                 .find('[name="isbn"]').attr('name', 'book[' + bookIndex + '].isbn').end()
//                 .find('[name="price"]').attr('name', 'book[' + bookIndex + '].price').end();

//             // Add new fields
//             // Note that we also pass the validator rules for new field as the third parameter
//             $('#bookForm')
//                 .formValidation('addField', 'book[' + bookIndex + '].title', titleValidators)
//                 .formValidation('addField', 'book[' + bookIndex + '].isbn', isbnValidators)
//                 .formValidation('addField', 'book[' + bookIndex + '].price', priceValidators);
//         })

//         // Remove button click handler
//         .on('click', '.removeButton', function() {
//             var $row  = $(this).parents('.form-group'),
//                 index = $row.attr('data-book-index');

//             // Remove fields
//             $('#bookForm')
//                 .formValidation('removeField', $row.find('[name="book[' + index + '].title"]'))
//                 .formValidation('removeField', $row.find('[name="book[' + index + '].isbn"]'))
//                 .formValidation('removeField', $row.find('[name="book[' + index + '].price"]'));

//             // Remove element containing the fields
//             $row.remove();
//         });
// });
</script>


  </body>
</html>
