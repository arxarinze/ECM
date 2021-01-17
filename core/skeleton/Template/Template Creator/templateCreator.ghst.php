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
include_once("core/skeleton/Template/Driver/templateCInterface.php");
include_once("lib/Arrays/__arrays__.php");
include_once("lib/File System/__filesystem__.php");
class tCreator implements templateCInterface
{
public $defaultPath;

public function __construct($path)
{
	$this->defaulthPath = $path;
}
public function create_Etemplate($path)
{
	$dir = new filesystem();
	$dir->create_file($path, 'head.phtml');
	$dir->create_file($path, 'body.phtml');
	$dir->create_file($path, 'footer.phtml');
}
public function create_Ptemplate($path)
{
	$dir = new filesystem();
	$dir->create_file($path, 'head.phtml');
	$dir->create_file($path, 'body.phtml');
	$dir->create_file($path, 'footer.phtml');
	$dir->open_write();
	$dir->open_write();
	$dir->open_write();
}
public function create_Navigation($button, $id = array(), $class)
{
	if (is_array($button) && is_array($id) && is_string($class))
	{
	$length = count($button);
	for($i = 0; $i < $length; $i++)
	{
	$menu .= "<button id =".$id[$i]." class =".$class.">".$button[$i]."</button><br>";
	}
	return $menu;
	}	
}
	public function create_Body($id, $content = null, $script= null, $b = "nope", $button = array(), $id1 = array())
	{
		if($b == 'sure' && isset($content))
		{
		$body .= "<body ".$id.">".
		$this->create_Navigation($button, $id1);
		."<br>".$content."</body>"
		."<br>".$this->create_Uscript($script);
		return $body;
		}
		else if ($b == 'nope' && isset($content))
		{
		$body .= $body = "<body ".$id.">".
		$content
		."</body>";
		return $body;
		}
	}
	public function create_Head($auto, $doctype=null, $meta=null, $css=null, $js=null)// $auto is pre-generated <head>
	{
		if($auto == "yes" && doctype = "html")
		{
			$head .= "<!DOCTYPE>";
			return $head;
		}
		else if($auto == "yes" && doctype == "xml")
		{
			$head .= "<!DOCTYPE>";
			return $head;
		}
		else if ($auto == "no")
		{
			$head .= "<head>".$meta."<br>"
			.$css."<br>".$js."<br>"."</head>";
			return $head; 
		}
	}
	public function create_Uscript($script, $type = 'js')
	{
		$scr = "<script>".$script."</script>";
	}
	public function create_Footer()
	{
		
	}
}
?>