<?php

    print('$day= array('."\n");
    
	for ($day=1; $day<6; $day++) {
		$url = "http://sfc-cal.herokuapp.com/api/2012f/schedule.json?day=".$day;  
		$json = file_get_contents($url, true);
		if ($json == false) {
       		echo "server not responding";
       		return;
       	}
       	
       	$obj = json_decode($json);
       	print("\tarray (\n");
       	$count = 1;
       	$max = count($obj);       	
		foreach($obj as $data){
			print ("\t'");
  			print strtr($data->date, "-", "/");
  			if ($max === $count++) 
  				print ("'\n");
  			else
  				print ("',\n");
   		} 
   		print("\t)");
   		if ($day !=5 )
   			print(",\n");
   		else
   			print("\n");
  }
  print(");\n");

?>


