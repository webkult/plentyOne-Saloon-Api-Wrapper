<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get one tag
 *
 * Gets one tag. The ID must be specified.
 */
class GetOneTag extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/tags/{$this->tagId}";
	}


	/**
	 * @param int $tagId The ID of the tag
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'names' = The names of the tag.</li><li>'clients' = The clients of the tag (only if the availability `variation` is set).</li><li>'availabilities' = The availabilities of the tag.</li></ul>
	 */
	public function __construct(
		protected int $tagId,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
