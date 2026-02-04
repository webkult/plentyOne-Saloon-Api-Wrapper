<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ElasticSyncSync extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?string $syncType = null,
		public ?string $sourceType = null,
		public ?string $sourceDataType = null,
	) {
	}
}
