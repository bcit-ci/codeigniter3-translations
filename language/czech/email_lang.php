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
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array']         = 'Parametrem validace emailu musí bát pole.';
$lang['email_invalid_address']       = 'Nesprávna emailová adresa: %s';
$lang['email_attachment_missing']    = 'Nepodařilo se nalézt přílohu: %s';
$lang['email_attachment_unreadable'] = 'Nepodařilo se otevřít přílohu: %s';
$lang['email_no_from']               = 'Není možné odeslat  email bez "From" v hlavičce.';
$lang['email_no_recipients']         = 'Je nutné specifikovat alespoň jednoho adresáta: To, Cc, or Bcc';
$lang['email_send_failure_phpmail']  = 'Nepodařilo se odeslat email pomocí mail(). Je možné že není serverem podporována.';
$lang['email_send_failure_sendmail'] = 'Nepodařilo se odeslat email pomocí Sendmail. Je možné že není serverem podporována.';
$lang['email_send_failure_smtp']     = 'Nepodařilo se odeslat email pomocí SMTP. Je možné že není serverem podporována.';
$lang['email_sent']                  = 'Vaše zpráva byla úspěšně odeslána pmocí protokolu: %s';
$lang['email_no_socket']             = 'Nepodařilo se otevřít socket pro Sendmail. Zkontrolujte prosím nastavení';
$lang['email_no_hostname']           = 'Není specifikováno SMTP hostname.';
$lang['email_smtp_error']            = 'Nastal SMTP error: %s';
$lang['email_no_smtp_unpw']          = 'Error: Je nutné poskytnout SMTP přihlašovací jméno a heslo.';
$lang['email_failed_smtp_login']     = 'Nepodařilo se odeslat příkaz AUTH LOGIN. Error: %s';
$lang['email_smtp_auth_un']          = 'Nepodařilo se autentizovat pomocjí přihlašovacího jména. Error: %s';
$lang['email_smtp_auth_pw']          = 'Nepodařilo se autentizovat pomocjí hesla. Error: %s';
$lang['email_smtp_data_failure']     = 'Nemodařilo se odeslat data: %s';
$lang['email_exit_status']           = 'Exit s kódem: %s';

/* End of file email_lang.php */
/* Location: ./application/language/czech/email_lang.php */