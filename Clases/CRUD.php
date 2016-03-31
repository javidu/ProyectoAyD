<?php

      /**
 	* .............................................
 	* UNIVERSIDAD  FRANCISCO  DE  PAULA  SANTANDER
 	*    PROGRAMA  DE  INGENIERIA   DE   SISTEMAS
 	*      PROYECTOS DE GRADO INGSISTEMAS UFPS
 	*             SAN JOSE DE CUCUTA-2016
	 * ............................................
 	*/

	/**
	* Clase encargada del manejo de consultas a la base de datos. 
	* Esta clase serÃ¡ extendida por las demas clases del modelo
	*/

class CRUD{

		private $conexion;

		/**
		*	MÃ©todo que se encarga de realizar la conexiÃ³n a la Base de Datos
		*	@param $host - Nombre del servidor de Base de Datos
		*	@param $usuario - Nombre del usuario root
		*	@param $contrasena - ContraseÃ±a del usuario root
		*	@param $base - Nombre de la base de datos
		*/
		public function conectar()
		{
                  $this->conexion = mysqli_connect("localhost","root","","Grado") or die(mysql_error($conexion));
		}

		/**
		*	MÃ©todo que se encarga de cerrar la conexiÃ³n con la Base de Datos.
		*/
		public function desconectar()
		{
			mysqli_close($this->conexion);
		}

		/**
		*	MÃ©todo que se encarga de realizar una operaciÃ³n en alguna tabla de la Base de Datos
                 * (InserciÃ³n, Borrado, EliminaciÃ³n, ActualizaciÃ³n).
		*	@param $sql - Revise un String con la operaciÃ³n a Realizar
		*	@return un fetch_array o un boolean dependiendo de la consulta realizada
		*/
                
                /**
                 * 
                 * @param type $columnas
                 * @param type $tabla
                 * @param type $where
                 */
		public function consultar($columnas,$tabla,$where)
		{
                        $busco="Select ".$columnas." from ".$tabla." where ".$where;
                        $resul=mysqli_query($this->conexion,$busco);
                        $res= mysqli_fetch_array($resul);
                        var_dump($res);
                        
                }
                
//                public function insertar($columnas,$tabla,$where) 
//                {
//                   $busco="insert ".$columnas." to".$tabla." where ".$where;
//	             $resul=mysqli_query($this->conexion,$busco);
//                   $res= mysqli_fetch_array($resul);
//                   var_dump($res);
//                }
                
                /**
                 * 
                 * @param type $columnas
                 * @param type $tabla
                 * @param type $where
                 */
                public function delete($columnas,$tabla,$where) {
                        $busco="delete ".$columnas." from ".$tabla." where ".$where;
			$resul=mysqli_query($this->conexion,$busco);
                        $res= mysqli_fetch_array($resul);
                        var_dump($res);
                }
                

	}
?>
