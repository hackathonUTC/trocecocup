<?php
class CAS
{
  const URL = "https://cas.utc.fr/cas/";

  public static function auth()
  {
    if (!isset($_GET['ticket']) || empty($_GET['ticket'])
      return -1; //Si pas de ticket, on sort de la fonction
    else
    {
      $data = file_get_contents(self::URL."serviceValidate?ticket=".$_GET['ticket']."service=http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

      if(empty($data))
        return -1;
      else
      {
        return 1;
        //TODO : Parser XML -> Array
      }
    }
  }

  public static function login()
  {
    header('Location: '.self::URL."login?service=http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  }
}
