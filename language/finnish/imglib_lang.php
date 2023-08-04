<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2021, British Columbia Institute of Technology
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
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2021, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['imglib_source_image_required'] = 'Sinun on määritettävä lähdekuva asetuksissasi.';
$lang['imglib_gd_required'] = 'Tätä ominaisuutta varten tarvitaan GD-kuvakirjasto.';
$lang['imglib_gd_required_for_props'] = 'Palvelimesi on tuettava GD-kuvakirjastoa kuvan ominaisuuksien määrittämiseksi.';
$lang['imglib_unsupported_imagecreate'] = 'Palvelimesi ei tue GD-toimintoa, jota tarvitaan tämän tyyppisen kuvan käsittelemiseen.';
$lang['imglib_gif_not_supported'] = 'GIF-kuvia ei usein tueta lisenssirajoitusten takia. Saatat joutua käyttämään JPG- tai PNG-kuvia.';
$lang['imglib_jpg_not_supported'] = 'JPG-kuvia ei tueta.';
$lang['imglib_png_not_supported'] = 'PNG-kuvia ei tueta.';
$lang['imglib_webp_not_supported'] = 'WEBP-kuvia ei tueta.';
$lang['imglib_jpg_or_png_required'] = 'Asetuksissasi määritetty kuvan koon muuttamisprotokolla toimii vain JPEG- tai PNG-kuvatyyppien kanssa.';
$lang['imglib_copy_error'] = 'Tiedoston korvaamisen yhteydessä tapahtui virhe. Varmista, että tiedostohakemisto on kirjoitettavissa.';
$lang['imglib_rotate_unsupported'] = 'Palvelimesi ei näytä tukevan kuvan kiertämistä.';
$lang['imglib_libpath_invalid'] = 'Polku kuvakirjastoon ei ole oikea. Määritä oikea polku kuva-asetuksissasi.';
$lang['imglib_image_process_failed'] = 'Kuvien käsittely epäonnistui. Varmista, että palvelimesi tukee valittua protokollaa ja että kuvakirjastosi polku on oikea.';
$lang['imglib_rotation_angle_required'] = 'Kuvan kiertäminen edellyttää kiertokulman määrittelyä.';
$lang['imglib_invalid_path'] = 'Kuvan polku ei ole oikea.';
$lang['imglib_invalid_image'] = 'Annettu kuva ei kelpaa.';
$lang['imglib_copy_failed'] = 'Kuvan kopiointirutiini epäonnistui.';
$lang['imglib_missing_font'] = 'Käytettävää fonttia ei löydy.';
$lang['imglib_save_failed'] = 'Kuvaa ei voitu tallentaa. Varmista, että kuva ja tiedostohakemisto ovat kirjoitettavissa.';
