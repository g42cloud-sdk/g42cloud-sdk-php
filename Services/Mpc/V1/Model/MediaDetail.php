<?php

namespace G42Cloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use G42Cloud\SDK\Core\Utils\ObjectSerializer;
use G42Cloud\SDK\Core\Utils\ModelInterface;
use G42Cloud\SDK\Core\SdkResponse;

class MediaDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MediaDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * features  任务名称
    * originPara  originPara
    * outputVideoParas  多路输出片源信息
    * outputThumbnailPara  outputThumbnailPara
    * outputWatermarkParas  outputWatermarkParas
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'features' => 'string[]',
            'originPara' => '\G42Cloud\SDK\Mpc\V1\Model\OriginPara',
            'outputVideoParas' => '\G42Cloud\SDK\Mpc\V1\Model\OutputVideoPara[]',
            'outputThumbnailPara' => '\G42Cloud\SDK\Mpc\V1\Model\OutputThumbnailPara',
            'outputWatermarkParas' => '\G42Cloud\SDK\Mpc\V1\Model\OutputWatermarkPara'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * features  任务名称
    * originPara  originPara
    * outputVideoParas  多路输出片源信息
    * outputThumbnailPara  outputThumbnailPara
    * outputWatermarkParas  outputWatermarkParas
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'features' => null,
        'originPara' => null,
        'outputVideoParas' => null,
        'outputThumbnailPara' => null,
        'outputWatermarkParas' => null
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
    * features  任务名称
    * originPara  originPara
    * outputVideoParas  多路输出片源信息
    * outputThumbnailPara  outputThumbnailPara
    * outputWatermarkParas  outputWatermarkParas
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'features' => 'features',
            'originPara' => 'origin_para',
            'outputVideoParas' => 'output_video_paras',
            'outputThumbnailPara' => 'output_thumbnail_para',
            'outputWatermarkParas' => 'output_watermark_paras'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * features  任务名称
    * originPara  originPara
    * outputVideoParas  多路输出片源信息
    * outputThumbnailPara  outputThumbnailPara
    * outputWatermarkParas  outputWatermarkParas
    *
    * @var string[]
    */
    protected static $setters = [
            'features' => 'setFeatures',
            'originPara' => 'setOriginPara',
            'outputVideoParas' => 'setOutputVideoParas',
            'outputThumbnailPara' => 'setOutputThumbnailPara',
            'outputWatermarkParas' => 'setOutputWatermarkParas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * features  任务名称
    * originPara  originPara
    * outputVideoParas  多路输出片源信息
    * outputThumbnailPara  outputThumbnailPara
    * outputWatermarkParas  outputWatermarkParas
    *
    * @var string[]
    */
    protected static $getters = [
            'features' => 'getFeatures',
            'originPara' => 'getOriginPara',
            'outputVideoParas' => 'getOutputVideoParas',
            'outputThumbnailPara' => 'getOutputThumbnailPara',
            'outputWatermarkParas' => 'getOutputWatermarkParas'
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
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['originPara'] = isset($data['originPara']) ? $data['originPara'] : null;
        $this->container['outputVideoParas'] = isset($data['outputVideoParas']) ? $data['outputVideoParas'] : null;
        $this->container['outputThumbnailPara'] = isset($data['outputThumbnailPara']) ? $data['outputThumbnailPara'] : null;
        $this->container['outputWatermarkParas'] = isset($data['outputWatermarkParas']) ? $data['outputWatermarkParas'] : null;
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
    * Gets features
    *  任务名称
    *
    * @return string[]|null
    */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
    * Sets features
    *
    * @param string[]|null $features 任务名称
    *
    * @return $this
    */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;
        return $this;
    }

    /**
    * Gets originPara
    *  originPara
    *
    * @return \G42Cloud\SDK\Mpc\V1\Model\OriginPara|null
    */
    public function getOriginPara()
    {
        return $this->container['originPara'];
    }

    /**
    * Sets originPara
    *
    * @param \G42Cloud\SDK\Mpc\V1\Model\OriginPara|null $originPara originPara
    *
    * @return $this
    */
    public function setOriginPara($originPara)
    {
        $this->container['originPara'] = $originPara;
        return $this;
    }

    /**
    * Gets outputVideoParas
    *  多路输出片源信息
    *
    * @return \G42Cloud\SDK\Mpc\V1\Model\OutputVideoPara[]|null
    */
    public function getOutputVideoParas()
    {
        return $this->container['outputVideoParas'];
    }

    /**
    * Sets outputVideoParas
    *
    * @param \G42Cloud\SDK\Mpc\V1\Model\OutputVideoPara[]|null $outputVideoParas 多路输出片源信息
    *
    * @return $this
    */
    public function setOutputVideoParas($outputVideoParas)
    {
        $this->container['outputVideoParas'] = $outputVideoParas;
        return $this;
    }

    /**
    * Gets outputThumbnailPara
    *  outputThumbnailPara
    *
    * @return \G42Cloud\SDK\Mpc\V1\Model\OutputThumbnailPara|null
    */
    public function getOutputThumbnailPara()
    {
        return $this->container['outputThumbnailPara'];
    }

    /**
    * Sets outputThumbnailPara
    *
    * @param \G42Cloud\SDK\Mpc\V1\Model\OutputThumbnailPara|null $outputThumbnailPara outputThumbnailPara
    *
    * @return $this
    */
    public function setOutputThumbnailPara($outputThumbnailPara)
    {
        $this->container['outputThumbnailPara'] = $outputThumbnailPara;
        return $this;
    }

    /**
    * Gets outputWatermarkParas
    *  outputWatermarkParas
    *
    * @return \G42Cloud\SDK\Mpc\V1\Model\OutputWatermarkPara|null
    */
    public function getOutputWatermarkParas()
    {
        return $this->container['outputWatermarkParas'];
    }

    /**
    * Sets outputWatermarkParas
    *
    * @param \G42Cloud\SDK\Mpc\V1\Model\OutputWatermarkPara|null $outputWatermarkParas outputWatermarkParas
    *
    * @return $this
    */
    public function setOutputWatermarkParas($outputWatermarkParas)
    {
        $this->container['outputWatermarkParas'] = $outputWatermarkParas;
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

