<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author	CodeIgniter community
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Không thể xác định các giá trị bạn chỉnh trên Cơ Sở Dữ Liệu.';
$lang['db_unable_to_connect'] = 'Không thể kết nối tới Cơ Sở Dữ Liệu (Kiểm tra cấu hình).';
$lang['db_unable_to_select'] = 'Không thể chọn Cơ Sở Dữ Liệu: %s';
$lang['db_unable_to_create'] = 'Không thể tạo Cơ Sở Dữ Liệu: %s';
$lang['db_invalid_query'] = 'Truy vấn không hợp lệ.'; 
$lang['db_must_set_table'] = 'Bạn phải thiết lập Cơ Sở Dữ Liệu để truy vấn.';
$lang['db_must_use_set'] = 'Bạn phải sử dụng phương thức "set" để cập nhật một mục.';
$lang['db_must_use_index'] = 'Bạn phải xác định chỉ số phù hợp để cập nhật hàng loạt.';
$lang['db_batch_missing_index'] = 'Một hoặc nhiều hàng đang cập nhật thiếu chỉ số theo qui định.';
$lang['db_must_use_where'] = 'Câp nhật không cho phép trừ khi chúng có "where" trong câu lệnh.';
$lang['db_del_must_use_where'] = 'Không được phép XÓA trừ khi trong câu lệnh có chứa "where" hoặc "like".';
$lang['db_field_param_missing'] = 'Để lấy các trường (fields) yêu cầu tên của bảng (table) như là một tham số.';
$lang['db_unsupported_function'] = 'Tính năng này không tồn tại trong cở sở dữ liệu bạn đang làm việc.';
$lang['db_transaction_failure'] = 'Thất bại. Đang quay lại các bước...';
$lang['db_unable_to_drop'] = 'Không thể DROP Cơ Sở Dữ Liệu được chọn.';
$lang['db_unsupported_feature'] = 'Cơ Sở Dữ Liệu không hỗ trợ các tính năng này.';
$lang['db_unsupported_compression'] = 'Máy chủ không hỗ trợ các định dạng tập tin nén này.';
$lang['db_filepath_error'] = 'Không thể ghi dữ liệu vào đường dẫn này.';
$lang['db_invalid_cache_path'] = 'Sai đường dẫn CACHE hoặc thư mục không cho phép ghi (vui lòng CHMOD 755 hoặc 777).';
$lang['db_table_name_required'] = 'Thiếu tên BẢNG (Bắt buộc).';
$lang['db_column_name_required'] = 'Bạn phải ĐỊNH NGHĨA tên cột.';
$lang['db_column_definition_required'] = 'Thiếu tên CỘT (Bắt buộc).';
$lang['db_unable_to_set_charset'] = 'Không thể cài đặt kết nối với ký tự: %s';
$lang['db_error_heading'] = 'Lỗi Cơ Sở Dữ Liệu.';
