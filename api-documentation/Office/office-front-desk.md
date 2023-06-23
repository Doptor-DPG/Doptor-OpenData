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

| Param     | Value | Type | Comment             |
|-----------|-------|------|---------------------|
| office_id | 53    | int  | Mandatory Parameter |

### Response: 200

```json
{
  "status": "success",
  "data": {
    "id": 2,
    "office_id": 53,
    "office_name": "প্রধানমন্ত্রীর কার্যালয়",
    "address": "পুরাতন সংসদ ভবন, তেজগাঁও, ঢ়াকা-১২১৫",
    "office_unit_id": 748,
    "office_unit_name": "মহাপরিচালক ৩",
    "office_unit_organogram_id": 1652,
    "designation": "ব‍্যক্তিগত কর্মকতা",
    "officer_name": "মোঃ আব্দুল বারী"
  }
}
```
