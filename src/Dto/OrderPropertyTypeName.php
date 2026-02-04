<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderPropertyTypeName extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $typeId = null,
		public ?string $name = null,
		public ?string $lang = null,
	) {
	}
}
