<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create option template
 *
 * Creates an option template.
 */
class CreateOptionTemplate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/option_templates";
	}


	public function __construct()
	{
	}
}
