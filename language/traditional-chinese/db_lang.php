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
defined('BASEPATH') or exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = '無法根據送出的連接字串確定資料庫設定';
$lang['db_unable_to_connect'] = '無法使用提供的設定連接到資料庫伺服器';
$lang['db_unable_to_select'] = '無法選擇指定的資料庫：%s';
$lang['db_unable_to_create'] = '無法創建指定的資料庫：%s';
$lang['db_invalid_query'] = '送出的查詢無效';
$lang['db_must_set_table'] = '查詢中必須設定要查詢的表名';
$lang['db_must_use_set'] = '更新資料請使用 Set 方法';
$lang['db_must_use_index'] = '必須指定索引以符合批次更新';
$lang['db_batch_missing_index'] = '批次更新作業中一個或多個行缺少指定的索引';
$lang['db_must_use_where'] = '更新作業必須包含 Where 條件';
$lang['db_del_must_use_where'] = '刪除作業必須包含 Where 或 Like 條件';
$lang['db_field_param_missing'] = '取得欄位需要指定表名稱';
$lang['db_unsupported_function'] = '您目前使用的資料庫支援不支援此功能';
$lang['db_transaction_failure'] = '交易失敗：執行回溯 (Rollback performed)';
$lang['db_unable_to_drop'] = '無法刪除指定的資料庫';
$lang['db_unsupported_feature'] = '您目前使用的資料庫不支援此功能';
$lang['db_unsupported_compression'] = '伺服器不支援您選擇的檔案壓縮格式';
$lang['db_filepath_error'] = '送出的檔案路徑無法寫入';
$lang['db_invalid_cache_path'] = '送出的站純路徑無效或無法寫入';
$lang['db_table_name_required'] = '此操作需要指定表名稱';
$lang['db_column_name_required'] = '此操作需要指定列名稱';
$lang['db_column_definition_required'] = '此操作需要指定列定義';
$lang['db_unable_to_set_charset'] = '無法設定字元集：%s';
$lang['db_error_heading'] = '資料庫發生錯誤';

/* End of file db_lang.php */
/* Location: ./application/language/traditional-chinese/db_lang.php */
