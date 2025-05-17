<h2>Résultat de l'estimation</h2>
<p><strong>Véhicule :</strong> <?= htmlspecialchars($marque) . ' ' . htmlspecialchars($modele) ?></p>
<p><strong>Kilométrage :</strong> <?= $km ?> km</p>
<p><strong>Année :</strong> <?= $annee ?></p>
<p><strong>Prix estimé :</strong> <?= round($prix) ?> €</p>
<a href="/">Nouvelle estimation</a>