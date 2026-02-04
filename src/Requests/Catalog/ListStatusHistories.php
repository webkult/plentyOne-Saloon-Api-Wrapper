<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List status histories
 *
 * Lists all status histories. For testing purposes.
 */
class ListStatusHistories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/statuses/{$this->id}/histories";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
