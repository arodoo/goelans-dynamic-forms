# README – Form Generator Instructions for "option_generique.php" (Page 9 PP)

## FORM ASSIGNMENT

- **Filename:** `option_generique.php`
- **Form ID:** 9

---

## GENERAL RULES

- **Language:** All field labels and options must remain in **French**.
- **Layout:** Structure the form using a responsive system (e.g., Bootstrap with `row` and `mb-4` classes).
- **Naming Convention:** Each field must have a `name` attribute using `snake_case`, derived from the French label.
- **Field Types:** Use checkboxes, dropdowns, text inputs, radio buttons, and textareas where specified.
- **Validation:** All dropdowns must include a default placeholder (`-- sélectionnez --`). Numeric inputs must accept only non-negative values. Required fields must be validated.

---

## SECTION 1: Options contractuelles principales (clickeables en haut)

At the **top of the form**, display **three clickable buttons or toggles** (like tabs or labeled checkboxes) that indicate the type of contractual intention:

- **Labels (all clickable):**
  1. **"Location-Gérance"**
  2. **"Location-Gérance avec option d'achat"**
  3. **"Sous location Local commercial"**

- **Input Type:** These can be checkboxes or radio buttons, depending on if multiple can be selected.
- **Field Names:**
  - `option_location_gerance`
  - `option_location_achat`
  - `option_sous_location_commerciale`

- **Visual behavior:** When selected, they do not change the form behavior, but they must be visually distinguishable and their state must be submitted.

---

## SECTION 2: Informations concernant l'activité en cours

This section consists of **three consecutive rows**, each with one input field.

### **Row 1 – Local vide, aménageable**
- **Label:** "Local vide, aménageable"
- **Input Type:** Checkbox
- **Field Name:** `local_vide`

---

### **Row 2 – Nature de l'activité**
- **Label:** "Nature de l'activité"
- **Input Type:** Dropdown (déroulant)
- **Dropdown Options:**
  - Commerce
  - Artisanat
  - Restauration
  - Services
  - Profession libérale
  - Autres
- **Field Name:** `nature_activite`

---

### **Row 3 – Composition du fonds**
- **Label:** "Composition du fonds"
- **Input Type:** Dropdown (déroulant)
- **Dropdown Options:**
  - Clientèle
  - Matériel
  - Droit au bail
  - Licence III, IV
  - Stocks
- **Field Name:** `composition_fonds`

---

## SECTION 3: Informations concernant la location

This section contains **five fields grouped into four distinct rows**, laid out as follows:

---

### **Row 1 – Loyer / Redevance & % du CA**
- **Column 1:**
  - **Label:** "Loyer / Redevance"
  - **Input Type:** Dropdown (déroulant)
  - **Dropdown Options:**
    - Mensuel
    - Trimestriel
    - Annuel
  - **Field Name:** `loyer_redevance`

- **Column 2:**
  - **Label:** "% du CA"
  - **Input Type:** Number input (can include decimal)
  - **Field Name:** `pourcentage_ca`

---

### **Row 2 – TVA applicable %**
- **Label:** "TVA applicable %"
- **Input Type:** Number input (accept percentage, integers or decimals)
- **Field Name:** `tva_applicable`

---

### **Row 3 – Type de Bail / Contrat**
- **Label:** "Type de Bail / Contrat"
- **Input Type:** Dropdown (déroulant)
- **Dropdown Options:**
  - Bail commercial (classique) 3-6-9  
  - Bail précaire (ou dérogatoire)  
  - Bail professionnel  
  - Location-Gérance  
  - Sous-location commerciale  
  - Convention d'occupation précaire
- **Field Name:** `type_bail`

---

### **Row 4 – Durée du contrat**
- **Label:** "Durée du contrat"
- **Input Type:** Radio buttons
- **Options:**
  - Temporaire
  - Renouvelable
- **Field Name:** `duree_contrat`

---

## VALIDATION RULES

- All **dropdowns** must include a placeholder (e.g., `-- sélectionnez --`) and prevent submission if no value is selected.
- **Checkboxes** and **radio buttons** must have clear labels and consistent boolean return values.
- **Numeric inputs** (% du CA, TVA) must only accept non-negative values; decimal values should be supported.
- If any field is required by business logic, the UI must enforce that before submission.

---

## VISUAL & UX INSTRUCTIONS

- Group each of the 3 sections with headings or separators:
  - **Options contractuelles** (clickeable)
  - **Informations concernant l'activité**
  - **Informations concernant la location**
- Use Bootstrap-like spacing (`mb-4`) for clarity between rows.
- Display dropdowns with visible labels and sufficient space to prevent misclicks.
- If possible, show help icons/tooltips for fields like "TVA applicable %" or "Composition du fonds".

---

## ADDITIONAL NOTES

- All text content must remain in French.
- Ignore any text such as “Case 13 sur Av Page”.
- Field order and grouping must follow exactly this specification to mirror the intended form flow:
  1. **Contract type toggles**
  2. **Activity details (3 rows)**
  3. **Location information (4 rows with 5 fields)**

