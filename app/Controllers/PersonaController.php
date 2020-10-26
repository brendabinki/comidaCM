<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{

		$datos = [
					"nombre" => "Roldan Aquino",
					"correo" => "roldan@gmail.com",
					"escuela" => "Tec 1"
				];
		$vistas = view('plantilla/header').
					view('plantilla/menu').
					view('persona', $datos).
					view('plantilla/footer');
		return $vistas;
	}

	

	public function persona()
	{

		$datos = [
					"nombre" => "Roldan Aquino",
					"correo" => "roldan@gmail.com",
					"escuela" => "Tec 1"
				];

		return view('persona', $datos);
	}

	public function direccionObtenida($direccion, $p2) {
		echo $direccion.$p2;
	}

	public function contacto() {
		return view('contacto');
	}

	public function pasarPost() {
		echo $_POST['valor1'];
	}

	public function gorditas(){
		$vistas1 = view('plantilla/header').
					view('plantilla/menu').
					view('gorditas').
					view('plantilla/footer');
		return $vistas1;
	}

	public function tacos(){
		$vistas2 = view('plantilla/header').
					view('plantilla/menu').
					view('tacos').
					view('plantilla/footer');
		return $vistas2;
	}

	public function tamales(){
		$vistas3 = view('plantilla/header').
					view('plantilla/menu').
					view('tamales').
					view('plantilla/footer');
		return $vistas3;
	}

	public function elotes(){
		$vistas4 = view('plantilla/header').
					view('plantilla/menu').
					view('elotes').
					view('plantilla/footer');
		return $vistas4;
	}

}
