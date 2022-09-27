<?php 
class Vista {
    public $strNombre;
    public $strPais;
    public $strFechaNacimiento;
    public $intNumero;

    public function printDatos(){
        echo $this->strNombre ." "
            .$this->strPais   ." "
            .$this->intNumero ." "
            .$this->strFechaNacimiento ." ";
    }
}

?>