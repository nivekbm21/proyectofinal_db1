<?php 
  include 'header.php';
 ?>

<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        Ingreso al carrito de compras</h5>
                    <form class="form form-signup" role="form" method="post" action="scriptBD/GETLogin.php">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control" name="username"  id="username" placeholder="Usuario" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Contrase&ntilde;a" />
                        </div>
                    </div>
                </div>
                <input type="submit" name="Submit" value="Iniciar Sesion"  class="btn btn-sm btn-primary btn-block">
               <br>
               </form>
            </div>
         <?php
				if(isset($_GET['errorpass'])){ 
					echo "
					<div class='alert alert-danger-alt alert-dismissable'>
					<span class='glyphicon glyphicon-certificate'></span>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
						×</button>Datos Incorrectos, Vuelva a intentarlo.</div>"; 
				}else{ 
					echo ""; 
				} 
		?>
		<?php
			if(isset($_GET['logout'])){ 
			echo "
			<div class='alert alert-danger-alt alert-dismissable'>
							<span class='glyphicon glyphicon-certificate'></span>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
								×</button>Ha cerrado sesion correctamente.</div>
			"; 
			}else{ 
			echo ""; 
			} 
        ?>
        </div>
    </div>
</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

<?php 
  include 'footer.php';
 ?>