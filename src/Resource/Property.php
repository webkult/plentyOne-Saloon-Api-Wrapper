<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Property\AttachPropertyToPropertyGroup;
use PlentyOne\Api\Requests\Property\CreateAvailability;
use PlentyOne\Api\Requests\Property\CreateGroupName;
use PlentyOne\Api\Requests\Property\CreateGroupOption;
use PlentyOne\Api\Requests\Property\CreateGroupRelation;
use PlentyOne\Api\Requests\Property\CreateListOfPropertyRelations;
use PlentyOne\Api\Requests\Property\CreateName;
use PlentyOne\Api\Requests\Property\CreateOneOrMultiplePropertyAmazon;
use PlentyOne\Api\Requests\Property\CreateProperty;
use PlentyOne\Api\Requests\Property\CreatePropertyAmazon;
use PlentyOne\Api\Requests\Property\CreatePropertyGroup;
use PlentyOne\Api\Requests\Property\CreatePropertyMarket;
use PlentyOne\Api\Requests\Property\CreatePropertyName;
use PlentyOne\Api\Requests\Property\CreatePropertyOption;
use PlentyOne\Api\Requests\Property\CreatePropertyOptions;
use PlentyOne\Api\Requests\Property\CreatePropertyRelation;
use PlentyOne\Api\Requests\Property\CreatePropertyRelationSelection;
use PlentyOne\Api\Requests\Property\CreatePropertyRelationValue;
use PlentyOne\Api\Requests\Property\CreatePropertySelection;
use PlentyOne\Api\Requests\Property\CreatePropertySelectionName;
use PlentyOne\Api\Requests\Property\DeleteAllPropertyRelationValuesOfSpecifiedPropertyRelation;
use PlentyOne\Api\Requests\Property\DeleteAvailability;
use PlentyOne\Api\Requests\Property\DeleteGroupName;
use PlentyOne\Api\Requests\Property\DeleteGroupOption;
use PlentyOne\Api\Requests\Property\DeleteGroupRelation;
use PlentyOne\Api\Requests\Property\DeleteProperty;
use PlentyOne\Api\Requests\Property\DeletePropertyAmazon;
use PlentyOne\Api\Requests\Property\DeletePropertyGroup;
use PlentyOne\Api\Requests\Property\DeletePropertyMarket;
use PlentyOne\Api\Requests\Property\DeletePropertyName;
use PlentyOne\Api\Requests\Property\DeletePropertyOption;
use PlentyOne\Api\Requests\Property\DeletePropertyOptions;
use PlentyOne\Api\Requests\Property\DeletePropertyRelation;
use PlentyOne\Api\Requests\Property\DeletePropertyRelationSelection;
use PlentyOne\Api\Requests\Property\DeletePropertyRelationValue;
use PlentyOne\Api\Requests\Property\DeletePropertyRelations;
use PlentyOne\Api\Requests\Property\DeletePropertySelection;
use PlentyOne\Api\Requests\Property\DeletePropertySelectionName;
use PlentyOne\Api\Requests\Property\DeleteTheFileOfPropertyRelation;
use PlentyOne\Api\Requests\Property\DetachPropertyFromPropertyGroup;
use PlentyOne\Api\Requests\Property\GetAvailability;
use PlentyOne\Api\Requests\Property\GetGroupName;
use PlentyOne\Api\Requests\Property\GetGroupNamesByGroupId;
use PlentyOne\Api\Requests\Property\GetGroupOption;
use PlentyOne\Api\Requests\Property\GetGroupOptionsByGroupId;
use PlentyOne\Api\Requests\Property\GetGroupRelation;
use PlentyOne\Api\Requests\Property\GetGroupTypesFromModuleConfiguration;
use PlentyOne\Api\Requests\Property\GetProperty;
use PlentyOne\Api\Requests\Property\GetPropertyAmazon;
use PlentyOne\Api\Requests\Property\GetPropertyAmazonsByPropertyId;
use PlentyOne\Api\Requests\Property\GetPropertyDestinations;
use PlentyOne\Api\Requests\Property\GetPropertyGroup;
use PlentyOne\Api\Requests\Property\GetPropertyMarket;
use PlentyOne\Api\Requests\Property\GetPropertyName;
use PlentyOne\Api\Requests\Property\GetPropertyNamesByPropertyId;
use PlentyOne\Api\Requests\Property\GetPropertyOption;
use PlentyOne\Api\Requests\Property\GetPropertyOptionsByPropertyId;
use PlentyOne\Api\Requests\Property\GetPropertyRelation;
use PlentyOne\Api\Requests\Property\GetPropertyRelationSelection;
use PlentyOne\Api\Requests\Property\GetPropertyRelationSelectionsByRelationId;
use PlentyOne\Api\Requests\Property\GetPropertyRelationValue;
use PlentyOne\Api\Requests\Property\GetPropertyRelationValuesByRelationId;
use PlentyOne\Api\Requests\Property\GetPropertySelection;
use PlentyOne\Api\Requests\Property\GetPropertySelectionName;
use PlentyOne\Api\Requests\Property\GetPropertySelectionNamesBySelectionId;
use PlentyOne\Api\Requests\Property\GetPropertySelectionsByPropertyId;
use PlentyOne\Api\Requests\Property\GetPropertyUuidRelation;
use PlentyOne\Api\Requests\Property\GetSurchargeTypesFromModuleConfiguration;
use PlentyOne\Api\Requests\Property\GetSystemLanguage;
use PlentyOne\Api\Requests\Property\ListAvailabilities;
use PlentyOne\Api\Requests\Property\ListGroupNames;
use PlentyOne\Api\Requests\Property\ListGroupOptions;
use PlentyOne\Api\Requests\Property\ListNames;
use PlentyOne\Api\Requests\Property\ListProperties;
use PlentyOne\Api\Requests\Property\ListPropertyAmazons;
use PlentyOne\Api\Requests\Property\ListPropertyGroups;
use PlentyOne\Api\Requests\Property\ListPropertyMarkets;
use PlentyOne\Api\Requests\Property\ListPropertyOptions;
use PlentyOne\Api\Requests\Property\ListPropertyRelationValues;
use PlentyOne\Api\Requests\Property\ListPropertyRelations;
use PlentyOne\Api\Requests\Property\ListPropertySelections;
use PlentyOne\Api\Requests\Property\MassAttachPropertyIdAndGroupIdCollectionIntoThePivotTable;
use PlentyOne\Api\Requests\Property\SavePropertyRelationFileToS3;
use PlentyOne\Api\Requests\Property\SearchForGroupRelations;
use PlentyOne\Api\Requests\Property\SearchForProperties;
use PlentyOne\Api\Requests\Property\SearchForPropertyGroups;
use PlentyOne\Api\Requests\Property\SearchForPropertyRelations;
use PlentyOne\Api\Requests\Property\UpdateAvailability;
use PlentyOne\Api\Requests\Property\UpdateGroupName;
use PlentyOne\Api\Requests\Property\UpdateGroupOption;
use PlentyOne\Api\Requests\Property\UpdateListOfPropertyRelations;
use PlentyOne\Api\Requests\Property\UpdateMultiplePropertyRelationValue;
use PlentyOne\Api\Requests\Property\UpdateOneOrMultiplePropertyAmazon;
use PlentyOne\Api\Requests\Property\UpdateProperty;
use PlentyOne\Api\Requests\Property\UpdatePropertyAmazon;
use PlentyOne\Api\Requests\Property\UpdatePropertyGroup;
use PlentyOne\Api\Requests\Property\UpdatePropertyMarket;
use PlentyOne\Api\Requests\Property\UpdatePropertyName;
use PlentyOne\Api\Requests\Property\UpdatePropertyOption;
use PlentyOne\Api\Requests\Property\UpdatePropertyRelation;
use PlentyOne\Api\Requests\Property\UpdatePropertyRelationSelection;
use PlentyOne\Api\Requests\Property\UpdatePropertyRelationValue;
use PlentyOne\Api\Requests\Property\UpdatePropertySelection;
use PlentyOne\Api\Requests\Property\UpdatePropertySelectionName;
use PlentyOne\Api\Requests\Property\UpdateRelations;
use PlentyOne\Api\Requests\Property\UploadPropertyRelationFile;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Property extends BaseResource
{
	public function listProperties(): Response
	{
		return $this->connector->send(new ListProperties());
	}


	/**
	 * @param string $cast The cast of the property
	 * @param string $typeIdentifier The identifier of the property type
	 * @param int $position The position of the property
	 */
	public function createProperty(string $cast, string $typeIdentifier, int $position): Response
	{
		return $this->connector->send(new CreateProperty($cast, $typeIdentifier, $position));
	}


	public function listPropertyAmazons(): Response
	{
		return $this->connector->send(new ListPropertyAmazons());
	}


	public function updateOneOrMultiplePropertyAmazon(): Response
	{
		return $this->connector->send(new UpdateOneOrMultiplePropertyAmazon());
	}


	/**
	 * @param int $propertyId The ID of the property
	 * @param string $platform The platform of the property amazon
	 * @param string $category The category of the property amazon
	 * @param string $field The field of the property amazon
	 */
	public function createOneOrMultiplePropertyAmazon(
		int $propertyId,
		string $platform,
		string $category,
		string $field,
	): Response
	{
		return $this->connector->send(new CreateOneOrMultiplePropertyAmazon($propertyId, $platform, $category, $field));
	}


	/**
	 * @param int $propertyAmazonId The ID of the property amazon
	 */
	public function getPropertyAmazon(int $propertyAmazonId): Response
	{
		return $this->connector->send(new GetPropertyAmazon($propertyAmazonId));
	}


	/**
	 * @param int $propertyAmazonId The ID of the property amazon
	 */
	public function deletePropertyAmazon(int $propertyAmazonId): Response
	{
		return $this->connector->send(new DeletePropertyAmazon($propertyAmazonId));
	}


	public function listAvailabilities(): Response
	{
		return $this->connector->send(new ListAvailabilities());
	}


	/**
	 * @param int $propertyId The ID of the property
	 * @param int $type The type of the availability
	 * @param int $value The value of the availability
	 */
	public function createAvailability(int $propertyId, int $type, int $value): Response
	{
		return $this->connector->send(new CreateAvailability($propertyId, $type, $value));
	}


	/**
	 * @param int $availabilityId The ID of the property availability
	 */
	public function getAvailability(int $availabilityId): Response
	{
		return $this->connector->send(new GetAvailability($availabilityId));
	}


	/**
	 * @param int $availabilityId The ID of the availability
	 */
	public function updateAvailability(int $availabilityId): Response
	{
		return $this->connector->send(new UpdateAvailability($availabilityId));
	}


	/**
	 * @param int $availabilityId The ID of the availability
	 */
	public function deleteAvailability(int $availabilityId): Response
	{
		return $this->connector->send(new DeleteAvailability($availabilityId));
	}


	public function getPropertyDestinations(): Response
	{
		return $this->connector->send(new GetPropertyDestinations());
	}


	/**
	 * @param int $groupId The ID of the group
	 */
	public function listPropertyGroups(int $groupId): Response
	{
		return $this->connector->send(new ListPropertyGroups($groupId));
	}


	/**
	 * @param int $position The position  of the group
	 * @param int $names The names of the group.
	 * @param int $options The options of the group
	 */
	public function createPropertyGroup(int $position, ?int $names = null, ?int $options = null): Response
	{
		return $this->connector->send(new CreatePropertyGroup($position, $names, $options));
	}


	public function listGroupNames(): Response
	{
		return $this->connector->send(new ListGroupNames());
	}


	/**
	 * @param int $propertyId The ID of the property
	 * @param string $lang The lang of the group name
	 * @param string $name The name of the group name
	 */
	public function createGroupName(int $propertyId, string $lang, string $name): Response
	{
		return $this->connector->send(new CreateGroupName($propertyId, $lang, $name));
	}


	/**
	 * @param int $groupNameId The ID of the group name
	 */
	public function getGroupName(int $groupNameId): Response
	{
		return $this->connector->send(new GetGroupName($groupNameId));
	}


	/**
	 * @param int $groupNameId The ID of the group name
	 */
	public function updateGroupName(int $groupNameId): Response
	{
		return $this->connector->send(new UpdateGroupName($groupNameId));
	}


	/**
	 * @param int $groupNameId The ID of the group name
	 */
	public function deleteGroupName(int $groupNameId): Response
	{
		return $this->connector->send(new DeleteGroupName($groupNameId));
	}


	public function listGroupOptions(): Response
	{
		return $this->connector->send(new ListGroupOptions());
	}


	/**
	 * @param int $propertyGroupId The ID of the property group
	 * @param string $groupOptionIdentifier The groupOptionIdentifier of the group name
	 * @param string $value The value of the group name
	 */
	public function createGroupOption(int $propertyGroupId, string $groupOptionIdentifier, string $value): Response
	{
		return $this->connector->send(new CreateGroupOption($propertyGroupId, $groupOptionIdentifier, $value));
	}


	/**
	 * @param int $groupOptionId The ID of the group option
	 */
	public function getGroupOption(int $groupOptionId): Response
	{
		return $this->connector->send(new GetGroupOption($groupOptionId));
	}


	/**
	 * @param int $groupOptionId The ID of the group option
	 */
	public function updateGroupOption(int $groupOptionId): Response
	{
		return $this->connector->send(new UpdateGroupOption($groupOptionId));
	}


	/**
	 * @param int $groupOptionId The ID of the group option
	 */
	public function deleteGroupOption(int $groupOptionId): Response
	{
		return $this->connector->send(new DeleteGroupOption($groupOptionId));
	}


	public function getSurchargeTypesFromModuleConfiguration(): Response
	{
		return $this->connector->send(new GetSurchargeTypesFromModuleConfiguration());
	}


	public function getGroupTypesFromModuleConfiguration(): Response
	{
		return $this->connector->send(new GetGroupTypesFromModuleConfiguration());
	}


	/**
	 * @param int $groupId The ID of the group
	 */
	public function getPropertyGroup(int $groupId): Response
	{
		return $this->connector->send(new GetPropertyGroup($groupId));
	}


	/**
	 * @param int $groupId
	 * @param int $position The position  of the group
	 * @param int $names The names of the group.
	 * @param int $options The options of the group
	 */
	public function updatePropertyGroup(
		int $groupId,
		?int $position = null,
		?int $names = null,
		?int $options = null,
	): Response
	{
		return $this->connector->send(new UpdatePropertyGroup($groupId, $position, $names, $options));
	}


	/**
	 * @param int $groupId The ID of the group
	 */
	public function massAttachPropertyIdAndGroupIdCollectionIntoThePivotTable(int $groupId): Response
	{
		return $this->connector->send(new MassAttachPropertyIdAndGroupIdCollectionIntoThePivotTable($groupId));
	}


	/**
	 * @param int $groupId The ID of the group
	 * @param int $propertyId The ID of the property
	 */
	public function attachPropertyToPropertyGroup(int $groupId, int $propertyId): Response
	{
		return $this->connector->send(new AttachPropertyToPropertyGroup($groupId, $propertyId));
	}


	/**
	 * @param int $groupId The ID of the group
	 * @param int $propertyId The ID of the property
	 */
	public function detachPropertyFromPropertyGroup(int $groupId, int $propertyId): Response
	{
		return $this->connector->send(new DetachPropertyFromPropertyGroup($groupId, $propertyId));
	}


	/**
	 * @param int $propertyId
	 * @param int $groupId The ID of the group
	 */
	public function deletePropertyGroup(int $propertyId, int $groupId): Response
	{
		return $this->connector->send(new DeletePropertyGroup($propertyId, $groupId));
	}


	public function listPropertyMarkets(): Response
	{
		return $this->connector->send(new ListPropertyMarkets());
	}


	/**
	 * @param int $propertyId Property id
	 * @param float|int $referrerId The referrer id of the property market
	 * @param int $referrerSubId The referrer sub id of the property market
	 * @param string $value The value of the property market
	 */
	public function createPropertyMarket(
		int $propertyId,
		float|int $referrerId,
		int $referrerSubId,
		string $value,
	): Response
	{
		return $this->connector->send(new CreatePropertyMarket($propertyId, $referrerId, $referrerSubId, $value));
	}


	/**
	 * @param int $propertiesMarketId
	 * @param int $propertyMarketId The ID of the property market
	 */
	public function getPropertyMarket(int $propertiesMarketId, int $propertyMarketId): Response
	{
		return $this->connector->send(new GetPropertyMarket($propertiesMarketId, $propertyMarketId));
	}


	/**
	 * @param int $propertiesMarketId
	 */
	public function updatePropertyMarket(int $propertiesMarketId): Response
	{
		return $this->connector->send(new UpdatePropertyMarket($propertiesMarketId));
	}


	/**
	 * @param int $propertiesMarketId
	 * @param int $propertyMarketId The ID of the property market
	 */
	public function deletePropertyMarket(int $propertiesMarketId, int $propertyMarketId): Response
	{
		return $this->connector->send(new DeletePropertyMarket($propertiesMarketId, $propertyMarketId));
	}


	/**
	 * @param int $propertyId ID of the property
	 * @param string $typeOptionIdentifier The identifier of the property option type
	 */
	public function createPropertyOptions(int $propertyId, string $typeOptionIdentifier): Response
	{
		return $this->connector->send(new CreatePropertyOptions($propertyId, $typeOptionIdentifier));
	}


	public function deletePropertyOptions(): Response
	{
		return $this->connector->send(new DeletePropertyOptions());
	}


	public function listNames(): Response
	{
		return $this->connector->send(new ListNames());
	}


	/**
	 * @param int $propertyId The id of the property name
	 * @param string $lang The lang of the property name
	 * @param string $name The name of the property name
	 * @param string $description The description of the property name
	 */
	public function createName(int $propertyId, string $lang, string $name, ?string $description = null): Response
	{
		return $this->connector->send(new CreateName($propertyId, $lang, $name, $description));
	}


	/**
	 * @param int $nameId The ID of the property name
	 */
	public function getPropertyName(int $nameId): Response
	{
		return $this->connector->send(new GetPropertyName($nameId));
	}


	/**
	 * @param int $nameId The ID of the property name
	 */
	public function updatePropertyName(int $nameId): Response
	{
		return $this->connector->send(new UpdatePropertyName($nameId));
	}


	/**
	 * @param int $nameId The ID of the property name
	 */
	public function deletePropertyName(int $nameId): Response
	{
		return $this->connector->send(new DeletePropertyName($nameId));
	}


	public function listPropertyOptions(): Response
	{
		return $this->connector->send(new ListPropertyOptions());
	}


	/**
	 * @param int $propertyId ID of the property
	 * @param string $typeOptionIdentifier The identifier of the property option type
	 */
	public function createPropertyOption(int $propertyId, string $typeOptionIdentifier): Response
	{
		return $this->connector->send(new CreatePropertyOption($propertyId, $typeOptionIdentifier));
	}


	/**
	 * @param int $propertyOptionId The ID of the property option
	 */
	public function getPropertyOption(int $propertyOptionId): Response
	{
		return $this->connector->send(new GetPropertyOption($propertyOptionId));
	}


	/**
	 * @param int $propertyOptionId
	 * @param int $propertyOptionId The ID of the property option
	 */
	public function updatePropertyOption(int $propertyOptionId): Response
	{
		return $this->connector->send(new UpdatePropertyOption($propertyOptionId, $propertyOptionId));
	}


	/**
	 * @param int $propertyOptionId The ID of the property option
	 */
	public function deletePropertyOption(int $propertyOptionId): Response
	{
		return $this->connector->send(new DeletePropertyOption($propertyOptionId));
	}


	/**
	 * @param int $page Current page of the response
	 * @param int $itemsPerPage The requested amount of items per result page
	 * @param int $paginate The condition that determines if the pagination should be used (default value is set to 0)
	 * @param string $relationTypeIdentifier The parameter that decides the type of relation
	 * @param int $relationTargetId The ID of the target of the relation
	 * @param string $sortBy Filter sorts the result of property relations. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'propertyId'</li><li>'groupId'</li><li>'relationType'</li></ul>
	 */
	public function listPropertyRelations(
		?int $page = null,
		?int $itemsPerPage = null,
		?int $paginate = null,
		?string $relationTypeIdentifier = null,
		?int $relationTargetId = null,
		?string $sortBy = null,
	): Response
	{
		return $this->connector->send(new ListPropertyRelations($page, $itemsPerPage, $paginate, $relationTypeIdentifier, $relationTargetId, $sortBy));
	}


	/**
	 * @param int $relationId The ID of the property relation
	 */
	public function updateRelations(int $relationId): Response
	{
		return $this->connector->send(new UpdateRelations($relationId));
	}


	/**
	 * @param int $propertyId The ID of the property
	 * @param string $relationTypeIdentifier The identifier of the property relation type
	 * @param int $relationTargetId The ID of the property relation target
	 * @param int $selectionRelationId The ID of the property selection relation
	 */
	public function createPropertyRelation(
		int $propertyId,
		string $relationTypeIdentifier,
		int $relationTargetId,
		int $selectionRelationId,
	): Response
	{
		return $this->connector->send(new CreatePropertyRelation($propertyId, $relationTypeIdentifier, $relationTargetId, $selectionRelationId));
	}


	/**
	 * @param int $relationId The ID of the property relation
	 */
	public function deletePropertyRelations(int $relationId): Response
	{
		return $this->connector->send(new DeletePropertyRelations($relationId));
	}


	public function listPropertyRelationValues(): Response
	{
		return $this->connector->send(new ListPropertyRelationValues());
	}


	public function updateMultiplePropertyRelationValue(): Response
	{
		return $this->connector->send(new UpdateMultiplePropertyRelationValue());
	}


	/**
	 * @param int $propertyId The ID of the property
	 * @param string $lang The lang of the property relation value
	 * @param string $value The value of the property relation
	 */
	public function createPropertyRelationValue(int $propertyId, string $lang, string $value): Response
	{
		return $this->connector->send(new CreatePropertyRelationValue($propertyId, $lang, $value));
	}


	/**
	 * @param int $propertiesRelationValueId
	 * @param int $propertyRelationId The ID of the property relation
	 */
	public function getPropertyRelationValue(int $propertiesRelationValueId, int $propertyRelationId): Response
	{
		return $this->connector->send(new GetPropertyRelationValue($propertiesRelationValueId, $propertyRelationId));
	}


	/**
	 * @param int $propertiesRelationValueId
	 * @param int $propertyRelationValueId The ID of the property relation value
	 */
	public function updatePropertyRelationValue(int $propertiesRelationValueId, int $propertyRelationValueId): Response
	{
		return $this->connector->send(new UpdatePropertyRelationValue($propertiesRelationValueId, $propertyRelationValueId));
	}


	/**
	 * @param int $propertiesRelationValueId
	 * @param int $propertyRelationValueId The ID of the property relation value
	 */
	public function deletePropertyRelationValue(int $propertiesRelationValueId, int $propertyRelationValueId): Response
	{
		return $this->connector->send(new DeletePropertyRelationValue($propertiesRelationValueId, $propertyRelationValueId));
	}


	/**
	 * @param int $relationId The ID of the relation
	 */
	public function getPropertyRelation(int $relationId): Response
	{
		return $this->connector->send(new GetPropertyRelation($relationId));
	}


	/**
	 * @param int $relationId The ID of the property relation
	 */
	public function updatePropertyRelation(int $relationId): Response
	{
		return $this->connector->send(new UpdatePropertyRelation($relationId));
	}


	/**
	 * @param int $relationId The ID of the property relation
	 */
	public function deletePropertyRelation(int $relationId): Response
	{
		return $this->connector->send(new DeletePropertyRelation($relationId));
	}


	/**
	 * @param int $relationId The ID of the property relation
	 * @param string $key The name of the file that needs to be saved
	 * @param string $content The actual file content in text format
	 * @param bool $deleteIfExists Condition for the check of already existing file
	 */
	public function savePropertyRelationFileToS3(
		int $relationId,
		string $key,
		string $content,
		bool $deleteIfExists,
	): Response
	{
		return $this->connector->send(new SavePropertyRelationFileToS3($relationId, $key, $content, $deleteIfExists));
	}


	/**
	 * @param int $relationId
	 */
	public function deleteAllPropertyRelationValuesOfSpecifiedPropertyRelation(int $relationId): Response
	{
		return $this->connector->send(new DeleteAllPropertyRelationValuesOfSpecifiedPropertyRelation($relationId));
	}


	public function listPropertySelections(): Response
	{
		return $this->connector->send(new ListPropertySelections());
	}


	/**
	 * @param int $propertyId The ID of the property
	 * @param int $position The position of the property selection
	 */
	public function createPropertySelection(int $propertyId, int $position): Response
	{
		return $this->connector->send(new CreatePropertySelection($propertyId, $position));
	}


	/**
	 * @param int $propertySelectionId The ID of the property selection
	 */
	public function getPropertySelection(int $propertySelectionId): Response
	{
		return $this->connector->send(new GetPropertySelection($propertySelectionId));
	}


	/**
	 * @param int $propertySelectionId
	 * @param int $propertySelectionId The ID of the property selection
	 */
	public function updatePropertySelection(int $propertySelectionId): Response
	{
		return $this->connector->send(new UpdatePropertySelection($propertySelectionId, $propertySelectionId));
	}


	/**
	 * @param int $propertySelectionId The ID of the property selection
	 */
	public function deletePropertySelection(int $propertySelectionId): Response
	{
		return $this->connector->send(new DeletePropertySelection($propertySelectionId));
	}


	public function getSystemLanguage(): Response
	{
		return $this->connector->send(new GetSystemLanguage());
	}


	/**
	 * @param int $propertyId The ID of the property
	 */
	public function getProperty(int $propertyId): Response
	{
		return $this->connector->send(new GetProperty($propertyId));
	}


	/**
	 * @param int $propertyId The ID of the property
	 */
	public function updateProperty(int $propertyId): Response
	{
		return $this->connector->send(new UpdateProperty($propertyId));
	}


	/**
	 * @param int $propertyId The ID of the property
	 */
	public function deleteProperty(int $propertyId): Response
	{
		return $this->connector->send(new DeleteProperty($propertyId));
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'names' = The names of the property.</li><li>'amazon' = The amazon values of the property.</li><li>'options' = The options of the property.</li><li>'groups' = The groups of the property.</li></ul>
	 * @param string $orderBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified.
	 * @param int $page The requested page of results. Default value is 1.
	 * @param int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 * @param int $id Filter restricts the list of results to properties which have have a matching ID. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param string $cast Filter restricts the list of results to properties which have have a matching cast. Possible search operators are: 'eq', 'in'
	 * @param int $group Filter restricts the list of results to properties which have have a matching group id. Possible search operators are: 'eq', 'in'
	 * @param string $name Filter restricts the list of results to properties which have have a matching name. Possible search operators are: 'eq', 'like'
	 * @param string $type Filter restricts the list of results to properties which have have a matching type. Possible search operators are: 'eq', 'in'
	 * @param string $updatedAt Filter restricts the list of results to properties which have a matching updatedAt. Possible search operators are: 'between', 'gte', 'lte', 'gt', 'lt'.
	 * @param string $optionUnits Filter restricts the list of results to properties which have a matching option with the type units. Possible search operators are: 'eq', 'in'.
	 * @param string $optionVatId Filter restricts the list of results to properties which have a matching option with the type vatId. Possible search operators are: 'eq', 'in'.
	 * @param string $optionDisplayOrder Filter restricts the list of results to properties which have a matching option with the type displayOrder. Possible search operators are: 'eq', 'in'.
	 * @param string $optionMarkup Filter restricts the list of results to properties which have a matching option with the type markup. Possible search operators are: 'eq', 'in'.
	 * @param string $optionMandatoryField Filter restricts the list of results to properties which have a matching option with the type mandatoryField. Possible search operators are: 'eq', 'in'.
	 * @param string $optionOrderProcess Filter restricts the list of results to properties which have a matching option with the type orderProcess. Possible search operators are: 'eq', 'in'.
	 * @param string $optionCustomerRegistration Filter restricts the list of results to properties which have a matching option with the type customerRegistration. Possible search operators are: 'eq', 'in'.
	 * @param string $optionContactSearch Filter restricts the list of results to properties which have a matching option with the type contactSearch. Possible search operators are: 'eq', 'in'.
	 * @param string $visibilityReferrers Filter restricts the list of results to properties which have a matching visibility with the type referrers. Possible search operators are: 'eq', 'in'.
	 * @param string $visibilityClients Filter restricts the list of results to properties which have a matching visibility with the type clients. Possible search operators are: 'eq', 'in'.
	 * @param string $visibilityDisplay Filter restricts the list of results to properties which have a matching visibility with the type display. Possible search operators are: 'eq', 'in'.
	 * @param string $visibilityOpportunityStatus Filter restricts the list of results to properties which have a matching visibility with the type opportunityStatus. Possible search operators are: 'eq', 'in'.
	 */
	public function searchForProperties(
		?string $with = null,
		?string $orderBy = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?int $id = null,
		?string $cast = null,
		?int $group = null,
		?string $name = null,
		?string $type = null,
		?string $updatedAt = null,
		?string $optionUnits = null,
		?string $optionVatId = null,
		?string $optionDisplayOrder = null,
		?string $optionMarkup = null,
		?string $optionMandatoryField = null,
		?string $optionOrderProcess = null,
		?string $optionCustomerRegistration = null,
		?string $optionContactSearch = null,
		?string $visibilityReferrers = null,
		?string $visibilityClients = null,
		?string $visibilityDisplay = null,
		?string $visibilityOpportunityStatus = null,
	): Response
	{
		return $this->connector->send(new SearchForProperties($with, $orderBy, $page, $itemsPerPage, $id, $cast, $group, $name, $type, $updatedAt, $optionUnits, $optionVatId, $optionDisplayOrder, $optionMarkup, $optionMandatoryField, $optionOrderProcess, $optionCustomerRegistration, $optionContactSearch, $visibilityReferrers, $visibilityClients, $visibilityDisplay, $visibilityOpportunityStatus));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createPropertyDuplicate1(): Response
	{
		return $this->connector->send(new CreateProperty());
	}


	public function createPropertyAmazon(): Response
	{
		return $this->connector->send(new CreatePropertyAmazon());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $amazonId The ID of the property amazon
	 */
	public function getPropertyAmazonDuplicate2(int $amazonId): Response
	{
		return $this->connector->send(new GetPropertyAmazon($amazonId));
	}


	/**
	 * @param int $amazonId The ID of the property amazon
	 */
	public function updatePropertyAmazon(int $amazonId): Response
	{
		return $this->connector->send(new UpdatePropertyAmazon($amazonId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $amazonId The ID of the property amazon
	 */
	public function deletePropertyAmazonDuplicate3(int $amazonId): Response
	{
		return $this->connector->send(new DeletePropertyAmazon($amazonId));
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'names' = The names of the property group.</li><li>'options' = The options of the property group.</li></ul>
	 * @param string $orderBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified.
	 * @param int $page The requested page of results. Default value is 1.
	 * @param int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 */
	public function searchForPropertyGroups(
		?string $with = null,
		?string $orderBy = null,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new SearchForPropertyGroups($with, $orderBy, $page, $itemsPerPage));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createPropertyGroupDuplicate4(): Response
	{
		return $this->connector->send(new CreatePropertyGroup());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createGroupNameDuplicate5(): Response
	{
		return $this->connector->send(new CreateGroupName());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $nameId The ID of the group name
	 */
	public function getGroupNameDuplicate6(int $nameId): Response
	{
		return $this->connector->send(new GetGroupName($nameId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $nameId The ID of the group name
	 */
	public function updateGroupNameDuplicate7(int $nameId): Response
	{
		return $this->connector->send(new UpdateGroupName($nameId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $nameId The ID of the group name
	 */
	public function deleteGroupNameDuplicate8(int $nameId): Response
	{
		return $this->connector->send(new DeleteGroupName($nameId));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createGroupOptionDuplicate9(): Response
	{
		return $this->connector->send(new CreateGroupOption());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $optionId The ID of the group option
	 */
	public function getGroupOptionDuplicate10(int $optionId): Response
	{
		return $this->connector->send(new GetGroupOption($optionId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $optionId The ID of the group option
	 */
	public function updateGroupOptionDuplicate11(int $optionId): Response
	{
		return $this->connector->send(new UpdateGroupOption($optionId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $optionId The ID of the group option
	 */
	public function deleteGroupOptionDuplicate12(int $optionId): Response
	{
		return $this->connector->send(new DeleteGroupOption($optionId));
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'group' = The related property group.</li><li>'property' = The related property.</li></ul>
	 * @param string $orderBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified.
	 * @param int $page The requested page of results. Default value is 1.
	 * @param int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 */
	public function searchForGroupRelations(
		?string $with = null,
		?string $orderBy = null,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new SearchForGroupRelations($with, $orderBy, $page, $itemsPerPage));
	}


	public function createGroupRelation(): Response
	{
		return $this->connector->send(new CreateGroupRelation());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createGroupRelationDuplicate13(): Response
	{
		return $this->connector->send(new CreateGroupRelation());
	}


	/**
	 * @param int $relationId The ID of the group relation
	 */
	public function deleteGroupRelation(int $relationId): Response
	{
		return $this->connector->send(new DeleteGroupRelation($relationId));
	}


	/**
	 * @param int $relationId The ID of the group relation
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'group' = The related property group.</li><li>'property' = The related property.</li></ul>
	 */
	public function getGroupRelation(int $relationId, ?string $with = null): Response
	{
		return $this->connector->send(new GetGroupRelation($relationId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationId The ID of the group relation
	 */
	public function deleteGroupRelationDuplicate14(int $relationId): Response
	{
		return $this->connector->send(new DeleteGroupRelation($relationId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $groupId The ID of the group
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'names' = The names of the property group.</li><li>'options' = The options of the property group.</li></ul>
	 */
	public function getPropertyGroupDuplicate15(int $groupId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertyGroup($groupId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $groupId The ID of the group
	 */
	public function updatePropertyGroupDuplicate16(int $groupId): Response
	{
		return $this->connector->send(new UpdatePropertyGroup($groupId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $groupId The ID of the property
	 */
	public function deletePropertyGroupDuplicate17(int $groupId): Response
	{
		return $this->connector->send(new DeletePropertyGroup($groupId));
	}


	/**
	 * @param int $groupId
	 */
	public function getGroupNamesByGroupId(int $groupId): Response
	{
		return $this->connector->send(new GetGroupNamesByGroupId($groupId));
	}


	/**
	 * @param int $groupId
	 */
	public function getGroupOptionsByGroupId(int $groupId): Response
	{
		return $this->connector->send(new GetGroupOptionsByGroupId($groupId));
	}


	public function createPropertyName(): Response
	{
		return $this->connector->send(new CreatePropertyName());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $nameId The ID of the property name
	 */
	public function getPropertyNameDuplicate18(int $nameId): Response
	{
		return $this->connector->send(new GetPropertyName($nameId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $nameId The ID of the property name
	 */
	public function updatePropertyNameDuplicate19(int $nameId): Response
	{
		return $this->connector->send(new UpdatePropertyName($nameId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $nameId The ID of the property name
	 */
	public function deletePropertyNameDuplicate20(int $nameId): Response
	{
		return $this->connector->send(new DeletePropertyName($nameId));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createPropertyOptionDuplicate21(): Response
	{
		return $this->connector->send(new CreatePropertyOption());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $optionId The ID of the property option
	 */
	public function getPropertyOptionDuplicate22(int $optionId): Response
	{
		return $this->connector->send(new GetPropertyOption($optionId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $optionId The ID of the property option
	 */
	public function updatePropertyOptionDuplicate23(int $optionId): Response
	{
		return $this->connector->send(new UpdatePropertyOption($optionId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $optionId The ID of the property option
	 */
	public function deletePropertyOptionDuplicate24(int $optionId): Response
	{
		return $this->connector->send(new DeletePropertyOption($optionId));
	}


	/**
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property relation.</li><li>'group' = The property group of the property relation.</li><li>'values' = The values of the property relation.</li><li>'selectionValues' = The selection values of the property relation.</li></ul>
	 * @param string $orderBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified.
	 * @param int $page The requested page of results. Default value is 1.
	 * @param int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 * @param int $id Filter restricts the list of results to property relations which have have a matching ID. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param string $propertyId Filter restricts the list of results to property relations which have have a matching propertyId. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param int $targetId Filter restricts the list of results to property relations which have have a matching target id. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param string $propertyCast Filter restricts the list of results to property relations which have have a matching proeprty cast. Possible search operators are: 'eq', 'in'
	 * @param string $type Filter restricts the list of results to property relations which have have a matching type. Possible search operators are: 'eq', 'in'
	 * @param string $updatedAt Filter restricts the list of results to property relations which have a matching updatedAt. Possible search operators are: 'between', 'gte', 'lte', 'gt', 'lt'.
	 */
	public function searchForPropertyRelations(
		?string $with = null,
		?string $orderBy = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?int $id = null,
		?string $propertyId = null,
		?int $targetId = null,
		?string $propertyCast = null,
		?string $type = null,
		?string $updatedAt = null,
	): Response
	{
		return $this->connector->send(new SearchForPropertyRelations($with, $orderBy, $page, $itemsPerPage, $id, $propertyId, $targetId, $propertyCast, $type, $updatedAt));
	}


	public function updateListOfPropertyRelations(): Response
	{
		return $this->connector->send(new UpdateListOfPropertyRelations());
	}


	public function createListOfPropertyRelations(): Response
	{
		return $this->connector->send(new CreateListOfPropertyRelations());
	}


	public function createPropertyRelationSelection(): Response
	{
		return $this->connector->send(new CreatePropertyRelationSelection());
	}


	/**
	 * @param int $relationSelectionId The ID of the relation selection
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'relation' = The relation of the property relation selection.</li><li>'selection' = The selection of the property relation selection.</li></ul>
	 */
	public function getPropertyRelationSelection(int $relationSelectionId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertyRelationSelection($relationSelectionId, $with));
	}


	/**
	 * @param int $relationSelectionId The ID of the relation selection
	 */
	public function updatePropertyRelationSelection(int $relationSelectionId): Response
	{
		return $this->connector->send(new UpdatePropertyRelationSelection($relationSelectionId));
	}


	/**
	 * @param int $relationSelectionId The ID of the relation selection
	 */
	public function deletePropertyRelationSelection(int $relationSelectionId): Response
	{
		return $this->connector->send(new DeletePropertyRelationSelection($relationSelectionId));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createPropertyRelationValueDuplicate25(): Response
	{
		return $this->connector->send(new CreatePropertyRelationValue());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationValueId The ID of the relation value
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'relation' = The relation of the property relation selection.</li></ul>
	 */
	public function getPropertyRelationValueDuplicate26(int $relationValueId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertyRelationValue($relationValueId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationValueId The ID of the relation value
	 */
	public function updatePropertyRelationValueDuplicate27(int $relationValueId): Response
	{
		return $this->connector->send(new UpdatePropertyRelationValue($relationValueId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationValueId The ID of the relation value
	 */
	public function deletePropertyRelationValueDuplicate28(int $relationValueId): Response
	{
		return $this->connector->send(new DeletePropertyRelationValue($relationValueId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationId The ID of the property
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property relation.</li><li>'group' = The property group of the property relation.</li><li>'values' = The values of the property relation.</li><li>'selectionValues' = The selection values of the property relation.</li></ul>
	 */
	public function getPropertyRelationDuplicate29(int $relationId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertyRelation($relationId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationId The ID of the relation
	 */
	public function updatePropertyRelationDuplicate30(int $relationId): Response
	{
		return $this->connector->send(new UpdatePropertyRelation($relationId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationId The ID of the relation
	 */
	public function deletePropertyRelationDuplicate31(int $relationId): Response
	{
		return $this->connector->send(new DeletePropertyRelation($relationId));
	}


	/**
	 * @param int $relationId The ID of the property relation
	 */
	public function uploadPropertyRelationFile(int $relationId): Response
	{
		return $this->connector->send(new UploadPropertyRelationFile($relationId));
	}


	/**
	 * @param int $relationId The ID of the property relation
	 */
	public function deleteTheFileOfPropertyRelation(int $relationId): Response
	{
		return $this->connector->send(new DeleteTheFileOfPropertyRelation($relationId));
	}


	/**
	 * @param int $relationId
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'relation' = The relation of the property relation selection.</li><li>'selection' = The selection of the property relation selection.</li></ul>
	 */
	public function getPropertyRelationSelectionsByRelationId(int $relationId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertyRelationSelectionsByRelationId($relationId, $with));
	}


	/**
	 * @param int $relationId
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'relation' = The relation of the property relation selection.</li></ul>
	 */
	public function getPropertyRelationValuesByRelationId(int $relationId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertyRelationValuesByRelationId($relationId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createPropertySelectionDuplicate32(): Response
	{
		return $this->connector->send(new CreatePropertySelection());
	}


	public function createPropertySelectionName(): Response
	{
		return $this->connector->send(new CreatePropertySelectionName());
	}


	/**
	 * @param int $nameId The ID of the selection
	 */
	public function getPropertySelectionName(int $nameId): Response
	{
		return $this->connector->send(new GetPropertySelectionName($nameId));
	}


	/**
	 * @param int $nameId The ID of the selection name
	 */
	public function updatePropertySelectionName(int $nameId): Response
	{
		return $this->connector->send(new UpdatePropertySelectionName($nameId));
	}


	/**
	 * @param int $nameId The ID of the selection name
	 */
	public function deletePropertySelectionName(int $nameId): Response
	{
		return $this->connector->send(new DeletePropertySelectionName($nameId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $selectionId The ID of the selection
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property selection.</li><li>'names' = The names of the property selection.</li></ul>
	 */
	public function getPropertySelectionDuplicate33(int $selectionId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertySelection($selectionId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $selectionId The ID of the selection
	 */
	public function updatePropertySelectionDuplicate34(int $selectionId): Response
	{
		return $this->connector->send(new UpdatePropertySelection($selectionId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $selectionId The ID of the selection
	 */
	public function deletePropertySelectionDuplicate35(int $selectionId): Response
	{
		return $this->connector->send(new DeletePropertySelection($selectionId));
	}


	/**
	 * @param int $selectionId
	 */
	public function getPropertySelectionNamesBySelectionId(int $selectionId): Response
	{
		return $this->connector->send(new GetPropertySelectionNamesBySelectionId($selectionId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property relation.</li><li>'group' = The property group of the property relation.</li><li>'values' = The values of the property relation.</li><li>'selectionValues' = The selection values of the property relation.</li></ul>
	 * @param string $orderBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified.
	 * @param int $page The requested page of results. Default value is 1.
	 * @param int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 * @param int $id Filter restricts the list of results to property relations which have have a matching ID. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param string $propertyId Filter restricts the list of results to property relations which have have a matching propertyId. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param int $targetId Filter restricts the list of results to property relations which have have a matching target id. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param string $propertyCast Filter restricts the list of results to property relations which have have a matching proeprty cast. Possible search operators are: 'eq', 'in'
	 * @param string $type Filter restricts the list of results to property relations which have have a matching type. Possible search operators are: 'eq', 'in'
	 * @param string $updatedAt Filter restricts the list of results to property relations which have a matching updatedAt. Possible search operators are: 'between', 'gte', 'lte', 'gt', 'lt'.
	 */
	public function searchForPropertyRelationsDuplicate36(
		?string $with = null,
		?string $orderBy = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?int $id = null,
		?string $propertyId = null,
		?int $targetId = null,
		?string $propertyCast = null,
		?string $type = null,
		?string $updatedAt = null,
	): Response
	{
		return $this->connector->send(new SearchForPropertyRelations($with, $orderBy, $page, $itemsPerPage, $id, $propertyId, $targetId, $propertyCast, $type, $updatedAt));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function updateListOfPropertyRelationsDuplicate37(): Response
	{
		return $this->connector->send(new UpdateListOfPropertyRelations());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createListOfPropertyRelationsDuplicate38(): Response
	{
		return $this->connector->send(new CreateListOfPropertyRelations());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createPropertyRelationSelectionDuplicate39(): Response
	{
		return $this->connector->send(new CreatePropertyRelationSelection());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationSelectionId The ID of the relation selection
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'relation' = The relation of the property relation selection.</li><li>'selection' = The selection of the property relation selection.</li></ul>
	 */
	public function getPropertyRelationSelectionDuplicate40(int $relationSelectionId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertyRelationSelection($relationSelectionId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationSelectionId The ID of the relation selection
	 */
	public function updatePropertyRelationSelectionDuplicate41(int $relationSelectionId): Response
	{
		return $this->connector->send(new UpdatePropertyRelationSelection($relationSelectionId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationSelectionId The ID of the relation selection
	 */
	public function deletePropertyRelationSelectionDuplicate42(int $relationSelectionId): Response
	{
		return $this->connector->send(new DeletePropertyRelationSelection($relationSelectionId));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createPropertyRelationValueDuplicate43(): Response
	{
		return $this->connector->send(new CreatePropertyRelationValue());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationValueId The ID of the relation value
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'relation' = The relation of the property relation selection.</li></ul>
	 */
	public function getPropertyRelationValueDuplicate44(int $relationValueId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertyRelationValue($relationValueId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationValueId The ID of the relation value
	 */
	public function updatePropertyRelationValueDuplicate45(int $relationValueId): Response
	{
		return $this->connector->send(new UpdatePropertyRelationValue($relationValueId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationValueId The ID of the relation value
	 */
	public function deletePropertyRelationValueDuplicate46(int $relationValueId): Response
	{
		return $this->connector->send(new DeletePropertyRelationValue($relationValueId));
	}


	/**
	 * @param int $relationId The ID of the property
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property relation.</li><li>'group' = The property group of the property relation.</li><li>'values' = The values of the property relation.</li><li>'selectionValues' = The selection values of the property relation.</li></ul>
	 */
	public function getPropertyUuidRelation(int $relationId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertyUuidRelation($relationId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationId The ID of the relation
	 */
	public function updatePropertyRelationDuplicate47(int $relationId): Response
	{
		return $this->connector->send(new UpdatePropertyRelation($relationId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationId The ID of the relation
	 */
	public function deletePropertyRelationDuplicate48(int $relationId): Response
	{
		return $this->connector->send(new DeletePropertyRelation($relationId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationId
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'relation' = The relation of the property relation selection.</li><li>'selection' = The selection of the property relation selection.</li></ul>
	 */
	public function getPropertyRelationSelectionsByRelationIdDuplicate49(int $relationId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertyRelationSelectionsByRelationId($relationId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationId
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'relation' = The relation of the property relation selection.</li></ul>
	 */
	public function getPropertyRelationValuesByRelationIdDuplicate50(int $relationId, ?string $with = null): Response
	{
		return $this->connector->send(new GetPropertyRelationValuesByRelationId($relationId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $propertyId The ID of the property
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'names' = The names of the property.</li><li>'amazon' = The amazon values of the property.</li><li>'options' = The options of the property.</li><li>'groups' = The groups of the property.</li></ul>
	 */
	public function getPropertyDuplicate51(int $propertyId, ?string $with = null): Response
	{
		return $this->connector->send(new GetProperty($propertyId, $with));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $propertyId The ID of the property
	 */
	public function updatePropertyDuplicate52(int $propertyId): Response
	{
		return $this->connector->send(new UpdateProperty($propertyId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $propertyId The ID of the property
	 */
	public function deletePropertyDuplicate53(int $propertyId): Response
	{
		return $this->connector->send(new DeleteProperty($propertyId));
	}


	/**
	 * @param int $propertyId
	 */
	public function getPropertyAmazonsByPropertyId(int $propertyId): Response
	{
		return $this->connector->send(new GetPropertyAmazonsByPropertyId($propertyId));
	}


	/**
	 * @param int $propertyId
	 */
	public function getPropertyNamesByPropertyId(int $propertyId): Response
	{
		return $this->connector->send(new GetPropertyNamesByPropertyId($propertyId));
	}


	/**
	 * @param int $propertyId
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property option.</li></ul>
	 * @param string $type Filter restricts the list of results to properties which have have a matching type. Possible search operators are: 'eq', 'in'
	 */
	public function getPropertyOptionsByPropertyId(int $propertyId, ?string $with = null, ?string $type = null): Response
	{
		return $this->connector->send(new GetPropertyOptionsByPropertyId($propertyId, $with, $type));
	}


	/**
	 * @param int $propertyId
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property selection.</li><li>'names' = The names of the property selection.</li></ul>
	 * @param string $orderBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified.
	 * @param int $page The requested page of results. Default value is 1.
	 * @param int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 * @param string $id Filter restricts the list of results to property selections which have have a matching id. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param string $name Filter restricts the list of results to property selections which have have a matching name. Possible search operators are: 'eq', 'like'
	 * @param string $updatedAt Filter restricts the list of results to property selections which have a matching updatedAt. Possible search operators are: 'between', 'gte', 'lte', 'gt', 'lt'.
	 */
	public function getPropertySelectionsByPropertyId(
		int $propertyId,
		?string $with = null,
		?string $orderBy = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?string $id = null,
		?string $name = null,
		?string $updatedAt = null,
	): Response
	{
		return $this->connector->send(new GetPropertySelectionsByPropertyId($propertyId, $with, $orderBy, $page, $itemsPerPage, $id, $name, $updatedAt));
	}
}
