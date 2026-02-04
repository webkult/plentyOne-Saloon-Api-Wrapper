<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PropertyGroupOption extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $groupId = null,
		public ?string $type = null,
		public ?string $value = null,
	) {
	}
}
