<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class BarcodeLinkReferrer extends SpatieData
{
	public function __construct(
		public ?int $barcodeId = null,
		public int|float|null $referrerId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
