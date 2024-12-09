<style>
    /* Style général pour le footer */
footer.section.footer-advanced {
  background-color: #3b3b3b; /* Couleur de fond gris foncé */
  color: #ffffff; /* Texte blanc */
  padding: 2rem 0; /* Espacement vertical */
}

footer h5 {
  font-size: 1.25rem; /* Taille du titre */
  font-weight: bold;
  margin-bottom: 1rem; /* Espacement sous le titre */
  text-transform: uppercase;
  color: #f9f9f9; /* Légère variation pour le titre */
}

footer p {
  font-size: 0.9rem; /* Taille du texte descriptif */
  line-height: 1.6; /* Hauteur de ligne pour une meilleure lisibilité */
  margin-bottom: 1.5rem; /* Espacement sous les paragraphes */
}

/* Réseaux sociaux */
footer .d-flex a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 50%;
  background-color: #555555; /* Fond des icônes */
  color: #ffffff; /* Couleur des icônes */
  transition: background-color 0.3s ease, transform 0.3s ease;
}

footer .d-flex a:hover {
  background-color: #007bff; /* Couleur au survol */
  transform: scale(1.1); /* Agrandissement au survol */
}

/* Ligne horizontale */
footer .horizontal-line {
  height: 2px;
  background-color: #ffffff;
  opacity: 0.3; /* Légère transparence */
  margin: 2rem 0;
}

/* Texte centré */
footer p.text-center {
  font-size: 0.8rem;
  color: #dcdcdc; /* Texte légèrement gris */
}

/* Classes pour les colonnes */
footer .col-lg-4 {
  margin-bottom: 1rem; /* Espacement pour petits écrans */
}

/* Responsive Design */
@media (max-width: 768px) {
  footer h5 {
    font-size: 1.1rem; /* Ajustement des titres */
  }

  footer p {
    font-size: 0.85rem; /* Ajustement du texte */
  }
}

</style>
    <link rel="stylesheet" href="<?= base_url('/css/main.css'); ?>">

<footer class="section novi-background footer-advanced bg-gray-700 text-white py-5">
  <div class="footer-advanced-main">
    <div class="container">
      <div class="row row-50">
        <!-- Section À propos -->
        <div class="col-lg-4 mb-4">
          <h5 class="font-weight-bold text-uppercase">À propos de nous</h5>
          <p>
            Akor Adams Immobilier, fondée en 1950, est la plus grande agence immobilière et de gestion locative de la région. 
            Nous proposons une expertise unique dans la vente et la location d'une large gamme de biens : résidences, propriétés agricoles, locaux commerciaux et industriels. 
            Notre mission : concrétiser vos projets immobiliers avec professionnalisme et proximité.
          </p>
        </div>

        <!-- Section Réseaux Sociaux -->
        <div class="col-lg-4 mb-4">
          <h5 class="font-weight-bold text-uppercase">Suivez-nous</h5>
          <div class="d-flex">
            <a href="#" class="text-white mx-2">
              <i class="fa fa-facebook-official fa-2x"></i>
            </a>
            <a href="#" class="text-white mx-2">
              <i class="fa fa-twitter fa-2x"></i>
            </a>
          </div>
        </div>
      </div>
      <hr class="horizontal-line bg-white">
      <p class="text-center mt-4">
        Akor Adams. &copy; Une réalisation De Barros Mathis et Pruniere Samuel
      </p>
    </div>
  </div>
</footer>
