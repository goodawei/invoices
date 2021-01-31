### 企业发票明细查询接口
    说明：企业发票明细查询接口企业发票明细查询接口企业发票明细查询接口企业发票明细查询接口
        企业发票明细查询接口企业发票明细查询接口企业发票明细查询接口企业发票明细查询接口企业发票明细查询接口。
    注：上传接口需要使用表单上传方式即Content-Type: multipart/form-data
        对应请求体body示例如下：
        ------WebKitFormBoundaryTWIJy3UZRCpjYkD5
        Content-Disposition: form-data; name="data"

        {data:{"uid":"11321","type":1}}//不加密
        {data:"decrypt"}//加密
        ------WebKitFormBoundaryTWIJy3UZRCpjYkD5
        Content-Disposition: form-data; name="file"; filename="photo.jpg"
        Content-Type: text/plain

        afberterthidf324345kndggiert
        ------WebKitFormBoundaryTWIJy3UZRCpjYkD5--

    注：签名时只对表单中data参数做签名，file文件不参与签名。
