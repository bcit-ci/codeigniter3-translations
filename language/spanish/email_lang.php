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

$lang['email_must_be_array'] = 'Debes pasar un array al método de validación de email.';
$lang['email_invalid_address'] = 'Correo electrónico no válido: %s';
$lang['email_attachment_missing'] = 'No ha sido posible encontrar este adjunto: %s';
$lang['email_attachment_unreadable'] = 'No ha sido posible abrir este adjunto: %s';
$lang['email_no_from'] = 'No se puede enviar un email son la cabecera "From".';
$lang['email_no_recipients'] = 'Debes incluir destinatarios: Para, Cc, o Cco';
$lang['email_send_failure_phpmail'] = 'No ha sido posible enviar el correo usando PHP mail(). Tu servidor podría no estar configurado para enviar emails con este método.';
$lang['email_send_failure_sendmail'] = 'No ha sido posible enviar el correo usando PHP Sendmail. Tu servidor podría no estar configurado para enviar emails con este método.';
$lang['email_send_failure_smtp'] = 'No ha sido posible enviar el correo usando PHP SMTP. Tu servidor podría no estar configurado para enviar emails con este método.';
$lang['email_sent'] = 'Tu mensaje ha sido enviado con éxito usando este protocolo: %s';
$lang['email_no_socket'] = 'No ha sido posible abrir un socket a Sendmail. Por favor, comprueba la configuración.';
$lang['email_no_hostname'] = 'No has especificado un servidor SMTP.';
$lang['email_smtp_error'] = 'Se ha encontrado este error SMTP: %s';
$lang['email_no_smtp_unpw'] = 'Error: Debes asignar un usuario y una contraseña SMTP.';
$lang['email_failed_smtp_login'] = 'Fallo al enviar el comando AUTH LOGIN. Error: %s';
$lang['email_smtp_auth_un'] = 'Fallo al autenticar el usuario. Error: %s';
$lang['email_smtp_auth_pw'] = 'Fallo al autenticar la contraseña. Error: %s';
$lang['email_smtp_data_failure'] = 'No ha sido posible enviar los datos: %s';
$lang['email_exit_status'] = 'Código estado al salir: %s';

/* End of file email_lang.php */
/* Location: ./application/language/spanish/email_lang.php */