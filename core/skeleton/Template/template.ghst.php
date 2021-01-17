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
class Page implements templateInterface
{
public $content;
public $title = 'Client Database';
public function Display()
{
	echo "<!DOCTYPE html><html>\n<head>\n";
	$this->DisplayTitle();
	$this->DisplayStyles('style.css');
		echo '<script src="../../public/js/_ghst_.js"></script>';
	echo "</head>\n<body>\n";
	//echo "<profile>";
	//echo $this->content;
	//echo "</profile>";
	$this->DisplayNotification();
	//$this->DisplayHeader();
	//$this->DisplayMenu($this->buttons);
	//echo $this->content;
	//$this->DisplayFooter();
	//<div id = "content0">
	//</div>
	//<div id = "content1">
	//</div><div id="c1"></div></div>
	echo '<script src="../../public/js/in.js"></script>';
	echo '</body>';
}

public function DisplayTitle()
{
	echo '<title> '.$this->title.' </title>';
}
public function DisplayNotification()
{	
	echo'<div id = "doc"><div class="header-wrap"><div class="header-image header-slide header-wrapper"><div class="header-view"><h1><a href="/" class = "Home-Button"><span class="logo">Resolution Finance</span><span class="visuallyhidden">Home</span></a></h1>
	<div class="Page-Content"><h2 class="Page-Content-Header">See what’s happening right now.</h2><p class="Page-Content-Sub">Find clients, accept facility request and perform risk analysis.</p></div><div class = "Navigation"><div class="Navigation-Sub">';
	$this->DisplayButton();
	echo'</div></div>
	</div></div></div><div class = "Appcontent" id = "timeline"><div class="Grid-Content" id = "content"><div class = "content" id="content0"></div><div class = "content" id="view0"></div></div></div></div>';
}
function __construct()
{
	$par = 'Welcome '.$_SESSION['login_user'];
	$this->content=$par;
}
public function DisplayStyles($sname)
{
	echo '<link rel="stylesheet" type="text/css" href="../../public/css/'.$sname.'"/>';
}
public function DisplayScript()
{
	echo '<script src="../scripts/_ghst_.js"></script>';
}
public function DisplayHeader()
{
	echo '
	<h1>Resolution Finance</h1>';
}
public function DisplayButton($active = true)
{
	echo"
<button id = 'test.php'>Search</button><button id = 'insert0.php'>Update</button><a href ='pass.php'><button>Change Password</button></a><button>Pending Application</button><a href ='../controller/f_log.php'><button>Logout</button></a><button>Notifications</button>";
}
}
?>