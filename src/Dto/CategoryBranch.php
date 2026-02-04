<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class CategoryBranch extends SpatieData
{
	public function __construct(
		public ?int $categoryId = null,
		#[MapName('category1Id')]
		public ?int $category1id = null,
		#[MapName('category2Id')]
		public ?int $category2id = null,
		#[MapName('category3Id')]
		public ?int $category3id = null,
		#[MapName('category4Id')]
		public ?int $category4id = null,
		#[MapName('category5Id')]
		public ?int $category5id = null,
		#[MapName('category6Id')]
		public ?int $category6id = null,
	) {
	}
}
