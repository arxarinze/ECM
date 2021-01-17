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
class filesystem
{
	public function transfer_directory($path, $copyPath)
	{
		if ($path != null && file_exists($path) && $copyPath != null && file_exists($copyPath))
		{
			$p = $this->list_directory($path);
			$length = count($p);
			for($i = 0; $i<$length; $i++)
			{
			if (is_dir($p[$i]))
			{
				$this->create_directory($copyPath, $p[$i]);
				$this->transfer_directory($path.$p[$i]."\\", $copyPath.$p[$i]."\\");
			
			}
			else
			{
				@copy($path."\\".$p[$i], $copyPath.$p[$i]);
			}
			}
		}
	}
	public function list_directory($path)
	{
		$dir = scandir($path, 1);
		$dir1[] = 0;
		for ($i = 0; $i < count($dir); $i++)
		{
			if($dir[$i] != '.' && $dir[$i] != '..')
			{
				$dir1[$i] =$dir[$i];
			}
		}
		return $dir1;
	}
	public function create_directory($path, $name, $nest="no")
	{
		if(is_string($name))
		{
			$path .= "\\".$name;
			@mkdir($path, 0700);
		}
		elseif (is_array($name) && $nest == "no")
		{
			$cpath = $path;
			$length = count($name);
			for($i = 0; $i < $length; $i++)
			{
				$path = $cpath;
				$path .= "\\".$name[$i];
				@mkdir($path, 0700) ;
			}
		}
		elseif (is_array($name) && $nest == "yes")
		{
			$length = count($name);
			for($i = 0; $i < $length; $i++)
			{
				$path .= "\\".$name[$i];
				@mkdir($path, 0700);
			}
		}
	}
	public function delete_directory()
	{
		
	}
	public function create_file($path, $name)
	{
		$_path = $path;
		if(is_string($name) == true)
		{
			$path .= "\\".$name;
			$file = fopen($path, 'w') or die("Unable to create file");
			fclose($file);
		}
		elseif (is_array($name) == true)
		{
			$length = count($name);
			for($i = 0; $i < $length; $i++)
			{
				$path .= "\\".$name[$i];
				$file = fopen($path, 'w') or die("Unable to create file");
				fclose($file);
				$path = $_path;
			}
		}
	}
	public function copy_file($path, $path1, $name)
	{
		$_path = $path;
		if(is_string($name) == true)
		{
			copy($path."\\".$name, $path1."\\".$name);
		}
	}
	public function delete_file($path, $name)
	{
		$_path = $path;
		if(is_string($name))
		{
		$path .= "\\".$name;
		if(file_exists($path))
		unlink($path);
		}
		else if(is_array($name))
		{
			$length = count($name);
		for($i = 0; $i < $length; $i++)
		{
			$path .= "\\".$name[$i];
			if(file_exists($path))
			unlink($path);
			$path = $_path;
		}
		}
	}
	public function open($path)
	{
		$open = fopen($path, 'w');
		return $open;
	}
	public function open_write($path, $filename, $content)
	{
		$write = fopen($path."\\".$filename, "w");
		fwrite($write, $content);
		fclose($write);
	}
}
?>