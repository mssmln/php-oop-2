<?php
trait GetBrowser{
    public $browser;

    public function setBrowser($_kind,$_version){
        $this->browser = $_kind .' ' .$_version;
    }

    public function getBrowser(){
        return $this->browser;
    }
}