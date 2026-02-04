<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Unlink a client from a variation
 *
 * Deletes the link between a client (store) and a variation.
 */
class UnlinkClientFromVariation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_clients/{$this->plentyId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $plentyId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $plentyId,
	) {
	}
}
