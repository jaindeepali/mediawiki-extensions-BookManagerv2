<?php
/**
 * i18n message definitions for the BookManagerv2 extension.
 *
 * @file
 * @ingroup Extensions
 * @author Molly White
 */

$messages = array();

/** English
 * @author mollywhite
 */
$messages['en'] = array(
	'bookmanagerv2-desc' => 'Adds functionality to enter and store book metadata and structure',
	'bookmanagerv2-invalid-json' => 'Invalid JSON',
	'bookmanagerv2-example-nav' => 'The navigation bar on this page is appearing because <code>$wgBookManagerv2ExampleNavigation</code> is set to <code>true</code> in <code>LocalSettings.php</code>.',
	'bookmanagerv2-metadata' => 'Metadata of work',
	'bookmanagerv2-metadata-header' => 'Metadata',
	'bookmanagerv2-contents' => 'Contents of work',
	'bookmanagerv2-contents-header' => 'Contents',
	'bookmanagerv2-title' => 'Title: $1',
	'bookmanagerv2-alternate-titles' => 'Alternate {{PLURAL:$1|title|titles}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Author|Authors}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Translator|Translators}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Editor|Editors}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Illustrator|Illustrators}}: $2',
	'bookmanagerv2-subtitle' => 'Subtitle: $1',
	'bookmanagerv2-series-title' => 'Series title: $1',
	'bookmanagerv2-volume' => 'Volume: $1',
	'bookmanagerv2-edition' => 'Edition: $1',
	'bookmanagerv2-publisher' => 'Publisher: $1',
	'bookmanagerv2-printer' => 'Printer: $1',
	'bookmanagerv2-publication-date' => 'Publication date: $1',
	'bookmanagerv2-publication-city' => 'Publication city: $1',
	'bookmanagerv2-language' => 'Language: $1',
	'bookmanagerv2-description' => 'Description: $1',
	'bookmanagerv2-source' => 'Source: $1',
	'bookmanagerv2-permission' => 'Permission: $1',
	'bookmanagerv2-other-versions' => 'Other {{PLURAL:$1|version|versions}}: $2',
	'bookmanagerv2-isbn' => 'ISBN: $1',
	'bookmanagerv2-lccn' => 'LCCN: $1',
	'bookmanagerv2-oclc' => 'OCLC: $1',
	'bookmanagerv2-read-json-block' => 'View the metadata and chapter list for this work',
	'bookmanagerv2-edit-json-block' => 'Edit the metadata and chapter list for this work',
	'bookmanagerv2-next-title' => 'Next section: $1',
	'bookmanagerv2-prev-title' => 'Previous section: $2',
	'bookmanagerv2-metadata-heading' => 'Metadata',
	'bookmanagerv2-sections-heading' => 'Sections',
	'bookmanagerv2-move-alt' => 'Move this section',
	'bookmanagerv2-remove-alt' => 'Remove this section',
	'bookmanagerv2-rename' => 'rename',
	'bookmanagerv2-create' => 'create',
	'bookmanagerv2-done' => 'Done',
	'bookmanagerv2-add' => 'add',
	'bookmanagerv2-read' => 'read',
	'bookmanagerv2-section-name' => 'Section name:',
	'bookmanagerv2-section-link' => 'Section link:',
	'bookmanagerv2-title-field' => 'Title',
	'bookmanagerv2-alternate-titles-field' => 'Alternate titles',
	'bookmanagerv2-authors-field' => 'Authors',
	'bookmanagerv2-translators-field' => 'Translators',
	'bookmanagerv2-editors-field' => 'Editors',
	'bookmanagerv2-illustrators-field' => 'Illustrators',
	'bookmanagerv2-subtitle-field' => 'Subtitle',
	'bookmanagerv2-series-title-field' => 'Series title',
	'bookmanagerv2-volume-field' => 'Volume',
	'bookmanagerv2-edition-field' => 'Edition',
	'bookmanagerv2-publisher-field' => 'Publisher',
	'bookmanagerv2-printer-field' => 'Printer',
	'bookmanagerv2-publication-year-field' => 'Publication year',
	'bookmanagerv2-publication-month-field' => 'Publication month',
	'bookmanagerv2-publication-day-field' => 'Publication day',
	'bookmanagerv2-publication-city-field' => 'Publication city',
	'bookmanagerv2-language-field' => 'Language',
	'bookmanagerv2-description-field' => 'Description',
	'bookmanagerv2-source-field' => 'Source',
	'bookmanagerv2-permission-field' => 'Permission',
	'bookmanagerv2-other-versions-field' => 'Other versions',
	'bookmanagerv2-isbn-field' => 'ISBN',
	'bookmanagerv2-lccn-field' => 'LCCN',
	'bookmanagerv2-oclc-field' => 'OCLC',
	'bookmanagerv2-sections-field' => 'Sections',
	'bookmanagerv2-add-section-title' => 'Add a new section to this work',
	'bookmanagerv2-edit-title' => 'Edit this section',
	'bookmanagerv2-create-title' => 'Create this section',
	'bookmanagerv2-rename-title' => 'Rename this section',
);

/** Message documentation (Message documentation)
 * @author Raymond
 * @author Shirayuki
 * @author mollywhite
 */
$messages['qqq'] = array(
	'bookmanagerv2-desc' => '{{desc|name=Book Manager v2|url=http://www.mediawiki.org/wiki/Extension:BookManagerv2}}',
	'bookmanagerv2-invalid-json' => 'Error message shown when an editor tries to save an invalid JSON block.
	{{Identical|Invalid JSON}}',
	'bookmanagerv2-example-nav' => 'Message shown in the subtitle to explain why example navigation bars are appearing. The navigation bars appear on every page when <code>$wgBookManagerv2ExampleNavigation</code> is set to <code>true</code>; if it\'s disabled in <code>LocalSettings.php</code>, they will disappear.',
	'bookmanagerv2-metadata' => "Alternate text for the navigation bar's metadata icon.",
	'bookmanagerv2-metadata-header' => 'Name of the section header for the section holding the metadata. This is shown when viewing the JSON block.
{{Identical|Metadata}}',
	'bookmanagerv2-contents' => "Alternate text for the navigation bar's table of contents icon.",
	'bookmanagerv2-contents-header' => 'Name of the section header for the section holding the table of contents. This is shown when viewing the JSON block.
{{Identical|Content}}',
	'bookmanagerv2-title' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.

Parameters:
* $1 - title
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Title}}',
	'bookmanagerv2-alternate-titles' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]

Parameters:
* $1 - the length of the array of titles',
	'bookmanagerv2-authors' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]

Parameters:
* $1 - the length of the array of authors
{{Identical|Author}}',
	'bookmanagerv2-translators' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]

Parameters:
* $1 - the length of the array of translators
{{Identical|Translator}}',
	'bookmanagerv2-editors' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown. $1 is the length of the array of editors.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Editor}}',
	'bookmanagerv2-illustrators' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]

Parameters:
* $1 - the length of the array of illustrators
{{Identical|Illustrator}}',
	'bookmanagerv2-subtitle' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Subtitle}}',
	'bookmanagerv2-series-title' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Series title}}',
	'bookmanagerv2-volume' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Volume}}',
	'bookmanagerv2-edition' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Edition}}',
	'bookmanagerv2-publisher' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Publisher}}',
	'bookmanagerv2-printer' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Printer}}',
	'bookmanagerv2-publication-date' => 'Label in the navigation bar metadata dropdown.

The value following may be just a year, a month and a year, or a year, month, and day.

See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Publication date}}',
	'bookmanagerv2-publication-city' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]

Parameters:
* $1 - ...
{{Identical|Publication city}}',
	'bookmanagerv2-language' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Language}}',
	'bookmanagerv2-description' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Description}}',
	'bookmanagerv2-source' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Source}}',
	'bookmanagerv2-permission' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|Permission}}',
	'bookmanagerv2-other-versions' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]

Parameters:
* $1 - number of versions
* $2 - ...
{{Identical|Other version}}',
	'bookmanagerv2-isbn' => 'Label for the International Standard Book Number, in the navigation bar metadata dropdown. [http://en.wikipedia.org/wiki/ISBN ISBN]. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|ISBN}}',
	'bookmanagerv2-lccn' => 'Label for the Library of Congress Control Number, in the navigation bar metadata dropdown. [http://en.wikipedia.org/wiki/LCCN LCCN]. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]',
	'bookmanagerv2-oclc' => 'Label for the Online Computer Library Center, in the navigation bar metadata dropdown. [http://en.wikipedia.org/wiki/OCLC OCLC].

See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]',
	'bookmanagerv2-next-title' => 'Title text for the link to the next section in the work.

Parameters:
*$1 - Title of the next page in the section',
	'bookmanagerv2-prev-title' => 'Title text for the link to the previous section in the work.

