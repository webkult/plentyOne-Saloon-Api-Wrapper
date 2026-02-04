<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class EbayAccount extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $ebayAccountId = null,
		public ?string $name = null,
		public ?bool $isEnabled = null,
		public ?bool $isDeleted = null,
	) {
	}
}
