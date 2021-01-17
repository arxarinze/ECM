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
	include_once("core/flesh/_phantom_.php");
	include_once("lib/Arrays/__arrays__.php");
	include_once("lib/File System/__filesystem__.php");
	class generate_skeleton
	{
		public $saveTemplate;
		public $savePath;
		public $copyPath;
		public $defaultPath;
		public function __construct()
		{
		}
		public function use_Tskeleton($template, $path)
		{
		chdir("../include/custom scaffold/".$template);
		$this->defaultPath = getcwd()."//";
		$this->copyPath = $path."//";
		$skeleton = new filesystem();
		$skeleton->transfer_directory($this->defaultPath, $this->copyPath);
		}
		public function create_Eskeleton($populate = "no", $template = null, $save = "no")
		{
		if ($template == null && $save == 'no' && $populate == 'no')
		{
		$this->defaultPath = getcwd();
		$main = array('app','public');
		$dir = new filesystem();
		$dir->create_directory($this->defaultPath, $main);
		$app = array('view','controller','model');
		$dir->create_directory($this->defaultPath.'//'."app", $app);
		$dir->create_directory($this->defaultPath.'//'."public/".'scripts', 'js');
		$c = array('css', 'fonts');
		$dir->create_directory($this->defaultPath.'//'."public/".'content', $c);
		}
		else if ($template == null && $save == 'no' && $populate == "yes")
		{
		$this->defaultPath = getcwd();
		$main = array('app','public');
		$dir = new filesystem();
		$dir->create_directory($this->defaultPath, $main);
		$app = array('view','controller','model');
		$dir->create_directory($this->defaultPath.'//'."app", $app);
		$dir->create_directory($this->defaultPath.'//public//', 'js');
		$c = array('css', 'fonts');
		$dir->create_directory($this->defaultPath.'//'."public//", $c);
		$txt = "Options -Indexes";
		$dir->open_write(getcwd(), '.htaccess', $txt);
		chdir("../include/lib/_ghst_js");
		$dir->copy_file(getcwd(), $this->defaultPath.'\\public\\'.'js', '_ghst_.js');
		}
	}
	}
	?>