<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update key figure configuration
 *
 * Update key figure configuration including filters, targets, dimensions, dimensionsValues
 */
class UpdateKeyFigureConfiguration extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/config/{$this->keyFigureConfigId}";
	}


	/**
	 * @param int $keyFigureConfigId
	 */
	public function __construct(
		protected int $keyFigureConfigId,
	) {
	}
}
