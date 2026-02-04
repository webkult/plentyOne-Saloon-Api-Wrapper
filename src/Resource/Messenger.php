<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Messenger\AddMultipleConversationsToMultipleFolders;
use PlentyOne\Api\Requests\Messenger\AddsMultipleTagsToMultipleConversations;
use PlentyOne\Api\Requests\Messenger\AddsTagsToSingleConversation;
use PlentyOne\Api\Requests\Messenger\AddsTheEmptyTrashCommandToQueue;
use PlentyOne\Api\Requests\Messenger\AssignsBatchOfConversationsToBatchOfFolders;
use PlentyOne\Api\Requests\Messenger\CopiesEventToNewEvent;
use PlentyOne\Api\Requests\Messenger\CreateMessage;
use PlentyOne\Api\Requests\Messenger\CreateNewConversation;
use PlentyOne\Api\Requests\Messenger\CreateNewEbayAccount;
use PlentyOne\Api\Requests\Messenger\CreateNewRole;
use PlentyOne\Api\Requests\Messenger\CreatesNewCategory;
use PlentyOne\Api\Requests\Messenger\CreatesNewEvent;
use PlentyOne\Api\Requests\Messenger\CreatesNewFolder;
use PlentyOne\Api\Requests\Messenger\CreatesNewStatus;
use PlentyOne\Api\Requests\Messenger\CreatesNewType;
use PlentyOne\Api\Requests\Messenger\DeleteBatchOfRoles;
use PlentyOne\Api\Requests\Messenger\DeleteMessageByUuid;
use PlentyOne\Api\Requests\Messenger\DeleteRoleById;
use PlentyOne\Api\Requests\Messenger\DeletesBatchOfCategories;
use PlentyOne\Api\Requests\Messenger\DeletesBatchOfConversations;
use PlentyOne\Api\Requests\Messenger\DeletesBatchOfStatuses;
use PlentyOne\Api\Requests\Messenger\DeletesBatchOfTypes;
use PlentyOne\Api\Requests\Messenger\DeletesConversation;
use PlentyOne\Api\Requests\Messenger\DeletesFolder;
use PlentyOne\Api\Requests\Messenger\DeletesSingleCategorySoftDeleteTypeWillBeFlaggedAsDeleted;
use PlentyOne\Api\Requests\Messenger\DeletesSingleEvent;
use PlentyOne\Api\Requests\Messenger\DeletesSingleStatus;
use PlentyOne\Api\Requests\Messenger\DeletesSingleType;
use PlentyOne\Api\Requests\Messenger\GetAllAttachmentsByUuid;
use PlentyOne\Api\Requests\Messenger\GetAttachmentByUuidAndFileName;
use PlentyOne\Api\Requests\Messenger\GetMessageForTheGivenUuid5AndAllItsAssociatedSuccessors;
use PlentyOne\Api\Requests\Messenger\GetSingleConversationByUuid;
use PlentyOne\Api\Requests\Messenger\GetTheListOfEbayAccounts;
use PlentyOne\Api\Requests\Messenger\ListArchivedMessageStreamOfCertainConversation;
use PlentyOne\Api\Requests\Messenger\ListConversationBasedOnProvidedParameters;
use PlentyOne\Api\Requests\Messenger\ListMessageStreamOfCertainMessageExcludingMessageWithUuid5;
use PlentyOne\Api\Requests\Messenger\ListMessagesPerPage;
use PlentyOne\Api\Requests\Messenger\MarkAsDeletedEbayAccount;
use PlentyOne\Api\Requests\Messenger\MarkBatchOfConversationsAsReadOrUnread;
use PlentyOne\Api\Requests\Messenger\MoveMultipleConversationsToArchive;
use PlentyOne\Api\Requests\Messenger\PermanentlyDeleteListOfArchivedConversation;
use PlentyOne\Api\Requests\Messenger\RemoveConversationRelation;
use PlentyOne\Api\Requests\Messenger\RemoveMultipleConversationsFromMultipleFolders;
use PlentyOne\Api\Requests\Messenger\RestoreDeletedConversationsFromTrash;
use PlentyOne\Api\Requests\Messenger\RestoreMultipleConversationsFromArchive;
use PlentyOne\Api\Requests\Messenger\RetrievesEbayAccountObject;
use PlentyOne\Api\Requests\Messenger\RetrievesFolderObjectBasedOnUuid;
use PlentyOne\Api\Requests\Messenger\RetrievesHistoryForConversation;
use PlentyOne\Api\Requests\Messenger\RetrievesRoleObjectBasedOnRoleId;
use PlentyOne\Api\Requests\Messenger\RetrievesSingleCategoryBasedOnId;
use PlentyOne\Api\Requests\Messenger\RetrievesSingleStatusBasedOnId;
use PlentyOne\Api\Requests\Messenger\RetrievesSingleTypeBasedOnId;
use PlentyOne\Api\Requests\Messenger\RetrievesTheDefaultValueForWhisperMode;
use PlentyOne\Api\Requests\Messenger\RetrievesTheGeneralSettingsObject;
use PlentyOne\Api\Requests\Messenger\ReturnsListWithAllConfiguredInboxes;
use PlentyOne\Api\Requests\Messenger\ReturnsPaginatedResultObjectWillListOfConversationCategories;
use PlentyOne\Api\Requests\Messenger\ReturnsPaginatedResultObjectWillListOfConversationEvents;
use PlentyOne\Api\Requests\Messenger\ReturnsPaginatedResultObjectWillListOfConversationStatuses;
use PlentyOne\Api\Requests\Messenger\ReturnsPaginatedResultObjectWillListOfConversationTypes;
use PlentyOne\Api\Requests\Messenger\ReturnsPaginatedResultObjectWillListOfFolders;
use PlentyOne\Api\Requests\Messenger\ReturnsPaginatedResultObjectWithListOfRoles;
use PlentyOne\Api\Requests\Messenger\ReturnsTheTotalNumberOfUnreadConversationsForCurrentUser;
use PlentyOne\Api\Requests\Messenger\SearchConversationBasedOnProvidedParameters;
use PlentyOne\Api\Requests\Messenger\SearchesForEntitiesThatCanBeLinkedToConversation;
use PlentyOne\Api\Requests\Messenger\SetOrUnsetDoneAtDateOfMessage;
use PlentyOne\Api\Requests\Messenger\SetsEventAsActiveInactive;
use PlentyOne\Api\Requests\Messenger\SetsTheLastExecutionDateForExistingEvent;
use PlentyOne\Api\Requests\Messenger\SubscribesTheCurrentUserToMultipleConversations;
use PlentyOne\Api\Requests\Messenger\SubscribesUserToConversation;
use PlentyOne\Api\Requests\Messenger\UnsubscribeTheCurrentUserFromMultipleConversations;
use PlentyOne\Api\Requests\Messenger\UnsubscribesUserFromConversation;
use PlentyOne\Api\Requests\Messenger\UpdateBatchOfConversations;
use PlentyOne\Api\Requests\Messenger\UpdateDeadlineForBatchOfConversations;
use PlentyOne\Api\Requests\Messenger\UpdateFollowUpDateForBatchOfConversations;
use PlentyOne\Api\Requests\Messenger\UpdateMessageControls;
use PlentyOne\Api\Requests\Messenger\UpdateMessageVisibility;
use PlentyOne\Api\Requests\Messenger\UpdateOwnerRolesForSpecificConversationIdIds;
use PlentyOne\Api\Requests\Messenger\UpdateReadByArrayOfMessage;
use PlentyOne\Api\Requests\Messenger\UpdateTagsOfMessage;
use PlentyOne\Api\Requests\Messenger\UpdatesCategoryStatus;
use PlentyOne\Api\Requests\Messenger\UpdatesConversationByUuid;
use PlentyOne\Api\Requests\Messenger\UpdatesExistingCategory;
use PlentyOne\Api\Requests\Messenger\UpdatesExistingEbayAccount;
use PlentyOne\Api\Requests\Messenger\UpdatesExistingEvent;
use PlentyOne\Api\Requests\Messenger\UpdatesExistingFolder;
use PlentyOne\Api\Requests\Messenger\UpdatesExistingRole;
use PlentyOne\Api\Requests\Messenger\UpdatesExistingStatus;
use PlentyOne\Api\Requests\Messenger\UpdatesExistingType;
use PlentyOne\Api\Requests\Messenger\UpdatesPriorityForBatchOfConversations;
use PlentyOne\Api\Requests\Messenger\UpdatesTheGeneralSettingsObject;
use PlentyOne\Api\Requests\Messenger\UpdatesTheStateForBatchOfConversations;
use PlentyOne\Api\Requests\Messenger\UpdatesTypeAndStatusForBatchOfConversations;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Messenger extends BaseResource
{
	/**
	 * @param int $page The page number (defaults to 1).
	 * @param int $itemsPerPage The number of results per page (defaults to 50).
	 * @param string $sortBy The sorting column (defaults to createdAt).
	 * @param string $sortOrder The sorting direction (defaults to desc).
	 * @param string $title Filter results by conversation title (searched string must be contained in title).
	 * @param string $message Filter results by message body (searched string must be contained in one of the converesation messages).
	 * @param string $fromDate Filter results by conversation creation date. Conversation must be created after this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param string $toDate Filter results by conversation creation date. Conversation must be created before this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param string $updateFromDate Filter results by conversation update date. Conversation must be updated after this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param string $updateToDate Filter results by conversation update date. Conversation must be updated before this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param string $tagIds Filter results by conversation tags. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param bool $isDone Filter results by conversation state. Expected values: true/false
	 * @param string $referrer Filter results by conversation referrer (referrer of first message of the conversation). Expected values: system/backend/rest/plugin/email
	 * @param int $shortId Filter results by conversation short ID.
	 * @param bool $hasAttachments Filter results by conversation that contain at least one message with one attachment. Expected values: true
	 * @param bool $hasBilledMsg Filter results by conversation that contain at least one billed message. Expected values: true
	 * @param string $orderIds Filter results by conversation relation type order. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param string $contactIds Filter results by conversation relation type contact. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param string $emails Filter results by conversation relation type email. Multiple values can be provided, separated by comma. Expected format: email1@plentymarkets.com, email2@plentymarkets.com
	 * @param string $paymentIds Filter results by conversation relation type payment. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param string $subscribersUsers Filter results by conversation subscribers. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param string $fromValue Filter results by conversation sender (sender of the first message of tehr conversation).
	 *      * The searched value can be and user ID or an email. Multiple values can be provided, separated by comma. This filter only works if the fromType filter is also provided. Expected format: 1, 5
	 * @param string $fromType Filter results by conversation sender type (sender type of the first message of the conversation). Expected values: user/email
	 * @param int $priorityId Filter results by conversation priority. Expected values: 1/2/3/4/5
	 * @param int $inboxId Filter results by conversation inbox ID. Expected format: 1
	 * @param string $deadline Filter results by conversation deadline ID. Expected values: yesterday/today/tomorrow/exceeded/in_the_future
	 * @param int $statusId Filter results by conversation status ID
	 * @param int $typeId Filter results by conversation type ID
	 * @param int $isDeleted Filter results by conversation deleted flag. Expected values: 0/1
	 * @param string $deletedAtBefore Filter results by conversation deleted date. Conversation must be deleted before this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param string $isArchived Filter results from main index or from archive. Expected value: true/false (defaults to false)
	 * @param bool $isRead Filter results by conversation read status. This filter will take effect only in combination with readById filter. Expected value: true/false
	 * @param int $readById Filter results by conversation read status for the provided user ID. This filter will take effect only in combination with isRead filter. Expected format: 1
	 * @param string $uuids Filter results by conversation ID's. Multiple values can be provided, separated by comma. Expected format: ee2be9db-82c0-441b-98cb-5e11e34b549e, 24810ce7-4b75-45d0-8610-7fb07ede0d86
	 * @param string $folderId Filter results by folder ID. Expected format: ee2be9db-82c0-441b-98cb-5e11e34b549e
	 * @param array $with Appends relations to conversations. Expected values: ['messages']
	 * @param string $owners Filter results by conversation owners. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 */
	public function listConversationBasedOnProvidedParameters(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?string $title = null,
		?string $message = null,
		?string $fromDate = null,
		?string $toDate = null,
		?string $updateFromDate = null,
		?string $updateToDate = null,
		?string $tagIds = null,
		?bool $isDone = null,
		?string $referrer = null,
		?int $shortId = null,
		?bool $hasAttachments = null,
		?bool $hasBilledMsg = null,
		?string $orderIds = null,
		?string $contactIds = null,
		?string $emails = null,
		?string $paymentIds = null,
		?string $subscribersUsers = null,
		?string $fromValue = null,
		?string $fromType = null,
		?int $priorityId = null,
		?int $inboxId = null,
		?string $deadline = null,
		?int $statusId = null,
		?int $typeId = null,
		?int $isDeleted = null,
		?string $deletedAtBefore = null,
		?string $isArchived = null,
		?bool $isRead = null,
		?int $readById = null,
		?string $uuids = null,
		?string $folderId = null,
		?array $with = null,
		?string $owners = null,
	): Response
	{
		return $this->connector->send(new ListConversationBasedOnProvidedParameters($page, $itemsPerPage, $sortBy, $sortOrder, $title, $message, $fromDate, $toDate, $updateFromDate, $updateToDate, $tagIds, $isDone, $referrer, $shortId, $hasAttachments, $hasBilledMsg, $orderIds, $contactIds, $emails, $paymentIds, $subscribersUsers, $fromValue, $fromType, $priorityId, $inboxId, $deadline, $statusId, $typeId, $isDeleted, $deletedAtBefore, $isArchived, $isRead, $readById, $uuids, $folderId, $with, $owners));
	}


	public function createNewConversation(): Response
	{
		return $this->connector->send(new CreateNewConversation());
	}


	/**
	 * @param array $uuids The list of conversations UUID's to be deleted. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function deletesBatchOfConversations(array $uuids): Response
	{
		return $this->connector->send(new DeletesBatchOfConversations($uuids));
	}


	/**
	 * @param array $uuids The list of conversations UUID's to archive. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function moveMultipleConversationsToArchive(array $uuids): Response
	{
		return $this->connector->send(new MoveMultipleConversationsToArchive($uuids));
	}


	/**
	 * @param array $uuids The list of conversations UUID's to restore from archive. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function permanentlyDeleteListOfArchivedConversation(array $uuids): Response
	{
		return $this->connector->send(new PermanentlyDeleteListOfArchivedConversation($uuids));
	}


	/**
	 * @param array $uuids The list of conversations UUID's to restore from archive. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function restoreMultipleConversationsFromArchive(array $uuids): Response
	{
		return $this->connector->send(new RestoreMultipleConversationsFromArchive($uuids));
	}


	/**
	 * @param array $uuids The list of conversations UUID's to restore from trash. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function restoreDeletedConversationsFromTrash(array $uuids): Response
	{
		return $this->connector->send(new RestoreDeletedConversationsFromTrash($uuids));
	}


	public function updateBatchOfConversations(): Response
	{
		return $this->connector->send(new UpdateBatchOfConversations());
	}


	/**
	 * @param int $page The page number (defaults to 1).
	 * @param int $itemsPerPage The number of results per page (defaults to 50).
	 * @param string $sortBy The sorting column (defaults to id). Expected values: id/position
	 * @param string $sortOrder The sorting direction (defaults to asc).
	 * @param bool $isDeleted Filter results by deleted flag.
	 * @param string $name Filter results by type name.
	 * @param int $id Filter results by type ID.
	 */
	public function returnsPaginatedResultObjectWillListOfConversationCategories(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?bool $isDeleted = null,
		?string $name = null,
		?int $id = null,
	): Response
	{
		return $this->connector->send(new ReturnsPaginatedResultObjectWillListOfConversationCategories($page, $itemsPerPage, $sortBy, $sortOrder, $isDeleted, $name, $id));
	}


	public function createsNewCategory(): Response
	{
		return $this->connector->send(new CreatesNewCategory());
	}


	/**
	 * @param array $ids Array of conversation categories ID's. Expected values: [1, 2]
	 */
	public function deletesBatchOfCategories(array $ids): Response
	{
		return $this->connector->send(new DeletesBatchOfCategories($ids));
	}


	/**
	 * @param int $id
	 */
	public function retrievesSingleCategoryBasedOnId(int $id): Response
	{
		return $this->connector->send(new RetrievesSingleCategoryBasedOnId($id));
	}


	/**
	 * @param int $id
	 */
	public function updatesExistingCategory(int $id): Response
	{
		return $this->connector->send(new UpdatesExistingCategory($id));
	}


	/**
	 * @param int $id
	 */
	public function deletesSingleCategorySoftDeleteTypeWillBeFlaggedAsDeleted(int $id): Response
	{
		return $this->connector->send(new DeletesSingleCategorySoftDeleteTypeWillBeFlaggedAsDeleted($id));
	}


	/**
	 * @param int $id
	 */
	public function updatesCategoryStatus(int $id): Response
	{
		return $this->connector->send(new UpdatesCategoryStatus($id));
	}


	/**
	 * @param bool $isClosed The new state of the conversation. Expected values: true/false
	 * @param array $uuids Array of conversations UUID's. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function updatesTheStateForBatchOfConversations(bool $isClosed, array $uuids): Response
	{
		return $this->connector->send(new UpdatesTheStateForBatchOfConversations($isClosed, $uuids));
	}


	/**
	 * @param string $deadline The new deadline. Expected format: 2023/01/31
	 * @param array $uuids The list of conversations UUID's to update deadline. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function updateDeadlineForBatchOfConversations(string $deadline, array $uuids): Response
	{
		return $this->connector->send(new UpdateDeadlineForBatchOfConversations($deadline, $uuids));
	}


	public function addsTheEmptyTrashCommandToQueue(): Response
	{
		return $this->connector->send(new AddsTheEmptyTrashCommandToQueue());
	}


	/**
	 * @param int $page The page number (defaults to 1).
	 * @param int $itemsPerPage The number of results per page (defaults to 50).
	 * @param string $sortBy The sorting column (defaults to id). Expected values: any property of the event model
	 * @param string $sortOrder The sorting direction (defaults to asc).
	 * @param int $id Filter results by event ID.
	 * @param string $name Filter results by event name.
	 * @param string $description Filter results by event description.
	 * @param string $type Filter results by event type. Expected values: live / scheduled
	 * @param string $filter Filter results by event filters. Expected values: conversation_age / conversation_deadline /
	 *      * conversation_from_user / conversation_priority / conversation_type_status / conversation_referrer_type / conversation_inbox / conversation_last_change /
	 *      * conversation_tag / conversation_guest_order / conversation_is_lead / conversation_is_opportunity / contact_client / contact_class / contact_type / contact_tag
	 *      * contact_language
	 * @param string $action Filter results by event actions. Expected values: add_reply / send_email / update_deadline /
	 *      * add_subscriber / change_priority / change_type_and_status / add_to_folder / remove_from_folder / add_tags / remove_tags/ add_contact_tags/ remove_contact_tags
	 * @param string $trigger Filter results by event triggers. Expected values: new_conversation / new_reply_to_conversation /
	 *      * new_email_from_customer / new_reply_from_customer / conversation_deadline_changed / conversation_priority_changed / conversation_status_changed /
	 *      * conversation_tag_added / conversation_tag_removed / conversation_scheduled_event
	 * @param bool $state Filter results by event state. Expected values: ntrue / false
	 */
	public function returnsPaginatedResultObjectWillListOfConversationEvents(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?int $id = null,
		?string $name = null,
		?string $description = null,
		?string $type = null,
		?string $filter = null,
		?string $action = null,
		?string $trigger = null,
		?bool $state = null,
	): Response
	{
		return $this->connector->send(new ReturnsPaginatedResultObjectWillListOfConversationEvents($page, $itemsPerPage, $sortBy, $sortOrder, $id, $name, $description, $type, $filter, $action, $trigger, $state));
	}


	public function createsNewEvent(): Response
	{
		return $this->connector->send(new CreatesNewEvent());
	}


	/**
	 * @param int $id
	 */
	public function updatesExistingEvent(int $id): Response
	{
		return $this->connector->send(new UpdatesExistingEvent($id));
	}


	/**
	 * @param int $id
	 */
	public function deletesSingleEvent(int $id): Response
	{
		return $this->connector->send(new DeletesSingleEvent($id));
	}


	/**
	 * @param int $id
	 * @param string $name The name of the new event
	 */
	public function copiesEventToNewEvent(int $id, string $name): Response
	{
		return $this->connector->send(new CopiesEventToNewEvent($id, $name));
	}


	/**
	 * @param int $id
	 */
	public function setsTheLastExecutionDateForExistingEvent(int $id): Response
	{
		return $this->connector->send(new SetsTheLastExecutionDateForExistingEvent($id));
	}


	/**
	 * @param int $id
	 * @param bool $status The new status. Expected values: true/false
	 */
	public function setsEventAsActiveInactive(int $id, bool $status): Response
	{
		return $this->connector->send(new SetsEventAsActiveInactive($id, $status));
	}


	/**
	 * @param int $page The page number (defaults to 1).
	 * @param int $itemsPerPage The number of results per page (defaults to 50).
	 * @param string $sortBy The sorting column (defaults to name). Expected values: any folder model property
	 * @param string $sortOrder The sorting direction (defaults to asc).
	 * @param int $userId Filter results by user ID (defaults to null, all users).
	 */
	public function returnsPaginatedResultObjectWillListOfFolders(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?int $userId = null,
	): Response
	{
		return $this->connector->send(new ReturnsPaginatedResultObjectWillListOfFolders($page, $itemsPerPage, $sortBy, $sortOrder, $userId));
	}


	/**
	 * @param int $foldersUuids The list of folders to be assigned to. Expected format: ['78656f7d-02fd-5461-9e54-13b2668f9b43']
	 * @param array $conversationsUuids The list of conversations UUID's to assign to folders. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function assignsBatchOfConversationsToBatchOfFolders(int $foldersUuids, array $conversationsUuids): Response
	{
		return $this->connector->send(new AssignsBatchOfConversationsToBatchOfFolders($foldersUuids, $conversationsUuids));
	}


	public function createsNewFolder(): Response
	{
		return $this->connector->send(new CreatesNewFolder());
	}


	/**
	 * @param int $foldersUuids The list of folders to be assigned to. Expected format: ['78656f7d-02fd-5461-9e54-13b2668f9b43']
	 * @param array $conversationsUuids The list of conversations UUID's to assign to folders. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function addMultipleConversationsToMultipleFolders(int $foldersUuids, array $conversationsUuids): Response
	{
		return $this->connector->send(new AddMultipleConversationsToMultipleFolders($foldersUuids, $conversationsUuids));
	}


	/**
	 * @param int $foldersUuids The list of folders that will be removed from the conversation. Expected format: ['78656f7d-02fd-5461-9e54-13b2668f9b43']
	 * @param array $conversationsUuids The list of conversations UUID's to assign to folders. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function removeMultipleConversationsFromMultipleFolders(
		int $foldersUuids,
		array $conversationsUuids,
	): Response
	{
		return $this->connector->send(new RemoveMultipleConversationsFromMultipleFolders($foldersUuids, $conversationsUuids));
	}


	/**
	 * @param int $uuid5
	 */
	public function retrievesFolderObjectBasedOnUuid(int $uuid5): Response
	{
		return $this->connector->send(new RetrievesFolderObjectBasedOnUuid($uuid5));
	}


	/**
	 * @param int $uuid5
	 */
	public function updatesExistingFolder(int $uuid5): Response
	{
		return $this->connector->send(new UpdatesExistingFolder($uuid5));
	}


	/**
	 * @param int $uuid5
	 */
	public function deletesFolder(int $uuid5): Response
	{
		return $this->connector->send(new DeletesFolder($uuid5));
	}


	/**
	 * @param string $followUpDate The new follow up date. Expected format: 2023/01/31
	 * @param array $uuids The list of conversations UUID's to update deadline. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function updateFollowUpDateForBatchOfConversations(string $followUpDate, array $uuids): Response
	{
		return $this->connector->send(new UpdateFollowUpDateForBatchOfConversations($followUpDate, $uuids));
	}


	/**
	 * @param int $uuid5
	 */
	public function retrievesHistoryForConversation(int $uuid5): Response
	{
		return $this->connector->send(new RetrievesHistoryForConversation($uuid5));
	}


	public function returnsListWithAllConfiguredInboxes(): Response
	{
		return $this->connector->send(new ReturnsListWithAllConfiguredInboxes());
	}


	public function updateOwnerRolesForSpecificConversationIdIds(): Response
	{
		return $this->connector->send(new UpdateOwnerRolesForSpecificConversationIdIds());
	}


	/**
	 * @param int $priorityId The new priority. Expected values: 0/1/2/3/4/5
	 * @param array $uuids The list of conversations UUID's to update priority. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function updatesPriorityForBatchOfConversations(int $priorityId, array $uuids): Response
	{
		return $this->connector->send(new UpdatesPriorityForBatchOfConversations($priorityId, $uuids));
	}


	/**
	 * @param bool $read The read status. Expected values: true/false
	 * @param int $userId The user ID for which the conversations will be marked as read/unread. Expected format: 1
	 * @param array $uuids The list of conversations UUID's to update read status. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function markBatchOfConversationsAsReadOrUnread(bool $read, int $userId, array $uuids): Response
	{
		return $this->connector->send(new MarkBatchOfConversationsAsReadOrUnread($read, $userId, $uuids));
	}


	public function removeConversationRelation(): Response
	{
		return $this->connector->send(new RemoveConversationRelation());
	}


	/**
	 * @param int $page The page number (defaults to 1).
	 * @param int $itemsPerPage The number of results per page (defaults to 50).
	 * @param string $sortBy The sorting column (defaults to id). Expected values: id or position
	 * @param string $sortOrder The sorting direction (defaults to asc).
	 */
	public function returnsPaginatedResultObjectWithListOfRoles(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
	): Response
	{
		return $this->connector->send(new ReturnsPaginatedResultObjectWithListOfRoles($page, $itemsPerPage, $sortBy, $sortOrder));
	}


	public function createNewRole(): Response
	{
		return $this->connector->send(new CreateNewRole());
	}


	/**
	 * @param array $ids Array of conversation roles ID's. Expected values: [1, 2]
	 */
	public function deleteBatchOfRoles(array $ids): Response
	{
		return $this->connector->send(new DeleteBatchOfRoles($ids));
	}


	/**
	 * @param int $id
	 */
	public function retrievesRoleObjectBasedOnRoleId(int $id): Response
	{
		return $this->connector->send(new RetrievesRoleObjectBasedOnRoleId($id));
	}


	/**
	 * @param int $id
	 */
	public function updatesExistingRole(int $id): Response
	{
		return $this->connector->send(new UpdatesExistingRole($id));
	}


	/**
	 * @param int $id
	 */
	public function deleteRoleById(int $id): Response
	{
		return $this->connector->send(new DeleteRoleById($id));
	}


	/**
	 * @param int $page The page number (defaults to 1).
	 * @param int $itemsPerPage The number of results per page (defaults to 50).
	 * @param string $sortBy The sorting column (defaults to createdAt).
	 * @param string $sortOrder The sorting direction (defaults to desc).
	 * @param string $title Filter results by conversation title (searched string must be contained in title).
	 * @param string $message Filter results by message body (searched string must be contained in one of the converesation messages).
	 * @param string $fromDate Filter results by conversation creation date. Conversation must be created after this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param string $toDate Filter results by conversation creation date. Conversation must be created before this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param string $updateFromDate Filter results by conversation update date. Conversation must be updated after this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param string $updateToDate Filter results by conversation update date. Conversation must be updated before this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param string $tagIds Filter results by conversation tags. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param bool $isDone Filter results by conversation state. Expected values: true/false
	 * @param string $referrer Filter results by conversation referrer (referrer of first message of the conversation). Expected values: system/backend/rest/plugin/email
	 * @param int $shortId Filter results by conversation short ID.
	 * @param bool $hasAttachments Filter results by conversation that contain at least one message with one attachment. Expected values: true
	 * @param bool $hasBilledMsg Filter results by conversation that contain at least one billed message. Expected values: true
	 * @param string $orderIds Filter results by conversation relation type order. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param string $contactIds Filter results by conversation relation type contact. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param string $emails Filter results by conversation relation type email. Multiple values can be provided, separated by comma. Expected format: email1@plentymarkets.com, email2@plentymarkets.com
	 * @param string $paymentIds Filter results by conversation relation type payment. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param string $subscribersUsers Filter results by conversation subscribers. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 * @param string $fromValue Filter results by conversation sender (sender of the first message of tehr conversation).
	 *      * The searched value can be and user ID or an email. Multiple values can be provided, separated by comma. This filter only works if the fromType filter is also provided. Expected format: 1, 5
	 * @param string $fromType Filter results by conversation sender type (sender type of the first message of the conversation). Expected values: user/email
	 * @param int $priorityId Filter results by conversation priority. Expected values: 1/2/3/4/5
	 * @param int $inboxId Filter results by conversation inbox ID. Expected format: 1
	 * @param string $deadline Filter results by conversation deadline ID. Expected values: yesterday/today/tomorrow/exceeded/in_the_future
	 * @param int $statusId Filter results by conversation status ID
	 * @param int $typeId Filter results by conversation type ID
	 * @param int $isDeleted Filter results by conversation deleted flag. Expected values: 0/1
	 * @param string $deletedAtBefore Filter results by conversation deleted date. Conversation must be deleted before this date. Expected format: 2023-01-31T00:00:00+03:00
	 * @param string $isArchived Filter results from main index or from archive. Expected value: true/false (defaults to false)
	 * @param bool $isRead Filter results by conversation read status. This filter will take effect only in combination with readById filter. Expected value: true/false
	 * @param int $readById Filter results by conversation read status for the provided user ID. This filter will take effect only in combination with isRead filter. Expected format: 1
	 * @param string $uuids Filter results by conversation ID's. Multiple values can be provided, separated by comma. Expected format: ee2be9db-82c0-441b-98cb-5e11e34b549e, 24810ce7-4b75-45d0-8610-7fb07ede0d86
	 * @param string $folderId Filter results by folder ID. Expected format: ee2be9db-82c0-441b-98cb-5e11e34b549e
	 * @param array $with Appends relations to conversations. Expected values: ['messages']
	 * @param string $owners Filter results by conversation owners. Multiple values can be provided, separated by comma. Expected format: 1, 9, 15
	 */
	public function searchConversationBasedOnProvidedParameters(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?string $title = null,
		?string $message = null,
		?string $fromDate = null,
		?string $toDate = null,
		?string $updateFromDate = null,
		?string $updateToDate = null,
		?string $tagIds = null,
		?bool $isDone = null,
		?string $referrer = null,
		?int $shortId = null,
		?bool $hasAttachments = null,
		?bool $hasBilledMsg = null,
		?string $orderIds = null,
		?string $contactIds = null,
		?string $emails = null,
		?string $paymentIds = null,
		?string $subscribersUsers = null,
		?string $fromValue = null,
		?string $fromType = null,
		?int $priorityId = null,
		?int $inboxId = null,
		?string $deadline = null,
		?int $statusId = null,
		?int $typeId = null,
		?int $isDeleted = null,
		?string $deletedAtBefore = null,
		?string $isArchived = null,
		?bool $isRead = null,
		?int $readById = null,
		?string $uuids = null,
		?string $folderId = null,
		?array $with = null,
		?string $owners = null,
	): Response
	{
		return $this->connector->send(new SearchConversationBasedOnProvidedParameters($page, $itemsPerPage, $sortBy, $sortOrder, $title, $message, $fromDate, $toDate, $updateFromDate, $updateToDate, $tagIds, $isDone, $referrer, $shortId, $hasAttachments, $hasBilledMsg, $orderIds, $contactIds, $emails, $paymentIds, $subscribersUsers, $fromValue, $fromType, $priorityId, $inboxId, $deadline, $statusId, $typeId, $isDeleted, $deletedAtBefore, $isArchived, $isRead, $readById, $uuids, $folderId, $with, $owners));
	}


	/**
	 * @param string $searchTerm The searched value. Expected values: John Doe/ 123 / john@plentymarkets.com
	 */
	public function searchesForEntitiesThatCanBeLinkedToConversation(string $searchTerm): Response
	{
		return $this->connector->send(new SearchesForEntitiesThatCanBeLinkedToConversation($searchTerm));
	}


	/**
	 * @param int $page The page number (defaults to 1).
	 * @param int $itemsPerPage The number of results per page (defaults to 50).
	 * @param string $sortBy The sorting column (defaults to id). Expected values: id/position
	 * @param string $sortOrder The sorting direction (defaults to asc).
	 * @param bool $isDeleted Filter results by deleted flag.
	 * @param string $name Filter results by status name.
	 * @param int $id Filter results by status ID.
	 * @param int $typeId Filter results by status type ID.
	 */
	public function returnsPaginatedResultObjectWillListOfConversationStatuses(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?bool $isDeleted = null,
		?string $name = null,
		?int $id = null,
		?int $typeId = null,
	): Response
	{
		return $this->connector->send(new ReturnsPaginatedResultObjectWillListOfConversationStatuses($page, $itemsPerPage, $sortBy, $sortOrder, $isDeleted, $name, $id, $typeId));
	}


	public function createsNewStatus(): Response
	{
		return $this->connector->send(new CreatesNewStatus());
	}


	/**
	 * @param array $ids Array of conversation statuses ID's. Expected values: [1, 2]
	 */
	public function deletesBatchOfStatuses(array $ids): Response
	{
		return $this->connector->send(new DeletesBatchOfStatuses($ids));
	}


	/**
	 * @param int $id
	 */
	public function retrievesSingleStatusBasedOnId(int $id): Response
	{
		return $this->connector->send(new RetrievesSingleStatusBasedOnId($id));
	}


	/**
	 * @param int $id
	 */
	public function updatesExistingStatus(int $id): Response
	{
		return $this->connector->send(new UpdatesExistingStatus($id));
	}


	/**
	 * @param int $id
	 */
	public function deletesSingleStatus(int $id): Response
	{
		return $this->connector->send(new DeletesSingleStatus($id));
	}


	/**
	 * @param array $uuids The list of conversations UUID's to subscribe to. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function subscribesTheCurrentUserToMultipleConversations(array $uuids): Response
	{
		return $this->connector->send(new SubscribesTheCurrentUserToMultipleConversations($uuids));
	}


	/**
	 * @param array $tagIds The list of tags to be added. Expected values: [17, 18]
	 * @param array $uuids Array of conversations UUID's. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function addsMultipleTagsToMultipleConversations(array $tagIds, array $uuids): Response
	{
		return $this->connector->send(new AddsMultipleTagsToMultipleConversations($tagIds, $uuids));
	}


	public function returnsTheTotalNumberOfUnreadConversationsForCurrentUser(): Response
	{
		return $this->connector->send(new ReturnsTheTotalNumberOfUnreadConversationsForCurrentUser());
	}


	/**
	 * @param int $typeId The new type. Expected format: 1
	 * @param int $statusId The new status. Expected format: 1
	 * @param array $uuids The list of conversations UUID's to update type and status. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function updatesTypeAndStatusForBatchOfConversations(int $typeId, int $statusId, array $uuids): Response
	{
		return $this->connector->send(new UpdatesTypeAndStatusForBatchOfConversations($typeId, $statusId, $uuids));
	}


	/**
	 * @param int $page The page number (defaults to 1).
	 * @param int $itemsPerPage The number of results per page (defaults to 50).
	 * @param string $sortBy The sorting column (defaults to id). Expected values: id/position
	 * @param string $sortOrder The sorting direction (defaults to asc).
	 * @param bool $isDeleted Filter results by deleted flag.
	 * @param string $name Filter results by type name.
	 * @param int $id Filter results by type ID.
	 * @param array $with Appends relations to types. Expected values: ['allStatuses'] / ['activeStatuses']
	 */
	public function returnsPaginatedResultObjectWillListOfConversationTypes(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $sortBy = null,
		?string $sortOrder = null,
		?bool $isDeleted = null,
		?string $name = null,
		?int $id = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new ReturnsPaginatedResultObjectWillListOfConversationTypes($page, $itemsPerPage, $sortBy, $sortOrder, $isDeleted, $name, $id, $with));
	}


	public function createsNewType(): Response
	{
		return $this->connector->send(new CreatesNewType());
	}


	/**
	 * @param array $ids Array of conversation types ID's. Expected values: [1, 2]
	 */
	public function deletesBatchOfTypes(array $ids): Response
	{
		return $this->connector->send(new DeletesBatchOfTypes($ids));
	}


	/**
	 * @param int $id
	 */
	public function retrievesSingleTypeBasedOnId(int $id): Response
	{
		return $this->connector->send(new RetrievesSingleTypeBasedOnId($id));
	}


	/**
	 * @param int $id
	 */
	public function updatesExistingType(int $id): Response
	{
		return $this->connector->send(new UpdatesExistingType($id));
	}


	/**
	 * @param int $id
	 */
	public function deletesSingleType(int $id): Response
	{
		return $this->connector->send(new DeletesSingleType($id));
	}


	/**
	 * @param array $uuids The list of conversations UUID's to unsubscribe from. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function unsubscribeTheCurrentUserFromMultipleConversations(array $uuids): Response
	{
		return $this->connector->send(new UnsubscribeTheCurrentUserFromMultipleConversations($uuids));
	}


	/**
	 * @param int $uuid5
	 */
	public function getSingleConversationByUuid(int $uuid5): Response
	{
		return $this->connector->send(new GetSingleConversationByUuid($uuid5));
	}


	/**
	 * @param int $uuid5
	 */
	public function updatesConversationByUuid(int $uuid5): Response
	{
		return $this->connector->send(new UpdatesConversationByUuid($uuid5));
	}


	/**
	 * @param int $uuid5
	 */
	public function deletesConversation(int $uuid5): Response
	{
		return $this->connector->send(new DeletesConversation($uuid5));
	}


	/**
	 * @param int $uuid5
	 * @param int $userId The ID of the user to be subscribed. Expected format: 1
	 */
	public function subscribesUserToConversation(int $uuid5, int $userId): Response
	{
		return $this->connector->send(new SubscribesUserToConversation($uuid5, $userId));
	}


	/**
	 * @param int $uuid5
	 * @param array $tagIds The list of tags to be added. Expected values: [17, 18]
	 */
	public function addsTagsToSingleConversation(int $uuid5, array $tagIds): Response
	{
		return $this->connector->send(new AddsTagsToSingleConversation($uuid5, $tagIds));
	}


	/**
	 * @param int $uuid5
	 * @param int $userId The ID of the user to be unsubscribed. Expected format: 1
	 */
	public function unsubscribesUserFromConversation(int $uuid5, int $userId): Response
	{
		return $this->connector->send(new UnsubscribesUserFromConversation($uuid5, $userId));
	}


	/**
	 * @param string $uuid The reference UUID5 of the message to start from (excluding).
	 * @param bool $successors If set to FALSE, the messages older than the referenced message will be returned.
	 * @param int $amount The number of messages to be listed (defaults to 50)
	 */
	public function listMessageStreamOfCertainMessageExcludingMessageWithUuid5(
		?string $uuid = null,
		?bool $successors = null,
		?int $amount = null,
	): Response
	{
		return $this->connector->send(new ListMessageStreamOfCertainMessageExcludingMessageWithUuid5($uuid, $successors, $amount));
	}


	public function createMessage(): Response
	{
		return $this->connector->send(new CreateMessage());
	}


	/**
	 * @param string $conversationId The reference UUID5 of the conversation to start from.
	 */
	public function listArchivedMessageStreamOfCertainConversation(string $conversationId): Response
	{
		return $this->connector->send(new ListArchivedMessageStreamOfCertainConversation($conversationId));
	}


	/**
	 * @param int $page The number of the returned page of messages. The default value is 1 (the first).
	 * @param int $itemsPerPage The number of messages to be listed (defaults to 50).
	 */
	public function listMessagesPerPage(?int $page = null, ?int $itemsPerPage = null): Response
	{
		return $this->connector->send(new ListMessagesPerPage($page, $itemsPerPage));
	}


	/**
	 * @param string $uuid5 The UUID5 of the message
	 */
	public function getMessageForTheGivenUuid5andAllItsAssociatedSuccessors(string $uuid5): Response
	{
		return $this->connector->send(new GetMessageForTheGivenUuid5AndAllItsAssociatedSuccessors($uuid5));
	}


	/**
	 * @param string $uuid5 The UUID of the message to be deleted
	 */
	public function deleteMessageByUuid(string $uuid5): Response
	{
		return $this->connector->send(new DeleteMessageByUuid($uuid5));
	}


	/**
	 * @param string $uuid5 The UUID of the message
	 * @param string $filename The file name of the attachment
	 */
	public function getAttachmentByUuidAndFileName(string $uuid5, string $filename): Response
	{
		return $this->connector->send(new GetAttachmentByUuidAndFileName($uuid5, $filename));
	}


	/**
	 * @param string $uuid5 The UUID of the message
	 */
	public function getAllAttachmentsByUuid(string $uuid5): Response
	{
		return $this->connector->send(new GetAllAttachmentsByUuid($uuid5));
	}


	/**
	 * @param int $uuid5
	 */
	public function updateMessageControls(int $uuid5): Response
	{
		return $this->connector->send(new UpdateMessageControls($uuid5));
	}


	/**
	 * @param string $uuid5 The UUID5 of the message
	 * @param string $doneAt Set (or unset, if doneAt is not given) the doneAt date in the message.
	 */
	public function setOrUnsetDoneAtDateOfMessage(string $uuid5, ?string $doneAt = null): Response
	{
		return $this->connector->send(new SetOrUnsetDoneAtDateOfMessage($uuid5, $doneAt));
	}


	/**
	 * @param string $uuid5 The UUID of the message
	 * @param int $readBy The ID of the user who read the message
	 */
	public function updateReadByArrayOfMessage(string $uuid5, int $readBy): Response
	{
		return $this->connector->send(new UpdateReadByArrayOfMessage($uuid5, $readBy));
	}


	/**
	 * @param string $uuid5 The UUID of the message
	 * @param array $tags The tags of the message
	 */
	public function updateTagsOfMessage(string $uuid5, array $tags): Response
	{
		return $this->connector->send(new UpdateTagsOfMessage($uuid5, $tags));
	}


	/**
	 * @param string $uuid5 The UUID of the message
	 */
	public function updateMessageVisibility(string $uuid5): Response
	{
		return $this->connector->send(new UpdateMessageVisibility($uuid5));
	}


	public function updatesExistingEbayAccount(): Response
	{
		return $this->connector->send(new UpdatesExistingEbayAccount());
	}


	public function createNewEbayAccount(): Response
	{
		return $this->connector->send(new CreateNewEbayAccount());
	}


	public function getTheListOfEbayAccounts(): Response
	{
		return $this->connector->send(new GetTheListOfEbayAccounts());
	}


	/**
	 * @param int $id
	 */
	public function retrievesEbayAccountObject(int $id): Response
	{
		return $this->connector->send(new RetrievesEbayAccountObject($id));
	}


	/**
	 * @param int $id
	 */
	public function markAsDeletedEbayAccount(int $id): Response
	{
		return $this->connector->send(new MarkAsDeletedEbayAccount($id));
	}


	public function retrievesTheGeneralSettingsObject(): Response
	{
		return $this->connector->send(new RetrievesTheGeneralSettingsObject());
	}


	public function updatesTheGeneralSettingsObject(): Response
	{
		return $this->connector->send(new UpdatesTheGeneralSettingsObject());
	}


	public function retrievesTheDefaultValueForWhisperMode(): Response
	{
		return $this->connector->send(new RetrievesTheDefaultValueForWhisperMode());
	}
}
