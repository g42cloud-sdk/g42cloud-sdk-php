<?php

namespace G42Cloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use G42Cloud\SDK\Core\Utils\ObjectSerializer;
use G42Cloud\SDK\Core\Utils\ModelInterface;
use G42Cloud\SDK\Core\SdkResponse;

class QueryTranscodingsTaskResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTranscodingsTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID。
    * status  任务执行状态。
    * createTime  转码任务启动时间
    * endTime  转码任务结束时间
    * transTemplateId  转码任务对应的转码模板ID
    * input  input
    * output  output
    * outputFileName  转码生成的文件名，数组类型，可能包含多个，包含截图文件名。
    * userData  用户自定义数据。
    * errorCode  转码任务的返回码。
    * description  转码任务描述，当转码出现异常时，此字段为异常的原因。
    * tips  转码成功，但音频采样率过低时的提示。
    * transcodeDetail  transcodeDetail
    * thumbnailOutput  thumbnailOutput
    * thumbnailOutputname  截图压缩包名。
    * picInfo  截图文件信息。
    * avParameters  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'endTime' => 'string',
            'transTemplateId' => 'int[]',
            'input' => '\G42Cloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'output' => '\G42Cloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'outputFileName' => 'string[]',
            'userData' => 'string',
            'errorCode' => 'string',
            'description' => 'string',
            'tips' => 'string',
            'transcodeDetail' => '\G42Cloud\SDK\Mpc\V1\Model\TranscodeDetail',
            'thumbnailOutput' => '\G42Cloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'thumbnailOutputname' => 'string',
            'picInfo' => '\G42Cloud\SDK\Mpc\V1\Model\PicInfo[]',
            'avParameters' => '\G42Cloud\SDK\Mpc\V1\Model\AvParameters[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID。
    * status  任务执行状态。
    * createTime  转码任务启动时间
    * endTime  转码任务结束时间
    * transTemplateId  转码任务对应的转码模板ID
    * input  input
    * output  output
    * outputFileName  转码生成的文件名，数组类型，可能包含多个，包含截图文件名。
    * userData  用户自定义数据。
    * errorCode  转码任务的返回码。
    * description  转码任务描述，当转码出现异常时，此字段为异常的原因。
    * tips  转码成功，但音频采样率过低时的提示。
    * transcodeDetail  transcodeDetail
    * thumbnailOutput  thumbnailOutput
    * thumbnailOutputname  截图压缩包名。
    * picInfo  截图文件信息。
    * avParameters  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'status' => null,
        'createTime' => null,
        'endTime' => null,
        'transTemplateId' => null,
        'input' => null,
        'output' => null,
        'outputFileName' => null,
        'userData' => null,
        'errorCode' => null,
        'description' => null,
        'tips' => null,
        'transcodeDetail' => null,
        'thumbnailOutput' => null,
        'thumbnailOutputname' => null,
        'picInfo' => null,
        'avParameters' => null
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
    * taskId  任务ID。
    * status  任务执行状态。
    * createTime  转码任务启动时间
    * endTime  转码任务结束时间
    * transTemplateId  转码任务对应的转码模板ID
    * input  input
    * output  output
    * outputFileName  转码生成的文件名，数组类型，可能包含多个，包含截图文件名。
    * userData  用户自定义数据。
    * errorCode  转码任务的返回码。
    * description  转码任务描述，当转码出现异常时，此字段为异常的原因。
    * tips  转码成功，但音频采样率过低时的提示。
    * transcodeDetail  transcodeDetail
    * thumbnailOutput  thumbnailOutput
    * thumbnailOutputname  截图压缩包名。
    * picInfo  截图文件信息。
    * avParameters  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'status' => 'status',
            'createTime' => 'create_time',
            'endTime' => 'end_time',
            'transTemplateId' => 'trans_template_id',
            'input' => 'input',
            'output' => 'output',
            'outputFileName' => 'output_file_name',
            'userData' => 'user_data',
            'errorCode' => 'error_code',
            'description' => 'description',
            'tips' => 'tips',
            'transcodeDetail' => 'transcode_detail',
            'thumbnailOutput' => 'thumbnail_output',
            'thumbnailOutputname' => 'thumbnail_outputname',
            'picInfo' => 'pic_info',
            'avParameters' => 'av_parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID。
    * status  任务执行状态。
    * createTime  转码任务启动时间
    * endTime  转码任务结束时间
    * transTemplateId  转码任务对应的转码模板ID
    * input  input
    * output  output
    * outputFileName  转码生成的文件名，数组类型，可能包含多个，包含截图文件名。
    * userData  用户自定义数据。
    * errorCode  转码任务的返回码。
    * description  转码任务描述，当转码出现异常时，此字段为异常的原因。
    * tips  转码成功，但音频采样率过低时的提示。
    * transcodeDetail  transcodeDetail
    * thumbnailOutput  thumbnailOutput
    * thumbnailOutputname  截图压缩包名。
    * picInfo  截图文件信息。
    * avParameters  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'endTime' => 'setEndTime',
            'transTemplateId' => 'setTransTemplateId',
            'input' => 'setInput',
            'output' => 'setOutput',
            'outputFileName' => 'setOutputFileName',
            'userData' => 'setUserData',
            'errorCode' => 'setErrorCode',
            'description' => 'setDescription',
            'tips' => 'setTips',
            'transcodeDetail' => 'setTranscodeDetail',
            'thumbnailOutput' => 'setThumbnailOutput',
            'thumbnailOutputname' => 'setThumbnailOutputname',
            'picInfo' => 'setPicInfo',
            'avParameters' => 'setAvParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID。
    * status  任务执行状态。
    * createTime  转码任务启动时间
    * endTime  转码任务结束时间
    * transTemplateId  转码任务对应的转码模板ID
    * input  input
    * output  output
    * outputFileName  转码生成的文件名，数组类型，可能包含多个，包含截图文件名。
    * userData  用户自定义数据。
    * errorCode  转码任务的返回码。
    * description  转码任务描述，当转码出现异常时，此字段为异常的原因。
    * tips  转码成功，但音频采样率过低时的提示。
    * transcodeDetail  transcodeDetail
    * thumbnailOutput  thumbnailOutput
    * thumbnailOutputname  截图压缩包名。
    * picInfo  截图文件信息。
    * avParameters  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'endTime' => 'getEndTime',
            'transTemplateId' => 'getTransTemplateId',
            'input' => 'getInput',
            'output' => 'getOutput',
            'outputFileName' => 'getOutputFileName',
            'userData' => 'getUserData',
            'errorCode' => 'getErrorCode',
            'description' => 'getDescription',
            'tips' => 'getTips',
            'transcodeDetail' => 'getTranscodeDetail',
            'thumbnailOutput' => 'getThumbnailOutput',
            'thumbnailOutputname' => 'getThumbnailOutputname',
            'picInfo' => 'getPicInfo',
            'avParameters' => 'getAvParameters'
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
    const STATUS_NO_TASK = 'NO_TASK';
    const STATUS_WAITING = 'WAITING';
    const STATUS_TRANSCODING = 'TRANSCODING';
    const STATUS_SUCCEEDED = 'SUCCEEDED';
    const STATUS_FAILED = 'FAILED';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_NEED_TO_BE_AUDIT = 'NEED_TO_BE_AUDIT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NO_TASK,
            self::STATUS_WAITING,
            self::STATUS_TRANSCODING,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
            self::STATUS_CANCELED,
            self::STATUS_NEED_TO_BE_AUDIT,
        ];
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['transTemplateId'] = isset($data['transTemplateId']) ? $data['transTemplateId'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['outputFileName'] = isset($data['outputFileName']) ? $data['outputFileName'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tips'] = isset($data['tips']) ? $data['tips'] : null;
        $this->container['transcodeDetail'] = isset($data['transcodeDetail']) ? $data['transcodeDetail'] : null;
        $this->container['thumbnailOutput'] = isset($data['thumbnailOutput']) ? $data['thumbnailOutput'] : null;
        $this->container['thumbnailOutputname'] = isset($data['thumbnailOutputname']) ? $data['thumbnailOutputname'] : null;
        $this->container['picInfo'] = isset($data['picInfo']) ? $data['picInfo'] : null;
        $this->container['avParameters'] = isset($data['avParameters']) ? $data['avParameters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 16)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 65535)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 16)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tips']) && (mb_strlen($this->container['tips']) > 256)) {
                $invalidProperties[] = "invalid value for 'tips', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tips']) && (mb_strlen($this->container['tips']) < 0)) {
                $invalidProperties[] = "invalid value for 'tips', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thumbnailOutputname']) && (mb_strlen($this->container['thumbnailOutputname']) > 256)) {
                $invalidProperties[] = "invalid value for 'thumbnailOutputname', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['thumbnailOutputname']) && (mb_strlen($this->container['thumbnailOutputname']) < 0)) {
                $invalidProperties[] = "invalid value for 'thumbnailOutputname', the character length must be bigger than or equal to 0.";
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
    * Gets taskId
    *  任务ID。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets status
    *  任务执行状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 任务执行状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  转码任务启动时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 转码任务启动时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets endTime
    *  转码任务结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 转码任务结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets transTemplateId
    *  转码任务对应的转码模板ID
    *
    * @return int[]|null
    */
    public function getTransTemplateId()
    {
        return $this->container['transTemplateId'];
    }

    /**
    * Sets transTemplateId
    *
    * @param int[]|null $transTemplateId 转码任务对应的转码模板ID
    *
    * @return $this
    */
    public function setTransTemplateId($transTemplateId)
    {
        $this->container['transTemplateId'] = $transTemplateId;
        return $this;
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
    * Gets outputFileName
    *  转码生成的文件名，数组类型，可能包含多个，包含截图文件名。
    *
    * @return string[]|null
    */
    public function getOutputFileName()
    {
        return $this->container['outputFileName'];
    }

    /**
    * Sets outputFileName
    *
    * @param string[]|null $outputFileName 转码生成的文件名，数组类型，可能包含多个，包含截图文件名。
    *
    * @return $this
    */
    public function setOutputFileName($outputFileName)
    {
        $this->container['outputFileName'] = $outputFileName;
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
    * Gets errorCode
    *  转码任务的返回码。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 转码任务的返回码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets description
    *  转码任务描述，当转码出现异常时，此字段为异常的原因。
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
    * @param string|null $description 转码任务描述，当转码出现异常时，此字段为异常的原因。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tips
    *  转码成功，但音频采样率过低时的提示。
    *
    * @return string|null
    */
    public function getTips()
    {
        return $this->container['tips'];
    }

    /**
    * Sets tips
    *
    * @param string|null $tips 转码成功，但音频采样率过低时的提示。
    *
    * @return $this
    */
    public function setTips($tips)
    {
        $this->container['tips'] = $tips;
        return $this;
    }

    /**
    * Gets transcodeDetail
    *  transcodeDetail
    *
    * @return \G42Cloud\SDK\Mpc\V1\Model\TranscodeDetail|null
    */
    public function getTranscodeDetail()
    {
        return $this->container['transcodeDetail'];
    }

    /**
    * Sets transcodeDetail
    *
    * @param \G42Cloud\SDK\Mpc\V1\Model\TranscodeDetail|null $transcodeDetail transcodeDetail
    *
    * @return $this
    */
    public function setTranscodeDetail($transcodeDetail)
    {
        $this->container['transcodeDetail'] = $transcodeDetail;
        return $this;
    }

    /**
    * Gets thumbnailOutput
    *  thumbnailOutput
    *
    * @return \G42Cloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getThumbnailOutput()
    {
        return $this->container['thumbnailOutput'];
    }

    /**
    * Sets thumbnailOutput
    *
    * @param \G42Cloud\SDK\Mpc\V1\Model\ObsObjInfo|null $thumbnailOutput thumbnailOutput
    *
    * @return $this
    */
    public function setThumbnailOutput($thumbnailOutput)
    {
        $this->container['thumbnailOutput'] = $thumbnailOutput;
        return $this;
    }

    /**
    * Gets thumbnailOutputname
    *  截图压缩包名。
    *
    * @return string|null
    */
    public function getThumbnailOutputname()
    {
        return $this->container['thumbnailOutputname'];
    }

    /**
    * Sets thumbnailOutputname
    *
    * @param string|null $thumbnailOutputname 截图压缩包名。
    *
    * @return $this
    */
    public function setThumbnailOutputname($thumbnailOutputname)
    {
        $this->container['thumbnailOutputname'] = $thumbnailOutputname;
        return $this;
    }

    /**
    * Gets picInfo
    *  截图文件信息。
    *
    * @return \G42Cloud\SDK\Mpc\V1\Model\PicInfo[]|null
    */
    public function getPicInfo()
    {
        return $this->container['picInfo'];
    }

    /**
    * Sets picInfo
    *
    * @param \G42Cloud\SDK\Mpc\V1\Model\PicInfo[]|null $picInfo 截图文件信息。
    *
    * @return $this
    */
    public function setPicInfo($picInfo)
    {
        $this->container['picInfo'] = $picInfo;
        return $this;
    }

    /**
    * Gets avParameters
    *  转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    *
    * @return \G42Cloud\SDK\Mpc\V1\Model\AvParameters[]|null
    */
    public function getAvParameters()
    {
        return $this->container['avParameters'];
    }

    /**
    * Sets avParameters
    *
    * @param \G42Cloud\SDK\Mpc\V1\Model\AvParameters[]|null $avParameters 转码参数。  若同时设置“trans_template_id”和此参数，则优先使用此参数进行转码。
    *
    * @return $this
    */
    public function setAvParameters($avParameters)
    {
        $this->container['avParameters'] = $avParameters;
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

