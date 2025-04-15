# README – Form Generator Instructions for "location_logement.php" (Page 7 PP)

## FORM ASSIGNMENT

**Filename:** `location_logement.php`  
**Form ID:** 7

---

## GENERAL RULES

- All field **labels must remain in French**.
- The form contains **10 rows**, each with a specific structure (1 to 3 columns).
- Use Bootstrap-style classes for layout (`mb-4`, `row`, etc.).
- Field names must follow `snake_case` based on the French label.

---

## FORM STRUCTURE (10 Rows)

### 🔹 Row 1 – Single Column
- `div class="row mb-4"`
  - Label: **"Commune"**
  - Input type: `text`

---

### 🔹 Row 2 – 3 Columns
- `div class="row mb-4"`
  - Column 1: **"Quartier"** → `text_input`
  - Column 2: **"N"** → `text_input` (for street number)
  - Column 3: **"Adresse"** → `text_input`

---

### 🔹 Row 3 – 3 Columns
- `div class="row mb-4"`
  - Column 1: **"Logement vide"** → `checkbox`
  - Column 2: **"Disponible à partir de"** → `date_input` (format: `dd/mm/yyyy`)
  - Column 3: **"Logement habité à sous louer"** → `checkbox`

---

### 🔹 Row 4 – Single Column
- `div class="row mb-4"`
  - Label: **"Type de Bail / Contrat"**
  - Input type: `dropdown`
  - Options:
    - Bail d'habitation vide (3 ans renouvelable)
    - Bail meublé (1 an renouvelable ou 9 mois pour étudiant)
    - Bail mobilité (1 à 10 mois)
    - Sous location
    - Colocation

---

### 🔹 Row 5 – 2 Columns
- `div class="row mb-4"`
  - Column 1: **"Loyer (Hors charges et frais)"**
    - Input type: `number_input`
    - Suffix: `€/mois`
  - Column 2: **"Charges"**
    - Input type: `number_input`
    - Suffix: `€/mois`

---

### 🔹 Row 6 – 3 Columns
- `div class="row mb-4"`
  - Column 1: **"Loyer (Charges comprises)"** → `number_input`, suffix: `€/mois`
  - Column 2: **"Dépôt de garantie"** → `number_input`, suffix: `mois`
  - Column 3: **"Superficie"** → `number_input`, suffix: `m²`

---

### 🔹 Row 7 – Single Column
- `div class="row mb-4"`
  - Label: **"État général"**
  - Input type: `dropdown`
  - Options:
    - Neuf
    - Rénové
    - À rénover

---

### 🔹 Row 8 – 3 Columns
- `div class="row mb-4"`
  - Label: **"Stationnements"**
  - Column 1: **"Nombre"** → `number_input`
  - Column 2: **"Possible"** → `checkbox`
  - Column 3: **"Public"** → `checkbox`

---

### 🔹 Row 9 – Accessibility Options
- `div class="row mb-4"`
  - Label: **"Accessibilité"**
  - Checkboxes (3 total):
    - Ascenseur commun
    - Niveau étage
    - Plein pied

---

### 🔹 Row 10 – Text Area
- `div class="row mb-4"`
  - Label: *(none specified, acts as free-form comment box)*
  - Input type: `textarea`  
  - Placeholder: `"Commentaires, précisions, ou conditions supplémentaires..."`

---

## VALIDATION RULES

- All numeric fields must accept only positive values (`min=0`).
- Date must follow strict `dd/mm/yyyy` format.
- Text fields must accept UTF-8 characters and be trimmed.
- Dropdowns must include default option: `-- sélectionnez --`.
- Checkboxes must return `true/false` or `1/0`.

---

## VISUAL & UX CONSIDERATIONS

- Group all address-related fields (Rows 1–2) under a collapsible “Localisation” section.
- Show monetary fields with clear suffixes (`€/mois`) and visual grouping.
- Use labels and placeholders in **French only**.
- Checkbox rows should be grouped visually (e.g., accessibilité and stationnements).
- Make the text area expandable on focus.

---

## ADDITIONAL NOTES

- This form does **not require** images, file uploads or external links.
- The form is intended for use by property owners or managers (bailleurs).
- Legal notices or tooltips may be added for sensitive fields like "type de bail" or "charges".


