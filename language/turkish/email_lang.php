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

$lang['email_must_be_array']            = 'Email doğrulama metoduna bir dizi verilmeli.';
$lang['email_invalid_address']          = 'Geçersiz email adresi: %s';
$lang['email_attachment_missing']       = 'Email eklentisi bulunamıyor: %s';
$lang['email_attachment_unreadable']    = 'Email eklentisi açılamıyor: %s';
$lang['email_no_from']                  = '"From" başlığı olmadan email gönderilemez.';
$lang['email_no_recipients']            = 'Alıcıları yazmalısınız: To, Cc, or Bcc';
$lang['email_send_failure_phpmail']     = 'PHP mail() fonksiyonu ile email gönderilemiyor. Sunucunuz bu metod ile email göndermeye ayarlanmamış olabilir.';
$lang['email_send_failure_sendmail']    = 'PHP Sendmail ile email gönderilemiyor. Sunucunuz bu metod ile email göndermeye ayarlanmamış olabilir.';
$lang['email_send_failure_smtp']        = 'PHP SMTP ile email gönderilemiyor. Sunucunuz bu metod ile email göndermeye ayarlanmamış olabilir.';
$lang['email_sent']                     = 'Mesajınız %s protokolü kullanılarak başarıyla gönderildi.';
$lang['email_no_socket']                = 'Sendmail soketi açılamıyor. Lütfen ayarlarınızı kontrol ediniz.';
$lang['email_no_hostname']              = 'SMTP sunucu adı belirtmelisiniz.';
$lang['email_smtp_error']               = 'SMTP hatası: %s';
$lang['email_no_smtp_unpw']             = 'Hata: SMTP kullanıcı adı ve şifresi belirtilmeli.';
$lang['email_failed_smtp_login']        = 'AUTH LOGIN komutu gönderilemedi. Hata: %s';
$lang['email_smtp_auth_un']             = 'Kullanıcı adı geçersiz. Hata: %s';
$lang['email_smtp_auth_pw']             = 'Şifre geçersiz. Hata: %s';
$lang['email_smtp_data_failure']        = 'Veriler gönderilemedi: %s';
$lang['email_exit_status']              = 'Çıkış durum kodu: %s';

/* End of file email_lang.php */
/* Location: ./application/language/turkish/email_lang.php */