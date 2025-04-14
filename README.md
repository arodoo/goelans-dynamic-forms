A continuación se presenta el archivo README con las instrucciones precisas y detalladas para generar cada uno de los formularios (mockups) a partir del documento “PP - Pforms_merged.pdf”. Este archivo está diseñado para ser interpretado por una IA, por lo que se incluyen detalles exactos sobre cada campo, comportamiento, validación y asignación a la URL (archivo PHP) correspondiente. Los formularios se asignan de la siguiente forma:

- **1 => developpement_commune.php**  
  *(Este formulario se deja vacío por el momento.)*

- **2 => recrutement.php**  
- **3 => partenariat_professionnel.php**  
- **4 => creation_activite.php**  
- **5 => vente_activite.php**  
- **6 => bien_communal.php**  
- **7 => location_logement.php**  
- **8 => location_commerce.php**  
- **9 => option_generique.php**  
- **10 => location_equipement.php**

---

# README – Instrucciones Precisísimas para la Generación de los Formularios

Este documento especifica de manera detallada el contenido, la estructura y las validaciones necesarias para cada formulario. Se indica además la lógica interna (por ejemplo, autollenado vía API en función del número SIRET) y la integración de campos multimedia y de ayuda. La intención es que una IA lea este README y genere los formularios de forma precisa y consistente.

---

## 1. developpement_commune.php  
**Estado:**  
- **Contenido:** Vacío (no se genera ningún campo en este formulario en esta versión).

---

## 2. recrutement.php  
**Objetivo:**  
Administrar propuestas y búsquedas de contratación (embauche).  
**Estructura y Campos:**

### 2.1. Sección de Propuestas y Búsquedas  
- **Título o Encabezado:**  
  - “JE PROPOSE” y “JE RECHERCHE” (presentar ambas opciones con casillas de verificación).
- **Opciones para “JE PROPOSE”:**  
  - Casilla para “Un emploi Woofing”  
  - Casilla para “Un stage”  
  - Casilla para “Un Prestataire occasionnel”  
  - Casilla para “Un Sous-traitant”
- **Opciones para “JE RECHERCHE”:**  
  - Casilla para “Un Spécialiste”  
  - Casilla para “Un formateur”

### 2.2. Listas Desplegables Basadas en FRANCE TRAVAIL  
- **Campo “Catégorie d'activité proposé”:**  
  - Tipo: Dropdown  
  - Lista de opciones (enteramente numéricas y textuales):  
    1. Activité juridiques  
    2. Comptabilité  
    3. Agriculture, Sylviculture  
    4. Elevage, Pêche  
    5. Architecture  
    6. Etudes des sols et des bâtiments  
    7. Normes  
    8. Artisanat d'art  
    9. Audiovisuel  
    10. Spectacle  
    11. Automobile  
    12. BTP  
    13. Gros œuvre  
    14. Commerce de détail  
    15. Commerce de gros  
    16. Grande distribution  
    17. Communication et marketing  
    18. Culture et patrimoine  
    19. Edition  
    20. Energie  
    21. Conseil, orientation et formation  
    22. Enseignement  
    23. Environnement  
    24. Assurance  
    25. Banque  
    26. Finance  
    27. Gestion administrative  
    28. Ressources humaines  
    29. Hôtellerie  
    30. Restauration  
    31. Immobilier  
    32. Industrie - Alimentaire  
    33. Industrie - Bois  
    34. Industrie - Chimie  
    35. Industrie - Electronique  
    36. Industrie - Métallurgie  
    37. Imprimerie  
    38. Papier  
    39. Industrie - Textile et mode  
    40. Industries  
    41. Informatique  
    42. Télécommunications  
    43. Logistique et courrier  
    44. Transport  
    45. Maintenance  
    46. Entretien  
    47. Nettoyage  
    48. Recherche  
    49. Médicale  
    50. Soins animalier  
    51. Défense  
    52. Sécurité  
    53. Service public  
    54. Sociale  
    55. Sport, Animation et loisir  
    56. Tourisme
