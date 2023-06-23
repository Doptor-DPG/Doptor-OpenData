## End-point: {{domain}}/api/v1/office/head-and-admin

### Method: POST

> ```
>{{domain}}/api/v1/office/head-and-admin
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param     | Value | Type | Comment             |
|-----------|-------|------|---------------------|
| office_id | 65    | int  | Mandatory Parameter |

### Response: 200

```json
{
  "status": "success",
  "data": {
    "office_admin": {
      "designation_id": 752186,
      "designation_eng": "Programme Assistant",
      "designation_bng": "প্রোগ্রাম অ্যাসিস্ট্যান্ট",
      "designation_level": 999,
      "designation_sequence": 999,
      "is_admin": true,
      "is_unit_admin": false,
      "is_unit_head": false,
      "is_office_head": false,
      "incharge_label": "",
      "employee_record": {
        "id": 369185,
        "name_bng": "মোঃ সজিবুর রহমান সরদার",
        "name_eng": "Md.Shzibur Rahman Sarder"
      },
      "unit": {
        "unit_name_bng": "ই-নথি",
        "unit_name_eng": "e-Nothi",
        "office_unit_category": "অধিশাখা",
        "parent_unit_id": 90139,
        "unit_nothi_code": "013",
        "unit_level": 13,
        "email": "atm.fattah@a2i.gov.bd",
        "phone": "01556631950",
        "fax": "02-55006936",
        "active_status": 1
      }
    },
    "office_head": {
      "designation_id": 12587,
      "designation_eng": "Project Director (Additional Secretary)",
      "designation_bng": "প্রকল্প পরিচালক (অতিরিক্ত সচিব)",
      "designation_level": 1,
      "designation_sequence": 1,
      "is_admin": false,
      "is_unit_admin": false,
      "is_unit_head": false,
      "is_office_head": true,
      "incharge_label": "",
      "employee_record": {
        "id": 409,
        "name_bng": "ড. দেওয়ান মুহাম্মদ হুমায়ূন কবীর",
        "name_eng": "Dr. Dewan Muhammad Humayun Kabir-"
      },
      "unit": {
        "unit_name_bng": "প্রকল্প পরিচালকের দপ্তর",
        "unit_name_eng": "Project Director's Office ",
        "office_unit_category": "দপ্তর",
        "parent_unit_id": 0,
        "unit_nothi_code": "001",
        "unit_level": 1,
        "email": "dewan.kabir@a2i.gov.bd",
        "phone": "55006931",
        "fax": "",
        "active_status": 1
      }
    }
  }
}
```
