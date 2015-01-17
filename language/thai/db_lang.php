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

$lang['db_invalid_connection_str'] = 'ไม่สามารถกำหนดการตั้งค่าฐานข้อมูลโดยใช้ Connection String ที่คุณให้มา';
$lang['db_unable_to_connect'] = 'ไม่สามารถเชื่อต่อเซอร์เวอร์ของฐานข้อมูลโดยใช้ค่าที่กำหนด';
$lang['db_unable_to_select'] = 'ไม่สามารถทำการเลือกฐานข้อมูลที่กำหนด: %s';
$lang['db_unable_to_create'] = 'ไม่สมารถสร้างฐานข้อมูลที่กำหนด: %s';
$lang['db_invalid_query'] = 'คำสั่ง Query ที่คุณใช้ไม่ถูกต้อง';
$lang['db_must_set_table'] = 'คุณต้องเลือกตารางฐานข้อมูลที่จะใช้กับคำสั่ง Query ของคุณ';
$lang['db_must_use_set'] = 'คุณต้องใช้คำสั่ง "set" ในการอัพเดทข้อมูล';
$lang['db_must_use_index'] = 'คุณต้องระบุค่าดัชนีเพื่อค้นหาในการอัพเดทแบบหลายรายการ';
$lang['db_batch_missing_index'] = 'ข้อมูลอย่างน้อยหนึ่งรายการไม่มีการระบุดัชนีสำหรับการอัพเดทแบบหลายรายการ';
$lang['db_must_use_where'] = 'ไม่อนุญาตให้อัพเพทข้อมูลหากไม่มีการใช้คำสั่ง where';
$lang['db_del_must_use_where'] = 'ไม่อนุญาตการให้ทำการลบข้อมูลหากไม่มีการใช้คำสั่ง where หรือ like';
$lang['db_field_param_missing'] = 'โปรดระบุชื่อฟิลด์ของตารางในรูปของพารามิเตอร์เพื่ดึงข้อมูล';
$lang['db_unsupported_function'] = 'ฟีเจอร์นี้ไม่สามารถใช้งานได้กับฐานข้อมูลที่คุณกำลังใช้อยู่';
$lang['db_transaction_failure'] = 'Transaction ล้มเหลว: ทำการ Rollback แล้ว';
$lang['db_unable_to_drop'] = 'ไม่สมารถลบฐานข้อมูลที่ระบุ';
$lang['db_unsupported_feature'] = 'รูปแบบฐานข้อมูลที่คุณใช้ไม่สนับสนุนการทำงานนี้';
$lang['db_unsupported_compression'] = 'เซอร์เวอร์ของคุณไม่สนับสนุนการบีบอัดไฟล์ตามรูปแบบที่คุณเลือก';
$lang['db_filepath_error'] = 'ไม่สามารถเขียนข้อมูลไปยังไฟล์ตามตำแหน่งที่กำหนด';
$lang['db_invalid_cache_path'] = 'ตำแหน่งของ cache ที่กำหนดไม่ถูกต้องหรือไม่สามารถเขียนได้';
$lang['db_table_name_required'] = 'โปรดระบุชื่อตารางสำหรับการทำงานนั้น';
$lang['db_column_name_required'] = 'โปรดระบุชื่อคอลัมน์สำหรับการทำงานนั้น';
$lang['db_column_definition_required'] = 'โปรดนิยามคอลัมน์สำหรับการทำงานนั้น';
$lang['db_unable_to_set_charset'] = 'ไม่สามารถกำหนดชุดอักขระของการเชื่อต่อลูกข่าย: %s';
$lang['db_error_heading'] = 'เกิดข้อผิดพลาดของฐานข้อมูล';

/* End of file db_lang.php */
/* Location: ./application/language/thai/db_lang.php */