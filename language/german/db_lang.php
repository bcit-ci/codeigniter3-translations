<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Die Datenbank-Einstellungen sind anhand der vorliegenden Verbindungsdaten nicht zu ermitteln.';
$lang['db_unable_to_connect'] = 'Mit den vorliegenden Einstellungen ist keine Verbindung zum Datenbank-Server möglich.';
$lang['db_unable_to_select'] = 'Die folgende Datenbank kann nicht gewählt werden: %s';
$lang['db_unable_to_create'] = 'Die folgende Datenbank kann nicht erstellt werden: %s';
$lang['db_invalid_query'] = 'Die vorliegende SQL-Abfrage ist ungültig.';
$lang['db_must_set_table'] = 'Sie müssen die Tabelle der Datenbank für Ihre Abfrage angegeben.';
$lang['db_must_use_set'] = 'Zum Updaten eines Eintrages müssen Sie die "set" Methode verwenden.';
$lang['db_must_use_index'] = 'Für einen Batch-Update müssen Sie einen passenden Index bestimmen.';
$lang['db_batch_missing_index'] = 'Eine oder mehrere angegebene Zeilen für einen Batch-Update haben einen fehlenden Index.';
$lang['db_must_use_where'] = 'Updates sind nicht erlaubt, solange Sie nicht eine "where" Bedingung enthalten.';
$lang['db_del_must_use_where'] = 'Löschungen sind nicht erlaubt, solange Sie nicht eine Bedingung wie "where" oder "like" enthalten sind.';
$lang['db_field_param_missing'] = 'Um Felder abzufragen benötigen Sie den Namen der Tabelle als Parameter.';
$lang['db_unsupported_function'] = 'Die verwendete Datenbank-Plattform unterstützt diese Funktion nicht.';
$lang['db_transaction_failure'] = 'Transaktions-Fehler: Rollback durchgeführt.';
$lang['db_unable_to_drop'] = 'Die angegebene Datenbank kann nicht gelöscht werden.';
$lang['db_unsupported_feature'] = 'Ihre Datenbank-Plattform unterstützt diese Funktion nicht.';
$lang['db_unsupported_compression'] = 'Das angegebene Format für die Daten-Komprimierung wird auf Ihrem Server nicht unterstützt.';
$lang['db_filepath_error'] = 'Die Daten konnten nicht in das angegebene Verzeichnis geschrieben werden.';
$lang['db_invalid_cache_path'] = 'Der angegebene Pfad für den Cache ist ungültig oder nicht beschreibbar.';
$lang['db_table_name_required'] = 'Ein Tabellenname wird für diesen Vorgang benötigt.';
$lang['db_column_name_required'] = 'Ein Spaltenname wird für diesen Vorgang benötigt.';
$lang['db_column_definition_required'] = 'Eine Spalten-Definition wird für diesen Vorgang benötigt.';
$lang['db_unable_to_set_charset'] = 'Der Verbindungs-Zeichensatz konnte nicht gesetzt werden: %s';
$lang['db_error_heading'] = 'Es ist ein Datenbank-Fehler aufgetreten.';

/* End of file db_lang.php */
/* Location: ./application/language/german/db_lang.php */