<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author	CodeIgniter community
 * @copyright	Copyright (c) 2014-2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'El. laiško tikrinimo metodas turi būti perduotas kaip masyvas.';
$lang['email_invalid_address'] = 'Neteisingas el. pašto adresas: %s';
$lang['email_attachment_missing'] = 'Nepavyksta rasti šio el. laiško priedo: %s';
$lang['email_attachment_unreadable'] = 'Nepavyksta atverti šio priedo: %s';
$lang['email_no_from'] = 'Negalima siųsti el. laiško be „Nuo“ („From“) antraštės.';
$lang['email_no_recipients'] = 'Turite nurodyti gavėjus: „Kam“ („To“), „Kopija“ („Cc“), arba „Nematoma kopija“ („Bcc“)';
$lang['email_send_failure_phpmail'] = 'Nepavyksta išsiųsti el. laiško naudojant PHP mail() funkciją. Gali būti, kad serveris nėra konfigūruotas siųsti laiškus naudojant šį metodą.';
$lang['email_send_failure_sendmail'] = 'Nepavyksta išsiųsti el. laiško naudojant PHP Sendmail. Gali būti, kad serveris nėra konfigūruotas siųsti laiškus naudojant šį metodą.';
$lang['email_send_failure_smtp'] = 'Nepavyksta išsiųsti el. laiško naudojant PHP SMTP. Gali būti, kad serveris nėra konfigūruotas siųsti laiškus naudojant šį metodą.';
$lang['email_sent'] = 'Jūsų pranešimas buvo sėkmingai išsiųstas naudojant šį metodą: %s';
$lang['email_no_socket'] = 'Nepavyksta atverti Sendmail lizdo. Prašome patikrinti nustatymus.';
$lang['email_no_hostname'] = 'Nenurodytas SMTP mazgo vardas.';
$lang['email_smtp_error'] = 'Susidurta su šia SMTP klaida: %s';
$lang['email_no_smtp_unpw'] = 'Klaida: turite priskirti SMTP vartotojo vardą ir slaptažodį.';
$lang['email_failed_smtp_login'] = 'Nepavyko išsiųsti AUTH LOGIN komandos. Klaida: %s';
$lang['email_smtp_auth_un'] = 'Nepavyko autentifikuoti vartotojo vardo. Klaida: %s';
$lang['email_smtp_auth_pw'] = 'Nepavyko autentifikuoti slaptažodžio. Klaida: %s';
$lang['email_smtp_data_failure'] = 'Nepavyksta išsiųsti duomenų: %s';
$lang['email_exit_status'] = 'Išėjimo būklės kodas: %s';
