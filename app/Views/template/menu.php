<nav>
  <!-- Personnal space icon -->
  <a href="../connexion/compte">
    <aside class="pull-xs-right m-r-2" id="personal_space">
      <i class="fa fa-user fa-3x m-r-1 hidden-xs-down" aria-hidden="true"></i>
      <i class="fa fa-user fa-2x m-r-1 hidden-sm-up" id="small_user" aria-hidden="true"></i>
      <span>Espace personnel</span>
    </aside>
  </a>
  

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
                echo "<a class= 'nav-link ' href='../propriet/propriet_ajout'>Ajouter une propriété <span class='sr-only'>(current)</span></a>";
                echo "</li>";
            }?>
      <li class="nav-item m-x-1 on">
        <a class="nav-link" href="../connexion/logout">Déconnexion</a>
      </li>
    </ul> 
  </div>

</nav>
