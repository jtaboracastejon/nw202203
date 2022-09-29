<?php
    require_once "Demo/Formas.php";
    class Circle implements IFormas{
        private $ratio = 0;
        private $pi =  pi();
        public function __construct($ratio)
        {
            $this->ratio = $ratio;
        }
        /* pi*r^2 */
        public function getArea(){
            return $this->pi*$this->ratio**2;
        }
        /* 2*pi*r */
        public function getPerimetro()
        {
            return 2*$this->pi*$this->ratio;
        }
    }
?>