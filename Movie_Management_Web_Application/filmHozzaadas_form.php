<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Film hozzáadása</title>
</head>
<body>

    <div class="container">
        <form class="w-50" action="filmHozzaadas.php" method="POST">

        <div class="row mb-3">
            <label class="col"> Film címe: </label>
            <input class="form-control-sm col" type="text" name="filmcime" id="filmcime"/>
        </div>

        <div class="row mb-3">
            <label class="col"> Kategória: </label>
            <select class="form-control-sm col" name="kategoria" required>
                <option selected hidden disabled>Válasszon...</option>
                <option value="Akció">Akció</option> 
                <option value="Vígjáték">Vígjáték</option>
                <option value="Sci-fi">Sci-fi</option>
                <option value="Dráma">Dráma</option>
                <option value="Horror">Horror</option>
                <option value="Romantikus">Romantikus</option>
            </select>
        </div>

        <div class="row mb-3">
            <label class="col"> Premier dátuma: </label>
            <input class="form-control-sm col" type="date" name="premierdatuma" id="premierdatuma"/>
        </div>

        <div class="row mb-3">
            <button class="col m-3 btn btn-primary" type="submit">Hozzáadás</button>
        </div>

    </div>
    
</body>
</html>