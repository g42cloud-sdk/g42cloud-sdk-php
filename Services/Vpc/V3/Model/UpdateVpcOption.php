<?php

namespace G42Cloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use G42Cloud\SDK\Core\Utils\ObjectSerializer;
use G42Cloud\SDK\Core\Utils\ModelInterface;
use G42Cloud\SDK\Core\SdkResponse;

class UpdateVpcOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateVpcOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：虚拟私有云名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点） 约束：与description至少选填一个
    * description  功能说明：虚拟私有云描述 取值范围：0-255个字符，不能包含“<”和“>”。 约束：与name至少选填一个
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：虚拟私有云名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点） 约束：与description至少选填一个
    * description  功能说明：虚拟私有云描述 取值范围：0-255个字符，不能包含“<”和“>”。 约束：与name至少选填一个
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null
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
    * name  功能说明：虚拟私有云名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点） 约束：与description至少选填一个
    * description  功能说明：虚拟私有云描述 取值范围：0-255个字符，不能包含“<”和“>”。 约束：与name至少选填一个
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：虚拟私有云名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点） 约束：与description至少选填一个
    * description  功能说明：虚拟私有云描述 取值范围：0-255个字符，不能包含“<”和“>”。 约束：与name至少选填一个
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：虚拟私有云名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点） 约束：与description至少选填一个
    * description  功能说明：虚拟私有云描述 取值范围：0-255个字符，不能包含“<”和“>”。 约束：与name至少选填一个
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets name
    *  功能说明：虚拟私有云名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点） 约束：与description至少选填一个
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 功能说明：虚拟私有云名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点） 约束：与description至少选填一个
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：虚拟私有云描述 取值范围：0-255个字符，不能包含“<”和“>”。 约束：与name至少选填一个
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 功能说明：虚拟私有云描述 取值范围：0-255个字符，不能包含“<”和“>”。 约束：与name至少选填一个
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

