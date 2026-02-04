<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ItemEbayTitle extends SpatieData
{
	public function __construct(
		public ?string $title = null,
		public ?int $itemId = null,
		public ?int $id = null,
	) {
	}
}
