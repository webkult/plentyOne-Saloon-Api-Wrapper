<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List conversation based on provided parameters
 *
 * List conversation based on provided parameters
 */
class ListConversationBasedOnProvidedParameters extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations";
	}


	/**
	 * @param null|int $page The page number (defaults to 1).
	 * @param null|int $itemsPerPage The number of results per page (defaults to 50).
	 * @param null|string $sortBy The sorting column (defaults to createdAt).
	 * @param null|string $sortOrder The sorting direction (defaults to desc).
	 * @param null|string $title Filter results by conversation title (searched string must be contained in title).
	 * @param null|string $message Filter results by message body (searched string must be contained in one of the converesation messages).
	 * @param null|string $fromDate Filter results by conversation creation date. Conversation must be created after this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param null|string $toDate Filter results by conversation creation date. Conversation must be created before this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param null|string $updateFromDate Filter results by conversation update date. Conversation must be updated after this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param null|string $updateToDate Filter results by conversation update date. Conversation must be updated before this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param null|string $tagIds Filter results by conversation tags. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param null|bool $isDone Filter results by conversation state. Expected values: true/false
	 * @param null|string $referrer Filter results by conversation referrer (referrer of first message of the conversation). Expected values: system/backend/rest/plugin/email
	 * @param null|int $shortId Filter results by conversation short ID.
	 * @param null|bool $hasAttachments Filter results by conversation that contain at least one message with one attachment. Expected values: true
	 * @param null|bool $hasBilledMsg Filter results by conversation that contain at least one billed message. Expected values: true
	 * @param null|string $orderIds Filter results by conversation relation type order. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param null|string $contactIds Filter results by conversation relation type contact. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param null|string $emails Filter results by conversation relation type email. Multiple values can be provided, separated by comma. Expected format: email1@plentymarkets.com, email2@plentymarkets.com
	 * @param null|string $paymentIds Filter results by conversation relation type payment. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param null|string $subscribersUsers Filter results by conversation subscribers. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param null|string $fromValue Filter results by conversation sender (sender of the first message of tehr conversation).
	 *      * The searched value can be and user ID or an email. Multiple values can be provided, separated by comma. This filter only works if the fromType filter is also provided. Expected format: 1, 5
	 * @param null|string $fromType Filter results by conversation sender type (sender type of the first message of the conversation). Expected values: user/email
	 * @param null|int $priorityId Filter results by conversation priority. Expected values: 1/2/3/4/5
	 * @param null|int $inboxId Filter results by conversation inbox ID. Expected format: 1
	 * @param null|string $deadline Filter results by conversation deadline ID. Expected values: yesterday/today/tomorrow/exceeded/in_the_future
	 * @param null|int $statusId Filter results by conversation status ID
	 * @param null|int $typeId Filter results by conversation type ID
	 * @param null|int $isDeleted Filter results by conversation deleted flag. Expected values: 0/1
	 * @param null|string $deletedAtBefore Filter results by conversation deleted date. Conversation must be deleted before this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param null|string $isArchived Filter results from main index or from archive. Expected value: true/false (defaults to false)
	 * @param null|bool $isRead Filter results by conversation read status. This filter will take effect only in combination with readById filter. Expected value: true/false
	 * @param null|int $readById Filter results by conversation read status for the provided user ID. This filter will take effect only in combination with isRead filter. Expected format: 1
	 * @param null|string $uuids Filter results by conversation ID's. Multiple values can be provided, separated by comma. Expected format: ee2be9db-82c0-441b-98cb-5e11e34b549e, 24810ce7-4b75-45d0-8610-7fb07ede0d86
	 * @param null|string $folderId Filter results by folder ID. Expected format: ee2be9db-82c0-441b-98cb-5e11e34b549e
	 * @param null|array $with Appends relations to conversations. Expected values: ['messages']
	 * @param null|string $owners Filter results by conversation owners. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
		protected ?string $title = null,
		protected ?string $message = null,
		protected ?string $fromDate = null,
		protected ?string $toDate = null,
		protected ?string $updateFromDate = null,
		protected ?string $updateToDate = null,
		protected ?string $tagIds = null,
		protected ?bool $isDone = null,
		protected ?string $referrer = null,
		protected ?int $shortId = null,
		protected ?bool $hasAttachments = null,
		protected ?bool $hasBilledMsg = null,
		protected ?string $orderIds = null,
		protected ?string $contactIds = null,
		protected ?string $emails = null,
		protected ?string $paymentIds = null,
		protected ?string $subscribersUsers = null,
		protected ?string $fromValue = null,
		protected ?string $fromType = null,
		protected ?int $priorityId = null,
		protected ?int $inboxId = null,
		protected ?string $deadline = null,
		protected ?int $statusId = null,
		protected ?int $typeId = null,
		protected ?int $isDeleted = null,
		protected ?string $deletedAtBefore = null,
		protected ?string $isArchived = null,
		protected ?bool $isRead = null,
		protected ?int $readById = null,
		protected ?string $uuids = null,
		protected ?string $folderId = null,
		protected ?array $with = null,
		protected ?string $owners = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
			'title' => $this->title,
			'message' => $this->message,
			'fromDate' => $this->fromDate,
			'toDate' => $this->toDate,
			'updateFromDate' => $this->updateFromDate,
			'updateToDate' => $this->updateToDate,
			'tagIds' => $this->tagIds,
			'isDone' => $this->isDone,
			'referrer' => $this->referrer,
			'shortId' => $this->shortId,
			'hasAttachments' => $this->hasAttachments,
			'hasBilledMsg' => $this->hasBilledMsg,
			'orderIds' => $this->orderIds,
			'contactIds' => $this->contactIds,
			'emails' => $this->emails,
			'paymentIds' => $this->paymentIds,
			'subscribersUsers' => $this->subscribersUsers,
			'fromValue' => $this->fromValue,
			'fromType' => $this->fromType,
			'priorityId' => $this->priorityId,
			'inboxId' => $this->inboxId,
			'deadline' => $this->deadline,
			'statusId' => $this->statusId,
			'typeId' => $this->typeId,
			'isDeleted' => $this->isDeleted,
			'deletedAtBefore' => $this->deletedAtBefore,
			'isArchived' => $this->isArchived,
			'isRead' => $this->isRead,
			'readById' => $this->readById,
			'uuids' => $this->uuids,
			'folderId' => $this->folderId,
			'with' => $this->with,
			'owners' => $this->owners,
		]);
	}
}
