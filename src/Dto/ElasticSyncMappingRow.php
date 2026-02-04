<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ElasticSyncMappingRow extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $mappingId = null,
		public ?string $targetModel = null,
		public ?string $targetAttribute = null,
		public ?bool $active = null,
		public ?string $entityType = null,
		public ?string $value = null,
		public ?string $settings = null,
		public ?string $identifiers = null,
	) {
	}
}
