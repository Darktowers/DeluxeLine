<?php

class Reservacion {
	
	private $conn;
	private $data = array();
	
	public function __construct() {
		include 'conexion.php';
		$this->conn = $mysql;
	}
	
	/**
	 * Cargar por ID
	 * @param unknown $id
	 */
	public function loadByID($id) {
		$query = "SELECT * FROM reserva WHERE idReserva = $id";
		$rs = $this->conn->query($query);
		
		if ($row = mysqli_fetch_array($rs)) {
			$this->setData($row);
			$this->validate();
			return true;
		} else {
			return false;
		}
	}
	
	/**
	 * Enviar array, 
	 * @param unknown $row
	 */
	public function setData($row) {
		$this->data = $row;
	}
	
	/**
	 * Setter: Fuck u William!!
	 * @param unknown $name
	 * @param unknown $value
	 */
	public function __set($name, $value) {
		$this->data[$name] = $value;
	}
	
	/**
	 * Getter: Fuck u william!!
	 * @param unknown $name
	 */
	public function __get($name) {		
		//Validar si existe en el array
		if (array_key_exists($name, $this->data)) {
			return $this->data[$name];
		}
		
		$trace = debug_backtrace();
		trigger_error("Varible no definida via __get(): $name en $trace[0]['file'] 
				linea $trace[0]['line']", E_USER_NOTICE);
		
		return null;
	}
	
	/**
	 * Verificar si ya se envio.
	 * @param unknown $name
	 */
	public function __isset($name) {
		return isset($this->data[$name]);
	}
	
	/**
	 * Quitar de la lista
	 * @param unknown $name
	 */
	public function __unset($name) {
		unset($this->data[name]);
	}
	
	/**
	 * Metodo para ingresar las validaciones
	 * Regresa un texto. Si es vacio significa que no hay problema, de lo 
	 * contrario devuelve el error encontrado.
	 */
	private function validate() {
		
		if (empty($this->fkIdUsuario)) {
			return "El usuario es obligatorio!";
		}
		
		if (empty($this->fkIdHabitacion)) {
			return "Por alguna razon esta habitacion ya no esta disponible !Disculpe la moslestias¡";
		}
		
		if (empty($this->precioFinal)) {
			return "El precio es obligatorio!";
		}
		
		if (empty($this->fkIdEstado)) {
			return "El estado es obligatorio!";
		}
		
		if (empty($this->fechaInicioReserva)) {
			return "La fecha de inicio es obligatoria!";
		}
		
		if (empty($this->fechaFinReserva)) {
			return "La fecha de finalizacion es obligatoria!";
		}
		
		$date1 = new DateTime($this->fechaInicioReserva);
		$date2 = new DateTime($this->fechaFinReserva);
		
		if ($date1 > $date2) {
			return "Error: La fecha de inicio no puede ser mayor que la fecha de fin!";
		}
		
		return "";
	}
	
	/**
	 * Metodo para guardar la informacion en la base de datos.
	 */
	public function save() {
		$msg = $this->validate();
		
		//Validar que no exista errores, de lo contrario devolver el mensaje
		if ($msg) {
			return $msg;
		}
		
		$query = "INSERT INTO reserva (fkIdUsuario, fkIdHabitacion, precioFinal, fkIdEstado, fechaInicioReserva, fechaFinReserva)
				VALUES ('".$this->fkIdUsuario."','".$this->fkIdHabitacion."','".$this->precioFinal."','".$this->fkIdEstado."','".$this->fechaInicioReserva."','".$this->fechaFinReserva."')";
						
		$rs = $this->conn->query($query);
		
		//Validar que se guardo correctamente, de lo contrario enviar el error capturado.
		if ($rs) {
			//Se asigna el ultimo ID, para saber con cual se guardo y asi generar el ticket a entregar al cliente
			$this->idReserva = mysqli_insert_id($this->conn);
		} else {
			$msg = "\n".mysqli_error($this->conn)."\n";
		}
		
		return $msg;
	}
}