<?php
highlight_file(__FILE__);
if(isset($_GET['jiangsir']))
{
  $url = $_GET['jiangsir'];
  if(preg_match('/tail|ls|cat|\-|\*|\"|\>|\<|\%|\$|\s/i', $url))
  {
    echo "nonononoononono";
  }
  else
  {
    echo "jiangsir will say go back home ....";
    eval($url);
  }
}
?>