Parameters:
*$1 - Title of the previous page in the section',
	'bookmanagerv2-read-json-block' => 'Title for a link to explain that clicking the \'read\' button will allow them to view the metadata and chapter list for this work',
	'bookmanagerv2-edit-json-block' => 'Title for a link to explain that clicking the \'edit\' button will allow them to edit the metadata and chapter list for this work',
	'bookmanagerv2-metadata-heading' => 'Heading for the collapsible section of the JSON editor that holds the metadata (everything but the sections information).
{{Identical|Metadata}}',
	'bookmanagerv2-sections-heading' => 'Heading for the collapsible section of the JSON editor that holds information on the sections of the book.
{{Identical|Section}}',
	'bookmanagerv2-move-alt' => 'Alternate text for the move icon in the JSON editor section blocks. Instructs the user that dragging the section block will reorder the sections.',
	'bookmanagerv2-remove-alt' => 'Alternate text for the remove (x) icon in the JSON editor section blocks. Instructs the user that clicking this will remove the section from the work.',
	'bookmanagerv2-rename' => 'Link text to change the name of a section as it appears in the section list.
{{Identical|Rename}}',
	'bookmanagerv2-create' => 'Link text to create a nonexistent section page.
{{Identical|Create}}',
	'bookmanagerv2-done' => "Text to display on the button that the user clicks when they're finished naming or renaming a section.
{{Identical|Done}}",
	'bookmanagerv2-add' => 'Text to display in a link to add a new section or a new entry in a metadata field that accepts multiple values.
{{Identical|Add}}',
	'bookmanagerv2-read' => 'Text for a link to view the metadata page.
{{Identical|Read}}',
	'bookmanagerv2-section-name' => '{{Identical|Section name}}',
	'bookmanagerv2-title-field' => 'JSON editor input field label.
{{Identical|Title}}',
	'bookmanagerv2-alternate-titles-field' => 'JSON editor input field',
	'bookmanagerv2-authors-field' => 'JSON editor input field label.
{{Identical|Author}}',
	'bookmanagerv2-translators-field' => 'JSON editor input field label.
{{Identical|Translator}}',
	'bookmanagerv2-editors-field' => 'JSON editor input field label.
{{Identical|Editor}}',
	'bookmanagerv2-illustrators-field' => 'JSON editor input field label.
{{Identical|Illustrator}}',
	'bookmanagerv2-subtitle-field' => 'JSON editor input field label.
{{Identical|Subtitle}}',
	'bookmanagerv2-series-title-field' => 'JSON editor input field label.
{{Identical|Series title}}',
	'bookmanagerv2-volume-field' => 'JSON editor input field label.
{{Identical|Volume}}',
	'bookmanagerv2-edition-field' => 'JSON editor input field label.
{{Identical|Edition}}',
	'bookmanagerv2-publisher-field' => 'JSON editor input field label.
{{Identical|Publisher}}',
	'bookmanagerv2-printer-field' => 'JSON editor input field label.
{{Identical|Printer}}',
	'bookmanagerv2-publication-year-field' => 'JSON editor input field label',
	'bookmanagerv2-publication-month-field' => 'JSON editor input field label',
	'bookmanagerv2-publication-day-field' => 'JSON editor input field label',
	'bookmanagerv2-publication-city-field' => 'JSON editor input field label.
{{Identical|Publication city}}',
	'bookmanagerv2-language-field' => 'JSON editor input field label.
{{Identical|Language}}',
	'bookmanagerv2-description-field' => 'JSON editor input field label.
{{Identical|Description}}',
	'bookmanagerv2-source-field' => 'JSON editor input field label.
{{Identical|Source}}',
	'bookmanagerv2-permission-field' => 'JSON editor input field label.
{{Identical|Permission}}',
	'bookmanagerv2-other-versions-field' => 'JSON editor input field label.
{{Identical|Other version}}',
	'bookmanagerv2-isbn-field' => 'JSON editor input field label. ISBN is the International Standard Book Number ([http://en.wikipedia.org/wiki/ISBN ISBN])',
	'bookmanagerv2-lccn-field' => 'JSON editor input field label. LCCN is the Library of Congress Control Number ([http://en.wikipedia.org/wiki/LCCN LCCN])',
	'bookmanagerv2-oclc-field' => 'JSON editor input field label. OCLC is the Online Computer Library Center ([http://en.wikipedia.org/wiki/OCLC OCLC])',
	'bookmanagerv2-sections-field' => 'JSON editor input field label.
{{Identical|Section}}',
	'bookmanagerv2-add-section-title' => 'Title for the "add" link that allows a user to add a new section to the current work',
	'bookmanagerv2-edit-title' => 'Title for the "edit" link that appears on each section in the JSON editor that already has a page on the wiki. This explains that clicking "edit" will take them to the edit page for that section.',
	'bookmanagerv2-create-title' => 'Title for the "create" link that appears on sections in the JSON editor that don\'t already have pages. It explains that clicking "create" will take them to create that section.',
	'bookmanagerv2-rename-title' => 'Title for the "rename" link that appears on each section in the JSON editor. This explains that clicking "rename" will allow them to rename the section.',
);

/** Akan (Akan)
 * @author Riches4christ
 */
