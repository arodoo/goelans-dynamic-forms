<?php

/*****************************************************\
 * Adresse e-mail => direction@codi-one.fr             *
 * La conception est assujettie à une autorisation     *
 * spéciale de codi-one.com. Si vous ne disposez pas de*
 * cette autorisation, vous êtes dans l'illégalité.    *
 * L'auteur de la conception est et restera            *
 * codi-one.fr                                         *
 * Codage, script & images (all contenu) sont réalisés * 
 * par codi-one.fr                                     *
 * La conception est à usage unique et privé.          *
 * La tierce personne qui utilise le script se porte   *
 * garante de disposer des autorisations nécessaires   *
 *                                                     *
 * Copyright ... Tous droits réservés auteur (Fabien B)*
  \*****************************************************/

if (!empty($_SESSION['4M8e7M5b1R2e8s']) && !empty($user) && $statut_compte_oo >= 0) {

  $type = $_GET['type'];
  $action = $_GET['action'];
  $idaction = $_GET['idaction'];

?>

  <script>
    $(document).ready(function() {

      $(document).on("click", "#bouton_formulaire_annonces", function() {
        tinyMCE.triggerSave();
        $.ajax({
          url: '/panel/Mes-annonces/Mes-annonces-action-ajouter-modifier-ajax.php',
          type: 'POST',
          data: new FormData($("#formulaire_annonces_<?php echo $_GET['action'] == 'Modifier' ? 'modifier' : 'ajout'; ?>")[0]),
          processData: false,
          contentType: false,
          dataType: "json",
          success: function(res) {
            if (res.retour_validation == "ok") {
              popup_alert(res.Texte_rapport, "green filledlight", "#009900", "uk-icon-check");
              if (res.retour_lien) {
                window.location.href = res.retour_lien;
              }
              <?php if ($_GET['action'] == 'Ajouter') { ?>
                $("#formulaire_annonces_ajout")[0].reset();
              <?php } ?>

            } else {
              popup_alert(res.Texte_rapport, "#CC0000 filledlight", "#CC0000", "uk-icon-times");
            }
          }
        });
        listeAnnonces();
      });

      // AJAX - SUPPRIMER
      $(document).on("click", ".Mes-annonces-supprimer", function() {
        $.ajax({
          url: '/panel/Mes-annonces/Mes-annonces-action-supprimer-ajax.php',
          type: 'POST',
          data: {
            idaction: $(this).attr("data-id")
          },
          dataType: "json",
          success: function(res) {
            if (res.retour_validation == "ok") {
              popup_alert(res.Texte_rapport, "green filledlight", "#009900", "uk-icon-check");
            } else {
              popup_alert(res.Texte_rapport, "#CC0000 filledlight", "#CC0000", "uk-icon-times");
            }
            listeAnnonces();
          }
        });
      });

      // FUNCTION AJAX - LISTE 
      function listeAnnonces() {
        $.ajax({
          url: '/panel/Mes-annonces/Mes-annonces-liste-ajax.php',
          type: 'POST',
          data: {
            type: "<?php echo $_GET['type']; ?>"
          },
          dataType: "html",
          success: function(res) {
            $("#liste-Mes-annonces").html(res);
          }
        });
      }

      listeAnnonces();

      $(document).on("change", "#type_page", function() {
        typepage();
      });

      function typepage() {
        var type = $("#type_page").val();
        if (type == "Page") {
          $(".type_page").show();
          $(".type_categorie").hide();
        } else if (type == "Catégorie") {
          $(".type_categorie").show();
          $(".type_page").hide();
        }
      }

      typepage();

      $(document).on('click', '#btnSupprModal', function() {
        $.post({
          url: '/panel/Mes-annonces/modal-supprimer-ajax.php',
          type: 'POST',
          data: {
            idaction: $(this).attr("data-id")
          },
          dataType: "html",
          success: function(res) {
            $("body").append(res)
            $("#modalSuppr").modal('show')
          }
        })
      });

      $(document).on("click", "#btnSuppr", function() {
        // $(".modal").show();
        $.post({
          url: '/administration/Modules/Annonces/annonces-action-supprimer-ajax.php',
          type: 'POST',
          data: {
            idaction: $(this).attr("data-id")
          },
          dataType: "json",
          success: function(res) {
            if (res.retour_validation == "ok") {
              popup_alert(res.Texte_rapport, "green filledlight", "#009900", "uk-icon-check");
            } else {
              popup_alert(res.Texte_rapport, "#CC0000 filledlight", "#CC0000", "uk-icon-times");
            }
            listeGestionPageCategorie();
            $("#modalSuppr").modal('hide')
            // $("#modalSuppr").hide(1000);
            // $(this).hide(1000);
          }
        });
      });

      $(document).on("click", "#btnNon", function() {
        $("#modalSuppr").modal('hide')
      });

      $(document).on('hidden.bs.modal', "#modalSuppr", function() {
        $(this).remove()
      })

      $(document).on("click", ".btnSuppr", function() {
        $.ajax({
          url: '/panel/Mes-annonces/Mes-annonces-action-supprimer-ajax.php',
          type: 'POST',
          data: {
            idaction: $(this).attr("data-id")
          },
          dataType: "json",
          success: function(res) {
            if (res.retour_validation == "ok") {
              popup_alert(res.Texte_rapport, "green filledlight", "#009900", "uk-icon-check");
            } else {
              popup_alert(res.Texte_rapport, "#CC0000 filledlight", "#CC0000", "uk-icon-times");
            }
            listeAnnonces();
          }
        });
      });

      $(document).on("change", "#projet", function() {
        loadDynamicForm();
      });

      function loadDynamicForm() {
        var selectedValue = $("#projet").val();
        $.ajax({
          url: '/panel/Mes-annonces/dynamic-forms/index.php',
          type: 'POST',
          data: {
            projet: selectedValue
          },
          success: function(response) {
            $("#dynamic-form-container").html(response);
          }
        });
      }

      // Load the form on page initialization
      $(document).ready(function() {
        loadDynamicForm();
      });

      function villes(id) {
        $.ajax({
          url: '/panel/Mes-annonces/Mes-annonces-select-villes-ajax.php',
          type: 'POST',
          data: {
            idaction: id,
            idselected: $('#commune option:selected').val()
          },
          dataType: "html",
          success: function(res) {
            $(".villselect").html(res);
          }
        });
      }

      villes(id = "");

      $(document).on("change", "#departement", function() {
        var id = $(this).val();
        if (id != "") {
          villes(id);
        } else {
          $(".villselect").html("<select id='commune' name='commune' class='form-control'><option value=''>Sélectionner une ville</option></select>");
        }
      });

      $(document).on("change", "#categorie", function() {
        var id = $(this).val();
        if (id != "") {
          metiers(id);
        } else {
          $(".metierselect").html("<select id='id_metier' name='id_metier' class='form-control'><option value=''>Sélectionner un metier</option></select>");
        }
      });

      function metiers(id) {
        $.ajax({
          url: '/panel/Mes-annonces/Mes-annonces-select-metiers-ajax.php',
          type: 'POST',
          data: {
            idaction: id,
            idselected: $('#id_metier option:selected').val()
          },
          dataType: "html",
          success: function(res) {
            $(".metierselect").html(res);
          }
        });
      }

      metiers(id = "");

      // $(document).on("change", "input[name='type_section']", function() {
      //   if ($(this).val() == "Payante") {
      //     $(".case_vert").show();
      //   } else {
      //     $(".case_vert").hide();
      //   }
      // });

    });
  </script>

  <?php

  if ($action != "Ajouter") {

    ///////////////////////////////SELECT
    $req_select = $bdd->prepare("SELECT * FROM membres_annonces WHERE id_membre=?");
    $req_select->execute(array($id_oo));
    $ligne_select = $req_select->fetch();
    $req_select->closeCursor();
    $idoneinfos_image = $ligne_select['id'];

    if (empty($idoneinfos_image)) {
      echo "<a href='/Mes-annonces/Ajouter'><button type='button' class='btn btn-default' style='margin-right: 5px;' ><span class='uk-icon-plus-circle'></span> Créer une annonce </button></a>";
    }
  }

  if (!empty($action)) {
    echo "<a href='/Mes-annonces'><button type='button' class='btn btn-default' style='margin-right: 5px;' ><span class='uk-icon-file-text'></span> Annonces </button></a>";
  }
  echo "<div style='clear: both;'></div><br />";
  ?>

  <div style='padding: 5px;' align="center">

    <?php
    ////////////////////////////FORMULAIRE AJOUTER / MODIFIER
    if (
      !empty($action)
    ) {

      if ($action == "Modifier") {

        ///////////////////////////////SELECT
        $req_select = $bdd->prepare("SELECT * FROM membres_annonces WHERE id=? AND id_membre=?");
        $req_select->execute(array($idaction, $id_oo));
        $ligne_select = $req_select->fetch();
        $req_select->closeCursor();
        $idoneinfos = $ligne_select['id'];
        $id_membre = $ligne_select['id_membre'];
        $pseudo = $ligne_select['pseudo'];
        $type_section = $ligne_select['type_section'];
        $id_categorie = $ligne_select['id_categorie'];
        $id_type_de_voyage = $ligne_select['id_type_de_voyage'];
        $id_pays = $ligne_select['id_pays'];
        $id_ville = $ligne_select['id_ville'];

        if ($statut_activer_post == "oui") {
          $selectedstatut1 = "selected";
        } elseif ($statut_activer_post == "non") {
          $selectedstatut2 = "selected";
        }

        $_SESSION['id_page_photo_2'] = $idaction;

        ///////////////////////////////SELECT
        $req_select = $bdd->prepare("SELECT * FROM membres WHERE id=?");
        $req_select->execute(array($id_membre));
        $ligne_select = $req_select->fetch();
        $req_select->closeCursor();
        $noms = $ligne_select['nom'];
        $prenoms = $ligne_select['prenom'];
        $nom_professionnels = $ligne_select['nom_professionnel'];

    ?>

        <div align='left'>
          <h2>Modifier l'annonce <?php echo "$titre_annonce"; ?></h2>
        </div><br />
        <div style='clear: both;'></div>

        <form method='post' id='form_img' action='/Mes-annonces-photos/recadrage/upload' enctype='multipart/form-data'>
          <div class="form-group row">
            <label for="images" class="col-sm-4 col-form-label">*Image</label>
            <div class="col-sm-8">
              <?php
              $_SESSION['id_bloc'] = $idoneinfos;
              if (!empty($_SESSION['img_pub'])) {
              ?>
                <img height="100" width="100" src="/images/annonces/<?php echo $_SESSION['img_pub']; ?>" alt="<?php echo $_SESSION['img_pub']; ?>" class="img-thumbnail mb-3" /><br />
                <input class="form-control-file" type='file' name='images' id="images" onchange="document.getElementById('form_img').submit();" /><br />
              <?php
              } else {
              ?>
                <input class="form-control-file" type='file' name='images' id="images" onchange="document.getElementById('form_img').submit();" /><br />
              <?php
              }
              ?>
            </div>
          </div>
        </form>

        <form id="formulaire_annonces_modifier" method="post" action="" enctype="multipart/form-data">
          <input id="action" type="hidden" name="action" value="Modifier-action" required>
          <input id="idaction" type="hidden" name="idaction" value="<?php echo "$idaction"; ?>" required>
          <?php if (!empty($_SESSION['img_pub'])) { ?>
            <input type='hidden' name='imageannonce' id="imageannonce" value="<?php echo $_SESSION['img_pub']; ?>" />
          <?php
          }
        } else {
          ?>


          <div align='left'>
            <h2>Ajouter une annonce </h2>
          </div><br />
          <div style='clear: both;'></div>
          <!-- 
          <form method='post' id='form_img' action='/Mes-annonces-photos/recadrage/upload' enctype='multipart/form-data'>
            <table style='width: 100%;'>
              <tr>
                <td style='text-align: left; width: 190px; margin-right: 5px;'>*Image</td>
                <td style="text-align: left;">
                  <?php
                  if (!empty($_SESSION['img_pub'])) {
                  ?>
                    <img height="100" width="100" src="/images/annonces/<?php echo $_SESSION['img_pub']; ?>" alt="<?php echo $_SESSION['img_pub']; ?>" /><br /><br />
                    <input class="form-control" type='file' name='images' id="images" style='width: 100%;' onchange="document.getElementById('form_img').submit();" /><br />
                  <?php
                  } else {
                  ?>
                    <input class="form-control" type='file' name='images' id="images" style='width: 100%;' onchange="document.getElementById('form_img').submit();" /><br />
                  <?php
                  }
                  ?>
                </td>
              </tr>

            </table>
          </form> -->

          <form id="formulaire_annonces_ajout" method="post" action="" enctype="multipart/form-data">
            <input id="action" type="hidden" name="action" value="Ajouter-action" required>
            <?php if (!empty($_SESSION['img_pub'])) { ?>
              <input type='hidden' name='imageannonce' id="imageannonce" value="<?php echo $_SESSION['img_pub']; ?>" />
          <?php
            }
          }
          ?>

          <div>
            <?php
            if ($_GET['action'] == "Modifier" && !empty($imageannonce) && $type_annonce == "Image avec lien" && empty($_SESSION['img_pub'])) {
            ?>
              <div class="row mb-3">
                <div class="col-12 text-center">
                  <img src="/images/annonces/<?php echo $imageannonce; ?>" alt="<?php echo $imageannonce; ?>" style="max-width:200px;">
                </div>
              </div>
            <?php
            }
            ?>
            <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
              <div class="col-md-3">
                <label for="type_annonce">Type d'annonce</label>
              </div>
              <div class="col-md-9">
                <div class="" style="text-align: left;">
                  <input class="form-check-input" type="radio" name="type_annonce" value="Gratuite" <?php if ($type_annonce == "Gratuite") {
                                                                                                      echo "checked";
                                                                                                    } ?>>
                  <label class="form-check-label">
                    JE DEPOSE UNE ANNONCE GRATUITE ET JE M’ENGAGE A AIDER (½ PAGE)
                  </label>
                </div>
                <div class="" style="text-align: left;">
                  <input class="form-check-input" type="radio" name="type_annonce" value="Payante" <?php if ($type_annonce == "Payante") {
                                                                                                      echo "checked";
                                                                                                    } ?>>
                  <label class="form-check-label">
                    JE DEPOSE UNE ANNONCE PAYANTE
                  </label>
                </div>
              </div>
            </div>


            <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
              <div class="col-md-3">
                <label for="projet">Mon projet</label>
              </div>
              <div class="col-md-9">
                <select id="projet" name="projet" class="form-control" onchange="loadDynamicForm()">
                  <option value=""> Choisir un projet </option>
                  <option value="1" <?php if ($projet == 1) {
                                      echo "selected";
                                    } ?>> Je veux faire rayonner, développer ma commune, mon entreprise, mon projet </option>
                  <option value="2" <?php if ($projet == 2) {
                                      echo "selected";
                                    } ?>> Je veux embaucher la perle rare ! Que ce soit un employé, un travailleur handicapé, un expert, un formateur passionné </option>
                  <option value="3" <?php if ($projet == 3) {
                                      echo "selected";
                                    } ?>> Je propose des solutions d'échanges professionnelles :
                    Une alliance, Une coopération, Un partenariat, Une recherche d'associé(s)
                    Je recherche un dirigeant de Filiale, un franchisé, un fournisseur, un prestataire, un sous-traitant
                  </option>
                  <option value="4" <?php if ($projet == 4) {
                                      echo "selected";
                                    } ?>> Je suis candidat à l'aventure ou je souhaite créer mon activité,
                    je soumets mon projet et fais appels aux mains tendues
                  </option>
                  <option value="5" <?php if ($projet == 5) {
                                      echo "selected";
                                    } ?>> Je souhaite vendre, céder mon activité, une licence </option>
                  <option value="6" <?php if ($projet == 6) {
                                      echo "selected";
                                    } ?>> Bien communal à vendre </option>
                  <option value="7" <?php if ($projet == 7) {
                                      echo "selected";
                                    } ?>> Je souhaite louer, sous-louer, un logement </option>
                  <option value="8" <?php if ($projet == 8) {
                                      echo "selected";
                                    } ?>> Je loue, sous-loue, partage mon commerce ou mon bureau. </option>
                  <option value="9" <?php if ($projet == 9) {
                                      echo "selected";
                                    } ?>> - </option>
                  <option value="10" <?php if ($projet == 10) {
                                        echo "selected";
                                      } ?>> Je mets en location un outil, une machine </option>
                </select>
              </div>
            </div>

            <!-- Add this container for dynamic forms -->
            <div id="dynamic-form-container">
              <?php
              // Include the form based on the current project selection (for initial load or page refresh)
              $selected_projet = isset($projet) ? intval($projet) : 0;
              include_once(__DIR__ . '/dynamic-forms/index.php');
              ?>
            </div>

            <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
              <div class="col-md-3">
                <label for="departement">Département</label>
              </div>
              <div class="col-md-3">
                <select id="departement" name="departement" class="form-control selectpicker" data-live-search="true">
                  <option value=""> Département </option>
                  <?php
                  ///////////////////////////////SELECT BOUCLE
                  $req_boucle = $bdd->prepare("SELECT * FROM departements");
                  $req_boucle->execute();
                  while ($ligne_boucle = $req_boucle->fetch()) {
                    $idoneinfos = $ligne_boucle['id'];
                  ?>
                    <option value="<?php echo $ligne_boucle['id']; ?>" <?php if ($departement == $idoneinfos) {
                                                                          echo "selected";
                                                                        } ?>> <?php echo $ligne_boucle['code_departement']; ?> - <?php echo $ligne_boucle['departement']; ?> </option>
                  <?php
                    unset($colorback);
                  }
                  $req_boucle->closeCursor();
                  ?>
                </select>
              </div>
              <div class="col-md-3">
                <label for="commune">Ville</label>
              </div>
              <div class="col-md-3 villselect">


              </div>
            </div>

            <!-- Dynamic form blocks are now loaded through dynamic-forms/index.php -->

            <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
              <div class="col-md-3">
                <label for="departement">Catégorie du métier</label>
              </div>
              <div class="col-md-8">
                <select id="categorie" name="categorie" class="form-control selectpicker" data-live-search="true">
                  <option value="filtre"> Catégories </option>
                  <?php
                  ///////////////////////////////SELECT BOUCLE
                  $req_boucle = $bdd->prepare("SELECT * FROM categories_metiers");
                  $req_boucle->execute();
                  while ($ligne_boucle = $req_boucle->fetch()) {
                    $idoneinfos = $ligne_boucle['id'];

                  ?>
                    <option value="<?php echo $ligne_boucle['id']; ?>" <?php if ($_SESSION['categorie'] == $idoneinfos) {
                                                                          echo "selected";
                                                                        } ?>> <?php echo $ligne_boucle['nom_categorie']; ?> </option>
                  <?php
                    unset($colorback);
                  }
                  $req_boucle->closeCursor();
                  ?>
                </select>
              </div>
            </div>


            <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
              <div class="col-md-3">
                <label for="poste_a_pourvoir">Poste à pourvoir</label>
              </div>
              <div class="col-md-3 metierselect">


              </div>
              <div class="col-md-2">
                <label for="nombre">Nombre</label>
              </div>
              <div class="col-md-3">
                <input type="number" id="nombre" name="nombre" class="form-control" />
              </div>
            </div>
            <?php if ($categorie_annonceur == 1) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="forme_contrat">Forme du contrat</label>
                </div>
                <div class="col-md-8">
                  <select id="forme_contrat" name="forme_contrat" class="form-control">
                    <option value="CDI">CDI</option>
                    <option value="CDD">CDD</option>
                    <option value="PRECAIRE">PRECAIRE</option>
                  </select>
                </div>
              </div>
            <?php } ?>
            <?php if ($categorie_annonceur == 1) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="poste_a_pourvoir">Woofer accepté</label>
                </div>
                <div class="col-md-3">
                  <select id="poste_a_pourvoir" name="poste_a_pourvoir" class="form-control">
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="nombre_woofer">Nombre</label>
                </div>
                <div class="col-md-3">
                  <input type="number" id="nombre_woofer" name="nombre_woofer" class="form-control" />
                </div>
              </div>
            <?php } ?>
            <?php if ($categorie_annonceur == 1) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="vente_activite">Vente d’activité</label>
                </div>
                <div class="col-md-8" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vente_activite" value="oui" <?php if ($vente_activite == "oui") {
                                                                                                        echo "checked";
                                                                                                      } ?>>
                    <label class="form-check-label">
                      Oui
                    </label>
                  </div>
                </div>
              </div>
            <?php } ?>

            <?php if ($categorie_annonceur == 7) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="sous_traitans">Recherche de sous-traitants</label>
                </div>
                <div class="col-md-3" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="sous_traitans" value="oui" <?php if ($sous_traitans == "oui") {
                                                                                                        echo "checked";
                                                                                                      } ?>>
                    <label class="form-check-label">
                      Oui
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="type_activite">Type d’activité</label>
                </div>
                <div class="col-md-3">
                  <select id="type_activite_sous_traitans" name="type_activite_sous_traitans" class="form-control">
                    <option value="Menuiserie">Menuiserie</option>
                    <option value="Plomberie">Plomberie</option>
                    <option value="Electricité">Electricité</option>
                    <option value="Maçonnerie">Maçonnerie</option>
                    <option value="Peinture">Peinture</option>
                    <option value="Serrurerie">Serrurerie</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="pro_specialise">Recherche de professionnels spécialisés</label>
                </div>
                <div class="col-md-3" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pro_specialise" value="oui" <?php if ($pro_specialise == "oui") {
                                                                                                        echo "checked";
                                                                                                      } ?>>
                    <label class="form-check-label">
                      Oui
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="type_activite_pro_specialise">Type d’activité</label>
                </div>
                <div class="col-md-3">
                  <select id="type_activite_pro_specialise" name="type_activite_pro_specialise" class="form-control">
                    <option value="Menuiserie">Menuiserie</option>
                    <option value="Plomberie">Plomberie</option>
                    <option value="Electricité">Electricité</option>
                    <option value="Maçonnerie">Maçonnerie</option>
                    <option value="Peinture">Peinture</option>
                    <option value="Serrurerie">Serrurerie</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="formateurs">Recherche de formateurs</label>
                </div>
                <div class="col-md-3" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="formateurs" value="oui" <?php if ($pro_specialise == "oui") {
                                                                                                    echo "checked";
                                                                                                  } ?>>
                    <label class="form-check-label">
                      Oui
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="type_activite_formateurs">Type d’activité</label>
                </div>
                <div class="col-md-3">
                  <select id="type_activite_formateurs" name="type_activite_formateurs" class="form-control">
                    <option value="Menuiserie">Menuiserie</option>
                    <option value="Plomberie">Plomberie</option>
                    <option value="Electricité">Electricité</option>
                    <option value="Maçonnerie">Maçonnerie</option>
                    <option value="Peinture">Peinture</option>
                    <option value="Serrurerie">Serrurerie</option>
                  </select>
                </div>
              </div>
            <?php } ?>

            <?php if ($categorie_annonceur == 2 || $categorie_annonceur == 6 || $categorie_annonceur == 7) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="vente_activite">Vente d’activité</label>
                </div>
                <div class="col-md-3" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vente_activite" value="oui" <?php if ($vente_activite == "oui") {
                                                                                                        echo "checked";
                                                                                                      } ?>>
                    <label class="form-check-label">
                      Oui
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="type_activite">Type d’activité</label>
                </div>
                <div class="col-md-3">
                  <select id="type_activite" name="type_activite" class="form-control">
                    <option value="Menuiserie">Menuiserie</option>
                    <option value="Plomberie">Plomberie</option>
                    <option value="Electricité">Electricité</option>
                    <option value="Maçonnerie">Maçonnerie</option>
                    <option value="Peinture">Peinture</option>
                    <option value="Serrurerie">Serrurerie</option>
                  </select>
                </div>
              </div>
            <?php } ?>
            <?php if ($categorie_annonceur == 3) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="cession_du_fonds">Cession du fonds de commerce</label>
                </div>
                <div class="col-md-3" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cession_du_fonds" value="oui" <?php if ($cession_du_fonds == "oui") {
                                                                                                          echo "checked";
                                                                                                        } ?>>
                    <label class="form-check-label">
                      Oui
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="type_activite">Type d’activité</label>
                </div>
                <div class="col-md-3">
                  <select id="type_activite" name="type_activite" class="form-control">
                    <option value="Menuiserie">Menuiserie</option>
                    <option value="Plomberie">Plomberie</option>
                    <option value="Electricité">Electricité</option>
                    <option value="Maçonnerie">Maçonnerie</option>
                    <option value="Peinture">Peinture</option>
                    <option value="Serrurerie">Serrurerie</option>
                  </select>
                </div>
              </div>
            <?php } ?>

            <?php if ($categorie_annonceur == 4) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="activite_sans_les_murs">Vente d’activité sans les murs</label>
                </div>
                <div class="col-md-3" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="activite_sans_les_murs" value="oui" <?php if ($activite_sans_les_murs == "oui") {
                                                                                                                echo "checked";
                                                                                                              } ?>>
                    <label class="form-check-label">
                      Oui
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="type_activite">Type d’activité</label>
                </div>
                <div class="col-md-3">
                  <select id="type_activite" name="type_activite" class="form-control">
                    <option value="Menuiserie">Menuiserie</option>
                    <option value="Plomberie">Plomberie</option>
                    <option value="Electricité">Electricité</option>
                    <option value="Maçonnerie">Maçonnerie</option>
                    <option value="Peinture">Peinture</option>
                    <option value="Serrurerie">Serrurerie</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="activite_avec_les_murs">Vente d’activité avec les murs</label>
                </div>
                <div class="col-md-3" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="activite_avec_les_murs" value="oui" <?php if ($cession_du_fonds == "oui") {
                                                                                                                echo "checked";
                                                                                                              } ?>>
                    <label class="form-check-label">
                      Oui
                    </label>
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="type_activite2">Type d’activité</label>
                </div>
                <div class="col-md-3">
                  <select id="type_activite2" name="type_activite2" class="form-control">
                    <option value="Menuiserie">Menuiserie</option>
                    <option value="Plomberie">Plomberie</option>
                    <option value="Electricité">Electricité</option>
                    <option value="Maçonnerie">Maçonnerie</option>
                    <option value="Peinture">Peinture</option>
                    <option value="Serrurerie">Serrurerie</option>
                  </select>
                </div>
              </div>

            <?php } ?>

            <?php if ($categorie_annonceur == 5) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="vente_biens_prives">Vente de biens privés communaux</label>
                </div>
                <div class="col-md-8 d-flex">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vente_biens_prives[]" value="batiments">
                    <label class="form-check-label">Bâtiments</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vente_biens_prives[]" value="locaux">
                    <label class="form-check-label">Locaux</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vente_biens_prives[]" value="avec_terrains">
                    <label class="form-check-label">Avec terrains</label>
                  </div>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="marche_gre_a_gre">Marché de gré à gré, appel à candidature</label>
                </div>
                <div class="col-md-8" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="marche_gre_a_gre_appel_a_candidature" value="oui" <?php if ($marche_gre_a_gre_appel_a_candidature == "oui") {
                                                                                                                              echo "checked";
                                                                                                                            } ?>>
                    <label class="form-check-label">
                      Oui
                    </label>
                  </div>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="location_options">Location</label>
                </div>
                <div class="col-md-8 d-flex">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="location_batiments" value="oui" <?php if ($location_batiments == "oui") {
                                                                                                            echo "checked";
                                                                                                          } ?>>
                    <label class="form-check-label">de bâtiments</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="location_locaux" value="oui" <?php if ($location_locaux == "oui") {
                                                                                                          echo "checked";
                                                                                                        } ?>>
                    <label class="form-check-label">de locaux/ Hangars</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="location_terrains" value="oui" <?php if ($location_terrains == "oui") {
                                                                                                            echo "checked";
                                                                                                          } ?>>
                    <label class="form-check-label">de terrains</label>
                  </div>
                </div>
              </div>
            <?php } ?>

            <?php if (in_array($categorie_annonceur, [4, 5, 6, 7])) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="stagiaire_accepte">Bénévole/Stagiaire accepté</label>
                </div>
                <div class="col-md-8" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="stagiaire_accepte" value="oui" <?php if ($stagiaire_accepte == "oui") {
                                                                                                            echo "checked";
                                                                                                          } ?>>
                    <label class="form-check-label">
                      Oui
                    </label>
                  </div>
                </div>
              </div>
            <?php } ?>

            <?php if ($categorie_annonceur == 2) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="stagiaire_accepte">Stagiaire accepté</label>
                </div>
                <div class="col-md-8" style="text-align: left;">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stagiaire_accepte" value="remunere">
                    <label class="form-check-label">
                      Rémunéré
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="stagiaire_accepte" value="non_remunere">
                    <label class="form-check-label">
                      Non rémunéré
                    </label>
                  </div>
                </div>
              </div>
            <?php } ?>
            <?php if ($categorie_annonceur == 8) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="baux_residences">Baux de résidences principales ou baux d’habitations</label>
                </div>
                <div class="col-md-8 d-flex">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="baux_residences[]" value="baux_residences_principales_vides">
                    <label class="form-check-label">Baux de résidences principales vides dit 3/6/9</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="baux_residences[]" value="baux_residences_principales_meublees">
                    <label class="form-check-label">Baux de résidences principales meublées</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="baux_residences[]" value="baux_residences_principales_colocations">
                    <label class="form-check-label">Baux de résidences principales en colocations</label>
                  </div>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="baux_commerciaux">Baux commerciaux</label>
                </div>
                <div class="col-md-8 d-flex">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="baux_commerciaux[]" value="classiques">
                    <label class="form-check-label">Baux commerciaux classiques</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="baux_commerciaux[]" value="derogatoires">
                    <label class="form-check-label">Baux commerciaux dérogatoires</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="baux_commerciaux[]" value="precaires">
                    <label class="form-check-label">Baux commerciaux précaires</label>
                  </div>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="baux_professionnels">Baux professionnels ou de bureaux</label>
                </div>
                <div class="col-md-8" style="text-align: left;">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="baux_professionnels" value="oui" <?php if ($baux_professionnels == "oui") {
                                                                                                              echo "checked";
                                                                                                            } ?>>
                    <label class="form-check-label">Oui</label>
                  </div>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="baux_mobilites">Baux mobilités</label>
                </div>
                <div class="col-md-8" style="text-align: left;">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="baux_mobilites" value="oui" <?php if ($baux_mobilites == "oui") {
                                                                                                        echo "checked";
                                                                                                      } ?>>
                    <label class="form-check-label">Oui</label>
                  </div>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="baux_etudiants">Baux étudiants</label>
                </div>
                <div class="col-md-8" style="text-align: left;">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="baux_etudiants" value="oui" <?php if ($baux_etudiants == "oui") {
                                                                                                        echo "checked";
                                                                                                      } ?>>
                    <label class="form-check-label">Oui</label>
                  </div>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="baux_saisonniers">Baux saisonniers</label>
                </div>
                <div class="col-md-8" style="text-align: left;">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="baux_saisonniers" value="oui" <?php if ($baux_saisonniers == "oui") {
                                                                                                          echo "checked";
                                                                                                        } ?>>
                    <label class="form-check-label">Oui</label>
                  </div>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="baux_coworking">Baux COWORKING</label>
                </div>
                <div class="col-md-8" style="text-align: left;">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="baux_coworking" value="oui" <?php if ($baux_coworking == "oui") {
                                                                                                        echo "checked";
                                                                                                      } ?>>
                    <label class="form-check-label">Oui</label>
                  </div>
                </div>
              </div>

              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="vente_murs_commerciaux">Vente de Murs commerciaux</label>
                </div>
                <div class="col-md-8" style="text-align: left;">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="vente_murs_commerciaux" value="oui" <?php if ($vente_murs_commerciaux == "oui") {
                                                                                                                echo "checked";
                                                                                                              } ?>>
                    <label class="form-check-label">Oui</label>
                  </div>
                </div>
              </div>
            <?php } ?>
            <?php if ($categorie_annonceur != 5 && $categorie_annonceur != 9) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="demenagement_logement">Prise en charge</label>
                </div>
                <div class="col-md-8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="prise_en_charge" value="1" <?php if ($prise_en_charge == "demenagement") {
                                                                                                    echo "checked";
                                                                                                  } ?>>
                    <label class="form-check-label">
                      Je prends en charge le déménagement
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="prise_en_charge" value="2" <?php if ($prise_en_charge == "logement") {
                                                                                                    echo "checked";
                                                                                                  } ?>>
                    <label class="form-check-label">
                      Je prends en charge le logement pour une période minimale de 2 mois
                    </label>
                  </div>
                </div>
              </div>
            <?php } ?>

            <?php if ($categorie_annonceur == 5) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="demenagement_logement">Prise en charge</label>
                </div>
                <div class="col-md-8">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="prise_en_charge" value="1" <?php if ($prise_en_charge == "demenagement") {
                                                                                                    echo "checked";
                                                                                                  } ?>>
                    <label class="form-check-label">
                      Mise à disposition gratuite de bâtiments, de locaux, de terrains.
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="prise_en_charge" value="2" <?php if ($prise_en_charge == "logement") {
                                                                                                    echo "checked";
                                                                                                  } ?>>
                    <label class="form-check-label">
                      Je prends en charge le logement pour une période minimale de 2 mois
                    </label>
                  </div>
                </div>
              </div>
            <?php } ?>

            <?php if ($categorie_annonceur == 9) { ?>
              <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
                <div class="col-md-3">
                  <label for="demenagement_logement">Prise en charge</label>
                </div>
                <div class="col-md-8">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="prise_en_charge" value="1" <?php if ($prise_en_charge == "demenagement") {
                                                                                                        echo "checked";
                                                                                                      } ?>>
                    <label class="form-check-label">
                      Je propose gracieusement un logement pour une période de 1 mois
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="prise_en_charge" value="2" <?php if ($prise_en_charge == "logement") {
                                                                                                        echo "checked";
                                                                                                      } ?>>
                    <label class="form-check-label">
                      Je propose d’accueillir et de présenter la commune gracieusement
                    </label>
                  </div>
                </div>
              </div>
            <?php } ?>

            <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded; display:none">
              <div class="col-md-3">
                <label for="nom_publicite">Prix</label>
              </div>
              <div class="col-md-8">
                <div class="prix">

                </div>
                <input type="hidden" id="prix" name="prix" value="" />
              </div>
            </div>

            <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
              <div class="col-md-3">
                <label for="titre_annonce">*Titre d'annonce</label>
              </div>
              <div class="col-md-8">
                <input type="text" id="titre_annonce" name="titre_annonce" class="form-control" value="<?php echo "$titre_annonce"; ?>" required />
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-3">
                <label for="nom_publicite">*Contenu</label>
              </div>
              <div class="col-md-8">
                <textarea id='contenu' name='contenu' style='width: 100%; height: 60px;'><?php echo "$contenu"; ?></textarea>
              </div>
            </div>

            <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
              <div class="col-md-3">
                <label for="image_annonce">Image</label>
              </div>
              <div class="col-md-8">
                <input type="file" id="image_annonce" name="image_annonce" class="form-control-file" />
              </div>
            </div>



            <div class="row mb-3 montant_publicite" style="display: none;">
              <div class="col-md-3">
                <label for="montant_publicite">Montant</label>
              </div>
              <div class="col-md-8">
                <?php if ($_GET['type'] == "image") { ?>
                  <?php echo $montant_publicite_bandeau_prix; ?>€
                <?php } ?>
                <?php if ($_GET['type'] == "video") { ?>
                  <?php echo "0"; ?>€
                <?php } ?>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-12 text-center">
                <button id="bouton_formulaire_annonces" type="button" class="btn btn-success">VALIDER</button>
              </div>
            </div>
          </div>
          </form>
          <br /><br />

        <?php
      } elseif (!empty($_GET['action'])) {
        ?>

          <div class="alert alert-danger" style="text-align: left; margin-bottom: 20px;">
            Vous n'êtes pas autorisé à accéder à cette page
          </div>

        <?php
      }


      ////////////////////////////FORMULAIRE AJOUTER / MODIFIER


      ////////////////////////////SI PAS D'ACTION 
      if (empty($_GET['action'])) {
        ?>

          <!-- LISTE -->
          <div id='liste-Mes-annonces'></div>

        <?php
      }
      ////////////////////////////SI PAS D'ACTION 
        ?>

  </div>

<?php
} else {
  header("location: /");
}

?>