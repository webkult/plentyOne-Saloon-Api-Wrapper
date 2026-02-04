<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Relist the listing
 *
 * Relists the listing on the designated market.
 */
class RelistTheListing extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/histories/relist/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing market history that needs to be relisted. This must be passed as an array. This parameter is only needed if more than one listing market history should be relisted.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
