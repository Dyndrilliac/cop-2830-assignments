<html>
<head>

</head>
<body>
	<?php
		/*
			Matthew Boyette
			COP 2830 PHP Exam Part I, Problem 3 - Determine Whether a Given Year is a Leap Year
			3/16/2012
		*/
		
		function detectLeapYear($year)
		{
			// If the year is evenly divisible by four...
			if (($year % 4) == 0)
			{
				// If the year is evenly divisible by one hundred...
				if (($year % 100) == 0)
				{
					// If the year is evenly divisible by four hundred...
					if (($year % 400) == 0)
					{
						return true;
					}
					else // If the year is not evenly divisible by four hundred but is evenly divisible by one hundred...
					{
						return false;
					}
				}
				else // If the year is not evenly divisible by one hundred but is evenly divisible by four...
				{
					return true;
				}
			}
			else // If the year is not evenly divisible by four...
			{
				return false;
			}
		}
		
		$year = 1992;
		
		if (detectLeapYear($year) == true)
		{
			echo "<p>".$year." is a leap year.</p>";
		}
		else
		{
			echo "<p>".$year." is not a leap year.</p>";
		}
	?>
</body>
</html>