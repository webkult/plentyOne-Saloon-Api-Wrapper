<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationSalesPrice extends SpatieData
{
	public function __construct(
		public ?int $variationId = null,
		public ?int $salesPriceId = null,
		public int|float|null $price = null,
		public int|float|null $lowestPrice = null,
		public ?bool $lowestPriceCalculation = null,
		public ?string $updatedAt = null,
		public ?string $createdAt = null,
	) {
	}
}
