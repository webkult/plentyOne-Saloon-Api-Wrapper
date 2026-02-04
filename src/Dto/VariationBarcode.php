<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationBarcode extends SpatieData
{
	public function __construct(
		public ?string $code = null,
		public ?int $barcodeId = null,
		public ?int $variationId = null,
		public ?string $createdAt = null,
	) {
	}
}
