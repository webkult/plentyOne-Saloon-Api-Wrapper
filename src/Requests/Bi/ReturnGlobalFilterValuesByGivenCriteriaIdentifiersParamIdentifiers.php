<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Return global filter values by given criteria identifiers param: identifiers
 *
 * Return global filter values by given criteria identifiers param: identifiers
 */
class ReturnGlobalFilterValuesByGivenCriteriaIdentifiersParamIdentifiers extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/global-filters/values";
	}


	public function __construct()
	{
	}
}
