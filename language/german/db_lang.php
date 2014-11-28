<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Open Software License version 3.0
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is
 * bundled with this package in the files license.txt / license.rst.  It is
 * also available through the world wide web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
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
/* Location: ./system/language/english/db_lang.php */