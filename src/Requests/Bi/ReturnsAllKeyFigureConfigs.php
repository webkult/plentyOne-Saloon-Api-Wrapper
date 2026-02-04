<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns all key figure configs
 *
 * Returns all key figure configs paginated, by default as 25 per page.
 * Can be called with optional
 * param ‘with’ that loads additional relations for key figure
 * as filter, targets, dimensions,
 * dimensionsValues
 */
class ReturnsAllKeyFigureConfigs extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/config";
	}


	/**
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of key figure configurations to be displayed per page. The default number of key figure configurations per page is 25.
	 * @param null|string $keyFigure Filter that restricts the search result to key figure configurations of a key figure.
	 * @param null|array $ids Optional list of IDs that limit the search query
	 * @param null|array $with Load additional relations for a key figure. The following relations are available:
	 *      * <ul>
	 *     <li>'filter' = Filter options of this key figure.</li>
	 *     <li>'targets' = Target values of this key figure.</li>
	 *     <li>'dimensions' = Available dimensions of this key figure.</li>
	 *     <li>'dimensionValues' = Available dimension values of this key figure.</li>
	 *     </ul>
	 *     Example: <code>?with[]=dimension&with[]=dimensionValues</code>
	 */
	public function __construct(
		protected int $page,
		protected int $itemsPerPage,
		protected ?string $keyFigure = null,
		protected ?array $ids = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'keyFigure' => $this->keyFigure,
			'ids' => $this->ids,
			'with' => $this->with,
		]);
	}
}
