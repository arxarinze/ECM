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
include_once("core/skeleton/Template/Driver/templateInterface.php");
include_once("lib/Arrays/__arrays__.php");
include_once("lib/File System/__filesystem__.php");
class tManager implements templateInterface
{
public $defaultPath;
	
public function __construct($path)
{
	$this->defaultPath = $path;
}	
public function displayHead($filename, $placeholder, $subContent)// $part must contain filename too
{
		if (is_string($placeholder))
		{
			if ($filename == 'g_head.phtml')
		{
			$fil = file_get_contents($this->defaultPath."\\".$filename);
			$fil = str_replace($placeholder, $subContent, $fil);
			echo $fil;
		}
		}
		
		else if (is_array($placeholder) && is_array($subContent))
		{
			if ($filename == 'g_head.phtml')
		{
			$fil = file_get_contents($this->defaultPath."\\".$filename);
			$length = count($placeholder);
			for($i = 0; $i < $length; $i++)
			{
				$fil = str_replace($placeholder[$i], $subContent[$i], $fil);
			}
			echo $fil;
		}
		}
			else
		{
			echo "Error(10): Filename must follow a certain order, starting with g_ and ending with a .phtml extension. See documentation for more details.";
		}
}
public function displayBody($filename, $placeholder, $subContent)
{
		if (is_string($placeholder))
		{
			if ($filename == 'g_body.phtml')
		{
			$fil = file_get_contents($this->defaultPath."\\".$filename);
			$fil = str_replace($placeholder, $subContent, $fil);
			echo $fil;
		}
		}
		
		else if (is_array($placeholder) && is_array($subContent))
		{
			if ($filename == 'g_body.phtml')
		{
			$fil = file_get_contents($this->defaultPath."\\".$filename);
			$length = count($placeholder);
			for($i = 0; $i < $length; $i++)
			{
				$fil = str_replace($placeholder[$i], $subContent[$i], $fil);
			}
			echo $fil;
		}
		}
			else
		{
			echo "Error(10): Filename must follow a certain order, starting with g_ and ending with a .phtml extension. See documentation for more details.";
		}
}
public function displayFooter($filename, $placeholder, $subContent)
{
		if (is_string($placeholder))
		{
			if ($filename == 'g_footer.phtml')
		{
			$fil = file_get_contents($this->defaultPath."\\".$filename);
			$fil = str_replace($placeholder, $subContent, $fil);
			echo $fil;
		}
		}
		
		else if (is_array($placeholder) && is_array($subContent))
		{
			if ($filename == 'g_footer.phtml')
		{
			$fil = file_get_contents($this->defaultPath."\\".$filename);
			$length = count($placeholder);
			for($i = 0; $i < $length; $i++)
			{
				$fil = str_replace($placeholder[$i], $subContent[$i], $fil);
			}
			echo $fil;
		}
		}
			else
		{
			echo "Error(10): Filename must follow a certain order, starting with g_ and ending with a .phtml extension. See documentation for more details.";
		}
}
}
?>