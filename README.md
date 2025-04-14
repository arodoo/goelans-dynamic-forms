# README – Form Generator Instructions for "PP - P1b.pdf"

## General Description

This form allows a user to declare and promote a local or professional initiative depending on their role (e.g., commune, business, association, or artisan). It supports showcasing activities, collaborations, resources, and location-related details. The form is multilingual in nature, but all interface fields should preserve the **original French labels** as shown in the mockup.

---

## FORM ASSIGNMENT

This form is associated with:

**Filename:** `developpement_commune.php`  
**Form ID:** 1

---

## FORM STRUCTURE

### Section 1: General Information (Header Fields)

All fields should allow free-form input unless noted.

- **Label:** "Objet" — `textarea`
  - Description field for the project’s purpose or vision.

- **Label:** "Je veux faire rayonner, développer ma commune, mon entreprise, mon projet" — `info_label`  
  - No input field; acts as motivation text.

- **Label:** "Locaux disponible à partir de" — `date_input` (format: dd/mm/yyyy)

- **Label:** "Raison sociale" — `text_input`

- **Label:** "Statut juridique" — `dropdown` (preset list if available, else text)

- **Label:** "Commune" — `text_input`

- **Label:** "N° adresse / Quartier" — `text_input`

- **Label:** "Enseigne" — `text_input`

---

### Section 2: Type of Project (Multiple Choice + Conditional Blocks)

**Type Selector (Radio buttons, required):**

- Nature du projet:
  - COMMUNE
  - ENTREPRISE / COMMERCE
  - ARTISAN
  - ASSOCIATION

Depending on the selection, show the relevant subform:

#### A. If "COMMUNE":
- **Checkboxes:**
  - "Appel aux bénévoles / Actions collectives"
  - "Création d'une structure (école, résidence, ...), d'un local commercial, d'un pôle santé, pharmacie"
  - "Location gérance du fonds de commerce (1)"
  - "Recherche de partenaire"
  - "Exposer mon autre projet"

#### B. If "ENTREPRISE / COMMERCE":
- **Checkboxes:**
  - "Proposer durablement une Alliance, une Coopération, un Partenariat, la création d'une filiale, Devenir franchiseur, diversification d'activité"
  - "Recherche occasionnelle d'un formateur, d'un fournisseur, d'un prestataire, d'un vendeur, sous-traiter une partie de mon activité"
  - "Mettre en avant ma création d'activité, mes nouveautés, mon savoir-faire"
  - "Exposer mon autre projet"

#### C. If "ARTISAN":
- **Checkboxes:**
  - "Présentation de mon activité, mes créations, mes services, ma formation"
  - "Proposer durablement une Alliance, une Coopération, un Partenariat"
  - "Recherche d'outils, de matériels, matières premières, de compétences"
  - "Exposer mon autre projet"

#### D. If "ASSOCIATION":
- **Checkboxes:**
  - "Présentation des valeurs, des missions et des actions, Projets en cours, Evènements"
  - "Appels aux adhésions"
  - "Proposer durablement une Alliance, une Coopération, un Partenariat"
  - "Recherche occasionnelle d'un formateur, d'un fournisseur, d'un prestataire, d'un vendeur, sous-traiter une partie de mon activité"
  - "Exposer mon autre projet"

---

### Section 3: Metadata and Smart Fields

- **SIRET integration (optional):**
  - If user inputs a valid SIRET number, auto-fill business data via API.
  - Display note: `"Incrémentation des informations saisies à l'inscription. Si SIRET (toutes infos enregistrées en API)"`

---

### Section 4: Media and Extended Content

- **Image Upload:** Allow up to 4 photos, accepted formats: JPG, PNG, max 5MB per image.

- **URL Fields:** Allow 2 optional URL fields for external websites.

- **Free Text:** Large `textarea` for additional comments or explanation.

---

### Section 5: Publication Options

- **After choosing a project type or filling one of the "aide" checkboxes**, show format selector:

  - 1/4 page — advanced features, 2 photos, 1 URL
  - 1/2 page — advanced features, 4 photos, 2 URLs
  - 1 page — advanced features, 10 photos, 5 URLs

---

## VALIDATION RULES

- All text inputs must trim whitespace and support UTF-8 encoding.
- Dates must be validated in `dd/mm/yyyy` format.
- Checkbox groups must allow multiple selections.
- If no project type is selected, prevent form submission.

---

## VISUAL STRUCTURE

- Group sections with collapsible panels by project type.
- Use consistent layout: labels left-aligned, inputs right-aligned.
- Use French language UI text throughout.
- Clearly separate “header info” from project content.

---

## NOTES

- The form must be mobile responsive.
- All content must remain in French (labels, tooltips, selections).
- The “Location gérance du fonds de commerce (1)” appears in both COMMUNE and ENTREPRISE. Ensure reusability of logic.

