<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmek lista</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        require 'mydbms.php';
        $con = connect('beadandodb', 'root', '');

        $query = "SELECT * FROM filmek";
        $results = mysqli_query($con, $query);
        $filmek = mysqli_fetch_all($results); 
        $results = mysqli_query($con, $query);
        $filmek = mysqli_fetch_all($results); 
    ?>

    <div class="d-flex flex-row justify-content-between">
        <form class="d-flex flex-column" method="GET">
            <button class="btn btn-primary" type="submit" name="exportCSV">Exportálás CSV-be</button>
        </form>

        <form class="d-flex flex-row" method="POST">
            <input class="d-flex flex-column form-control-sm me-2" type="text" name="keresendo">
            <button class="d-flex flex-column btn btn-primary" type="submit" name="keresBtn"> Keresés </button>
        </form>
    </div>
    

    <div class="container">
        <table class="table table-striped table-hover">

            <thead>
                <th> Film címe </th>
                <th> Kategória </th>
                <th> Premier dátuma </th>
            </thead>

            <tbody>
                <?php foreach($filmek as $film): ?>
                    <tr>
                        <td> <?= $film[1] ?></td>
                        <td> <?= $film[2] ?></td>
                        <td> <?= $film[3] ?></td>
                        <td>
                            <?php if($_SESSION['jogosultsag'] == 'admin') : ?>
                            <form action="filmTorles.php" method="POST">
                                <input type="hidden" name="filmId" value="<?= $film[0] ?>">
                                <button class="btn btn-danger" type="submit">Töröl</button>
                            </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>

                

            </tbody>

        </table>
    </div>
    
                            
    <?php
        $query = "SELECT * FROM filmek";
        $results = mysqli_query($con, $query);
        
        if(isset($_POST["exportCSV"]))
        {
            mentes($results);
        }

        function mentes($results)
        {

            $f = fopen("filmek.csv", "w");
            $sor = "id;filmcime;kategoria;premierdatuma\n";
            fwrite($f, $sor);
             
            foreach ($results as $film) 
            {
                             
                $sor = $film[0].";".$film[1].";".$film[2].";".$film[3]."\n";
                fwrite($f, $sor);
            }
            
            fclose();
        }
    ?>

    <?php
        /*
        if(isset($_GET["keresendo"]) && !empty($_GET["keresendo"]))
        {
            $keresendo = $_GET["keresendo"];
            $query = "SELECT * FROM filmek WHERE filmcime LIKE '%$keresendo%' OR 
            kategoria LIKE '%$keresendo%' OR 
            premierdatuma LIKE '%$keresendo%'";
        }

        //Else if-ekkel a többit ugyan így meglehetne
        if(isset($_GET["filmcime"]))
        {
            $query .= " ORDER BY filmcime"
        }

        // <!--(Rendezéshez) <th><form method="GET"><button type="submit" name="filmcime"> Film címe </button></form></th> -->
        */
    ?>

</body>
</html>
