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

$lang['email_must_be_array'] = 'O método de validação de email deve ser passado um array.';
$lang['email_invalid_address'] = 'Endereço de email inválido: %s';
$lang['email_attachment_missing'] = 'Não é possível localizar o seguinte arquivo em anexo: %s';
$lang['email_attachment_unreadable'] = 'Não é possível abrir o anexo: %s';
$lang['email_no_from'] = 'Não é possivel enviar email sem email de origem.';
$lang['email_no_recipients'] = 'Você deve incluir os recipientes: To(para), Cc(cópia), ou Bcc(cópia oculta)';
$lang['email_send_failure_phpmail'] = 'Não é possível enviar email usando PHP mail().  Seu servidor talvez não esteja configurado para enviar email usando este método.';
$lang['email_send_failure_sendmail'] = 'Não é possível enviar email usando PHP Sendmail.  Seu servidor talvez não esteja configurado para enviar email usando este método.';
$lang['email_send_failure_smtp'] = 'Não é possível enviar email usando PHP SMTP.  Seu servidor talvez não esteja configurado para enviar email usando este método.';
$lang['email_sent'] = 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: %s';
$lang['email_no_socket'] = 'Não é possível abrir um socket para o Sendmail. Por favor verifique as configurações.';
$lang['email_no_hostname'] = 'Você não especificou um endereço SMTP.';
$lang['email_smtp_error'] = 'Os seguintes erros SMTP ocorreram: %s';
$lang['email_no_smtp_unpw'] = 'Erro: Você deve atribuir um usuário e senha do SMTP.';
$lang['email_failed_smtp_login'] = 'Falha ao enviar comando AUTH LOGIN. Erro: %s';
$lang['email_smtp_auth_un'] = 'Falha ao autenticar usuário. Erro: %s';
$lang['email_smtp_auth_pw'] = 'Falha ao autenticar senha. Erro: %s';
$lang['email_smtp_data_failure'] = 'Não foi possível enviar dados: %s';
$lang['email_exit_status'] = 'Código de status de saída: %s';

/* End of file email_lang.php */
/* Location: ./application/language/portuguese-brazilian/email_lang.php */