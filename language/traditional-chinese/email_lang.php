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
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'E-mail 驗證方法必須傳入一個 Array';
$lang['email_invalid_address'] = '無效的 E-mail 地址：%s';
$lang['email_attachment_missing'] = '無法找到以下的 E-mail 附件：%s';
$lang['email_attachment_unreadable'] = '無法讀取以下的 E-mail 附件：%s';
$lang['email_no_from'] = '無法傳送沒有 "From" Header的 E-mail';
$lang['email_no_recipients'] = 'E-mail 必須包含收件人（To, Cc, or Bcc）';
$lang['email_send_failure_phpmail'] = '無法使用 PHP 的 mail() 函數  您的伺服器設定禁止使用此函數傳送 E-mail';
$lang['email_send_failure_sendmail'] = '無法使用 PHP sendmail 您的伺服器設定禁止使用此方法傳送 E-mail';
$lang['email_send_failure_smtp'] = '無法使用 PHP SMTP 您的伺服器設定禁止使用此方法傳送 E-mail';
$lang['email_sent'] = 'E-mail 成功傳送： %s';
$lang['email_no_socket'] = '無法打開 Socket 傳送 E-mail，請檢查設定';
$lang['email_no_hostname'] = '沒有指定 SMTP 伺服器的主機名稱';
$lang['email_smtp_error'] = '發生錯誤，SMTP 錯誤資訊為：%s';
$lang['email_no_smtp_unpw'] = '錯誤：必須指定 SMTP 的使用者名稱及密碼';
$lang['email_failed_smtp_login'] = '傳送 AUTH LOING 命令失敗，錯誤：%s';
$lang['email_smtp_auth_un'] = '帳號認證失敗，錯誤：%s';
$lang['email_smtp_auth_pw'] = '密碼認證失敗，錯誤：%s';
$lang['email_smtp_data_failure'] = '無法傳送資料：%s';
$lang['email_exit_status'] = '結束狀態：%s';

/* End of file email_lang.php */
/* Location: ./application/language/traditional-chinese/email_lang.php */