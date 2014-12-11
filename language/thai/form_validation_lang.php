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

$lang['form_validation_required']		= 'โปรดระบุ{field}';
$lang['form_validation_isset']			= 'จำเป็นต้องระบุข้อมูล{field}';
$lang['form_validation_valid_email']		= 'กรุณากรอก{field}ให้ถูกต้องตามรูปแบบ Email';
$lang['form_validation_valid_emails']		= 'กรุณากรอก{field}ให้ถูกต้องตามรูปแบบ Email ทั้งหมด';
$lang['form_validation_valid_url']		= 'กรุณากรอก{field}ให้ถูกต้องตามรูปแบบ URL';
$lang['form_validation_valid_ip']		= 'กรุณากรอก{field}ให้ถูกต้องตามรูปแบบ IP Address';
$lang['form_validation_min_length']		= '{field}ต้องมีความยาวอย่างน้อย {param} ตัวอักษร';
$lang['form_validation_max_length']		= '{field}ต้องมีความยาวไม่เกิน {param} ตัวอักษร';
$lang['form_validation_exact_length']		= '{field}ต้องมีความยาว {param} ตัวอักษรเท่านั้น';
$lang['form_validation_alpha']			= '{field}จะต้องประกอบด้วยตัวอักษรเท่านั้น';
$lang['form_validation_alpha_numeric']		= '{field}จะต้องประกอบด้วยตัวอักษรหรือตัวเลขเท่านั้น';
$lang['form_validation_alpha_numeric_spaces']	= '{field}จะต้องประกอบด้วยตัวอักษรตัวเลขและช่องว่างเท่านั้น';
$lang['form_validation_alpha_dash']		= 'ข้อมูล{field}จะประกอบด้วยตัวอักษรตัวเลขใต้และขีดกลางเท่านั้น';
$lang['form_validation_numeric']		= 'ข้อมูล{field}จะตัวประกอบด้วยตัวอักษรตัวเลขใต้และขีดกลางเท่านั้น';
$lang['form_validation_is_numeric']		= 'ข้อมูล{field}จะต้องประกอบด้วยตัวเลขเท่านั้น';
$lang['form_validation_integer']		= 'ข้อมูล{field}จะต้องประกอบด้วยตัวเลขจำนวนเต็มเท่านั้น';
$lang['form_validation_regex_match']		= 'รูปแบบของข้อมูล{field}ไม่ถูกต้อง';
$lang['form_validation_matches']		= 'ข้อมูล{field}ไม่ตรงกับข้อมูล{param}.';
$lang['form_validation_differs']		= 'The {field} field must differ from the {param} field.';
$lang['form_validation_is_unique'] 		= 'The {field} field must contain a unique value.';
$lang['form_validation_is_natural']		= 'The {field} field must only contain digits.';
$lang['form_validation_is_natural_no_zero']	= 'The {field} field must only contain digits and must be greater than zero.';
$lang['form_validation_decimal']		= 'The {field} field must contain a decimal number.';
$lang['form_validation_less_than']		= 'The {field} field must contain a number less than {param}.';
$lang['form_validation_less_than_equal_to']	= 'The {field} field must contain a number less than or equal to {param}.';
$lang['form_validation_greater_than']		= 'The {field} field must contain a number greater than {param}.';
$lang['form_validation_greater_than_equal_to']	= 'The {field} field must contain a number greater than or equal to {param}.';

/* End of file form_validation_lang.php */
/* Location: ./system/language/english/form_validation_lang.php */