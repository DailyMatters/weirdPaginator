<?php

class Paginator{

	public function paginate(int $page_number): array
	{
		// for the shift we use the ($page_number % 3) operation
		// for case 0 and 1 we a call to ($page_number - $shift)
		// for case 2 we do two calls. One to ($page_number - $shift) and one to ($page_number - $shift - 1)
		switch($page_number % 3){
	
			case 0:
				$shift = $this->getShift($page_number);
		
				$result = $this->getPage($page_number - $shift);

				//Get last ten last results from result array
				return array_slice($result, 5, 15);
			case 1:
				$shift = $this->getShift($page_number);
		
				$result = $this->getPage($page_number - $shift);

				//Get first ten results from result array
				return array_slice($result, 0, 10);
			case 2:
				$shift = $this->getShift($page_number);
			
				//Get last five and first five results and merge them
				$first_result = $this->getPage($page_number - $shift - 1);
				$second_result = $this->getPage($page_number - $shift);

				return array_merge(array_slice($first_result, 10, 15), array_slice($second_result, 0, 5));
		}

	}

	public function getShift(int $page_number): int
	{
		if($page_number === 0){
			throw new Exception('Invalid Page Number!');
		}

		return intdiv($page_number, 3);
	}

	public function getPage(int $page_number): array
	{
		if($page_number === 0){
			throw new Exception('Invalid Page Number!');
		}

		$number_max = $page_number * 15;
	
		return range($number_max - 14, $number_max);
	}

}

//This code block is used for testing the overall functionality
//$paginator = new Paginator();
//print_r($paginator->paginate(4));
//print_r($paginator->paginate(5));
//print_r($paginator->paginate(6));

