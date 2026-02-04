<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ContactDepartmentName extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $departmentId = null,
		public ?string $lang = null,
		public ?string $name = null,
	) {
	}
}
