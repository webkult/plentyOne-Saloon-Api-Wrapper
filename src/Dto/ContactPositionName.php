<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ContactPositionName extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $positionId = null,
		public ?string $lang = null,
		public ?string $name = null,
	) {
	}
}
