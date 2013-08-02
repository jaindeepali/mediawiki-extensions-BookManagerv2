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
	'bookmanagerv2-contents' => 'Contents of work',
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
);

/** Message documentation (Message documentation)
 * @author Raymond
 * @author Shirayuki
 * @author mollywhite
 */
$messages['qqq'] = array(
	'bookmanagerv2-desc' => '{{desc|name=BookManagerv2|url=http://www.mediawiki.org/wiki/Extension:BookManagerv2}}',
	'bookmanagerv2-invalid-json' => 'Error message shown when an editor tries to save an invalid JSON block.
	{{Identical|Invalid JSON}}',
	'bookmanagerv2-example-nav' => 'Message shown in the subtitle to explain why example navigation bars are appearing. The navigation bars appear on every page when <code>$wgBookManagerv2ExampleNavigation</code> is set to <code>true</code>; if it\'s disabled in <code>LocalSettings.php</code>, they will disappear.',
	'bookmanagerv2-metadata' => "Alternate text for the navigation bar's metadata icon.",
	'bookmanagerv2-contents' => "Alternate text for the navigation bar's table of contents icon.",
	'bookmanagerv2-title' => 'Label in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
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
* $1 - ...',
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
	'bookmanagerv2-isbn' => 'Label for the International Standard Book Number, in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]
{{Identical|ISBN}}',
	'bookmanagerv2-lccn' => 'Label for the Library of Congress Control Number, in the navigation bar metadata dropdown. See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]',
	'bookmanagerv2-oclc' => 'Label for the Online Computer Library Center, in the navigation bar metadata dropdown.

See screenshot for an example of this dropdown.
[[File:BookManagerv2 navigation bar metadata dropdown.png]]',
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
	'bookmanagerv2-contents' => 'Inhalte des Werks',
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
);

/** Spanish (español)
 * @author Larjona
 * @author Luis Felipe Schenone
 * @author Miguel2706
 */
