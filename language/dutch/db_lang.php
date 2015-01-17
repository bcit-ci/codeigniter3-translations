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

/*
 * Original translation provided by Copyright (c) 2014, Pieter Krul
 */
defined('BASEPATH') OR exit('Directe toegang tot scripts is niet toegestaan');

$lang['db_invalid_connection_str'] = 'Het lukt me niet om de instellingen voor de database te kunnen bepalen via de connectiegegevens. Dus.. ';
$lang['db_unable_to_connect'] = 'Het lukt me niet om een verbinding naar de database te maken met de opgegeven informatie. Dus..';
$lang['db_unable_to_select'] = 'Het lukt me niet om deze database te benaderen: %s';
$lang['db_unable_to_create'] = 'Het lukt me niet om deze database aan te maken: %s';
$lang['db_invalid_query'] = 'De aan de database gestelde query is niet juist geformuleerd. Dus..';
$lang['db_must_set_table'] = 'Het is echt nodig om de naam van een tabel uit de database te noemen. Dus..';
$lang['db_must_use_set'] = 'De database vindt dat, als je een regel wilt veranderen, het "SET"-commando hiervoor bedoeld is. Ja?';
$lang['db_must_use_index'] = 'De database vindt dat de naam van een INDEX genoemd moet voor deze batch-updates. Ja?';
$lang['db_batch_missing_index'] = 'De opgegeven INDEX ontbreekt, terwijl er wel regels voor een batch update zijn. Dus..';
$lang['db_must_use_where'] = 'Updates zijn niet toegestaan zonder een "WHERE" clausule. Dus..';
$lang['db_del_must_use_where'] = 'Verwijderingen zijn niet toegestaan zonder een "WHERE" of "LIKE" clausule. De database vindt dat echt niet leuk. ';
$lang['db_field_param_missing'] = 'Om velden op te kunnen halen dient de naam van de tabel ook genoemd te worden. Ja?';
$lang['db_unsupported_function'] = 'Die functie wordt door deze versie van de database niet ondersteund. Dus..';
$lang['db_transaction_failure'] = 'Transactiefout: Rollback is uitgevoerd. Dus..';
$lang['db_unable_to_drop'] = 'Het lukt me niet om de opgegeven database te verwijderen van het systeem. Dus..';
$lang['db_unsupported_feature'] = 'Deze mogelijkheid biedt het databaseplatform niet. Dus..  ';
$lang['db_unsupported_compression'] = 'De server kent deze compressiemethode niet. Dus..  ';
$lang['db_filepath_error'] = 'Ik kan niet schrijven naar het genoemde bestand. Dus.. ';
$lang['db_invalid_cache_path'] = 'Ik kan niet schrijven naar dit cachebestand, en weet ook niet of dit wel het juiste bestand is. Ja?  ';
$lang['db_table_name_required'] = 'Voor deze actie zou de database graag de naam van een tabel willen weten.  ';
$lang['db_column_name_required'] = 'Voor deze actie zou de database graag de naam van een kolom willen weten.  ';
$lang['db_column_definition_required'] = 'Voor deze actie zou de database graag de definitie van een kolom willen weten. Dus..';
$lang['db_unable_to_set_charset'] = 'Ik kan de karakterset voor de clientverbinding niet instellen: %s';
$lang['db_error_heading'] = 'De database heeft opgemerkt dat er een fout is ontstaan. Dus..';

/* End of file db_lang.php */
/* Location: ./application/language/dutch/db_lang.php */
