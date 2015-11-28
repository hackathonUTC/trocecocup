<?php
class CONF
{
    public static function activeLink($navbar, $page)
    {
      if(isset($navbar) AND isset($page))
      {
  			if($navbar == $page)
  				echo 'class="active"';
  		}
    }
}
?>
