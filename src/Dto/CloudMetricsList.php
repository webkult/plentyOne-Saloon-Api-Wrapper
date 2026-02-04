<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CloudMetricsList extends SpatieData
{
	public function __construct(
		public ?int $page = null,
		public ?int $totalsCount = null,
		public ?bool $isLastPage = null,
	) {
	}
}
