<?php 
    Class host{
        private $senhaHost = "Host2110!";
        private $senhaLocalHost = "Pa211030!";
    
        public function getSenha($tipoHost){
            if ($tipoHost == "localhost"){
                return $this->senhaLocalHost;    
            }else{
                return $this->senhaHost;
            }
        }
    }
?>
