<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
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
 * @author	cikov
 * @copyright	Copyright (c) 2021, cikov, opensourcepos.org
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://opensourcepos.org
 * @since	Version 3.1.11
 * @filesource
 */
defined('BASEPATH') OR exit('Nije dozvoljen direktan pristup');

$lang['db_invalid_connection_str'] = 'Nije moguće odrediti postavke baze podataka na osnovu niza veze koji ste naveli.';
$lang['db_unable_to_connect'] = 'Nije moguće uspostaviti vezu sa serverom baze podataka pomoću navedenih podešavanja.';
$lang['db_unable_to_select'] = 'Nije moguće odabrati navedenu bazu podataka: %s';
$lang['db_unable_to_create'] = 'Nije moguće kreirati navedenu bazu podataka: %s';
$lang['db_invalid_query'] = 'Upit koji ste poslali nije važeći.';
$lang['db_must_set_table'] = 'Morate postaviti tabelu baze podataka koja će se koristiti sa vašim upitom.';
$lang['db_must_use_set'] = 'Morate koristiti metod „set“ da biste ažurirali unos.';
$lang['db_must_use_index'] = 'Morate navesti indeks koji će se podudarati za skupna ažuriranja.';
$lang['db_batch_missing_index'] = 'Nedostaje indeks za jedan ili više redova koje želite da ažurirate.';
$lang['db_must_use_where'] = 'Ažuriranja nisu dozvoljena ako ne sadrže uslov "where".';
$lang['db_del_must_use_where'] = 'Brisanja nisu dozvoljena ako ne sadrže uslov "where" ili "like".';
$lang['db_field_param_missing'] = 'Za preuzimanje polja potreban je naziv tabele kao parametar.';
$lang['db_unsupported_function'] = 'Ova funkcija nije dostupna za bazu podataka koju koristite.';
$lang['db_transaction_failure'] = 'Transakcija neuspješna: Izvršeno vraćanje na prethodno stanje.';
$lang['db_unable_to_drop'] = 'Nije moguće napustiti navedenu bazu podataka.';
$lang['db_unsupported_feature'] = 'Nije podržano svojstvo baze podataka koju koristite.';
$lang['db_unsupported_compression'] = 'Format za kompresiju fajlova koji ste izabrali nije podržan na vašem serveru.';
$lang['db_filepath_error'] = 'Nije moguće upisati podatke u putanju datoteke koju ste naveli.';
$lang['db_invalid_cache_path'] = 'Putanja koju ste vi naveli za keš nije ispravna ili nema dozvolu za pisanje.';
$lang['db_table_name_required'] = 'Ime tabele je obavezno za tu operaciju.';
$lang['db_column_name_required'] = 'Ime kolone je obavezno za tu operaciju.';
$lang['db_column_definition_required'] = 'Definisanje kolone je obavezno za tu operaciju.';
$lang['db_unable_to_set_charset'] = 'Nije moguće postaviti skup znakova veze sa klijentom: %s';
$lang['db_error_heading'] = 'Dogodila se greška baze podataka.';
