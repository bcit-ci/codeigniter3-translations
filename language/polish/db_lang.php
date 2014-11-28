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
 * @package     CodeIgniter
 * @author      EllisLab Dev Team
 * @copyright   Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright   Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license     http://opensource.org/licenses/MIT  MIT License
 * @link        http://codeigniter.com
 * @since       Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str']      = 'Nie można ustalić ustawień bazy danych na podstawie konfiguracji połączenia.';
$lang['db_unable_to_connect']           = 'Nie można połączyć się z serwerem bazy danych używając podanych ustawień.';
$lang['db_unable_to_select']            = 'Nie można wybrać następującej bazy danych: %s';
$lang['db_unable_to_create']            = 'Nie można utworzyć następującej bazy dancyh: %s';
$lang['db_invalid_query']               = 'Zapytanie jest nieprawidłowe.';
$lang['db_must_set_table']              = 'Musisz wybrać tabelę z bazy danych, dla której ma zostać wykonane zapytanie.';
$lang['db_must_use_set']                = 'Musisz użyć metody "set" by uaktualnić wpis.';
$lang['db_must_use_index']              = 'Musisz wyznaczyć indeks dla przetwarzania wsadowego.';
$lang['db_batch_missing_index']         = 'Jeden lub więcej wierszy wysłanych do przetwarzania wsadowego jest nieprawidłowy, albo nie ma ustalonego indeksu.';
$lang['db_must_use_where']              = 'Polecenia "Update" nie są dozwolone dopóki nie posiadają klauzuli "where".';
$lang['db_del_must_use_where']          = 'Polecenia "Delete" nie są dozwolone dopóki nie posiadają klauzuli "where" albo "like".';
$lang['db_field_param_missing']         = 'Do tej operacji wymagana jest nazwa tabeli jako parametr.';
$lang['db_unsupported_function']        = 'Ta funkcjonalność jest niedostępna dla bazy danych której używasz.';
$lang['db_transaction_failure']         = 'Błąd transakcji. Wykonano rollback.';
$lang['db_unable_to_drop']              = 'Nie można usunąć danej bazy danych.';
$lang['db_unsuported_feature']          = 'Platforma bazy danych, z której korzystasz nie obsługuje tej funkcjonalności.';
$lang['db_unsuported_compression']      = 'Format kompresji plików, który został wybrany nie jest obsługiwany przez serwer.';
$lang['db_filepath_error']              = 'Nie można zapisać danych do ścieżki która została podana.';
$lang['db_invalid_cache_path']          = 'Ścieżka cache jest nieprawidłowa lub nie posiada praw zapisu.';
$lang['db_table_name_required']         = 'Nazwa tabeli jest wymagana do wykonania tej operacji.';
$lang['db_column_name_required']        = 'Nazwa kolumny jest wymagana do wykonania tej operacji.';
$lang['db_column_definition_required']  = 'Definicja kolumny jest wymagana do wykonania tej operacji.';
$lang['db_unable_to_set_charset']       = 'Nie można ustanowić połączenia w kodowaniu znaków: %s';
$lang['db_error_heading']               = 'Wystąpił błąd bazy danych.';

/* End of file db_lang.php */
/* Location: ./application/language/polish/db_lang.php */