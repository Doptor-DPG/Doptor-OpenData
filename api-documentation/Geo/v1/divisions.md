## End-point: {{domain}}/api/v1/geo/divisions

### Method: POST

> ```
>{{domain}}/api/v1/geo/divisions
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param    | Value | Type | Comment                        |
|----------|-------|------|--------------------------------|
| id       |       | int  | Optional Parameter for Search. |
| name_bng |       | text | Optional Parameter for Search. |
| name_bng |       | text | Optional Parameter for Search. |
| bbs_code |       | text | Optional Parameter for Search. |

### Response: 200

```json
{
  "status": "success",
  "meta": {
    "total": 8,
    "count": 7,
    "from": 1,
    "to": 7,
    "current_page": 1,
    "per_page": 25,
    "last_page": 1
  },
  "data": [
    {
      "bbs_code": "20",
      "name_eng": "Chittagong",
      "name_bng": "চট্টগ্রাম",
      "id": 2
    },
    {
      "bbs_code": "30",
      "name_eng": "Dhaka",
      "name_bng": "ঢাকা",
      "id": 3
    },
    {
      "bbs_code": "40",
      "name_eng": "Khulna",
      "name_bng": "খুলনা",
      "id": 4
    },
    {
      "bbs_code": "50",
      "name_eng": "Rajshahi",
      "name_bng": "রাজশাহী",
      "id": 5
    },
    {
      "bbs_code": "55",
      "name_eng": "Rangpur",
      "name_bng": "রংপুর",
      "id": 6
    },
    {
      "bbs_code": "60",
      "name_eng": "Sylhet",
      "name_bng": "সিলেট",
      "id": 7
    },
    {
      "bbs_code": "45",
      "name_eng": "Mymensingh",
      "name_bng": "ময়মনসিংহ",
      "id": 9
    }
  ]
}
```
