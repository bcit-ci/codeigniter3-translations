<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
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
 * @author	cikov
 * @copyright	Copyright (c) 2021, cikov, opensourcepos.org
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://opensourcepos.org
 * @since	Version 3.1.11
 * @filesource
 */
defined('BASEPATH') OR exit('Nije dozvoljen direktan pristup');

$lang['email_must_be_array'] = 'Metod za validaciju emaila mora biti poslat kao niz.';
$lang['email_invalid_address'] = 'Nepostojeća email adresa: %s';
$lang['email_attachment_missing'] = 'Sledeći prilog e-pošte nije pronađen: %s';
$lang['email_attachment_unreadable'] = 'Nije moguće otvoriti ovaj prilog: %s';
$lang['email_no_from'] = 'Ne može se poslati pošta bez zaglavlja "From".';
$lang['email_no_recipients'] = 'Morate uključiti primaoce: To, Cc, ili Bcc';
$lang['email_send_failure_phpmail'] = 'Nije moguće poslati e-poštu pomoću PHP mail(). Vaš server možda nije konfigurisan za slanje pošte pomoću ove metode.';
$lang['email_send_failure_sendmail'] = 'Nije moguće poslati e-poštu pomoću PHP Sendmaila. Vaš server možda nije konfigurisan za slanje pošte pomoću ove metode.';
$lang['email_send_failure_smtp'] = 'Nije moguće poslati e-poštu korišćenjem PHP SMTP. Vaš server možda nije konfigurisan za slanje pošte pomoću ove metode.';
$lang['email_sent'] = 'Vaša poruka je uspješno poslata korišćenjem sledećeg protokola: %s';
$lang['email_no_socket'] = 'Nemoguće je otvoriti soket za Sendmail. Provjerite podešavanja.';
$lang['email_no_hostname'] = 'Niste podesili ime SMTP hosta.';
$lang['email_smtp_error'] = 'Došlo je do sljedeće SMTP greške: %s';
$lang['email_no_smtp_unpw'] = 'Greška: Morate podesiti SMTP korisničko ime i šifru.';
$lang['email_failed_smtp_login'] = 'Slanje naredbe AUTH LOGIN nije uspjelo. Greška: %s';
$lang['email_smtp_auth_un'] = 'Potvrda identiteta korisničkog imena nije uspjela. Greška: %s';
$lang['email_smtp_auth_pw'] = 'Potvrda identiteta lozinke nije uspjela. Greška: %s';
$lang['email_smtp_data_failure'] = 'Slanje podataka nije uspjelo: %s';
$lang['email_exit_status'] = 'Šifra izlaznog statusa: %s';
