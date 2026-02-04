<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ElasticSyncOption extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $syncId = null,
		public ?string $optionIdentifier = null,
		public ?string $key = null,
		public ?string $value = null,
	) {
	}
}
