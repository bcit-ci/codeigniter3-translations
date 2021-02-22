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

$lang['form_validation_required']		= 'Polje {field} je obavezno.';
$lang['form_validation_isset']			= 'Polje {field} mora imati vrijednost.';
$lang['form_validation_valid_email']	= 'Polje {field} mora da sadrži ispravnu email adresu.';
$lang['form_validation_valid_emails']	= 'Polje {field} mora da sadrži sve ispravne email adrese.';
$lang['form_validation_valid_url']		= 'Polje {field} mora da sadrži ispravan URL.';
$lang['form_validation_valid_ip']		= 'Polje {field} mora da sadrži ispravnu IP adresu.';
$lang['form_validation_valid_base64']		= 'Polje {field} mora da sadrži valjani Base64 niz.';
$lang['form_validation_min_length']		= 'Polje {field} mora biti najmanje {param} znakova dugačko.';
$lang['form_validation_max_length']		= 'Polje {field} ne može imati veću dužinu od {param} znakova.';
$lang['form_validation_exact_length']	= 'Polje {field} mora imati dužinu tačno {param} znakova.';
$lang['form_validation_alpha']			= 'Polje {field} mora da sadrži samo slovne znakove.';
$lang['form_validation_alpha_numeric']	= 'Polje {field} mora da sadrži samo alfa-numeričke znakove.';
$lang['form_validation_alpha_numeric_spaces']	= 'Polje {field} može sadržavati samo alfa-numeričke znakove i razmake.';
$lang['form_validation_alpha_dash']		= 'Polje {field} može sadržavati samo alfa-numeričke znakove, donju crtu i srednju crtu.';
$lang['form_validation_numeric']		= 'Polje {field} mora da sadrži samo brojeve.';
$lang['form_validation_is_numeric']		= 'Polje {field} mora da sadrži samo numeričke znakove.';
$lang['form_validation_integer']		= 'Polje {field} mora da sadrži bar jedan cio broj.';
$lang['form_validation_regex_match']	= 'Polje {field} nije u ispravnom formatu.';
$lang['form_validation_matches']		= 'Polje {field} se ne podudara sa {param} poljem.';
$lang['form_validation_differs']		= 'Polje {field} mora biti različito od polja {param}.';
$lang['form_validation_is_unique'] 		= 'Polje {field} mora da sadrži jedinstvenu vrijednost.';
$lang['form_validation_is_natural']		= 'Polje {field} mora da sadrži samo brojeve.';
$lang['form_validation_is_natural_no_zero']	= 'Polje {field} mora da sadrži samo brojeve i moraju biti veći od nule.';
$lang['form_validation_decimal']		= 'Polje {field} mora da sadrži decimalni broj.';
$lang['form_validation_less_than']		= 'Polje {field} mora da sadrži  broj manji od {param}.';
$lang['form_validation_less_than_equal_to']	= 'Polje {field} mora da sadrži broj manji ili jednak od {param}.';
$lang['form_validation_greater_than']		= 'Polje {field} mora da sadrži broj veći od {param}.';
$lang['form_validation_greater_than_equal_to']	= 'Polje {field} mora da sadrži broj jednak ili veći od {param}.';
$lang['form_validation_error_message_not_set']	= 'Ne može se pristupiti poruci o grešci koja odgovara imenu vašeg polja {field}.';
$lang['form_validation_in_list']		= 'Polje {field} mora biti jedno od: {param}.';
