<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderPropertyType extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?bool $isErasable = null,
		public ?int $position = null,
		public ?string $cast = null,
	) {
	}
}
