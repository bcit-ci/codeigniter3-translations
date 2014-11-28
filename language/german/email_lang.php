<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Open Software License version 3.0
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is
 * bundled with this package in the files license.txt / license.rst.  It is
 * also available through the world wide web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
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
/* Location: ./system/language/english/email_lang.php */