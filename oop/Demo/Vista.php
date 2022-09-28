<?php 
class Vista {
    public $strNombre;
    public $strPais;
    public $strFechaNacimiento;
    public $intNumero;

    public function __construct($strNombre="",$strPais="",$intNumero="",$strFechaNacimiento=""){
        $this->strNombre = $strNombre;
        $this->strPais = $strPais;
        $this->intNumero = $intNumero;
        $this->strFechaNacimiento = $strFechaNacimiento;
    }

    public function printDatos(){
        echo $this->strNombre ." "
            .$this->strPais   ." "
            .$this->intNumero ." "
            .$this->strFechaNacimiento ." ";
    }

    
}

?>