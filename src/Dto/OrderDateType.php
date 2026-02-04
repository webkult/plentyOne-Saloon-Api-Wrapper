<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderDateType extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?bool $isErasable = null,
		public ?int $position = null,
	) {
	}
}
