<?php 
// 오버라이딩 : 이미 정의된 메소드를 같은 이름의 메소드로 다시 정의하는 것.
// 즉 부모클래스의 메소드의 이름만 작성하면, 해당 메소드를 오버라이딩 할 수 있다.
    class A
    {
        public $property = "class A";
        public function showProperty()
        {
            echo $this->property."<br>";
        }
    }
    
    
    class B extends A                    // 클래스 A를 상속 받음.
    {
        public $property = "class B";
        public function showProperty()   // 클래스 A의 메소드를 오버라이딩
        {
            echo "hello ".$this->property."<br>";
        }
    }
    
    
    $a = new A();
    $a->showProperty();                  // 클래스 A의 메소드 호출
    $b = new B();
    $b->showProperty();                  // 클래스 B의 메소드 호출
?>