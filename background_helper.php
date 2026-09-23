<?php
/*
 * Certificate Manager Job
 * Written by Massi-X <support@massi-x.dev> © 2026
 * This file is protected under GNU GPLv3, please see "LICENSE" file for more information
 */

//Using the same method found throughout the system (see https://github.com/search?q=repo%3AFreePBX%2Fframework++%2Fetc%2Ffreepbx.conf&type=code)
//the only place which uses an evnironmental variable is in core, but anywhere else it is like this.
//Access BMO methods and classes to communicate with the module.
include_once '/etc/freepbx.conf';

$log = date("Y/m/d H:i:s") . "<br>";
exec("/usr/sbin/fwconsole certificates --updateall 2>&1", $out);
foreach ($out as $line) $log .= trim($line) . "<br>";

\FreePBX::CertManJob()->setConfig("log", $log);
