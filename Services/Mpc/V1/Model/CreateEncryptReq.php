<?php

namespace G42Cloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use G42Cloud\SDK\Core\Utils\ObjectSerializer;
use G42Cloud\SDK\Core\Utils\ModelInterface;
use G42Cloud\SDK\Core\SdkResponse;

class CreateEncryptReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEncryptReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * input  input
    * output  output
    * encryption  encryption
    * userData  用户自定义数据。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'input' => '\G42Cloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'output' => '\G42Cloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'encryption' => '\G42Cloud\SDK\Mpc\V1\Model\Encryption',
            'userData' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * input  input
    * output  output
    * encryption  encryption
    * userData  用户自定义数据。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'input' => null,
        'output' => null,
        'encryption' => null,
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
    * input  input
    * output  output
    * encryption  encryption
    * userData  用户自定义数据。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'input' => 'input',
            'output' => 'output',
            'encryption' => 'encryption',
            'userData' => 'user_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * input  input
    * output  output
    * encryption  encryption
    * userData  用户自定义数据。
    *
    * @var string[]
    */
    protected static $setters = [
            'input' => 'setInput',
            'output' => 'setOutput',
            'encryption' => 'setEncryption',
            'userData' => 'setUserData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * input  input
    * output  output
    * encryption  encryption
    * userData  用户自定义数据。
    *
    * @var string[]
    */
    protected static $getters = [
            'input' => 'getInput',
            'output' => 'getOutput',
            'encryption' => 'getEncryption',
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
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
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
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 65535)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
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
    * Gets input
    *  input
    *
    * @return \G42Cloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \G42Cloud\SDK\Mpc\V1\Model\ObsObjInfo|null $input input
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \G42Cloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \G42Cloud\SDK\Mpc\V1\Model\ObsObjInfo|null $output output
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets encryption
    *  encryption
    *
    * @return \G42Cloud\SDK\Mpc\V1\Model\Encryption|null
    */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
    * Sets encryption
    *
    * @param \G42Cloud\SDK\Mpc\V1\Model\Encryption|null $encryption encryption
    *
    * @return $this
    */
    public function setEncryption($encryption)
    {
        $this->container['encryption'] = $encryption;
        return $this;
    }

    /**
    * Gets userData
    *  用户自定义数据。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 用户自定义数据。
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

