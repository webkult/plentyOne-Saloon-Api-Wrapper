<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Catalog status
 *
 * Gets a specific Catalog status based on its ID.
 */
class GetCatalogStatus extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/statuses/{$this->id}";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
