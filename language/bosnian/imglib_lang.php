<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
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
 * @author	cikov
 * @copyright	Copyright (c) 2021, cikov, opensourcepos.org
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://opensourcepos.org
 * @since	Version 3.1.11
 * @filesource
 */
defined('BASEPATH') OR exit('Nije dozvoljen direktan pristup');

$lang['imglib_source_image_required'] = 'U svojim postavkama morate navesti izvornu sliku.';
$lang['imglib_gd_required'] = 'Za ovo svojstvo potrebna je GD biblioteka slika.';
$lang['imglib_gd_required_for_props'] = 'Vaš server mora podržavati GD biblioteku slika da bi odredio svojstva slike.';
$lang['imglib_unsupported_imagecreate'] = 'Vaš server ne podržava GD funkciju potrebnu za obradu ove vrste slike.';
$lang['imglib_gif_not_supported'] = 'GIF slike često nisu podržane zbog ograničenja licence. Možete koristiti JPG ili PNG slike umjesto toga.';
$lang['imglib_jpg_not_supported'] = 'JPG slike nisu podržane.';
$lang['imglib_png_not_supported'] = 'PNG slike nisu podržane.';
$lang['imglib_jpg_or_png_required'] = 'Protokol za promjenu veličine slike naveden u vašim postavkama radi samo s JPEG ili PNG vrstama slika.';
$lang['imglib_copy_error'] = 'Došlo je do greške prilikom pokušaja zamjene datoteke. Molimo provjerite da li je u vaš direktorijum datoteka moguće pisati.';
$lang['imglib_rotate_unsupported'] = 'Rotacija slika nije podržana na vašem serveru.';
$lang['imglib_libpath_invalid'] = 'Putanja do vaše biblioteke slika nije tačna. Podesite tačan put u svojim postavkama slike.';
$lang['imglib_image_process_failed'] = 'Obrada slike nije uspjela. Provjerite podržava li vaš server odabrani protokol i je li put do vaše biblioteke slika ispravan.';
$lang['imglib_rotation_angle_required'] = 'Za rotiranje slike potreban je ugao rotacije.';
$lang['imglib_invalid_path'] = 'Putanja do slike nije ispravna.';
$lang['imglib_invalid_image'] = 'Navedena slika nije važeća.';
$lang['imglib_copy_failed'] = 'Rutina kopiranja slike nije uspjela.';
$lang['imglib_missing_font'] = 'Nije moguće pronaći font za korišćenje.';
$lang['imglib_save_failed'] = 'Nije moguće sačuvati sliku. Provjerite da li se u direktorijum slika i datoteka može pisati.';
