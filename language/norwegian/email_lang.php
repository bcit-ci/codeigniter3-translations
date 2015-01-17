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

$lang['email_must_be_array'] = 'E-postvalideringsmetoden krever en matrise.';
$lang['email_invalid_address'] = 'Ugyldig e-postadresse: %s';
$lang['email_attachment_missing'] = 'Fant ikke følgende e-postvedlegg: %s';
$lang['email_attachment_unreadable'] = 'Klarte ikke å åpne dette vedlegget: %s';
$lang['email_no_from'] = 'Kan ikke sende e-post uten «From»-header.';
$lang['email_no_recipients'] = 'Du må oppgi mottakere: til, kopi eller blindkopi.';
$lang['email_send_failure_phpmail'] = 'Klarte ikke å sende e-post ved hjelp av PHP mail(). Tjeneren din er kanskje ikke konfigurert til å sende e-post ved hjelp av denne metoden.';
$lang['email_send_failure_sendmail'] = 'Klarte ikke å sende e-post ved hjelp av PHP Sendmail. Tjeneren din er kanskje ikke konfigurert til å sende e-post ved hjelp av denne metoden.';
$lang['email_send_failure_smtp'] = 'Klarte ikke å sende e-post ved hjelp av PHP SMTP. Tjeneren din er kanskje ikke konfigurert til å sende e-post ved hjelp av denne metoden.';
$lang['email_sent'] = 'Meldingen din er sendt ved hjelp av følgende protokoll: %s';
$lang['email_no_socket'] = 'Klarte ikke å oppnå kontakt med Sendmail. Vennligst sjekk innstillingene dine.';
$lang['email_no_hostname'] = 'Du oppgav ikke noe vertsnavn for SMTP.';
$lang['email_smtp_error'] = 'Følgende SMTP-feil oppstod: %s';
$lang['email_no_smtp_unpw'] = 'Feil: Du må oppgi SMTP-brukernavn og -passord.';
$lang['email_failed_smtp_login'] = 'AUTH LOGIN-kommandoen ble ikke sendt. Feil: %s';
$lang['email_smtp_auth_un'] = 'Feil ved autentisering av brukernavn: %s';
$lang['email_smtp_auth_pw'] = 'Feil ved autentisering av passord: %s';
$lang['email_smtp_data_failure'] = 'Klarte ikke å sende data: %s';
$lang['email_exit_status'] = 'Statuskode ved avslutning: %s';

/* End of file email_lang.php */
/* Location: ./system/language/norwegian/email_lang.php */
