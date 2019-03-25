<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Ex1.html </title>
    </head>
    <body>
        
        
        <!-- <a href="pega_dados.php?v1=10&v2=20&v3=30&v4=40&v5=50">Ir à Página</a> -->
        <br><br>
        
        <form action="processa.php" method="GET">
           <input type="number" name="v1" placeholder="V1"><br>
		<input type="text" name="v2" placeholder="V2"><br>
		<input type="text" name="v3" placeholder="V3"><br>
                <input type="text" name="v4" placeholder="V4"><br>
		<input type="text" name="v5" placeholder="V5"><br>
		<br>
                   
                <button type="submit">Enviar</button>
        </form>
      
        
        

        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
