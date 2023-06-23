## End-point: {{domain}}/api/v1/office/unit/designations/

### Method: POST

> ```
>{{domain}}/api/v1/office/unit/designations/
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param    | Value   | Type | Comment                                                      |
|----------|---------|------|--------------------------------------------------------------|
| unit_ids | 299,300 | int  | Mandatory Parameter. Can be passed as comma seperated value. |

### Response: 200

```json
{
  "status": "success",
  "data": {
    "299": {
      "office_id": 11,
      "office_unit_id": 299,
      "designations": {
        "721": {
          "designation_id": 721,
          "designation_eng": "Stenographer (CA to DC)",
          "designation_bng": "স্টেনোগ্রাফার (সিএ টু ডিসি)",
          "designation_level": 6,
          "designation_sequence": 999,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "1734": {
          "designation_id": 1734,
          "designation_eng": "",
          "designation_bng": "উপ-সহকারী প্রশাসনিক কর্মকর্তা",
          "designation_level": 6,
          "designation_sequence": 999,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "1735": {
          "designation_id": 1735,
          "designation_eng": "",
          "designation_bng": "সহকারী কমিশনার",
          "designation_level": 4,
          "designation_sequence": 1,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": true,
          "is_office_head": false
        },
        "35110": {
          "designation_id": 35110,
          "designation_eng": "Stenographer (CA to DC)",
          "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
          "designation_level": 5,
          "designation_sequence": 999,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "35111": {
          "designation_id": 35111,
          "designation_eng": "CA",
          "designation_bng": "গোপনীয় সহকারী (বাংলো)",
          "designation_level": 5,
          "designation_sequence": 999,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "35112": {
          "designation_id": 35112,
          "designation_eng": "Office Assistant Cum Computer Typist",
          "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
          "designation_level": 5,
          "designation_sequence": 999,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        }
      }
    },
    "300": {
      "office_id": 11,
      "office_unit_id": 300,
      "designations": {
        "722": {
          "designation_id": 722,
          "designation_eng": "ADC",
          "designation_bng": "অতিঃ জেলা প্রশাসক",
          "designation_level": 3,
          "designation_sequence": 1,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "723": {
          "designation_id": 723,
          "designation_eng": "Stenographer",
          "designation_bng": "অফিস সহকারি কাম কম্পিউটার মুদ্রাক্ষরিক",
          "designation_level": 6,
          "designation_sequence": 999,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "725": {
          "designation_id": 725,
          "designation_eng": "MLSS",
          "designation_bng": "-------",
          "designation_level": 7,
          "designation_sequence": 999,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "1711": {
          "designation_id": 1711,
          "designation_eng": "Assistant Commissionar",
          "designation_bng": "-------",
          "designation_level": 4,
          "designation_sequence": 1,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "1726": {
          "designation_id": 1726,
          "designation_eng": "Surveyor",
          "designation_bng": "সার্ভেয়ার",
          "designation_level": 7,
          "designation_sequence": 1,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "1727": {
          "designation_id": 1727,
          "designation_eng": "Tracer",
          "designation_bng": "ট্রেসার",
          "designation_level": 6,
          "designation_sequence": 1,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "1776": {
          "designation_id": 1776,
          "designation_eng": "",
          "designation_bng": "অফিস সহকারী",
          "designation_level": 6,
          "designation_sequence": 999,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "14617": {
          "designation_id": 14617,
          "designation_eng": "Office Assistant",
          "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
          "designation_level": 5,
          "designation_sequence": 3,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "14618": {
          "designation_id": 14618,
          "designation_eng": "Office Assistant",
          "designation_bng": "-------",
          "designation_level": 5,
          "designation_sequence": 3,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "35113": {
          "designation_id": 35113,
          "designation_eng": "",
          "designation_bng": "উচ্চমান সহকারী",
          "designation_level": 5,
          "designation_sequence": 999,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "35114": {
          "designation_id": 35114,
          "designation_eng": "",
          "designation_bng": "সাঁট মুদ্রাক্ষরিক কাম কম্পিউটার অপারেটর",
          "designation_level": 5,
          "designation_sequence": 999,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        },
        "35115": {
          "designation_id": 35115,
          "designation_eng": "Office Assistant",
          "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
          "designation_level": 5,
          "designation_sequence": 3,
          "is_admin": false,
          "is_unit_admin": false,
          "is_unit_head": false,
          "is_office_head": false
        }
      }
    }
  }
}
```
