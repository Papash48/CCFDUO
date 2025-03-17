<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barre de Navigation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #463f32;
        }
        .nav-link {
            color: #ffffff !important;
        }
        .nav-link:hover {
            color: #f0a500 !important;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Boutons à gauche -->
                <li class="nav-item">
                    <a class="nav-link" href="propriet/propriete">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="propriet/presentation">Présentation</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <!-- Si l'utilisateur est connecté -->
                    <li class="nav-item">
                        <a class="nav-link" href="propriet/favoris">Favoris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion/logout">Déconnexion</a>
                    </li>
                <?php else: ?>
                    <!-- Si l'utilisateur n'est pas connecté -->
                    <li class="nav-item">
                        <a class="nav-link" href="connexion/register">S'inscrire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion/login">Se connecter</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

<nav>
    <?php
    $lien = '<aside class="pull-xs-right m-r-2" id="personal_space">
                  <i class="fa fa-user fa-3x m-r-1 hidden-xs-down" aria-hidden="true"></i>
                  <i class="fa fa-user fa-2x m-r-1 hidden-sm-up" id="small_user" aria-hidden="true"></i>
                  <span>Espace personnel</span>
                </aside>';
    echo anchor('connexion/compte',$lien); ?>



    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
  </button>

  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2" style="background-color: #463f32;">
    <ul class="nav navbar-nav">
      <li class="nav-item m-x-1">

        <?php echo anchor('propriet/propriete','Accueil<span class="sr-only">(current)</span>','class="nav-link"'); ?>

      </li>
        <?php $session = session();
            if($session->type === 'agent'){
                echo "<li class='nav-item m-x-1'>";
                echo anchor('propriet/propriet_ajout','Ajouter une propriétée<span class="sr-only">(current)</span>','class="nav-link"');
                echo "</li>";;

            }?>
        <?php $session = session();
        if($session->type === 'client'){
            echo "<li class='nav-item m-x-1'>";
            echo anchor('propriet/favoris', 'Favoris<span class="sr-only">(current)</span>', 'class="nav-link"');
            echo "</li>";
        }?>
      <li class="nav-item m-x-1 on">
          <?php echo anchor('connexion/logout','Déconnexion<span class="sr-only">(current)</span>','class="nav-link"'); ?>
      </li>
    </ul> 
  </div>

</nav>
