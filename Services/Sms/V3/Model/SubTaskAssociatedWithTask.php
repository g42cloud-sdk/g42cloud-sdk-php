<?php

namespace G42Cloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use G42Cloud\SDK\Core\Utils\ObjectSerializer;
use G42Cloud\SDK\Core\Utils\ModelInterface;
use G42Cloud\SDK\Core\SdkResponse;

class SubTaskAssociatedWithTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubTaskAssociatedWithTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  子任务ID
    * name  子任务名称
    * progress  子任务的进度，取值为0-100之间的整数
    * startDate  子任务开始时间
    * endDate  子任务结束时间（如果子任务还没有结束，则为空）
    * processTrace  迁移或同步时，具体的迁移详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'progress' => 'int',
            'startDate' => 'int',
            'endDate' => 'int',
            'processTrace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  子任务ID
    * name  子任务名称
    * progress  子任务的进度，取值为0-100之间的整数
    * startDate  子任务开始时间
    * endDate  子任务结束时间（如果子任务还没有结束，则为空）
    * processTrace  迁移或同步时，具体的迁移详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'progress' => 'int32',
        'startDate' => 'int64',
        'endDate' => 'int64',
        'processTrace' => null
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
    * id  子任务ID
    * name  子任务名称
    * progress  子任务的进度，取值为0-100之间的整数
    * startDate  子任务开始时间
    * endDate  子任务结束时间（如果子任务还没有结束，则为空）
    * processTrace  迁移或同步时，具体的迁移详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'progress' => 'progress',
            'startDate' => 'start_date',
            'endDate' => 'end_date',
            'processTrace' => 'process_trace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  子任务ID
    * name  子任务名称
    * progress  子任务的进度，取值为0-100之间的整数
    * startDate  子任务开始时间
    * endDate  子任务结束时间（如果子任务还没有结束，则为空）
    * processTrace  迁移或同步时，具体的迁移详情
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'progress' => 'setProgress',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'processTrace' => 'setProcessTrace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  子任务ID
    * name  子任务名称
    * progress  子任务的进度，取值为0-100之间的整数
    * startDate  子任务开始时间
    * endDate  子任务结束时间（如果子任务还没有结束，则为空）
    * processTrace  迁移或同步时，具体的迁移详情
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'progress' => 'getProgress',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'processTrace' => 'getProcessTrace'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['processTrace'] = isset($data['processTrace']) ? $data['processTrace'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] > 100)) {
                $invalidProperties[] = "invalid value for 'progress', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] < 0)) {
                $invalidProperties[] = "invalid value for 'progress', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startDate']) && ($this->container['startDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startDate']) && ($this->container['startDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'startDate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endDate']) && ($this->container['endDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endDate']) && ($this->container['endDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'endDate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processTrace']) && (mb_strlen($this->container['processTrace']) > 2048)) {
                $invalidProperties[] = "invalid value for 'processTrace', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['processTrace']) && (mb_strlen($this->container['processTrace']) < 0)) {
                $invalidProperties[] = "invalid value for 'processTrace', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  子任务ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 子任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  子任务名称
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
    * @param string|null $name 子任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets progress
    *  子任务的进度，取值为0-100之间的整数
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 子任务的进度，取值为0-100之间的整数
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets startDate
    *  子任务开始时间
    *
    * @return int|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param int|null $startDate 子任务开始时间
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  子任务结束时间（如果子任务还没有结束，则为空）
    *
    * @return int|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param int|null $endDate 子任务结束时间（如果子任务还没有结束，则为空）
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets processTrace
    *  迁移或同步时，具体的迁移详情
    *
    * @return string|null
    */
    public function getProcessTrace()
    {
        return $this->container['processTrace'];
    }

    /**
    * Sets processTrace
    *
    * @param string|null $processTrace 迁移或同步时，具体的迁移详情
    *
    * @return $this
    */
    public function setProcessTrace($processTrace)
    {
        $this->container['processTrace'] = $processTrace;
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
