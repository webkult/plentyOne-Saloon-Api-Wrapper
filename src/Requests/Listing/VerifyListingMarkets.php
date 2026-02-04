<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Verify listing markets
 *
 * Verifies the listing markets.
 */
class VerifyListingMarkets extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/verify/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing market that need to be verified. This can also be passed as an array.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
