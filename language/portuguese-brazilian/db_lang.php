<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author	CodeIgniter community
 * @copyright	Copyright (c) 2014-2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str']     = 'Não foi possível determinar as configurações do Banco de Dados com base no arquivo de configuração.';
$lang['db_unable_to_connect']          = 'Não foi possível conectar ao servidor de Banco de Dados usando as configurações fornecidas.';
$lang['db_unable_to_select']           = 'Não foi possível selecionar o Banco de Dados especificado: %s';
$lang['db_unable_to_create']           = 'Não é possível criar o Banco de Dados especificado: %s';
$lang['db_invalid_query']              = 'A consulta que você enviou não é válida.';
$lang['db_must_set_table']             = 'Você precisa definir alguma tabela do Banco de Dados para realizar sua consulta.';
$lang['db_must_use_set']               = 'Você precisa usar o método "set" para atualizar um registro.';
$lang['db_must_use_index']             = 'Você precisa especificar um índice na busca de registros para atualizações em lote.';
$lang['db_batch_missing_index']        = 'Uma ou mais linhas apresentadas para atualização em lote está faltando o índice especificado.';
$lang['db_must_use_where']             = 'Não são permitidas atualizações sem conter ao menos uma cláusula "where".';
$lang['db_del_must_use_where']         = 'Exclusões só serão permitidas se ouver uma cláusula "where" ou "like".';
$lang['db_field_param_missing']        = 'Para buscar campos é necessário o parâmetro com o nome da tabela.';
$lang['db_unsupported_function']       = 'Este recurso não está disponível para o Banco de Dados você está usando.';
$lang['db_transaction_failure']        = 'Falha na transação: Reversão realizada.';
$lang['db_unable_to_drop']             = 'Não foi possível excluir o Banco de Dados especificado.';
$lang['db_unsuported_feature']         = 'Este recurso não é suportado pela plataforma de Banco de Dados em uso.';
$lang['db_unsuported_compression']     = 'O formato para compressão de arquivos que você escolheu não é suportado pelo seu servidor.';
$lang['db_filepath_error']             = 'Não foi possível gravar os dados no arquivo indicado.';
$lang['db_invalid_cache_path']         = 'O caminho da pasta de "cache" informado é inválido ou não tem permissão de escrita.';
$lang['db_table_name_required']        = 'É necessário informar o nome da tabela para executar esta operação.';
$lang['db_column_name_required']       = 'É necessário informar o nome da coluna para executar esta operação.';
$lang['db_column_definition_required'] = 'É necessário definir a coluna para executar esta operação.';
$lang['db_unable_to_set_charset']      = 'Não foi possível definir o conjunto de caracteres da conexão do cliente: %s';
$lang['db_error_heading']              = 'Ocorreu um erro de Banco de Dados';
