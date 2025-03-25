<nav>
    <?php
    $lien = '<aside class="pull-xs-right m-r-2" id="personal_space">
                  <i class="fa fa-user fa-3x m-r-1 hidden-xs-down" aria-hidden="true"></i>
                  <i class="fa fa-user fa-2x m-r-1 hidden-sm-up" id="small_user" aria-hidden="true"></i>
                  <span>Espace personnel</span>
                </aside>';
    echo anchor('connexion/compte', $lien); ?>

    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
        &#9776;
    </button>

    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2" style="background-color: #463f32;">
        <ul class="nav navbar-nav">
            <li class="nav-item m-x-1">
                <?php echo anchor('propriet/propriete', 'Accueil<span class="sr-only">(current)</span>', 'class="nav-link"'); ?>
            </li>
            <li class="nav-item m-x-1 on">
                 <?php echo anchor('connexion/creation', "S'inscrire<span class='sr-only'>(current)</span>", 'class="nav-link"'); ?>
             </li>
            <li class="nav-item m-x-1 on">
                <?php echo anchor('connexion/logout', 'Se Connecter<span class="sr-only">(current)</span>', 'class="nav-link"'); ?>
            </li>

        </ul>
    </div>
</nav>
