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

$lang['email_must_be_array']         = "La méthode de validation d'email n'accepte que les tableaux associatifs (array).";
$lang['email_invalid_address']       = "Adresse email invalide : %s";
$lang['email_attachment_missing']    = "Impossible de localiser le fichier joint suivant : %s";
$lang['email_attachment_unreadable'] = "Impossible d'ouvrir ce fichier joint : %s";
$lang['email_no_from']               = "Impossible d'envoyer un email sans en-tête \"From\".";
$lang['email_no_recipients']         = "Vous devez spécifier des destinataires: To, Cc, ou Bcc";
$lang['email_send_failure_phpmail']  = "Impossible d'envoyer des emails avec la fonction mail() de PHP. Votre serveur ne doit pas être configuré pour pouvoir utiliser cette méthode.";
$lang['email_send_failure_sendmail'] = "Impossible d'envoyer des emails avec la méthode Sendmail de PHP. Votre serveur ne doit pas être configuré pour pouvoir utiliser cette méthode.";
$lang['email_send_failure_smtp']     = "Impossible d'envoyer des emails avec la méthode SMTP de PHP. Votre serveur ne doit pas être configuré pour pouvoir utiliser cette méthode.";
$lang['email_sent']                  = "Votre message a bien été expédié par le protocole suivant : %s";
$lang['email_no_socket']             = "Impossible d'ouvrir un socket avec Sendmail. Veuillez vérifier la configuration de votre environnement.";
$lang['email_no_hostname']           = "Vous n'avez pas spécificé d'hôte SMTP.";
$lang['email_smtp_error']            = "L'erreur SMTP suivante s'est produite : %s";
$lang['email_no_smtp_unpw']          = "Erreur : Vous devez spécifier un nom d'utilisateur et un mot de passe SMTP.";
$lang['email_failed_smtp_login']     = "Échec lors de l'envoi de la commande AUTH LOGIN. Erreur : %s";
$lang['email_smtp_auth_un']          = "Impossible d'identifier le nom d'utilisateur. Erreur : %s";
$lang['email_smtp_auth_pw']          = "Impossible d'identifier le mot de passe. Erreur : %s";
$lang['email_smtp_data_failure']     = "Impossible d'envoyer les données : %s";
$lang['email_exit_status']           = "Code de retour : %s";

/* End of file email_lang.php */
/* Location: ./application/language/french/email_lang.php */
