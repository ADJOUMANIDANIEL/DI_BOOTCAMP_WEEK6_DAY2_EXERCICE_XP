<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Vérifier la note de l'élève</title>
    <STYLE>
        .container{
            width: 30%;
            background-color:#FDD2CC;
            padding: 10pt;
            <border-radius: 10pt;
        }
    </STYLE>
</head>
<body>
<br><br>
    <div class="container">
        <form action="calcul.php" method="post">
            <fieldset>
                <legend>Vérification note des élèves</legend>
                <div class="mb-4">
                <label for="disabledSelect" class="form-label">Entrez pourentage</label>
                <input type="number" class="form-control" name="number" autocomplete="off">
                </div>
                <button  name="submit" class="btn btn-danger">Comparer</button>
             </fieldset>
        </form><br>

        <?php
            if(isset($_POST['submit']))
            {
                $eleve_note =$_POST['number'];

                if ($eleve_note>=60)///Si les notes sont de 60 % ou plus
                {
                    $position = "Première division";
                }
                else if($eleve_note>=45)///Si les notes sont comprises entre 45 % et 59 %
                {
                    $position = "Deuxième division";
                }
                else if($eleve_note>=33)//Si les notes sont comprises entre 33 % et 44 %
                {
                    $position = "Troisième division";
                }
                else
                {
                    $position = "Fail";
                }
                echo "Grade de l'étudiant est : $position"; 
            }
        ?>
    </div>
</body>
</html>

