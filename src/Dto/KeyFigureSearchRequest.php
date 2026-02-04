<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class KeyFigureSearchRequest extends SpatieData
{
	public function __construct(
		public ?string $configId = null,
		public ?string $interval = null,
		public ?string $dimension = null,
		public ?array $dimensions = null,
		public ?string $scaleBasis = null,
		public ?bool $resultId = null,
		public ?bool $resultUnit = null,
		public ?bool $target = null,
		public ?bool $groupByDimension = null,
		public ?string $aggregateFunction = null,
		public ?int $itemsPerPage = null,
		public ?int $page = null,
		public ?string $searchId = null,
		public ?string $calculatedAt = null,
		public ?array $sortBy = null,
		public ?bool $displayZeroPrimaryValue = null,
	) {
	}
}
