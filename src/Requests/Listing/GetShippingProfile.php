<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a shipping profile
 *
 * Gets a shipping profile by providing its ID.
 */
class GetShippingProfile extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/shipping_profiles/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing shipping profile entry.
	 * @param null|array $with An array with child instances to be loaded.
	 */
	public function __construct(
		protected int $id,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
