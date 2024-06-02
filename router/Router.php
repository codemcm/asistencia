<?php

	class Router{

		public function cargarVista($vista){

			switch($vista):
                case 'TestListView':
                    include_once __DIR__ . ('/../views/examen/'.$vista.'.php');
                break;
                default:
                    include_once('../vistas/error.php');
                break;
            endswitch;
		}

		public function validarGET($variable){
            if(empty($variable)){
                echo "<script> window.history.back();</script>";
            } else{
                return true;
            }
        }
	}

 ?>
