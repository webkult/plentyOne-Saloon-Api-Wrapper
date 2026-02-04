<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Availability extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $icon = null,
		public ?int $averageDays = null,
	) {
	}
}
