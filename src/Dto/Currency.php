<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Currency extends SpatieData
{
	public function __construct(
		public ?string $currency = null,
		public ?string $htmlCode = null,
		public ?string $unicodeSign = null,
		public ?bool $isActive = null,
		public ?bool $isErasable = null,
		public int|float|null $exchangeRate = null,
	) {
	}
}
