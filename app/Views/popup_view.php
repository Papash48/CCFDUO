<link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">

</head>
<body>
    <!-- Overlay du popup -->
    <div id="popup-overlay">
        <div id="popup">
            <h1>Bienvenu sur le site Immobilier AKOR ADAMS</h1>
            <h2>Que souhaitez-vous faire ?</h2>
            <a href="<?= site_url('connexion/client'); ?>" class="popup-button">Connexion Client</a>
            <a href="<?= site_url('connexion/agent'); ?>" class="popup-button">Connexion Agent</a>
            <a href="<?= site_url('connexion/creation'); ?>" class="popup-button">Inscription</a>
        </div>
    </div>

    <script>
        // Afficher le pop-up lors du chargement de la page
        document.addEventListener('DOMContentLoaded', function () {
            const popupOverlay = document.getElementById('popup-overlay');
            popupOverlay.classList.add('active');
        });
    </script>
</body>
</html>
