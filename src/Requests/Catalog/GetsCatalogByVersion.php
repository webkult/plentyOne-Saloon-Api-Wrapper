<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Gets Catalog by version
 *
 * Gets a specific catalog based on its ID and version.
 */
class GetsCatalogByVersion extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs/{$this->id}/versions/{$this->versionId}";
	}


	/**
	 * @param int $id
	 * @param int $versionId
	 */
	public function __construct(
		protected int $id,
		protected int $versionId,
	) {
	}
}
