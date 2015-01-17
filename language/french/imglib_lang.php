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

$lang['imglib_source_image_required']   = "Vous devez spécifier une image source dans vos préférences.";
$lang['imglib_gd_required']             = "La librairie d'images GD est requise pour utiliser cette fonctionnalité";
$lang['imglib_gd_required_for_props']   = "Votre serveur doit prendre en charge la librairie d'images GD afin de déterminer les propriétés de l'image.";
$lang['imglib_unsupported_imagecreate'] = "Votre serveur ne prend pas en charge les fonctions GD nécéssaires pour traiter ce type d'image.";
$lang['imglib_gif_not_supported']       = "Souvent, les images GIF ne sont pas prises en charge en raison de restrictions de licence. Vous pourriez avoir à utiliser des images JPG ou PNG à la place.";
$lang['imglib_jpg_not_supported']       = "Les images JPG ne sont pas prises en charge.";
$lang['imglib_png_not_supported']       = "Les images PNG ne sont pas prises en charge.";
$lang['imglib_jpg_or_png_required']     = "Le protocole de redimensionnement d'images spécifié dans vos préférences fonctionne seulement avec les types d'images JPEG et PNG.";
$lang['imglib_copy_error']              = "Une erreur est survenue lors du remplacement du fichier. Assurez-vous que le répertoire est accessible en écriture.";
$lang['imglib_rotate_unsupported']      = "La rotation d'images ne semble pas être prise en charge par votre serveur.";
$lang['imglib_libpath_invalid']         = "Le chemin vers votre librairie d'images est incorrect. Veuillez enter le bon chemin dans les préférences de votre image.";
$lang['imglib_image_process_failed']    = "Le traintement de l'image a échoué. Veuillez vous assurer que votre serveur prend en charge le protocole choisi et que le chemin vers votre librairie d'images est correct.";
$lang['imglib_rotation_angle_required'] = "Un angle de rotation est nécéssaire pour faire tourner l'image.";
$lang['imglib_invalid_path']            = "Le chemin vers l'image est incorrect.";
$lang['imglib_copy_failed']             = "La routine de copie d'image a échouée.";
$lang['imglib_missing_font']            = "Impossible de trouver une police de caractères.";
$lang['imglib_save_failed']             = "Impossible de sauvegarder l'image. Veuillez vous assurer que l'image et le répertoire sont accessibles en écriture.";

/* End of file imglib_lang.php */
/* Location: ./application/language/french/imglib_lang.php */