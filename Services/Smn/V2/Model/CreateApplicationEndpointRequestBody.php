<?php

namespace G42Cloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use G42Cloud\SDK\Core\Utils\ObjectSerializer;
use G42Cloud\SDK\Core\Utils\ModelInterface;
use G42Cloud\SDK\Core\SdkResponse;

class CreateApplicationEndpointRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateApplicationEndpointRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * token  移动应用设备token，最大长度512个字节。
    * userData  用户自定义数据，最大长度支持UTF-8编码后2048字节。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'token' => 'string',
            'userData' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * token  移动应用设备token，最大长度512个字节。
    * userData  用户自定义数据，最大长度支持UTF-8编码后2048字节。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'token' => null,
        'userData' => null
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
    * token  移动应用设备token，最大长度512个字节。
    * userData  用户自定义数据，最大长度支持UTF-8编码后2048字节。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'token' => 'token',
            'userData' => 'user_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * token  移动应用设备token，最大长度512个字节。
    * userData  用户自定义数据，最大长度支持UTF-8编码后2048字节。
    *
    * @var string[]
    */
    protected static $setters = [
            'token' => 'setToken',
            'userData' => 'setUserData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * token  移动应用设备token，最大长度512个字节。
    * userData  用户自定义数据，最大长度支持UTF-8编码后2048字节。
    *
    * @var string[]
    */
    protected static $getters = [
            'token' => 'getToken',
            'userData' => 'getUserData'
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
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['userData'] === null) {
            $invalidProperties[] = "'userData' can't be null";
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
    * Gets token
    *  移动应用设备token，最大长度512个字节。
    *
    * @return string
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string $token 移动应用设备token，最大长度512个字节。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets userData
    *  用户自定义数据，最大长度支持UTF-8编码后2048字节。
    *
    * @return string
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string $userData 用户自定义数据，最大长度支持UTF-8编码后2048字节。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
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

