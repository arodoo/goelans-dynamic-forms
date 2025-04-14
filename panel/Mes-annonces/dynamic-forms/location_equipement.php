<?php
// Formulaire pour la location d'équipement (option 9)
?>
<div class="form-section">
  <!-- Section 9.1 - Características del Equipo -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="type_equipement">Type d'équipement :</label>
    </div>
    <div class="col-md-9">
      <select id="type_equipement" name="type_equipement" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="materiel_batiment" <?php echo (isset($type_equipement) && $type_equipement == 'materiel_batiment') ? 'selected' : ''; ?>>Matériel de bâtiment et travaux</option>
        <option value="materiel_agricole" <?php echo (isset($type_equipement) && $type_equipement == 'materiel_agricole') ? 'selected' : ''; ?>>Matériel agricole</option>
        <option value="vehicule_utilitaire" <?php echo (isset($type_equipement) && $type_equipement == 'vehicule_utilitaire') ? 'selected' : ''; ?>>Véhicule utilitaire</option>
        <option value="materiel_medical" <?php echo (isset($type_equipement) && $type_equipement == 'materiel_medical') ? 'selected' : ''; ?>>Matériel médical</option>
        <option value="materiel_informatique" <?php echo (isset($type_equipement) && $type_equipement == 'materiel_informatique') ? 'selected' : ''; ?>>Matériel informatique</option>
        <option value="equipement_restauration" <?php echo (isset($type_equipement) && $type_equipement == 'equipement_restauration') ? 'selected' : ''; ?>>Équipement de restauration</option>
        <option value="materiel_evenementiel" <?php echo (isset($type_equipement) && $type_equipement == 'materiel_evenementiel') ? 'selected' : ''; ?>>Matériel événementiel</option>
        <option value="autre" <?php echo (isset($type_equipement) && $type_equipement == 'autre') ? 'selected' : ''; ?>>Autre</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="marque">Marque et modèle :</label>
    </div>
    <div class="col-md-9">
      <input type="text" id="marque" name="marque" class="form-control" value="<?php echo isset($marque) ? $marque : ''; ?>">
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="annee_fabrication">Année de fabrication :</label>
    </div>
    <div class="col-md-3">
      <input type="number" id="annee_fabrication" name="annee_fabrication" class="form-control" min="1900" max="<?php echo date('Y'); ?>" value="<?php echo isset($annee_fabrication) ? $annee_fabrication : ''; ?>">
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="etat">État :</label>
    </div>
    <div class="col-md-9">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="etat" id="etat_neuf" value="neuf" <?php echo (isset($etat) && $etat == 'neuf') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="etat_neuf">Neuf</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="etat" id="etat_bon" value="bon" <?php echo (isset($etat) && $etat == 'bon') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="etat_bon">Bon état</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="etat" id="etat_usage" value="usage" <?php echo (isset($etat) && $etat == 'usage') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="etat_usage">Usagé</label>
      </div>
    </div>
  </div>
  
  <!-- Section 9.2 - Condiciones de Alquiler -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="disponibilite">Disponibilité :</label>
    </div>
    <div class="col-md-9">
      <select id="disponibilite" name="disponibilite" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="immediate" <?php echo (isset($disponibilite) && $disponibilite == 'immediate') ? 'selected' : ''; ?>>Immédiate</option>
        <option value="sur_demande" <?php echo (isset($disponibilite) && $disponibilite == 'sur_demande') ? 'selected' : ''; ?>>Sur demande</option>
        <option value="date_specifique" <?php echo (isset($disponibilite) && $disponibilite == 'date_specifique') ? 'selected' : ''; ?>>À partir d'une date spécifique</option>
      </select>
    </div>
  </div>
  
  <div id="date_disponibilite_container" class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded; display: <?php echo (isset($disponibilite) && $disponibilite == 'date_specifique') ? 'flex' : 'none'; ?>">
    <div class="col-md-3">
      <label for="date_disponibilite">Date de disponibilité :</label>
    </div>
    <div class="col-md-3">
      <input type="date" id="date_disponibilite" name="date_disponibilite" class="form-control" value="<?php echo isset($date_disponibilite) ? $date_disponibilite : ''; ?>">
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="duree_location">Durée de location :</label>
    </div>
    <div class="col-md-9">
      <select id="duree_location" name="duree_location" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="heure" <?php echo (isset($duree_location) && $duree_location == 'heure') ? 'selected' : ''; ?>>À l'heure</option>
        <option value="jour" <?php echo (isset($duree_location) && $duree_location == 'jour') ? 'selected' : ''; ?>>À la journée</option>
        <option value="semaine" <?php echo (isset($duree_location) && $duree_location == 'semaine') ? 'selected' : ''; ?>>À la semaine</option>
        <option value="mois" <?php echo (isset($duree_location) && $duree_location == 'mois') ? 'selected' : ''; ?>>Au mois</option>
        <option value="longue_duree" <?php echo (isset($duree_location) && $duree_location == 'longue_duree') ? 'selected' : ''; ?>>Longue durée</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="tarif">Tarif de location :</label>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <input type="number" id="tarif" name="tarif" class="form-control" min="0" step="0.01" value="<?php echo isset($tarif) ? $tarif : ''; ?>">
        <div class="input-group-append">
          <span class="input-group-text">€</span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <select id="unite_tarif" name="unite_tarif" class="form-control">
        <option value="heure" <?php echo (isset($unite_tarif) && $unite_tarif == 'heure') ? 'selected' : ''; ?>>/ heure</option>
        <option value="jour" <?php echo (isset($unite_tarif) && $unite_tarif == 'jour') ? 'selected' : ''; ?>>/ jour</option>
        <option value="semaine" <?php echo (isset($unite_tarif) && $unite_tarif == 'semaine') ? 'selected' : ''; ?>>/ semaine</option>
        <option value="mois" <?php echo (isset($unite_tarif) && $unite_tarif == 'mois') ? 'selected' : ''; ?>>/ mois</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="caution">Caution demandée :</label>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <input type="number" id="caution" name="caution" class="form-control" min="0" step="0.01" value="<?php echo isset($caution) ? $caution : ''; ?>">
        <div class="input-group-append">
          <span class="input-group-text">€</span>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Section 9.3 - Multimedia y Detalles Adicionales -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="photos">Photos :</label>
    </div>
    <div class="col-md-9">
      <input type="file" id="photos" name="photos[]" class="form-control" multiple accept="image/*">
      <small class="text-muted">Formats acceptés: JPG, PNG, GIF. Maximum 5 photos.</small>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="description">Description détaillée :</label>
    </div>
    <div class="col-md-9">
      <textarea id="description" name="description" class="form-control" rows="4"><?php echo isset($description) ? $description : ''; ?></textarea>
    </div>
  </div>
  
  <!-- Format de publication -->
  <div class="row mb-4">
    <div class="col-12 mb-3">
      <h4>Format de publication</h4>
    </div>
    <div class="col-md-4">
      <div class="card p-3 format-option">
        <input type="radio" name="format_publication" id="format_quart" value="quart" <?php echo (isset($format_publication) && $format_publication == 'quart') ? 'checked' : ''; ?>>
        <label for="format_quart">1/4 page</label>
        <div class="text-center">
          <img src="../assets/img/format_quart.png" alt="Format 1/4 page" class="img-fluid" style="max-height: 100px;">
        </div>
        <div class="text-center mt-2">
          <strong>5€ / mois</strong>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 format-option">
        <input type="radio" name="format_publication" id="format_demi" value="demi" <?php echo (isset($format_publication) && $format_publication == 'demi') ? 'checked' : ''; ?>>
        <label for="format_demi">1/2 page</label>
        <div class="text-center">
          <img src="../assets/img/format_demi.png" alt="Format 1/2 page" class="img-fluid" style="max-height: 100px;">
        </div>
        <div class="text-center mt-2">
          <strong>10€ / mois</strong>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 format-option">
        <input type="radio" name="format_publication" id="format_pleine" value="pleine" <?php echo (isset($format_publication) && $format_publication == 'pleine') ? 'checked' : ''; ?>>
        <label for="format_pleine">1 page entière</label>
        <div class="text-center">
          <img src="../assets/img/format_pleine.png" alt="Format page entière" class="img-fluid" style="max-height: 100px;">
        </div>
        <div class="text-center mt-2">
          <strong>20€ / mois</strong>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
// Fonction pour afficher/masquer le champ de date de disponibilité
document.addEventListener('DOMContentLoaded', function() {
  const disponibiliteSelect = document.getElementById('disponibilite');
  const dateContainer = document.getElementById('date_disponibilite_container');
  
  disponibiliteSelect.addEventListener('change', function() {
    if (this.value === 'date_specifique') {
      dateContainer.style.display = 'flex';
    } else {
      dateContainer.style.display = 'none';
    }
  });
});
</script>
