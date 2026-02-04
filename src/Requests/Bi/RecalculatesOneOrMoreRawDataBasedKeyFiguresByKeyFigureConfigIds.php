<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Recalculates one or more raw data based key figures by key figure config ids
 *
 * Returns "1" if recalculations were queued, or "0" otherwise
 */
class RecalculatesOneOrMoreRawDataBasedKeyFiguresByKeyFigureConfigIds extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/recalculate";
	}


	public function __construct()
	{
	}
}
