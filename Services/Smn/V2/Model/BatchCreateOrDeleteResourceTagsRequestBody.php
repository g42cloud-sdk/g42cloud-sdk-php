<?php

namespace G42Cloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use G42Cloud\SDK\Core\Utils\ObjectSerializer;
use G42Cloud\SDK\Core\Utils\ModelInterface;
use G42Cloud\SDK\Core\SdkResponse;

class BatchCreateOrDeleteResourceTagsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateOrDeleteResourceTagsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tags  标签列表，结构体说明请参见表1。删除时tags结构体不能缺失，key不能为空或空字符串，且不针对字符集范围进行校验。
    * action  操作标识：仅限于create（创建）、delete（删除）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tags' => '\G42Cloud\SDK\Smn\V2\Model\ResourceTag[]',
            'action' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tags  标签列表，结构体说明请参见表1。删除时tags结构体不能缺失，key不能为空或空字符串，且不针对字符集范围进行校验。
    * action  操作标识：仅限于create（创建）、delete（删除）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tags' => null,
        'action' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * tags  标签列表，结构体说明请参见表1。删除时tags结构体不能缺失，key不能为空或空字符串，且不针对字符集范围进行校验。
    * action  操作标识：仅限于create（创建）、delete（删除）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tags' => 'tags',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tags  标签列表，结构体说明请参见表1。删除时tags结构体不能缺失，key不能为空或空字符串，且不针对字符集范围进行校验。
    * action  操作标识：仅限于create（创建）、delete（删除）。
    *
    * @var string[]
    */
    protected static $setters = [
            'tags' => 'setTags',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tags  标签列表，结构体说明请参见表1。删除时tags结构体不能缺失，key不能为空或空字符串，且不针对字符集范围进行校验。
    * action  操作标识：仅限于create（创建）、delete（删除）。
    *
    * @var string[]
    */
    protected static $getters = [
            'tags' => 'getTags',
            'action' => 'getAction'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets tags
    *  标签列表，结构体说明请参见表1。删除时tags结构体不能缺失，key不能为空或空字符串，且不针对字符集范围进行校验。
    *
    * @return \G42Cloud\SDK\Smn\V2\Model\ResourceTag[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \G42Cloud\SDK\Smn\V2\Model\ResourceTag[] $tags 标签列表，结构体说明请参见表1。删除时tags结构体不能缺失，key不能为空或空字符串，且不针对字符集范围进行校验。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets action
    *  操作标识：仅限于create（创建）、delete（删除）。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 操作标识：仅限于create（创建）、delete（删除）。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

