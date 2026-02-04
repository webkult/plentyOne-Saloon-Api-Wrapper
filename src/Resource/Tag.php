<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Tag\CreateNewTag;
use PlentyOne\Api\Requests\Tag\CreateTag;
use PlentyOne\Api\Requests\Tag\CreateTagRelationship;
use PlentyOne\Api\Requests\Tag\CreateUpTo50Tags;
use PlentyOne\Api\Requests\Tag\DeleteTag;
use PlentyOne\Api\Requests\Tag\DeleteTagName;
use PlentyOne\Api\Requests\Tag\DeleteTagRelationship;
use PlentyOne\Api\Requests\Tag\DeleteTagRelationships;
use PlentyOne\Api\Requests\Tag\GetOneTag;
use PlentyOne\Api\Requests\Tag\GetTagById;
use PlentyOne\Api\Requests\Tag\ListRelationships;
use PlentyOne\Api\Requests\Tag\ListTagRelationships;
use PlentyOne\Api\Requests\Tag\ListTags;
use PlentyOne\Api\Requests\Tag\UpdateExistingTag;
use PlentyOne\Api\Requests\Tag\UpdateTag;
use PlentyOne\Api\Requests\Tag\UpdateUpTo50Tags;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Tag extends BaseResource
{
	/**
	 * @param string $with Includes the specified tag information in the results. The following parameters are available: <ul><li>availabilities = The tag availabilities</li><li>names = The tag names</li><li>relationship = The tag relationships</li></ul>More than one parameter should be separated by commas.
	 * @param string $tagName Filter restricts the list of results to tags with the specified tag name. The tag name must be specified.
	 * @param string $tagAvailability Filter restricts the list of results to tags with the specified availability type. The availability type must be specified.
	 * @param string $tagLang Filter restricts the list of results to tags which have names in the specified language. The language must be specified.
	 * @param string $color Filter restricts the list of results to tags with the specified color. The color must be specified.
	 */
	public function listTags(
		?string $with = null,
		?string $tagName = null,
		?string $tagAvailability = null,
		?string $tagLang = null,
		?string $color = null,
	): Response
	{
		return $this->connector->send(new ListTags($with, $tagName, $tagAvailability, $tagLang, $color));
	}


	/**
	 * @param string $tagName The name of the tag
	 * @param string $tagLang tagLang is used in names. The names field contains multiple languages.
	 */
	public function createTag(string $tagName, string $tagLang): Response
	{
		return $this->connector->send(new CreateTag($tagName, $tagLang));
	}


	public function updateUpTo50tags(): Response
	{
		return $this->connector->send(new UpdateUpTo50Tags());
	}


	public function createUpTo50tags(): Response
	{
		return $this->connector->send(new CreateUpTo50Tags());
	}


	/**
	 * @param string $with Includes the specified tag information in the results. The following parameters are available: <ul><li>availability = The tag availability</li><li>tag = The tag</li></ul>More than one parameter should be separated by commas.
	 * @param int $tagId Filter restricts the list of results to tag relationships with the specified tag ID. The tag ID must be specified.
	 * @param string $tagType Filter restricts the list of results to tag relationships with the specified tag type. The tag type must be specified.
	 * @param int $relationshipValue Filter restricts the list of results to tag relationships with the specified relationship value. This is the ID of the data record. The relationship value must be specified.
	 */
	public function listRelationships(
		?string $with = null,
		?int $tagId = null,
		?string $tagType = null,
		?int $relationshipValue = null,
	): Response
	{
		return $this->connector->send(new ListRelationships($with, $tagId, $tagType, $relationshipValue));
	}


	/**
	 * @param int $tagId The ID of the tag.
	 * @param string $tagType The type of tag. Allowed values are category, ticket, variation, board, contact.
	 * @param int $relationshipValue The ID of the data record for which a tag relationship is created.
	 * @param string $relatonshipUuid5 The ID of the data record for which a tag relationship is created. For models with uuid5 as primary key.
	 */
	public function createTagRelationship(
		?int $tagId = null,
		?string $tagType = null,
		?int $relationshipValue = null,
		?string $relatonshipUuid5 = null,
	): Response
	{
		return $this->connector->send(new CreateTagRelationship($tagId, $tagType, $relationshipValue, $relatonshipUuid5));
	}


	public function deleteTagRelationships(): Response
	{
		return $this->connector->send(new DeleteTagRelationships());
	}


	/**
	 * @param int $relationshipValue The value of the relationship. This value is the ID of the data record the tag is linked to, e.g. item ID 1234.
	 * @param string $tagType The type of the tag
	 * @param int $id The ID of the tag
	 * @param string $relationshipType The type of the relationship, e.g. <b>category</b>, <b>item</b> or <b>ticket</b>
	 */
	public function deleteTagRelationship(
		int $relationshipValue,
		string $tagType,
		int $id,
		string $relationshipType,
	): Response
	{
		return $this->connector->send(new DeleteTagRelationship($relationshipValue, $tagType, $id, $relationshipType));
	}


	/**
	 * @param int $id The ID of the tag
	 */
	public function getTagById(int $id): Response
	{
		return $this->connector->send(new GetTagById($id));
	}


	/**
	 * @param int $id The ID of the tag
	 */
	public function updateTag(int $id): Response
	{
		return $this->connector->send(new UpdateTag($id));
	}


	/**
	 * @param int $id The ID of the tag
	 */
	public function deleteTag(int $id): Response
	{
		return $this->connector->send(new DeleteTag($id));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $id The ID of the tag
	 * @param string $tagType The type of the relationship, i.e. <b>board</b>
	 * @param string $relationshipUuid The UUID of the relationship
	 */
	public function deleteTagRelationshipDuplicate1(int $id, string $tagType, string $relationshipUuid): Response
	{
		return $this->connector->send(new DeleteTagRelationship($id, $tagType, $relationshipUuid));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $id The ID of the tag. Allowed operators: `eq` and `in`.
	 * @param string $name The name of the tag. Allowed operators: `eq` and `in`.
	 * @param string $availability The availability of the tag. Allowed operators: `eq` and `in`.
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'names' = The names of the tag.</li><li>'clients' = The clients of the tag (only if the availability `variation` is set).</li><li>'availabilities' = The availabilities of the tag.</li></ul>
	 * @param string $orderBy The field to order the results by.
	 * @param string $lang The language to use when ordering by name.
	 */
	public function listTagsDuplicate2(
		int $id,
		string $name,
		string $availability,
		?string $with = null,
		?string $orderBy = null,
		?string $lang = null,
	): Response
	{
		return $this->connector->send(new ListTags($id, $name, $availability, $with, $orderBy, $lang));
	}


	public function createNewTag(): Response
	{
		return $this->connector->send(new CreateNewTag());
	}


	/**
	 * @param int $id The ID of the tag name
	 */
	public function deleteTagName(int $id): Response
	{
		return $this->connector->send(new DeleteTagName($id));
	}


	public function listTagRelationships(): Response
	{
		return $this->connector->send(new ListTagRelationships());
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function createTagRelationshipDuplicate3(): Response
	{
		return $this->connector->send(new CreateTagRelationship());
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $relationshipId The ID of the tag relationship
	 */
	public function deleteTagRelationshipDuplicate4(int $relationshipId): Response
	{
		return $this->connector->send(new DeleteTagRelationship($relationshipId));
	}


	/**
	 * @param int $tagId The ID of the tag
	 * @param string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'names' = The names of the tag.</li><li>'clients' = The clients of the tag (only if the availability `variation` is set).</li><li>'availabilities' = The availabilities of the tag.</li></ul>
	 */
	public function getOneTag(int $tagId, ?string $with = null): Response
	{
		return $this->connector->send(new GetOneTag($tagId, $with));
	}


	/**
	 * @param int $tagId The ID of the tag
	 */
	public function updateExistingTag(int $tagId): Response
	{
		return $this->connector->send(new UpdateExistingTag($tagId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $tagId The ID of the tag
	 */
	public function deleteTagDuplicate5(int $tagId): Response
	{
		return $this->connector->send(new DeleteTag($tagId));
	}
}
