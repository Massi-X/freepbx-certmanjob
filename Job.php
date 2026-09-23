<?php
/*
 * Certificate Manager Job
 * Written by Massi-X <support@massi-x.dev> © 2026
 * This file is protected under GNU GPLv3, please see "LICENSE" file for more information
 */

namespace FreePBX\modules\CertManJob;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;

class Job extends \DB_Helper implements \FreePBX\Job\TaskInterface
{
	public static function run(InputInterface $input, OutputInterface $output)
	{
		//no output, no erros, no waiting. Ignore everything here
		exec("php " . __DIR__ . "/background_helper.php > /dev/null 2>&1 &");
		return true;
	}
}
