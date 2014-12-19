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

$lang['db_invalid_connection_str']      = 'Definições de ligação à base de dados insuficientes, com base na string que introduziu.';
$lang['db_unable_to_connect']           = 'Incapaz de fazer uma ligação ao servidor da base de dados, com base nas definições que forneceu.';
$lang['db_unable_to_select']            = 'Incapaz de selecionar a base de dados indicada: %s';
$lang['db_unable_to_create']            = 'Incapaz de criar a base de dados indicada: %s';
$lang['db_invalid_query']               = 'A query que introduziu não é válida.';
$lang['db_must_set_table']              = 'Tem que especificar a tabela da base dados à qual quer fazer a query.';
$lang['db_must_use_set']                = 'Tem que usar o método "set" para atualizar uma entrada.';
$lang['db_must_use_index']              = 'Tem que indicar o index que quer comparar nas atualizações em massa.';
$lang['db_batch_missing_index']         = 'Falta o index a uma ou mais linhas submetidas para a atualização em massa.';
$lang['db_must_use_where']              = 'Só é possível fazer atualizações se tiver a cláusula "where".';
$lang['db_del_must_use_where']          = 'Só é possível apagar se tiver a cláulusa "where" ou "like".';
$lang['db_field_param_missing']         = 'É necessário o nome da tabela como um parâmetro para conseguir ir buscar os campos.';
$lang['db_unsupported_function']        = 'Esta funcionalidade não está disponível para a base de dados que está a usar.';
$lang['db_transaction_failure']         = 'Falha de transação. Foi reposto o estado anterior (rollback).';
$lang['db_unable_to_drop']              = 'Não é possível apagar a base de dados indicada';
$lang['db_unsupported_feature']         = 'Esta funcionalidade não é suportada pela plataforma de base de dados que está a usar.';
$lang['db_unsupported_compression']     = 'O formato de compressão de ficheiros que escolheu não é suportado pelo seu servidor.';
$lang['db_filepath_error']              = 'Incapaz de escrever dados no caminho de ficheiro que indicou.';
$lang['db_invalid_cache_path']          = 'O cainho da cache que indicou não é válido ou não é tem permissões de escrita.';
$lang['db_table_name_required']         = 'É necessário um nome de tabela para essa operação.';
$lang['db_column_name_required']        = 'É necessário um nome de coluna para essa operação.';
$lang['db_column_definition_required']  = 'É necessário uma definição de coluna para essa operação.';
$lang['db_unable_to_set_charset']       = 'Incapaz de definir o set de caratéres da ligação ao cliente: %s';
$lang['db_error_heading']               = 'Ocorreu um erro na base de dados';

/* End of file db_lang.php */
/* Location: ./application/language/portuguese/db_lang.php */