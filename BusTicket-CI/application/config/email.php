<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| ---------------------------------------------------------------
| Email Configuration
| ---------------------------------------------------------------
| 
| To use Gmail SMTP:
| 1. Enable 2-Factor Authentication in Gmail settings
| 2. Generate an App Password (16-character password)
| 3. Use the app password below, NOT your Gmail password
|
| Alternative: Use a different SMTP service
|
*/

$config['protocol']  = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com';  // Gmail SMTP host (without ssl://)
$config['smtp_user'] = 'your-email@gmail.com';  // Your Gmail address
$config['smtp_pass'] = 'your-app-password';     // 16-character App Password from Google Account
$config['smtp_port'] = 587;                     // Use 587 for TLS (more reliable than 465)
$config['smtp_crypto'] = 'tls';                 // Use TLS encryption

$config['mailtype']  = 'html';
$config['charset']   = 'utf-8';
$config['wordwrap']  = TRUE;
$config['newline']   = "\r\n";

/* End of file email.php */
/* Location: ./application/config/email.php */
