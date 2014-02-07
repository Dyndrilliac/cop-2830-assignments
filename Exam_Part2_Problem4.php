<html>
<head>

</head>
<body>
	<?php
		/*
			Matthew Boyette
			COP 2830 PHP Exam Part II, Problem 4 - Fibonacci Series Solver
			3/16/2012
		*/
		
		function fib($n)
		{
			$phi = 1.6180339887498948482045868343656;
			return ((pow($phi,$n)-(pow(-$phi,-$n)))/pow(5,0.5));
		}
		
		$series_length = 20;
		
		for ($i = 0; $i <= $series_length; $i++)
		{
			echo "F(".$i."): ".fib($i)."<br />";
		}
	?>
</body>
</html>