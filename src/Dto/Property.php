<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Property extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $cast = null,
		public ?string $type = null,
		public ?int $position = null,
	) {
	}
}
