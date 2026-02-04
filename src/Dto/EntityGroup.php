<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class EntityGroup extends SpatieData
{
	public function __construct(
		public ?string $name = null,
	) {
	}
}
