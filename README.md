# README – Form Generator Instructions for "vente_activite.php" (Page 5 PP)

## FORM ASSIGNMENT

**Filename:** `vente_activite.php`  
**Form ID:** 5

---

## GENERAL RULES

- All labels must remain in **French**.
- Use **Bootstrap-style layout**: define each row and column using responsive classes such as `mb-4`, `mb-6`, `mb-12`.
- Each input field must include an HTML `name` attribute matching the lowercase snake_case version of its label.
- Group related fields logically (e.g., address + quartier in the same row).
- Use checkboxes, dropdowns or date inputs where appropriate.
- Support autocompletion or dropdowns for juridical statuses and activity types where applicable.

---

## FORM STRUCTURE (12 Rows)

### 🔹 **Row 1** – Full Width  
- `div class="row mb-12"`  
  - Label: **"Commune"**  
  - Input type: `text`

---

### 🔹 **Row 2** – 3 Columns  
- `div class="row mb-4"`  
  - Column 1: **"Quartier"** → `text_input`  
  - Column 2: **"Num"** → `text_input`  
  - Column 3: **"Adresse"** → `text_input`

---

### 🔹 **Row 3** – 2 Columns  
- `div class="row mb-4"`  
  - Column 1: **"Locaux disponible à partir de"** → `date_input` (format: `dd/mm/yyyy`)  
  - Column 2: Empty / Reserved

---

### 🔹 **Row 4** – 3 Columns  
- `div class="row mb-4"`  
  - Column 1: **"Statut juridique"** → `dropdown` (use standard French legal statuses)  
  - Column 2: **"Raison sociale"** → `text_input`  
  - Column 3: **"Enseigne"** → `text_input`

---

### 🔹 **Row 5** – Transmission Modalities + Project Type  
- `div class="row mb-4"`  
  - Label: `"Modalité de transmission"`  
  - Use a vertical `checkbox group` for the following options:
    - Apport d'actifs  
    - Apport en société  
    - Cession à un fonds d'investissement ou un partenaire stratégique  
    - Cession de fonds de commerce  
    - Cession de licence  
    - Cession de titres  
    - Cession progressive  
    - Fusion - absorption  
    - Scission
  - Below or adjacent, display a **tag-like multi-select** or vertical checkboxes for:
    - Artisan  
    - Association  
    - Commerce  
    - Bureau  
    - Entreprise

---

### 🔹 **Row 6** – Nature of Activity  
- `div class="row mb-4"`  
  - Label: **"Nature de l'activité"**  
  - Input type: `dropdown` with options:
    - Local vide / aménageable  
    - En activité  
    - Autres

---

### 🔹 **Row 7** – 2 Columns  
- `div class="row mb-4"`  
  - Column 1: **"Superficie (m²)"** → `number_input`, min: 0  
  - Column 2: **"État général"** → `dropdown` with options:
    - Neuf  
    - Rénové  
    - À rénover

---

### 🔹 **Row 8** – License Requirements  
- `div class="row mb-4"`  
  - Label: **"Licences et autorisations nécessaires pour l'exploitation"**  
  - Input: `textarea` or rich text field

---

### 🔹 **Row 9** – Intellectual Property  
- `div class="row mb-4"`  
  - Label: **"Cession de propriété intellectuelle"**  
  - Checkbox options:
    - Marque  
    - Brevet  
    - Nom de domaine

---

### 🔹 **Row 10** – Staff Details  
- `div class="row mb-4"`  
  - Three checkboxes with labels:
    - **"Effectif en CDI"**  
    - **"Effectif en CDD"**  
    - **"Effectif en intérim"**
  - Each checkbox should be followed by a `number_input` (optional) if count is provided.

---

### 🔹 **Row 11** – Parking Information  
- `div class="row mb-4"`  
  - Label: **"Stationnements"**  
  - Subfields:
    - **"Nombre"** → `number_input`  
    - **"Possible"** → `checkbox`  
    - **"Public"** → `checkbox`

---

### 🔹 **Row 12** – Accessibility  
- `div class="row mb-4"`  
  - Label: **"Accessibilité"**  
  - Use 3 checkboxes:
    - Ascenseur commun  
    - PMR  
    - Plein pied

---

## VALIDATION RULES

- All text inputs must accept UTF-8 characters.
- "Superficie" and "Effectif" must be positive integers.
- Dates must use strict `dd/mm/yyyy` format and prevent future dates if not allowed.
- Dropdowns must always include a default option: `-- sélectionnez --`.
- Checkbox groups must support multiple selections.
- Field names must be consistent with their labels using `snake_case`.

---

## VISUAL AND UX CONSIDERATIONS

- Use clear section dividers or card components to separate rows 1–4 (header info), 5–6 (project data), and 7–12 (technical/property data).
- Use tooltips or help icons for complex terms like “Statut juridique”, “Licences”, or “Cession”.
- Mobile responsive behavior is required.
- For large groups of checkboxes (like in Row 5), use a collapsible section.

---

## ADDITIONAL NOTES

- No file uploads or URLs required in this form version.
- Publication formatting (1/4, 1/2 page, etc.) **is not required** for this form.
- This form is meant for internal capture and processing of business or property sale intents.