$messages['ak'] = array(
	'bookmanagerv2-remove-alt' => 'yi ha firi mu',
	'bookmanagerv2-done' => 'awie',
	'bookmanagerv2-add' => 'fa bi ka ho',
	'bookmanagerv2-read' => 'kan',
	'bookmanagerv2-language-field' => 'kasa',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'bookmanagerv2-desc' => "Amiesta la función d'inxertar y guardar los metadatos y la estructura de llibros",
	'bookmanagerv2-invalid-json' => 'JSON inválidu',
	'bookmanagerv2-example-nav' => 'La barra de navegación d\'esta páxina apaez porque <code>$wgBookManagerv2ExampleNavigation</code> ta definíu como "<code>true</code>" en <code>LocalSettings.php</code>.',
	'bookmanagerv2-metadata' => 'Metadatos de la obra',
	'bookmanagerv2-metadata-header' => 'Metadatos',
	'bookmanagerv2-contents' => 'Conteníu de la obra',
	'bookmanagerv2-contents-header' => 'Conteníu',
	'bookmanagerv2-title' => 'Títulu: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Títulu alternativu|Títulos alternativos}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autor|Autores}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Traductor|Traductores}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Editor|Editores}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Ilustrador|Ilustradores}}: $2',
	'bookmanagerv2-subtitle' => 'Subtítulu: $1',
	'bookmanagerv2-series-title' => 'Títulu de la serie: $1',
	'bookmanagerv2-volume' => 'Volume: $1',
	'bookmanagerv2-edition' => 'Edición: $1',
	'bookmanagerv2-publisher' => 'Editorial: $1',
	'bookmanagerv2-printer' => 'Impresor: $1',
	'bookmanagerv2-publication-date' => 'Data de publicación: $1',
	'bookmanagerv2-publication-city' => 'Ciudá de publicación: $1',
	'bookmanagerv2-language' => 'Llingua: $1',
	'bookmanagerv2-description' => 'Descripción: $1',
	'bookmanagerv2-source' => 'Fonte: $1',
	'bookmanagerv2-permission' => 'Permisu: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Otra versión|Otres versiones}}: $2',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 * @author Bellayet
 */
$messages['bn'] = array(
	'bookmanagerv2-metadata' => 'কর্মের মেটাডাটা',
	'bookmanagerv2-contents' => 'কর্মের বিষয়বস্তু',
	'bookmanagerv2-title' => 'শিরোনাম: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|বিকল্প শিরোনাম|বিকল্প শিরোনামগুলি}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|লেখক|লেখকবৃন্দ}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|অনুবাদক|অনুবাদকবৃন্দ}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|সম্পাদক|সম্পাদকবৃন্দ}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|অলঙ্কারিক|অলঙ্কারিকবৃন্দ}}: $2',
	'bookmanagerv2-subtitle' => 'উপশিরোনাম: $1',
	'bookmanagerv2-series-title' => 'ধারাবাহিক শিরোনাম: $1',
	'bookmanagerv2-volume' => 'ভলিউম: $1',
	'bookmanagerv2-edition' => 'সংস্করণ: $1',
	'bookmanagerv2-publisher' => 'প্রকাশক: $1',
	'bookmanagerv2-printer' => 'মুদ্রক: $1',
	'bookmanagerv2-publication-date' => 'প্রকাশনার তারিখ: $1',
	'bookmanagerv2-publication-city' => 'প্রকাশের শহর: $1',
	'bookmanagerv2-language' => 'ভাষা: $1',
	'bookmanagerv2-description' => 'বিবরণ: $1',
	'bookmanagerv2-source' => 'উত্স: $1',
	'bookmanagerv2-permission' => 'অনুমতি: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|অন্যান্য সংস্করণ}}: $2',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'bookmanagerv2-title' => 'Titl : $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Titl|Titloù}} all : $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Skrivagner|Skrivagnerien}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Troer|Troerien}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Embanner|Embannerien}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Treser|Treserien}}: $2',
	'bookmanagerv2-subtitle' => 'Istitloù : $1',
	'bookmanagerv2-publisher' => 'Embanner : $1',
	'bookmanagerv2-printer' => 'Mouller : $1',
	'bookmanagerv2-publication-date' => 'Deiziad embann : $1',
	'bookmanagerv2-publication-city' => "Lec'h embann : $1",
	'bookmanagerv2-language' => 'Yezh : $1',
	'bookmanagerv2-description' => 'Deskrivadur : $1',
	'bookmanagerv2-source' => 'Mammenn : $1',
	'bookmanagerv2-permission' => 'Aotre : $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Stumm|Stummoù}} all : $2',
);

/** Church Slavic (словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'bookmanagerv2-authors' => '{{PLURAL:$1|творьць|творьца|творьци}} : $2',
	'bookmanagerv2-language' => 'ѩꙁꙑкъ : $1',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'bookmanagerv2-desc' => 'Ergänzt die Funktionalität zur Eingabe und Speicherung von Buch-Metadaten und -Strukturen',
	'bookmanagerv2-invalid-json' => 'Ungültiges JSON',
	'bookmanagerv2-example-nav' => 'Die Navigationsleiste erscheint auf dieser Seite, da <code>$wgBookManagerv2ExampleNavigation</code> in <code>LocalSettings.php</code> auf „wahr“ gesetzt ist.',
	'bookmanagerv2-metadata' => 'Metadaten des Werks',
	'bookmanagerv2-metadata-header' => 'Metadaten',
	'bookmanagerv2-contents' => 'Inhalte des Werks',
	'bookmanagerv2-contents-header' => 'Inhalte',
	'bookmanagerv2-title' => 'Titel: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Alternativer|Alternative}} Titel: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autor|Autoren}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Übersetzer}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Redakteur|Redakteure}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Illustrator|Illustratoren}}: $2',
	'bookmanagerv2-subtitle' => 'Untertitel: $1',
	'bookmanagerv2-series-title' => 'Serientitel: $1',
	'bookmanagerv2-volume' => 'Auflage: $1',
	'bookmanagerv2-edition' => 'Ausgabe: $1',
	'bookmanagerv2-publisher' => 'Herausgeber: $1',
	'bookmanagerv2-printer' => 'Druck: $1',
	'bookmanagerv2-publication-date' => 'Veröffentlichungsdatum: $1',
	'bookmanagerv2-publication-city' => 'Veröffentlichungsort: $1',
	'bookmanagerv2-language' => 'Sprache: $1',
	'bookmanagerv2-description' => 'Beschreibung: $1',
	'bookmanagerv2-source' => 'Quelle: $1',
	'bookmanagerv2-permission' => 'Genehmigung: $1',
	'bookmanagerv2-other-versions' => 'Andere {{PLURAL:$1|Version|Versionen}}: $2',
	'bookmanagerv2-metadata-heading' => 'Metadaten',
	'bookmanagerv2-sections-heading' => 'Abschnitte',
	'bookmanagerv2-move-alt' => 'Diesen Abschnitt verschieben',
	'bookmanagerv2-remove-alt' => 'Diesen Abschnitt entfernen',
	'bookmanagerv2-rename' => 'umbenennen',
	'bookmanagerv2-create' => 'erstellen',
	'bookmanagerv2-done' => 'Fertig',
	'bookmanagerv2-add' => 'hinzufügen',
	'bookmanagerv2-read' => 'lesen',
	'bookmanagerv2-section-name' => 'Abschnittsname:',
	'bookmanagerv2-section-link' => 'Abschnittslink:',
	'bookmanagerv2-title-field' => 'Titel',
	'bookmanagerv2-alternate-titles-field' => 'Alternative Titel',
	'bookmanagerv2-authors-field' => 'Autoren',
	'bookmanagerv2-translators-field' => 'Übersetzer',
	'bookmanagerv2-editors-field' => 'Redakteure',
	'bookmanagerv2-illustrators-field' => 'Illustratoren',
	'bookmanagerv2-subtitle-field' => 'Untertitel',
	'bookmanagerv2-series-title-field' => 'Serientitel',
	'bookmanagerv2-volume-field' => 'Auflage',
	'bookmanagerv2-edition-field' => 'Ausgabe',
	'bookmanagerv2-publisher-field' => 'Herausgeber',
	'bookmanagerv2-printer-field' => 'Druck',
	'bookmanagerv2-publication-year-field' => 'Veröffentlichungsjahr',
	'bookmanagerv2-publication-month-field' => 'Veröffentlichungsmonat',
	'bookmanagerv2-publication-day-field' => 'Veröffentlichungstag',
	'bookmanagerv2-publication-city-field' => 'Veröffentlichungsort',
	'bookmanagerv2-language-field' => 'Sprache',
	'bookmanagerv2-description-field' => 'Beschreibung',
	'bookmanagerv2-source-field' => 'Quelle',
	'bookmanagerv2-permission-field' => 'Genehmigung',
	'bookmanagerv2-other-versions-field' => 'Andere Versionen',
	'bookmanagerv2-sections-field' => 'Abschnitte',
);

/** Greek (Ελληνικά)
 * @author Tifa93
 */
$messages['el'] = array(
	'bookmanagerv2-contents-header' => 'Περιεχόμενα',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Larjona
 * @author Luis Felipe Schenone
 * @author Miguel2706
 */
$messages['es'] = array(
	'bookmanagerv2-desc' => 'Agrega funcionalidad para ingresar y guardar metainformación sobre libros',
	'bookmanagerv2-invalid-json' => 'JSON inválido',
	'bookmanagerv2-example-nav' => 'La barra de navegación en esta página se muestra porque <code>$wgBookManagerv2ExampleNavigation</code> se establece en verdadero en <code>LocalSettings.php</code>.',
	'bookmanagerv2-contents' => 'Contenido del trabajo',
	'bookmanagerv2-title' => 'Título: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Título alternativo|Títulos alternativos}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autor|Autores}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Traductor|Traductores}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Editor|Editores}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Illustrador|Illustradores}}: $2',
	'bookmanagerv2-subtitle' => 'Subtítulo: $1',
	'bookmanagerv2-series-title' => 'Título de la serie: $1',
	'bookmanagerv2-volume' => 'Volumen: $1',
	'bookmanagerv2-edition' => 'Edición: $1',
	'bookmanagerv2-publisher' => 'Publicado por: $1',
	'bookmanagerv2-printer' => 'Impreso por: $1',
	'bookmanagerv2-publication-date' => 'Fecha de publicación: $1',
	'bookmanagerv2-publication-city' => 'Ciudad de publicación: $1',
	'bookmanagerv2-language' => 'Idioma: $1',
	'bookmanagerv2-description' => 'Descripción: $1',
	'bookmanagerv2-source' => 'Fuente: $1',
	'bookmanagerv2-permission' => 'Permiso: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Otra versión|Otras versiones}}: $2',
);

/** Persian (فارسی)
 * @author Alireza
 * @author Mahdiz
 * @author Taha
 */
$messages['fa'] = array(
	'bookmanagerv2-invalid-json' => 'JSON نامعتبر',
	'bookmanagerv2-title' => 'عنوان: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|دیگرعنوان|دیگر عناوین}}:$2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|نویسنده|نویسنده ها}}:$2',
	'bookmanagerv2-translators' => '{{PLURAL:$2|مترجم|مترجمان}}: $1',
	'bookmanagerv2-editors' => '{{PLURAL:$1|ویرایش کننده|ویرایش کنندگان}}:$2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|تصویرگر|تصویرگران}}:$2',
	'bookmanagerv2-subtitle' => 'زیرعنوان: $1',
	'bookmanagerv2-series-title' => 'عنوان مجموعه:$1',
	'bookmanagerv2-volume' => 'جلد: $1',
	'bookmanagerv2-edition' => 'در حال ویرایش $1',
	'bookmanagerv2-publisher' => 'ناشر: $1',
	'bookmanagerv2-printer' => 'چاپگر: $1',
	'bookmanagerv2-publication-date' => 'تاریخ انتشار: $1',
	'bookmanagerv2-publication-city' => 'شهر محل چاپ: $1',
	'bookmanagerv2-language' => 'زبان: $1',
	'bookmanagerv2-description' => 'توضیحات: $1',
	'bookmanagerv2-source' => 'منبع: $1',
	'bookmanagerv2-permission' => 'مجوز: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|نسخه دیگر|نسخه های دیگر}}: $2',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'bookmanagerv2-desc' => 'Leggur afturat funksjónir fyri at geva og goyma metadáta og struktur fyri bøkur',
	'bookmanagerv2-invalid-json' => 'Ógyldugt JSON',
	'bookmanagerv2-example-nav' => 'Navigasjónsteigurin á hesi síðu kemur til sjóndar, tí <code>$wgBookManagerv2ExampleNavigation</code> er sett til <code>true</code> í <code>LocalSettings.php</code>.',
	'bookmanagerv2-metadata' => 'Metadáta av arbeiði',
	'bookmanagerv2-metadata-header' => 'Metadáta',
	'bookmanagerv2-contents-header' => 'Innihaldsyvirlit',
	'bookmanagerv2-title' => 'Heitið: $1',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Rithøvundur|Rithøvundar}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Týðari|Týðarar}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Redaktørur|Redaktørar}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Teknari|Teknarar}}: $2',
	'bookmanagerv2-subtitle' => 'Undirheitið: $1',
	'bookmanagerv2-publisher' => 'Útgevari: $1',
	'bookmanagerv2-printer' => 'Prentað: $1',
	'bookmanagerv2-publication-date' => 'Útgávudagur: $1',
	'bookmanagerv2-publication-city' => 'Útgávubýur: $1',
	'bookmanagerv2-language' => 'Mál: $1',
	'bookmanagerv2-description' => 'Frágreiðing: $1',
	'bookmanagerv2-source' => 'Kelda: $1',
	'bookmanagerv2-permission' => 'Loyvið: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Onnur versjón|Aðrar versjónir}}: $2',
);

/** French (français)
 * @author Gomoko
 * @author Wyz
 */
