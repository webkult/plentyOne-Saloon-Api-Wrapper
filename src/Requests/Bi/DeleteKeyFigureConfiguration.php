<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete key figure configuration
 *
 * Delete a key figure configuration with a specified configuration id
 */
class DeleteKeyFigureConfiguration extends Request
{
	protected Method $method = Method::DELETE;


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
