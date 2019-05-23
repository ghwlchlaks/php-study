<?php 
    class ClassName
    {
        public $publicVar;
        private $privateVar;
    
        protected $protectedVar;
    
     
    
        public function __constructor()
        {
            $this->publicVar = "public property<br>";
    
            $this->privateVar = "private property<br>";
    
            $this->protectedVar = "protected property<br>";
    
        }
    
     
    
        public function publicMethod()
        {
            echo "public method<br>";
    
        }
        protected function protectedMethod()
        {
            echo "protected method<br>";
        }
        private function privateMethod()
        {
            echo "private method<br>";
        }
    }
    
    
    $object = new ClassName();
    
    
    echo $object->publicVar;      // 접근 가능
    //echo $object->protectedVar; // 접근 불가능
    //echo $object->privatev;     // 접근 불가능
    
    
    $object->publicMethod();      // 호출 가능
    //$object->protectedMethod(); // 호출 불가능
    //$object->privateMethod();   // 호출 불가능
?>