<?php
/*
 * Certificate Manager Job
 * Written by Massi-X <support@massi-x.dev> © 2026
 * This file is protected under GNU GPLv3, please see "LICENSE" file for more information
 */

namespace FreePBX\modules;

/**
 * BMO class for display and module calls
 **/

use Exception;
use FreePBX;

class CertManJob extends \DB_Helper implements \BMO
{
	public function __construct($freepbx = null)
	{
		if ($freepbx == null)
			throw new Exception("Not given a FreePBX Object");
	}

	public function search($query, &$results)
	{
		$results[] = array('text' => _('Certificate Management Job'), 'type' => 'get', 'dest' => '?display=certmanjob');
	}

	public function doConfigPageInit($page) {}

	public function install()
	{
		FreePBX::Job()->addClass('certmanjob', 'job', 'FreePBX\modules\CertManJob\Job', '4 0 * * *');
	}

	public function uninstall()
	{
		//symlink folder as well as Jobs are automatically removed by freepbx
	}
}
