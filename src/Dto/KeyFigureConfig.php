<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class KeyFigureConfig extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $hash = null,
		public ?int $plentyId = null,
		public ?string $plentyIdHash = null,
		public ?string $keyFigure = null,
		public ?string $keyFigureCaption = null,
		public ?string $keyFigureName = null,
		public ?bool $direct = null,
		public ?bool $freeOfCharge = null,
		public ?bool $isGlobal = null,
		public ?string $updatedAt = null,
		public ?string $createdAt = null,
		public ?string $externalId = null,
		public ?array $dimensions = null,
		public ?array $dimensionValues = null,
		public ?string $category = null,
		public ?array $aggregateFunctions = null,
	) {
	}
}
