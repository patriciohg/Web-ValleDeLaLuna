<?php if(!defined('BASEPATH')) exit('No direct acces script allowed');
require_once('PHPMailer/src/phpMailer.php');
class My_PHPMailer extends PHPMailer{
	public function __construct(){
		parent::__construct();
	}
}

?>