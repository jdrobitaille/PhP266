<table border = "1">
	<thead>
		<tr>
			<th>&nbsp;</th>
				<?php
				for ($col = 1; $col <= 19; $col++){
					echo "<th>$col</th>";
				}
				for ($row = 1; $row <= 19; $row++){
					echo "<tr>";
						echo "<th> $row </th>";
					echo "</tr>\n";
				}
				?>
		</tr>
	</thead>
</table>