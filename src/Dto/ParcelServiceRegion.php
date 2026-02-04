<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ParcelServiceRegion extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $shippingRegionId = null,
		public ?int $parcelServicePresetId = null,
		public ?string $shippingRegionName = null,
		public ?int $serviceType = null,
	) {
	}
}
