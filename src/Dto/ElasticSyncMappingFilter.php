<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ElasticSyncMappingFilter extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $mappingId = null,
		public ?string $type = null,
		public ?string $operator = null,
		public ?string $source = null,
		public ?string $value = null,
	) {
	}
}
