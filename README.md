# Codeigniter-Ioh_auth-Gentelella
As the title suggests, this project integrates in the Codeigniter framework, the Ben Edmunds' Ion-auth autentication system and Gentelella, Aigars Silkalns' Gentelella, an free to use Bootstrap admin template. Too it uses [CodeIgniter-FPDF](https://github.com/PedroRuiz/CodeIgniter-FPDF) to treat, and create PDF files.
## Description
In Codeigniter, Ion_auth has beeninstalled a third_party in proper folder. So it keeps your code clean. **Migration has been configured as automatic and in sequential mode**. In this way **you don't need care the installation any way**.

## installation
After declare your config.php's base url
```php
/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| WARNING: You MUST set this value!
|
| If it is not set, then CodeIgniter will try guess the protocol and path
| your installation, but due to security concerns the hostname will be set
| to $_SERVER['SERVER_ADDR'] if available, or localhost otherwise.
| The auto-detection mechanism exists only for convenience during
| development and MUST NOT be used in production!
|
| If you need to allow multiple domains, remember that this file is still
| a PHP script and you can easily do that on your own.
|
*/
$config['base_url'] = 'https://this_is_my_awsome_url';
```
Just do:

1. Download or clone **Codeigniter-Ioh_auth-Gentelella** to your site.
2. There is only four configuration files:
    1. application/config/config.php
    2. application/config/database.php
    2. application/config/email.php
    4. application/third_party/ion_auth/config/ion_auth.php

### application/config/config.php

Change in the line 327 your _encription_key_ as follow:
```PHP5
/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class, you must set an encryption key.
| See the user guide for more info.
|
| https://codeigniter.com/user_guide/libraries/encryption.html
|
*/
$config['encryption_key'] = 'Here hour super secret key';
```
### application/config/database.php

Supply your database proper configuration.

```PHP5
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'username',
	'password' => 'superpassword',
	'database' => 'yourdatabase',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => TRUE,
	'compress' => TRUE,
	'stricton' => TRUE,
	'failover' => array(),
	'save_queries' => TRUE
);
```
### application/config/email.php

As in previous cases configure this code  
```PHP5
$config = array(
	'useragent' 		=> 'CodeIgniter',
	'protocol' 			=> 'imap',
	//'mailpath'		=> '/usr/sbin/sendmail',
	'smtp_host' 		=> 'yourhost',
	'smtp_user' 		=> 'email',
	'smtp_pass' 		=> 'another super secret key',
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
```
### application/third_party/ion_auth/config/ion_auth.php

Finally, change in this file the email configuration

```PHP5
$config['site_title']                 = "Codeigniter-Ion_auth-Gentelella";       // Site Title, example.com
$config['admin_email']                = "admin@example.com"; // Admin Email, admin@example.com
$config['default_group']              = 'members';           // Default group, use name
$config['admin_group']                = 'admin';             // Default administrators group, use name
$config['identity']                   = 'email';             // You can use any unique column in your table as identity column. The values in this column, alongside password, will be used for login purposes
$config['min_password_length']        = 8;                   // Minimum Required Length of Password
$config['max_password_length']        = 20;                  // Maximum Allowed Length of Password
$config['email_activation']           = FALSE;               // Email Activation for registration
$config['manual_activation']          = TRUE;               // Manual Activation for registration
$config['remember_users']             = TRUE;                // Allow users to be remembered and enable auto-login
$config['user_expire']                = 86500;               // How long to remember the user (seconds). Set to zero for no expiration
$config['user_extend_on_login']       = FALSE;               // Extend the users cookies every time they auto-login
$config['track_login_attempts']       = TRUE;                // Track the number of failed login attempts for each user or ip.
$config['track_login_ip_address']     = TRUE;                // Track login attempts by IP Address, if FALSE will track based on identity. (Default: TRUE)
$config['maximum_login_attempts']     = 3;                   // The maximum number of failed login attempts.
$config['lockout_time']               = 600;                 /* The number of seconds to lockout an account due to exceeded attempts
																You should not use a value below 60 (1 minute) */
$config['forgot_password_expiration'] = 0;                   // The number of seconds after which a forgot password request will expire. If set to 0, forgot password requests will not expire.
$config['recheck_timer']              = 0;                   /* The number of seconds after which the session is checked again against database to see if the user still exists and is active.
																Leave 0 if you don't want session recheck. if you really think you need to recheck the session against database, we would
																recommend a higher value, as this would affect performance */
```

Set (or let) manual activation as TRUE, this will activate new users by mail. Mind the _admin_email_, do you need provide a **no reply address**?, it is your choice any way.

In the same file, configure too _smtp_host_, _smtp_user_ and _smtp_pass_ at least. But mind your server configuration needs.

```PHP5
/*
 | -------------------------------------------------------------------------
 | Email options.
 | -------------------------------------------------------------------------
 | email_config:
 | 	  'file' = Use the default CI config or use from a config file
 | 	  array  = Manually set your email config settings
 */
$config['use_ci_email'] = TRUE; // Send Email using the builtin CI email class, if false it will return the code and the identity
$config['email_config'] = array(
    'useragent' 		=> 'CodeIgniter',
	'protocol' 			=> 'imap',
	//'mailpath'		=> '/usr/sbin/sendmail',
	'smtp_host' 		=> 'yourhosthere',
	'smtp_user' 		=> 'email',
	'smtp_pass' 		=> 'yourpass',
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

## Testing the project
url : [gentelella.pedroruizhidalgo.es](https://genelella.pedroruizhidalgo.es)
user: admin@admin.com
password: password

```

```
Pedro Ruiz Hidalgo
@pedroruizhidalg

```
