<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search category branches
 *
 * Searches category branches. Returns a paginated result.
 */
class SearchCategoryBranches extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/categories/branches";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'category' = The category of the category branch.</li></ub>
	 */
	public function __construct(
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
