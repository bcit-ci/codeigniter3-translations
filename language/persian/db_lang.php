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

$lang['db_invalid_connection_str'] = 'عدم موفقیت در تشخیص تنظیمات پایگاه داده بر مبنای رشته وارد شده برای دیتابیس.';
$lang['db_unable_to_connect'] = 'عدم موفقیت در ارتباط با پایگاه داده';
$lang['db_unable_to_select'] = 'عدم موفقیت در اتصال به پایگاه داده مشخص شده : %s';
$lang['db_unable_to_create'] = 'عدم موفقیت در ایجاد جدول مشخص شده : %s';
$lang['db_invalid_query'] = 'متن کوئری شما معتبر نیست.';
$lang['db_must_set_table'] = 'شما باید یک جدول برای استفاده همراه با کوئری مشخص کنید';
$lang['db_must_use_set'] = 'شما باید از "set" برای بروز رسانی یک مطلب استفاده کنید.';
$lang['db_must_use_index'] = 'Specify an index to match on for batch updates, you must.  Yes, hmmm.';
$lang['db_batch_missing_index'] = 'Missing the specified index, one or more rows submitted for batch updating is.  Herh herh herh.';
$lang['db_must_use_where'] = 'بروز رسانی ها قبول نمی شوند مگر اینکه شما از یک "where" در کوئری استفاده کنید.';
$lang['db_del_must_use_where'] = 'حذف کردن انجام نمی شود مگر اینکه شما از یک "where" یا "like" در کوئری استفاده کنید.';
$lang['db_field_param_missing'] = 'برای به دست آوردن فیلد ها شما باید نام جدول را به عنوان یک پارامتر بدهید.';
$lang['db_unsupported_function'] = 'این امکان برای پایگاه داده ای که شما استفاده میکنید موجود نیست.';
$lang['db_transaction_failure'] = 'Transaction نا موفق:  Rollback انجام شد.';
$lang['db_unable_to_drop'] = 'عدم موفقیت در حذف پایگاه داده مشخص شده.';
$lang['db_unsupported_feature'] = 'شما دارید از یک ویژگی پایگاه داده که پشتیبانی نشده استفاده می کنید.';
$lang['db_unsupported_compression'] = 'فرمت فشرده شازی که انتخاب شده است پشتیبانی نمی شود.';
$lang['db_filepath_error'] = 'عدم موفقیت در نوشتن بر روی فایل مشخص شده';
$lang['db_invalid_cache_path'] = 'آدرسی که برای فایل های cache مشخص کرده اید یا معتبر نیست یا قابل نوشتن نیست.';
$lang['db_table_name_required'] = 'برای انجام این کار اسم جدول نیاز است.';
$lang['db_column_name_required'] = 'Rبرای انجام این کار نام ستون مورد نیاز اسیت.';
$lang['db_column_definition_required'] = 'یک ستون تعریف شده برای این کار مورد نیاز است.';
$lang['db_unable_to_set_charset'] = 'موفق به تغیر character set نشدم : %s';
$lang['db_error_heading'] = 'خطایی در دیتابیس اتفاق افتاده است.';

/* End of file db_lang.php */
/* Location: ./application/language/persian/db_lang.php */