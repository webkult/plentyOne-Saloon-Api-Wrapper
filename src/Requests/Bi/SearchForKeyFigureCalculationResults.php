<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Search for key figure calculation results
 *
 * Search for key figure calculation results,
 * returns KeyFigureResultSearchResponse including
 * KeyFigureResultSearchResult children
 */
class SearchForKeyFigureCalculationResults extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/results";
	}


	public function __construct()
	{
	}
}
