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

$lang['email_must_be_array'] = 'يجب تمرير مصفوفة إلى دالة التحقق من البريد الإلكتروني.';
$lang['email_invalid_address'] = 'عنوان بريد إلكتروني خاطيء: %s';
$lang['email_attachment_missing'] = 'غير قادر على إيجاد الملف المرفق: %s';
$lang['email_attachment_unreadable'] = 'غير قاد على فتح الملف المرفق: %s';
$lang['email_no_recipients'] = 'يجب إضافة مستقبلين: To, Cc, or Bcc';
$lang['email_send_failure_phpmail'] = 'غير قادر على الإرسال بإستخدام PHP mail(). قد يكون الخادم غير معد للإرسال بإستخدام هذه الطريقة.';
$lang['email_send_failure_sendmail'] = 'غير قادر على الإرسال بإستخدام PHP Sendmail. قد يكون الخادم غير معد للإرسال بإستخدام هذه الطريقة.';
$lang['email_send_failure_smtp'] = 'غير قادر على الإرسال بإستخدام PHP SMTP. قد يكون الخادم غير معد للإرسال بإستخدام هذه الطريقة.';
$lang['email_sent'] = 'تم إرسال الرسالة بنجاح بإستخدام البروتوكول التالي: %s';
$lang['email_no_socket'] = 'غير قادر على فتح إتصال مع Sendmail. الرجاء التأكد من الإعدادات.';
$lang['email_no_hostname'] = 'لم تحدد إسم المضيف لـ SMTP.';
$lang['email_smtp_error'] = 'خطأ SMTP حدث: %s';
$lang['email_no_smtp_unpw'] = 'خطأ: يجب تحديد إسم مستخدم وكلمة مرور لـ SMTP.';
$lang['email_failed_smtp_login'] = 'فشل في إرسال أمر AUTH LOGIN command. الخطأ: %s';
$lang['email_smtp_auth_un'] = 'فشل في التحقق من إسم المستخدم. الخطأ: %s';
$lang['email_smtp_auth_pw'] = 'فشل في التحقق من كلمة مرور. الخطأ: %s';
$lang['email_smtp_data_failure'] = 'غير قادر على إرسال البيانات: %s';
$lang['email_exit_status'] = 'رمز الخطأ: %s';

/* End of file email_lang.php */
/* Location: ./application/language/arabic/email_lang.php */
