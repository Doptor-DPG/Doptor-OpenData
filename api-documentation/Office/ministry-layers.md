## End-point: {{domain}}/api/v1/ministry/layers/

### Method: POST

> ```
>{{domain}}/api/v1/ministry/layers/
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param       | Value | Type | Comment              |
|-------------|-------|------|----------------------|
| ministry_id | 5     | int  | Mandatory Parameter. |

### Response: 200

```json
{
  "status": "success",
  "meta": {
    "total": 15,
    "count": 15,
    "from": 1,
    "to": 15,
    "current_page": 1,
    "per_page": 15,
    "last_page": 1
  },
  "data": [
    {
      "id": 19,
      "layer_name_bng": "মন্ত্রণালয়",
      "layer_name_eng": "Ministry",
      "parent_layer_id": 0
    },
    {
      "id": 20,
      "layer_name_bng": "অধিদপ্তর/পরিদপ্তর",
      "layer_name_eng": "Directorate",
      "parent_layer_id": 19
    },
    {
      "id": 21,
      "layer_name_bng": "বিভাগীয় কার্যালয়",
      "layer_name_eng": "Divisional Office",
      "parent_layer_id": 19
    },
    {
      "id": 22,
      "layer_name_bng": "জেলা কার্যালয়",
      "layer_name_eng": "District Office",
      "parent_layer_id": 21
    },
    {
      "id": 23,
      "layer_name_bng": "উপজেলা কার্যালয়",
      "layer_name_eng": "Upazilla Office",
      "parent_layer_id": 22
    },
    {
      "id": 40,
      "layer_name_bng": "উপজেলা ভূমি অফিস",
      "layer_name_eng": "Upazila Land Office",
      "parent_layer_id": 23
    },
    {
      "id": 64,
      "layer_name_bng": "সংস্থা/বোর্ড",
      "layer_name_eng": "Organization",
      "parent_layer_id": 19
    },
    {
      "id": 247,
      "layer_name_bng": "রাজস্ব সার্কেল",
      "layer_name_eng": "Revenue Circle",
      "parent_layer_id": 23
    },
    {
      "id": 274,
      "layer_name_bng": "একাডেমি/ প্রশিক্ষণ কেন্দ্র",
      "layer_name_eng": "Academy/Training Center",
      "parent_layer_id": 19
    },
    {
      "id": 280,
      "layer_name_bng": "কমিশন",
      "layer_name_eng": "Commission",
      "parent_layer_id": 19
    },
    {
      "id": 329,
      "layer_name_bng": "বোর্ড",
      "layer_name_eng": "Board",
      "parent_layer_id": 19
    },
    {
      "id": 335,
      "layer_name_bng": "ইনস্টিটিউট",
      "layer_name_eng": "Institute",
      "parent_layer_id": 19
    },
    {
      "id": 340,
      "layer_name_bng": "সংস্থা",
      "layer_name_eng": "Organization",
      "parent_layer_id": 19
    },
    {
      "id": 412,
      "layer_name_bng": "ইউনিয়ন ভূমি অফিস ",
      "layer_name_eng": "Union Land Office",
      "parent_layer_id": 40
    },
    {
      "id": 413,
      "layer_name_bng": "আঞ্চলিক কার্যালয়",
      "layer_name_eng": "Zonal office",
      "parent_layer_id": 19
    }
  ]
}
```
