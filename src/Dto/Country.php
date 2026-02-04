<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Country extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?int $shippingDestinationId = null,
		public ?int $active = null,
		public ?int $storehouseId = null,
		public ?string $isoCode2 = null,
		public ?string $isoCode3 = null,
		public ?string $lang = null,
		public ?bool $isCountryStateMandatory = null,
		public ?array $vatCodes = null,
	) {
	}
}
