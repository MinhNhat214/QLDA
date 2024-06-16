<?php 
class AboutUs extends Router {
    public function Home(){
        echo $this->View('layout_master', [
            'page' => 'About_Us'
        ]);
    }
}
?>