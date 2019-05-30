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

    // php에서 인터페이스란 다른 클래스를 작성 할때 기본이 되는 틀을 제공하면서, 다른 클래스 사이의 중간 매개 역할도 담당하는 일종의 추상 클래스를 의미합니다.

    interface Transport                  // 인터페이스의 정의
{
    public function move();          // 구현할 메소드

    public function stop();          // 구현할 메소드
}

 

interface Overland extends Transport // Transport 인터페이스를 상속받는 Overland 인터페이스
{
    public function highpass();      // 구현할 메소드
}


class Car implements Overload        // Overland 인터페이스를 구현하는 Car 클래스
{
    function move()                  // 메소드 구현
    {
        
    }

    function stop()                  // 메소드 구현
    {
        
    }

    function highpass()              // 메소드 구현
    {
        
    }
}
    // 오버로딩 : 다른 대부분의 객체 지향 프로그래밍 언어에서 오버로딩은 매개변수의 개수와 타입을 달리하여 같은 이름의 메소드를 중복하여 정의 하는 것을 의미합니다.
    // 하지만 php에서는 다른 언어와는 달리 프로퍼티나 메소드를 동적으로 생성한다는 의미로 오버로딩을 사용합니다.
    // 이때 오버로딩되는 메소드는 반드시 public으로 정의 되어야합니다.

    // 메소드 오버로딩 : php에서는 접근불가 메소드를 오버로딩하기 위해 다음과 같은 매직 메소드를 구현해야합니다.
class MethodOverloading {

    public function __call($name, $arguments)

    {

        echo join(", ", $arguments)."에서 접근 불가 메소드를 호출합니다!";

    }

    public static function __callStatic($name, $arguments)

    {

        echo join(", ", $arguments)."에서 접근 불가 메소드를 호출합니다!";

    }

}

$obj = new MethodOverloading();             // MethodOverloading 객체 생성

$obj->testMethod("클래스 영역");            // 클래스 영역에서 접근 불가 메소드 호출

MethodOverloading::testMethod("정적 영역"); // 정적 영역에서 접근 불가 메소드 호출

// 바인딩 : 프로그램에 사용된 구성 요소의 실제 값 또는 프로퍼티를 결정짓는 행위를 의미합니다. 예를들어 함수를 호출하는 부분에서 실제 함수가 위치한 메모리를 연결하는 것도 바인딩입니다.
// 늦은 정적 바인딩
class A
{
    public static function className()
    {
        echo __CLASS__;
    }
    public static function printClass()
    {
        self::className();
    }
}

class C extends A
{
    public static function className()
    {
        echo __CLASS__;
    }
}
C::printClass(); // A
// 위의 예제에서 ①번 라인의 실행 결과는 클래스 A를 출력합니다.
//즉, 클래스 B에서 printClass() 메소드를 호출하지만, 이 메소드는 클래스 A에서 정의되므로 클래스 A를 출력하게 됩니다.
?>