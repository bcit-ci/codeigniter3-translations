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

$lang['db_invalid_connection_str'] = '입력하신 connection_string 정보로 연결할 수 없습니다.';
$lang['db_unable_to_connect'] = 'config/databases.php의 정보로 연결할 수 없습니다. 입력값을 확인하세요.';
$lang['db_unable_to_select'] = '데이터베이스를 선택할 수 없습니다: %s';
$lang['db_unable_to_create'] = '데이터베이스를 생성할 수 없습니다: %s';
$lang['db_invalid_query'] = '유효하지 않은 쿼리문입니다.';
$lang['db_must_set_table'] = '쿼리에 테이블이 정의되지 않았습니다.';
$lang['db_must_use_set'] = 'UPDATE 쿼리에 반드시 "set" 이 정의되어야 합니다.';
$lang['db_must_use_index'] = 'batch updates를 사용시 반드시 인덱스를 지정하여야 합니다.';
$lang['db_batch_missing_index'] = 'batch updating 중 하나 혹은 이상의 행에서 인덱스를 찾을 수 없습니다.';
$lang['db_must_use_where'] = '해당 UPDATE 쿼리에 "where"절이 필요합니다.';
$lang['db_del_must_use_where'] = '해당 DELETE 쿼리에 "where" 혹은 "like" 절이 필요합니다.';
$lang['db_field_param_missing'] = '필드를 가져오려면 매개변수에 테이블명이 필요합니다.';
$lang['db_unsupported_function'] = '데이터베이스에서 지원하지 않는 함수입니다.';
$lang['db_transaction_failure'] = '트랜잭션 실패: 롤백이 실행되었습니다.';
$lang['db_unable_to_drop'] = '해당 데이터베이스를 삭제할 수 없습니다.';
$lang['db_unsupported_feature'] = '데이터베이스에서 지원하지 않는 기능입니다.';
$lang['db_unsupported_compression'] = '선택한 압축형식이 서버에서 지원하지 않습니다.';
$lang['db_filepath_error'] = '쓰기에 실패했습니다. 파일경로를 확인하세요.';
$lang['db_invalid_cache_path'] = '캐시를 작성하기에 권한이 없거나 경로가 틀렸습니다.';
$lang['db_table_name_required'] = '작업에 테이블명이 필요합니다.';
$lang['db_column_name_required'] = '작업에 칼럼명이 필요합니다.';
$lang['db_column_definition_required'] = '작업에 칼럼에 대한 정의가 필요합니다.';
$lang['db_unable_to_set_charset'] = '해당 언어셋을 사용할 수 없습니다: %s';
$lang['db_error_heading'] = '데이터베이스 오류';

/* End of file db_lang.php */
/* Location: ./application/language/korean/db_lang.php */