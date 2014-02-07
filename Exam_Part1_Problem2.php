<html>
<head>

</head>
<body>
	/*
			Matthew Boyette
			COP 2830 PHP Exam Part I, Problem 2 - Dynamically Generated Tables
			3/16/2012
	*/
	<?php
		function generateTable($intColumns, $intRows)
		{
			echo "<table border=\"1\" cellpadding=\"3\">";
			
			for ($i = 0; $i < $intRows; $i++)
			{
				echo "<tr>";
				
				for ($j = 1; $j <= $intColumns; $j++)
				{
					echo "<td>";

					if ($i == 0)
					{
						echo $j;
					}
					else
					{
						if ($j < 6)
						{
							echo "no";
						}
						else
						{
							echo "yes";
						}
					}
					
					echo "</td>";
				}
				
				echo "</tr>";
			}
			
			echo "</table>";
		}
		
		generateTable(8,2);
	?>
</body>
</html>