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

$lang['email_must_be_array'] = 'Ang email validation method ay dapat ipasa bilang array.';
$lang['email_invalid_address'] = 'Hindi wastong email address: %s';
$lang['email_attachment_missing'] = 'Hindi mahanap ang sumusunod na mga email attachment: %s';
$lang['email_attachment_unreadable'] = 'Hindi mabuksan ang attachment na ito: %s';
$lang['email_no_from'] = 'Hindi maaaring magpadala ng mail na walang "From" header.';
$lang['email_no_recipients'] = 'Dapat mong isama ang mga tatanggap: To, Cc, or Bcc';
$lang['email_send_failure_phpmail'] = 'Hindi makapagpadala ng email gamit ang PHP mail(). Ang iyong server ay maaaring hindi naka-configure upang magpadala ng mail gamit ang pamamaraang ito.';
$lang['email_send_failure_sendmail'] = 'Hindi makapagpadala ng email gamit ang PHP Sendmail. Ang iyong server ay maaaring hindi naka-configure upang magpadala ng mail gamit ang pamamaraang ito.';
$lang['email_send_failure_smtp'] = 'Hindi makapagpadala ng email gamit ang PHP SMTP. Ang iyong server ay maaaring hindi naka-configure upang magpadala ng mail gamit ang pamamaraang ito.';
$lang['email_sent'] = 'Ang iyong mensahe ay matagumpay na naipadala gamit ang sumusunod na protocol: %s';
$lang['email_no_socket'] = 'Hindi mabuksan ang isang socket sa Sendmail. Pakisuri ang mga setting.';
$lang['email_no_hostname'] = 'Hindi ka tumukoy ng isang SMTP hostname.';
$lang['email_smtp_error'] = 'Ang sumusunod na SMTP error na naganap: %s';
$lang['email_no_smtp_unpw'] = 'Error: Dapat kang magtalaga ng isang SMTP username at password.';
$lang['email_failed_smtp_login'] = 'Nabigong ipadala ang AUTH LOGIN command. Error: %s';
$lang['email_smtp_auth_un'] = 'Nabigong patotohanan username. Error: %s';
$lang['email_smtp_auth_pw'] = 'Nabigong patotohanan password. Error: %s';
$lang['email_smtp_data_failure'] = 'Hindi makapagpadala ng data: %s';
$lang['email_exit_status'] = 'Exit status code: %s';
