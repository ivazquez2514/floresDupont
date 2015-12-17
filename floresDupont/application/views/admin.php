<!DOCTYPE html>
<html ng-app="FloresDupontApp">
<head>
	<title>Flores Dupont Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script type="text/javascript" src="<?= base_url('assets/js/angular.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/angular-resource.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/angular-route.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/app/app.js')?>"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main_layout.css');?>">
    <script type="text/javascript" src="<?= base_url('assets/js/jquery-2.1.4.js');?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js');?>">
    <script type="text/javascript" src="<?= base_url('assets/js/si-table.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/app/controllers/PropertiesController.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/ui-bootstrap-tpls-0.14.3.min.js');?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    
    <style>
      
    </style>
    
</head>
<body>
    <div id="wrap">
        <header>
            <nav class="navbar navbar-default" style="background: #003580;">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Flores Dupont</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#/dashboard" class="main-menu-option hover-effect"><i class="fa fa-tachometer"></i>Dashboard</a></li>
            <li><a href="#/propiedades" class="main-menu-option hover-effect"><i class="fa fa-key"></i>Propiedades</a></li>
            <li><a href="#"><i class="fa fa-users"></i>Vendedores</a></li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-map-o"></i>Secciones Sitio <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Landing</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Inmuebles</a></li>
                <li><a href="#">Vende</a></li>
                <li><a href="#">Contacto</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>Darbo Escalante <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="">Cerrar sesi&oacute;n</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    </header>
        
    <div ng-view></div>
        
    <!--<footer>
        <div class="container">
                <strong>SAP (Sistema Administrativo de Propiedades)</strong>
                 © 2015 Flores Dupont
        </div>
    </footer>-->
    </div>
</body>
</html>
