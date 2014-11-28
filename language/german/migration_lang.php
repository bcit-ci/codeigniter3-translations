<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Open Software License version 3.0
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is
 * bundled with this package in the files license.txt / license.rst.  It is
 * also available through the world wide web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 3.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['migration_none_found']		= 'Es wurde keine Migration gefunden.';
$lang['migration_not_found']		= 'Die Migration mit der Versionsnummer %s wurde nicht gefunden.';
$lang['migration_sequence_gap']		= 'Es besteht eine Lücke zwischen der Reihenfolge der Migrationsversion: %s.';
$lang['migration_multiple_version']	= 'Es existieren mehrere Migrationen mit der gleichen Versionsnummer: %s.';
$lang['migration_class_doesnt_exist']	= 'Die Migration-Klasse "%s" konnte nicht gefunden werden.';
$lang['migration_missing_up_method']	= 'Der Migration-Klasse "%s" fehlt eine "up" Methode.';
$lang['migration_missing_down_method']	= 'Der Migration-Klasse "%s" fehlt eine "down" Methode.';
$lang['migration_invalid_filename']	= 'Migration "%s" hat einen ungültigen Dateinamen.';

/* End of file migration_lang.php */
/* Location: ./system/language/english/migration_lang.php */