$messages['fr'] = array(
	'bookmanagerv2-desc' => 'Ajoute une fonctionnalité pour saisir et stocker les métadonnées et la structure d’un livre',
	'bookmanagerv2-invalid-json' => 'JSON non valide',
	'bookmanagerv2-example-nav' => 'La barre de navigation apparaît sur cette page parce que <code>$wgBookManagerv2ExampleNavigation</code> est à vrai dans <code>LocalSettings.php</code>.',
	'bookmanagerv2-metadata' => 'Méta-données de travail',
	'bookmanagerv2-metadata-header' => 'Métadonnées',
	'bookmanagerv2-contents' => 'Contenu du travail',
	'bookmanagerv2-contents-header' => 'Table de matières',
	'bookmanagerv2-title' => 'Titre : $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Titre alternatif|Titres alternatifs}} : $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Auteur|Auteurs}} : $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Traducteur|Traducteurs}} : $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Éditeur|Éditeurs}} : $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Illustrateur|Illustrateurs}} : $2',
	'bookmanagerv2-subtitle' => 'Sous-titre : $1',
	'bookmanagerv2-series-title' => 'Titre de la série : $1',
	'bookmanagerv2-volume' => 'Volume : $1',
	'bookmanagerv2-edition' => 'Édition : $1',
	'bookmanagerv2-publisher' => 'Éditeur : $1',
	'bookmanagerv2-printer' => 'Imprimeur : $1',
	'bookmanagerv2-publication-date' => 'Date de publication : $1',
	'bookmanagerv2-publication-city' => 'Lieu de publication : $1',
	'bookmanagerv2-language' => 'Langue : $1',
	'bookmanagerv2-description' => 'Description : $1',
	'bookmanagerv2-source' => 'Source : $1',
	'bookmanagerv2-permission' => 'Autorisation : $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Autre version|Autres versions}} : $2',
	'bookmanagerv2-metadata-heading' => 'Métadonnées',
	'bookmanagerv2-sections-heading' => 'Sections',
	'bookmanagerv2-move-alt' => 'Déplacer cette section',
	'bookmanagerv2-remove-alt' => 'Supprimer cette section',
	'bookmanagerv2-rename' => 'renommer',
	'bookmanagerv2-create' => 'créer',
	'bookmanagerv2-done' => 'Terminé',
	'bookmanagerv2-add' => 'ajouter',
	'bookmanagerv2-read' => 'lire',
	'bookmanagerv2-section-name' => 'Nom de la section :',
	'bookmanagerv2-section-link' => 'Lien de la section :',
	'bookmanagerv2-title-field' => 'Titre',
	'bookmanagerv2-alternate-titles-field' => 'Autres titres',
	'bookmanagerv2-authors-field' => 'Auteurs',
	'bookmanagerv2-translators-field' => 'Traducteurs',
	'bookmanagerv2-editors-field' => 'Contributeurs',
	'bookmanagerv2-illustrators-field' => 'Illustrateurs',
	'bookmanagerv2-subtitle-field' => 'Sous-titre',
	'bookmanagerv2-series-title-field' => 'Titre de la série',
	'bookmanagerv2-volume-field' => 'Volume',
	'bookmanagerv2-edition-field' => 'Édition',
	'bookmanagerv2-publisher-field' => 'Éditeur',
	'bookmanagerv2-printer-field' => 'Imprimeur',
	'bookmanagerv2-publication-year-field' => 'Année de publication',
	'bookmanagerv2-publication-month-field' => 'Mois de publication',
	'bookmanagerv2-publication-day-field' => 'Jour de publication',
	'bookmanagerv2-publication-city-field' => 'Ville de publication',
	'bookmanagerv2-language-field' => 'Langue',
	'bookmanagerv2-description-field' => 'Description',
	'bookmanagerv2-source-field' => 'Source',
	'bookmanagerv2-permission-field' => 'Autorisation',
	'bookmanagerv2-other-versions-field' => 'Autres versions',
	'bookmanagerv2-sections-field' => 'Sections',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'bookmanagerv2-desc' => 'Engade unha funcionalidade para inserir e almacenar os metadatos e a estrutura dun libro',
	'bookmanagerv2-invalid-json' => 'JSON non válido',
	'bookmanagerv2-example-nav' => 'A barra de navegación desta páxina aparece porque <code>$wgBookManagerv2ExampleNavigation</code> está definido como "<code>true</code>" en <code>LocalSettings.php</code>.',
	'bookmanagerv2-metadata' => 'Metadatos da obra',
	'bookmanagerv2-contents' => 'Contidos da obra',
	'bookmanagerv2-title' => 'Título: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Título alternativo|Títulos alternativos}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autor|Autores}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Tradutor|Tradutores}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Editor|Editores}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Ilustrador|Ilustradores}}: $2',
	'bookmanagerv2-subtitle' => 'Subtítulo: $1',
	'bookmanagerv2-series-title' => 'Título da serie: $1',
	'bookmanagerv2-volume' => 'Volume: $1',
	'bookmanagerv2-edition' => 'Edición: $1',
	'bookmanagerv2-publisher' => 'Editorial: $1',
	'bookmanagerv2-printer' => 'Impresor: $1',
	'bookmanagerv2-publication-date' => 'Data de publicación: $1',
	'bookmanagerv2-publication-city' => 'Cidade de publicación: $1',
	'bookmanagerv2-language' => 'Lingua: $1',
	'bookmanagerv2-description' => 'Descrición: $1',
	'bookmanagerv2-source' => 'Fonte: $1',
	'bookmanagerv2-permission' => 'Permisos: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Outra versión|Outras versións}}: $2',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'bookmanagerv2-desc' => 'Adde functionalitate pro inserer e immagazinar metadatos e structura de libros',
	'bookmanagerv2-invalid-json' => 'JSON invalide',
	'bookmanagerv2-example-nav' => 'Le barra de navigation sur iste pagina appare perque <code>$wgBookManagerv2ExampleNavigation</code> es definite como "<code>true</code>" in <code>LocalSettings.php</code>.',
	'bookmanagerv2-metadata' => 'Metadatos del obra',
	'bookmanagerv2-metadata-header' => 'Metadatos',
	'bookmanagerv2-contents' => 'Contento del obra',
	'bookmanagerv2-contents-header' => 'Contento',
	'bookmanagerv2-title' => 'Titulo: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Titulo|Titulos}} alternative: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autor|Autores}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Traductor|Traductores}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Redactor|Redactores}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Illustrator|Illustratores}}: $2',
	'bookmanagerv2-subtitle' => 'Subtitulo: $1',
	'bookmanagerv2-series-title' => 'Titulo del serie: $1',
	'bookmanagerv2-volume' => 'Volumine: $1',
	'bookmanagerv2-edition' => 'Edition: $1',
	'bookmanagerv2-publisher' => 'Editor: $1',
	'bookmanagerv2-printer' => 'Impressor: $1',
	'bookmanagerv2-publication-date' => 'Data de edition: $1',
	'bookmanagerv2-publication-city' => 'Citate de edition: $1',
	'bookmanagerv2-language' => 'Lingua: $1',
	'bookmanagerv2-description' => 'Description: $1',
	'bookmanagerv2-source' => 'Fonte: $1',
	'bookmanagerv2-permission' => 'Permission: $1',
	'bookmanagerv2-other-versions' => 'Altere {{PLURAL:$1|version|versiones}}: $2',
);

/** Italian (italiano)
 * @author Beta16
 * @author Gianfranco
 * @author Wim b
 */