- **Campo “Métier proposé”:**  
  - Tipo: Dropdown dependiente  
  - Lista de opciones que varía según la categoría seleccionada. Ejemplo para “Activité juridiques”:  
    - Assistant de service juridique  
    - Clerc de notaire  
    - Délégué à la protection des données  
    - Data protection officer  
    - Huissier de justice  
    - Juge  
    - Juriste  
    - Mandataire judiciaire à la protection des majeurs  
    - Notaire  
    - Responsable des affaires règlementaires  
    - Responsable de service contentieux et recouvrement

### 2.3. Sección “Renseignements sur mon projet d'embauche”  
- **Opciones:**  
  - Radio buttons o casillas para:  
    - “Un job étudiant”  
    - “Un emploi de travailleur handicapé”  
    - Opción “Je veux embaucher la perle rare !” (apunta a la búsqueda de un empleado destacado: se puede seleccionar adicionalmente entre empleado, travailleur handicapé, expert, formateur passionné, stagiaire, woofer).
- **Integración de Datos de Inscripción:**  
  - Implementar autollenado de campos mediante una API si se introduce un número SIRET.  
  - Mostrar mensaje explicativo: “Incrémentation des informations saisies à l'inscription.”

### 2.4. Elementos Multimedia y de Formato  
- **Campos para:**  
  - Subir Fotos (campo de tipo file con validación de cantidad y formato).  
  - Ingresar URL (campo de texto con validación de enlace).  
  - Campo de Texto Adicional (textarea) para comentarios o precisiones.  
- **Selección del Formato de Publicación:**  
  - Opciones visuales para elegir el formato de anuncio (por ejemplo, 1/4 página, 1/2 página, 1 página), con cálculo proporcional del costo y duración.

---

## 3. partenariat_professionnel.php  
**Objetivo:**  
Proponer y buscar soluciones de intercambio profesional y colaboraciones estratégicas.  
**Estructura y Campos:**

### 3.1. Sección de Propuestas de Colaboración  
- **Título o Encabezado:**  
  - “Je propose des solutions d'échanges professionnelles”  
  - Describir las opciones: “Une alliance”, “Une coopération”, “Un partenariat”, “Une recherche d'associé(s)”.
- **Búsqueda de Colaboración:**  
  - Texto adicional: “Je recherche un dirigeant de Filiale, un franchisé, un fournisseur, un prestataire, un sous-traitant.”

### 3.2. Integración de Datos y Multimedia  
- **Autollenado a partir de la inscripción (SIRET):**  
  - Implementar la misma funcionalidad de “Incrémentation des informations saisies à l'inscription”.
- **Campos para Elementos Multimedia:**  
  - Subida de Fotos  
  - Ingreso de Enlaces URL  
  - Área de Texto adicional para especificaciones.
- **Selección del Formato de Publicación:**  
  - Igual que en el formulario de recrutement, con opciones predeterminadas.

---

## 4. creation_activite.php  
**Objetivo:**  
Permitir al usuario presentar su iniciativa o proyecto de creación de actividad.  
**Estructura y Campos:**

### 4.1. Descripción del Proyecto  
- **Campo Principal:**  
  - Título o encabezado: “Je suis candidat à l'aventure ou je souhaite créer mon activité”.  
  - Textarea para la descripción extensa del proyecto.
  
### 4.2. Integración con Datos Existentes  
- **Autollenado:**  
  - Si el usuario posee información registrada (por ejemplo, SIRET), se autocompleta información relevante.
  
### 4.3. Campos Multimedia  
- **Subida de Imágenes:**  
  - Permitir adjuntar imágenes (fotos, diagramas).  
- **Enlaces URL y Texto Complementario:**  
  - Campo para ingresar enlaces y otro para comentarios adicionales.
  
### 4.4. Selección del Formato de Publicación  
- **Opciones de Formato:**  
  - Los mismos formatos que en los formularios anteriores (1/4, 1/2, 1 página) que determinan visibilidad y costo.

---

