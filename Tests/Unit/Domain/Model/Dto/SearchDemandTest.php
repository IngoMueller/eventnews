<?php

namespace GeorgRinger\Eventnews\Tests\Unit\Domain\Model;

use GeorgRinger\Eventnews\Domain\Model\Dto\SearchDemand;
use TYPO3\CMS\Core\Tests\UnitTestCase;

class SearchDemandTest extends UnitTestCase {

	/** @var SearchDemand */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new SearchDemand();
	}

	/**
	 * @test
	 */
	public function setOrganizer() {
		$value = array(
			3 => 3,
			4 => 4
		);
		$this->subject->setOrganizers($value);

		$this->assertEquals($value, $this->subject->getOrganizers());
	}

	/**
	 * @test
	 */
	public function setLocation() {
		$value = array(
			4 => 4,
			5 => 5,
		);

		$this->subject->setLocations($value);

		$this->assertEquals($value, $this->subject->getLocations());
	}


	/**
	 * @test
	 */
	public function setCategory() {
		$value = array(
			5 => 5,
			6 => 6,
		);

		$this->subject->setCategories($value);

		$this->assertEquals($value, $this->subject->getCategories());
	}

}
