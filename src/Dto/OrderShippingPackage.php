<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderShippingPackage extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderId = null,
		public ?int $packageId = null,
		public ?int $weight = null,
		public ?string $packageNumber = null,
		public ?string $labelPath = null,
		public ?string $labelBase64 = null,
		public ?string $exportLabelBase64 = null,
		public ?string $returnPackageNumber = null,
		public ?int $packageType = null,
		public int|float|null $volume = null,
		public ?int $palletId = null,
		public ?bool $isClosed = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?string $packageSscc = null,
		public ?string $mrn = null,
		public ?int $atlasRegistration = null,
	) {
	}
}
