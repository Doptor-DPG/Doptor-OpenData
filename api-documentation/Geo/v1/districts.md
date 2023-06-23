## End-point: {{domain}}/api/v1/geo/districts

### Method: POST

> ```
>{{domain}}/api/v1/geo/districts
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
| division_id |       | int  | Optional Parameter for Search. |
| name_bng    |       | text | Optional Parameter for Search. |
| name_bng    |       | text | Optional Parameter for Search. |
| bbs_code    |       | text | Optional Parameter for Search. |

### Response: 200

```json
{
  "status": "success",
  "meta": {
    "total": 64,
    "count": 63,
    "from": 1,
    "to": 63,
    "current_page": 1,
    "per_page": 200,
    "last_page": 1
  },
  "data": [
    {
      "division_id": 1,
      "bbs_code": "06",
      "name_eng": "BARISAL",
      "name_bng": "বরিশাল",
      "id": 2
    },
    {
      "division_id": 1,
      "bbs_code": "09",
      "name_eng": "BHOLA",
      "name_bng": "ভোলা",
      "id": 3
    },
    {
      "division_id": 1,
      "bbs_code": "42",
      "name_eng": "JHALOKATI",
      "name_bng": "ঝালকাঠি",
      "id": 4
    },
    {
      "division_id": 1,
      "bbs_code": "78",
      "name_eng": "PATUAKHALI",
      "name_bng": "পটুয়াখালী ",
      "id": 5
    },
    {
      "division_id": 1,
      "bbs_code": "79",
      "name_eng": "PIROJPUR",
      "name_bng": "পিরোজপুর ",
      "id": 6
    },
    {
      "division_id": 2,
      "bbs_code": "03",
      "name_eng": "BANDARBAN",
      "name_bng": "বান্দরবান",
      "id": 7
    },
    {
      "division_id": 2,
      "bbs_code": "12",
      "name_eng": "BRAHMANBARIA",
      "name_bng": "ব্রাহ্মণবাড়িয়া",
      "id": 8
    },
    {
      "division_id": 2,
      "bbs_code": "13",
      "name_eng": "CHANDPUR",
      "name_bng": "চাঁদপুর",
      "id": 9
    },
    {
      "division_id": 2,
      "bbs_code": "15",
      "name_eng": "CHITTAGONG",
      "name_bng": "চট্টগ্রাম",
      "id": 10
    },
    {
      "division_id": 2,
      "bbs_code": "19",
      "name_eng": "COMILLA",
      "name_bng": "কুমিল্লা",
      "id": 11
    },
    {
      "division_id": 2,
      "bbs_code": "22",
      "name_eng": "COX'S BAZAR",
      "name_bng": "কক্সবাজার ",
      "id": 12
    },
    {
      "division_id": 2,
      "bbs_code": "30",
      "name_eng": "FENI",
      "name_bng": "ফেনী",
      "id": 13
    },
    {
      "division_id": 2,
      "bbs_code": "46",
      "name_eng": "KHAGRACHHARI",
      "name_bng": "খাগড়াছড়ি",
      "id": 14
    },
    {
      "division_id": 2,
      "bbs_code": "51",
      "name_eng": "LAKSHMIPUR",
      "name_bng": "লক্ষ্মীপুর",
      "id": 15
    },
    {
      "division_id": 2,
      "bbs_code": "75",
      "name_eng": "NOAKHALI",
      "name_bng": "নোয়াখালী",
      "id": 16
    },
    {
      "division_id": 2,
      "bbs_code": "84",
      "name_eng": "RANGAMATI",
      "name_bng": "রাঙ্গামাটি",
      "id": 17
    },
    {
      "division_id": 3,
      "bbs_code": "26",
      "name_eng": "DHAKA",
      "name_bng": "ঢাকা ",
      "id": 18
    },
    {
      "division_id": 3,
      "bbs_code": "29",
      "name_eng": "FARIDPUR",
      "name_bng": "ফরিদপুর ",
      "id": 19
    },
    {
      "division_id": 3,
      "bbs_code": "33",
      "name_eng": "GAZIPUR",
      "name_bng": "গাজীপুর ",
      "id": 20
    },
    {
      "division_id": 3,
      "bbs_code": "35",
      "name_eng": "GOPALGANJ",
      "name_bng": "গোপালগঞ্জ",
      "id": 21
    },
    {
      "division_id": 9,
      "bbs_code": "39",
      "name_eng": "JAMALPUR",
      "name_bng": "জামালপুর ",
      "id": 22
    },
    {
      "division_id": 3,
      "bbs_code": "48",
      "name_eng": "KISHOREGONJ",
      "name_bng": "কিশোরগঞ্জ ",
      "id": 23
    },
    {
      "division_id": 3,
      "bbs_code": "54",
      "name_eng": "MADARIPUR",
      "name_bng": "মাদারীপুর ",
      "id": 24
    },
    {
      "division_id": 3,
      "bbs_code": "56",
      "name_eng": "MANIKGANJ",
      "name_bng": "মানিকগঞ্জ ",
      "id": 25
    },
    {
      "division_id": 3,
      "bbs_code": "59",
      "name_eng": "MUNSHIGANJ",
      "name_bng": "মুন্সিগঞ্জ ",
      "id": 26
    },
    {
      "division_id": 9,
      "bbs_code": "61",
      "name_eng": "MYMENSINGH",
      "name_bng": "ময়মনসিংহ ",
      "id": 27
    },
    {
      "division_id": 3,
      "bbs_code": "67",
      "name_eng": "NARAYANGANJ",
      "name_bng": "নারায়ণগঞ্জ ",
      "id": 28
    },
    {
      "division_id": 3,
      "bbs_code": "68",
      "name_eng": "NARSINGDI",
      "name_bng": "নরসিংদী ",
      "id": 29
    },
    {
      "division_id": 9,
      "bbs_code": "72",
      "name_eng": "NETRAKONA",
      "name_bng": "নেত্রকোণা ",
      "id": 30
    },
    {
      "division_id": 3,
      "bbs_code": "82",
      "name_eng": "RAJBARI",
      "name_bng": "রাজবাড়ী ",
      "id": 31
    },
    {
      "division_id": 3,
      "bbs_code": "86",
      "name_eng": "SHARIATPUR",
      "name_bng": "শরীয়তপুর  ",
      "id": 32
    },
    {
      "division_id": 9,
      "bbs_code": "89",
      "name_eng": "SHERPUR",
      "name_bng": "শেরপুর ",
      "id": 33
    },
    {
      "division_id": 3,
      "bbs_code": "93",
      "name_eng": "TANGAIL",
      "name_bng": "টাঙ্গাইল ",
      "id": 34
    },
    {
      "division_id": 4,
      "bbs_code": "01",
      "name_eng": "BAGERHAT",
      "name_bng": "বাগেরহাট",
      "id": 35
    },
    {
      "division_id": 4,
      "bbs_code": "18",
      "name_eng": "CHUADANGA",
      "name_bng": "চুয়াডাঙ্গা ",
      "id": 36
    },
    {
      "division_id": 4,
      "bbs_code": "41",
      "name_eng": "JESSORE",
      "name_bng": "যশোর ",
      "id": 37
    },
    {
      "division_id": 4,
      "bbs_code": "44",
      "name_eng": "JHENAIDAH",
      "name_bng": "ঝিনাইদহ ",
      "id": 38
    },
    {
      "division_id": 4,
      "bbs_code": "47",
      "name_eng": "KHULNA",
      "name_bng": "খুলনা ",
      "id": 39
    },
    {
      "division_id": 4,
      "bbs_code": "50",
      "name_eng": "KUSHTIA",
      "name_bng": "কুষ্টিয়া ",
      "id": 40
    },
    {
      "division_id": 4,
      "bbs_code": "55",
      "name_eng": "MAGURA",
      "name_bng": "মাগুরা",
      "id": 41
    },
    {
      "division_id": 4,
      "bbs_code": "57",
      "name_eng": "MEHERPUR",
      "name_bng": "মেহেরপুর ",
      "id": 42
    },
    {
      "division_id": 4,
      "bbs_code": "65",
      "name_eng": "NARAIL",
      "name_bng": "নড়াইল ",
      "id": 43
    },
    {
      "division_id": 4,
      "bbs_code": "87",
      "name_eng": "SATKHIRA",
      "name_bng": "সাতক্ষীরা ",
      "id": 44
    },
    {
      "division_id": 5,
      "bbs_code": "10",
      "name_eng": "BOGRA",
      "name_bng": "বগুড়া ",
      "id": 45
    },
    {
      "division_id": 5,
      "bbs_code": "38",
      "name_eng": "JOYPURHAT",
      "name_bng": "জয়পুরহাট",
      "id": 46
    },
    {
      "division_id": 5,
      "bbs_code": "64",
      "name_eng": "NAOGAON",
      "name_bng": "নওগাঁ ",
      "id": 47
    },
    {
      "division_id": 5,
      "bbs_code": "69",
      "name_eng": "NATORE",
      "name_bng": "নাটোর ",
      "id": 48
    },
    {
      "division_id": 5,
      "bbs_code": "70",
      "name_eng": "CHAPAI NABABGANJ",
      "name_bng": "চাঁপাই নাবাবগঞ্জ ",
      "id": 49
    },
    {
      "division_id": 5,
      "bbs_code": "76",
      "name_eng": "PABNA",
      "name_bng": "পাবনা",
      "id": 50
    },
    {
      "division_id": 5,
      "bbs_code": "81",
      "name_eng": "RAJSHAHI",
      "name_bng": "রাজশাহী ",
      "id": 51
    },
    {
      "division_id": 5,
      "bbs_code": "88",
      "name_eng": "SIRAJGANJ",
      "name_bng": "সিরাজগঞ্জ",
      "id": 52
    },
    {
      "division_id": 6,
      "bbs_code": "27",
      "name_eng": "DINAJPUR",
      "name_bng": "দিনাজপুর ",
      "id": 53
    },
    {
      "division_id": 6,
      "bbs_code": "32",
      "name_eng": "GAIBANDHA",
      "name_bng": "গাইবান্ধা ",
      "id": 54
    },
    {
      "division_id": 6,
      "bbs_code": "49",
      "name_eng": "KURIGRAM",
      "name_bng": "কুড়িগ্রাম ",
      "id": 55
    },
    {
      "division_id": 6,
      "bbs_code": "52",
      "name_eng": "LALMONIRHAT",
      "name_bng": "লালমনিরহাট ",
      "id": 56
    },
    {
      "division_id": 6,
      "bbs_code": "73",
      "name_eng": "NILPHAMARI",
      "name_bng": "নীলফামারী",
      "id": 57
    },
    {
      "division_id": 6,
      "bbs_code": "77",
      "name_eng": "PANCHAGARH",
      "name_bng": "পঞ্চগড় ",
      "id": 58
    },
    {
      "division_id": 6,
      "bbs_code": "85",
      "name_eng": "RANGPUR",
      "name_bng": "রংপুর ",
      "id": 59
    },
    {
      "division_id": 6,
      "bbs_code": "94",
      "name_eng": "THAKURGAON",
      "name_bng": "ঠাকুরগাঁও",
      "id": 60
    },
    {
      "division_id": 7,
      "bbs_code": "36",
      "name_eng": "HABIGANJ",
      "name_bng": "হবিগঞ্জ ",
      "id": 61
    },
    {
      "division_id": 7,
      "bbs_code": "58",
      "name_eng": "MAULVIBAZAR",
      "name_bng": "মৌলভীবাজার ",
      "id": 62
    },
    {
      "division_id": 7,
      "bbs_code": "90",
      "name_eng": "SUNAMGANJ",
      "name_bng": "সুনামগঞ্জ ",
      "id": 63
    },
    {
      "division_id": 7,
      "bbs_code": "91",
      "name_eng": "SYLHET",
      "name_bng": "সিলেট",
      "id": 64
    }
  ]
}
```
