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

    // 범위 지정 연산자 (::) : 단순히 클래스의 정의 내에서 프로퍼티나 메소드를 사용하고 싶을 때는 범위 지정 연산자(::)를 사용할 수 있습니다. 범위지정 연산자는 클래스의 상수, 정적 멤버 또는 재정의된 멤버에 접근 할 수 있게 해줍니다.
    // 또한 self 키워드를 사용하여 자기 자신에 접근할때, parent키워드를 이용하여 부모 클래스에 접근할때 사용할 수 있습니다.
    /**
     * 예제
     * echo OtherClassName::CONSTANT;
     * echo self::$property;
     * echo parent::CONSTANT
     */

    //  인터페이스 
    /**
     * 추상 메소드 
     * 자식클래스에서 반드시 오버라이딩해야만 사용할 수 있는 메소드를 의미합니다. 
     * 이러한 추상 메소드는 선언부만이 존재하며, 구현부는 작성되어있지 않습니다. 
     * 구현은 자식클래스에서 오버라이딩하여 사용하는 것입니다.
     * 문법 :abstract 접근제어자 function 메소드이름();
     */

     /**
      * 추상 클래스 
      * php에서는 최소한 하나 이상의 추상메소드를 포함하는 클래스를 추상 클래스라고 합니다. 
      * 반드시 사용되어햐 하는 메소드를 추상클래스메소드로 선언해 놓으면, 이 클래스를 상속받는 모든 클래스에서는 이 추상 메소드를 반드시 재정의 해야합니다.
      */
?>