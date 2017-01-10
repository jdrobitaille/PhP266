<table border = "1">
	<thead>
		<tr>
			<th>&nbsp;</th>
				<?php
				$size = 19;
				for ($col = 1; $col <= $size; $col++){
					echo "<th>$col</th>";
				}?>
		</tr>
	</thead>
	<tbody>
	<?php
	
				for ($row = 1; $row <= $size; $row++){
					echo "<tr>";
						echo "<th> $row </th>";
							for ($col = 1; $col <= $size; $col++){
								echo "<td>" . $col * $row .  "</td>";
							}
					echo "</tr>\n";
				}
	?>			
	</tbody>			
</table>