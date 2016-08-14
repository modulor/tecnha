<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index()
	{
		if($this->input->post()){

			// send email

			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'mail.modulor2k.com',
				'smtp_port' => 26,
				'smtp_user' => 'contacto@modulor2k.com',
				'smtp_pass' => 'r00tm0du10r',
				'mailtype' => 'html'
			);

			$this->load->library('email', $config);
			
			$this->email->from('contacto@modulor2k.com', 'Tecnha');			
			
			$this->email->to('contacto@tecnha.com');

			$this->email->subject('Mensaje de Contacto');

			$form = array(
				'nombre' => $this->input->post('nombre'),
				'telefono' => $this->input->post('telefono'),
				'direccion' => $this->input->post('direccion'),
				'cita_medidas' => $this->input->post('cita_medidas')
			);

			$productos = 0;

			if(isset($_POST['canceles'])){
				$productos++;
				$form['canceles'] = $this->input->post('canceles');
			}

			if(isset($_POST['barandales'])){
				$productos++;
				$form['barandales'] = $this->input->post('barandales');
			}

			if(isset($_POST['puertas'])){
				$productos++;
				$form['puertas'] = $this->input->post('puertas');
			}

			if(isset($_POST['espejos'])){
				$productos++;
				$form['espejos'] = $this->input->post('espejos');
			}

			if(isset($_POST['accesorios'])){
				$productos++;
				$form['accesorios'] = $this->input->post('accesorios');			
			}

			$form['productos'] = $productos;

			$data['formulario'] = $form;

			$body = $this->load->view('email/email_view.php',$form,TRUE);
			
			$this->email->message($body);

			if($this->email->send()){
				$data['response'] = true;
				$data['message'] = 'email enviado';
			}
			else
				$data['response'] = false;

			$data['response'] = false;

		}
		else
			$data['response'] = false;		

		echo json_encode($data);

	}

}
