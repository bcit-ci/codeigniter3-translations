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

$lang['db_invalid_connection_str'] = 'No s\'ha pogut determinar la configuració de la base de dades, basada en la cadena de conexió introduïda.';
$lang['db_unable_to_connect'] = 'No s\'ha pogut conectar al servidor de la base de dades, fent us de la configuració proporcionada.';
$lang['db_unable_to_select'] = 'No s\'ha pogut seleccionar la base de dades especificada: %s';
$lang['db_unable_to_create'] = 'No s\'ha pogut crear la base de dades especificada: %s';
$lang['db_invalid_query'] = 'La consulta introduïda no és válida.';
$lang['db_must_set_table'] = 'Has de fixar la taula de la base de dades que es farà servir en la consulta.';
$lang['db_must_use_set'] = 'Has de fer servir el mètode "set" per a actualitzar una entrada.';
$lang['db_must_use_index'] = 'Has d\'especificar un índex per a emparellar les actualitzacions massives.';
$lang['db_batch_missing_index'] = 'En una o mes files introduïdes per a l\'actualització massiva falta l\'índex especificat.';
$lang['db_must_use_where'] = 'Les actualitzacions no estan permeses a no ser que incloguin la cláusula "where".';
$lang['db_del_must_use_where'] = 'Les borrades no estan permeses a no ser que incloguin la cláusula "where" o "like".';
$lang['db_field_per am_missing'] = 'Per a obtenir camps fa falta el nom de la taula com a parámetre.';
$lang['db_unsupported_function'] = 'Aquesta característica no está disponible per a la base de dades que estas fent servir.';
$lang['db_transaction_failure'] = 'Ha fallat la transacció: Rollback realitzat.';
$lang['db_unable_to_drop'] = 'No s\'ha pogut borrar la base de dades especificada.';
$lang['db_unsupported_feature'] = 'Característica no soportada de la plataforma de bases de dades que estas fent servir.';
$lang['db_unsupported_compression'] = 'El format de compressió escollit no está soportat per el servidor.';
$lang['db_filepath_error'] = 'No s\'han pogut escriure les dades a la ruta d\'arxiu especificada.';
$lang['db_invalid_cache_path'] = 'La ruta de la caché introduïda no és válida o escrivible.';
$lang['db_table_name_required'] = 'Es necessita un nom de taula per a aquesta operació.';
$lang['db_column_name_required'] = 'Es necessita un nom de columna per a aquesta operació.';
$lang['db_column_definition_required'] = 'Es necessita una definició de columna per a aquesta operació.';
$lang['db_unable_to_set_charset'] = 'No s\'ha pogut fixar a la conexió el conjunt de caràcters: %s';
$lang['db_error_heading'] = 'Hi ha hagut un error amb la base de dades';

/* End of file db_lang.php */
/* Location: ./application/language/catalan/db_lang.php */