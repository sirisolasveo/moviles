
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>INFORMACION DE MEDIDOR</title>

   <!-- css -->
  <link href="<?php echo constant('URL');?>public/main/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo constant('URL');?>public/main/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>public/main/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="<?php echo constant('URL');?>public/main/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="<?php echo constant('URL');?>public/main/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo constant('URL');?>public/main/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="<?php echo constant('URL');?>public/main/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="<?php echo constant('URL');?>public/main/css/animate.css" rel="stylesheet" />
  <link href="<?php echo constant('URL');?>public/main/css/style.css" rel="stylesheet">
  <link href="<?php echo constant('URL');?>public/main/css/informacion.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="<?php echo constant('URL');?>public/main/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="<?php echo constant('URL');?>public/main/color/default.css" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
 
 <div id="wrapper">
  <?php  require 'views/header.php'; ?>

     <section id="intro" class="intro informacion">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">CONSUMO ACTUAL</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">__<span class="color">EMAPAT</span>__</h4>
              </div>
              
              <div class="panel panel-skin">
                    <div class="panel-heading">
                      <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>RESULTADOS<small>(esto facil!)</small></h3>
                    </div>
                    <div class="panel-body">
                   
                      <form action="" method="post" role="form" class="contactForm lead">
                        <div class="row">
                           <h2>MES PASADO</h2>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>AÑO:</label>
                              <input type="number" value="2019" name="first_name" id="first_name" class="form-control input-md">
                              <div class="validation"></div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>MES:</label>
                              <input type="text" value="ENERO" name="last_name" id="last_name" class="form-control input-md">
                              <div class="validation"></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                           <h2>_________</h2>
                           <H1>30.oo<small> soles</small></H1> 
                        </div>

                        <div class="row">
                            <h2>MES ACTUAL</h2>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>AÑO:</label>
                              <input type="number" value="2019" name="first_name" id="first_name" class="form-control input-md">
                              <div class="validation"></div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>MES:</label>
                              <input type="text" value="ENERO" name="last_name" id="last_name" class="form-control input-md">
                              <div class="validation"></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                           <h2>_________</h2>
                           <H1>30.oo<small> soles</small></H1> 
                        </div>


                        <input type="submit" value="ESTOY DE ACUERDO" class="btn btn-skin btn-block btn-lg"><br>

                      </form>
                        <a href="reclamos.html" class="text-danger">NO ESTOY DE ACUERDO</a>
                    </div>
                  </div> 
              
            </div>
      
          </div>
        </div>
      </div>
    </section>     


  <?php  require 'views/footer.php'; ?>
 </div>

</body>
</html>