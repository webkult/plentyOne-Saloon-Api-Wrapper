<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a set
 *
 * Deletes a plugin set. Response content will be the number of sets deleted (i. e. '1' or '0').
 */
class DeleteSet extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->setId}";
	}


	/**
	 * @param int $setId
	 */
	public function __construct(
		protected int $setId,
	) {
	}
}
