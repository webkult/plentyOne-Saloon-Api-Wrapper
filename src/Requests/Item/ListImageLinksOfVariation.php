<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List image links of a variation
 *
 * Lists all images linked to a variation. The variation ID must be specified.
 */
class ListImageLinksOfVariation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_images";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param null|string $updatedAt Filter restricts the list of results to variation images updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected ?string $updatedAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['updatedAt' => $this->updatedAt]);
	}
}
