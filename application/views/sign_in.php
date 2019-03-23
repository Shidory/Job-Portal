<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JobPortal</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        .form{position: 50%;}
    </style>
</head>

<body>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <div class="header-left">
                        <div class="form-inline">
                            
                        </div>

                        <div class="dropdown for-notification">
                            <div class="dropdown-menu" aria-labelledby="notification">
                            </div>
                        </div>

                   
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <section class="probootstrap-section probootstrap-bg-white probootstrap-zindex-above-showcase">
            <div class="container">
              <div class="row">
                <div class="sin_in col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
                
                    <?= form_open("welcome/do_upload");?>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nom" name="nom">
					</div> 
					<div class="form-group">
                      <input type="text" class="form-control" placeholder="Prenom" name="prenom">
					</div>
					<div class="form-group">
                      <input type="text" class="form-control" placeholder="Titre" name="titre">
					</div>
					<div class="form-group">
                      <input type="text" class="form-control" placeholder="Adresse" name="adresse">
					</div>
					<div class="form-group">
                      <input type="text" class="form-control" placeholder="E-mail" name="email">
					</div>
					<div class="form-group">
                      <input type="text" class="form-control" placeholder="Telephone" name="telephone">
					</div>
					<div class="form-group">
                      <input type="text" class="form-control" placeholder="Genre" name="genre">
					</div>
					<div class="form-group">
                      <input type="date" class="form-control" placeholder="Date de naissance" name="datenaiss">
					</div>
					<div class="form-group">
                      <input type="text" class="form-control" placeholder="Nationalité" name="nationalite">
					</div>
					<div class="form-group">
                      <input type="text" class="form-control" placeholder="Etat Civil" name="etatcivil">
                    </div>
                    <div class="form-group">
                      <?php echo form_error('pwd', '<span class="margin"><code>', '</span></code>'); ?>
					</div>
					<div class="form-group">
                      <input type="text" class="form-control" placeholder="Pseudo" name="pseudo">
					</div>
					<div class="form-group">
                      <input type="password" class="form-control" placeholder="Mot de passe" name="pwd">
                    </div>
                    <div class="form-group clearfix mb40">
                      <label for="remember" class="probootstrap-remember"><input type="checkbox" id="remember"> Remember Me</label>
                      <a href="#" class="probootstrap-forgot">Forgot Password?</a>
                    </div>
                    <div class="form-group text-left">
                      <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                          <input type="submit" class="btn btn-primary btn-block" value="Sign Up">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
