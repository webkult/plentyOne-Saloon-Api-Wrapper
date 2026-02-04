<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an image
 *
 * Delete an image. The ID of the image must be specified.
 */
class DeleteImage extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images/{$this->imageId}";
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 */
	public function __construct(
		protected int $id,
		protected int $imageId,
	) {
	}
}
