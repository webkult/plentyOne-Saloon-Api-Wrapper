<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderFamily extends SpatieData
{
	public function __construct(
		public ?int $originOrderId = null,
		public ?int $mainSalesOrderId = null,
	) {
	}
}
