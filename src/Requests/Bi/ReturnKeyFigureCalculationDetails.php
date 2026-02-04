<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Return key figure calculation details
 *
 * return key figure filled with calculation details:
 * dimensions, rawDataColumns, filters, aggregate
 * functions
 */
class ReturnKeyFigureCalculationDetails extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/details/{$this->keyFigureName}";
	}


	/**
	 * @param int $keyFigureName
	 */
	public function __construct(
		protected int $keyFigureName,
	) {
	}
}
