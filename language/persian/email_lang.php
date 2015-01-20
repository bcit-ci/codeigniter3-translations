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

$lang['email_must_be_array'] = 'شما باید یک آرایه به متود Email Validation بدهید';
$lang['email_invalid_address'] = 'پست الکترونیکی غلط: %s';
$lang['email_attachment_missing'] = 'عدم موفقیت در مشخص کردن پیوست این ایمیل: %s';
$lang['email_attachment_unreadable'] = 'عدم موفقیت در باز کردن این پیوست: %s';
$lang['email_no_from'] = 'ارسال ایمیل بدون هدر "From"????!!!';
$lang['email_no_recipients'] = 'شما باید گیرنده ها را مشخص کنید: To, Cc, یا Bcc';
$lang['email_send_failure_phpmail'] = 'عدم موفقیت در ارسال ایمیل توسط تابع mail(). شاید سرور شما برای ارسال ایمیل از این طریق تنظزیم نشده است';
$lang['email_send_failure_sendmail'] = 'عدم موفقیت در ارسال ایمیل توسط  Sendmail. شاید سرور شما برای ارسال ایمیل از این طریق تنظیم نشده است';
$lang['email_send_failure_smtp'] = 'عدم موفقیت در ارسال ایمیل توسط  SMTP. شاید سرور شما برای ارسال ایمیل از این طریق تنظیم نشده است';
$lang['email_sent'] = 'پیام شما با موفقیت توسط پروتکل مشخص شده ارسال شد: %s';
$lang['email_no_socket'] = 'عدم موفقیت در باز کردن یک سوکت جدید برای Sendmail. لطفا تنظیمات را چک کنید';
$lang['email_no_hostname'] =' شما hostname را برای استفاده از SMTP مشخص نکرده اید';
$lang['email_smtp_error'] = 'خطایی در SMTP روبرو رخ داده است: %s';
$lang['email_no_smtp_unpw'] = 'خطا: شما باید یه نام کاربری و رمز عبور برای SMTP تعریف کنید.';
$lang['email_failed_smtp_login'] = 'عدم موفقیت برای ارسال فرمان AUTH LOGIN . خطا: %s';
$lang['email_smtp_auth_un'] = 'خطا در اعتبارسنجی username. خطا: %s';
$lang['email_smtp_auth_pw'] = 'خطا در اعتبارسنجی password. خطا: %s';
$lang['email_smtp_data_failure'] = 'عدم موفقیت در ارسال داده ها: %s';
$lang['email_exit_status'] = 'کد وضعیت خروج: %s';

/* End of file email_lang.php */
/* Location: ./application/language/persian/email_lang.php */