<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class MessageLinkedTo extends SpatieData
{
	public function __construct(
		public ?string $type = null,
		public ?string $value = null,
		public ?string $typeId = null,
	) {
	}
}
