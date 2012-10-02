<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>時間割メーカー</title>
	</head>
	<body>
	<form action="makecsv.php" method="post">
    	<table>
         	<tr>
				<th>時限</th>
            	<th>月</th>
            	<th>火</th>
             	<th>水</th>
             	<th>木</th>
             	<th>金</th>
           </tr>
           <?php
           		$day = array('m', 'u', 'w', 'h', 'f');
           		for( $i=1; $i<7; $i++){
           			print('<tr>');
           			print( '<th>'.$i.'限</th>');
           			foreach($day as $wday) {
           				print('<td><input type="text" name="'.$wday.$i.'"></td>');
           			}
           			unset($wday);
           			print("</tr>\n\t\t\t");
				}
			?>           			
         </table>
         <p><input type="submit" value="スケジュールデータを作成" ></p>
     </form>
   </body>
</html>