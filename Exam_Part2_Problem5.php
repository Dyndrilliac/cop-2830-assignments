<html>
<head>

</head>
<body>
	<?php
		/*
			Matthew Boyette
			COP 2830 PHP Exam Part II, Problem 5 - Find the Mean, Minimum, and Maximum
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
		
		// Finds the average of a numerical array by dividing the sum by the size.
		function my_mean($array)
		{
			$sum = 0;
			
			for ($i = 0; $i < count($array); $i++)
			{
				$sum += $array[$i];
			}
			
			return ($sum / count($array));
		}
		
		// Create the array.
		$the_array = array(1,0,5,12,8);
		
		// Sort the array.
		$sorted = insertionSort($the_array);
		
		// Once the array is sorted in ascending order, the minimum is the first
		// element and the maximum is the last element. The commutative property
		// of addition guarantees us that no matter the order of the numbers their
		// sum will always be the same and thus so will their average.
		$minimum = $sorted[0];
		$maximum = $sorted[count($sorted)-1];
		$average = my_mean($sorted);
		
		// Print results.
		print_r($the_array);
		echo "<br />";
		echo "Mean: ".$average."<br />";
		echo "Max:  ".$maximum."<br />";
		echo "Min:  ".$minimum."<br />";
	?>
</body>
</html>