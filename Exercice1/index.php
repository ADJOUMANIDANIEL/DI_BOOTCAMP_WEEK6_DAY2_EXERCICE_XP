<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Liste déroulante</title>
    <STYLE>
        .container{
            width: 30%;
            background-color:#FDD2CC;
            padding: 10pt;
        }
    </STYLE>
</head>
<body>
<br><br>
    <div class="container">
        <form action="calcul.php" method="post">
            <fieldset>
                <legend>Addition moyenne élève</legend>
                <div class="mb-4">
                <label for="disabledSelect" class="form-label">Note1 : </label>
                <input type="number" class="form-control" name="note1" autocomplete="off">
                </div>
                <div class="mb-4">
                <label for="disabledSelect" class="form-label">Note2 : </label>
                <input type="number" class="form-control" name="note2" autocomplete="off">
                </div>
                <button  name="submit" class="btn btn-danger">Calculer</button>
             </fieldset>
        </form>
    </div>
</body>
</html>