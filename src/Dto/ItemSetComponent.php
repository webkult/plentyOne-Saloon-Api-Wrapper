<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ItemSetComponent extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $setId = null,
		public ?int $itemId = null,
		public int|float|null $minimalOrderQuantity = null,
		public int|float|null $maximumOrderQuantity = null,
		public ?bool $orderQuantityPossible = null,
	) {
	}
}
