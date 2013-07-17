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
	'bookmanagerv2-title' => 'Title: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|Alternate title|Alternate titles}}: $2',
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
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|Other version|Other versions}}: $2',
	'bookmanagerv2-isbn' => 'ISBN: $1',
	'bookmanagerv2-lccn' => 'LCCN: $1',
	'bookmanagerv2-oclc' => 'OCLC: $1',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 * @author mollywhite
 */
$messages['qqq'] = array(
	'bookmanagerv2-desc' => '{{desc|name=BookManagerv2|url=http://www.mediawiki.org/wiki/Extension:BookManagerv2}}',
	'bookmanagerv2-invalid-json' => 'Error message shown when an editor tries to save an invalid JSON block.
{{Identical|Invalid JSON}}',
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

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'bookmanagerv2-desc' => 'Ergänzt die Funktionalität zur Eingabe und Speicherung von Buch-Metadaten und -Strukturen',
	'bookmanagerv2-invalid-json' => 'Ungültiges JSON',
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
 * @author Luis Felipe Schenone
 */
$messages['es'] = array(
	'bookmanagerv2-desc' => 'Agrega funcionalidad para ingresar y guardar metainformación sobre libros',
	'bookmanagerv2-invalid-json' => 'JSON inválido',
);

/** Persian (فارسی)
 * @author Mahdiz
 */
$messages['fa'] = array(
	'bookmanagerv2-title' => 'عنوان: $1',
	'bookmanagerv2-alternate-titles' => '{{PLURAL:$1|دیگرعنوان|دیگر عناوین}}:$2',
	'bookmanagerv2-authors' => '{{PLURAL:$1|نویسنده|نویسنده ها}}:$2',
	'bookmanagerv2-translators' => '{{PLURAL:$2|مترجم|مترجمان}}: $1',
	'bookmanagerv2-editors' => '{{PLURAL:$1|ویرایش کننده|ویرایش کنندگان}}:$2',
	'bookmanagerv2-illustrators' => '{{PLURAL:$1|تصویرگر|تصویرگران}}:$2',
	'bookmanagerv2-subtitle' => 'زیرعنوان: $1',
	'bookmanagerv2-series-title' => 'عنوان مجموعه:$1',
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

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'bookmanagerv2-desc' => 'Aggiunge funzionalità per inserire e memorizzare la struttura e i metadati di un libro',
	'bookmanagerv2-invalid-json' => 'JSON non valido',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'bookmanagerv2-desc' => '書籍のメタデータおよび構造を入力および格納する機能を追加する',
	'bookmanagerv2-invalid-json' => '無効な JSON',
	'bookmanagerv2-title' => '書名: $1',
	'bookmanagerv2-authors' => '{{PLURAL:$1|著者}}: $2',
	'bookmanagerv2-translators' => '{{PLURAL:$1|翻訳者}}: $2',
	'bookmanagerv2-editors' => '{{PLURAL:$1|編集者}}: $2',
	'bookmanagerv2-illustrators' => '挿絵画家: $2', # Fuzzy
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
	'bookmanagerv2-other-versions' => '{{PLURAL:$1|その他のバージョン}}: $2',
	'bookmanagerv2-isbn' => 'ISBN: $1',
	'bookmanagerv2-lccn' => 'LCCN: $1',
	'bookmanagerv2-oclc' => 'OCLC: $1',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'bookmanagerv2-desc' => 'Дава можност за внесување и складирање на метаподатоци и структура за книги',
	'bookmanagerv2-invalid-json' => 'Неважечки JSON',
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
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'bookmanagerv2-desc' => "Aggiunge 'na funzionalità pe sckaffà e reggistrà metadate de libbre e strutture",
	'bookmanagerv2-invalid-json' => 'JSON invalide',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Byfserag
 */
$messages['zh-hans'] = array(
	'bookmanagerv2-invalid-json' => '无效的JSON',
);
