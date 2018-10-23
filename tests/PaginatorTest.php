<?php

use PHPUnit\Framework\TestCase;

class PaginatorTest extends TestCase
{

	public function testGetShiftFunctionForPositiveValue()
	{
		$paginator = new Paginator();
		
		$this->assertInternalType("int", $paginator->getShift(3));
		$this->assertEquals($paginator->getShift(3), 1);
	}

	public function testGetShiftFunctionForInvalidPageNumber()
	{
		$paginator = new Paginator();
		
		$this->expectException(Exception::class);

		$paginator->paginate(0);
	}

	public function testGetPageWithPositiveValue()
	{
		$paginator = new Paginator();

		$expectedArray = [
			0 => 1,
			1 => 2,
			2 => 3,
			3 => 4,
			4 => 5,
			5 => 6,
			6 => 7,
			7 => 8,
			8 => 9,
			9 => 10
		];

		$this->assertEquals($paginator->paginate(1), $expectedArray);
	}

	public function testGetPageFunctionForInvalidPageNumber()
	{
		$paginator = new Paginator();
		
		$this->expectException(Exception::class);

		$paginator->paginate(0);
	}

}
