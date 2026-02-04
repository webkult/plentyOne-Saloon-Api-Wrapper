<?php

namespace PlentyOne\Api\Requests\Fulfillment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create trolley tag
 *
 * Create an trolley tag for a pick list.
 */
class CreateTrolleyTag extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/fulfillment/picklist/trolley_tags";
	}


	public function __construct()
	{
	}
}
