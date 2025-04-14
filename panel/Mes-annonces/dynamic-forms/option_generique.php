<?php
// Formulaire pour l'option générique (option 10)
?>
<div class="form-section">
  <!-- Section 10.1 - Configuración Libre de Campos -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="alert alert-info">
        <p>Cet espace vous permet de créer une annonce personnalisée. Utilisez les champs disponibles pour décrire votre offre ou votre demande.</p>
      </div>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="categorie">Catégorie de l'annonce :</label>
    </div>
    <div class="col-md-9">
      <select id="categorie" name="categorie" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="offre_service" <?php echo (isset($categorie) && $categorie == 'offre_service') ? 'selected' : ''; ?>>Offre de service</option>
        <option value="demande_service" <?php echo (isset($categorie) && $categorie == 'demande_service') ? 'selected' : ''; ?>>Demande de service</option>
        <option value="vente" <?php echo (isset($categorie) && $categorie == 'vente') ? 'selected' : ''; ?>>Vente</option>
        <option value="achat" <?php echo (isset($categorie) && $categorie == 'achat') ? 'selected' : ''; ?>>Achat</option>
        <option value="echange" <?php echo (isset($categorie) && $categorie == 'echange') ? 'selected' : ''; ?>>Échange</option>
        <option value="don" <?php echo (isset($categorie) && $categorie == 'don') ? 'selected' : ''; ?>>Don</option>
        <option value="autre" <?php echo (isset($categorie) && $categorie == 'autre') ? 'selected' : ''; ?>>Autre</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="titre_annonce">Titre de l'annonce :</label>
    </div>
    <div class="col-md-9">
      <input type="text" id="titre_annonce" name="titre_annonce" class="form-control" maxlength="100" value="<?php echo isset($titre_annonce) ? $titre_annonce : ''; ?>">
      <small class="text-muted">Maximum 100 caractères</small>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="description_detaillee">Description détaillée :</label>
    </div>
    <div class="col-md-9">
      <textarea id="description_detaillee" name="description_detaillee" class="form-control" rows="6"><?php echo isset($description_detaillee) ? $description_detaillee : ''; ?></textarea>
    </div>
  </div>
  
  <!-- Section 10.2 - Información de Contacto y Multimedia -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="contact_preference">Préférence de contact :</label>
    </div>
    <div class="col-md-9">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="contact_preference[]" id="contact_telephone" value="telephone" <?php echo (isset($contact_preference) && in_array('telephone', $contact_preference)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="contact_telephone">Téléphone</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="contact_preference[]" id="contact_email" value="email" <?php echo (isset($contact_preference) && in_array('email', $contact_preference)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="contact_email">Email</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="contact_preference[]" id="contact_formulaire" value="formulaire" <?php echo (isset($contact_preference) && in_array('formulaire', $contact_preference)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="contact_formulaire">Formulaire du site</label>
      </div>
    </div>
  </div>
  
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
      <label for="url">Lien URL :</label>
    </div>
    <div class="col-md-9">
      <input type="url" id="url" name="url" class="form-control" placeholder="https://www.exemple.com" value="<?php echo isset($url) ? $url : ''; ?>">
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="montant">Montant (si applicable) :</label>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <input type="number" id="montant" name="montant" class="form-control" min="0" step="0.01" value="<?php echo isset($montant) ? $montant : ''; ?>">
        <div class="input-group-append">
          <span class="input-group-text">€</span>
        </div>
      </div>
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
