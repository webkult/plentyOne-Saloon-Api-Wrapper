<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class UnitName extends SpatieData
{
	public function __construct(
		public ?int $unitId = null,
		public ?string $lang = null,
		public ?string $name = null,
	) {
	}
}
