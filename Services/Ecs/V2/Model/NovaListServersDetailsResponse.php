<?php

namespace G42Cloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use G42Cloud\SDK\Core\Utils\ObjectSerializer;
use G42Cloud\SDK\Core\Utils\ModelInterface;
use G42Cloud\SDK\Core\SdkResponse;

class NovaListServersDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaListServersDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * servers  查询云服务器信息列表。
    * serversLinks  分页查询时，查询下一页数据链接。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'servers' => '\G42Cloud\SDK\Ecs\V2\Model\NovaServer[]',
            'serversLinks' => '\G42Cloud\SDK\Ecs\V2\Model\PageLink[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * servers  查询云服务器信息列表。
    * serversLinks  分页查询时，查询下一页数据链接。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'servers' => null,
        'serversLinks' => null
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
    * servers  查询云服务器信息列表。
    * serversLinks  分页查询时，查询下一页数据链接。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'servers' => 'servers',
            'serversLinks' => 'servers_links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * servers  查询云服务器信息列表。
    * serversLinks  分页查询时，查询下一页数据链接。
    *
    * @var string[]
    */
    protected static $setters = [
            'servers' => 'setServers',
            'serversLinks' => 'setServersLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * servers  查询云服务器信息列表。
    * serversLinks  分页查询时，查询下一页数据链接。
    *
    * @var string[]
    */
    protected static $getters = [
            'servers' => 'getServers',
            'serversLinks' => 'getServersLinks'
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
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
        $this->container['serversLinks'] = isset($data['serversLinks']) ? $data['serversLinks'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets servers
    *  查询云服务器信息列表。
    *
    * @return \G42Cloud\SDK\Ecs\V2\Model\NovaServer[]|null
    */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
    * Sets servers
    *
    * @param \G42Cloud\SDK\Ecs\V2\Model\NovaServer[]|null $servers 查询云服务器信息列表。
    *
    * @return $this
    */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;
        return $this;
    }

    /**
    * Gets serversLinks
    *  分页查询时，查询下一页数据链接。
    *
    * @return \G42Cloud\SDK\Ecs\V2\Model\PageLink[]|null
    */
    public function getServersLinks()
    {
        return $this->container['serversLinks'];
    }

    /**
    * Sets serversLinks
    *
    * @param \G42Cloud\SDK\Ecs\V2\Model\PageLink[]|null $serversLinks 分页查询时，查询下一页数据链接。
    *
    * @return $this
    */
    public function setServersLinks($serversLinks)
    {
        $this->container['serversLinks'] = $serversLinks;
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

