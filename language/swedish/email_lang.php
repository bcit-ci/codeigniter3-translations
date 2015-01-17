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

$lang['email_must_be_array']		= 'Metoden för e-postvalidering kräver en matris.';
$lang['email_invalid_address']		= 'Ogiltig e-postadress: %s';
$lang['email_attachment_missing']	= 'Saknar följande bilaga: %s';
$lang['email_attachment_unreadable']	= 'Kunde inte öppna följande bilaga: %s';
$lang['email_no_from']			= 'Saknar avsändare.';
$lang['email_no_recipients']		= 'Saknar mottagare: Till, Kopia eller Dold kopia';
$lang['email_send_failure_phpmail']	= 'Kunde inte skicka med PHP mail(). Kontrollera att servern är konfigurerad för att skicka e-post med denna metod.';
$lang['email_send_failure_sendmail']	= 'Kunde inte skicka med PHP Sendmail. Kontrollera att servern är konfigurerad för att skicka e-post med denna metod.';
$lang['email_send_failure_smtp']	= 'Kunde inte skicka med PHP SMTP. Kontrollera att servern är konfigurerad för att skicka e-post med denna metod.';
$lang['email_sent']			= 'Meddelandet har skickats genom följande protokoll: %s';
$lang['email_no_socket']		= 'Kunde inte få kontakt med Sendmail. Kontrollera konfigurationen.';
$lang['email_no_hostname']		= 'Saknar värdnamn för SMTP.';
$lang['email_smtp_error']		= 'Följande SMTP-fel uppstod: %s';
$lang['email_no_smtp_unpw']		= 'Saknar användarnamn och lösenord för SMTP.';
$lang['email_failed_smtp_login']	= 'Kunde inte skicka kommandot AUTH LOGIN. Felmeddelande: %s';
$lang['email_smtp_auth_un']		= 'Användarnamnet godkändes inte. Felmeddelande: %s';
$lang['email_smtp_auth_pw']		= 'Lösenordet godkändes inte. Felmeddelande: %s';
$lang['email_smtp_data_failure']	= 'Kunde inte skicka data: %s';
$lang['email_exit_status']		= 'Statuskod vid avslut: %s';

/* End of file email_lang.php */
/* Location: ./application/language/swedish/email_lang.php */