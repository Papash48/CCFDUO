<style>
    /* Style général pour le menu de navigation */
nav {
  background-color: #463f32; /* Couleur de fond du menu */
  padding: 0.5rem 1rem; /* Espacement intérieur */
  font-family: Arial, sans-serif; /* Police générale */
  color: #ffffff; /* Couleur du texte */
}

/* Lien pour l'espace personnel */
nav #personal_space {
  display: flex;
  align-items: center;
  color: #ffffff; /* Texte blanc */
  text-decoration: none; /* Pas de soulignement */
  transition: color 0.3s ease;
}

nav #personal_space:hover {
  color: #f0a500; /* Couleur au survol */
}

/* Icône espace personnel */
nav #personal_space i {
  margin-right: 0.5rem;
}

nav #personal_space span {
  font-size: 0.8rem; /* Taille du texte "Espace personnel" */
}

/* Bouton menu hamburger (petits écrans) */
.navbar-toggler {
  border: none;
  background: transparent;
  color: #ffffff;
  font-size: 1.5rem;
  cursor: pointer;
}

/* Menu principal */
.navbar-nav {
  display: flex;
  justify-content: space-around;
  list-style: none;
  padding: 0;
  margin: 0;
}

.navbar-nav .nav-item {
  margin: 0 0.5rem;
}

.navbar-nav .nav-link {
  color: #ffffff;
  text-decoration: none;
  font-size: 1rem;
  padding: 0.5rem 0.75rem;
  border-radius: 4px;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-item.on .nav-link {
  background-color: #f0a500; /* Couleur de fond au survol */
  color: #000000; /* Texte noir */
}

/* Adaptation pour mobiles */
@media (max-width: 768px) {
  .navbar-toggleable-xs {
    display: none; /* Masque le menu par défaut */
  }

  .navbar-toggleable-xs.collapse {
    display: flex;
    flex-direction: column;
    align-items: start;
    background-color: #463f32; /* Fond du menu */
    padding: 1rem;
  }

  .navbar-nav {
    flex-direction: column;
    width: 100%;
  }

  .navbar-nav .nav-item {
    margin: 0.5rem 0;
  }
}

/* Icônes pour petits et grands écrans */
#small_user {
  display: none;
}

@media (max-width: 576px) {
  #small_user {
    display: inline;
  }

  #personal_space i.hidden-xs-down {
    display: none;
  }
}

</style>
    <nav>
  <!-- Personnal space icon -->
  <a href="../connexion/compte">
    <aside class="pull-xs-right m-r-2" id="personal_space">
      <i class="fa fa-user fa-3x m-r-1 hidden-xs-down" aria-hidden="true"></i>
      <i class="fa fa-user fa-2x m-r-1 hidden-sm-up" id="small_user" aria-hidden="true"></i>
      <span>Espace personnel</span>
    </aside>
  </a>
  
  <!-- Navigation -->
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
  </button>

  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2" style="background-color: #463f32;">
    <ul class="nav navbar-nav">
      <li class="nav-item m-x-1">
        <a class="nav-link" href="index.html">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item m-x-1">
        <a class="nav-link" href="achat.html">Achat</a>
      </li>
      <li class="nav-item m-x-1 on">
        <a class="nav-link" href="presentation.html">Présentation</a>
      </li>
    </ul>
  </div>

</nav>
