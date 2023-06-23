## End-point: {{domain}}/api/v1/ministry/layer/offices/

### Method: POST

> ```
>{{domain}}/api/v1/ministry/layer/offices/
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param       | Value | Type | Comment              |
|-------------|-------|------|----------------------|
| ministry_id | 5     | int  | Mandatory Parameter. |
| layer_id    | 22    | int  | Mandatory Parameter. |

### Response: 200

```json
{
  "status": "success",
  "meta": {
    "total": 61,
    "count": 61,
    "from": 1,
    "to": 61,
    "current_page": 1,
    "per_page": 61,
    "last_page": 1
  },
  "data": [
    {
      "id": 3,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, চট্টগ্রাম",
      "office_name_eng": "Office of the Deputy Commissionar, Chittagong",
      "office_phone": "০৩১- ৬১৯৯৯৬",
      "office_mobile": "01713104332",
      "office_fax": "৮৮-০৩১-৬২০৫৭০, ৮৮-০৩১-৬৩৫২৭২",
      "office_email": "dcchittagong@mopa.gov.bd",
      "office_web": "www.chittagong.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 10,
      "office_address": "জেলা প্রশাসকের কার্যালয়, চট্টগ্রাম",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 6,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, নরসিংদী",
      "office_name_eng": "Office of the Deputy Commissionar, Narsingdi",
      "office_phone": "+৮৮০২৯৪৬২৫০০",
      "office_mobile": "",
      "office_fax": "+৮৮০২৯৪৬৪৪৩৩",
      "office_email": "dcnarsingdi@mopa.gov.bd",
      "office_web": "http://www.narsingdi.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 11,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, জামালপুর",
      "office_name_eng": "Office of the Deputy Commissioner, Jamalpur",
      "office_phone": "০৯৮১-৬৩১৮৮",
      "office_mobile": "০১৭১৩-০৬১১০০",
      "office_fax": "০২৯৯ ৭৭৭ ২১২৩",
      "office_email": "dcjamalpur@mopa.gov.bd",
      "office_web": "www.jamalpur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 560,
      "office_address": "",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 60,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, কুমিল্লা",
      "office_name_eng": "DCO, Comilla",
      "office_phone": "",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "dccomilla@mopa.gov.bd",
      "office_web": "www.comilla.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 10,
      "office_address": "জেলা প্রশাসকের কার্যালয়, কুমিল্লা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 85,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, সিলেট",
      "office_name_eng": "Office of the Deputy Commissioner, Sylhet",
      "office_phone": "",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "dcsylhet@mopa.gov.bd",
      "office_web": "www.sylhet.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 137,
      "office_address": "সিলেট",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 86,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, ঝিনাইদহ",
      "office_name_eng": "DC Office, Jhenaidah",
      "office_phone": "০২৪৭৭৭৪৬৮৮৮",
      "office_mobile": "০১৭১৫-২১৩০৪১",
      "office_fax": "০৪৫১-৬১৬০০",
      "office_email": "dcjhenaidah@mopa.gov.bd",
      "office_web": "www.jhenaidah.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 39,
      "office_address": "",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 93,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, চাঁদপুর",
      "office_name_eng": "Office of the Deputy Commissioner, Chandpur",
      "office_phone": "+02334485611",
      "office_mobile": "+8801730067050",
      "office_fax": "+02334486333",
      "office_email": "dcchandpur@mopa.gov.bd ",
      "office_web": "www.chandpur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 10,
      "office_address": "চাঁদপুর",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 107,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, রাজবাড়ী",
      "office_name_eng": "Office of the Deputy Commissioner, Rajbari",
      "office_phone": "০২-৪৭৮৮০৭৫৩৩",
      "office_mobile": "",
      "office_fax": "০২-৪৭৮৮০৮০৫৯",
      "office_email": "dcrajbari@mopa.gov.bd",
      "office_web": "www.rajbari.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "রাজবাড়ী",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 109,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, বগুড়া",
      "office_name_eng": "Office of the Deputy Commissioner, Bogra",
      "office_phone": "০২৫৮৯৯০০০২০",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "dcbogura@mopa.gov.bd",
      "office_web": "www.bogra.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 108,
      "office_address": "বগুড়া",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 111,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, সিরাজগঞ্জ",
      "office_name_eng": "Office of the Deputy Commissioner, Sirajganj",
      "office_phone": "02-588830335",
      "office_mobile": "01713-202046",
      "office_fax": "",
      "office_email": "dcsirajganj@mopa.gov.bd",
      "office_web": "www.sirajganj.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 108,
      "office_address": "সিরাজগঞ্জ",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 136,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, বরিশাল",
      "office_name_eng": "Office of the Deputy Commissioner, Barisal",
      "office_phone": "০২৪৭৮৮৬৪২৫৯",
      "office_mobile": "০১৭০৫৪০৬৫০১",
      "office_fax": "০৪৩১-৬৪৩৬৭",
      "office_email": "dcbarishal@mopa.gov.bd",
      "office_web": "www.barisal.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 412,
      "office_address": "বান্দ রোড, বরিশাল",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 138,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, সুনামগঞ্জ",
      "office_name_eng": "Office of the Deputy Commissioner, Sunamganj",
      "office_phone": "০২-৯৯৬৬০০৯০০",
      "office_mobile": "01713301178",
      "office_fax": "০২৯৯৬৬০০৯০৪",
      "office_email": "dcsunamganj@mopa.gov.bd",
      "office_web": "www.sunamganj.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 137,
      "office_address": "জেলা প্রশাসকের কার্যালয়, সুনামগঞ্জ। ",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 141,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, দিনাজপুর",
      "office_name_eng": "DC Office, Dinajpur",
      "office_phone": "০২৫৮৯৯২৫০০১",
      "office_mobile": "০১৭১৩২০১৬৮৫",
      "office_fax": "",
      "office_email": "dcdinajpur@mopa.gov.bd",
      "office_web": "www.dinajpur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 61,
      "office_address": "",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 176,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, মুন্সিগঞ্জ",
      "office_name_eng": "DC Office Munshiganj",
      "office_phone": "০২-৯৯৭৭৩১১০০",
      "office_mobile": "০১৭৬২৬৮৭২৫০",
      "office_fax": "০২-৯৯৭৭৩১২২৭ ",
      "office_email": "dcmunshiganj@mopa.gov.bd ",
      "office_web": "www.munshiganj.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 196,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, নারায়ণগঞ্জ",
      "office_name_eng": "DC Office Narayanganj",
      "office_phone": "+৮৮০২-৭৬৪৬৬৪৪",
      "office_mobile": "০১৭১৩০৮১৩৫৩",
      "office_fax": "+৮৮০২-৭৬৪৬৭৫২",
      "office_email": "dcnarayanganj@mopa.gov.bd ",
      "office_web": "www.narayanganj.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "জেলা প্রশাসকের কার্যালয়, নারায়ণগঞ্জ",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 197,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, খুলনা",
      "office_name_eng": "DC office khulna",
      "office_phone": "০২৪৭৭৭২১১১১",
      "office_mobile": "০১৭১৩৪০১০১০",
      "office_fax": "",
      "office_email": "dckhulna@mopa.gov.bd",
      "office_web": "www.khulna.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 39,
      "office_address": "জেলা প্রশাসকের কার্যালয়, খুলনা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 198,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, সাতক্ষীরা",
      "office_name_eng": "DC Office Satkhira",
      "office_phone": "02477741071",
      "office_mobile": "",
      "office_fax": "0471-64008",
      "office_email": "dcsatkhira@mopa.gov.bd",
      "office_web": "www.satkhira.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 39,
      "office_address": "জেলা প্রশাসকের কার্যালয়, সাতক্ষীরা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 405,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, ঢাকা",
      "office_name_eng": "DC office Dhaka",
      "office_phone": "০২-২২৩৩৮৯৭৮৬",
      "office_mobile": "",
      "office_fax": "০২-২২৩৩৯০৫৬২",
      "office_email": "dcdhaka@mopa.gov.bd ",
      "office_web": "www.dhaka.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "জেলা প্রশাসকের কার্যালয়, ঢাকা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 406,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, লালমনিরহাট",
      "office_name_eng": "DC office Lalmonirhat",
      "office_phone": "০২৫৮৯৯৮৬৭৭৭",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "dclalmonirhat@mopa.gov.bd",
      "office_web": "www.lalmonirhat.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 61,
      "office_address": "জেলা প্রশাসকের কার্যালয়, লালমনিরহাট",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 407,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, ব্রাহ্মণবাড়িয়া",
      "office_name_eng": "DC office, Brahmanbaria",
      "office_phone": "০২-৩৩৪৪২৭৭১২",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "dcbrahmanbaria@mopa.gov.bd ",
      "office_web": "www.brahmanbaria.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 10,
      "office_address": "",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 413,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, ভোলা",
      "office_name_eng": "Deputy Commissioners Office, Bhola",
      "office_phone": "049162400",
      "office_mobile": "01715211899",
      "office_fax": "049162626",
      "office_email": "dcbhola@mopa.gov.bd",
      "office_web": "www.bhola.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 412,
      "office_address": "",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 416,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, ঝালকাঠি",
      "office_name_eng": "DC office Jhalkathi",
      "office_phone": "০২৪৭৮৮৭৫৩০০",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "dcjhalokati@mopa.gov.bd",
      "office_web": "www.jhalakati.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 412,
      "office_address": "জেলা প্রশাসকের কার্যালয়, ঝালকাঠি",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 417,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, নাটোর",
      "office_name_eng": "DC Office Natore",
      "office_phone": "০২৫৮৮৮-৭৩৭৪১",
      "office_mobile": "",
      "office_fax": "০২৫৮৮৮-৭২৩১৭",
      "office_email": "dcnatore@mopa.gov.bd",
      "office_web": "www.natore.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 108,
      "office_address": "জেলা প্রশাসকের কার্যালয়, নাটোর",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 423,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, রাঙ্গামাটি",
      "office_name_eng": "DC office Rangamati",
      "office_phone": "০২৩৩৩৩৭১৬৩২",
      "office_mobile": "",
      "office_fax": "০২৩৩৩৩৭১৬০৬",
      "office_email": "dcrangamati@mopa.gov.bd",
      "office_web": "www.rangamati.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 10,
      "office_address": "জেলা প্রশাসকের কার্যালয়, রাঙ্গামাটি",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 424,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, কক্সবাজার।",
      "office_name_eng": "DC Office Coxsbazar",
      "office_phone": "০৩৪১৬৩২০০",
      "office_mobile": "০১৭১৩১৬০০৯৩",
      "office_fax": "০৩৪১৬৩২৬৩",
      "office_email": "dccoxsbazar@mopa.gov.bd",
      "office_web": "www.coxsbazar.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 10,
      "office_address": "জেলা প্রশাসকের কার্যালয়, কক্সবাজার।",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 426,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, বাগেরহাট",
      "office_name_eng": "DC Office, Bagerhat",
      "office_phone": "০২৪৭৭৭৫২৫১৫",
      "office_mobile": "০১৭২০৪৬০৪০৬",
      "office_fax": "০২৪৭৭৭৫২৬১৩",
      "office_email": "dcbagerhat@mopa.gov.bd",
      "office_web": "www.bagerhat.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 39,
      "office_address": "জেলা প্রশাসকের কার্যালয়, বাগেরহাট",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 427,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, মাগুরা",
      "office_name_eng": "DC Office, Magura",
      "office_phone": "",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "dcmagura@mopa.gov.bd",
      "office_web": "www.magura.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 39,
      "office_address": "জেলা প্রশাসকের কার্যালয়, মাগুরা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 428,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, নোয়াখালী",
      "office_name_eng": "DC Office,Noakhali",
      "office_phone": "০২৩৩৪৪৯১০২১",
      "office_mobile": "০১৭১৩-১২১১৫৪",
      "office_fax": "০৩২১-৬১০৬২",
      "office_email": "dcnoakhali@mopa.gov.bd ",
      "office_web": "www.noakhali.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 10,
      "office_address": "জেলা প্রশাসকের কার্যালয়, নোয়াখালী",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 429,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, ফরিদপুর",
      "office_name_eng": "Office of yhe Deputy Commissioner,  Faridpur",
      "office_phone": "০২৪৭৮৮০৩০২২",
      "office_mobile": "",
      "office_fax": "০৬৩১-৬৩০৮৬",
      "office_email": "dcfaridpur@mopa.gov.bd ",
      "office_web": "www.faridpur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "জেলা প্রশাসকের কার্যালয়, ফরিদপুর",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 431,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, গাজীপুর",
      "office_name_eng": "DC Office Gazipur",
      "office_phone": "+৮৮-০২-৪৯২৭৩০৭০",
      "office_mobile": "",
      "office_fax": "+৮৮-০২-৪৯২৭৩০২২",
      "office_email": "dcgazipur@mopa.gov.bd ",
      "office_web": "www.gazipur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "জেলা প্রশাসকের কার্যালয়, গাজীপুর",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 432,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, গোপালগঞ্জ",
      "office_name_eng": "DC Office Gopalgonj",
      "office_phone": "02478821720",
      "office_mobile": "01715168498",
      "office_fax": "02478821655",
      "office_email": "dcgopalganj@mopa.gov.bd",
      "office_web": "www.gopalganj.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "জেলা প্রশাসকের কার্যালয়, গোপালগঞ্জ",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 433,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, কিশোরগঞ্জ",
      "office_name_eng": "DC Office, Kishoregonj",
      "office_phone": "০৯৪১-৬১৭৫৫ ",
      "office_mobile": "০১৭১৩৪৫৭৩৫৭",
      "office_fax": "০৯৪১-৬১৭২২ ",
      "office_email": "dckishoreganj@mopa.gov.bd ",
      "office_web": "www.kishoreganj.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "জেলা প্রশাসকের কার্যালয়, কিশোরগঞ্জ ",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 434,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, টাঙ্গাইল",
      "office_name_eng": "DC Office Tangail",
      "office_phone": "+৮৮০২৯৯৭৭১৪৯০২",
      "office_mobile": "০১৭১৫২২৮৫৬৬",
      "office_fax": "+৮৮০২৯৯৭৭১৪৯০৩",
      "office_email": "dctangail@mopa.gov.bd ",
      "office_web": "www.tangail.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "জেলা প্রশাসকের কার্যালয়, টাঙ্গাইল",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 435,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, গাইবান্ধা",
      "office_name_eng": "DC Office Gaibandha",
      "office_phone": "০৫৪১৫১২২৬",
      "office_mobile": "০১৭১৮৪৪৪৪০৯০",
      "office_fax": "",
      "office_email": "dcgaibandha@mopa.gov.bd",
      "office_web": "www.gaibandha.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 61,
      "office_address": "জেলা প্রশাসকের কার্যালয়, গাইবান্ধা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 436,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, চাঁপাইনবাবগঞ্জ",
      "office_name_eng": "DC office Chapainoyabgonj",
      "office_phone": "০৭৮১৫২৩০০",
      "office_mobile": "০১৭১৫০৩৯৯১৪",
      "office_fax": "০৭৮১৫১০৩২",
      "office_email": "dcchapainawabganj@mopa.gov.bd",
      "office_web": "www.chapainawabganj.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 108,
      "office_address": "জেলা প্রশাসকের কার্যালয়, চাঁপাইনবাবগঞ্জ",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 437,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, রাজশাহী",
      "office_name_eng": "DC Office Rajshahi",
      "office_phone": "02588857050",
      "office_mobile": "01713200569",
      "office_fax": "02588854685",
      "office_email": "dcrajshahi@mopa.gov.bd",
      "office_web": "www.rajshahi.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 108,
      "office_address": "জেলা প্রশাসকের কার্যালয়, রাজশাহী",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 438,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, পাবনা",
      "office_name_eng": "DC Office Pabna",
      "office_phone": "০৭৩১-৬৫৪৯৯",
      "office_mobile": "০১৭১৩২০০৮৬৩",
      "office_fax": "০৭৩১-৬৬২২৮",
      "office_email": "dcpabna@mopa.gov.bd",
      "office_web": "www.pabna.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 108,
      "office_address": "পাবনা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 441,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, পটুয়াখালী",
      "office_name_eng": "DC Office, Patuakhali",
      "office_phone": "02478880565",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "dcpatuakhali@mopa.gov.bd",
      "office_web": "www.patuakhali.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 412,
      "office_address": "জেলা প্রশাসকের কার্যালয়, পটুয়াখালী",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 484,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, কুষ্টিয়া",
      "office_name_eng": "DC Office, Kushtia.",
      "office_phone": "০৭১-৬২৩০০",
      "office_mobile": "01715468646",
      "office_fax": "০৭১-৭২৪১৪",
      "office_email": "dckushtia@mopa.gov.bd",
      "office_web": "www.kushtia.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 39,
      "office_address": "কুষ্টিয়া",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 561,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, ময়মনসিংহ",
      "office_name_eng": "DC Office, Mymensingh",
      "office_phone": "+৮৮০৯১৬৫৭৭৭",
      "office_mobile": "০১৭১৩০০৯৬০২",
      "office_fax": "০৯১৬৬০৩৪",
      "office_email": "dcmymensingh@mopa.gov.bd",
      "office_web": "www.mymensingh.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 560,
      "office_address": "জেলা প্রশাসকের কার্যালয়, ময়মনসিংহ",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 569,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, পঞ্চগড়",
      "office_name_eng": "DC Office, Panchagarh",
      "office_phone": "",
      "office_mobile": "০১৭১৩২০০৮০৩",
      "office_fax": "",
      "office_email": "dcpanchagarh@mopa.gov.bd",
      "office_web": "www.panchagarh.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 61,
      "office_address": "জেলা প্রশাসকের কার্যালয়, পঞ্চগড়",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 574,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয় , হবিগঞ্জ",
      "office_name_eng": "DC Office, Habiganj",
      "office_phone": "০২৯৯৬৬০৬১০০",
      "office_mobile": "",
      "office_fax": "০৮৩১-৬১২০৫",
      "office_email": "dchabiganj@mopa.gov.bd",
      "office_web": "www.habiganj.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 137,
      "office_address": "জেলা প্রশাসকের কার্যালয় , হবিগঞ্জ",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 580,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, নীলফামারী",
      "office_name_eng": "Office of the Deputy Commissioner, Nilphamari",
      "office_phone": "০২৫৮৯৯৫৫৩০০",
      "office_mobile": "০১৭১৫০৮১৪৮০",
      "office_fax": "০৫৫১-৬১৫৪৮,০৫৫১-৬১৩১২(অ)",
      "office_email": "dcnilphamari@mopa.gov.bd",
      "office_web": "www.nilphamari.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 61,
      "office_address": "জেলা প্রশাসকের কার্যালয়, নীলফামারী",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 581,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, মৌলভীবাজার",
      "office_name_eng": "DC Office, Moulvibazar",
      "office_phone": "০২৯৯৬৬৮৩২০২ (অফিস)/০২৯৯৬৬৮৩২০১ (বাংলো)",
      "office_mobile": "০১৭১৫১৭১৭৮৬",
      "office_fax": "০২৯৯৬৬৮২৯৬৬",
      "office_email": "dcmoulvibazar@mopa.gov.bd",
      "office_web": "www.moulvibazar.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 137,
      "office_address": "কোর্ট রোড, মৌলভীবাজার",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 814,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, নওগাঁ",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, নওগাঁ",
      "office_phone": "০২৫৮৮৮৮৪০০০ ",
      "office_mobile": "+৮৮০১৭১৫-২৯২৩৭৭",
      "office_fax": " ",
      "office_email": "dcnaogaon@mopa.gov.bd",
      "office_web": "www.naogaon.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 108,
      "office_address": "জেলা প্রশাসকের কার্যালয়, নওগাঁ",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 817,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, জয়পুরহাট",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, জয়পুরহাট",
      "office_phone": "০২৫৮৯৯১৫০৫১",
      "office_mobile": "",
      "office_fax": "(+৮৮)০৫৭১-৬২৫৪৬",
      "office_email": "dcjoypurhat@mopa.gov.bd",
      "office_web": "www.joypurhat.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 108,
      "office_address": "জেলা প্রশাসকের কার্যালয়, জয়পুরহাট",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 821,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, ঠাকুরগাঁও",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, ঠাকুরগাঁও",
      "office_phone": "0561-52011",
      "office_mobile": "01708368640",
      "office_fax": "0561-53601",
      "office_email": "dcthakurgaon@mopa.gov.bd ",
      "office_web": "www.thakurgaon.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 61,
      "office_address": "জেলা প্রশাসকের কার্যালয়, ঠাকুরগাঁও",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 823,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, কুড়িগ্রাম",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, কুড়িগ্রাম",
      "office_phone": "০২৫৮৯৯-৫০০২২",
      "office_mobile": "০১৭০৯৯৭৪৫০০",
      "office_fax": "০২৫৮৯৯-৫০০২৩",
      "office_email": "dckurigram@mopa.gov.bd ",
      "office_web": "www.kurigram.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 61,
      "office_address": "জেলা প্রশাসকের কার্যালয়, কুড়িগ্রাম",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 824,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, শেরপুর",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, শেরপুর",
      "office_phone": "+৮৮-০২৯৯৭৭৮১৯০০",
      "office_mobile": "+৮৮০১৭১১-৫৯৪৯০১",
      "office_fax": "+৮৮-০২৯৯৭৭৮১০২৯",
      "office_email": "dcsherpur@mopa.gov.bd ",
      "office_web": "www.sherpur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 560,
      "office_address": "জেলা প্রশাসকের কার্যালয়, শেরপুর",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 826,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, শরীয়তপুর",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, শরীয়তপুর",
      "office_phone": "০২-৪৭৮৮১৫১৪১",
      "office_mobile": "+৮৮০১৭১৫১৯৩৮৯৩",
      "office_fax": "০২-৪৭৮৮১৫১৪৫",
      "office_email": "dcshariatpur@mopa.gov.bd ",
      "office_web": "www.shariatpur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "জেলা প্রশাসকের কার্যালয়, শরীয়তপুর",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 827,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, নেত্রকোণা",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, নেত্রকোণা",
      "office_phone": "02996651634",
      "office_mobile": "01715123128",
      "office_fax": "02996651441",
      "office_email": "dcnetrokona@mopa.gov.bd ",
      "office_web": "www.netrokona.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 560,
      "office_address": "জেলা প্রশাসকের কার্যালয়, নেত্রকোণা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 829,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, মাদারীপুর",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, মাদারীপুর",
      "office_phone": "০২৪৭৮৮১০৭৭৭",
      "office_mobile": "+৮৮০১৭২৬৬০৪২২২",
      "office_fax": "+৮৮০৬৬১-৬২২৭৪",
      "office_email": "dcmadaripur@mopa.gov.bd ",
      "office_web": "www.madaripur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 5,
      "office_address": "জেলা প্রশাসকের কার্যালয়, মাদারীপুর",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 830,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, বান্দরবান পার্বত্য জেলা",
      "office_name_eng": "Office of the Deputy Commissioner, Bandarban Hill District",
      "office_phone": "০২৩৩৩৩০২১০১",
      "office_mobile": "০১৫৫৬৭৬৬৬৬৬",
      "office_fax": "০২৩৩৩৩০২৭০২",
      "office_email": "dcbandarban@mopa.gov.bd ",
      "office_web": "www.bandarban.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 10,
      "office_address": "জেলা প্রশাসকের কার্যালয়, বান্দরবান পার্বত্য জেলা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 832,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, নড়াইল",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, নড়াইল",
      "office_phone": "02477773301",
      "office_mobile": "01715082947",
      "office_fax": "02477773010",
      "office_email": "dcnarail@mopa.gov.bd ",
      "office_web": "www.narail.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 39,
      "office_address": "জেলা প্রশাসকের কার্যালয়, নড়াইল।",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 834,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, মেহেরপুর",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, মেহেরপুর",
      "office_phone": "০৭৯১৬২৩০১",
      "office_mobile": "০১৭০৮৪১০০০০",
      "office_fax": "০৭৯১৬২৮৭১",
      "office_email": "dcmeherpur@mopa.gov.bd ",
      "office_web": "www.meherpur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 39,
      "office_address": "জেলা প্রশাসকের কার্যালয়, মেহেরপুর",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 837,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, চুয়াডাঙ্গা",
      "office_name_eng": "DC Office, Chuadanga",
      "office_phone": "০২৪৭৭-৭৮৮৭১১",
      "office_mobile": "",
      "office_fax": "০৭৬১৬২৬৬৬ ",
      "office_email": "dcchuadanga@mopa.gov.bd ",
      "office_web": "www.chuadanga.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 39,
      "office_address": "জেলা প্রশাসকের কার্যালয়, চুয়াডাঙ্গা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 846,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, ফেনী",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, ফেনী",
      "office_phone": "02334474000",
      "office_mobile": "01713187300",
      "office_fax": "02334475018",
      "office_email": "dcfeni@mopa.gov.bd",
      "office_web": "www.feni.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 10,
      "office_address": "বারাহিপুর, ফেনী",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 850,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, লক্ষ্মীপুর",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, লক্ষ্মীপুর",
      "office_phone": "০৩৮১-৬২৪১০",
      "office_mobile": "০১৭৮৮৫৭৭৭০১",
      "office_fax": "০৩৮১-৬২৪৩০",
      "office_email": "dclakshmipur@mopa.gov.bd ",
      "office_web": "www.lakshmipur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 10,
      "office_address": "জেলা প্রশাসকের কার্যালয়, লক্ষ্মীপুর।",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 851,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, খাগড়াছড়ি",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, খাগড়াছড়ি",
      "office_phone": "০৩৭১-৬১৮১১",
      "office_mobile": "০১৫৫০৬০৪৫০০",
      "office_fax": "০৩৭১-৬১৩২৮",
      "office_email": "dckhagrachari@mopa.gov.bd",
      "office_web": "www.khagrachhari.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 10,
      "office_address": "জেলা প্রশাসকের কার্যালয়, খাগড়াছড়ি",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 911,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, পিরোজপুর",
      "office_name_eng": "DC Office, Pirojpur",
      "office_phone": "০২৪৭৮৮৯০৪০০",
      "office_mobile": "০১৭১৫১০৮৮০৫",
      "office_fax": "",
      "office_email": "dcpirojpur@mopa.gov.bd",
      "office_web": "www.pirojpur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 412,
      "office_address": "জেলা প্রশাসকের কার্যালয়, পিরোজপুর",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    },
    {
      "id": 1107,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, বরগুনা",
      "office_name_eng": "জেলা প্রশাসকের কার্যালয়, বরগুনা",
      "office_phone": "",
      "office_mobile": "01733348080",
      "office_fax": "",
      "office_email": "dcbarguna@mopa.gov.bd",
      "office_web": "www.barguna.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 22,
      "office_origin_id": 16,
      "custom_layer_id": 25,
      "parent_office_id": 412,
      "office_address": "জেলা প্রশাসকের কার্যালয়, বরগুনা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 22,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা কার্যালয়",
        "layer_level": 5
      }
    }
  ]
}
```
