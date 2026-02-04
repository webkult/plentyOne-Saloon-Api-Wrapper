<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class MessageFrom extends SpatieData
{
	public function __construct(
		public ?string $type = null,
		public ?string $value = null,
		public ?string $name = null,
	) {
	}
}
