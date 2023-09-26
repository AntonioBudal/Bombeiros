<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="pagina_principal.css">
</head>
<body>
        <?php 
            include("menu.html");
        ?>
    <div class="pagina">
        <?php 
            include("tipo_ocorrencia.html");
        ?>
    </div>
    <div class="pagina ">
        <?php 
            include("localizacao_traumas.php");
        ?>
    </div>
    <div class="pagina"></div>
    
    
    
 
</body>

</html>