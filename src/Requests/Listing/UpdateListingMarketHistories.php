<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update listing market histories
 *
 * Updates listing market histories by given update options. The listing market histories are not
 * directly revised,
 * they are added to the batch processing lists, waiting to be revised by automated
 * background processes.
 */
class UpdateListingMarketHistories extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/histories/update/{$this->id}";
	}


	/**
	 * @param array $id The ID of the listing market history that needs to be updated. This must be passed as an array. This parameter is only needed if more than one listing market history should be updated.
	 * @param null|array $options Multiple update options. Available values are:
	 *     <ul>
	 *     <li>all - Updates everything
	 *     <li>title - Updates the title
	 *     <li>subtitle - Updates the subtitle</li></li>
	 *     <li>itemSpecifics - Updates the item specifics</li>
	 *     <li>category - Updates the platform and shop category</li>
	 *     <li>listingDetails - Updates listing details</li>
	 *     <li>enhancements - Updates the enhancements information</li>
	 *     <li>duration - Updates the duration</li>
	 *     <li>shipping - Updates the shipping information</li>
	 *     <li>description - Updates the description</li>
	 *     <li>pictures - Updates the entry pictures</li>
	 *     <li>quantityAndPrice - Updates the quantity and price (also for variations)</li>
	 *     <li>resetVariations - Reset the variations. The variations from the item are transmitted again</li>
	 *     <li>partsFitmentList - Updates the parts fitment information (only available for eBay)</li>
	 *     <li>loyaltyProgram - Updates the listing loyalty program information (only available for eBay Plus)</li>
	 *     <li>resetRrp - Reset the recommended retail price information (only available for eBay)</li>
	 *     <li>payment - Updates payment information (only available for Hood)</li>
	 *     </ul>
	 */
	public function __construct(
		protected array $id,
		protected ?array $options = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['options' => $this->options]);
	}
}
