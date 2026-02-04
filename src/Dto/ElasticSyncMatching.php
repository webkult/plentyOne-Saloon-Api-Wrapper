<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ElasticSyncMatching extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $syncId = null,
		public ?string $target = null,
		public ?string $source = null,
		public ?string $additionalValue = null,
	) {
	}
}
