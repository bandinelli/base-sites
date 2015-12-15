<!DOCTYPE html>
<html ng-app="app" lang="pt-Br">
<head>
  <title>Clínica Moi</title>
  <meta charset="UTF-8">
  <meta name="description" content="Clínica Moi" />
  <meta name="keywords" content="Clínica Moi" />
  <meta name="author" content="ODNET / +55 (51) 3707-0107" />
  <meta name="google-site-verification" content=""/>
  <meta name="robots" content="all"/>
  <meta name="resource-type" content="document"/>
  <meta name="distribution" content="Global"/>
  <meta name="rating" content="General"/>
  <meta name="doc-class" content="Completed"/>
  <meta name="doc-rights" content="Public"/>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="Clínica Moi" />
  <meta property="og:url" content="http://clinicamoi.com.br" />
  <meta property="og:locale" content="pt-BR" />
  <meta property="og:image" content="http://clinicamoi.com.br/img/">
  <meta property="og:image:type" content="image/png">

  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css" />

  <base href="http://localhost:8080/base_site_odnet/">
</head>
<body>

  <header class="topo">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <a href="index.php">
            <!-- <img src="assets/images/logo.png" class="img-responsive" /> -->
          </a>
        </div>

        <div class="col-sm-12 col-md-6">
          <nav class="navegation" role="navegation">
            <ul>
              <li><a href="home">Home</a></li>
              <li><a href="sobre">Sobre</a></li>
              <li><a href="contato">Contato</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div ng-view></div>

  <footer class="rodape">
  </footer>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="bower_components/angular/angular.js"></script>
  <script src="bower_components/angular-route/angular-route.js"></script>

  <script src="app/app.js"></script>
  <script src="app/controllers/controllers.js"></script>
</body>
</html>
