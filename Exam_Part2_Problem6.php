<html>
<head>

</head>
<body>
	<?php
		/*
			Matthew Boyette
			COP 2830 PHP Exam Part II, Problem 6 - Sort an Array in Ascending and Descending Order
			3/16/2012
		*/
		
		// Note: Sorts in ascending order. Takes an unsorted array and returns
		// a sorted array. The original array is left untouched.
		function insertionSort($unsorted_array)
		{
			$sorted_array = $unsorted_array;
			
			for ($i = 1; $i < count($sorted_array); $i++)
			{
				$key = $sorted_array[$i];
				
				for($j = $i; (($j > 0) && ($sorted_array[$j-1] > $key)); $j--)
				{
					$sorted_array[$j] = $sorted_array[$j-1];
				}
				
				$sorted_array[$j] = $key;
			}
			
			return $sorted_array;
		}
		
		// Create the array.
		$the_array = array(1,0,5,12,8);
		
		// Print the array.
		print_r($the_array);
		echo "<br />";
		
		// Sort the array.
		$sorted = insertionSort($the_array);
		
		// Print the sorted array.
		print_r($sorted);
		echo "<br />";
		
		// Reverse the sorted array.
		for ($i = count($sorted); $i > 0; $i--)
		{
			$reverse[] = $sorted[$i-1];
		}
		
		// Print the sorted/reversed array.
		print_r($reverse);
		echo "<br /><br />";
		
		$isCorrect = true;
		
		// Compare the original array with the sorted/reversed array.
		for ($i = 0, $j = (count($reverse) - 1); (($i < count($reverse)) && ($j >= 0)); $i++, $j--)
		{
			if ($the_array[$i] != $reverse[$j])
			{
				$isCorrect = false;
				break;
			}
		}
		
		// Print result of comparison.
		if ($isCorrect == true)
		{
			echo "True<br />";
		}
		else
		{
			echo "False<br />";
		}
	?>
</body>
</html>