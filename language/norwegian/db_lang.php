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

$lang['db_invalid_connection_str'] = 'Ikke i stand til å fastsette tilkoblingen til databasen basert på tilkoblingsteksten du oppgav.';
$lang['db_unable_to_connect'] = 'Ikke i stand til å koble til databasetjeneren din ved hjelp av de oppgitte innstillingene.';
$lang['db_unable_to_select'] = 'Ikke i stand til å velge den spesifiserte databasen: %s';
$lang['db_unable_to_create'] = 'Ikke i stand til å lage den spesifiserte databasen: %s';
$lang['db_invalid_query'] = 'Foresåpørselen du sendte inn er ikke gyldig.';
$lang['db_must_set_table'] = 'Du må spesifisere hvilken database-tabell som skal brukes med forespørselen din.';
$lang['db_must_use_set'] = 'Du må bruke «set»-metoden for å oppdatere en oppføring.';
$lang['db_must_use_index'] = 'Du må spesifisere en indeks som det skal passe med ved multi-oppdateringer.';
$lang['db_batch_missing_index'] = 'En eller flere rader som er sendt inn for multi-oppdatering mangler den spesifiserte indeksen.';
$lang['db_must_use_where'] = 'Oppdateringer uten «where»-klausul er ikke tillatt.';
$lang['db_del_must_use_where'] = 'Fjerninger uten en «where»- eller «like»-klausul er ikke tillatt.';
$lang['db_field_param_missing'] = 'Tabellnavnet må oppgis som parameter for å hente felter.';
$lang['db_unsupported_function'] = 'Denne funksjonen er ikke tilgjengelig med databasen du bruker.';
$lang['db_transaction_failure'] = 'Transaksjonsfeil: Tilbakerulling utført.';
$lang['db_unable_to_drop'] = 'Ikke i stand til å fjerne den valgte databasen.';
$lang['db_unsupported_feature'] = 'Databaseplattformen du bruker støtter ikke denne funksjonen.';
$lang['db_unsupported_compression'] = 'Filkomprimeringsformatet du valgte støttes ikke av tjeneren din.';
$lang['db_filepath_error'] = 'Skriving av data til den valgte filstien mislyktes.';
$lang['db_invalid_cache_path'] = 'Cache-stien du valgte er enten ugyldig eller ikke skrivbar.';
$lang['db_table_name_required'] = 'Et tabellnavn er påkrevet for å gjennomføre denne operasjonen.';
$lang['db_column_name_required'] = 'Et kolonnenavn er påkrevet for å gjennomføre denne operasjonen.';
$lang['db_column_definition_required'] = 'En kolonnedefinisjon er påkrevet for å gjennomføre denne operasjonen.';
$lang['db_unable_to_set_charset'] = 'Definering av klient-tegnsett mislyktes: %s';
$lang['db_error_heading'] = 'En databasefeil oppstod';

/* End of file db_lang.php */
/* Location: ./system/language/norwegian/db_lang.php */
