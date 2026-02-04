<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ShippingPackageType extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?int $width = null,
		public ?int $height = null,
		public ?int $length = null,
		public ?string $unit = null,
		public ?int $maxWeight = null,
		public ?int $maxVolume = null,
		public ?int $volumeType = null,
	) {
	}
}
