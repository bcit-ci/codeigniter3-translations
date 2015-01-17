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

$lang['email_must_be_array'] = 'E-mail 效验方法必须传入一个 Array';
$lang['email_invalid_address'] = '无效的 E-mail 地址： %s';
$lang['email_attachment_missing'] = '无法找到以下的 E-mail 附件： %s';
$lang['email_attachment_unreadable'] = '无法读取以下的 E-mail 附件： %s';
$lang['email_no_from'] = '无法发送没有 "From" 头的 E-mail';
$lang['email_no_recipients'] = 'E-mail 必须包含收件人（To, Cc, or Bcc）';
$lang['email_send_failure_phpmail'] = '无法使用 PHP 的 mail() 函数。  您的服务器设置禁止使用此函数发送 E-mail。';
$lang['email_send_failure_sendmail'] = '无法使用 PHP sendmail。您的服务器设置禁止使用此方法发送 E-mail。';
$lang['email_send_failure_smtp'] = '无法使用 PHP SMTP。您的服务器设置禁止使用此方法发送 E-mail。';
$lang['email_sent'] = 'E-mail 成功发送： %s';
$lang['email_no_socket'] = '无法打开 Socket 发送 E-mail，检查设置。';
$lang['email_no_hostname'] = '没有指定 SMTP 服务器的主机名';
$lang['email_smtp_error'] = '发生错误，SMTP 错误信息为： %s';
$lang['email_no_smtp_unpw'] = '错误：必须指定 SMTP 的用户名及密码。';
$lang['email_failed_smtp_login'] = '发送时 AUTH 命令失败，错误：%s';
$lang['email_smtp_auth_un'] = '用户名认证失败，错误：%s';
$lang['email_smtp_auth_pw'] = '密码认证失败，错误：%s';
$lang['email_smtp_data_failure'] = '无法发送数据：%s';
$lang['email_exit_status'] = '退出状态码：%s';

/* End of file email_lang.php */
/* Location: ./application/language/simplified-chinese/email_lang.php */