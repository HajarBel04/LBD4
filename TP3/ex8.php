<!DOCTYPE html>
<html>
<head>
    <title>Plan de financement pour l'achat d'un bien immobilier</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h2>Plan de financement pour l'achat d'un bien immobilier</h2>
    <form id="form-plan-financement" class="form-horizontal" onsubmit="return validateForm()" method="POST" action="plan_de_financement2.php">

        <div class="form-group">
            <label class="control-label col-sm-2" for="emploi">Type d'emploi:</label>
            <div class="col-sm-10">
                <select class="form-control" id="emploi" name="emploi">
                    <option value="salarié">Salarié</option>
                    <option value="fonctionnaire">Fonctionnaire</option>
                    <option value="profession-libérale">Profession libérale</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="nom">Nom:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="prenom">Prénom:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="date_naissance">Date de naissance:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date_naissance" name="date_naissance" placeholder="Entrez votre date de naissance">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="montant">Montant de financement:</label>
            <div class="col-sm-10">
                <input type="number" step="0.01" class="form-control" id="montant" name="montant" placeholder="Entrez le montant de financement">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="salaire">Salaire:</label>
            <div class="col-sm-10">
                <input type="number" step="0.01" class="form-control" id="salaire" name="salaire" placeholder="Entrez votre salaire">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="mensualites_autres_credits">Mensualités des autres crédits:</label>
            <div class="col-sm-10">
                <input type="number" step="0.01" class="form-control" id="mensualites_autres_credits" name="mensualites_autres_credits" placeholder="Entrez le montant total de vos mensualités des autres crédits">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="duree">Durée en mois:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="duree" name="duree" placeholder="Entrez la durée en mois">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                <label><input type="checkbox" id="assurance" name="assurance" checked>Assurance</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Valider</button>
            </div>
        </div>
    </form>


                    