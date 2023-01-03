<?php
namespace App\Test;

//use App\MyClass;

class MyClass {
    public function add($a, $b){
        return 0;
    }
}

class Test1Test extends \PHPUnit\Framework\TestCase {

	public function testAdd(): void  {
		$myObj = new MyClass();
		$this->assertEquals($myObj->add(1,2), 3);
		$this->assertEquals($myObj->add(-1,4), 3);
		$this->assertEquals($myObj->add(0,0), 0);
	}

}
?>
