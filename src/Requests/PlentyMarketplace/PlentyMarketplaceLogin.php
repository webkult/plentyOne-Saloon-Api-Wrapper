<?php

namespace PlentyOne\Api\Requests\PlentyMarketplace;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * plentyMarketplace login
 *
 * Log in to plentyMarketplace.
 */
class PlentyMarketplaceLogin extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/io/customer/login";
	}


	public function __construct()
	{
	}
}
