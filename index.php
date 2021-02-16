<?php 
    session_start();

    if(isset($_SESSION['user_id']))
    {
        unset($_SESSION['user_id']);
    }

    include "db.php";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //read from db
        $user_id = $_POST['user_id'];
        $ci = $_POST['ci'];
        if(!empty($user_id) && !empty($ci))
        {
            $query = "select * from students where user_id = '$user_id' limit 1";
            $result = mysqli_query($con, $query);
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['CI'] === $ci && $user_data['user_id'] === $user_id)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: vote.php");
                    die();
                }
            }
            echo "Ingresa información valida!";
        }
        else
        {
            echo "Ingresa información valida!";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
        <title>Inicio de sesión</title>
    </head>
    <body>
        <div class="header">
            <h1>Elección de capitanes 2021<br>
            SEUPB</h1>
        </div>
        <div class="middle">
            <div class="col1">
                <h3>Rumbo al UPB Match 2021</h3>
                <p>El primer paso para apoyar a la camiseta y darlo todo por tu carrera</p>
            </div>
            <div class="main">
                <!-- CSS para las flechas  -->
                <form method="post">
                    Código de estudiante <input type="number" name="user_id" placeholder="Ej: 12345">
                    Carnet de identidad <input type="number" name="ci" placeholder="Ej: 11111111">
                    <input type="submit" name="submit" value="Enviar">
                </form> 
            </div>
            <div class="col2">
                <h3>¿Estas list@?</h2>
            </div>
        </div>
        <div class="footer">
            Secretaría de Tecnología e Innovación - ISC 2021<br>
            SEUPB 2021
        </div>
    </body>
</html>