<?php
	class calculator{ 
	    function add($p1,$p2) 
	    { 
	        return $p1+$p2; 
	    } 
	} 
    require_once("PHPUnit.php"); 
        
    class calculatorTest extends PHPUnit_TestCase 
    { 
        public $o; 
        //��ʼ��ʱ���ʼ��һ���������� 
        function setUp() 
        { 
            $this->o = new calculator(); 
        } 
        //���������ʱ������������ 
        function tearDown() { 
                unset($this->o); 
        } 
        function testadd() 
        { 
            $r = $this->o->add(1,2); 
            $e = 5; 
            //assertEquals��assertTrue����һ��������������صĲ���������ϸ 
            //�����1+2�϶�����3�����ǹ���д�������ķ�Ӧ��ע�������ǹ���д��ʵ�ʲ���ʱ����Щ�����������ȫ��ȷ�ģ���Ϊ���Ĺ��ܾ��Ǽ���෽���Ƿ���ȷ�� 
            $this->assertEquals($r,$e); 
        } 
        function testadd2() 
        { 
            $r = $this->o->add(102,106); 
            $e = 208; 
            $this->assertTrue($r == $e); 
        } 
         
    } 
?>