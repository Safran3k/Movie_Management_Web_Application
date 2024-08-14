<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        function JelszoEllenorzes() {
            var jelszo = document.frissitForm.uj_jelszo.value;
            var jelszoIsmet = document.frissitForm.uj_jelszoIsmet.value;

            if(jelszo != jelszoMegint) 
            {
                document.getElementById('error').innerHTML = "A jelszavak nem eggyeznek!";
                return false;
            }
            else 
            {
                document.getElementById('error').innerHTML = "";
                return true;
            }
        }
    </script>     

    <title>Profil</title>
</head>
<body>
    
    <div class="container">

        <h1>Profilom</h1>
        <p id="error" style="color:red"></p>
        <form name="frissitForm" class="w-50" action="profilModositas.php" method="POST" onsubmit="return JelszoEllenorzes()">
            
            <input type="hidden" name="userId" value=<?=$_SESSION['id']?>>

            <div class="row mb-3">
                <label class="col"> Felhasználónév: </label>
                <input type="text" class="form-control-sm col" name="uj_felhasznalonev" require value=<?=$_SESSION['felhasznalonev']?>>
            </div>

            <div class="row mb-3">
                <label class="col"> Jelszó módosítása: </label>
                <input type="password" class="form-control-sm col" name="uj_jelszo" placeholder="*********" required pattern="[a-zA-Z0-9]*">
            </div>

            <div class="row mb-3">
                <label class="col"> Jelszó ismét: </label>
                <input type="password" class="form-control-sm col" name="uj_jelszoIsmet" placeholder="*********" required pattern="[a-zA-Z0-9]*">
            </div>

            <div class="row mb-3">
                <input type="submit" class="col m-3 btn btn-primary" name="update" value="Frissít">
            </div>
            
        </form>

    </div>

</body>
</html>

