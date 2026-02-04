<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class KeyFigure extends SpatieData
{
	public function __construct(
		public ?string $title = null,
		public ?string $description = null,
		public ?string $category = null,
		public ?string $keyFigure = null,
		public ?bool $dataSeries = null,
		public ?array $resultFields = null,
		public ?string $primaryResultField = null,
		public ?bool $rawDataDeleteAble = null,
		public ?bool $freeOfCharge = null,
		public ?array $rawDataColumns = null,
		public ?array $resultExportColumns = null,
		public ?array $calculation = null,
		public ?array $dimensions = null,
		public ?array $dataFilters = null,
		public ?array $aggregateFunctions = null,
		public ?array $resultUnitsList = null,
	) {
	}
}
