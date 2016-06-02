<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Contact Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>

      <!-- Top content -->
      <div class="top-content">

          <div class="inner-bg">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-8 col-sm-offset-2 text">
                          <h1><strong>Soybean Disease</strong></h1>
                          <div class="description">
                          	<p>
                            	Ini Lorem Ipsum. Jancok
                          	</p>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6 col-sm-offset-3 form-box">
                      	<div class="form-top">
                      		<div class="form-top-left">
                      			<h3>Soybean</h3>
                          		<p>Fill in the form below to detect soybean's disease</p>
                      		</div>
                      		<div class="form-top-right">
                      			<i class="fa fa-envelope"></i>
                      		</div>
                          </div>
                          <div class="form-bottom contact-form">
		                    <form method="post" action="hasil.php" role="form" >
		                    	<div class="form-group">
		                    		<label>Curah Hujan</label>
                            <select name="precip">
                              <option value="lt-norm">Rendah</option>
                              <option value="norm">Normal</option>
                              <option value="gt-norm">Tinggi</option>
                            </select>
		                      </div>
                          <div class="form-group">
                            <label>Suhu</label>
                            <select name="temp">
                              <option value="lt-norm">Rendah</option>
                              <option value="norm">Normal</option>
                              <option value="gt-norm">Tinggi</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Hujan</label>
                            <select name="hail">
                              <option value="no">Tidak</option>
                              <option value="yes">Ya</option>
                            </select>
                          </div>
                          <div class="form-group">
		                    		<label>Kerusakan Daerah</label>
                            <select name="area-damaged">
                              <option value="scattered">Tersebar</option>
                              <option value="low-areas">Kecil</option>
                              <option value="upper-areas">Cukup Besar</option>
                              <option value="whole-field">Seluruh Bidang</option>
                            </select>
		                      </div>
                          <div class="form-group">
		                    		<label>Kerusakan</label>
                            <select name="severity">
                              <option value="pot-severe">Cukup Parah</option>
                              <option value="severe">Parah</option>
                            </select>
		                      </div>
                          <div class="form-group">
                            <label>Benih</label>
                            <select name="seed-tmt">
                              <option value="none">Tidak Ada</option>
                              <option value="fungicide">Fungisida</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Perkecambahan</label>
                            <select name="germination">
                              <option value="90-100">90% sampai 100%</option>
                              <option value="80-90">80% sampai 89%</option>
                              <option value="lt-80">Kurang dari 80%</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Pertumbuhan Tanaman</label>
                            <select name="plant-growth">
                              <option value="abnorm">Tidak Normal</option>
                              <option value="norm">Normal</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Daun</label>
                            <select name="leaves">
                              <option value="norm">Normal</option>
                              <option value="abnorm">Tidak Normal</option>
                            </select>
                          </div>
                          <!-- leafspot halo -->
                          <div class="form-group">
                            <label>Leafspots Halo</label>
                            <select name="leafspots-halo">
                              <option value="absent">Tidak Ada</option>
                              <option value="yellow-halos">Bercak Kuning</option>
                              <option value="no-yellow-halos">Bukan Bercak Kuning</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Ukuran Bintik Daun</label>
                            <select name="leafspot-size">
                              <option value="dna">Tidak Ada</option>
                              <option value="gt-1/8">Kurang Dari 1/8 bagian</option>
                              <option value="lt-1/8">Lebih Dari 1/8 bagian</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Daun (malf)</label>
                            <select name="leaf-malf">
                              <option value="absent">Tidak Ada</option>
                              <option value="present">Ada</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Cetakan Daun</label>
                            <select name="leaf-mild">
                              <option value="absent">Tidak Ada</option>
                              <option value="upper-surf">Permukaan Atas</option>
                              <option value="lower-surf">Permukaan Bawah</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Batang</label>
                            <select name="stem">
                              <option value="norm">Normal</option>
                              <option value="abnorm">Tidak Normal</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Canker Lesion</label><!-- -->
                            <select name="canker-lesion">
                              <option value="brown">Cokelat</option>
                              <option value="upper-surf">Permukaan Atas</option>
                              <option value="lower-surf">Permukaan Bawah</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Bagian Pembuahan</label>
                            <select name="fruiting-bodies">
                              <option value="absent">Tidak Ada</option>
                              <option value="present">Ada</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Pembusukan Eksternal</label>
                            <select name="external-decay">
                              <option value="absent">Tidak Ada</option>
                              <option value="firm-and-dry">Kering</option>
                              <option value="watery">Berair</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Penghitaman Biji</label>
                            <select name="int-discolor">
                              <option value="none">Tidak Mengalami</option>
                              <option value="brown">Kecokelatan</option>
                              <option value="black">Hitam</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Fruits Pods</label>
                            <select name="fruit-pods">
                              <option value="norm">Normal</option>
                              <option value="diseased">Berpenyakit</option>
                              <option value="few-present">Beberapa Saat</option>
                              <option value="dna">dna</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Benih</label>
                            <select name="seeds">
                              <option value="norm">Normal</option>
                              <option value="abnorm">Tidak Normal</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Akar</label>
                            <select name="roots">
                              <option value="norm">Normal</option>
                              <option value="rooted">Mendalam</option>
                              <option value="galls-cysts">Berkista</option>
                            </select>
                          </div>

		                      <button type="submit" class="btn">Find Disease</button>
		                    </form>
	                    </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>


     

    </body>
    </html>