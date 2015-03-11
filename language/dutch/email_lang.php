<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author	CodeIgniter community
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @copyright	Pieter Krul
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 */
defined('BASEPATH') OR exit('Directe toegang tot scripts is niet toegestaan');

$lang['email_must_be_array']		= 'De validatiemethode voor email heeft er een array bij nodig.';
$lang['email_invalid_address']		= 'De opgegeven waarde is geen geldig e-mailadres: %s';
$lang['email_attachment_missing']	= 'Het lukt niet om de bijlage bij dit bericht te vinden: %s';
$lang['email_attachment_unreadable']	= 'De bijlage kan niet worden gelezen: %s';
$lang['email_no_from']			= 'Email kan niet verstuurd worden zonder "From"-header.';
$lang['email_no_recipients']		= 'Ontvangers (Naar, Cc, of Bcc) zijn verplicht.';
$lang['email_send_failure_phpmail']	= 'Het lukt niet om de email te versturen met PHP mail(). Deze server zou wel eens een andere methode gebruiken om berichten te sturen.';
$lang['email_send_failure_sendmail']	= 'Het lukt niet om de email te versturen met PHP Sendmail. Deze server zou wel eens een andere methode gebruiken om berichten te sturen.';
$lang['email_send_failure_smtp']	= 'Het lukt niet om de email te versturen met PHP SMTP.  Deze server zou wel eens een andere methode gebruiken om berichten te sturen.';
$lang['email_sent']			= 'Het bericht is verstuurd, via het volgende protocol: %s';
$lang['email_no_socket']		= 'Het lukt niet om een socket naar Sendmail te openen.  Controleer instellingen.';
$lang['email_no_hostname']		= 'Specificeer een SMTP-hostnaam.';
$lang['email_smtp_error']		= 'Tegengehouden door een SMTP-foutmelding: %s';
$lang['email_no_smtp_unpw']		= 'Fout: geef een SMTP-gebruikersnaam met wachtwoord op.';
$lang['email_failed_smtp_login']	= 'De "AUTH LOGIN"-opdracht gaf een foutmelding bij het versturen: %s';
$lang['email_smtp_auth_un']		= 'Bij het authenticeren gaf de gebruikersnaam een foutmelding: %s';
$lang['email_smtp_auth_pw']		= 'Bij het authenticeren gaf het wachtwoord een foutmelding:  %s';
$lang['email_smtp_data_failure']	= 'Het lukt niet om de data te versturen: %s';
$lang['email_exit_status']		= 'Exit statuscode: %s.';