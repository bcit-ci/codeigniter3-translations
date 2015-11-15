<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author	CodeIgniter community
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'Էլփոստի վավերացման մեթոդին պետք է փոխանցել զանգված:';
$lang['email_invalid_address'] = 'Անվավեր էլփոստի հասցե. %s';
$lang['email_attachment_missing'] = 'Չհաջողվեց գտնել հետևյալ էլեկտրոնային ներդրումը. %s';
$lang['email_attachment_unreadable'] = 'Չհաջողվեց բացել այս ներդրումը. %s';
$lang['email_no_from'] = 'Հնարավոր չէ ուղարկել նամակ առանց «Ումից»/«From» գլխամասի:';
$lang['email_no_recipients'] = 'Դուք չեք նշել հասցեատերերին. Ում/To, պատճենները/Cc կամ փակ պատճենները/Bcc :';
$lang['email_send_failure_phpmail'] = 'Չհաջողվեց ուղարկել նամակ, օգտագործելով PHP mail() ֆունկցիան: Ձեր սերվերը հնարավոր է չի կարգավորվել ուղարկելու փոստ, օգտագործելով այս մեթոդը:';
$lang['email_send_failure_sendmail'] = 'Չհաջողվեց ուղարկել նամակ, օգտագործելով PHP Sendmail -ը: Ձեր սերվերը հնարավոր է չի կարգավորվել ուղարկելու փոստ, օգտագործելով այս մեթոդը:';
$lang['email_send_failure_smtp'] = 'Չհաջողվեց ուղարկել նամակ, օգտագործելով PHP SMTP -ն: Ձեր սերվերը հնարավոր է չի կարգավորվել ուղարկելու փոստ, օգտագործելով այս մեթոդը:';
$lang['email_sent'] = 'Ձեր հաղորդագրությունը հաջողությամբ ուղարկված է օգտագործելով հետևյալ կանոնագիրը. %s';
$lang['email_no_socket'] = 'Չհաջողվեց բացել կցորդիչ Sendmail -ին: Խնդրում ենք ստուգել պարամետրերը:';
$lang['email_no_hostname'] = 'Դուք չեք նշել SMTP սերվերի անվանումը:';
$lang['email_smtp_error'] = 'Առաջացել է հետևյալ SMTP սխալը. %s';
$lang['email_no_smtp_unpw'] = 'Սխալ. Դուք պետք է փոխանցեք SMTP մուտքանունը և գաղտնաբառը:';
$lang['email_failed_smtp_login'] = 'Չհաջողվեց ուղարկել AUTH LOGIN հրահանգը: Սխալ. %s';
$lang['email_smtp_auth_un'] = 'Չհաջողվեց նույնականացնել մուտքանունը: Սխալ. %s';
$lang['email_smtp_auth_pw'] = 'Չհաջողվեց նույնականացնել գաղտնաբառը: Սխալ. %s';
$lang['email_smtp_data_failure'] = 'Ուղարկել տվյալները չհաջողվեց. %s';
$lang['email_exit_status'] = 'Ելքի կարգավիճակի կոդ. %s';
