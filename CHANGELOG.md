# 0.0.8-beta 2023-10-30

### G42Cloud SDK MPC

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **CreateThumbnailsTask**
    - changes of request param
      - `- thumbnail_para.percent`
      - `- thumbnail_para.type: enum value [PERCENT]`
  - **CreateTranscodingTask**
    - changes of request param
      - `- thumbnail.params.percent`
      - `- thumbnail.params.type: enum value [PERCENT]`

# 0.0.7-beta 2023-08-26

### G42Cloud SDK SMS

- _Features_
  - New Support SMS
- _Bug Fix_
  - None
- _Change_
  - None

### G42Cloud SDK MPC

- _Features_
  - New Support MPC
- _Bug Fix_
  - None
- _Change_
  - None

### G42Cloud SDK SWR

- _Features_
  - New Support SWR
- _Bug Fix_
  - None
- _Change_
  - None

# 0.0.6-beta 2023-06-16

### G42Cloud SDK CSE

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **DownloadKie**
    - changes of response param
      - `+ data.id`
  - **CreateEngine**
    - changes of response param
      - `+ jobId`
      - `- job_id`
  - **DeleteEngine**
    - changes of response param
      - `+ jobId`
      - `- job_id`

### G42Cloud SDK ECS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **CreateServers**
    - changes of request param
      - `+ server.data_volumes.delete_on_termination`
  - **CreatePostPaidServers**
    - changes of request param
      - `+ server.data_volumes.delete_on_termination`

### G42Cloud SDK SMN

- _Features_
  - Support the following interfaces：
    - `UpdateSubscription`
    - `ListLogtank`
    - `CreateLogtank`
    - `UpdateLogtank`
    - `DeleteLogtank`
- _Bug Fix_
  - None
- _Change_
  - **ListTopicDetails**
    - changes of response param
      - `+ topic_id`
  - **ListTopics**
    - changes of request param
      - `+ topic_id`
    - changes of response param
      - `+ topics.topic_id`
  - **ListTopicAttributes**
    - changes of response param
      - `+ attributes.access_policy`
      - `+ attributes.introduction`
      - `- attributes.Version`
      - `- attributes.Id`
      - `- attributes.Statement`
  - **AddSubscription**
    - changes of request param
      - `+ extension`

# 0.0.5-beta 2023-05-12

### G42Cloud SDK ECS

- _Features_
  - Support the interface `NovaAttachInterface`
- _Bug Fix_
  - None
- _Change_
  - None

### G42Cloud SDK IMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - **ListImages**
    - changes of request param
      - `+ __imagetype: enum value [market]`

# 0.0.4-beta 2023-04-14

### G42Cloud SDK Core

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Optimize the code structure.

# 0.0.3-beta 2023-02-20

### G42Cloud SDK IMS

- _Features_
  - None
- _Bug Fix_
  - None
- _Change_
  - Add the enum values `IsoImage` to the request parameter `type` to the interface `CreateImage`

# 0.0.2-beta 2023-01-06

### G42Cloud SDK IMS

- _Features_
  - New Support IMS
- _Bug Fix_
  - None
- _Change_
  - None

### G42Cloud SDK SMN

- _Features_
  - New Support SMN
- _Bug Fix_
  - None
- _Change_
  - None

# 0.0.1-beta 2022-11-29

### G42Cloud SDK CDN

- _Features_
  - New Support CDN
- _Bug Fix_
  - None
- _Change_
  - None

### G42Cloud SDK VPC

- _Features_
  - New Support VPC
- _Bug Fix_
  - None
- _Change_
  - None

### G42Cloud SDK ECS

- _Features_
  - New Support ECS
- _Bug Fix_
  - None
- _Change_
  - None

### G42Cloud SDK EVS

- _Features_
  - New Support EVS
- _Bug Fix_
  - None
- _Change_
  - None

### G42Cloud SDK CSE

- _Features_
  - New Support CSE
- _Bug Fix_
  - None
- _Change_
  - None