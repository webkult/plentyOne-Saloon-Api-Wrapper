<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderShippingPallet extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public int|float|null $weight = null,
		public int|float|null $individualWeight = null,
		public int|float|null $width = null,
		public int|float|null $height = null,
		public int|float|null $length = null,
		public ?bool $isStackable = null,
		public ?int $additionalInfo = null,
		public ?string $barcode = null,
		public ?bool $isClosed = null,
		public ?string $palletSscc = null,
		public ?int $orderId = null,
	) {
	}
}
