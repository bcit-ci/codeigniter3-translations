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

$lang['email_must_be_array'] = 'Metoda de validare email trebuie să fie de tip array.';
$lang['email_invalid_address'] = 'Adresa de email nu este validă: %s';
$lang['email_attachment_missing'] = 'Nu s-a putut localiza următorul atașament de email: %s';
$lang['email_attachment_unreadable'] = 'Atașamentul următor nu a putut fi deschis: %s';
$lang['email_no_from'] = 'Nu se poate trimite email fără header-ul "De la".';
$lang['email_no_recipients'] = 'Trebuie să includeți destinatarii: To, Cc, or Bcc';
$lang['email_send_failure_phpmail'] = 'Nu s-a putut trimite email folosind PHP mail(). Este posibil ca server-ul dvs. să nu fie configurat pentru a trimite email-uri folosind această metodă.';
$lang['email_send_failure_sendmail'] = 'Nu s-a putut trimite email folosind PHP Sendmail. Este posibil ca server-ul dvs. să nu fie configurat pentru a trimite email-uri folosind această metodă.';
$lang['email_send_failure_smtp'] = 'Nu s-a putut trimite email folosind PHP SMTP. Este posibil ca server-ul dvs. să nu fie configurat pentru a trimite email-uri folosind această metodă.';
$lang['email_sent'] = 'Mesajul dvs. a fost trimis cu succes folosind următorul protocol: %s';
$lang['email_no_socket'] = 'Nu s-a putut deschide un socket pentru Sendmail. Verificați setările.';
$lang['email_no_hostname'] = 'Nu ați specificat un hostname SMTP.';
$lang['email_smtp_error'] = 'Următoarea eroare SMTP a fost întâlnită: %s';
$lang['email_no_smtp_unpw'] = 'Eroare: Trebuie să atribuiți un nume de utilizator și parolă SMTP.';
$lang['email_failed_smtp_login'] = 'Eroare la trimiterea comenzii AUTH LOGIN. Eroare: %s';
$lang['email_smtp_auth_un'] = 'Autentificarea numelui de utilizator nu a putut fi efectuată. Eroare: %s';
$lang['email_smtp_auth_pw'] = 'Autentificarea parolei nu a putut fi efectuată. Error: %s';
$lang['email_smtp_data_failure'] = 'Datele nu pot fi trimise: %s';
$lang['email_exit_status'] = 'Codul stării de ieșire: %s';

/* End of file email_lang.php */
/* Location: ./application/language/romanian/email_lang.php */