<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Regisztáció</title>

    <script>
        function FormValidacio() 
        {
            var jelszo = document.register_form.jelszo.value;
            var jelszoUjra = document.register_form.jelszoUjra.value;

            if(jelszo != jelszoUjra) 
            {
                document.getElementById('error').innerHTML="A jelszavak nem egyeznek!";
                return false;
            }

            var username = document.register_form.felhasznalonev.value;
            if(username.length() < 4) 
            {
                document.getElementById('error').innerHTML="A felhasználónévnek legalább 4 karakter hosszúságúnak kell lennie!";
                return false;
            }
            return true;
        }
    </script>

</head>
<body>
    <div class="container">
        
        <p id="error" style="color:red;"></p> 
        <h1 > Regisztráció </h1>

        <form action="register.php" class="w-50" name="register_form" method="POST" onsubmit="return FormValidacio()">
            <div class="row mb-3">
                <label class="col"> Sajátnév: </label>
                <input type="text" class="form-control-sm col" name="sajatnev" placeholder="Cserepes Virág" required>
            </div>

            <div class="row mb-3">
                <label class="col"> Felhasználónév: </label>
                <input type="text"  class="form-control-sm col" name="felhasznalonev" required>
            </div>

            <div class="row mb-3">
                <label class="col"> Jelszó: </label>
                <input type="password"  class="form-control-sm col" name="jelszo" placeholder="*********" required pattern="[a-zA-Z0-9]*">
            </div>

            <div class="row mb-3">
                <label class="col"> Jelszó megerősítése: </label>
                <input type="password"  class="form-control-sm col" name="jelszoUjra" placeholder="*********" required pattern="[a-zA-Z0-9]*">
            </div>

            <div class="row mb-3">
                <label class="col"> E-mail cím: </label>
                <input type="email"  class="form-control-sm col" name="email" placeholder="valami.valami@gmail.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            </div>

            <div class="row mb-3">
                <label class="col"> Neme: </label>
                <select name="neme"  class="form-control-sm col" required>
                    <option selected hidden disabled>Válasszon...</option>
                    <option value="Nő">Nő</option> 
                    <option value="Férfi">Férfi</option>
                    <option value="Egyéb">Egyéb</option>
                </select>
            </div>

            <div class="row mb-3">
                <label class="col"> Jogosultság: </label>
                <select name="jogosultsag"  class="form-control-sm col" required>
                    <option selected hidden disabled>Válasszon...</option>
                    <option value="user">Felhasználó</option> 
                    <option value="admin">Adminisztrátor</option>
                </select>
            </div>

            <div class="row mb-3">
                <input type="submit" class="col m-3 btn btn-primary" value="Regisztrálok">
                <input type="reset" class="col m-3 btn btn-outline-primary" value="Adatok törlése">
            </div>
            
        </form>
    </div>
</body>
</html>