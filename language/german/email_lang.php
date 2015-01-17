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

$lang['email_must_be_array'] = 'Die Methode zur Überprüfung der E-Mail muss in einem Array übergeben werden.';
$lang['email_invalid_address'] = 'Ungültige E-Mail-Adresse: %s';
$lang['email_attachment_missing'] = 'Der folgende E-Mail-Anhang konnte nicht gefunden werden: %s';
$lang['email_attachment_unreadable'] = 'Der folgende Anhang konnte nicht geöffnet werden: %s';
$lang['email_no_recipients'] = 'Sie müssen mindestens einen der folgenden Empfänger angeben: To, Cc, oder Bcc';
$lang['email_send_failure_phpmail'] = 'Die E-Mail konnte mit PHP mail() nicht gesendet werden. Ihr Server ist offenbar nicht konfiguriert, um mit dieser Methode E-Mails zu versenden.';
$lang['email_send_failure_sendmail'] = 'Die E-Mail konnte mit PHP Sendmail nicht gesendet werden. Der Server ist offenbar nicht konfiguriert, um mit dieser Methode E-Mails zu versenden.';
$lang['email_send_failure_smtp'] = 'E-Mail konnte mit PHP SMTP nicht gesendet werden. Der Server ist offenbar nicht konfiguriert, um mit dieser Methode E-Mails zu versenden.';
$lang['email_sent'] = 'Ihre Nachricht wurde erfolgreich über das folgenden Protokoll verschickt: %s';
$lang['email_no_socket'] = 'Es konnte keine Socket-Verbindung zu Sendmail hergestellt werden. Bitte überprüfen Sie Ihre Einstellungen.';
$lang['email_no_hostname'] = 'Sie haben keine Angaben zum SMTP-Server vorgenommen.';
$lang['email_smtp_error'] = 'Der folgenden SMTP-Fehler ist aufgetreten: %s';
$lang['email_no_smtp_unpw'] = 'Fehler: Sie müssen einen SMTP Usernamen und ein Passwort angeben.';
$lang['email_failed_smtp_login'] = 'Das Senden des Kommandos AUTH LOGIN ist fehlgeschlagen. Fehler: %s';
$lang['email_smtp_auth_un'] = 'Der angegebene  Username konnte nicht authentifiziert werden. Fehler: %s';
$lang['email_smtp_auth_pw'] = 'Das angegebene Passwort konnte nicht authentifiziert werden. Fehler: %s';
$lang['email_smtp_data_failure'] = 'Die Daten konnten nicht gesendet werden: %s';
$lang['email_exit_status'] = 'Abbruch Status-Code: %s';

/* End of file email_lang.php */
/* Location: ./application/language/german/email_lang.php */