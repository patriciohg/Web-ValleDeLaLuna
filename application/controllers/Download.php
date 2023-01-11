<?php 
Class Download extends CI_controller{
	public function Descargas($filename){
		$filePath = "Download/".$fileName;
		if(!empty($fileName) && file_exist($filePath)){
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$fileName");
			header("Content-Type: application/zip");
			header("Content-Transfer-Encoding: binary");
			readfile($filePath);
		}
	}
}
?>