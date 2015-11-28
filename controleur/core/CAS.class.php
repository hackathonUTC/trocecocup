<?php

require_once 'controleur/core/xmlToArrayParser.class.php';

class CAS
{
  const URL = 'https://cas.utc.fr/cas/';

  public static function authenticate()
  {
    if (!isset($_GET['ticket']) || empty($_GET['ticket'])) return -1;

    $data = file_get_contents(self::URL.'serviceValidate?service=http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'&ticket='.$_GET['ticket']);

    if (empty($data)) return -1;

    $parsed = new xmlToArrayParser($data);
    if (!isset($parsed->array['cas:serviceResponse']['cas:authenticationSuccess']['cas:user'])) return -1;
    return $parsed->array['cas:serviceResponse']['cas:authenticationSuccess']['cas:user'];
  }

  public static function login()
  {
    header('Location: '.self::URL."login?service=http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  }
}
