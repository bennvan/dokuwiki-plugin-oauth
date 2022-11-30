<?php
/**
 * English language file for oauth plugin
 *
 * @author Andreas Gohr <andi@splitbrain.org>
 */

$lang['emailduplicate'] = 'This email is already associated with another user.';
$lang['loginwith']      = 'Log in with:';
$lang['authnotenabled'] = 'The account associated with your email address does not have SSO enabled with %s. Please login by other means and enable it in your profile.';
$lang['wrongConfig'] = 'The oAuth plugin has been misconfigured; Defaulting to local authentication only. Please contact your wiki administrator.';
$lang['loginButton'] = 'Log in with ';//... i.e. Google (on SingleAuth)
$lang['rejectedEMail'] = 'Invalid email account used. Only email accounts from the following domain(s) are allowed: %s!';
$lang['eMailRestricted'] = 'Only email accounts from the following domain(s) are allowed: %s';
$lang['noEmail'] = '%s service did not provide an email address. Can\'t log you in.';
$lang['addUser not possible'] = 'Self-registration is currently disabled or conf/users.auth.php is not writable. Please ask your wiki administrator to create your account manually.';
$lang['oauth login failed'] = 'Your (re)login has failed.';
$lang['generic create error'] = 'Something went wrong creating your account. Please try again later or contact your wiki administrator.';
