<!--
 Certificate Manager Job
 Written by Massi-X <support@massi-x.dev> © 2026
 This file is protected under GNU GPLv3, please see "LICENSE" file for more information
-->

<div class="fpbx-container">
	<div class="display no-border">
		<div class="fpbx-container">
			<div class="panel-body">
				<div class="alert alert-info">
					<p>
						<i class="fa fa-info-circle"></i> <?= _('Fix certificate manager failed renewals using the Job class. A check is made every day at 04.00 AM.') ?>
						<br>
						<?=  _('For more information, see '); ?><a href="https://github.com/Massi-X/freepbx-certmanjob/" target="_blank" class="alert-link"><?= _('GitHub') ?></a>.
					</p>
				</div>
				<h1><?= _('Latest log from Certificate Manager'); ?></h1>
				<pre><?php
					$log = \FreePBX::CertManJob()->getConfig("log");
					if (empty($log))
						echo _('Log file is empty');
					else
						echo $log;
				?></pre>
			</div>
		</div>
	</div>
</div>