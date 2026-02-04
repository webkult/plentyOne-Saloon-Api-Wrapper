<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Add a key figure configuration
 *
 * Add key figure configuration with filters, targets, dimensions, dimensionsValues
 */
class AddKeyFigureConfiguration extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/config";
	}


	public function __construct()
	{
	}
}
