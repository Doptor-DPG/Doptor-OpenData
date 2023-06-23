## End-point: {{domain}}/api/v1/ministries/

### Method: POST

> ```
>{{domain}}/api/v1/ministries/
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param       | Value | Type | Comment                        |
|-------------|-------|------|--------------------------------|
| ministry_id |       | int  | Optional Parameter for Search. |
| search      |       | text | Optional Parameter for Search. |

### Response: 200

```json
{
  "status": "success",
  "meta": {
    "total": 50,
    "count": 50,
    "from": 1,
    "to": 50,
    "current_page": 1,
    "per_page": 50,
    "last_page": 1
  },
  "data": [
    {
      "id": 1,
      "name_eng": "Office of the President of Bangladesh",
      "name_bng": "রাষ্ট্রপতির কার্যালয়",
      "name_eng_short": "BANGABHABAN",
      "reference_code": "০২",
      "office_type": 1
    },
    {
      "id": 3,
      "name_eng": "Prime Minister's Office",
      "name_bng": "প্রধানমন্ত্রীর কার্যালয়",
      "name_eng_short": "PMO",
      "reference_code": "০৩",
      "office_type": 1
    },
    {
      "id": 4,
      "name_eng": "Cabinet Division",
      "name_bng": "মন্ত্রিপরিষদ বিভাগ",
      "name_eng_short": "CABINET",
      "reference_code": "০৪",
      "office_type": 2
    },
    {
      "id": 5,
      "name_eng": "Ministry of Public Administration",
      "name_bng": "জনপ্রশাসন মন্ত্রণালয়",
      "name_eng_short": "MoPA",
      "reference_code": "০৫",
      "office_type": 1
    },
    {
      "id": 6,
      "name_eng": "Armed Forces Division",
      "name_bng": "সশস্র বাহিনী বিভাগ",
      "name_eng_short": "AFD",
      "reference_code": "০৬",
      "office_type": 2
    },
    {
      "id": 7,
      "name_eng": "Ministry of Finance",
      "name_bng": "অর্থ মন্ত্রণালয়",
      "name_eng_short": "MoF",
      "reference_code": "০৭",
      "office_type": 1
    },
    {
      "id": 10,
      "name_eng": "Ministry of Law, Justice and Parliamentary Affairs",
      "name_bng": "আইন, বিচার ও সংসদ বিষয়ক মন্ত্রণালয় ",
      "name_eng_short": "MoLJPA",
      "reference_code": "১০",
      "office_type": 1
    },
    {
      "id": 12,
      "name_eng": "Ministry of Agriculture",
      "name_bng": "কৃষি মন্ত্রণালয়",
      "name_eng_short": "MoA",
      "reference_code": "১২",
      "office_type": 1
    },
    {
      "id": 13,
      "name_eng": "Ministry of Food",
      "name_bng": "খাদ্য মন্ত্রণালয়",
      "name_eng_short": "MoFOOD",
      "reference_code": "১৩",
      "office_type": 1
    },
    {
      "id": 14,
      "name_eng": "Ministry of Posts, Telecommunications and Information Technology",
      "name_bng": "ডাক, টেলিযোগাযোগ ও তথ্যপ্রযুক্তি মন্ত্রণালয়",
      "name_eng_short": "MoPT",
      "reference_code": "১৪",
      "office_type": 1
    },
    {
      "id": 15,
      "name_eng": "Ministry of Information and Broadcasting",
      "name_bng": "তথ্য ও সম্প্রচার মন্ত্রণালয়",
      "name_eng_short": "Moiab",
      "reference_code": "১৫",
      "office_type": 1
    },
    {
      "id": 16,
      "name_eng": "Ministry of Religious Affairs",
      "name_bng": "ধর্ম বিষয়ক মন্ত্রণালয়",
      "name_eng_short": "MoRA",
      "reference_code": "১৬",
      "office_type": 1
    },
    {
      "id": 17,
      "name_eng": "Election Commission",
      "name_bng": "নির্বাচন কমিশন সচিবালয় ",
      "name_eng_short": "EC",
      "reference_code": "১৭",
      "office_type": 1
    },
    {
      "id": 18,
      "name_eng": "Ministry of Shipping",
      "name_bng": "নৌ-পরিবহন মন্ত্রণালয়",
      "name_eng_short": "MoS",
      "reference_code": "১৮",
      "office_type": 1
    },
    {
      "id": 19,
      "name_eng": "Ministry of Foreign Affairs",
      "name_bng": "পররাষ্ট্র মন্ত্রণালয়",
      "name_eng_short": "MoFA",
      "reference_code": "১৯",
      "office_type": 1
    },
    {
      "id": 20,
      "name_eng": "Ministry of Planning",
      "name_bng": "পরিকল্পনা মন্ত্রণালয়",
      "name_eng_short": "MoP",
      "reference_code": "২০",
      "office_type": 1
    },
    {
      "id": 22,
      "name_eng": " Ministry of Environment, Forest and Climate Change",
      "name_bng": "পরিবেশ, বন ও জলবায়ু পরিবর্তন মন্ত্রণালয়",
      "name_eng_short": "MoEF",
      "reference_code": "২২",
      "office_type": 1
    },
    {
      "id": 23,
      "name_eng": "Ministry of Defense",
      "name_bng": "প্রতিরক্ষা মন্ত্রণালয়",
      "name_eng_short": "MoD",
      "reference_code": "২৩",
      "office_type": 1
    },
    {
      "id": 24,
      "name_eng": "Ministry of Textiles and Jute",
      "name_bng": "বস্ত্র ও পাট মন্ত্রণালয়",
      "name_eng_short": "MoTJ",
      "reference_code": "২৪",
      "office_type": 1
    },
    {
      "id": 25,
      "name_eng": "Ministry of Housing and Public Works",
      "name_bng": "গৃহায়ন ও গণপূর্ত মন্ত্রণালয়",
      "name_eng_short": "MoHPW",
      "reference_code": "২৫",
      "office_type": 1
    },
    {
      "id": 26,
      "name_eng": "Ministry of Commerce",
      "name_bng": "বাণিজ্য মন্ত্রণালয়",
      "name_eng_short": "MINCOM",
      "reference_code": "২৬",
      "office_type": 1
    },
    {
      "id": 27,
      "name_eng": "Ministry of Power, Energy and Mineral Resources",
      "name_bng": "বিদ্যুৎ, জ্বালানি ও খনিজ সম্পদ মন্ত্রণালয়",
      "name_eng_short": "MoPEMR",
      "reference_code": "২৭",
      "office_type": 1
    },
    {
      "id": 29,
      "name_eng": "Ministry of Chittagong Hill Tracts Affairs",
      "name_bng": "পার্বত্য চট্টগ্রাম বিষয়ক মন্ত্রণালয়",
      "name_eng_short": "MoCHTA",
      "reference_code": "২৯",
      "office_type": 1
    },
    {
      "id": 30,
      "name_eng": "Ministry of Civil Aviation and Tourism",
      "name_bng": "বেসামরিক বিমান পরিবহন ও পর্যটন মন্ত্রণালয়",
      "name_eng_short": "MoCAT",
      "reference_code": "৩০",
      "office_type": 1
    },
    {
      "id": 31,
      "name_eng": "  Ministry of Land",
      "name_bng": "ভূমি মন্ত্রণালয়",
      "name_eng_short": "MINLAND",
      "reference_code": "৩১",
      "office_type": 1
    },
    {
      "id": 32,
      "name_eng": "  Ministry of Women and Children Affairs",
      "name_bng": "মহিলা ও শিশু বিষয়ক মন্ত্রণালয়",
      "name_eng_short": "MoWCA",
      "reference_code": "৩২",
      "office_type": 1
    },
    {
      "id": 33,
      "name_eng": "  Ministry of Fisheries and Livestock",
      "name_bng": "মৎস্য ও প্রাণিসম্পদ মন্ত্রণালয়",
      "name_eng_short": "MoFL",
      "reference_code": "৩৩",
      "office_type": 1
    },
    {
      "id": 34,
      "name_eng": "  Ministry of Youth and Sports",
      "name_bng": "যুব ও ক্রীড়া মন্ত্রণালয়",
      "name_eng_short": "MoYSPORTS",
      "reference_code": "৩৪",
      "office_type": 1
    },
    {
      "id": 36,
      "name_eng": "Ministry of Industries",
      "name_bng": "শিল্প মন্ত্রণালয়",
      "name_eng_short": "MoIND",
      "reference_code": "৩৬",
      "office_type": 1
    },
    {
      "id": 37,
      "name_eng": "  Ministry of Education",
      "name_bng": "শিক্ষা মন্ত্রণালয়",
      "name_eng_short": "MoEDU",
      "reference_code": "৩৭",
      "office_type": 1
    },
    {
      "id": 38,
      "name_eng": "  Ministry of Primary and Mass Education",
      "name_bng": "প্রাথমিক ও গণশিক্ষা মন্ত্রণালয়",
      "name_eng_short": "MoPME",
      "reference_code": "৩৮",
      "office_type": 1
    },
    {
      "id": 39,
      "name_eng": "  Ministry of Science and Technology",
      "name_bng": "বিজ্ঞান ও প্রযুক্তি মন্ত্রণালয়",
      "name_eng_short": "MoST",
      "reference_code": "৩৯",
      "office_type": 1
    },
    {
      "id": 40,
      "name_eng": "Ministry of Labour & Employment",
      "name_bng": "শ্রম ও কর্মসংস্থান মন্ত্রণালয়",
      "name_eng_short": "MoLE",
      "reference_code": "৪০",
      "office_type": 1
    },
    {
      "id": 41,
      "name_eng": "  Ministry of Social Welfare",
      "name_bng": "সমাজকল্যাণ মন্ত্রণালয়",
      "name_eng_short": "MoSW",
      "reference_code": "৪১",
      "office_type": 1
    },
    {
      "id": 42,
      "name_eng": "  Ministry of Water Resources",
      "name_bng": "পানি সম্পদ মন্ত্রণালয়",
      "name_eng_short": "MoWR",
      "reference_code": "৪২",
      "office_type": 1
    },
    {
      "id": 43,
      "name_eng": "  Ministry of Cultural Affairs",
      "name_bng": "সংস্কৃতি বিষয়ক মন্ত্রণালয়",
      "name_eng_short": "MoCA",
      "reference_code": "৪৩",
      "office_type": 1
    },
    {
      "id": 44,
      "name_eng": "Ministry of Home Affairs",
      "name_bng": "স্বরাষ্ট্র মন্ত্রণালয়",
      "name_eng_short": "MHA",
      "reference_code": "৪৪",
      "office_type": 1
    },
    {
      "id": 45,
      "name_eng": "Ministry of Health and Family Welfare",
      "name_bng": "স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়",
      "name_eng_short": "MoHFW",
      "reference_code": "৪৫",
      "office_type": 1
    },
    {
      "id": 46,
      "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
      "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়",
      "name_eng_short": "MoLGRDC",
      "reference_code": "৪৬",
      "office_type": 1
    },
    {
      "id": 48,
      "name_eng": "Ministry of Liberation War Affairs",
      "name_bng": "মুক্তিযুদ্ধ বিষয়ক মন্ত্রণালয়",
      "name_eng_short": "MoLWA",
      "reference_code": "৪৮",
      "office_type": 1
    },
    {
      "id": 49,
      "name_eng": "Ministry of Expatriates Welfare and Overseas Employment",
      "name_bng": "প্রবাসী কল্যাণ ও বৈদেশিক কর্মসংস্থান মন্ত্রণালয়",
      "name_eng_short": "MoEWOE",
      "reference_code": "৪৯",
      "office_type": 1
    },
    {
      "id": 51,
      "name_eng": "  Ministry of Disaster Management and Relief",
      "name_bng": "দুর্যোগ ব্যবস্থাপনা ও ত্রাণ মন্ত্রণালয়",
      "name_eng_short": "MoDMR",
      "reference_code": "৫১",
      "office_type": 1
    },
    {
      "id": 54,
      "name_eng": "Ministry of Railways",
      "name_bng": "রেলপথ মন্ত্রণালয়",
      "name_eng_short": "MoR",
      "reference_code": "৫৪",
      "office_type": 1
    },
    {
      "id": 55,
      "name_eng": "Public Division, President Office",
      "name_bng": "জন বিভাগ, রাষ্ট্রপতির কার্যালয়",
      "name_eng_short": "Bangabhaban",
      "reference_code": "০১",
      "office_type": 2
    },
    {
      "id": 56,
      "name_eng": "Supreme Court",
      "name_bng": "সুপ্রিম কোর্ট",
      "name_eng_short": "SC",
      "reference_code": "12",
      "office_type": 1
    },
    {
      "id": 57,
      "name_eng": "ICT Division",
      "name_bng": "তথ্য ও যোগাযোগ প্রযুক্তি বিভাগ",
      "name_eng_short": "ICTD",
      "reference_code": "10",
      "office_type": 2
    },
    {
      "id": 58,
      "name_eng": "Ministry of Roads  Transport and bridge",
      "name_bng": "সড়ক পরিবহন ও সেতু মন্ত্রণালয়",
      "name_eng_short": "MRTB",
      "reference_code": "৫০",
      "office_type": 1
    },
    {
      "id": 62,
      "name_eng": "Bangladesh Parliament",
      "name_bng": "বাংলাদেশ জাতীয় সংসদ",
      "name_eng_short": "BP",
      "reference_code": "১১",
      "office_type": 1
    },
    {
      "id": 63,
      "name_eng": "Demo Ministry",
      "name_bng": "ডেমো মন্ত্রণালয়",
      "name_eng_short": "DM",
      "reference_code": "01",
      "office_type": 1
    },
    {
      "id": 64,
      "name_eng": "Test Ministry 1",
      "name_bng": "টেস্ট মন্ত্রনালয় ১",
      "name_eng_short": "TM1",
      "reference_code": "01",
      "office_type": 1
    }
  ]
}
```
