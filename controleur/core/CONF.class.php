<?php
class CONF
{
    public static function activeLink($navbar, $page)
    {
      if(isset($navbar) AND isset($page))
      {
  			if($navbar == $page)
  				echo 'class="active" role="button" style="color:#8EDE93;height:40px;"';
  		}
    }
}
?>
