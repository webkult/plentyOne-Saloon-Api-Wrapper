<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single status history file
 *
 * Gets a single status history file. For testing purposes.
 */
class GetSingleStatusHistoryFile extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/statuses/{$this->id}/histories/{$this->filename}";
	}


	/**
	 * @param int $id
	 * @param int $filename
	 */
	public function __construct(
		protected int $id,
		protected int $filename,
	) {
	}
}
