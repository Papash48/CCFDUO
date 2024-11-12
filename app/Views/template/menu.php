    <div class="menu">
        <ul>
            <li class="logo">
                <a href=""><?php echo img('public/img/title.png',true, 'alt="logo" class="logo"')?></a>
            </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="">COMMANDES</a></li>
            <li class="menu-item hidden"><?php echo anchor('recette/liste', 'A la carte') ?></li>
            <li class="menu-item hidden"><?php echo anchor('ingredient/liste', 'Ingredients') ?></li>
            <li class="menu-item hidden"><a href="">Reccueil</a></li>
        </ul>
    </div>

</header>

