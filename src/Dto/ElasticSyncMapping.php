<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ElasticSyncMapping extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $syncId = null,
		public ?string $name = null,
		public ?int $position = null,
		public ?bool $active = null,
	) {
	}
}
