<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Copy Catalog format
 *
 * Copies a Catalog format based on its ID.
 */
class CopyCatalogFormat extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs/{$this->catalogId}/copy";
	}


	/**
	 * @param int $catalogId
	 */
	public function __construct(
		protected int $catalogId,
	) {
	}
}
