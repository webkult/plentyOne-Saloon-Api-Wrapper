<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Restore archived Catalog
 *
 * Restores an archived Catalog based on its ID. An archived Catalog is a deleted Catalog.
 */
class RestoreArchivedCatalog extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs/archive/{$this->id}/restore";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
