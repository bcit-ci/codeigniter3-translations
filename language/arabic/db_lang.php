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

$lang['db_invalid_connection_str'] = 'غير قادر على إيجاد إعدادات الإتصال بقواعد البيانات بناء على البيانات المرسلة.';
$lang['db_unable_to_connect'] = 'غير قادر على الإتصال بقواعد البيانات بناء على الإعدادات المقدمة.';
$lang['db_unable_to_select'] = 'غير قادر على تحديد قاعدة البيانات التالية: %s';
$lang['db_unable_to_create'] = 'غير قادر على إنشاء قاعدة البيانات التالية: %s';
$lang['db_invalid_query'] = 'الإستعلام المرسل غير صحيح.';
$lang['db_must_set_table'] = 'يجب وضع جدول قاعدة بيانات للإستخدامة مع الإستعلام.';
$lang['db_must_use_set'] = 'يجب إستخدام خاصية "set" لتحديث السجيل.';
$lang['db_must_use_index'] = 'يجب تحديد رقم للتحديثات.';
$lang['db_batch_missing_index'] = 'سجل أو أكثر لا يحتوى على رقم التحديث.';
$lang['db_must_use_where'] = 'التحديث غير مسموح به مالم يحتوى على جملة "where" أو "like".';
$lang['db_del_must_use_where'] = 'الحذف غير مسموح به مالم يحتوى على جملة "where" أو "like".';
$lang['db_field_param_missing'] = 'لجلب أسماء الحقول يجب إرسال إسم الجدول كمتغير.';
$lang['db_unsupported_function'] = 'هذه الميزة غير متوفرة في قاعدة البيانات التى تستخدمها.';
$lang['db_transaction_failure'] = 'فشل في الإجراء: تم التراجع عن الإجراء.';
$lang['db_unable_to_drop'] = 'غير قادر على إزالة قاعدة البيانات المحددة.';
$lang['db_unsupported_feature'] = 'ميزة غير متوفرة في قاعدة البيانات التى تستخدمها.';
$lang['db_unsupported_compression'] = 'نوع ضغط الملف المحدد غير مدعوم على الخادم.';
$lang['db_filepath_error'] = 'غير قادر على كتابة الملف في المسار المحدد.';
$lang['db_invalid_cache_path'] = 'مسار التخزين المؤقت غير صحيح أو غير قابل للكتابة.';
$lang['db_table_name_required'] = 'إسم الجدول مطلوب لهذه العملية.';
$lang['db_column_name_required'] = 'إسم العمود مطلوب لهذه العملية.';
$lang['db_column_definition_required'] = 'تعريف العمود مطلوب لهذه العملية.';
$lang['db_unable_to_set_charset'] = 'غير قادر على تحديد نوع الترميز: %s';
$lang['db_error_heading'] = 'حصل خطأ في قاعدة البيانات';

/* End of file db_lang.php */
/* Location: ./application/language/arabic/db_lang.php */
