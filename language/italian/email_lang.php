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

$lang['email_must_be_array'] = 'Il metodo di validazione delle email deve essere inviato come array.';
$lang['email_invalid_address'] = 'Indirizzo email non valido: %s';
$lang['email_attachment_missing'] = 'Impossibile trovare il seguente allegato dell\'email: %s';
$lang['email_attachment_unreadable'] = 'Impossibile aprire il seguente alleato: %s';
$lang['email_no_from'] = 'Impossibile inviare l\'email senza il campo header "Da".';
$lang['email_no_recipients'] = 'E\' necessario includere le informazioni: A, Cc, or Ccn';
$lang['email_send_failure_phpmail'] = 'Impossibile inviare una mail utilizzando la funzione PHP mail(). Il server sembra non essere configurato per inviare mail utilizzando questo metodo.';
$lang['email_send_failure_sendmail'] = 'Impossibile inviare una mail utilizzando la funzione Sendmail(). Il server sembra non essere configurato per inviare mail utilizzando questo metodo.';
$lang['email_send_failure_smtp'] = 'Impossibile inviare una mail utilizzando la funzione PHP SMTP. Il server sembra non essere configurato per inviare mail utilizzando questo metodo.';
$lang['email_sent'] = 'Il tuo messaggio è stato inviato con successo utilizzando il seguente protocollo: %s';
$lang['email_no_socket'] = 'Impossibile aprire un socket con Sendmail. Controllare i settaggi.';
$lang['email_no_hostname'] = 'Non è stato specificato un hostname SMTP.';
$lang['email_smtp_error'] = 'E\' stato riscontrato il seguente errore SMTP: %s';
$lang['email_no_smtp_unpw'] = 'Errore: occorre assegnare un SMTP username e password.';
$lang['email_failed_smtp_login'] = 'Invio del comando AUTH LOGIN fallito. Errore: %s';
$lang['email_smtp_auth_un'] = 'Autenticazione dell\'username fallita. Errore: %s';
$lang['email_smtp_auth_pw'] = 'Autenticazione della password fallita. Errore: %s';
$lang['email_smtp_data_failure'] = 'Impossibile inviare i dati: %s';
$lang['email_exit_status'] = 'Codice di status di uscita: %s';

/* End of file email_lang.php */
/* Location: ./application/language/italian/email_lang.php */