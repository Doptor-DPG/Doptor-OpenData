## End-point: {{domain}}/api/v1/office/unit-head-and-admin

### Method: POST

> ```
>{{domain}}/api/v1/office/unit-head-and-admin
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param   | Value | Type | Comment             |
|---------|-------|------|---------------------|
| unit_id | 29372 | int  | Mandatory Parameter |

### Response: 200

```json
{
  "status": "success",
  "data": {
    "unit_admin": {
      "designation_id": 175100,
      "designation_eng": "",
      "designation_bng": "পরিচালক",
      "designation_level": 3,
      "designation_sequence": 7,
      "is_admin": false,
      "is_unit_admin": true,
      "is_unit_head": false,
      "is_office_head": false,
      "incharge_label": "",
      "employee_record": {
        "id": 199258,
        "name_bng": "মোঃ মিজানুর রহমান",
        "name_eng": ""
      },
      "unit": {
        "unit_name_bng": "গবেষণা বিভাগ",
        "unit_name_eng": "",
        "office_unit_category": "অধিশাখা",
        "parent_unit_id": 29350,
        "unit_nothi_code": "০০৬",
        "unit_level": 0,
        "email": "dirresearch@bard.gov.bd",
        "phone": "08160608",
        "fax": "08168406",
        "active_status": 1
      }
    },
    "unit_head": {
      "designation_id": 175102,
      "designation_eng": "",
      "designation_bng": "যুগ্ম-পরিচালক",
      "designation_level": 4,
      "designation_sequence": 3,
      "is_admin": false,
      "is_unit_admin": false,
      "is_unit_head": true,
      "is_office_head": false,
      "incharge_label": "",
      "employee_record": {
        "id": 253626,
        "name_bng": "আবদুল্লাহ আল হুসাইন ",
        "name_eng": "Abdullah Al Hussain"
      },
      "unit": {
        "unit_name_bng": "গবেষণা বিভাগ",
        "unit_name_eng": "",
        "office_unit_category": "অধিশাখা",
        "parent_unit_id": 29350,
        "unit_nothi_code": "০০৬",
        "unit_level": 0,
        "email": "dirresearch@bard.gov.bd",
        "phone": "08160608",
        "fax": "08168406",
        "active_status": 1
      }
    }
  }
}
```
