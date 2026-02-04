<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all SetEntries of Set
 *
 * Lists all the SetEntries of a specific set based on its ID.
 */
class ListAllSetEntriesOfSet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->setId}/set_entries";
	}


	/**
	 * @param int $setId
	 */
	public function __construct(
		protected int $setId,
	) {
	}
}
