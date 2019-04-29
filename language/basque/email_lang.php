<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author	CodeIgniter community
 * @author	Ander Goñi
 * @copyright	Copyright (c) 2014-2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = "Eposta balidazio metodoak array bat behar du.";
$lang['email_invalid_address'] = "Eposta helbide baliogabea: %s";
$lang['email_attachment_missing'] = "Ezin da aurkitu ondorengo eposta eranskina: %s";
$lang['email_attachment_unreadable'] = "Ezin da ireki ondorengo eranskin hau: %s";
$lang['email_no_from'] = 'No se puede enviar un email sin la cabecera "From".';
$lang['email_no_recipients'] = "Hartzaileak falta dira: Nori, Kopia edo Ezkutuko kopia";
$lang['email_send_failure_phpmail'] = "Ezin da epostarik bidali PHPren mail() bidez. Agian zure zerbitzaria ez dago prestatuta epostak modu honetan bidaltzeko.";
$lang['email_send_failure_sendmail'] = "Ezin da epostarik bidali PHP Sendmail erabiliz. Agian zure zerbitzaria ez dago prestatuta epostak modu honetan bidaltzeko.";
$lang['email_send_failure_smtp'] = "Ezin da epostarik bidali PHP SMTP erabiliz. Agian zure zerbitzaria ez dago prestatuta epostak modu honetan bidaltzeko.";
$lang['email_sent'] = "Zure mezua ongi bidali da honako protokolo hau erabiliz: %s";
$lang['email_no_socket'] = "Ezin da Sendmail-era socketik zabaldu. Mesedez, egiaztatu ezarpeank.";
$lang['email_no_hostname'] = "Ez duzu SMTP ostalari izenik zehaztu.";
$lang['email_smtp_error'] = "Ondorengo SMTP errore eman da: %s";
$lang['email_no_smtp_unpw'] = "Errorea: SMTP erabiltaile eta pasahitzak zehaztu behar dituzu.";
$lang['email_failed_smtp_login'] = "Ezin dut AUTH LOGIN komandoa bidali. Errorea: %s";
$lang['email_smtp_auth_un'] = "Huts egin du erabiltzailea autentikatzeak. Errorea: %s";
$lang['email_smtp_auth_pw'] = "Huts egin du pasahitza autentikatzeak. Errorea: %s";
$lang['email_smtp_data_failure'] = "Ezin da daturik bidali: %s";
$lang['email_exit_status'] = "Irteera egoera-kodea: %s";
