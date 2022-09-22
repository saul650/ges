<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Gestor de carpetas</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
</head>

<body>
    <div class="m-4 container">
        <div class="row justify-content-center">
            <form class="col-4 p-4 border border-rounded" method="post">
                <div class="form-group">
                    <label class="form-label mt-4">Login</label>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="stud_no" placeholder="id usuario" required="required">
                        <label for="floatingInput">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Contraseña" required="required">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Usuario</label>
                        <select class="form-select" id="exampleSelect1" name="select">
                            <option>estudiante</option>
                            <option>administrador</option>
                        </select>
                    </div>
                    <?php include 'login_query.php' ?>
                    <div class="form-group mt-4">
                        <button class="btn btn-block btn-primary" name="login">Acceder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>