<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author	CodeIgniter community
 * @copyright	Copyright (c) 2014-2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'การตรวจสอบความถูกต้องของอีเมลจะรับค่าเป็นอาร์เรย์';
$lang['email_invalid_address'] = 'ที่อยู่อีเมลไม่ถูกต้อง: %s';
$lang['email_attachment_missing'] = 'ไม่พบเอกสารแนบอีเมลต่อไปนี้:% s';
$lang['email_attachment_unreadable'] = 'ไม่สามารถเปิดเอกสารแนบนี้ได้: %s';
$lang['email_no_from'] = 'ไม่สามารถส่งอีเมลที่ไม่ระบุอีเมลของผู้ส่ง';
$lang['email_no_recipients'] = 'คุณต้องระบุอีเมลผู้รับด้วย: ถึง, สำเนาถึง หรือ สำเนาลับถึง';
$lang['email_send_failure_phpmail'] = 'ไม่สามารถส่งอีเมลโดยใช้ PHP mail(). เซิร์ฟเวอร์ของคุณอาจไม่ได้รับการตั้งค่าให้ทำการส่งอีเมลด้วยวิธีนี้.';
$lang['email_send_failure_sendmail'] = 'ไม่สามารถส่งอีเมลโดยใช้ PHP Sendmail. เซิร์ฟเวอร์ของคุณอาจไม่ได้รับการตั้งค่าให้ทำการส่งอีเมลด้วยวิธีนี้.';
$lang['email_send_failure_smtp'] = 'ไม่สามารถส่งอีเมลโดยใช้ PHP SMTP. เซิร์ฟเวอร์ของคุณอาจไม่ได้รับการตั้งค่าให้ทำการส่งอีเมลด้วยวิธีนี้.';
$lang['email_sent'] = 'ข้อความของคุณถูกส่งออกเรียบร้อยแล้วด้วยโปรโตคอลนี้: %s';
$lang['email_no_socket'] = 'ไม่สามารถทำการเปิด Socket เพื่อใช้งาน Sendmail. กรุณาตรวจสอบการตั้งค่า';
$lang['email_no_hostname'] = 'คุณไม่ได้ระบุ SMTP hostname.';
$lang['email_smtp_error'] = 'เกิดข้อผิดพลาดของ SMTP ดังต่อไปนี้: %s';
$lang['email_no_smtp_unpw'] = 'ผิดพลาด: คุณต้องกำหนดชื่อผู้ใช้งาน และ รหัสผ่าน ของ SMTP';
$lang['email_failed_smtp_login'] = 'การส่งคำสั่ง AUTH LOGIN ล้มเหลว. ข้อผิดพลาด: %s';
$lang['email_smtp_auth_un'] = 'การยืนยันชื่อผู้ใช้งานล้มเหลว. ข้อผิดพลาด: %s';
$lang['email_smtp_auth_pw'] = 'การยืนยันรหัสผ่านล้มเหลว. ข้อผิดพลาด: %s';
$lang['email_smtp_data_failure'] = 'ไม่สามารถส่งข้อมูล: %s';
$lang['email_exit_status'] = 'จบการทำงานด้วยรหัสสถานะ: %s';
