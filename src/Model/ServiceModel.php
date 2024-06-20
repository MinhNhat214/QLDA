<?php 
class ServiceModel extends DBInteraction{
    public function getService(){
        $getService = $this->getRaw('SELECT * FROM services');
        if($getService){
            return $getService;
        }else{
            return [];
        }
    }
    public function getServiceOneRaw(){
        $getService = $this->oneRaw('SELECT * FROM services WHERE ');
        if($getService){
            return $getService;
        }else{
            return [];
        }
    }
}
?>
