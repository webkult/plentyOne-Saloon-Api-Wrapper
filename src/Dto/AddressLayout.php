<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AddressLayout extends SpatieData
{
	public function __construct(
		public ?bool $isDefault = null,
		public ?string $uuid = null,
		public ?array $countries = null,
	) {
	}
}
