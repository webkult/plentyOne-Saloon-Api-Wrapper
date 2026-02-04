<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Webstore extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?string $type = null,
		public ?int $storeIdentifier = null,
		public ?int $pluginSetId = null,
	) {
	}
}
