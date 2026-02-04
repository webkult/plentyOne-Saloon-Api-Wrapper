<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PropertyGroupName extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $groupId = null,
		public ?string $lang = null,
		public ?string $name = null,
		public ?string $description = null,
	) {
	}
}
