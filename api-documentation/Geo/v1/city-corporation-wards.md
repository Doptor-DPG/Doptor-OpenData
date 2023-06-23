## End-point: {{domain}}/api/v1/geo/city-corporation-wards

### Method: POST

> ```
>{{domain}}/api/v1/geo/city-corporation-wards
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param              | Value | Type | Comment                        |
|--------------------|-------|------|--------------------------------|
| id                 |       | int  | Optional Parameter for Search. |
| name_bng           |       | text | Optional Parameter for Search. |
| name_bng           |       | text | Optional Parameter for Search. |
| bbs_code           |       | text | Optional Parameter for Search. |
| division_id        |       | int  | Optional Parameter for Search. |
| district_id        |       | int  | Optional Parameter for Search. |
| citycorporation_id |       | int  | Optional Parameter for Search. |
| page               | 1     | int  | Page Number for Pagination.    |
| per_page           | 25    | int  | Data Count for pagination.     |

### Response: 200

```json
{
  "status": "success",
  "meta": {
    "total": 0,
    "count": 0,
    "from": 1,
    "to": 0,
    "current_page": 1,
    "per_page": 500,
    "last_page": 0
  },
  "data": []
}
```
