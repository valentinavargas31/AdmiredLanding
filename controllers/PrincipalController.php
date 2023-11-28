<?php

class PrincipalController {
    public function principal(){
       require_once('views/components/layout/headd.php');
       require_once('views/principal/principal.php');
       require_once('views/components/layout/footer.php');
    }
    
}