<?php 
    Class host{
        private $senhaHost = "xxx";
        private $senhaLocalHost = "xxx";
    
        public function getSenha($tipoHost){
            if ($tipoHost == "localhost"){
                return $this->senhaLocalHost;    
            }else{
                return $this->senhaHost;
            }
        }
    }
?>