$messages['it'] = array(
	'bookmanagerv2-desc' => 'Aggiunge funzionalità per inserire e memorizzare la struttura e i metadati di un libro',
	'bookmanagerv2-invalid-json' => 'JSON non valido',
	'bookmanagerv2-example-nav' => "La barra di navigazione in questa pagina viene visualizzata perché <code>\$wgBookManagerv2ExampleNavigation</code> è impostata su '<code>true</code>' in <code>LocalSettings.php</code>.",
	'bookmanagerv2-metadata' => "Metadati dell'opera",
	'bookmanagerv2-metadata-header' => 'Metadati',
	'bookmanagerv2-contents' => "Contenuto dell'opera",
	'bookmanagerv2-contents-header' => 'Indice',
	'bookmanagerv2-title' => 'Titolo: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Titolo alternativo|Titoli alternativi}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autore|Autori}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Traduttore|Traduttori}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Editore|Editori}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Illustratore|Illustratori}}: $2',
	'bookmanagerv2-subtitle' => 'Sottotitolo: $1',
	'bookmanagerv2-series-title' => 'Titolo della serie: $1',
	'bookmanagerv2-volume' => 'Volume: $1',
	'bookmanagerv2-edition' => 'Edizione: $1',
	'bookmanagerv2-publisher' => 'Editore: $1',
	'bookmanagerv2-printer' => 'Stampatore: $1',
	'bookmanagerv2-publication-date' => 'Data di pubblicazione: $1',
	'bookmanagerv2-publication-city' => 'Luogo di pubblicazione: $1',
	'bookmanagerv2-language' => 'Lingua: $1',
	'bookmanagerv2-description' => 'Descrizione: $1',
	'bookmanagerv2-source' => 'Fonte: $1',
	'bookmanagerv2-permission' => 'Autorizzazione: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Altra versione|Altre versioni}}: $2',
	'bookmanagerv2-metadata-heading' => 'Metadati',
	'bookmanagerv2-sections-heading' => 'Sezioni',
	'bookmanagerv2-move-alt' => 'Sposta questa sezione',
	'bookmanagerv2-remove-alt' => 'Rimuovi questa sezione',
	'bookmanagerv2-rename' => 'rinomina',
	'bookmanagerv2-create' => 'crea',
	'bookmanagerv2-done' => 'Fatto',
	'bookmanagerv2-add' => 'aggiungi',
	'bookmanagerv2-read' => 'leggi',
	'bookmanagerv2-section-name' => 'Nome della sezione:',
	'bookmanagerv2-section-link' => 'Collegamento alla sezione:',
	'bookmanagerv2-title-field' => 'Titolo',
	'bookmanagerv2-alternate-titles-field' => 'Titoli alternativi',
	'bookmanagerv2-authors-field' => 'Autori',
	'bookmanagerv2-translators-field' => 'Traduttori',
	'bookmanagerv2-editors-field' => 'Editori',
	'bookmanagerv2-illustrators-field' => 'Illustratori',
	'bookmanagerv2-subtitle-field' => 'Sottotitolo',
	'bookmanagerv2-series-title-field' => 'Titolo della serie',
	'bookmanagerv2-volume-field' => 'Volume',
	'bookmanagerv2-edition-field' => 'Edizione',
	'bookmanagerv2-publisher-field' => 'Editore',
	'bookmanagerv2-printer-field' => 'Stampatore',
	'bookmanagerv2-publication-year-field' => 'Anno di pubblicazione',
	'bookmanagerv2-publication-month-field' => 'Mese di pubblicazione',
	'bookmanagerv2-publication-day-field' => 'Giorno di pubblicazione',
	'bookmanagerv2-publication-city-field' => 'Città di pubblicazione',
	'bookmanagerv2-language-field' => 'Lingua',
	'bookmanagerv2-description-field' => 'Descrizione',
	'bookmanagerv2-source-field' => 'Fonte',
	'bookmanagerv2-permission-field' => 'Permessi',
	'bookmanagerv2-other-versions-field' => 'Altre versioni',
	'bookmanagerv2-sections-field' => 'Sezioni',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'bookmanagerv2-desc' => '書籍のメタデータおよび構造を入力および格納する機能を追加する',
	'bookmanagerv2-invalid-json' => '無効な JSON',
	'bookmanagerv2-example-nav' => 'このページでナビゲーションバーが表示されているのは、<code>LocalSettings.php</code> で <code>$wgBookManagerv2ExampleNavigation</code> が <code>true</code> に設定されているためです。',
	'bookmanagerv2-metadata' => '作品のメタデータ',
	'bookmanagerv2-metadata-header' => 'メタデータ',
	'bookmanagerv2-contents' => '作品の内容',
	'bookmanagerv2-contents-header' => '内容',
	'bookmanagerv2-title' => '書名: $1',
	'bookmanagerv2-authors' => '{{PLURAL:$1|著者}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|翻訳者}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|編集者}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|挿絵画家}}: $2',
	'bookmanagerv2-subtitle' => 'サブタイトル: $1',
	'bookmanagerv2-series-title' => 'シリーズ名: $1',
	'bookmanagerv2-volume' => '巻: $1',
	'bookmanagerv2-edition' => '版: $1',
	'bookmanagerv2-publisher' => '発行者: $1',
	'bookmanagerv2-printer' => '印刷者: $1',
	'bookmanagerv2-publication-date' => '発行日: $1',
	'bookmanagerv2-publication-city' => '発行地: $1',
	'bookmanagerv2-language' => '言語: $1',
	'bookmanagerv2-description' => '説明: $1',
	'bookmanagerv2-source' => '出典: $1',
	'bookmanagerv2-permission' => '許諾: $1',
	'bookmanagerv2-other-versions' => 'その他の{{PLURAL:$1|バージョン}}: $2',
	'bookmanagerv2-isbn' => 'ISBN: $1',
	'bookmanagerv2-lccn' => 'LCCN: $1',
	'bookmanagerv2-oclc' => 'OCLC: $1',
	'bookmanagerv2-metadata-heading' => 'メタデータ',
	'bookmanagerv2-sections-heading' => '節',
	'bookmanagerv2-move-alt' => 'この節を移動する',
	'bookmanagerv2-remove-alt' => 'この節を除去する',
	'bookmanagerv2-rename' => '名前を変更',
	'bookmanagerv2-create' => '作成',
	'bookmanagerv2-done' => '完了',
	'bookmanagerv2-add' => '追加',
	'bookmanagerv2-read' => '閲覧',
	'bookmanagerv2-section-name' => '節の名前:',
	'bookmanagerv2-section-link' => '節リンク:',
	'bookmanagerv2-title-field' => '書名',
	'bookmanagerv2-authors-field' => '著者',
	'bookmanagerv2-translators-field' => '翻訳者',
	'bookmanagerv2-editors-field' => '編集者',
	'bookmanagerv2-illustrators-field' => '挿絵画家',
	'bookmanagerv2-subtitle-field' => '副題',
	'bookmanagerv2-series-title-field' => 'シリーズ名',
	'bookmanagerv2-volume-field' => '巻',
	'bookmanagerv2-edition-field' => '版',
	'bookmanagerv2-publisher-field' => '発行者',
	'bookmanagerv2-printer-field' => '印刷者',
	'bookmanagerv2-publication-year-field' => '発行年',
	'bookmanagerv2-publication-month-field' => '発行月',
	'bookmanagerv2-publication-day-field' => '発行日',
	'bookmanagerv2-publication-city-field' => '発行地',
	'bookmanagerv2-language-field' => '言語',
	'bookmanagerv2-description-field' => '説明',
	'bookmanagerv2-source-field' => '出典',
	'bookmanagerv2-permission-field' => '許諾',
	'bookmanagerv2-other-versions-field' => 'その他のバージョン',
	'bookmanagerv2-sections-field' => '節',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'bookmanagerv2-title' => 'Sernav:$1',
	'bookmanagerv2-language' => 'Ziman:$1',
	'bookmanagerv2-description' => 'Danasîn:$1',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'bookmanagerv2-desc' => "Setzt d'Fonctionalitéit derbäi fir Metadate a Strukture vu Bicher anzeginn",
	'bookmanagerv2-metadata' => 'Metadate vum Wierk',
	'bookmanagerv2-metadata-header' => 'Metadaten',
	'bookmanagerv2-contents' => 'Inhalter vum Wierk',
	'bookmanagerv2-contents-header' => 'Inhalter',
	'bookmanagerv2-title' => 'Titel: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Alternativen Titel|Alternativ Titelen}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Auteur|Auteuren}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Iwwersetzer}}: $2',
	'bookmanagerv2-subtitle' => 'Ënnertitel: $1',
	'bookmanagerv2-edition' => 'Editioun: $1',
	'bookmanagerv2-publisher' => 'Editeur: $1',
	'bookmanagerv2-printer' => 'Dréckerei: $1',
	'bookmanagerv2-publication-date' => 'Datum vun der Publikatioun: $1',
	'bookmanagerv2-publication-city' => 'Stad vun der Publikatioun: $1',
	'bookmanagerv2-language' => 'Sprooch: $1',
	'bookmanagerv2-description' => 'Beschreiwung: $1',
	'bookmanagerv2-source' => 'Quell: $1',
	'bookmanagerv2-permission' => 'Autorisatioun: $1',
	'bookmanagerv2-other-versions' => 'Aner {{PLURAL:$1|Versioun|Versiounen}}: $2',
	'bookmanagerv2-sections-heading' => 'Abschnitter',
	'bookmanagerv2-move-alt' => 'Dësen Abschnitt réckelen',
	'bookmanagerv2-remove-alt' => 'Dësen Abschnitt ewechhuelen',
	'bookmanagerv2-rename' => 'ëmbenennen',
	'bookmanagerv2-create' => 'uleeën',
	'bookmanagerv2-done' => 'Fäerdeg',
	'bookmanagerv2-add' => 'derbäisetzen',
	'bookmanagerv2-read' => 'liesen',
	'bookmanagerv2-section-name' => 'Numm vum Abschnitt:',
	'bookmanagerv2-title-field' => 'Titel',
	'bookmanagerv2-alternate-titles-field' => 'Alternativ Titelen',
	'bookmanagerv2-authors-field' => 'Auteuren',
	'bookmanagerv2-translators-field' => 'Iwwersetzer',
	'bookmanagerv2-editors-field' => 'Editeuren',
	'bookmanagerv2-subtitle-field' => 'Ënnertitel',
	'bookmanagerv2-edition-field' => 'Editioun',
	'bookmanagerv2-printer-field' => 'Drécker',
	'bookmanagerv2-publication-year-field' => 'Joer vun der Publikatioun',
	'bookmanagerv2-language-field' => 'Sprooch',
	'bookmanagerv2-description-field' => 'Beschreiwung',
	'bookmanagerv2-source-field' => 'Quell',
	'bookmanagerv2-other-versions-field' => 'Aner Versiounen',
	'bookmanagerv2-sections-field' => 'Abschnitter',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'bookmanagerv2-invalid-json' => 'Neleistinas JSON',
	'bookmanagerv2-metadata-header' => 'Metaduomenys',
	'bookmanagerv2-contents' => 'Darbo turinys',
	'bookmanagerv2-contents-header' => 'Turinys',
	'bookmanagerv2-title' => 'Pavadinimas: $1',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autorius|Authoriai}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Vertėjas|Vertėjai}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Redaktorius|Redaktoriai}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Iliustratorius|Iliusratoriai}}: $2',
	'bookmanagerv2-subtitle' => 'Poraštė: $1',
	'bookmanagerv2-volume' => 'Tomas: $1',
	'bookmanagerv2-edition' => 'Leidimas: $1',
	'bookmanagerv2-publisher' => 'Leidėjas: $1',
	'bookmanagerv2-publication-date' => 'Leidimo data: $1',
	'bookmanagerv2-publication-city' => 'Leidimo miestas: $1',
	'bookmanagerv2-language' => 'Kalba: $1',
	'bookmanagerv2-description' => 'Aprašymas: $1',
	'bookmanagerv2-source' => 'Šaltinis: $1',
	'bookmanagerv2-permission' => 'Leidimas: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Kita versija|Kitos versijos}}: $2',
	'bookmanagerv2-metadata-heading' => 'Metaduomenys',
	'bookmanagerv2-sections-heading' => 'Skyriai',
	'bookmanagerv2-move-alt' => 'Perkelti šį skyrių',
	'bookmanagerv2-remove-alt' => 'Pašalinti šį skyrių',
	'bookmanagerv2-rename' => 'pervadinti',
	'bookmanagerv2-create' => 'sukurti',
	'bookmanagerv2-done' => 'Atlikta',
	'bookmanagerv2-add' => 'pridėti',
	'bookmanagerv2-read' => 'skaityti',
	'bookmanagerv2-section-name' => 'Skyriaus pavadinimas:',
	'bookmanagerv2-section-link' => 'Skyriaus nuoroda:',
	'bookmanagerv2-title-field' => 'Pavadinimas',
	'bookmanagerv2-alternate-titles-field' => 'Alternatyvūs pavadinimai',
	'bookmanagerv2-authors-field' => 'Autoriai',
	'bookmanagerv2-translators-field' => 'Vertėjai',
	'bookmanagerv2-editors-field' => 'Redaktoriai',
	'bookmanagerv2-illustrators-field' => 'Iliustratoriai',
	'bookmanagerv2-subtitle-field' => 'Poraštė',
	'bookmanagerv2-series-title-field' => 'Serijos pavadinimas',
	'bookmanagerv2-volume-field' => 'Tomas',
	'bookmanagerv2-edition-field' => 'Leidimas',
	'bookmanagerv2-publisher-field' => 'Leidėjas',
	'bookmanagerv2-printer-field' => 'Spausdintojas',
	'bookmanagerv2-publication-year-field' => 'Paskelbimo metai',
	'bookmanagerv2-publication-month-field' => 'Paskelbimo mėnesis',
	'bookmanagerv2-publication-day-field' => 'Paskelbimo diena',
	'bookmanagerv2-publication-city-field' => 'Leidymo miestas',
	'bookmanagerv2-language-field' => 'Kalba',
	'bookmanagerv2-description-field' => 'Aprašymas',
	'bookmanagerv2-source-field' => 'Šaltinis',
	'bookmanagerv2-permission-field' => 'Leidimas',
	'bookmanagerv2-other-versions-field' => 'Kitos versijos',
	'bookmanagerv2-sections-field' => 'Skyriai',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'bookmanagerv2-desc' => 'Дава можност за внесување и складирање на метаподатоци и структура за книги',
	'bookmanagerv2-invalid-json' => 'Неважечки JSON',
	'bookmanagerv2-example-nav' => 'Навигационата лента на оваа страница се појавува бидејќи <code>$wgBookManagerv2ExampleNavigation</code> е наместено на „<code>true</code>“ во <code>LocalSettings.php</code>.',
	'bookmanagerv2-metadata' => 'Метаподатоци за делото',
	'bookmanagerv2-metadata-header' => 'Метаподатоци',
	'bookmanagerv2-contents' => 'Содржина на делото',
	'bookmanagerv2-contents-header' => 'Содржина',
	'bookmanagerv2-title' => 'Наслов: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Друг наслов|Други наслови}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Автор|Автори}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Преведувач|Преведувачи}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Уредник|Уредници}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Илустратор|Илустратори}}: $2',
	'bookmanagerv2-subtitle' => 'Поднаслов: $1',
	'bookmanagerv2-series-title' => 'Едиција: $1',
	'bookmanagerv2-volume' => 'Том: $1',
	'bookmanagerv2-edition' => 'Издание: $1',
	'bookmanagerv2-publisher' => 'Издавач: $1',
	'bookmanagerv2-printer' => 'Печатар: $1',
	'bookmanagerv2-publication-date' => 'Година на издавање: $1',
	'bookmanagerv2-publication-city' => 'Место на издавање: $1',
	'bookmanagerv2-language' => 'Јазик: $1',
	'bookmanagerv2-description' => 'Опис: $1',
	'bookmanagerv2-source' => 'Извор: $1',
	'bookmanagerv2-permission' => 'Дозвола: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Друга верзија|Други верзии}}: $2',
	'bookmanagerv2-metadata-heading' => 'Метаподатоци',
	'bookmanagerv2-sections-heading' => 'Делови',
	'bookmanagerv2-move-alt' => 'Премести го делов',
	'bookmanagerv2-remove-alt' => 'Отстрани го делов',
	'bookmanagerv2-rename' => 'преименувај',
	'bookmanagerv2-create' => 'создај',
	'bookmanagerv2-done' => 'Готово',
	'bookmanagerv2-add' => 'додај',
	'bookmanagerv2-read' => 'прочитајте',
	'bookmanagerv2-section-name' => 'Назив на делот:',
	'bookmanagerv2-section-link' => 'Врска за делот:',
	'bookmanagerv2-title-field' => 'Наслов',
	'bookmanagerv2-alternate-titles-field' => 'Други наслови:',
	'bookmanagerv2-authors-field' => 'Автори',
	'bookmanagerv2-translators-field' => 'Преведувачи',
	'bookmanagerv2-editors-field' => 'Уредници',
	'bookmanagerv2-illustrators-field' => 'Илустратори',
	'bookmanagerv2-subtitle-field' => 'Поднаслов',
	'bookmanagerv2-series-title-field' => 'Едиција',
	'bookmanagerv2-volume-field' => 'Том',
	'bookmanagerv2-edition-field' => 'Издание',
	'bookmanagerv2-publisher-field' => 'Издавач',
	'bookmanagerv2-printer-field' => 'Печатница',
	'bookmanagerv2-publication-year-field' => 'Година на издавање',
	'bookmanagerv2-publication-month-field' => 'Месец на издавање',
	'bookmanagerv2-publication-day-field' => 'Ден на издавање',
	'bookmanagerv2-publication-city-field' => 'Град на издавање',
	'bookmanagerv2-language-field' => 'Јазик',
	'bookmanagerv2-description-field' => 'Опис',
	'bookmanagerv2-source-field' => 'Извор',
	'bookmanagerv2-permission-field' => 'Дозвола',
	'bookmanagerv2-other-versions-field' => 'Други верзии',
	'bookmanagerv2-sections-field' => 'Делови',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'bookmanagerv2-contents' => 'कार्यांचा आशय',
	'bookmanagerv2-title' => 'शीर्षक:$1',
	'bookmanagerv2-alternate-titles' => 'पर्यायी {{PLURAL:$1|मथळा|मथळे}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|लेखक}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|भाषांतरकार}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|संपादक}}: $2',
	'bookmanagerv2-subtitle' => 'उपशीर्षक:$1',
	'bookmanagerv2-series-title' => 'मालिकेचे शीर्षक: $1',
	'bookmanagerv2-volume' => 'खंड:$1',
	'bookmanagerv2-edition' => 'आवृत्ती:$1',
	'bookmanagerv2-publisher' => 'प्रकाशक:$1',
	'bookmanagerv2-printer' => 'छापणारा:$1',
	'bookmanagerv2-publication-date' => 'प्रकाशनाचा दिनांक:$1',
	'bookmanagerv2-publication-city' => 'कोणत्या शहरातून प्रकाशित:$1',
	'bookmanagerv2-language' => 'भाषा:$1',
	'bookmanagerv2-description' => 'वर्णन:$1',
	'bookmanagerv2-source' => 'स्रोत:$1',
	'bookmanagerv2-permission' => 'परवानगी:$1',
	'bookmanagerv2-other-versions' => 'ईतर{{PLURAL:$1|आवृत्ती|आवृत्त्या}}: $2',
	'bookmanagerv2-read' => 'वाचा',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'bookmanagerv2-desc' => 'Menambahkan kefungsian untuk memasukkan dan menympan metadata dan struktur buku',
	'bookmanagerv2-invalid-json' => 'JSON tidak sah',
);

