<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia Institute of Technology
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
 * @package     CodeIgniter
 * @author      EllisLab Dev Team
 * @copyright   Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright   Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license     http://opensource.org/licenses/MIT  MIT License
 * @link        http://codeigniter.com
 * @since       Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array']            = 'Metoda weryfikacji e-maila musi być przekazana w tablicy.';
$lang['email_invalid_address']          = 'Niepoprawny adres e-mail: %s';
$lang['email_attachment_missing']       = 'Nie można zlokalizować następujących załączników: %s';
$lang['email_attachment_unreadable']    = 'Nie można otworzyć następujących załączników: %s';
$lang['email_no_from']                  = 'Nie można wysłać wiadomości bez nagłówka "From".';
$lang['email_no_recipients']            = 'Należy dodać odbiorców: To, Cc lub Bcc';
$lang['email_send_failure_phpmail']     = 'Nie można wysłać e-maila za pomocą PHP mail(). Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.';
$lang['email_send_failure_sendmail']    = 'Nie można wysłać e-maila za pomocą PHP Sendmail. Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.';
$lang['email_send_failure_smtp']        = 'Nie można wysłać e-maila za pomoc PHP SMTP. Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.';
$lang['email_sent']                     = 'Twój e-mail został pomyślnie wysłany za pomocą metody: %s';
$lang['email_no_socket']                = 'Nie można otworzyć socketu do Sendmail. Proszę sprawdzić ustawienia.';
$lang['email_no_hostname']              = 'Nie podano nazwy hosta SMTP.';
$lang['email_smtp_error']               = 'Wystąpił następujący błąd SMTP: %s';
$lang['email_no_smtp_unpw']             = 'Błąd: Należy podać nazwę użytkownika i hasło SMTP.';
$lang['email_failed_smtp_login']        = 'Błąd przy wysyłaniu komendy AUTH LOGIN. Błąd: %s';
$lang['email_smtp_auth_un']             = 'Błąd autentykacji nazwy użytkownika. Błąd: %s';
$lang['email_smtp_auth_pw']             = 'Błąd autentykacji hasła. Błąd: %s';
$lang['email_smtp_data_failure']        = 'Nie można wysłać danych: %s';
$lang['email_exit_status']              = 'Status kodu wyjścia: %s';

/* End of file email_lang.php */
/* Location: ./application/language/polish/email_lang.php */