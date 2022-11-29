<?php

namespace G42Cloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use G42Cloud\SDK\Core\Utils\ObjectSerializer;
use G42Cloud\SDK\Core\Utils\ModelInterface;
use G42Cloud\SDK\Core\SdkResponse;

class ConfigsGetBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigsGetBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * originRequestHeader  回源请求头配置。
    * httpResponseHeader  http header配置。
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    * forceRedirect  forceRedirect
    * compress  compress
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'originRequestHeader' => '\G42Cloud\SDK\Cdn\V1\Model\OriginRequestHeader[]',
            'httpResponseHeader' => '\G42Cloud\SDK\Cdn\V1\Model\HttpResponseHeader[]',
            'urlAuth' => '\G42Cloud\SDK\Cdn\V1\Model\UrlAuthGetBody',
            'https' => '\G42Cloud\SDK\Cdn\V1\Model\HttpGetBody',
            'sources' => '\G42Cloud\SDK\Cdn\V1\Model\SourcesConfig[]',
            'originProtocol' => 'string',
            'forceRedirect' => '\G42Cloud\SDK\Cdn\V1\Model\ForceRedirectConfig',
            'compress' => '\G42Cloud\SDK\Cdn\V1\Model\Compress'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * originRequestHeader  回源请求头配置。
    * httpResponseHeader  http header配置。
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    * forceRedirect  forceRedirect
    * compress  compress
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'originRequestHeader' => null,
        'httpResponseHeader' => null,
        'urlAuth' => null,
        'https' => null,
        'sources' => null,
        'originProtocol' => null,
        'forceRedirect' => null,
        'compress' => null
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
    * originRequestHeader  回源请求头配置。
    * httpResponseHeader  http header配置。
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    * forceRedirect  forceRedirect
    * compress  compress
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'originRequestHeader' => 'origin_request_header',
            'httpResponseHeader' => 'http_response_header',
            'urlAuth' => 'url_auth',
            'https' => 'https',
            'sources' => 'sources',
            'originProtocol' => 'origin_protocol',
            'forceRedirect' => 'force_redirect',
            'compress' => 'compress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * originRequestHeader  回源请求头配置。
    * httpResponseHeader  http header配置。
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    * forceRedirect  forceRedirect
    * compress  compress
    *
    * @var string[]
    */
    protected static $setters = [
            'originRequestHeader' => 'setOriginRequestHeader',
            'httpResponseHeader' => 'setHttpResponseHeader',
            'urlAuth' => 'setUrlAuth',
            'https' => 'setHttps',
            'sources' => 'setSources',
            'originProtocol' => 'setOriginProtocol',
            'forceRedirect' => 'setForceRedirect',
            'compress' => 'setCompress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * originRequestHeader  回源请求头配置。
    * httpResponseHeader  http header配置。
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    * forceRedirect  forceRedirect
    * compress  compress
    *
    * @var string[]
    */
    protected static $getters = [
            'originRequestHeader' => 'getOriginRequestHeader',
            'httpResponseHeader' => 'getHttpResponseHeader',
            'urlAuth' => 'getUrlAuth',
            'https' => 'getHttps',
            'sources' => 'getSources',
            'originProtocol' => 'getOriginProtocol',
            'forceRedirect' => 'getForceRedirect',
            'compress' => 'getCompress'
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
        $this->container['originRequestHeader'] = isset($data['originRequestHeader']) ? $data['originRequestHeader'] : null;
        $this->container['httpResponseHeader'] = isset($data['httpResponseHeader']) ? $data['httpResponseHeader'] : null;
        $this->container['urlAuth'] = isset($data['urlAuth']) ? $data['urlAuth'] : null;
        $this->container['https'] = isset($data['https']) ? $data['https'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['originProtocol'] = isset($data['originProtocol']) ? $data['originProtocol'] : null;
        $this->container['forceRedirect'] = isset($data['forceRedirect']) ? $data['forceRedirect'] : null;
        $this->container['compress'] = isset($data['compress']) ? $data['compress'] : null;
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
    * Gets originRequestHeader
    *  回源请求头配置。
    *
    * @return \G42Cloud\SDK\Cdn\V1\Model\OriginRequestHeader[]|null
    */
    public function getOriginRequestHeader()
    {
        return $this->container['originRequestHeader'];
    }

    /**
    * Sets originRequestHeader
    *
    * @param \G42Cloud\SDK\Cdn\V1\Model\OriginRequestHeader[]|null $originRequestHeader 回源请求头配置。
    *
    * @return $this
    */
    public function setOriginRequestHeader($originRequestHeader)
    {
        $this->container['originRequestHeader'] = $originRequestHeader;
        return $this;
    }

    /**
    * Gets httpResponseHeader
    *  http header配置。
    *
    * @return \G42Cloud\SDK\Cdn\V1\Model\HttpResponseHeader[]|null
    */
    public function getHttpResponseHeader()
    {
        return $this->container['httpResponseHeader'];
    }

    /**
    * Sets httpResponseHeader
    *
    * @param \G42Cloud\SDK\Cdn\V1\Model\HttpResponseHeader[]|null $httpResponseHeader http header配置。
    *
    * @return $this
    */
    public function setHttpResponseHeader($httpResponseHeader)
    {
        $this->container['httpResponseHeader'] = $httpResponseHeader;
        return $this;
    }

    /**
    * Gets urlAuth
    *  urlAuth
    *
    * @return \G42Cloud\SDK\Cdn\V1\Model\UrlAuthGetBody|null
    */
    public function getUrlAuth()
    {
        return $this->container['urlAuth'];
    }

    /**
    * Sets urlAuth
    *
    * @param \G42Cloud\SDK\Cdn\V1\Model\UrlAuthGetBody|null $urlAuth urlAuth
    *
    * @return $this
    */
    public function setUrlAuth($urlAuth)
    {
        $this->container['urlAuth'] = $urlAuth;
        return $this;
    }

    /**
    * Gets https
    *  https
    *
    * @return \G42Cloud\SDK\Cdn\V1\Model\HttpGetBody|null
    */
    public function getHttps()
    {
        return $this->container['https'];
    }

    /**
    * Sets https
    *
    * @param \G42Cloud\SDK\Cdn\V1\Model\HttpGetBody|null $https https
    *
    * @return $this
    */
    public function setHttps($https)
    {
        $this->container['https'] = $https;
        return $this;
    }

    /**
    * Gets sources
    *  源站配置。
    *
    * @return \G42Cloud\SDK\Cdn\V1\Model\SourcesConfig[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \G42Cloud\SDK\Cdn\V1\Model\SourcesConfig[]|null $sources 源站配置。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets originProtocol
    *  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    *
    * @return string|null
    */
    public function getOriginProtocol()
    {
        return $this->container['originProtocol'];
    }

    /**
    * Sets originProtocol
    *
    * @param string|null $originProtocol 回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    *
    * @return $this
    */
    public function setOriginProtocol($originProtocol)
    {
        $this->container['originProtocol'] = $originProtocol;
        return $this;
    }

    /**
    * Gets forceRedirect
    *  forceRedirect
    *
    * @return \G42Cloud\SDK\Cdn\V1\Model\ForceRedirectConfig|null
    */
    public function getForceRedirect()
    {
        return $this->container['forceRedirect'];
    }

    /**
    * Sets forceRedirect
    *
    * @param \G42Cloud\SDK\Cdn\V1\Model\ForceRedirectConfig|null $forceRedirect forceRedirect
    *
    * @return $this
    */
    public function setForceRedirect($forceRedirect)
    {
        $this->container['forceRedirect'] = $forceRedirect;
        return $this;
    }

    /**
    * Gets compress
    *  compress
    *
    * @return \G42Cloud\SDK\Cdn\V1\Model\Compress|null
    */
    public function getCompress()
    {
        return $this->container['compress'];
    }

    /**
    * Sets compress
    *
    * @param \G42Cloud\SDK\Cdn\V1\Model\Compress|null $compress compress
    *
    * @return $this
    */
    public function setCompress($compress)
    {
        $this->container['compress'] = $compress;
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

