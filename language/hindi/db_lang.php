<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author	CodeIgniter community
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @copyright	Pieter Krul
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 */
defined('BASEPATH') OR exit('Directe toegang tot scripts is niet toegestaan');
$lang['db_invalid_connection_str'] = 'मैं कनेक्शन डेटा का उपयोग कर डेटाबेस के लिए सेटिंग्स का निर्धारण करने में असमर्थ हूँ।';
$lang['db_unable_to_connect'] = 'मैं निर्दिष्ट जानकारी के साथ डेटाबेस से कनेक्ट करने में असमर्थ हूँ।';
$lang['db_unable_to_select'] = 'मैं डेटाबेस का उपयोग करने में असमर्थ हूँ:% s';
$lang['db_unable_to_create'] = 'मैं डेटाबेस बनाने के लिए असमर्थ हूँ:% s';
$lang['db_invalid_query'] = 'डेटाबेस के लिए बनाया क्वेरी अच्छी तरह से तैयार नहीं है।';
$lang['db_must_set_table'] = 'यह डेटाबेस से मेज के नाम का उल्लेख करना अनिवार्य है।';
$lang['db_must_use_set'] = 'डेटाबेस आप एक नियम बदलना चाहते हैं, तो "सेट" आदेश में नामित है कि मिल जाएगा।एगा।';
$lang['db_must_use_index'] = 'De database vindt dat de naam van een INDEX genoemd moet voor deze batch-updates.';
$lang['db_batch_missing_index'] = 'De opgegeven INDEX ontbreekt, terwijl er wel regels voor een batch update zijn.';
$lang['db_must_use_where'] = 'Updates zijn niet toegestaan zonder een "WHERE" clausule.';
$lang['db_del_must_use_where'] = 'Verwijderingen zijn niet toegestaan zonder een "WHERE" of "LIKE" clausule.';
$lang['db_field_param_missing'] = 'Om velden op te kunnen halen dient de naam van de tabel ook genoemd te worden.';
$lang['db_unsupported_function'] = 'Die functie wordt door deze versie van de database niet ondersteund.';
$lang['db_transaction_failure'] = 'Transactiefout: Rollback is uitgevoerd.';
$lang['db_unable_to_drop'] = 'Het lukt niet om de opgegeven database te verwijderen van het systeem.';
$lang['db_unsupported_feature'] = 'Deze mogelijkheid biedt het databaseplatform niet.';
$lang['db_unsupported_compression'] = 'De server kent deze compressiemethode niet.';
$lang['db_filepath_error'] = 'Het systeem kan niet schrijven naar het genoemde bestand.';
$lang['db_invalid_cache_path'] = 'Het systeem kan niet schrijven naar dit cachebestand en het is onduidelijk of dit het juiste bestand is.';
$lang['db_table_name_required'] = 'Voor deze actie is de naam van de tabel verplicht.';
$lang['db_column_name_required'] = 'Voor deze actie is de kolomnaam verplicht.';
$lang['db_column_definition_required'] = 'Voor deze actie is het opgeven van een kolomdefinitie verplicht.';
$lang['db_unable_to_set_charset'] = 'Het systeem an de karakterset voor de clientverbinding niet instellen: %s';
$lang['db_error_heading'] = 'Er is een database fout ontstaan.';
