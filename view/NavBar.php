
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li<?php if ( $_SERVER['REQUEST_URI'] == '/Login_Tela/index.php' ) {?>class="active" <?php } ?>><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
          <li <?php if ( $_SERVER['REQUEST_URI'] == '/Login_Tela/login.php' ) {?>class="active" <?php } ?>><a href="login.php">Login</a></li>
          <?php if ( $_SERVER['REQUEST_URI'] == '/Login_Tela/registro.php' ) {?>
             <li class="active"><a href="registro.php">Registro</a></li>
          <?php } ?>
          
        </ul>
       
        <ul class="nav navbar-nav navbar-right">
         
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
