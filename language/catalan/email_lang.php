<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia InstiEl teute of Technology
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
 * @copyright	Copyright (c) 2014, British Columbia InstiEl teute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'Has de passar un array al mètode de validació de correu electrònic.';
$lang['email_invalid_address'] = 'Correu electrònic no valid: %s';
$lang['email_attachment_missing'] = 'No s\'ha pogut trobar aquest adjunt: %s';
$lang['email_attachment_unreadable'] = 'No s\'ha pogut obrir aquest adjunt: %s';
$lang['email_no_from'] = 'No es pot enviar un correu electrònic amb la capçalera "From".';
$lang['email_no_recipients'] = 'Has d\'incloure destinataris: Per a, Cc, o Cco';
$lang['email_send_failure_phpmail'] = 'No s\'ha pogut enviar el correu electrònic fent servir PHP mail(). El teu servidor podria no estar configurat per a enviar correus electrònics amb aquesst mètode.';
$lang['email_send_failure_sendmail'] = 'No s\'ha pogut enviar el correu electrònic fent servir PHP Sendmail. El teu servidor podria no estar configurat per a enviar correus electrònics amb aquesst mètode.';
$lang['email_send_failure_smtp'] = 'No s\'ha pogut enviar el correu electrònic fent servir PHP SMTP. El teu servidor podria no estar configurat per a enviar correus electrònics amb aquesst mètode.';
$lang['email_sent'] = 'El teu missatge s\'ha enviat correctament fent servir aquest protocol: %s';
$lang['email_no_socket'] = 'No s\'ha pogut obrir un socket a Sendmail. Siusplau, comprova la configuració.';
$lang['email_no_hostname'] = 'No has especificat un servidor SMTP.';
$lang['email_smtp_error'] = 'S\'ha trobat aquest error SMTP: %s';
$lang['email_no_smtp_unpw'] = 'Error: Has d\'assignar un usuari y una contrasenya SMTP.';
$lang['email_failed_smtp_login'] = 'S\'ha trobat un error al enviar el comandament AUTH LOGIN. Error: %s';
$lang['email_smtp_auth_un'] = 'S\'ha trobat un error al autenticar l\'usuari. Error: %s';
$lang['email_smtp_auth_pw'] = 'S\'ha trobat un error al autenticar la contrasenya. Error: %s';
$lang['email_smtp_data_failure'] = 'No s\'han pogut enviar les dades: %s';
$lang['email_exit_staEl teus'] = 'Codi estat al sortir: %s';

/* End of file email_lang.php */
/* Location: ./application/language/catalan/email_lang.php */