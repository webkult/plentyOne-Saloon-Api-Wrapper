<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List relationships
 *
 * Lists all relationships. The results can be filtered.
 */
class ListRelationships extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/tags/relationships";
	}


	/**
	 * @param null|string $with Includes the specified tag information in the results. The following parameters are available: <ul><li>availability = The tag availability</li><li>tag = The tag</li></ul>More than one parameter should be separated by commas.
	 * @param null|int $tagId Filter restricts the list of results to tag relationships with the specified tag ID. The tag ID must be specified.
	 * @param null|string $tagType Filter restricts the list of results to tag relationships with the specified tag type. The tag type must be specified.
	 * @param null|int $relationshipValue Filter restricts the list of results to tag relationships with the specified relationship value. This is the ID of the data record. The relationship value must be specified.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?int $tagId = null,
		protected ?string $tagType = null,
		protected ?int $relationshipValue = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'tagId' => $this->tagId,
			'tagType' => $this->tagType,
			'relationshipValue' => $this->relationshipValue,
		]);
	}
}
