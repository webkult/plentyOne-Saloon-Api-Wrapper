<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List image links of an image
 *
 * Lists all variations linked to an image. The image ID must be specified.
 */
class ListImageLinksOfImage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images/{$this->imageId}/variation_images";
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
