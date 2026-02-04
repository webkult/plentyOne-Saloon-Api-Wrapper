<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an image link
 *
 * Deletes a link between an image and a variation.
 */
class DeleteImageLink extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_images/{$this->imageId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $imageId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $imageId,
	) {
	}
}
