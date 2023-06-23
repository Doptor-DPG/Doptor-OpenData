## End-point: {{domain}}/api/v1/geo/upazillas

### Method: POST

> ```
>{{domain}}/api/v1/geo/upazillas
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
    "total": 295,
    "count": 25,
    "from": 1,
    "to": 25,
    "current_page": 1,
    "per_page": 25,
    "last_page": 12
  },
  "data": [
    {
      "division_id": 1,
      "bbs_code": "19",
      "district_id": 1,
      "name_eng": "BAMNA",
      "name_bng": "বামনা ",
      "id": 2
    },
    {
      "division_id": 1,
      "bbs_code": "28",
      "district_id": 1,
      "name_eng": "BARGUNA SADAR",
      "name_bng": "বরগুনা সদর ",
      "id": 3
    },
    {
      "division_id": 1,
      "bbs_code": "47",
      "district_id": 1,
      "name_eng": "BETAGI",
      "name_bng": "বেতাগী ",
      "id": 4
    },
    {
      "division_id": 1,
      "bbs_code": "85",
      "district_id": 1,
      "name_eng": "PATHARGHATA",
      "name_bng": "পাথরঘাটা ",
      "id": 5
    },
    {
      "division_id": 1,
      "bbs_code": "90",
      "district_id": 1,
      "name_eng": "TALTALI",
      "name_bng": "তালতলি ",
      "id": 6
    },
    {
      "division_id": 1,
      "bbs_code": "2",
      "district_id": 2,
      "name_eng": "AGAILJHARA",
      "name_bng": "আগৈলঝাড়া",
      "id": 7
    },
    {
      "division_id": 1,
      "bbs_code": "3",
      "district_id": 2,
      "name_eng": "BABUGANJ",
      "name_bng": "বাবুগঞ্জ ",
      "id": 8
    },
    {
      "division_id": 1,
      "bbs_code": "7",
      "district_id": 2,
      "name_eng": "BAKERGANJ",
      "name_bng": "বাকেরগঞ্জ",
      "id": 9
    },
    {
      "division_id": 1,
      "bbs_code": "10",
      "district_id": 2,
      "name_eng": "BANARI PARA",
      "name_bng": "বানারীপাড়া ",
      "id": 10
    },
    {
      "division_id": 1,
      "bbs_code": "32",
      "district_id": 2,
      "name_eng": "GAURNADI",
      "name_bng": "গৌরনদী ",
      "id": 11
    },
    {
      "division_id": 1,
      "bbs_code": "36",
      "district_id": 2,
      "name_eng": "HIZLA",
      "name_bng": "হিজলা ",
      "id": 12
    },
    {
      "division_id": 1,
      "bbs_code": "51",
      "district_id": 2,
      "name_eng": "BARISAL SADAR (KOTWALI)",
      "name_bng": "বরিশাল সদর (কোতোয়ালী)",
      "id": 13
    },
    {
      "division_id": 1,
      "bbs_code": "62",
      "district_id": 2,
      "name_eng": "MEHENDIGANJ",
      "name_bng": "মেহেন্দিগঞ্জ ",
      "id": 14
    },
    {
      "division_id": 1,
      "bbs_code": "69",
      "district_id": 2,
      "name_eng": "MULADI",
      "name_bng": "মুলাদী  ",
      "id": 15
    },
    {
      "division_id": 1,
      "bbs_code": "94",
      "district_id": 2,
      "name_eng": "WAZIRPUR",
      "name_bng": "উজিরপুর  ",
      "id": 16
    },
    {
      "division_id": 1,
      "bbs_code": "18",
      "district_id": 3,
      "name_eng": "BHOLA SADAR",
      "name_bng": "ভোলা সদর",
      "id": 17
    },
    {
      "division_id": 1,
      "bbs_code": "21",
      "district_id": 3,
      "name_eng": "BURHANUDDIN",
      "name_bng": "বোরহানউদ্দিন ",
      "id": 18
    },
    {
      "division_id": 1,
      "bbs_code": "29",
      "district_id": 3,
      "name_eng": "DAULAT KHAN",
      "name_bng": "দৌলতখান",
      "id": 19
    },
    {
      "division_id": 1,
      "bbs_code": "54",
      "district_id": 3,
      "name_eng": "LALMOHAN",
      "name_bng": "লালমোহন ",
      "id": 20
    },
    {
      "division_id": 1,
      "bbs_code": "65",
      "district_id": 3,
      "name_eng": "MANPURA",
      "name_bng": "মনপুরা ",
      "id": 21
    },
    {
      "division_id": 1,
      "bbs_code": "91",
      "district_id": 3,
      "name_eng": "TAZUMUDDIN",
      "name_bng": "তজুমদ্দিন ",
      "id": 22
    },
    {
      "division_id": 1,
      "bbs_code": "40",
      "district_id": 4,
      "name_eng": "JHALOKATI SADAR",
      "name_bng": "ঝালকাঠি সদর",
      "id": 23
    },
    {
      "division_id": 1,
      "bbs_code": "73",
      "district_id": 4,
      "name_eng": "NALCHITY",
      "name_bng": "নলছিটি ",
      "id": 24
    },
    {
      "division_id": 1,
      "bbs_code": "43",
      "district_id": 4,
      "name_eng": "KATHALIA",
      "name_bng": "কাঠালিয়া",
      "id": 25
    },
    {
      "division_id": 1,
      "bbs_code": "38",
      "district_id": 5,
      "name_eng": "BAUPHAL",
      "name_bng": "বাউফল ",
      "id": 26
    }
  ]
}
```
