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


    // static 키워드 : 클래스를 정의할때 static 키워드를 사용한 프로퍼티와 메소드는 해당 클래스의 인스턴스를 생성하지 않아도 접근할 수 있게 됩니다.
    /**
     * 특징
     * static 키워드로 선언된 정적 프로퍼티는 인스턴스화된 객체에서는 접근 할 수 없습니다.
     * static 키워드로 선언된 정적 메소드는 인스턴스화된 객체에서도 접근 할 수 있습니다.
     * 정적 메소드 내에서는 $this 변수를 사용할 수 없습니다.
     */

    class StaticMember
    {
        public static $staticProperty = "static property";
        public static function showProperty()
        {
            echo self::$staticProperty;
        }
    }
    
    echo StaticMember::showProperty();  // 호출 가능
    
    echo StaticMember::$staticProperty; // 접근 가능
    
    $var = new StaticMember();          // 인스턴스 생성
    echo $var->showProperty();          // 호출 가능
    
    //echo $var->$staticProperty;       // 접근 불가능
?>