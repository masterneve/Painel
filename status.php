<html>
  <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
         <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script src="../../js/jquery.js" ></script>
    <script src="../../js/chamados.js" ></script>
    <style>
     .table-responsive{
       margin: 100px auto;
       width:800px;
     }
      .chamado{
        display:none;
        width:500px;
        height:500px;
        margin: 10% auto;
        border:2px solid rgb(231, 231, 231);
      }
      .sair{
        border:1px solid #b30000;
        padding: 5px 15px;
        text-decoration:none;
        position:absolute;
        margin: 410px  20px;
        border-radius: 2px ;
        color:white;
        background-color:#b30000;
       }
      .sair:hover{
        text-decoration:none;
        color:black;
      }
      .salvar{
        border:1px solid #008000;
        padding: 5px 15px;
        text-decoration:none;
        position:absolute;
        margin: 410px  405px;
        border-radius: 2px ;
        color:white;
        background-color:#008000;
       }
      .salvar:hover{
        text-decoration:none;
        color:black;
      }
   </style>
  </head>
 <body>
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Número</th>
          <th>Serviço/Produto</th>
          <th>Status</th>
          <th>Mensagem</th>
       </tr>
      </thead>
      <tbody>
        <tr>
          <th><a href="#" class="bttn">131155</a></th>
          <td>Conteúdo</td>
          <td>Conteúdo</td>
          <td>Conteúdo</td>
        </tr>
      </tbody>
      </table>
   </div>
      <div class="chamado">
        <p>Opa chegamos até aqui em Status...</p>
        <a class="sair" href="#">Sair</a>
        <a class="salvar" href="#">Salvar</a>
      </div>  
      </body>
   <html>  