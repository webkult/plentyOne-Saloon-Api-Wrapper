<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class UnitCombination extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $unitId = null,
		public ?int $content = null,
	) {
	}
}
