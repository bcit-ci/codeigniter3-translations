<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia Institute of Technology
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
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Impossibile determinare i parametri del database dalla stringa di connessione immessa.';
$lang['db_unable_to_connect'] = 'Impossibile connettersi al database utilizzando i parametri inseriti.';
$lang['db_unable_to_select'] = 'Impossibile selezionare il database specificato: %s';
$lang['db_unable_to_create'] = 'Impossibile creare il database specificato: %s';
$lang['db_invalid_query'] = 'La query immessa non &egrave; valida.';
$lang['db_must_set_table'] = 'Impostare il database da utilizzare per la query immessa.';
$lang['db_must_use_set'] = 'Devi utilizzare il metodo "set" per eseguire l\'update del tuo record.';
$lang['db_must_use_index'] = 'You must specify an index to match on for batch updates.'; // translate
$lang['db_batch_missing_index'] = 'One or more rows submitted for batch updating is missing the specified index.'; // translate
$lang['db_must_use_where'] = 'Le query di "Update" sono consentite solo se contengono la clausola "where".';
$lang['db_del_must_use_where'] = 'Le query di "Delete" sono consentite solo se contengono la clausola "where".';
$lang['db_field_param_missing'] = 'Per eseguire il fetch dei campi &egrave; necessario il nome della tabella passato come parametro.';
$lang['db_unsupported_function'] = 'Funzionalit&agrave;';
$lang['db_transaction_failure'] = 'Transazione fallita: Rollback eseguito.';
$lang['db_unable_to_drop'] = 'Impossibile eliminare il database selezionato.';
$lang['db_unsuported_feature'] = 'Funzionalit&agrave; non supportata dalla piattaforma di database in uso.';
$lang['db_unsuported_compression'] = 'Il formato di compressione dei file che &egrave; stato scelto non &egrave; supportato dal server in uso.';
$lang['db_filepath_error'] = 'Impossibile scrivere i dati nel percorso che &egrave; stato immesso.';
$lang['db_invalid_cache_path'] = 'Il percorso della cache che &egrave; stato immesso non &egrave; valida o non &egrave; scrivibile.';
$lang['db_table_name_required'] = 'E\' necessario specificare una tabella per questa operazione.';
$lang['db_column_name_required'] = 'E\' necessario specificare il nome di una colonna per questa operazione';
$lang['db_column_definition_required'] = 'E\' necessario specificare la definizione di una colonna per questa operazione.';
$lang['db_unable_to_set_charset'] = 'Impossibile impostare la client connection character set: %s';
$lang['db_error_heading'] = 'Errore del database';

/* End of file db_lang.php */
/* Location: ./system/language/italian/db_lang.php */