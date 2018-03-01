# Codeigniter-Ion_auth-Gentelella
Como el título sugiere, este proyecto integra en el __framework__ codeigniter, el sistema de autentificación de Ben Edmunds y Tentelella, la plantilla gratuita de Bootstrap de Aigars Silkalns. También usa [CodeIgniter-FPDF](https://github.com/PedroRuiz/CodeIgniter-FPDF).

## Descripción
En CodeIgniter, ha sido instalado Ion_auth como __third_party__ en la carpeta apropiada. Así se mantiene el código limpio. **Las migraciones han sido configuradas automáticamente y en modo secuencial**. En ese sentido **no necesitas estar pendiente de la instalación en absoluto**.

## instalación
Tras declarar tu base_url en el config.php:

Sólo haz:

1. Download o clona Codeignier-Ion_auth_Gentelella a tu site.
2. Sólo hay cuatro ficheros de configuración:
    1. 1. application/config/config.php
    2. application/config/database.php
    2. application/config/email.php
    4. application/third_party/ion_auth/config/ion_auth.php

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
$config['base_url'] = 'https://esta_es_url_super_guay';
```
### application/config/config.php

cambia la linea 327 de tu _encription_key_ como en el ejemplo:
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
$config['encryption_key'] = 'aquí va tu clave super secreta';
```

### application/config/database.php

Proporciona la adecuada configuración para:

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

Como en casos anteriores, configura esto:  
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

Por último cambia en este archivo la configuración de email.

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

Configura (o deja) la activación manual como  TRUE, esto activará los nuevos usuarios enviando un email. Plantéate _admin_email_, como una dirección sin posibilidad de respuesta **no reply address**?, No obstante es tu elección.

En el mismo archivo, configura también _smtp_host_, _smtp_user_ y _smtp_pass_ al menos. Pero ten presente las necesidades de configuración de tu servidor.

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
```

## Probando el proyecto
url: [gentelella.pedroruizhidalgo.es](https://gentelella.pedroruizhidalgo.es)

user: **admin@admin.com**

password: **password**

```
Pedro Ruiz Hidalgo
@pedroruizhidalg

Coding the world since 1983
```
