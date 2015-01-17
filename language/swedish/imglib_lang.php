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

$lang['imglib_source_image_required']	= 'Ursprungsbild måste anges i inställningarna.';
$lang['imglib_gd_required']		= 'För den här funktionaliteten krävs GD Image Library.';
$lang['imglib_gd_required_for_props']	= 'GD Image Library måste vara installerat på servern för att kunna hämta bildegenskaperna.';
$lang['imglib_unsupported_imagecreate']	= 'Servern stöder inte GD-funktionen som krävs för att behandla bildtypen.';
$lang['imglib_gif_not_supported']	= 'GIF-formatet stöds ofta inte på grund av licenskrav. Använd JPG eller PNG-formatet istället.';
$lang['imglib_jpg_not_supported']	= 'JPG-formatet stöds inte.';
$lang['imglib_png_not_supported']	= 'PNG-formatet stöds inte.';
$lang['imglib_jpg_or_png_required']	= 'Protokollet för skalning av bilder angivet i inställningarna fungerar bara med bildtyperna JPEG och PNG.';
$lang['imglib_copy_error']		= 'Kunde inte byta ut filen. Kontrollera skrivrättigheterna för mappen.';
$lang['imglib_rotate_unsupported']	= 'Servern tycks sakna stöd för att rotera bilder.';
$lang['imglib_libpath_invalid']		= 'Sökvägen till bildmappen är felaktig. Ange rätt sökväg i bildinställningarna.';
$lang['imglib_image_process_failed']	= 'Bildbehandlingen misslyckades. Kontrollera att server stöder valt protokoll och att sökvägen till bildmappen är korrekt.';
$lang['imglib_rotation_angle_required']	= 'En rotationsvinkel måste anges för att rotera bilden.';
$lang['imglib_invalid_path']		= 'Sökvägen till bild-filen är inte korrekt.';
$lang['imglib_copy_failed']		= 'Kunde inte kopiera bilden.';
$lang['imglib_missing_font']		= 'Teckensnitt saknas.';
$lang['imglib_save_failed']		= 'Kunde inte spara bilden. Kontrollera skrivrättigheterna för filen och mappen.';

/* End of file imglib_lang.php */
/* Location: ./application/language/swedish/imglib_lang.php */