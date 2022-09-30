<?php
class Prestamo{
    public $strNombreCliente;
    public $tasaInteres;
    public $tasaInteresMensual;
    public $cuota;
    public $periodoAnios;
    public $periodoMeses;
    public $capitalPrestado;

    public function __construct($strNombreCliente,$intPlazoAnios,$capitalPrestado,$floatTasaDeInteresAnual)
    {
        $this->strNombreCliente = $strNombreCliente;
        $this->periodoAnios = $intPlazoAnios;
        $this->periodoMeses = $intPlazoAnios*12;
        $this->capitalPrestado = $capitalPrestado;
        $this->tasaInteres = $floatTasaDeInteresAnual;
    }

    

    /* fuente https://www2.baccredomatic.com/sites/default/files/formulas_de_calculos_y_ejemplos.pdf */
    public function calcularCuota(){
        /* interesMensual = ((tasaAnual)/((360*12)/365)) */
        $this->tasaInteresMensual = (($this->tasaInteres/100)/((360*12)/365));
        /* cuota = (monto)/((1-(1-interesMensual)^-n)/(interesMensual)) */
        $denominador=(1-(1+$this->tasaInteresMensual)**-$this->periodoMeses)/($this->tasaInteresMensual);
        $this->cuota = $this->capitalPrestado/$denominador;
        return $this->cuota;
    }

    public function generarTablaAmortizada(){
        $i=1;
        $capitalPendiente=$this->capitalPrestado;
        $arrTabla[0]=array(
            "numeroCuota" => 0,
            "capitalAmortizado" => 0,
            "interes" => 0,
            "cuota" => 0,
            "capitalPendiente" => $capitalPendiente,
        );
        while($i<=$this->periodoMeses){
            $interes = $capitalPendiente*$this->tasaInteresMensual;
            $amortizacion =$this->cuota-$interes;
            $capitalPendiente-=$amortizacion;
            $dicFila=[
                "numeroCuota" => $i,
                "capitalAmortizado" => $this->cuota-$interes,
                "interes" => $interes,
                "cuota" => $this->cuota,
                "capitalPendiente" => $capitalPendiente,
            ];
            $arrTabla[]=$dicFila;
            $i++;
        }
        return $arrTabla;
    }
    
    public function guardarPrestamo(){
        session_start();
        if(isset($_SESSION["prestamos"])){
            $prestamos = $_SESSION["prestamos"];
        }
        $dicPrestamo = [
            "nombreCliente" => $this->strNombreCliente,
            "tasaInterés"   => $this->tasaInteres,
            "cuota" => $this->cuota,
            "periodoAnios" => $this->periodoAnios,
            "periodoMeses" => $this->periodoMeses,
            "capitalPrestado" => $this->capitalPrestado
        ];
        $prestamos[]=$dicPrestamo;
        $_SESSION["prestamos"]=$prestamos;
    }

}
?>