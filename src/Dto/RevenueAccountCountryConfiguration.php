<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class RevenueAccountCountryConfiguration extends SpatieData
{
	public function __construct(
		public ?int $countryId = null,
		public ?int $revenueAccountLocationId = null,
	) {
	}
}
