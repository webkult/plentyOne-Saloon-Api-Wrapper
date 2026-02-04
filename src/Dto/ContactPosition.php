<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ContactPosition extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $position = null,
	) {
	}
}
