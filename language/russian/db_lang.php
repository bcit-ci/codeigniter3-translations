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

$lang['db_invalid_connection_str'] = 'Невозможно определить параметры базы данных на основе строки подключения, которую вы предоставили.';
$lang['db_unable_to_connect'] = 'Невозможно подключиться к серверу базы данных, используя предоставленные параметры.';
$lang['db_unable_to_select'] = 'Невозможно выбрать указанную базу данных: %s';
$lang['db_unable_to_create'] = 'Невозможно создать указанную базу данных: %s';
$lang['db_invalid_query'] = 'Представленный вами запрос является недопустимым.';
$lang['db_must_set_table'] = 'Необходимо указать таблицу базы данных, которая будет использована в вашем запросе.';
$lang['db_must_use_set'] = 'Необходимо использовать метод "set" для обновления запись.';
$lang['db_must_use_index'] = 'Необходимо указать индекс для пакетного обновления.';
$lang['db_batch_missing_index'] = 'Одна или несколько строк представленных для пакетного обновления не содержит указанный индекс.';
$lang['db_must_use_where'] = 'Обновления не допускаются, без указания условия через "where" оператор.';
$lang['db_del_must_use_where'] = 'Удаления не допускаются, без указания условия через "where" или "like" параметр.';
$lang['db_field_param_missing'] = 'Для выборки полей необходимо имя таблицы в качестве параметра.';
$lang['db_unsupported_function'] = 'Эта функция не доступна для используемой базы данных.';
$lang['db_transaction_failure'] = 'Транзакция не удалась: Осуществляется откат.';
$lang['db_unable_to_drop'] = 'Невозможно удалить указанную базу данных.';
$lang['db_unsuported_feature'] = 'Неподдерживаемая особенность платформы базы данных которую вы используете.';
$lang['db_unsuported_compression'] = 'Формат сжатия файлов который вы выбрали не поддерживается вашим сервером.';
$lang['db_filepath_error'] = 'Невозможно записать данные в файл, используя путь который вы указали.';
$lang['db_invalid_cache_path'] = 'Путь до кеш файлов, указанный вами, некорректен или недоступен для записи.';
$lang['db_table_name_required'] = 'Необходимо указать имя таблицы для этой операции.';
$lang['db_column_name_required'] = 'Необходимо указать имя столбца для этой операции.';
$lang['db_column_definition_required'] = 'Указание столбца обязательно для этой операции.';
$lang['db_unable_to_set_charset'] = 'Невозможно установить кодировку соединения: %s';
$lang['db_error_heading'] = 'Ошибка базы данных.';

/* End of file db_lang.php */
/* Location: ./application/language/russian/db_lang.php */