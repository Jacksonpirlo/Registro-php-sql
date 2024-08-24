<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!--Bootstrap 5-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="../assets/css/logIn_And_logOn.css">    
    <title>Document</title>
</head>
<body>
    <main>

        <h1>Inicia seción</h1>

        <form action="./config/logOn_config.php" method="POST">
            
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Jackson Florez" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <!-- <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" name="correo" placeholder="correo@gmail.com" aria-label="Username" aria-describedby="basic-addon1">
            </div> -->

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-file-lock2-fill"></i></span>
            <input type="password" class="form-control" name="clave" id="clave" placeholder="************" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            
            <div class="d-grid gap-2 col-6 mx-auto">
             <button class="btn btn-danger">Enviar</button>
             <p><a href="./logIn.php">¡Crea una cuenta!</a></p>
            </div>

        </form>
    </main>

    <script src=".././assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>