/** Dutch (Nederlands)
 * @author Hansmuller
 * @author Siebrand
 */
$messages['nl'] = array(
	'bookmanagerv2-desc' => 'Voegt functies toe om de metadata en structuur van boeken in te voeren en op te slaan',
	'bookmanagerv2-invalid-json' => 'Ongeldige JSON',
	'bookmanagerv2-example-nav' => 'De navigatiebalk op deze pagina wordt weergegeven omdat <code>$wgBookManagerv2ExampleNavigation</code> in <code>LocalSettings.php</code> is ingesteld op "<code>true</code>".',
	'bookmanagerv2-metadata' => 'Metagegevens van werk',
	'bookmanagerv2-contents' => 'Inhoud van het werk',
	'bookmanagerv2-title' => 'Titel: $1',
	'bookmanagerv2-alternate-titles' => 'Alternatieve {{PLURAL:$1|titel|titels}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Auteur|Auteurs}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Vertaler|Vertalers}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Bewerker|Bewerkers}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Illustrator|Illustratoren}}: $2',
	'bookmanagerv2-subtitle' => 'Ondertitel: $1',
	'bookmanagerv2-series-title' => 'Titel van de serie: $1',
	'bookmanagerv2-volume' => 'Deel: $1',
	'bookmanagerv2-edition' => 'Editie: $1',
	'bookmanagerv2-publisher' => 'Uitgever: $1',
	'bookmanagerv2-printer' => 'Drukker: $1',
	'bookmanagerv2-publication-date' => 'Publicatiedatum: $1',
	'bookmanagerv2-publication-city' => 'Plaats van uitgave: $1',
	'bookmanagerv2-language' => 'Taal: $1',
	'bookmanagerv2-description' => 'Beschrijving: $1',
	'bookmanagerv2-source' => 'Bron: $1',
	'bookmanagerv2-permission' => 'Toestemming: $1',
	'bookmanagerv2-other-versions' => 'Andere {{PLURAL:$1|versie|versies}}: $2',
);

