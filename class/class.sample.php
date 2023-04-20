<?php
class Sample{
    public $n=1;
    public function sample($name){
        echo "Hello ".$name;
        echo $this->n;
        $this -> private_sample($name);
 }
 private function private_sample($name){
    echo "Private Hello".$name;
 }
 protected function protected_sample(){
    echo "Protected Hello World";
 }
}