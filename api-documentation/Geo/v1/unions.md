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
| upazila_id  |       | int  | Optional Parameter for Search. |
| page        | 1     | int  | Page Number for Pagination.    |
| per_page    | 25    | int  | Data Count for pagination.     |

### Response: 200

```json
{
  "status": "success",
  "meta": {
    "total": 689,
    "count": 50,
    "from": 1,
    "to": 50,
    "current_page": 1,
    "per_page": 50,
    "last_page": 14
  },
  "data": [
    {
      "id": 2,
      "bbs_code": "27",
      "name_eng": "CHAMPAPUR",
      "name_bng": "চাঁপাপুর",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 329
    },
    {
      "id": 3,
      "bbs_code": "40",
      "name_eng": "CHHATIANGRAM",
      "name_bng": "ছাতিয়ানগ্রাম",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 329
    },
    {
      "id": 4,
      "bbs_code": "54",
      "name_eng": "KUNDAGRAM",
      "name_bng": "কুন্দগ্রাম",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 329
    },
    {
      "id": 5,
      "bbs_code": "67",
      "name_eng": "NASRATPUR",
      "name_bng": "নশরৎপুর",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 329
    },
    {
      "id": 6,
      "bbs_code": "81",
      "name_eng": "SHANTAHAR",
      "name_bng": "সান্তাহার",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 329
    },
    {
      "id": 7,
      "bbs_code": "23",
      "name_eng": "ERULIA",
      "name_bng": "এরুলিয়া",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 8,
      "bbs_code": "25",
      "name_eng": "FAPORE",
      "name_bng": "ফাঁপোর",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 9,
      "bbs_code": "34",
      "name_eng": "GOKUL",
      "name_bng": "গোকুল",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 10,
      "bbs_code": "47",
      "name_eng": "LAHIRI PARA",
      "name_bng": "লাহিড়ীপাড়া",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 11,
      "bbs_code": "60",
      "name_eng": "NAMUJA",
      "name_bng": "নামুজা",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 12,
      "bbs_code": "64",
      "name_eng": "NISHINDARA",
      "name_bng": "নিশিন্দারা",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 13,
      "bbs_code": "69",
      "name_eng": "NOONGOLA",
      "name_bng": "নুনগোলা",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 14,
      "bbs_code": "73",
      "name_eng": "RAJAPUR",
      "name_bng": "রাজাপুর",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 15,
      "bbs_code": "77",
      "name_eng": "SHABGRAM",
      "name_bng": "সাবগ্রাম",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 16,
      "bbs_code": "82",
      "name_eng": "SHAKHARIA",
      "name_bng": "শাখারিয়া",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 17,
      "bbs_code": "86",
      "name_eng": "SEKHERKOLA",
      "name_bng": "শেখেরকোলা",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 18,
      "bbs_code": "98",
      "name_eng": "BOGRA CANTONMENT",
      "name_bng": "বগুড়া সেনানিবাস",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 330
    },
    {
      "id": 19,
      "bbs_code": "15",
      "name_eng": "BHANDARBARI",
      "name_bng": "ভান্ডারবাড়ী",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 331
    },
    {
      "id": 20,
      "bbs_code": "19",
      "name_eng": "CHAUKIBARI",
      "name_bng": "চৌকিবাড়ি",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 331
    },
    {
      "id": 21,
      "bbs_code": "28",
      "name_eng": "CHIKASHI",
      "name_bng": "চিকাশী",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 331
    },
    {
      "id": 22,
      "bbs_code": "38",
      "name_eng": "DHUNAT",
      "name_bng": "ধুনট",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 331
    },
    {
      "id": 23,
      "bbs_code": "47",
      "name_eng": "ELANGI",
      "name_bng": "এলাঙ্গী",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 331
    },
    {
      "id": 24,
      "bbs_code": "57",
      "name_eng": "GOPALNAGAR",
      "name_bng": "গোপালনগর",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 331
    },
    {
      "id": 25,
      "bbs_code": "66",
      "name_eng": "GOSAINBARI",
      "name_bng": "গোসাইবাড়ী",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 331
    },
    {
      "id": 26,
      "bbs_code": "76",
      "name_eng": "KALER PARA",
      "name_bng": "কলেরপাড়া",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 331
    },
    {
      "id": 27,
      "bbs_code": "85",
      "name_eng": "MATHURAPUR",
      "name_bng": "মখুরপুর",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 331
    },
    {
      "id": 28,
      "bbs_code": "95",
      "name_eng": "NIMGACHHI",
      "name_bng": "নিমগাছি",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 331
    },
    {
      "id": 29,
      "bbs_code": "13",
      "name_eng": "CHAMRUL UNION",
      "name_bng": "চামরুল",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 332
    },
    {
      "id": 30,
      "bbs_code": "27",
      "name_eng": "DHUPCHANCHIA",
      "name_bng": "দুপচাচিঁয়া",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 332
    },
    {
      "id": 31,
      "bbs_code": "40",
      "name_eng": "GOBINDAPUR",
      "name_bng": "গোবিন্দপুর",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 332
    },
    {
      "id": 32,
      "bbs_code": "54",
      "name_eng": "GUNAHAR",
      "name_bng": "গুনাহার",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 332
    },
    {
      "id": 33,
      "bbs_code": "67",
      "name_eng": "TALORA UNION",
      "name_bng": "তালোড়া",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 332
    },
    {
      "id": 34,
      "bbs_code": "81",
      "name_eng": "ZIANAGAR",
      "name_bng": "তালোড়া",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 332
    },
    {
      "id": 35,
      "bbs_code": "11",
      "name_eng": "BALIA DIGHI",
      "name_bng": "বালিয়াদিঘী",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 333
    },
    {
      "id": 36,
      "bbs_code": "17",
      "name_eng": "DAKSHINPARA",
      "name_bng": "দক্ষিণপাড়া",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 333
    },
    {
      "id": 37,
      "bbs_code": "27",
      "name_eng": "DURGAHATA",
      "name_bng": "দুর্গাহাটা",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 333
    },
    {
      "id": 38,
      "bbs_code": "33",
      "name_eng": "GABTALI",
      "name_bng": "গাবতলি",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 333
    },
    {
      "id": 39,
      "bbs_code": "47",
      "name_eng": "KAGAIL",
      "name_bng": "কাগইল",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 333
    },
    {
      "id": 40,
      "bbs_code": "54",
      "name_eng": "MAHISHABAN",
      "name_bng": "মহিষাবান",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 333
    },
    {
      "id": 41,
      "bbs_code": "61",
      "name_eng": "NARUAMALA",
      "name_bng": "নাড়ুয়ামালা",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 333
    },
    {
      "id": 42,
      "bbs_code": "67",
      "name_eng": "NASIPUR",
      "name_bng": "নশিপুর",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 333
    },
    {
      "id": 43,
      "bbs_code": "74",
      "name_eng": "NEPALTALI",
      "name_bng": "নেপালতলি",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 333
    },
    {
      "id": 44,
      "bbs_code": "81",
      "name_eng": "RAMESHWARPUR",
      "name_bng": "রামেশ্বরপুর",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 333
    },
    {
      "id": 45,
      "bbs_code": "88",
      "name_eng": "SONARAI",
      "name_bng": "সোনারায়",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 333
    },
    {
      "id": 46,
      "bbs_code": "13",
      "name_eng": "BIR KEDAR",
      "name_bng": "বীরকেদার",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 334
    },
    {
      "id": 47,
      "bbs_code": "19",
      "name_eng": "DURGAPUR",
      "name_bng": "দূর্গাপুর",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 334
    },
    {
      "id": 48,
      "bbs_code": "28",
      "name_eng": "JAMGAON",
      "name_bng": "জামগ্রাম",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 334
    },
    {
      "id": 49,
      "bbs_code": "38",
      "name_eng": "KAHALOO",
      "name_bng": "কাহালু",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 334
    },
    {
      "id": 50,
      "bbs_code": "47",
      "name_eng": "KALAI MAJH PARA",
      "name_bng": "কালাই",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 334
    },
    {
      "id": 51,
      "bbs_code": "57",
      "name_eng": "MALANCHA",
      "name_bng": "মালঞ্চা",
      "division_id": 5,
      "district_id": 45,
      "upazila_id": 334
    }
  ]
}
```
