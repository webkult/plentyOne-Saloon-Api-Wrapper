<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AvailabilityName extends SpatieData
{
	public function __construct(
		public ?int $availabilityId = null,
		public ?string $lang = null,
		public ?string $name = null,
	) {
	}
}
