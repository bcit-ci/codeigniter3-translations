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

$lang['email_must_be_array']            = 'É necessário passar um array ao método de validação de email.';
$lang['email_invalid_address']          = 'Endereço de email inválido: %s';
$lang['email_attachment_missing']       = 'Incapaz de encontrar o seguinte anexo de email: %s';
$lang['email_attachment_unreadable']    = 'Incapaz de abrir este anexo: %s';
$lang['email_no_from']                  = 'Não é possível enviar o email sem definir o cabeçalho "From".';
$lang['email_no_recipients']            = 'Tem que definir os destinatários: To, Cc, ou Bcc';
$lang['email_send_failure_phpmail']     = 'Incapaz de enviar o email através do PHP mail(). O seu servidor pode não estar configurado para enviar mails usando este método.';
$lang['email_send_failure_sendmail']    = 'Incapaz de enviar o email através do PHP Sendmail. O seu servidor pode não estar configurado para enviar mails usando este método.';
$lang['email_send_failure_smtp']        = 'Incapaz de enviar o email através do PHP SMTP. O seu servidor pode não estar configurado para enviar mails usando este método.';
$lang['email_sent']                     = 'A sua mensagem foi enviado com sucesso através do seguinte protocolo: %s';
$lang['email_no_socket']                = 'Incapaz de abrir um socket para o Sendmail. Por favor, confira as definições.';
$lang['email_no_hostname']              = 'Não especificou o hostname do SMTP.';
$lang['email_smtp_error']               = 'Foi encontrado o seguinte erro SMTP: %s';
$lang['email_no_smtp_unpw']             = 'Erro: Tem que definir um username e passowrd para o SMTP.';
$lang['email_failed_smtp_login']        = 'Falha no envio do comando AUTH LOGIN. Erro: %s';
$lang['email_smtp_auth_un']             = 'Falha na autenticação de username. Erro: %s';
$lang['email_smtp_auth_pw']             = 'Falha na autenticação da password. Erro: %s';
$lang['email_smtp_data_failure']        = 'Incapaz de enviar dados: %s';
$lang['email_exit_status']              = 'Código do estado de saída: %s';

/* End of file email_lang.php */
/* Location: ./application/language/portuguese/email_lang.php */