## 5. vente_activite.php  
**Objetivo:**  
Gestionar la venta o cesión de una actividad, licencia u otro activo empresarial.  
**Estructura y Campos:**

### 5.1. Datos Básicos de la Actividad  
- **Campos de Identificación:**  
  - “Locaux disponible à partir de”: Fecha o condición (campo de fecha con formato dd/mm/aa).  
  - “Raison sociale”: Campo de texto para nombre comercial.  
  - “Statut juridique”: Dropdown o radio con opciones predefinidas.
  - “Commune”: Campo de texto o dropdown con lista de comunidades.  
  - “N° adresse / Quartier”: Campo de texto para dirección.

### 5.2. Características del Inmueble o Actividad  
- **Campos de Descripción:**  
  - “Nature de l'activité”: Dropdown (por ejemplo, “Local vide, aménageable” y otras opciones).  
  - “Superficie”: Campo numérico, unidad m².  
  - “Etat général”: Opciones: “Neuf”, “Rénové”, “A rénover”.  
  - “Accessibilité”: Opciones tipo checkbox o radio (ej.: “Ascenseur commun”, “PMR”, “Plein pied”).

### 5.3. Detalles Operativos y Legales  
- **Campos Adicionales:**  
  - “Enseigne”: Campo de texto.  
  - Licencias y Autorizaciones: Múltiples checkboxes para “Cession de propriété intellectuelle”, “Marque”, “Brevet”, “Nom de domaine”.  
  - “Effectif”: Campos numéricos o selección para indicar empleados en CDI, CDD o intérim.
  
### 5.4. Modalidades de Transmisión  
- **Opciones (checkboxes o radio):**  
  - “Apport d'actifs”  
  - “Apport en société”  
  - “Cession à un fonds d'investissement ou un partenaire stratégique”  
  - “Cession de fonds de commerce”  
  - “Cession de licence”  
  - “Cession de titres”  
  - “Cession progressive”  
  - “Fusion - absorption”  
  - “Scission”

### 5.5. Datos Complementarios  
- **Campos Extra:**  
  - “Stationnements”: Número y condiciones (Possible/Public; campo numérico y dropdown).  
  - Notas legales en un bloque informativo (texto explicativo sobre obligaciones legales del vendedor).

---

## 6. bien_communal.php  
**Objetivo:**  
Gestionar la venta de bienes en régimen de “privé communal”.  
**Estructura y Campos:**

### 6.1. Identificación del Bien  
- **Campos Clave:**  
  - “Type de bien Libellé”: Campo de texto o dropdown para definir el tipo de bien (por ejemplo, “Bien déclassé”).  
  - “Evaluation du bien”: Dropdown con opciones “Selon France domaine (DDIE)” y “Autre”.

### 6.2. Datos Legales y Administrativos  
- **Información Obligatoria:**  
  - Texto descriptivo que explique la autorización de la comuna y la existencia de derechos de préemption.  
  - “Projet d'acte, clauses spécifiques ou informations à télécharger”: Área para adjuntar documentos o textos largos.
  
### 6.3. Condiciones Económicas  
- **Campos Financieros:**  
  - “Montant concédé”: Campo numérico (moneda).  
  - “Lien URL”: Campo de texto con validación de URL.  
  - Área de texto para notas adicionales.

---

## 7. location_logement.php  
**Objetivo:**  
Administrar el alquiler o subalquiler de viviendas, dirigido a “Direct bailleur”.  
**Estructura y Campos (Distribuidos en dos secciones o páginas, como en el mockup):**

### 7.1. Condiciones de Alquiler – Datos Generales  
- **Encabezado Inicial:**  
  - Texto fijo: “Je souhaite louer, sous-louer, un logement POUR 1 MOIS MINIMUM (Direct bailleur)”.
