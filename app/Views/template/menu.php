<nav>

  <!-- Personnal space icon -->
  <a href="#">
        <link href="<?= base_url('public/css/style.css') ?>" rel="stylesheet">
    <aside class="pull-xs-right m-r-2" id="personal_space">
      <i class="fa fa-user fa-3x m-r-1 hidden-xs-down" aria-hidden="true"></i>
      <i class="fa fa-user fa-2x m-r-1 hidden-sm-up" id="small_user" aria-hidden="true"></i>
      <span>Espace<br>personnel</span>
    </aside>
  </a>
  
  <!-- Navigation -->
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#2276;
  </button>

  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2" style="background-color: #463f32;">
    <ul class="nav navbar-nav">
      <li class="nav-item m-x-1">
        <a class="nav-link" href="index.html">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item m-x-1">
        <a class="nav-link" href="achat.html">Achat</a>
      </li>
      <li class="nav-item m-x-1">
        <a class="nav-link" href="location.html">Location</a>
      </li>
      <li class="nav-item m-x-1 on">
        <a class="nav-link" href="presentation.html">Présentation</a>
      </li>
      <li class="nav-item m-x-1">
        <a class="nav-link" href="agences.html">Nos agences</a>
      </li>
          <?php echo anchor('connexion/client', '<i class="fa-solid fa-table-list"></i> Connexion Client') ?>
          <?php echo "<br>" ?>
          <?php echo anchor('connexion/agent', '<i class="fa-solid fa-table-list"></i> Connexion Agent') ?>

    </ul>
  </div>

</nav>
