<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an image name
 *
 * Delete an image name. The ID and language of the image must be specified.
 */
class DeleteImageName extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/images/{$this->imageId}/names/{$this->lang}";
	}


	/**
	 * @param int $id
	 * @param int $imageId
	 * @param int $lang
	 */
	public function __construct(
		protected int $id,
		protected int $imageId,
		protected int $lang,
	) {
	}
}