- **Campos de Alquiler:**  
  - “Loyer (Hors charges et frais)”: Campo numérico (monto mensual).  
  - Opción de “Logement vide” vs. “Logement habité à sous louer”: Radio buttons o dropdown.  
  - “Disponible à partir de”: Campo de fecha (validación dd/mm/aa).
  - Tipos de bail:  
    - Dropdown con opciones:  
      • “Bail d'habitation vide (3 ans renouvelable)”  
      • “Bail meublé (1 an renouvelable ou 9 mois pour étudiant)”  
      • “Bail mobilité (1 à 10 mois)”  
      • “Sous location”, “Colocation”.

### 7.2. Detalles Contractuales y Físicos  
- **Campos Específicos:**  
  - “Type de Bail / Contrat”: Dropdown con las opciones aplicables.  
  - “Charges”: Campo numérico (monto mensual).  
  - “Dépôt de garantie”: Campo numérico (en meses).  
  - “Superficie”: Campo numérico en m².  
  - “Etat général”: Radio buttons o dropdown con “Neuf”, “Rénové”, “A rénover”.  
  - “Stationnements”: Campo numérico y/o dropdown para especificar condiciones.  
  - “Accessibilité”: Opciones con checkbox/radio (ej.: “Ascenseur commun”, “PMR”, “Plein pied”, “Niveau étage”).
  
### 7.3. Localización y Costos Totales  
- **Campos de Ubicación:**  
  - “Commune”: Campo de texto o dropdown.  
  - “N° adresse / Quartier”: Campo de texto.
  - “Loyer (Charges comprises)”: Campo numérico para el total mensual con cargos.
  
### 7.4. Sección Informativa Legal  
- **Nota Explicativa:**  
  - Bloque de texto informativo sobre las obligaciones legales del bailleur: entregar un logement décent, el mantenimiento, reparaciones, etc.

---

## 8. location_commerce.php  
**Objetivo:**  
Gestionar el alquiler, subalquiler o compartición de comercios y oficinas.  
**Estructura y Campos:**

### 8.1. Condiciones Iniciales  
- **Encabezado Fijo:**  
  - Texto: “Je loue, sous-loue, partage mon commerce ou mon bureau. Une belle opportunité pour collaborer ensemble”.

### 8.2. Datos Económicos y Contractuales  
- **Campos de Alquiler:**  
  - “Loyer / Redevance (Hors charges et frais)”: Campo numérico.  
  - Periodicidad: Dropdown para seleccionar “Mensuel”, “Trimestriel” o “Annuel”.
  - Tipos de bail:  
    - Dropdown con opciones:  
      • “Bail commercial (classique) 3-6-9”  
      • “Bail précaire (ou dérogatoire)”  
      • “Bail professionnel”  
      • “Location-Gérance”  
      • “Sous-location commerciale”  
      • “Convention d'occupation précaire”
  - “Fixe”: Campo para valor fijo (si aplica).  
  - “Dépôt de garantie”: Campo numérico.

### 8.3. Características del Espacio  
- **Campos Descriptivos:**  
  - “Nature de l'activité”: Dropdown con opciones (por ejemplo, “Local vide, aménageable” o “Bureau”).  
  - “Superficie”: Campo numérico en m².  
  - “Etat général”: Selección de “Neuf”, “Rénové” o “A rénover”.  
  - “Stationnements” y “Accessibilité”: Igual que en el formulario de logement.
  
### 8.4. Información Complementaria  
- **Área para:**  
  - Describir “Informations concernant l'activité en cours” (textarea).

---

## 9. option_generique.php  
**Objetivo:**  
Formulario genérico para alquileres u opciones flexibles aplicables a distintos bienes o servicios.  
**Estructura y Campos:**

### 9.1. Modalidad y Periodicidad  
- **Campos Iniciales:**  
  - Selección del período de facturación: Radio buttons o dropdown para “Journalier”, “Semaine” o “Mois”.

### 9.2. Tipo de Contrato  
- **Campo “Type de contrat”:**  
  - Dropdown con opciones:  
    • “Location simple (courte durée)”  
    • “Location longue durée (LLD)”  
    • “Location avec option d'achat (LOA)”  
    • “Crédit-Bail”

