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

$lang['email_must_be_array']         = "O método de validação e-mail requer como parâmetro um array.";
$lang['email_invalid_address']       = "Endereço de e-mail inválido: %s";
$lang['email_attachment_missing']    = "Não foi possível localizar o seguinte anexo: %s";
$lang['email_attachment_unreadable'] = "Não é possível abrir este anexo: %s";
$lang['email_no_from'] = 'Não é possível enviar email sem email de origem.';
$lang['email_no_recipients']         = "Você deve incluir os destinatários: To, Cc, ou Bcc";
$lang['email_send_failure_phpmail']  = "Não foi possível enviar o e-mail usando a função mail() do PHP. Seu servidor pode não estar configurado para enviar mensagens usando esse método.";
$lang['email_send_failure_sendmail'] = "Não foi possível enviar o e-mail usando a função Sendmail do PHP. Seu servidor pode não estar configurado para enviar mensagens usando esse método.";
$lang['email_send_failure_smtp']     = "Não foi possível enviar o e-mail usando a função SMTP do PHP. Seu servidor pode não estar configurado para enviar mensagens usando esse método.";
$lang['email_sent']                  = "Sua mensagem foi enviada com sucesso usando o seguinte protocolo: %s";
$lang['email_no_socket']             = "Não é possível abrir um socket para Sendmail. Por favor, verifique as configurações.";
$lang['email_no_hostname']           = "Você não especificou o nome de host SMTP.";
$lang['email_smtp_error']            = "O seguinte erro SMTP foi encontrado: %s";
$lang['email_no_smtp_unpw']          = "Erro: Você deve definir o nome de usuário e senha do SMTP.";
$lang['email_failed_smtp_login']     = "Falha ao enviar o comando AUTH LOGIN. Erro: %s";
$lang['email_smtp_auth_un']          = "Falha na autenticação do usuário. Erro: %s";
$lang['email_smtp_auth_pw']          = "Falha na autenticação de senha. Erro: %s";
$lang['email_smtp_data_failure']     = "Não é possível enviar os dados: %s";
$lang['email_exit_status']           = "Código de saída: %s";
