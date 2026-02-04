<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns a paginated result object will list of conversation events
 *
 * Returns a paginated result object will list of conversation events
 */
class ReturnsPaginatedResultObjectWillListOfConversationEvents extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/events";
	}


	/**
	 * @param null|int $page The page number (defaults to 1).
	 * @param null|int $itemsPerPage The number of results per page (defaults to 50).
	 * @param null|string $sortBy The sorting column (defaults to id). Expected values: any property of the event model
	 * @param null|string $sortOrder The sorting direction (defaults to asc).
	 * @param null|int $id Filter results by event ID.
	 * @param null|string $name Filter results by event name.
	 * @param null|string $description Filter results by event description.
	 * @param null|string $type Filter results by event type. Expected values: live / scheduled
	 * @param null|string $filter Filter results by event filters. Expected values: conversation_age / conversation_deadline /
	 *      * conversation_from_user / conversation_priority / conversation_type_status / conversation_referrer_type / conversation_inbox / conversation_last_change /
	 *      * conversation_tag / conversation_guest_order / conversation_is_lead / conversation_is_opportunity / contact_client / contact_class / contact_type / contact_tag
	 *      * contact_language
	 * @param null|string $action Filter results by event actions. Expected values: add_reply / send_email / update_deadline /
	 *      * add_subscriber / change_priority / change_type_and_status / add_to_folder / remove_from_folder / add_tags / remove_tags/ add_contact_tags/ remove_contact_tags
	 * @param null|string $trigger Filter results by event triggers. Expected values: new_conversation / new_reply_to_conversation /
	 *      * new_email_from_customer / new_reply_from_customer / conversation_deadline_changed / conversation_priority_changed / conversation_status_changed /
	 *      * conversation_tag_added / conversation_tag_removed / conversation_scheduled_event
	 * @param null|bool $state Filter results by event state. Expected values: ntrue / false
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
		protected ?int $id = null,
		protected ?string $name = null,
		protected ?string $description = null,
		protected ?string $type = null,
		protected ?string $filter = null,
		protected ?string $action = null,
		protected ?string $trigger = null,
		protected ?bool $state = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
			'id' => $this->id,
			'name' => $this->name,
			'description' => $this->description,
			'type' => $this->type,
			'filter' => $this->filter,
			'action' => $this->action,
			'trigger' => $this->trigger,
			'state' => $this->state,
		]);
	}
}
