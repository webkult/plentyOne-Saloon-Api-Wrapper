<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List images of an item
 *
 * Lists all images of an item. The item ID must be specified.
 */
class ListImagesOfItem extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images";
	}


	/**
	 * @param int $id
	 * @param null|string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function __construct(
		protected int $id,
		protected ?string $updatedAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['updatedAt' => $this->updatedAt]);
	}
}
