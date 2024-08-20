<?php require './bootstap.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Curso PHP</title>
</head>
<body>
    <div class="container">
        <?php 
        try{
            require load();
            }catch(Exception $e){
                echo $e->getMessage();
            }

        
        ?>
    </div>
</body>
</html>