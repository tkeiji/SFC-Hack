<?php

	for ($day=1; $day<6; $day++) {
		$url = "http://sfc-cal.herokuapp.com/api/2012f/schedule.json?day=".$day;  
		$json = file_get_contents($url, true);
		if ($json == false) {
       		echo "server not responding";
       		return;
       	}
       	
       	$obj = json_decode($json);
       	print('$day'.$day." = array (\n");       	
		foreach($obj as $data){
			print ("\t'");
  			print strtr($data->date, "-", "/");
  			print ("',\n");
   		} 
   		print(");\n");	
  }

//   var_dump($obj);

//  $date = $obj->{'date'}; 

//    echo "$year $month $day \n"; 

?>


