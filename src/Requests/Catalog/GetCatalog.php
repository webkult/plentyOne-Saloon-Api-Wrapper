<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Catalog
 *
 * Gets a specific Catalog based on its ID.
 */
class GetCatalog extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs/{$this->id}";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
