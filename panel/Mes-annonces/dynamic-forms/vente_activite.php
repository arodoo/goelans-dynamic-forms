<?php
// Formulaire pour la vente/cession d'activité (option 5)
?>
<div class="form-section">
  <!-- Section 5.1 - Datos Básicos de la Actividad -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="locaux_disponible">Locaux disponible à partir de :</label>
    </div>
    <div class="col-md-3">
      <input type="date" id="locaux_disponible" name="locaux_disponible" class="form-control" value="<?php echo isset($locaux_disponible) ? $locaux_disponible : ''; ?>" />
      <small class="text-muted">Format: jj/mm/aa</small>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="raison_sociale">Raison sociale :</label>
    </div>
    <div class="col-md-9">
      <input type="text" id="raison_sociale" name="raison_sociale" class="form-control" value="<?php echo isset($raison_sociale) ? $raison_sociale : ''; ?>" />
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="statut_juridique">Statut juridique :</label>
    </div>
    <div class="col-md-9">
      <select id="statut_juridique" name="statut_juridique" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="EI" <?php echo (isset($statut_juridique) && $statut_juridique == 'EI') ? 'selected' : ''; ?>>Entreprise Individuelle</option>
        <option value="EIRL" <?php echo (isset($statut_juridique) && $statut_juridique == 'EIRL') ? 'selected' : ''; ?>>EIRL</option>
        <option value="EURL" <?php echo (isset($statut_juridique) && $statut_juridique == 'EURL') ? 'selected' : ''; ?>>EURL</option>
        <option value="SARL" <?php echo (isset($statut_juridique) && $statut_juridique == 'SARL') ? 'selected' : ''; ?>>SARL</option>
        <option value="SA" <?php echo (isset($statut_juridique) && $statut_juridique == 'SA') ? 'selected' : ''; ?>>SA</option>
        <option value="SAS" <?php echo (isset($statut_juridique) && $statut_juridique == 'SAS') ? 'selected' : ''; ?>>SAS</option>
        <option value="SASU" <?php echo (isset($statut_juridique) && $statut_juridique == 'SASU') ? 'selected' : ''; ?>>SASU</option>
        <option value="SCI" <?php echo (isset($statut_juridique) && $statut_juridique == 'SCI') ? 'selected' : ''; ?>>SCI</option>
        <option value="SNC" <?php echo (isset($statut_juridique) && $statut_juridique == 'SNC') ? 'selected' : ''; ?>>SNC</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="commune">Commune :</label>
    </div>
    <div class="col-md-9">
      <input type="text" id="commune" name="commune" class="form-control" value="<?php echo isset($commune) ? $commune : ''; ?>" />
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="adresse">N° adresse / Quartier :</label>
    </div>
    <div class="col-md-9">
      <input type="text" id="adresse" name="adresse" class="form-control" value="<?php echo isset($adresse) ? $adresse : ''; ?>" />
    </div>
  </div>
  
  <!-- Section 5.2 - Características del Inmueble o Actividad -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="nature_activite">Nature de l'activité :</label>
    </div>
    <div class="col-md-9">
      <select id="nature_activite" name="nature_activite" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="local_vide" <?php echo (isset($nature_activite) && $nature_activite == 'local_vide') ? 'selected' : ''; ?>>Local vide, aménageable</option>
        <option value="commerce" <?php echo (isset($nature_activite) && $nature_activite == 'commerce') ? 'selected' : ''; ?>>Commerce</option>
        <option value="restaurant" <?php echo (isset($nature_activite) && $nature_activite == 'restaurant') ? 'selected' : ''; ?>>Restaurant</option>
        <option value="bar" <?php echo (isset($nature_activite) && $nature_activite == 'bar') ? 'selected' : ''; ?>>Bar</option>
        <option value="hotel" <?php echo (isset($nature_activite) && $nature_activite == 'hotel') ? 'selected' : ''; ?>>Hôtel</option>
        <option value="industrie" <?php echo (isset($nature_activite) && $nature_activite == 'industrie') ? 'selected' : ''; ?>>Industrie</option>
        <option value="service" <?php echo (isset($nature_activite) && $nature_activite == 'service') ? 'selected' : ''; ?>>Service</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="superficie">Superficie (m²) :</label>
    </div>
    <div class="col-md-3">
      <input type="number" id="superficie" name="superficie" class="form-control" step="0.01" min="0" value="<?php echo isset($superficie) ? $superficie : ''; ?>" />
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="etat_general">Etat général :</label>
    </div>
    <div class="col-md-9">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="etat_general" id="etat_neuf" value="neuf" <?php echo (isset($etat_general) && $etat_general == 'neuf') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="etat_neuf">Neuf</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="etat_general" id="etat_renove" value="renove" <?php echo (isset($etat_general) && $etat_general == 'renove') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="etat_renove">Rénové</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="etat_general" id="etat_a_renover" value="a_renover" <?php echo (isset($etat_general) && $etat_general == 'a_renover') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="etat_a_renover">A rénover</label>
      </div>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label>Accessibilité :</label>
    </div>
    <div class="col-md-9">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="accessibilite[]" id="ascenseur" value="ascenseur" <?php echo (isset($accessibilite) && in_array('ascenseur', $accessibilite)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="ascenseur">Ascenseur commun</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="accessibilite[]" id="pmr" value="pmr" <?php echo (isset($accessibilite) && in_array('pmr', $accessibilite)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="pmr">PMR</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="accessibilite[]" id="plein_pied" value="plein_pied" <?php echo (isset($accessibilite) && in_array('plein_pied', $accessibilite)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="plein_pied">Plein pied</label>
      </div>
    </div>
  </div>
  
  <!-- Section 5.3 - Detalles Operativos y Legales -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="enseigne">Enseigne :</label>
    </div>
    <div class="col-md-9">
      <input type="text" id="enseigne" name="enseigne" class="form-control" value="<?php echo isset($enseigne) ? $enseigne : ''; ?>" />
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label>Licences et Autorisations :</label>
    </div>
    <div class="col-md-9">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="licences[]" id="propriete_intellectuelle" value="propriete_intellectuelle" <?php echo (isset($licences) && in_array('propriete_intellectuelle', $licences)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="propriete_intellectuelle">Cession de propriété intellectuelle</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="licences[]" id="marque" value="marque" <?php echo (isset($licences) && in_array('marque', $licences)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="marque">Marque</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="licences[]" id="brevet" value="brevet" <?php echo (isset($licences) && in_array('brevet', $licences)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="brevet">Brevet</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="licences[]" id="nom_domaine" value="nom_domaine" <?php echo (isset($licences) && in_array('nom_domaine', $licences)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="nom_domaine">Nom de domaine</label>
      </div>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label>Effectif :</label>
    </div>
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-4">
          <label for="effectif_cdi" class="form-label">CDI :</label>
          <input type="number" id="effectif_cdi" name="effectif_cdi" class="form-control" min="0" value="<?php echo isset($effectif_cdi) ? $effectif_cdi : '0'; ?>">
        </div>
        <div class="col-md-4">
          <label for="effectif_cdd" class="form-label">CDD :</label>
          <input type="number" id="effectif_cdd" name="effectif_cdd" class="form-control" min="0" value="<?php echo isset($effectif_cdd) ? $effectif_cdd : '0'; ?>">
        </div>
        <div class="col-md-4">
          <label for="effectif_interim" class="form-label">Intérim :</label>
          <input type="number" id="effectif_interim" name="effectif_interim" class="form-control" min="0" value="<?php echo isset($effectif_interim) ? $effectif_interim : '0'; ?>">
        </div>
      </div>
    </div>
  </div>
  
  <!-- Section 5.4 - Modalidades de Transmisión -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label>Modalités de transmission :</label>
    </div>
    <div class="col-md-9">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="modalites_transmission[]" id="apport_actifs" value="apport_actifs" <?php echo (isset($modalites_transmission) && in_array('apport_actifs', $modalites_transmission)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="apport_actifs">Apport d'actifs</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="modalites_transmission[]" id="apport_societe" value="apport_societe" <?php echo (isset($modalites_transmission) && in_array('apport_societe', $modalites_transmission)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="apport_societe">Apport en société</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="modalites_transmission[]" id="cession_fonds" value="cession_fonds" <?php echo (isset($modalites_transmission) && in_array('cession_fonds', $modalites_transmission)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="cession_fonds">Cession à un fonds d'investissement ou un partenaire stratégique</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="modalites_transmission[]" id="cession_commerce" value="cession_commerce" <?php echo (isset($modalites_transmission) && in_array('cession_commerce', $modalites_transmission)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="cession_commerce">Cession de fonds de commerce</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="modalites_transmission[]" id="cession_licence" value="cession_licence" <?php echo (isset($modalites_transmission) && in_array('cession_licence', $modalites_transmission)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="cession_licence">Cession de licence</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="modalites_transmission[]" id="cession_titres" value="cession_titres" <?php echo (isset($modalites_transmission) && in_array('cession_titres', $modalites_transmission)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="cession_titres">Cession de titres</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="modalites_transmission[]" id="cession_progressive" value="cession_progressive" <?php echo (isset($modalites_transmission) && in_array('cession_progressive', $modalites_transmission)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="cession_progressive">Cession progressive</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="modalites_transmission[]" id="fusion_absorption" value="fusion_absorption" <?php echo (isset($modalites_transmission) && in_array('fusion_absorption', $modalites_transmission)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="fusion_absorption">Fusion - absorption</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="modalites_transmission[]" id="scission" value="scission" <?php echo (isset($modalites_transmission) && in_array('scission', $modalites_transmission)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="scission">Scission</label>
      </div>
    </div>
  </div>
  
  <!-- Section 5.5 - Datos Complementarios -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="stationnements">Stationnements :</label>
    </div>
    <div class="col-md-3">
      <input type="number" id="stationnements" name="stationnements" class="form-control" min="0" value="<?php echo isset($stationnements) ? $stationnements : '0'; ?>">
    </div>
    <div class="col-md-6">
      <select id="type_stationnement" name="type_stationnement" class="form-control">
        <option value="possible" <?php echo (isset($type_stationnement) && $type_stationnement == 'possible') ? 'selected' : ''; ?>>Possible</option>
        <option value="public" <?php echo (isset($type_stationnement) && $type_stationnement == 'public') ? 'selected' : ''; ?>>Public</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-4">
    <div class="col-12">
      <div class="alert alert-info">
        <h5>Notes légales importantes</h5>
        <p>Le vendeur s'engage à communiquer au futur acquéreur toutes les informations nécessaires à la cession de l'activité, y compris les obligations légales, les créances et les dettes, conformément aux dispositions du Code de commerce.</p>
      </div>
    </div>
  </div>
</div>
</div>
