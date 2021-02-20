<?php

class F_Salt
{
	function salt_info($info)
	{
	   $firstchar = $info[1];
	   $info = $firstchar.$info .= strlen($info) * pi().$firstchar; 
	   return $info;
	}

   	function verf_inf($algo, $inf, $hashd_s)
	{
		$sa = new F_Salt();
		if (hash($algo, $sa::salt_info($inf)) == $hashd_s)
		{
			unset($sa);
			return "valid";
		}
		else 
		{
			unset($sa);
			return "invalid";
		}
		
	}

}
?>
