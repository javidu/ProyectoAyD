<!doctype html>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<?php 
include("Header.php");
?> 
    
<body> 
    
    <div id="login-form">
        <h1>Usuario</h1>
        <fieldset>

            <form method="POST" action="validar/iniciar.php">
                Tipo:
                <select name="tipo">
                    <option value="0">Administrador</option>
                    <option value="1">Comite</option>
                    <option value="2">Estudiante</option>
                    <option value="3">Director</option>
                    <option value="4">Tutor</option>
                    <option value="5">Secretaria</option>
                </select>
                <br><br>
                Código: 
                <input max="9999999" type="number" required='true' min="0000" maxlength='7' lang='4'
                       id="codigo" placeholder="Ej: 1150962" contenteditable="true" name='codigo'></input> 
                <br><br>
                Clave:
                <input type="password" id="clave" name= 'clave' required='true' maxlength='4' lang='4' 
                       placeholder="XXXX"></input>
               
                <input type="submit" value="Login" ></input>
                    
                
                <footer class="clearfix">
                   <p><span class="info">?</span><a href="#">Olvido Clave</a></p>
                </footer>
            </form>
        </fieldset>
    </div> <!-- end login-form -->
    <?php include("Footer.php"); include("../Modelos/CrearBD.php")?>
  
</body>
</html>