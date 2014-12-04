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

$lang['db_invalid_connection_str'] = 'Não foi possível determinar as configurações do banco de dados baseado na string de conexão que você submeteu.';
$lang['db_unable_to_connect'] = 'Não foi possível conectar com seu banco de dados usando as configurações fornecidas.';
$lang['db_unable_to_select'] = 'Não foi possível selecionar o banco de dados especificado: %s';
$lang['db_unable_to_create'] = 'Não foi possível criar o banco de dados especificado: %s';
$lang['db_invalid_query'] = 'A consulta(query) que você submeteu não é válida.';
$lang['db_must_set_table'] = 'Você deve configurar a tabela em seu banco de dados para ser usada com sua consulta(query).';
$lang['db_must_use_set'] = 'Você deve usar o método "set" para atualizar um registro.';
$lang['db_must_use_index'] = 'Você deve especificar um índice(index) para corresponder com as suas atualizações em lote.';
$lang['db_batch_missing_index'] = 'Uma ou mais linhas enviadas para atualização em lote está faltando o índice(index) especificado.';
$lang['db_must_use_where'] = 'Atualizações(Updates) não são permitidas a menos que exista a clausula "where".';
$lang['db_del_must_use_where'] = 'Exclusões(Deletes) não são permitidos a menos que exista a clausula "where" ou "like".';
$lang['db_field_param_missing'] = 'Para buscar campos requer o nome da tabela como um parâmetro.';
$lang['db_unsupported_function'] = 'Esta funcionalidade não está disponível para o banco de dados que você está usando.';
$lang['db_transaction_failure'] = 'Falha na Transação: Rollback executado.';
$lang['db_unable_to_drop'] = 'Não foi possível deletar(drop) o banco de dados especificado.';
$lang['db_unsuported_feature'] = 'Funcionalidade não suportada no banco de dados que você está usando.';
$lang['db_unsuported_compression'] = 'O formato de compressão de arquivo que você escolheu não é suportado pelo seu servidor.';
$lang['db_filepath_error'] = 'Não foi possível escrever os dados para o arquivo que você enviou.';
$lang['db_invalid_cache_path'] = 'O caminho do cache(cache path) que você enviou não é válido ou gravável.';
$lang['db_table_name_required'] = 'O nome da tabela é obrigatório para esta operação.';
$lang['db_column_name_required'] = 'O nome da coluna é obrigatório para esta operação.';
$lang['db_column_definition_required'] = 'A definição da coluna é obrigatória para esta operação.';
$lang['db_unable_to_set_charset'] = 'Não é possível configurar o character set da conexão cliente: %s';
$lang['db_error_heading'] = 'Um erro no Banco de Dados aconteceu';

/* End of file db_lang.php */
/* Location: ./application/language/portuguese-brazilian/db_lang.php */