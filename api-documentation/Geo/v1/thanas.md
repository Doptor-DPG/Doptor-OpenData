## End-point: {{domain}}/api/v1/geo/thanas

### Method: POST

> ```
>{{domain}}/api/v1/geo/thanas
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
    "total": 557,
    "count": 50,
    "from": 1,
    "to": 50,
    "current_page": 1,
    "per_page": 50,
    "last_page": 12
  },
  "data": [
    {
      "id": 2,
      "name_eng": "CHITALMARI",
      "name_bng": "চিতলমারী",
      "bbs_code": "14",
      "division_id": 4,
      "district_id": 35
    },
    {
      "id": 3,
      "name_eng": "FAKIRHAT",
      "name_bng": "ফকিরহাট",
      "bbs_code": "34",
      "division_id": 4,
      "district_id": 35
    },
    {
      "id": 4,
      "name_eng": "KACHUA",
      "name_bng": "কচুয়া",
      "bbs_code": "38",
      "division_id": 4,
      "district_id": 35
    },
    {
      "id": 5,
      "name_eng": "MOLLAHAT",
      "name_bng": "মোল্লাহাট",
      "bbs_code": "56",
      "division_id": 4,
      "district_id": 35
    },
    {
      "id": 6,
      "name_eng": "MONGLA",
      "name_bng": "মোংলা",
      "bbs_code": "58",
      "division_id": 4,
      "district_id": 35
    },
    {
      "id": 7,
      "name_eng": "MORRELGANJ",
      "name_bng": "মোড়লগঞ্জ",
      "bbs_code": "60",
      "division_id": 4,
      "district_id": 35
    },
    {
      "id": 8,
      "name_eng": "RAMPAL",
      "name_bng": "রামপাল",
      "bbs_code": "73",
      "division_id": 4,
      "district_id": 35
    },
    {
      "id": 9,
      "name_eng": "SARANKHOLA",
      "name_bng": "শরণখোলা",
      "bbs_code": "77",
      "division_id": 4,
      "district_id": 35
    },
    {
      "id": 10,
      "name_eng": "ALIKADAM",
      "name_bng": "আলীকদম",
      "bbs_code": "04",
      "division_id": 2,
      "district_id": 7
    },
    {
      "id": 11,
      "name_eng": "BANDARBAN SADAR",
      "name_bng": "বান্দরবান সদর",
      "bbs_code": "14",
      "division_id": 2,
      "district_id": 7
    },
    {
      "id": 12,
      "name_eng": "LAMA",
      "name_bng": "লামা",
      "bbs_code": "51",
      "division_id": 2,
      "district_id": 7
    },
    {
      "id": 13,
      "name_eng": "NAIKHONGCHHARI",
      "name_bng": "নাইক্ষ্যংছড়ি",
      "bbs_code": "73",
      "division_id": 2,
      "district_id": 7
    },
    {
      "id": 14,
      "name_eng": "ROWANGCHHARI",
      "name_bng": "রোয়াংছড়ি",
      "bbs_code": "89",
      "division_id": 2,
      "district_id": 7
    },
    {
      "id": 15,
      "name_eng": "RUMA",
      "name_bng": "রুমা",
      "bbs_code": "91",
      "division_id": 2,
      "district_id": 7
    },
    {
      "id": 16,
      "name_eng": "THANCHI",
      "name_bng": "থান্\u200cচি",
      "bbs_code": "95",
      "division_id": 2,
      "district_id": 7
    },
    {
      "id": 17,
      "name_eng": "AMTALI",
      "name_bng": "আমতলী",
      "bbs_code": "09",
      "division_id": 1,
      "district_id": 1
    },
    {
      "id": 18,
      "name_eng": "BAMNA",
      "name_bng": "বামনা",
      "bbs_code": "19",
      "division_id": 1,
      "district_id": 1
    },
    {
      "id": 19,
      "name_eng": "BARGUNA SADAR",
      "name_bng": "বরগুনা সদর",
      "bbs_code": "28",
      "division_id": 1,
      "district_id": 1
    },
    {
      "id": 20,
      "name_eng": "BETAGI",
      "name_bng": "বেতাগী",
      "bbs_code": "47",
      "division_id": 1,
      "district_id": 1
    },
    {
      "id": 21,
      "name_eng": "PATHARGHATA",
      "name_bng": "পাথরঘাটা",
      "bbs_code": "85",
      "division_id": 1,
      "district_id": 1
    },
    {
      "id": 22,
      "name_eng": "TALTALI",
      "name_bng": "তালতলী",
      "bbs_code": "90",
      "division_id": 1,
      "district_id": 1
    },
    {
      "id": 23,
      "name_eng": "AGAILJHARA",
      "name_bng": "আগৈলঝাড়া",
      "bbs_code": "02",
      "division_id": 1,
      "district_id": 2
    },
    {
      "id": 24,
      "name_eng": "BABUGANJ",
      "name_bng": "বাবুগঞ্জ",
      "bbs_code": "03",
      "division_id": 1,
      "district_id": 2
    },
    {
      "id": 25,
      "name_eng": "BAKERGANJ",
      "name_bng": "বাকেরগঞ্জ",
      "bbs_code": "07",
      "division_id": 1,
      "district_id": 2
    },
    {
      "id": 26,
      "name_eng": "BANARI PARA",
      "name_bng": "বানারী পাড়া",
      "bbs_code": "10",
      "division_id": 1,
      "district_id": 2
    },
    {
      "id": 27,
      "name_eng": "GAURNADI",
      "name_bng": "গৌরনদী",
      "bbs_code": "32",
      "division_id": 1,
      "district_id": 2
    },
    {
      "id": 28,
      "name_eng": "HIZLA",
      "name_bng": "হিজলা",
      "bbs_code": "36",
      "division_id": 1,
      "district_id": 2
    },
    {
      "id": 29,
      "name_eng": "BARISAL SADAR (KOTWALI)",
      "name_bng": "বরিশাল সদর",
      "bbs_code": "51",
      "division_id": 1,
      "district_id": 2
    },
    {
      "id": 30,
      "name_eng": "MEHENDIGANJ",
      "name_bng": "মেহেন্দীগঞ্জ",
      "bbs_code": "62",
      "division_id": 1,
      "district_id": 2
    },
    {
      "id": 31,
      "name_eng": "MULADI",
      "name_bng": "মুলাদী",
      "bbs_code": "69",
      "division_id": 1,
      "district_id": 2
    },
    {
      "id": 32,
      "name_eng": "WAZIRPUR",
      "name_bng": "উজিরপুর",
      "bbs_code": "94",
      "division_id": 1,
      "district_id": 2
    },
    {
      "id": 33,
      "name_eng": "BHOLA SADAR",
      "name_bng": "ভোলা সদর",
      "bbs_code": "18",
      "division_id": 1,
      "district_id": 3
    },
    {
      "id": 34,
      "name_eng": "BURHANUDDIN",
      "name_bng": "বোরহানউদ্দীন",
      "bbs_code": "21",
      "division_id": 1,
      "district_id": 3
    },
    {
      "id": 35,
      "name_eng": "CHAR FASSON",
      "name_bng": "চরফ্যাশন",
      "bbs_code": "25",
      "division_id": 1,
      "district_id": 3
    },
    {
      "id": 36,
      "name_eng": "DAULAT KHAN",
      "name_bng": "দৌলত খান",
      "bbs_code": "29",
      "division_id": 1,
      "district_id": 3
    },
    {
      "id": 37,
      "name_eng": "LALMOHAN",
      "name_bng": "লালমোহন",
      "bbs_code": "54",
      "division_id": 1,
      "district_id": 3
    },
    {
      "id": 38,
      "name_eng": "MANPURA",
      "name_bng": "মনপুরা",
      "bbs_code": "65",
      "division_id": 1,
      "district_id": 3
    },
    {
      "id": 39,
      "name_eng": "TAZUMUDDIN",
      "name_bng": "তজুমুদ্দিন",
      "bbs_code": "91",
      "division_id": 1,
      "district_id": 3
    },
    {
      "id": 40,
      "name_eng": "ADAMDIGHI",
      "name_bng": "আদমদিঘী",
      "bbs_code": "06",
      "division_id": 5,
      "district_id": 45
    },
    {
      "id": 41,
      "name_eng": "BOGRA SADAR",
      "name_bng": "বগুড়া সদর",
      "bbs_code": "20",
      "division_id": 5,
      "district_id": 45
    },
    {
      "id": 42,
      "name_eng": "DHUNAT",
      "name_bng": "ধুনট",
      "bbs_code": "27",
      "division_id": 5,
      "district_id": 45
    },
    {
      "id": 43,
      "name_eng": "DHUPCHANCHIA",
      "name_bng": "ধুপচাঁচিয়া",
      "bbs_code": "33",
      "division_id": 5,
      "district_id": 45
    },
    {
      "id": 44,
      "name_eng": "GABTALI",
      "name_bng": "গাবতলী",
      "bbs_code": "40",
      "division_id": 5,
      "district_id": 45
    },
    {
      "id": 45,
      "name_eng": "KAHALOO",
      "name_bng": "কাহালু",
      "bbs_code": "54",
      "division_id": 5,
      "district_id": 45
    },
    {
      "id": 46,
      "name_eng": "NANDIGRAM",
      "name_bng": "নন্দীগ্রাম",
      "bbs_code": "67",
      "division_id": 5,
      "district_id": 45
    },
    {
      "id": 47,
      "name_eng": "SARIAKANDI",
      "name_bng": "সারিয়াকান্দি",
      "bbs_code": "81",
      "division_id": 5,
      "district_id": 45
    },
    {
      "id": 48,
      "name_eng": "SHAJAHANPUR",
      "name_bng": "শাহজাহানপুর",
      "bbs_code": "85",
      "division_id": 5,
      "district_id": 45
    },
    {
      "id": 49,
      "name_eng": "SHERPUR",
      "name_bng": "শেরপুর",
      "bbs_code": "88",
      "division_id": 5,
      "district_id": 45
    },
    {
      "id": 50,
      "name_eng": "SHIBGANJ",
      "name_bng": "শিব্\u200cগঞ্জ",
      "bbs_code": "94",
      "division_id": 5,
      "district_id": 45
    },
    {
      "id": 51,
      "name_eng": "SONATOLA",
      "name_bng": "সোনাতলা",
      "bbs_code": "95",
      "division_id": 5,
      "district_id": 45
    }
  ]
}
```
