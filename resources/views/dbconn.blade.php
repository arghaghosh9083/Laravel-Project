<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel & Mysql Connection</title>
</head>
<body>
    <div>
        <?php 
        if(DB:: connection()->getPdo()){
            echo '<script>
            alert("connected to database");</script>';
        }
        ?>
    </div>
        
</body>
</html>