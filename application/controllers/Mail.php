<?php 
	Class Mail extends CI_controller{
		public function sendMail(){
			$usr_mail = $_POST['mail'];
			$reason = $_POST['reason'];


			$this->load->library('email');

			$config ? array(
				'mailtype'=>"html",
			);
			$this->email->initialize($config);
			//E-mail de origen
			$this->email->from('Contato@valledelalunaspa.cl');
			//E-mail de Destino
			$this->email->to($usr_mail);
			//cc E-mail 
			//$this->email->cc();
			//Asunto
			$this->email->subject($reason);
			//contenido
			$this->email->message(str_replace("{contents}",
				$this->email_text(),
				$this->email_template())
			);
			if($this->email->send()){
				$this->load->view('pages/Spanish/Spanish');
			}else{
				echo 'Error al enviar el correo';
			}
			//$this->email->attach(FCPATH .	'documents/') //adjuntar archivos
		}
		public function email_template($params=array()){
			
			$_template.='<!DOCTYPE html>';
			$_template.='<head>';
			$_template.='</head>';
			$_template.='<body>';
			$_template.='<h1>'.email_mensage().'</h1>';
			$_template.='</body>';
		}
		public function email_mensage(){
			$_mensaje= "ke pex prro gracias, saludos :v"
			return $_mensaje;
		}
	}
?>