/** Polish (polski)
 * @author Chrumps
 * @author Woytecr
 */
$messages['pl'] = array(
	'bookmanagerv2-desc' => 'Dodaje funkcję do wprowadzania i przechowywania metadanych i struktury książek',
	'bookmanagerv2-invalid-json' => 'Nieprawidłowy JSON',
	'bookmanagerv2-title' => 'Tytuł: $1',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autor|Autorów}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Tłumacz|Tłumaczów}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Redaktor|Redaktorów}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Ilustrator|Ilustratorów}}: $2',
	'bookmanagerv2-subtitle' => 'Podtytuł: $1',
	'bookmanagerv2-edition' => 'Edycja: $1',
	'bookmanagerv2-publication-date' => 'Data publikacji: $1',
	'bookmanagerv2-language' => 'Język: $1',
	'bookmanagerv2-description' => 'Opis: $1',
	'bookmanagerv2-source' => 'Źródło: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Inna wersja|Inne wersje}}: $2',
	'bookmanagerv2-sections-heading' => 'Sekcje',
	'bookmanagerv2-create' => 'utwórz',
	'bookmanagerv2-add' => 'dodaj',
	'bookmanagerv2-section-name' => 'Nazwa sekcji:',
	'bookmanagerv2-title-field' => 'Tytuł',
	'bookmanagerv2-authors-field' => 'Autorzy',
	'bookmanagerv2-publication-year-field' => 'Rok publikacji',
	'bookmanagerv2-publication-month-field' => 'Miesiąc publikacji',
	'bookmanagerv2-publication-day-field' => 'Dzień publikacji',
	'bookmanagerv2-language-field' => 'Język',
	'bookmanagerv2-description-field' => 'Opis',
	'bookmanagerv2-other-versions-field' => 'Inne wersje',
	'bookmanagerv2-sections-field' => 'Sekcje',
);

/** Portuguese (português)
 * @author Luckas
 */
