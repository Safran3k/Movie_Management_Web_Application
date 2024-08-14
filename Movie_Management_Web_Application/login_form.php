<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Bejelentkezés</title>
</head>
<body>
    <div class="container">

        <h1> Bejelentkezés </h1>
        <form action="login.php" class="w-50" method="POST">

            <div class="row mb-3">
                <label class="col"> Felhasználónév: </label>
                <input type="text" class="form-control-sm col" name="felhasznalonev_login">
            </div>

            <div class="row mb-3">
                <label class="col"> Jelszó: </label>
                <input type="password" class="form-control-sm col" name="jelszo_login">
            </div>

            <div class="row mb-3">
                <input type="submit" class="col m-3 btn btn-primary" value="Bejelentkezek" name="login">
                <button class="col m-3 btn btn-outline-primary"><a href ="register_form.php">Regisztráció</a></button>
            </div>
            
        </form>

    </div>
</body>
</html>