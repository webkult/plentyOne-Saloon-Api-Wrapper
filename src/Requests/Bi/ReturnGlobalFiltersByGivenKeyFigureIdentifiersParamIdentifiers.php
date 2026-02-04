<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Return global filters by given key figure identifiers param: identifiers
 *
 * Return global filters by given key figure identifiers param: identifiers
 */
class ReturnGlobalFiltersByGivenKeyFigureIdentifiersParamIdentifiers extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/global-filters";
	}


	public function __construct()
	{
	}
}
