## End-point: {{domain}}/api/v1/office/units/

### Method: POST

> ```
>{{domain}}/api/v1/office/units/
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param      | Value | Type | Comment                                                                |
|------------|-------|------|------------------------------------------------------------------------|
| office_ids |       | int  | Mandatory Parameter. Can be passed as comma seperated value.           |
| unit_ids   |       | int  | Optional Parameter for Search. Can be passed as comma seperated value. |

### Response: 200

```json
{
  "status": "success",
  "data": {
    "58": {
      "office_id": 58,
      "office_layer_id": 14,
      "office_ministry_id": 14,
      "units": [
        {
          "office_origin_unit_id": 386,
          "unit_name_bng": "মহাপরিচালকের কার্যালয়",
          "unit_name_eng": "Directorate Office",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 0,
          "unit_nothi_code": "001",
          "unit_level": 0,
          "email": "dg@doict.gov.bd",
          "phone": "+88 02-41024072",
          "mobile": null,
          "fax": "+88 02-55006882",
          "office_unit_id": 4729
        },
        {
          "office_origin_unit_id": 387,
          "unit_name_bng": "অতিরিক্ত মহাপরিচালক",
          "unit_name_eng": "Additional Directorate General",
          "office_unit_category": "অনুবিভাগ",
          "parent_unit_id": 4729,
          "unit_nothi_code": "002",
          "unit_level": 0,
          "email": "adg@doict.gov.bd",
          "phone": "+880 241 024073",
          "mobile": null,
          "fax": "",
          "office_unit_id": 4730
        },
        {
          "office_origin_unit_id": 388,
          "unit_name_bng": "অর্থ ও  প্রশাসন",
          "unit_name_eng": "Finance & Administration",
          "office_unit_category": "অধিশাখা",
          "parent_unit_id": 4730,
          "unit_nothi_code": "004",
          "unit_level": 0,
          "email": "hashem6704@gmail.com",
          "phone": "+880 255 006923",
          "mobile": null,
          "fax": "",
          "office_unit_id": 4731
        },
        {
          "office_origin_unit_id": 390,
          "unit_name_bng": "প্রশাসন",
          "unit_name_eng": "Administration",
          "office_unit_category": "অধিশাখা",
          "parent_unit_id": 4731,
          "unit_nothi_code": "",
          "unit_level": 0,
          "email": "ddadmin@doict.gov.bd",
          "phone": "+880 241 024070",
          "mobile": null,
          "fax": "",
          "office_unit_id": 4732
        },
        {
          "office_origin_unit_id": 392,
          "unit_name_bng": "প্রশাসন শাখা",
          "unit_name_eng": "Administration Section",
          "office_unit_category": "শাখা",
          "parent_unit_id": 4732,
          "unit_nothi_code": "008",
          "unit_level": 0,
          "email": "ddadmin@doict.gov.bd",
          "phone": "+880 241 024070",
          "mobile": null,
          "fax": "",
          "office_unit_id": 4733
        },
        {
          "office_origin_unit_id": 396,
          "unit_name_bng": "সেবা শাখা",
          "unit_name_eng": "Service Section",
          "office_unit_category": "শাখা",
          "parent_unit_id": 4732,
          "unit_nothi_code": "009",
          "unit_level": 0,
          "email": "arshad@doict.gov.bd",
          "phone": "+880 241 024074",
          "mobile": null,
          "fax": "",
          "office_unit_id": 4734
        },
        {
          "office_origin_unit_id": 391,
          "unit_name_bng": "অর্থ",
          "unit_name_eng": "Finance ",
          "office_unit_category": "শাখা",
          "parent_unit_id": 4731,
          "unit_nothi_code": "",
          "unit_level": 0,
          "email": "ddfinance@doict.gov.bd",
          "phone": "+880 241 024070",
          "mobile": null,
          "fax": "",
          "office_unit_id": 4735
        },
        {
          "office_origin_unit_id": 393,
          "unit_name_bng": "অর্থ শাখা ",
          "unit_name_eng": "Finance Section",
          "office_unit_category": "শাখা",
          "parent_unit_id": 4735,
          "unit_nothi_code": "010",
          "unit_level": 0,
          "email": "ddfinance@doict.gov.bd",
          "phone": "+880 241 024070",
          "mobile": null,
          "fax": "",
          "office_unit_id": 4736
        },
        {
          "office_origin_unit_id": 389,
          "unit_name_bng": "পরিকল্পনা ও উন্নয়ন",
          "unit_name_eng": "Planning & Development",
          "office_unit_category": "অধিশাখা",
          "parent_unit_id": 4730,
          "unit_nothi_code": "005",
          "unit_level": 0,
          "email": "ddp&d@doict.gov.bd",
          "phone": "+880 255 006809",
          "mobile": null,
          "fax": "",
          "office_unit_id": 4737
        },
        {
          "office_origin_unit_id": 20229,
          "unit_name_bng": "“সারা দেশের শিক্ষা প্রতিষ্ঠানে কম্পিউটার ও ভাষা প্রশিক্ষণ ল্যাব স্থাপন” প্রকল্প",
          "unit_name_eng": "",
          "office_unit_category": "",
          "parent_unit_id": 4737,
          "unit_nothi_code": "০০০",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 39365
        }
      ]
    },
    "65": {
      "office_id": 65,
      "office_layer_id": 179,
      "office_ministry_id": 14,
      "units": [
        {
          "office_origin_unit_id": 29262,
          "unit_name_bng": "কাস্টোমার ইনোভেশন ল্যাব",
          "unit_name_eng": "",
          "office_unit_category": "",
          "parent_unit_id": 90142,
          "unit_nothi_code": "০০০",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 101980
        },
        {
          "office_origin_unit_id": 29280,
          "unit_name_bng": "ডিজিটাল সার্ভিস-৩",
          "unit_name_eng": "",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 5112,
          "unit_nothi_code": "000",
          "unit_level": 26,
          "email": "",
          "phone": "",
          "mobile": null,
          "fax": "",
          "office_unit_id": 102159
        },
        {
          "office_origin_unit_id": 29282,
          "unit_name_bng": "মাইগভ টিম",
          "unit_name_eng": "",
          "office_unit_category": "",
          "parent_unit_id": 102159,
          "unit_nothi_code": "০০০",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 102164
        },
        {
          "office_origin_unit_id": 29285,
          "unit_name_bng": "সিভিল সার্ভিস ২০৪১ টিম",
          "unit_name_eng": "",
          "office_unit_category": "",
          "parent_unit_id": 102159,
          "unit_nothi_code": "০০০",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 102169
        },
        {
          "office_origin_unit_id": 29274,
          "unit_name_bng": "ডিজিটাল সার্ভিস-১",
          "unit_name_eng": "",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 5112,
          "unit_nothi_code": "000",
          "unit_level": 24,
          "email": "",
          "phone": "",
          "mobile": null,
          "fax": "",
          "office_unit_id": 102172
        },
        {
          "office_origin_unit_id": 29277,
          "unit_name_bng": "ডিজিটাল সার্ভিস-২",
          "unit_name_eng": "",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 5112,
          "unit_nothi_code": "000",
          "unit_level": 25,
          "email": "",
          "phone": "",
          "mobile": null,
          "fax": "",
          "office_unit_id": 102177
        },
        {
          "office_origin_unit_id": 29294,
          "unit_name_bng": "৩৩৩ হট লাইন",
          "unit_name_eng": "",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 102177,
          "unit_nothi_code": "000",
          "unit_level": 25,
          "email": "",
          "phone": "",
          "mobile": null,
          "fax": "",
          "office_unit_id": 102181
        },
        {
          "office_origin_unit_id": 29286,
          "unit_name_bng": "জেলা ব্রান্ডিং টিম",
          "unit_name_eng": "",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 102172,
          "unit_nothi_code": "000",
          "unit_level": 24,
          "email": "",
          "phone": "",
          "mobile": null,
          "fax": "",
          "office_unit_id": 102183
        },
        {
          "office_origin_unit_id": 29291,
          "unit_name_bng": "ই-মোবাইল কোর্ট",
          "unit_name_eng": "",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 102172,
          "unit_nothi_code": "000",
          "unit_level": 24,
          "email": "",
          "phone": "",
          "mobile": null,
          "fax": "",
          "office_unit_id": 102188
        },
        {
          "office_origin_unit_id": 29289,
          "unit_name_bng": "ই-সার্টিফিকেট কোর্ট",
          "unit_name_eng": "",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 102172,
          "unit_nothi_code": "000",
          "unit_level": 24,
          "email": "",
          "phone": "",
          "mobile": null,
          "fax": "",
          "office_unit_id": 102193
        },
        {
          "office_origin_unit_id": 29288,
          "unit_name_bng": "ই-কোর্ট",
          "unit_name_eng": "",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 102172,
          "unit_nothi_code": "000",
          "unit_level": 24,
          "email": "",
          "phone": "",
          "mobile": null,
          "fax": "",
          "office_unit_id": 102198
        },
        {
          "office_origin_unit_id": 29306,
          "unit_name_bng": "রিসার্চ",
          "unit_name_eng": "",
          "office_unit_category": "",
          "parent_unit_id": 90142,
          "unit_nothi_code": "০০০",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 102209
        },
        {
          "office_origin_unit_id": 29319,
          "unit_name_bng": "জি টু বি",
          "unit_name_eng": "",
          "office_unit_category": "",
          "parent_unit_id": 102159,
          "unit_nothi_code": "০০০",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 102214
        },
        {
          "office_origin_unit_id": 29327,
          "unit_name_bng": "আরএমএস",
          "unit_name_eng": "",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 102177,
          "unit_nothi_code": "000",
          "unit_level": 25,
          "email": "",
          "phone": "",
          "mobile": null,
          "fax": "",
          "office_unit_id": 102219
        },
        {
          "office_origin_unit_id": 29328,
          "unit_name_bng": "চতুর্থ শিল্প বিপ্লব",
          "unit_name_eng": "",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 102177,
          "unit_nothi_code": "000",
          "unit_level": 25,
          "email": "",
          "phone": "",
          "mobile": null,
          "fax": "",
          "office_unit_id": 102224
        },
        {
          "office_origin_unit_id": 29331,
          "unit_name_bng": "জিআরএস",
          "unit_name_eng": "",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 102177,
          "unit_nothi_code": "000",
          "unit_level": 25,
          "email": "",
          "phone": "",
          "mobile": null,
          "fax": "",
          "office_unit_id": 102229
        },
        {
          "office_origin_unit_id": 34539,
          "unit_name_bng": "প্রবাস স্মার্ট সেন্টার",
          "unit_name_eng": "Expatriate Smart Center",
          "office_unit_category": "",
          "parent_unit_id": 5112,
          "unit_nothi_code": "০০০",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 162135
        }
      ]
    }
  }
}
```