### 9.3. Detalles Adicionales  
- **Campos Complementarios:**  
  - “Durée de location”: Campo numérico o de texto para especificar la duración.  
  - “Matériel de production”: Campo opcional (textarea o dropdown, según se requiera).
  - “Tarif”: Campo numérico para definir el costo.  
  - “Type Modèle”: Dropdown para seleccionar entre “Journalier”, “Hebdomadaire” y “Mensuel”.  
  - “Etat général”: Dropdown o radio para elegir entre diferentes estados.  
  - “Livraison”: Opción tipo checkbox o radio (OUI/NON) con validación adicional si es “OUI” (mostrar condiciones).

---

## 10. location_equipement.php  
**Objetivo:**  
Gestionar el alquiler de equipos, herramientas o máquinas.  
**Estructura y Campos:**

### 10.1. Encabezado y Descripción Principal  
- **Encabezado:**  
  - Texto fijo: “Je mets en location un outil, une machine”.
  
### 10.2. Secciones Tipo “Feuilles et vues”  
- **Implementación en Múltiples Vistas/Pestañas:**  
  - Cada vista debe permitir la inclusión de:  
    - Un bloque titulado “Objet” en el que se detalle la descripción del equipo.
    - Campos para subir imágenes o adjuntar documentos (integrar, por ejemplo, un widget OLE o similar).
    - Campos de texto para especificar características, condiciones, estado y otros datos relevantes.
  - Permitir la adición de múltiples “vues” para cubrir todas las secciones necesarias según el mockup.

### 10.3. Campos Adicionales  
- **Posibles Campos:**  
  - Agrupar la información en bloques (secciones) que se puedan navegar mediante pestañas o menús internos.  
  - Cada bloque debe contar con validación propia y guardar la información de forma independiente.

---

# Instrucciones Generales para Todos los Formularios

1. **Validación y Formato de Datos:**  
   - Cada campo debe incluir validaciones específicas:  
     • Fechas en formato dd/mm/aa.  
     • Campos numéricos para “Superficie”, “Loyer”, “Montant”, etc.  
     • Validación de enlaces (URL) y formatos de imagen para campos de subida de archivos.
   - Implementar mensajes de error claros en caso de datos mal ingresados.

2. **Autollenado mediante API:**  
   - Para aquellos formularios que requieran “Incrémentation des informations saisies à l'inscription”, integrar una llamada API que, al ingresar el número SIRET, complete automáticamente campos relacionados (por ejemplo, razón social, estatuto jurídico, etc.).

3. **Diseño de la Interfaz y Usabilidad:**  
   - Emplear menús desplegables, botones de radio y checkboxes según se describa en cada sección.  
   - Los campos de texto deben contar con placeholders descriptivos y, cuando se requiera, instrucciones adicionales (tooltip o ayuda contextual).

4. **Selección del Formato de Publicación y Cálculo de Costos:**  
   - Para los formularios que incluyen selección de formato (recrutement.php, creation_activite.php, etc.), se debe permitir la elección entre 1/4 de página, 1/2 de página y 1 página completa.  
   - Implementar la lógica de cálculo proporcional: por ejemplo, si se opta por 1/2 página con contacto en 3 días, cobrar 10 euros para 1 mes, descontando proporcionalmente si el anuncio se retira antes.

5. **Elementos Multimedia:**  
   - Cada formulario que admite imágenes debe contar con un mecanismo seguro para la subida, validación y visualización previa de dichos archivos.  
   - Los campos de URL deben aceptar únicamente formatos válidos y ofrecer retroalimentación en caso de error.

6. **Información Legal y Ayuda:**  
   - Incluir bloques de texto informativos en los formularios de alquiler (logement, commerce) para explicar las obligaciones legales del arrendador.  
   - Se deberá añadir un enlace o sección de “Aide” / “FAQ” para que el usuario acceda a mayor información (por ejemplo, blog/lexique).

7. **Compatibilidad y Consistencia:**  
   - Garantizar que todos los formularios compartan la misma lógica de autollenado e integración de datos de inscripción.  
   - Mantener consistencia en el diseño visual y en la estructura de datos a través de todos los formularios.

---
