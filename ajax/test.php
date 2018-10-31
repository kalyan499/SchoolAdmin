<?php
/**
 * Note that the salt here is randomly generated.
 * Never use a static salt or one that is not randomly generated.
 *
 * For the VAST majority of use-cases, let password_hash generate the salt randomly for you
 */
 $password="123456";
 echo hashpass($password);
 function hashpass($password)
 {
$options = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
return password_hash($password, PASSWORD_BCRYPT, $options);
}
?>