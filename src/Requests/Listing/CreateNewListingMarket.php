<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create new listing market
 *
 * Creates a new listing market. Based on the given options this call can create multiple listing
 * markets. If the
 * 'optionTemplateId' parameter is provided and the listing option template includes
 * options for different markets
 * than one listing market will be created for each market.
 */
class CreateNewListingMarket extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets";
	}


	public function __construct()
	{
	}
}
