<?php
// Formulaire pour bien communal à vendre (option 6)
?>
<div class="form-section">
  <!-- Section 6.1 - Identificación del Bien -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="type_bien">Type de bien Libellé :</label>
    </div>
    <div class="col-md-9">
      <input type="text" id="type_bien" name="type_bien" class="form-control" placeholder="Ex: Bien déclassé" value="<?php echo isset($type_bien) ? $type_bien : ''; ?>" />
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="evaluation_bien">Evaluation du bien :</label>
    </div>
    <div class="col-md-9">
      <select id="evaluation_bien" name="evaluation_bien" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="france_domaine" <?php echo (isset($evaluation_bien) && $evaluation_bien == 'france_domaine') ? 'selected' : ''; ?>>Selon France domaine (DDIE)</option>
        <option value="autre" <?php echo (isset($evaluation_bien) && $evaluation_bien == 'autre') ? 'selected' : ''; ?>>Autre</option>
      </select>
    </div>
  </div>
  
  <!-- Section 6.2 - Datos Legales y Administrativos -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="alert alert-info">
        <p>La vente de ce bien communal a été autorisée par délibération du conseil municipal. Veuillez noter qu'il peut exister des droits de préemption applicables.</p>
      </div>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="documents">Projet d'acte, clauses spécifiques ou informations à télécharger :</label>
    </div>
    <div class="col-md-9">
      <input type="file" id="documents" name="documents[]" class="form-control" multiple>
      <small class="text-muted">Formats acceptés: PDF, DOC, DOCX. Maximum 5 fichiers.</small>
    </div>
  </div>
  
  <!-- Section 6.3 - Condiciones Económicas -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="montant_concede">Montant concédé :</label>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <input type="number" id="montant_concede" name="montant_concede" class="form-control" min="0" step="0.01" value="<?php echo isset($montant_concede) ? $montant_concede : ''; ?>">
        <div class="input-group-append">
          <span class="input-group-text">€</span>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="url">Lien URL :</label>
    </div>
    <div class="col-md-9">
      <input type="url" id="url" name="url" class="form-control" placeholder="https://www.exemple.com" value="<?php echo isset($url) ? $url : ''; ?>">
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="notes">Notes additionnelles :</label>
    </div>
    <div class="col-md-9">
      <textarea id="notes" name="notes" class="form-control" rows="4"><?php echo isset($notes) ? $notes : ''; ?></textarea>
    </div>
  </div>
</div>
