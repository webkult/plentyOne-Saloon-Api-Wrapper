<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderShippingPackageItems extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $packageId = null,
		public ?int $itemId = null,
		public ?int $variationId = null,
		public int|float|null $itemQuantity = null,
	) {
	}
}
