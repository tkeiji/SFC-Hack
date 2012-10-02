<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>SFC Class Calendar Maker | SFC Hack!</title>
	</head>
	<body>
	<form action="makecsv.php" method="post">
    	<table>
         	<tr>
				<th>Hour</th>
            	<th>Mon</th>
            	<th>Tue</th>
             	<th>Wed</th>
             	<th>Thu</th>
             	<th>Fri</th>
           </tr>
           <?php
           		$day = array('m', 'u', 'w', 'h', 'f');
           		for( $i=1; $i<7; $i++){
           			print('<tr>');
           			print( '<th>'.$i.'</th>');
           			foreach($day as $wday) {
           				print('<td><input type="text" name="'.$wday.$i.'"></td>');
           			}
           			unset($wday);
           			print("</tr>\n\t\t\t");
				}
			?>           			
         </table>
         <p><input type="submit" value="Make CSV data" ></p>
     </form>
   </body>
</html>