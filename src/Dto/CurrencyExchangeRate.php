<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CurrencyExchangeRate extends SpatieData
{
	public function __construct(
		public int|float|null $exchangeRate = null,
	) {
	}
}
