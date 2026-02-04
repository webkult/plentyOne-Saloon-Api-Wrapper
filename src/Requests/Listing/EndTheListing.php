<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * End the listing
 *
 * Ends the listing on the designated market.
 */
class EndTheListing extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/histories/end/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing market history that needs to be ended. This must be passed as an array. This parameter is only needed if more than one listing market history should be ended.
	 * @param null|bool $deleteOnSuccess Tells if the listing market history should also be deleted from the database.
	 */
	public function __construct(
		protected int $id,
		protected ?bool $deleteOnSuccess = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['deleteOnSuccess' => $this->deleteOnSuccess]);
	}
}
