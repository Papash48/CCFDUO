<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Exemple</title>
    <style>
        /* Overlay de fond pour le popup */
        #popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Fond semi-transparent */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            visibility: hidden; /* Masqué par défaut */
            opacity: 0;
            transition: visibility 0s, opacity 0.3s ease;
        }

        #popup-overlay.active {
            visibility: visible;
            opacity: 1;
        }

        /* Conteneur du popup */
        #popup {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        #popup h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .popup-button {
            display: inline-block;
            margin: 0.5rem;
            padding: 0.5rem 1rem;
            background: #007bff;
            color: white;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .popup-button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Overlay du popup -->
    <div id="popup-overlay">
        <div id="popup">
            <h2>Que souhaitez-vous faire ?</h2>
            <a href="<?= site_url('connexion/client'); ?>" class="popup-button">Connexion Client</a>
            <a href="<?= site_url('connexion/agent'); ?>" class="popup-button">Connexion Agent</a>
            <a href="<?= site_url('connexion/creation'); ?>" class="popup-button">Inscription</a>
        </div>
    </div>

    <script>
        // Afficher le popup lors du chargement de la page
        document.addEventListener('DOMContentLoaded', function () {
            const popupOverlay = document.getElementById('popup-overlay');
            popupOverlay.classList.add('active');
        });
    </script>
</body>
</html>
