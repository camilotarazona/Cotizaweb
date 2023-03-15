<?php
session_start();
if($_POST){     
    if(($_POST['usuariof']=="camilot")&&($_POST['contrasenia']=="sistema")){    //aca se puede cambiar la validacion para hacer la consulta en la base de tatos//

        $_SESSION['usuariof']="ok";
        $_SESSION['nombreUsuariof']="camilot";
        header('Location:inicio.php');

    }else{
        $mensaje="Error: El usuario o contraseña son incorrectos";
    } 

}
?>
<?php include("template/cabecera.php"); ?>

    <div class="container">
        
        <br></br><br></br>
        
        <div class="row">
        
        
        <div class="col-md-4 text-center">
        <img width="1100" src="img/imgfront/img9.jpg" alt="">
        
        
        </div> 
            <div class="col-md-4">
            <br></br><br></br>
                <div class="card">
                    
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                    
                    <?php if(isset($mensaje)) {?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $mensaje; ?>
                        </div>
                    <?php } ?>
                        <form method="POST">
                        <div class = "form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input type="text" class="form-control" name="usuariof" placeholder="Enter email">
                        
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña:</label>
                        <input type="password" class="form-control" name="contrasenia" placeholder="Password">
                        </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>
                        
                        
                        </div>
                </div>
                
            </div>
            
        </div>
    </div>
  </body>
</html>