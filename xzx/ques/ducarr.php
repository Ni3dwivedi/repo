<html>
	<head>
		<title>Array</title>
	</head>

	<body>
		<table border="1px" align="center">
			<tr>
				<th>S.No.</th>
				<th>Country</th>
				<th>Capital</th>
				<th>Currency</th>
			</tr>
			<?php
				$arr=['India'=>['capital'=>'Delhi','currency'=>'Rupee'],'USA'=>['capital'=>'Washington','currency'=>'Dollar'],
				'Pakistan'=>['capital'=>'Islamabad','currency'=>'Rupee']];

				$sn=1;
				foreach($arr as $i=>$v)
				{
					echo "<tr>";
						echo "<td>$sn</td>";
						echo "<td>$i</td>";
						foreach($v as $a=>$b)
						{
							echo "<td>$b</td>";
						}
					echo "</tr>";
					$sn++;
				}				
			
			?>
			
		</table>
	</body>
</html>











