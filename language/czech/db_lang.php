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
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str']     = 'Nebylo možné zjistit databázové nastavení podle vloženého řetězce';
$lang['db_unable_to_connect']          = 'Nepovedlo se připojit k databázi s daným nastavením';
$lang['db_unable_to_select']           = 'Nepodařilo se vybrat (select) databázi: %s';
$lang['db_unable_to_create']           = 'Nepodařilo se vytvořit danou databázi: %s';
$lang['db_invalid_query']              = 'Zadaný dotaz (query) není validní.';
$lang['db_must_set_table']             = 'Musíte zvolit tabulku, nad kterou se má dotaz spustit.';
$lang['db_must_use_set']               = 'Musíte použít metodu "set" pro aktualizaci (update) příspěvku.';
$lang['db_must_use_index']             = 'Je nutné specifikovat párový index pro batch update).';
$lang['db_batch_missing_index']        = 'Pro jeden nebo více daných řádků určených k batch update chybí specifikovaný index.';
$lang['db_must_use_where']             = 'Aktualizace (update) není povolena bez "where" podmínky.';
$lang['db_del_must_use_where']         = 'Mazání (delete) není povoleno bez "where" nebo "like" podmínky.';
$lang['db_field_param_missing']        = 'Pro získání polí je nutné specifikovat název tabulky jako parametr metody.';
$lang['db_unsupported_function']       = 'Tato funkce není tímto typem databáze podporována.';
$lang['db_transaction_failure']        = 'Chyba transakce: Proveden rollback.';
$lang['db_unable_to_drop']             = 'Drop databáze se nezdařil.';
$lang['db_unsupported_feature']        = 'Tato funkce není tímto typem databázové platformy podporována.';
$lang['db_unsupported_compression']    = 'Daný typ komprese není serverem podporován.';
$lang['db_filepath_error']             = 'Unable to write data to the file path you have submitted.';
$lang['db_filepath_error']             = 'Nepodařilo se zapsat data dle dané cesty.';
$lang['db_invalid_cache_path']         = 'Daná cesta k cache není správná, nebo se do ní nedá zapisovat.';
$lang['db_table_name_required']        = 'Jméno tabulky je nutné pro tuto operaci.';
$lang['db_column_name_required']       = 'Jméno sloupce je nutné pro tuto operaci.';
$lang['db_column_definition_required'] = 'Definice sloupce je nutná pro tuto operaci.';
$lang['db_unable_to_set_charset']      = 'Nepodařilo se nastavit znakovou sadu pro klienta: %s';
$lang['db_error_heading']              = 'Chyba databáze';

/* End of file db_lang.php */
/* Location: ./application/language/czech/db_lang.php */