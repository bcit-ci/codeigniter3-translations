<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author CodeIgniter community
 * @author Muhammad Ali
 * @copyright Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license http://opensource.org/licenses/MIT MIT License
 * @link http://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'ای میل کی تصدیق کا طریقہ کار ایک ایرے میں مھیا کرنا زروری حے.';
$lang['email_invalid_address'] = 'غلط ای میل ایڈریس: %s';
$lang['email_attachment_missing'] = 'مندرجہ ذیل ای میل دستاویز کو تلاش سے قاصر ہے: %s';
$lang['email_attachment_unreadable'] = 'یہ منسلکہ ای میل اٹیچمنت کھولنے کے قابل نہیں: %s';
$lang['email_no_from'] = 'ہیڈر "From" کے بغیر میل نہیں بھیج سکتے.';
$lang['email_no_recipients']		= 'آپ کو مندرجہ ذیل وصول کنندگان شامل ہونا لازمی ہے: To, Cc, or Bcc';
$lang['email_send_failure_phpmail']	= 'ای میل کا استعمال کرتے ہوئے PHP mail() بھیجنے کے قابل نہیں. شاید آپ کا سرور اس طریقے کو استعمال کرنے کی ترتیب نا رکھتا ہو۔';
$lang['email_send_failure_sendmail']	= 'ای میل کا استعمال کرتے ہوئے PHP sendmail بھیجنے کے قابل نہیں. شاید آپ کا سرور اس طریقے کو استعمال کرنے کی ترتیب نا رکھتا ہو۔';
$lang['email_send_failure_smtp']	= 'ای میل کا استعمال کرتے ہوئے PHP SMTP بھیجنے کے قابل نہیں. شاید آپ کا سرور اس طریقے کو استعمال کرنے کی ترتیب نا رکھتا ہو۔';
$lang['email_sent']			= 'آپ کے پیغام کو کامیابی سے مندرجہ ذیل پروٹوکول استعمال کرتے ہوئے بھیج دیا گیا ہے: %s';
$lang['email_no_socket']		= 'Sendmail کا ساکٹ کھولا نہیں جاسکتا۔ سیٹینگز دیکھیے۔';
$lang['email_no_hostname']		= 'آپ کو ایک SMTP کے hostname کی وضاحت کرنی ہے.';
$lang['email_smtp_error']		= 'مندرجہ ذیل SMTP کا نقص سامنے آیا ہے: %s';
$lang['email_no_smtp_unpw']		= 'غلطی: آپ کو ایک SMTP کا کا صارف کا نام اور پاس ورڈ فراہم کرنا ہوگا.';
$lang['email_failed_smtp_login']	= 'AUTH LOGIN کمانڈ بھیجنے میں ناکام. خرابی ہے: %s';
$lang['email_smtp_auth_un']		= 'یوزر نیم کی تصدیق میں ناکام. خرابی ہے: %s';
$lang['email_smtp_auth_pw']		= 'پاس ورڈ کی تصدیق میں ناکام. خرابی ہے: %s';
$lang['email_smtp_data_failure']	= 'ڈیٹا بھیجنے سے قاصر ہے: %s';
$lang['email_exit_status']		= 'باہر نکل جانے کے حالات کا کوڈ: %s';
