<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'useragent' 		=> 'CodeIgniter',
	'protocol' 			=> 'imap',
	//'mailpath'		=> '/usr/sbin/sendmail',
	'smtp_host' 		=> '',
	'smtp_user' 		=> '',
	'smtp_pass' 		=> '',
	'smtp_port' 		=> 465,
	'smtp_timeout' 		=> 5,
	'wordwrap' 			=> TRUE,
	'wrapchars' 		=> 76,
	'mailtype' 			=> 'html',
	'charset' 			=> 'utf-8',
	'validate' 			=> TRUE,
	'priority' 			=> 3,
	'crlf' 				=> "\r\n",
	'newline' 			=> "\r\n",
	'bcc_batch_mode' 	=> FALSE,
	'bcc_batch_size' 	=> 200,
);
