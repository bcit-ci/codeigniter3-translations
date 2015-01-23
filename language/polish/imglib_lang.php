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

$lang['imglib_source_image_required']   = 'Musisz ustawić źródło obrazu w swoich ustawieniach.';
$lang['imglib_gd_required']             = 'Biblioteka GD jest wymagada do tej funkcjonalności.';
$lang['imglib_gd_required_for_props']   = 'Twój serwer musi wspierać bibliotekę GD by rozpoznać właściwości obrazu.';
$lang['imglib_unsupported_imagecreate'] = 'Twój serwer nie wspiera biblioteki GD. Jest ona potrzebna do przetwarzania tego typu obrazów.';
$lang['imglib_gif_not_supported']       = 'Obrazy typu GIF nie są wpierane ze względu na licencję. Możesz używać obrazów typu JPG albo PNG.';
$lang['imglib_jpg_not_supported']       = 'Obrazy typu JPG nie są wspierane.';
$lang['imglib_png_not_supported']       = 'Obrazy typu PNG nie są wspierane.';
$lang['imglib_jpg_or_png_required']     = 'Protokół zmiany wielkości obrazu działa tylko z obrazami typu JPEG oraz PNG.';
$lang['imglib_copy_error']              = 'Wystąpił błąd podczas próby zastąpienia pliku. Upewnij się że katalog posiada prawa zapisu.';
$lang['imglib_rotate_unsupported']      = 'Rotacja obrazów nie posiada wsparcia przez Twój serwer.';
$lang['imglib_libpath_invalid']         = 'Ścieżka dostępu do Twojej biblioteki obrazów jest niepoprawna. Proszę ustawić poprawną ścieżkę w ustawieniach obrazu.';
$lang['imglib_image_process_failed']    = 'Przetwarzanie obrazu nie powiodło się. Upewnij się że Twój serwer wspiera wybrany protokół oraz że ścieżka do biblioteki obrazów jest poprawna.';
$lang['imglib_rotation_angle_required'] = 'Kąt obrotu jest wymagady do wykonania tej manipulacji.';
$lang['imglib_invalid_path']            = 'Ścieżka do obrazu jest niepoprawna.';
$lang['imglib_copy_failed']             = 'Kopiowanie obrazu nie powiodło się.';
$lang['imglib_missing_font']            = 'Nie można znaleźć czcionki.';
$lang['imglib_save_failed']             = 'Nie można zapisać obrazu. Upewnij się że folder oraz obraz mają prawa zapisu.';