$messages['es'] = array(
	'bookmanagerv2-desc' => 'Agrega funcionalidad para ingresar y guardar metainformación sobre libros',
	'bookmanagerv2-invalid-json' => 'JSON inválido',
	'bookmanagerv2-example-nav' => 'La barra de navegación en esta página se muestra porque <code>$wgBookManagerv2ExampleNavigation</code> se establece en verdadero en <code>LocalSettings.php</code>.',
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

/** French (français)
 * @author Gomoko
 * @author Wyz
 */
$messages['fr'] = array(
	'bookmanagerv2-desc' => 'Ajoute une fonctionnalité pour saisir et stocker les métadonnées et la structure d’un livre',
	'bookmanagerv2-invalid-json' => 'JSON non valide',
	'bookmanagerv2-example-nav' => 'La barre de navigation apparaît sur cette page parce que <code>$wgBookManagerv2ExampleNavigation</code> est à vrai dans <code>LocalSettings.php</code>.',
	'bookmanagerv2-metadata' => 'Méta-données de travail',
	'bookmanagerv2-contents' => 'Contenu du travail',
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
	'bookmanagerv2-contents' => 'Contento del obra',
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
 * @author Wim b
 */
$messages['it'] = array(
	'bookmanagerv2-desc' => 'Aggiunge funzionalità per inserire e memorizzare la struttura e i metadati di un libro',
	'bookmanagerv2-invalid-json' => 'JSON non valido',
	'bookmanagerv2-example-nav' => "La barra di navigazione in questa pagina viene visualizzata perché <code>\$wgBookManagerv2ExampleNavigation</code> è impostata su '<code>true</code>' in <code>LocalSettings.php</code>.",
	'bookmanagerv2-metadata' => "Metadati dell'opera",
	'bookmanagerv2-contents' => "Contenuto dell'opera",
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
	'bookmanagerv2-contents' => '作品の内容',
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
	'bookmanagerv2-permission' => '許可: $1',
	'bookmanagerv2-other-versions' => 'その他の{{PLURAL:$1|バージョン}}: $2',
	'bookmanagerv2-isbn' => 'ISBN: $1',
	'bookmanagerv2-lccn' => 'LCCN: $1',
	'bookmanagerv2-oclc' => 'OCLC: $1',
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
	'bookmanagerv2-title' => 'Titel: $1',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Auteur|Auteuren}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Iwwersetzer}}: $2',
	'bookmanagerv2-subtitle' => 'Ënnertitel: $1',
	'bookmanagerv2-edition' => 'Editioun: $1',
	'bookmanagerv2-printer' => 'Dréckerei: $1',
	'bookmanagerv2-publication-date' => 'Datum vun der Publikatioun: $1',
	'bookmanagerv2-publication-city' => 'Stad vun der Publikatioun: $1',
	'bookmanagerv2-language' => 'Sprooch: $1',
	'bookmanagerv2-description' => 'Beschreiwung: $1',
	'bookmanagerv2-source' => 'Quell: $1',
	'bookmanagerv2-permission' => 'Autorisatioun: $1',
	'bookmanagerv2-other-versions' => 'Aner {{PLURAL:$1|Versioun|Versiounen}}: $2',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'bookmanagerv2-invalid-json' => 'Neleistinas JSON',
	'bookmanagerv2-title' => 'Pavadinimas: $1',
	'bookmanagerv2-authors' => '{{PLURAL:$1|Autorius|Authoriai}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|Vertėjas|Vertėjai}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|Redaktorius|Redaktoriai}}: $2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|Iliustratorius|Iliusratoriai}}: $2',
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
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'bookmanagerv2-desc' => 'Дава можност за внесување и складирање на метаподатоци и структура за книги',
	'bookmanagerv2-invalid-json' => 'Неважечки JSON',
	'bookmanagerv2-example-nav' => 'Навигационата лента на оваа страница се појавува бидејќи <code>$wgBookManagerv2ExampleNavigation</code> е наместено на „<code>true</code>“ во <code>LocalSettings.php</code>.',
	'bookmanagerv2-metadata' => 'Метаподатоци за делото',
	'bookmanagerv2-contents' => 'Содржина на делото',
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
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'bookmanagerv2-desc' => 'Menambahkan kefungsian untuk memasukkan dan menympan metadata dan struktur buku',
	'bookmanagerv2-invalid-json' => 'JSON tidak sah',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'bookmanagerv2-desc' => 'Voegt functies toe om de metadata en structuur van boeken in te voeren en op te slaan',
	'bookmanagerv2-invalid-json' => 'Ongeldige JSON',
	'bookmanagerv2-example-nav' => 'De navigatiebalk op deze pagina wordt weergegeven omdat <code>$wgBookManagerv2ExampleNavigation</code> in <code>LocalSettings.php</code> is ingesteld op "<code>true</code>".',
	'bookmanagerv2-metadata' => 'Metagegevens van werk',
	'bookmanagerv2-contents' => 'Eigenlijk werk',
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
);

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas
 */
$messages['pt-br'] = array(
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
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'bookmanagerv2-desc' => "Aggiunge 'na funzionalità pe sckaffà e reggistrà metadate de libbre e strutture",
	'bookmanagerv2-invalid-json' => 'JSON invalide',
	'bookmanagerv2-example-nav' => "'A barre de navigazzione sus a sta pàgene iesse purcé <code>\$wgBookManagerv2ExampleNavigation</code> jè 'mbostate a vere jndr'à <code>LocalSettings.php</code>.",
	'bookmanagerv2-metadata' => 'Metadate de fatìe',
	'bookmanagerv2-contents' => 'Condenute de fatìe',
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
 * @author Ата
 */
$messages['uk'] = array(
	'bookmanagerv2-desc' => 'Додає функціональність до введення і зберігання метаданих і структури книги',
	'bookmanagerv2-invalid-json' => 'Неприпустимий JSON',
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
