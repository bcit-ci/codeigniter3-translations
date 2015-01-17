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

$lang['email_must_be_array'] = '이메일 체크함수는 반드시 배열이어야 합니다.';
$lang['email_invalid_address'] = '유효하지 않은 이메일 입니다: %s';
$lang['email_attachment_missing'] = '첨부파일 경로를 확인하세요: %s';
$lang['email_attachment_unreadable'] = '첨부파일을 열 수 없습니다: %s';
$lang['email_no_from'] = '"발신자" 정보가 없어 메일을 발송할 수 없습니다.';
$lang['email_no_recipients'] = '반드시 하나이상의 정보가 있어야 합니다: 수신자, 참조, 혹은 숨은참조';
$lang['email_send_failure_phpmail'] = 'PHP mail()로 발송할 수 없습니다. 서버 환경설정을 확인하시어 해당 함수가 사용 가능한지 확인하세요.';
$lang['email_send_failure_sendmail'] = 'PHP Sendmail로 발송할 수 없습니다. 서버 환경설정을 확인하시어 해당 함수가 사용 가능한지 확인하세요.';
$lang['email_send_failure_smtp'] = 'PHP SMTP로 발송할 수 없습니다. 서버 환경설정을 확인하시어 해당 함수가 사용 가능한지 확인하세요.';
$lang['email_sent'] = '다음 프로토콜을 통해 발송하였습니다: %s';
$lang['email_no_socket'] = 'Sendmail 소켓에 연결할 수 없습니다. 환경설정을 확인하세요.';
$lang['email_no_hostname'] = 'SMTP hostname이 필요합니다.';
$lang['email_smtp_error'] = 'SMTP 에서 다음 문제가 발생하였습니다: %s';
$lang['email_no_smtp_unpw'] = '오류: SMTP 아이디와 비밀번호를 확인하세요.';
$lang['email_failed_smtp_login'] = 'SMTP 보안로그인에 실패했습니다: %s';
$lang['email_smtp_auth_un'] = 'SMTP 아이디 인증에 실패했습니다: %s';
$lang['email_smtp_auth_pw'] = 'SMTP 비밀번호 인증에 실패했습니다: %s';
$lang['email_smtp_data_failure'] = 'SMTP 다음 정보를 전송하는데 실패했습니다: %s';
$lang['email_exit_status'] = 'Exit status code: %s';

/* End of file email_lang.php */
/* Location: ./application/language/korean/email_lang.php */