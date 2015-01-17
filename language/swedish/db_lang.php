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

$lang['db_invalid_connection_str']	= 'Kunde inte fastställa databasens inställningar utifrån angiven anslutnings-sträng.';
$lang['db_unable_to_connect']		= 'Kan inte ansluta till databasservern med aktuella inställningar.';
$lang['db_unable_to_select']		= 'Kan inte välja den angivna databasen: %s';
$lang['db_unable_to_create']		= 'Kan inte skapa den angivna databasen: %s';
$lang['db_invalid_query']		= 'Frågan är inte giltig.';
$lang['db_must_set_table']		= 'Tabell måste anges för att kunna utföra frågan.';
$lang['db_must_use_set']		= 'För att uppdatera en post måste metoden "set" användas.';
$lang['db_must_use_index']		= 'Ett passande index måste anges för att kunna uppdatera flera rader samtidigt.';
$lang['db_batch_missing_index']		= 'En eller flera rader som skulle uppdateras samtidigt saknar det angivna indexet.';
$lang['db_must_use_where']		= 'Uppdatering utan urval tillåts inte.';
$lang['db_del_must_use_where']		= 'Borttagning utan urval tillåts inte.';
$lang['db_field_param_missing']		= 'Tabellnamnet måste anges som parameter för att kunna hämta fält.';
$lang['db_unsupported_function']	= 'Databastypen saknar stöd för funktionen.';
$lang['db_transaction_failure']		= 'Transaktionen misslyckades. Tillbakarullning utförd.';
$lang['db_unable_to_drop']		= 'Kunde inte ta bort databasen.';
$lang['db_unsupported_feature']		= 'Databastypen saknar stöd för funktionaliteten.';
$lang['db_unsupported_compression']	= 'Servern stöder inte valt komprimeringsformat.';
$lang['db_filepath_error']		= 'Kunde inte skriva data till angiven sökväg.';
$lang['db_invalid_cache_path']		= 'Sökvägen för buffertlagring är ogiltig eller skrivskyddad .';
$lang['db_table_name_required']		= 'Kommandot kräver ett tabellnamn.';
$lang['db_column_name_required']	= 'Kommandot kräver ett kolumnnamn.';
$lang['db_column_definition_required']	= 'Kommandot kräver en definition av kolumnen.';
$lang['db_unable_to_set_charset']	= 'Kunde inte välja teckenuppsättning för anslutningen : %s';
$lang['db_error_heading']		= 'Ett databasfel uppstod';

/* End of file db_lang.php */
/* Location: ./application/language/swedish/db_lang.php */