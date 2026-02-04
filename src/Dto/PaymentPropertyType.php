<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PaymentPropertyType extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $erasable = null,
		public ?int $position = null,
	) {
	}
}
