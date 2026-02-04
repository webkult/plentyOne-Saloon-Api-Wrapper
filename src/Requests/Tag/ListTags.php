<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List tags
 *
 * Lists all tags. The results can be filtered.
 */
class ListTags extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/tags";
	}


	/**
	 * @param int $id The ID of the tag. Allowed operators: `eq` and `in`.
	 * @param string $name The name of the tag. Allowed operators: `eq` and `in`.
	 * @param string $availability The availability of the tag. Allowed operators: `eq` and `in`.
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'names' = The names of the tag.</li><li>'clients' = The clients of the tag (only if the availability `variation` is set).</li><li>'availabilities' = The availabilities of the tag.</li></ul>
	 * @param null|string $orderBy The field to order the results by.
	 * @param null|string $lang The language to use when ordering by name.
	 */
	public function __construct(
		protected int $id,
		protected string $name,
		protected string $availability,
		protected ?string $with = null,
		protected ?string $orderBy = null,
		protected ?string $lang = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'name' => $this->name,
			'availability' => $this->availability,
			'with' => $this->with,
			'orderBy' => $this->orderBy,
			'lang' => $this->lang,
		]);
	}
}
