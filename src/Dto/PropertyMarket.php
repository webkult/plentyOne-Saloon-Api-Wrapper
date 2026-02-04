<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PropertyMarket extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $propertyId = null,
		public int|float|null $referrerId = null,
		public ?int $referrerSubId = null,
		public ?string $value = null,
	) {
	}
}
