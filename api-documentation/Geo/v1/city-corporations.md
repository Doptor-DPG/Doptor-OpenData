## End-point: {{domain}}/api/v1/geo/city-corporations

### Method: POST

> ```
>{{domain}}/api/v1/geo/city-corporations
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param       | Value | Type | Comment                        |
|-------------|-------|------|--------------------------------|
| id          |       | int  | Optional Parameter for Search. |
| name_bng    |       | text | Optional Parameter for Search. |
| name_bng    |       | text | Optional Parameter for Search. |
| bbs_code    |       | text | Optional Parameter for Search. |
| division_id |       | int  | Optional Parameter for Search. |
| district_id |       | int  | Optional Parameter for Search. |
| page        | 1     | int  | Page Number for Pagination.    |
| per_page    | 25    | int  | Data Count for pagination.     |

### Response: 200

```json
{
    "status": "success",
    "meta": {
        "total": 3,
        "count": 2,
        "from": 1,
        "to": 2,
        "current_page": 1,
        "per_page": 25,
        "last_page": 1
    },
    "data": [
        {
            "bbs_code": "50",
            "name_eng": "COMILLA CITY CORP.",
            "name_bng": "কুমিল্লা সিটি কর্পোরেশন",
            "division_id": 2,
            "district_id": 11,
            "id": 3
        },
        {
            "bbs_code": "25",
            "name_eng": "DHAKA UTTAR CITY CORP.",
            "name_bng": "ঢাকা উত্তর সিটি কর্পোরেশন",
            "division_id": 3,
            "district_id": 18,
            "id": 5
        }
    ]
}
```