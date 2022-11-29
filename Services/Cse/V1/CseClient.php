<?php

namespace G42Cloud\SDK\Cse\V1;

use G42Cloud\SDK\Core\Utils\HeaderSelector;
use G42Cloud\SDK\Core\Client;
use G42Cloud\SDK\Core\ClientBuilder;
use G42Cloud\SDK\Core\Utils\ModelInterface;

class CseClient extends Client
{
    protected $headerSelector;
    protected $modelPackage;

    public function __construct($selector = null)
    {
        parent::__construct();
        $this->modelPackage = ModelInterface::class;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public static function newBuilder()
    {
        return new ClientBuilder(new CseClient());
    }


    /**
     * 创建微服务引擎专享版
     *
     * 创建微服务引擎专享版。
     * 
     * Please refer to G42 cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEngine($request)
    {
        return $this->createEngineWithHttpInfo($request);
    }

    public function createEngineWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/enginemgr/engines';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\G42Cloud\SDK\Cse\V1\Model\CreateEngineResponse',
            $requestType='\G42Cloud\SDK\Cse\V1\Model\CreateEngineRequest');
    }

    /**
     * 删除微服务引擎专享版
     *
     * 删除微服务引擎专享版。
     * 
     * Please refer to G42 cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteEngine($request)
    {
        return $this->deleteEngineWithHttpInfo($request);
    }

    public function deleteEngineWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/enginemgr/engines/{engine_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['engineId'] !== null) {
            $pathParams['engine_id'] = $localVarParams['engineId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\G42Cloud\SDK\Cse\V1\Model\DeleteEngineResponse',
            $requestType='\G42Cloud\SDK\Cse\V1\Model\DeleteEngineRequest');
    }

    /**
     * 导出kie配置
     *
     * 导出kie配置
     * 
     * Please refer to G42 cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadKie($request)
    {
        return $this->downloadKieWithHttpInfo($request);
    }

    public function downloadKieWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/kie/download';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['label'] !== null) {
            $queryParams['label'] = $localVarParams['label'];
        }
        if ($localVarParams['match'] !== null) {
            $queryParams['match'] = $localVarParams['match'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\G42Cloud\SDK\Cse\V1\Model\DownloadKieResponse',
            $requestType='\G42Cloud\SDK\Cse\V1\Model\DownloadKieRequest');
    }

    /**
     * 查询微服务引擎列表
     *
     * 查询微服务引擎列表。
     * 
     * Please refer to G42 cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEngines($request)
    {
        return $this->listEnginesWithHttpInfo($request);
    }

    public function listEnginesWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/enginemgr/engines';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\G42Cloud\SDK\Cse\V1\Model\ListEnginesResponse',
            $requestType='\G42Cloud\SDK\Cse\V1\Model\ListEnginesRequest');
    }

    /**
     * 查询微服务引擎专享版的规格列表
     *
     * 查询微服务引擎专享版的规格列表。
     * 
     * Please refer to G42 cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFlavors($request)
    {
        return $this->listFlavorsWithHttpInfo($request);
    }

    public function listFlavorsWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/enginemgr/flavors';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['specType'] !== null) {
            $queryParams['spec_type'] = $localVarParams['specType'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\G42Cloud\SDK\Cse\V1\Model\ListFlavorsResponse',
            $requestType='\G42Cloud\SDK\Cse\V1\Model\ListFlavorsRequest');
    }

    /**
     * 查询微服务引擎专享版详情
     *
     * 查询微服务引擎专享版详情
     * 
     * Please refer to G42 cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEngine($request)
    {
        return $this->showEngineWithHttpInfo($request);
    }

    public function showEngineWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/enginemgr/engines/{engine_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['engineId'] !== null) {
            $pathParams['engine_id'] = $localVarParams['engineId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\G42Cloud\SDK\Cse\V1\Model\ShowEngineResponse',
            $requestType='\G42Cloud\SDK\Cse\V1\Model\ShowEngineRequest');
    }

    /**
     * 查询微服务引擎任务详情
     *
     * 查询微服务引擎任务详情。
     * 
     * Please refer to G42 cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEngineJob($request)
    {
        return $this->showEngineJobWithHttpInfo($request);
    }

    public function showEngineJobWithHttpInfo($request)
    {
        $resourcePath = '/v2/{project_id}/enginemgr/engines/{engine_id}/jobs/{job_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['engineId'] !== null) {
            $pathParams['engine_id'] = $localVarParams['engineId'];
        }
        if ($localVarParams['jobId'] !== null) {
            $pathParams['job_id'] = $localVarParams['jobId'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\G42Cloud\SDK\Cse\V1\Model\ShowEngineJobResponse',
            $requestType='\G42Cloud\SDK\Cse\V1\Model\ShowEngineJobRequest');
    }

    /**
     * 导入kie配置
     *
     * 导入kie配置
     * 
     * Please refer to G42 cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadKie($request)
    {
        return $this->uploadKieWithHttpInfo($request);
    }

    public function uploadKieWithHttpInfo($request)
    {
        $resourcePath = '/v1/{project_id}/kie/file';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = true;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['override'] !== null) {
            $queryParams['override'] = $localVarParams['override'];
        }
        if ($localVarParams['label'] !== null) {
            $queryParams['label'] = $localVarParams['label'];
        }
        if ($localVarParams['xEnterpriseProjectId'] !== null) {
            $headerParams[$arr['xEnterpriseProjectId']] = $localVarParams['xEnterpriseProjectId'];
        }
        if ($localVarParams['xEngineId'] !== null) {
            $headerParams[$arr['xEngineId']] = $localVarParams['xEngineId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        foreach ($httpBody::attributeMap() as $k => $v) {
            $getter = $httpBody::getters()[$k];
            $value = $httpBody->$getter();
            $formParams[$k] = $value;
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\G42Cloud\SDK\Cse\V1\Model\UploadKieResponse',
            $requestType='\G42Cloud\SDK\Cse\V1\Model\UploadKieRequest');
    }

    protected function callApi(
        $method,
        $resourcePath,
        $pathParams = null,
        $queryParams = null,
        $headerParams = null,
        $body = null,
        $multipart = null,
        $postParams = null,
        $responseType = null,
        $requestType = null)
    {
    return $this->doHttpRequest(
        $method,
        $resourcePath,
        $pathParams,
        $queryParams,
        $headerParams,
        $body,
        $multipart,
        $postParams,
        $responseType,
        $requestType);
    }
}