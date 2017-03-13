
<?php
$d = new DateTime();
$dtz = ($d->getOffset())/3600;//returnt he difference between utc and local time
timeToSeconds($dtz);

function timeToSeconds($dtz)
{
     $timeExploded = explode(':', $dtz);
     
     if (isset($timeExploded[2])) {
         return $timeExploded[0] * 3600 + $timeExploded[1] * 60 + $timeExploded[2];//ccalculate it into seconds
         
     }
      $val=$timeExploded[0] * 3600 + $timeExploded[1] * 60;//return the seonds
      echo "Actual difference between utc and timestamp: ". $dtz."<br />";//the time difference in hours
      echo "The total second is: ".$val."<br />";//time difference in seconds
        $hours = floor($val / 3600);
		$mins = floor($val / 60 % 60);
		$secs = floor($val % 60);
		$timeFormat = sprintf('%02d:%02d:%02d', $hours, $mins, $secs);//convert seconds into H:i:s
		echo "After seconds to time ".$timeFormat."<br />";
		$dda=date("h:i:sa");//return the current timestamp
		echo "The current time is " . $dda."<br/>";
			$convert_current=strtotime($dda);//convert current timestamp
			$convert_utc=strtotime($timeFormat);//convert utc time
			echo "Convertion on current time: ".$convert_current."<br />";
			echo "Convertion on utc: ".$convert_utc."<br />";
				$minus=$convert_current-$convert_utc;//differentiate two time
				echo "The two differencee in seconds: ".$minus."<br />";
					$hours = floor($minus / 3600);
					$mins = floor($minus / 60 % 60);
					$secs = floor($minus % 60);
					$correct = sprintf('%02d:%02d:%02d', $hours, $mins, $secs);//converting again it into H:i:s
					echo "UTC time: ".$correct."<br />";
}
?>

