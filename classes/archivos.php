<?php
/*
* Modulo: Archivos
* Version: 0.1A
* Dependencias:
* 
* Manejador de archivos y carpetas.
*/
class Archivos {
	public static function eliminarDir($carpeta){
		foreach(glob($carpeta . "/*") as $archivos_carpeta)
		{
			if (is_dir($archivos_carpeta))
			{
				Archivos::eliminarDir($archivos_carpeta);
			}
			else
			{
			unlink($archivos_carpeta);
			}

		}
		rmdir($carpeta);
		return true;
	}

}
?>