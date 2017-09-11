<DOCTYPE HTML>
  <html>
    <head>
      <style>
        
      </style>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
         <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../../js/jquery.js" ></script>
        <script src="../../js/user.js" ></script>
       <title>Bootstrap</title>
    </head>
           <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            
              <a class="navbar-brand" href="#">4 Fun User Panel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#" class="home">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="chamados.php" class="menu">Chamados</a></li>
                <li><a href="status.php" class="menu">Status</a></li>
               </ul>
              <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Borá buscar ?">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Bem vindo! <?php  session_start(); echo $_SESSION['username'];?></a></li>
                <li><a href="index.php">Sair</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    <div id="chamado">
      <a href="#" class="abrir-chamado">Abrir chamado</a> 
    </div>
    <div class="central"> 
    
    </div>
    </body>
  
  </html>