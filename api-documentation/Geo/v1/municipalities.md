## End-point: {{domain}}/api/v1/geo/municipalities

### Method: POST

> ```
>{{domain}}/api/v1/geo/municipalities
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param       | Value | Type | Comment                        |
|-------------|-------|------|--------------------------------|
| id          | 5     | int  | Optional Parameter for Search. |
| name_bng    |       | text | Optional Parameter for Search. |
| name_bng    |       | text | Optional Parameter for Search. |
| bbs_code    |       | text | Optional Parameter for Search. |
| division_id |       | int  | Optional Parameter for Search. |
| district_id |       | int  | Optional Parameter for Search. |
| upazila_id  |       | int  | Optional Parameter for Search. |
| page        | 1     | int  | Page Number for Pagination.    |
| per_page    | 25    | int  | Data Count for pagination.     |

### Response: 200

```json
{
  "status": "success",
  "meta": {
    "total": 1,
    "count": 1,
    "from": 1,
    "to": 1,
    "current_page": 1,
    "per_page": 50,
    "last_page": 1
  },
  "data": [
    {
      "id": 5,
      "name_eng": "LAMA PAURASHAVA",
      "name_bng": "লামা পৌরসভা",
      "bbs_code": "62",
      "district_id": 7,
      "upazila_id": 42,
      "division_id": 2
    }
  ]
}
```