$messages['pt'] = array(
	'bookmanagerv2-contents-header' => 'Conteúdo',
	'bookmanagerv2-title' => 'Título: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Título alternativo|Títulos alternativos}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autor|Autores}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Tradutor|Tradutores}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Editor|Editores}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Ilustrador|Ilustradores}}: $2',
	'bookmanagerv2-series-title' => 'Título da série: $1',
	'bookmanagerv2-volume' => 'Volume: $1',
	'bookmanagerv2-edition' => 'Edição: $1',
	'bookmanagerv2-publication-date' => 'Data de publicação: $1',
	'bookmanagerv2-publication-city' => 'Cidade de publicação: $1',
	'bookmanagerv2-language' => 'Língua: $1',
	'bookmanagerv2-description' => 'Descrição: $1',
	'bookmanagerv2-source' => 'Fonte: $1',
	'bookmanagerv2-permission' => 'Permissão: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Outra versão|Outras versões}}: $2',
	'bookmanagerv2-metadata-heading' => 'Metadados',
	'bookmanagerv2-sections-heading' => 'Seções',
	'bookmanagerv2-move-alt' => 'Mover esta seção',
	'bookmanagerv2-remove-alt' => 'Remover esta seção',
	'bookmanagerv2-rename' => 'renomear',
	'bookmanagerv2-create' => 'criar',
	'bookmanagerv2-done' => 'Feito',
	'bookmanagerv2-add' => 'adicionar',
	'bookmanagerv2-read' => 'ler',
	'bookmanagerv2-section-name' => 'Nome da seção:',
	'bookmanagerv2-title-field' => 'Título',
	'bookmanagerv2-alternate-titles-field' => 'Títulos alternativos',
	'bookmanagerv2-authors-field' => 'Autores',
	'bookmanagerv2-translators-field' => 'Tradutores',
	'bookmanagerv2-editors-field' => 'Editores',
	'bookmanagerv2-illustrators-field' => 'Ilustradores',
	'bookmanagerv2-series-title-field' => 'Título da série',
	'bookmanagerv2-volume-field' => 'Volume',
	'bookmanagerv2-edition-field' => 'Edição',
	'bookmanagerv2-publication-year-field' => 'Ano de publicação',
	'bookmanagerv2-publication-month-field' => 'Mês de publicação',
	'bookmanagerv2-publication-day-field' => 'Dia de publicação',
	'bookmanagerv2-publication-city-field' => 'Cidade de publicação',
	'bookmanagerv2-language-field' => 'Língua',
	'bookmanagerv2-description-field' => 'Descrição',
	'bookmanagerv2-source-field' => 'Fonte',
	'bookmanagerv2-permission-field' => 'Permissão',
	'bookmanagerv2-other-versions-field' => 'Outras versões',
	'bookmanagerv2-sections-field' => 'Seções',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas
 */
$messages['pt-br'] = array(
	'bookmanagerv2-contents-header' => 'Conteúdo',
	'bookmanagerv2-title' => 'Título: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Título alternativo|Títulos alternativos}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autor|Autores}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Tradutor|Tradutores}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Editor|Editores}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Ilustrador|Ilustradores}}: $2',
	'bookmanagerv2-subtitle' => 'Subtítulo: $1',
	'bookmanagerv2-series-title' => 'Título da série: $1',
	'bookmanagerv2-volume' => 'Volume: $1',
	'bookmanagerv2-edition' => 'Edição: $1',
	'bookmanagerv2-publication-date' => 'Data de publicação: $1',
	'bookmanagerv2-publication-city' => 'Cidade de publicação: $1',
	'bookmanagerv2-language' => 'Língua: $1',
	'bookmanagerv2-description' => 'Descrição: $1',
	'bookmanagerv2-source' => 'Fonte: $1',
	'bookmanagerv2-permission' => 'Permissão: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Outra versão|Outras versões}}: $2',
	'bookmanagerv2-sections-heading' => 'Seções',
	'bookmanagerv2-move-alt' => 'Mover esta seção',
	'bookmanagerv2-remove-alt' => 'Remover esta seção',
	'bookmanagerv2-rename' => 'renomear',
	'bookmanagerv2-create' => 'criar',
	'bookmanagerv2-done' => 'Feito',
	'bookmanagerv2-add' => 'adicionar',
	'bookmanagerv2-read' => 'ler',
	'bookmanagerv2-section-name' => 'Nome da seção:',
	'bookmanagerv2-title-field' => 'Título',
	'bookmanagerv2-alternate-titles-field' => 'Títulos alternativos',
	'bookmanagerv2-authors-field' => 'Autores',
	'bookmanagerv2-translators-field' => 'Tradutores',
	'bookmanagerv2-editors-field' => 'Editores',
	'bookmanagerv2-illustrators-field' => 'Ilustradores',
	'bookmanagerv2-series-title-field' => 'Título da série',
	'bookmanagerv2-volume-field' => 'Volume',
	'bookmanagerv2-edition-field' => 'Edição',
	'bookmanagerv2-publication-year-field' => 'Ano de publicação',
	'bookmanagerv2-publication-month-field' => 'Mês de publicação',
	'bookmanagerv2-language-field' => 'Língua',
	'bookmanagerv2-description-field' => 'Descrição',
	'bookmanagerv2-source-field' => 'Fonte',
	'bookmanagerv2-permission-field' => 'Permissão',
	'bookmanagerv2-other-versions-field' => 'Outras versões',
	'bookmanagerv2-sections-field' => 'Seções',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'bookmanagerv2-desc' => "Aggiunge 'na funzionalità pe sckaffà e reggistrà metadate de libbre e strutture",
	'bookmanagerv2-invalid-json' => 'JSON invalide',
	'bookmanagerv2-example-nav' => "'A barre de navigazzione sus a sta pàgene iesse purcé <code>\$wgBookManagerv2ExampleNavigation</code> jè 'mbostate a vere jndr'à <code>LocalSettings.php</code>.",
	'bookmanagerv2-metadata' => 'Metadate de fatìe',
	'bookmanagerv2-metadata-header' => 'Metadata',
	'bookmanagerv2-contents' => 'Condenute de fatìe',
	'bookmanagerv2-contents-header' => 'Condenute',
	'bookmanagerv2-title' => 'Titole: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Titole alternative}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autore|Auture}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Traduttore|Tradutture}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Editore|Editure}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Illustratore|Illustrature}}: $2',
	'bookmanagerv2-subtitle' => 'Sottotitole: $1',
	'bookmanagerv2-series-title' => "Titole d'a serie: $1",
	'bookmanagerv2-volume' => 'Volume: $1',
	'bookmanagerv2-edition' => 'Edizione: $1',
	'bookmanagerv2-publisher' => 'Pubblecatore: $1',
	'bookmanagerv2-printer' => 'Stambatore: $1',
	'bookmanagerv2-publication-date' => 'Date de pubblecazione: $1',
	'bookmanagerv2-publication-city' => 'Cetate de pubblecazione: $1',
	'bookmanagerv2-language' => 'Lènghe: $1',
	'bookmanagerv2-description' => 'Descrizione: $1',
	'bookmanagerv2-source' => 'Origgene: $1',
	'bookmanagerv2-permission' => 'Permesse: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Otra versione|Otre versiune}}: $2',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author Liftarn
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'bookmanagerv2-desc' => 'Lägger till funktioner för att ange och lagra metadata och struktur för böcker',
	'bookmanagerv2-invalid-json' => 'Ogiltig JSON',
	'bookmanagerv2-title' => 'Titel: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Alternativ titel|Alternativa titlar}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Författare|Författare}}: $2', # Fuzzy
	'bookmanagerv2-translators' => '{{PLURAL:$1|Översättare|Översättare}}: $2', # Fuzzy
	'bookmanagerv2-editors' => '{{PLURAL:$1|Redaktör|Redaktörer}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Illustratör|Illustratörer}}: $2',
	'bookmanagerv2-subtitle' => 'Undertext: $1',
	'bookmanagerv2-series-title' => 'Seriens titel: $1',
	'bookmanagerv2-volume' => 'Volym: $1',
	'bookmanagerv2-edition' => 'Utgåva: $1',
	'bookmanagerv2-publisher' => 'Utgivare: $1',
	'bookmanagerv2-printer' => 'Tryckeri: $1',
	'bookmanagerv2-publication-date' => 'Utgivningsdatum: $1',
	'bookmanagerv2-publication-city' => 'Utgivningsort: $1',
	'bookmanagerv2-language' => 'Språk: $1',
	'bookmanagerv2-description' => 'Beskrivning: $1',
	'bookmanagerv2-source' => 'Källa: $1',
	'bookmanagerv2-permission' => 'Behörighet: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Annan version|Andra versioner}}: $2',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Ата
 */
$messages['uk'] = array(
	'bookmanagerv2-desc' => 'Додає функціональність до введення і зберігання метаданих і структури книги',
	'bookmanagerv2-invalid-json' => 'Неприпустимий JSON',
	'bookmanagerv2-example-nav' => 'Навігаційна панель з\'являється на цій сторінці, бо <code>$wgBookManagerv2ExampleNavigation</code> встановлено як <code>true</code> у <code>LocalSettings.php</code>.',
	'bookmanagerv2-metadata' => 'Метадані роботи',
	'bookmanagerv2-metadata-header' => 'Метадані',
	'bookmanagerv2-contents' => 'Зміст роботи',
	'bookmanagerv2-contents-header' => 'Зміст',
	'bookmanagerv2-title' => 'Назва: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Альтернативна назва|Альтернативні назви}}: $2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Автор|Автори}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Перекладач|Перекладачі}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Редактор|Редактори}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Ілюстратор|Ілюстратори}}: $2',
	'bookmanagerv2-subtitle' => 'Підзаголовок: $1',
	'bookmanagerv2-series-title' => 'Назва серії: $1',
	'bookmanagerv2-volume' => 'Том: $1',
	'bookmanagerv2-edition' => 'Видання: $1',
	'bookmanagerv2-publisher' => 'Видавництво: $1',
	'bookmanagerv2-printer' => 'Друк: $1',
	'bookmanagerv2-publication-date' => 'Дата видання: $1',
	'bookmanagerv2-publication-city' => 'Місто видання: $1',
	'bookmanagerv2-language' => 'Мова: $1',
	'bookmanagerv2-description' => 'Опис: $1',
	'bookmanagerv2-source' => 'Джерело: $1',
	'bookmanagerv2-permission' => 'Дозвіл: $1',
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Інша версія|Інші версії}}: $2',
	'bookmanagerv2-metadata-heading' => 'Метадані',
	'bookmanagerv2-sections-heading' => 'Розділи',
	'bookmanagerv2-move-alt' => 'Перемістити цей розділ',
	'bookmanagerv2-remove-alt' => 'Видалити цей розділ',
	'bookmanagerv2-rename' => 'перейменувати',
	'bookmanagerv2-create' => 'створити',
	'bookmanagerv2-done' => 'Готово',
	'bookmanagerv2-add' => 'додати',
	'bookmanagerv2-read' => 'читати',
	'bookmanagerv2-section-name' => 'Назва розділу:',
	'bookmanagerv2-section-link' => 'Посилання на розділ:',
	'bookmanagerv2-title-field' => 'Заголовок',
	'bookmanagerv2-alternate-titles-field' => 'Альтернативні назви',
	'bookmanagerv2-authors-field' => 'Автори',
	'bookmanagerv2-translators-field' => 'Перекладачі',
	'bookmanagerv2-editors-field' => 'Редактори',
	'bookmanagerv2-illustrators-field' => 'Ілюстратори',
	'bookmanagerv2-subtitle-field' => 'Підзаголовок',
	'bookmanagerv2-series-title-field' => 'Назва серії',
	'bookmanagerv2-volume-field' => 'Том',
	'bookmanagerv2-edition-field' => 'Видання',
	'bookmanagerv2-publisher-field' => 'Видавництво',
	'bookmanagerv2-printer-field' => 'Типографія',
	'bookmanagerv2-publication-year-field' => 'Рік видання',
	'bookmanagerv2-publication-month-field' => 'Місяць видання',
	'bookmanagerv2-publication-day-field' => 'День видання',
	'bookmanagerv2-publication-city-field' => 'Місто видання',
	'bookmanagerv2-language-field' => 'Мова',
	'bookmanagerv2-description-field' => 'Опис',
	'bookmanagerv2-source-field' => 'Джерело',
	'bookmanagerv2-permission-field' => 'Права',
	'bookmanagerv2-other-versions-field' => 'Інші версії',
	'bookmanagerv2-sections-field' => 'Розділи',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'bookmanagerv2-metadata-heading' => 'מעטאַ־דאַטן',
	'bookmanagerv2-sections-heading' => 'אפטיילן',
	'bookmanagerv2-move-alt' => 'באוועגן דעם אפטייל',
	'bookmanagerv2-remove-alt' => 'אַראָפּנעמען דעם אפטייל',
	'bookmanagerv2-create' => 'שאַפֿן',
	'bookmanagerv2-done' => 'ערליידיקט',
	'bookmanagerv2-add' => 'צולייגן',
	'bookmanagerv2-read' => 'לייענען',
	'bookmanagerv2-section-name' => 'אפטייל נאמען:',
	'bookmanagerv2-section-link' => 'אפטייל לינק:',
	'bookmanagerv2-title-field' => 'טיטל',
	'bookmanagerv2-authors-field' => 'שרייבער',
	'bookmanagerv2-translators-field' => 'איבערזעצער',
	'bookmanagerv2-editors-field' => 'רעדאַקטאָרן',
	'bookmanagerv2-illustrators-field' => 'אילוסטרירער',
	'bookmanagerv2-subtitle-field' => 'אונטער־טיטל',
	'bookmanagerv2-series-title-field' => 'סעריע טיטל',
	'bookmanagerv2-edition-field' => 'אויפֿלאַגע',
	'bookmanagerv2-publisher-field' => 'פֿאַרלעגער',
	'bookmanagerv2-printer-field' => 'דרוקער',
	'bookmanagerv2-publication-year-field' => 'פארעפנטלעכונג יאר',
	'bookmanagerv2-publication-month-field' => 'פארעפנטלעכונג מאנאט',
	'bookmanagerv2-publication-day-field' => 'פארעפנטלעכונג טאג',
	'bookmanagerv2-publication-city-field' => 'פארעפנטלעכונג שטאט',
	'bookmanagerv2-language-field' => 'שפראַך',
	'bookmanagerv2-description-field' => 'באַשרײַבונג',
	'bookmanagerv2-source-field' => 'מקור',
	'bookmanagerv2-permission-field' => 'דערלויבעניש',
	'bookmanagerv2-other-versions-field' => 'אַנדערע ווערסיעס',
	'bookmanagerv2-sections-field' => 'אפטיילן',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Byfserag
 * @author Qiyue2001
 */
$messages['zh-hans'] = array(
	'bookmanagerv2-invalid-json' => '无效的JSON',
	'bookmanagerv2-title' => '标题：$1',
	'bookmanagerv2-subtitle' => '副标题:$1',
	'bookmanagerv2-series-title' => '系列标题：$1',
	'bookmanagerv2-volume' => '容量：$1',
	'bookmanagerv2-publisher' => '出版商：$1',
	'bookmanagerv2-publication-date' => '出版日期：$1',
	'bookmanagerv2-publication-city' => '出版城市：$1',
	'bookmanagerv2-language' => '语言：$1',
	'bookmanagerv2-source' => '来源：$1',
	'bookmanagerv2-permission' => '权限:$1',
	'bookmanagerv2-other-versions' => '其他版本：$2', # Fuzzy
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Openerror
 */
$messages['zh-hant'] = array(
	'bookmanagerv2-title' => '主標題：$1',
	'bookmanagerv2-subtitle' => '副標題：$1',
	'bookmanagerv2-publisher' => '出版商：$1',
	'bookmanagerv2-printer' => '印刷商：$1',
	'bookmanagerv2-publication-date' => '出版日期：$1',
	'bookmanagerv2-publication-city' => '出版城市：$1',
	'bookmanagerv2-language' => '語言：$1',
	'bookmanagerv2-description' => '內容簡介：$1',
);
