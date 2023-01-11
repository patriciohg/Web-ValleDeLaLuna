<?php
	class Pages Extends CI_controller{
		function index($page ='Spanish/spanish'){
			if(! file_exists('application/views/pages/'.$page.'.php')){
				show_404();
			}
			$this->load->view('pages/'.$page);
		}
		function Spanish($page='Spanish'){
			if(! file_exists('application/views/pages/Spanish/'.$page.'.php')){
				show_404();
			}
			$this->load->view('pages/Spanish/'.$page);	
		}	
		function English($page='English'){
			if(! file_exists('application/views/pages/English/'.$page.'.php')){
				show_404();
			}
			$this->load->view('pages/English/'.$page);	
		}
	}
?>