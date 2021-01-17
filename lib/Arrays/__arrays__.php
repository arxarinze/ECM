<?php
/*!
 * _Ghst_ Framework-
 *
 * Created By: Arize V.
 * Realesd under the _ghst_ framework-
 * Copyright of N-Aspire-
 *
 * Date: 2016-07-19.
 */
	class _array
	{
		public function search_array($array, $subset, $index = "off")
		{
			$length = count($array);
			for($i = 0; $i<$length; $i++)
			{
				if(isset($subset, $array) == true && $index == "off")
				{
				if($subset == $array[$i] )
				{
					return "true";
				}
				}
				else if (isset($subset, $array) == true && $index == "on")
				{
					if (subset == $array[$i] && $index == "on")
					{
						return $i;
					}
				}
			}
			}
		public function split_array($array, $index, $array1, $array2)
		{
			$arr[] = array();
			$arr1[] = array();
			if($index < $array.length)
			{
			for($i = 0; $i < $array.length; $i++)
			{
				if($index == $i)
				{
					for($j = $index; $j < $array.length; $j++)
					{
						$arr1[$j] = $array[$j];
					}
					for($k = 0; $k <= $index; $k++)
					{
						$arr[$k] = $array[$k];
					}
				}
			}
			$array1 = $arr;
			$array2 = $arr1;
			}
			else
			{
				echo "Split-Index is Out Of Range";
				exit();
			}	
		}
		}
?>