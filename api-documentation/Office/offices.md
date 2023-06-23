## End-point: {{domain}}/api/v1/offices

### Method: POST

> ```
>{{domain}}/api/v1/offices
>```

### Headers

| Content-Type | Value            |
|--------------|------------------|
| Accept       | application/json |
| Content-Type | application/json |

### Body formdata

| Param        | Value        | Type | Comment                                                                |
|--------------|--------------|------|------------------------------------------------------------------------|
| office_ids   |              | int  | Optional Parameter for Search. Can be passed as comma seperated value. |
| search       | Commissionar | text | Optional Parameter for Search.                                         |
| layer_levels |              | int  | Optional Parameter for Search.                                         |
| page         | 1            | int  | Page Number for Pagination.                                            |
| per_page     | 25           | int  | Data Count for pagination.                                             |

### Response: 200

```json
{
  "status": "success",
  "meta": {
    "total": 10953,
    "count": 25,
    "from": 1,
    "to": 25,
    "current_page": 1,
    "per_page": 25,
    "last_page": 439
  },
  "data": [
    {
      "id": 3,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, চট্টগ্রাম",
      "office_name_eng": "Office of the Deputy Commissionar, Chittagong",
      "digital_nothi_code": "০৫.৪২.১৫০০",
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
      "id": 5,
      "office_name_bng": "বিভাগীয় কমিশনারের কার্যালয়, ঢাকা",
      "office_name_eng": "Office of the Divisional Commissioner, Dhaka",
      "digital_nothi_code": "05.41.3000",
      "office_phone": "+৮৮০ ২ ৯৩৫০৮৪৪",
      "office_mobile": "01711468104",
      "office_fax": "+৮৮০ ২ ৯৩৪৯৯৯৯",
      "office_email": "divcomdhaka@mopa.gov.bd",
      "office_web": "www.dhakadiv.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 21,
      "office_origin_id": 15,
      "custom_layer_id": 23,
      "parent_office_id": 8,
      "office_address": "১ম ১২তলা সরকারি অফিস ভবন\r\nসেগুনবাগিচা, ঢাকা",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 21,
        "layer_name_eng": "Divisional Office",
        "layer_name_bng": "বিভাগীয় কার্যালয়",
        "layer_level": 4
      }
    },
    {
      "id": 6,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, নরসিংদী",
      "office_name_eng": "Office of the Deputy Commissionar, Narsingdi",
      "digital_nothi_code": "০৫.৩০.৬৮০০",
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
      "id": 8,
      "office_name_bng": "জনপ্রশাসন মন্ত্রণালয়",
      "office_name_eng": "Ministry of Public Administration",
      "digital_nothi_code": "০৫.০০.০০০০",
      "office_phone": "",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "info@mopa.gov.bd",
      "office_web": "www.mopa.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 19,
      "office_origin_id": 12,
      "custom_layer_id": 19,
      "parent_office_id": 0,
      "office_address": "",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 19,
        "layer_name_eng": "Ministry",
        "layer_name_bng": "মন্ত্রণালয়",
        "layer_level": 1
      }
    },
    {
      "id": 9,
      "office_name_bng": "উপজেলা নির্বাহী অফিসারের কার্যালয়, রাঙ্গুনিয়া, চট্টগ্রাম",
      "office_name_eng": "Office of the Upazila Nirbahi Officer, Rangunia",
      "digital_nothi_code": "০৫.৪২.১৫৭০",
      "office_phone": "০৩০২৫৫৬০০১",
      "office_mobile": "01716147056",
      "office_fax": "০৩০২৫৫৬০১০",
      "office_email": "unorangunia@mopa.gov.bd",
      "office_web": "http://rangunia.chittagong.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 23,
      "office_origin_id": 17,
      "custom_layer_id": 27,
      "parent_office_id": 3,
      "office_address": "উপজেলা নির্বাহী অফিসারের কার্যালয়, রাঙ্গুনিয়া, চট্টগ্রাম",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 23,
        "layer_name_eng": "Upazilla Office",
        "layer_name_bng": "উপজেলা কার্যালয়",
        "layer_level": 6
      }
    },
    {
      "id": 10,
      "office_name_bng": "বিভাগীয় কমিশনারের কার্যালয়, চট্টগ্রাম",
      "office_name_eng": "Office of the Divisional Commissioner",
      "digital_nothi_code": "05.42.0000",
      "office_phone": "",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "divcomchittagong@mopa.gov.bd",
      "office_web": "www.chittagongdiv.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 21,
      "office_origin_id": 15,
      "custom_layer_id": 23,
      "parent_office_id": 8,
      "office_address": "কোর্টহিল, চট্টগ্রাম।",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 21,
        "layer_name_eng": "Divisional Office",
        "layer_name_bng": "বিভাগীয় কার্যালয়",
        "layer_level": 4
      }
    },
    {
      "id": 11,
      "office_name_bng": "জেলা প্রশাসকের কার্যালয়, জামালপুর",
      "office_name_eng": "Office of the Deputy Commissioner, Jamalpur",
      "digital_nothi_code": "০৫.৪৫.৩৯০০",
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
      "id": 12,
      "office_name_bng": "উপজেলা নির্বাহী অফিসারের কার্যালয়, জামালপুর সদর",
      "office_name_eng": "Office of the Upazila Nirbahi Officer, Jamalpur Sadar",
      "digital_nothi_code": "০৫.০০.৩৯৩৬",
      "office_phone": "98164393",
      "office_mobile": "1718302312",
      "office_fax": "98164632",
      "office_email": "unojamalpur@mopa.gov.bd",
      "office_web": "http://jamalpursadar.jamalpur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 23,
      "office_origin_id": 17,
      "custom_layer_id": 27,
      "parent_office_id": 11,
      "office_address": "উপজেলা নির্বাহী অফিসারের কার্যালয়, \r\n      জামালপুর সদর, জামালপুর",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 23,
        "layer_name_eng": "Upazilla Office",
        "layer_name_bng": "উপজেলা কার্যালয়",
        "layer_level": 6
      }
    },
    {
      "id": 13,
      "office_name_bng": "উপজেলা নির্বাহী অফিসারের কার্যালয়,মেলান্দহ, জামালপুর",
      "office_name_eng": "Upazila Nirbhai Office, Melandah",
      "digital_nothi_code": "০৫.০০.৩৯৬১",
      "office_phone": "০৯৮২৬৫৬০০১",
      "office_mobile": "০১৭০৯৯৭০১৭০",
      "office_fax": "০৯৮২৬৫৬২০০",
      "office_email": "unomelandha@gmail.com",
      "office_web": "www.melandah.jamalpur.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 23,
      "office_origin_id": 17,
      "custom_layer_id": 27,
      "parent_office_id": 11,
      "office_address": "মেলান্দহ, জামালপুর।\r\n\r\n\r\n\r\n",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 23,
        "layer_name_eng": "Upazilla Office",
        "layer_name_bng": "উপজেলা কার্যালয়",
        "layer_level": 6
      }
    },
    {
      "id": 14,
      "office_name_bng": "সমাজকল্যাণ মন্ত্রণালয়",
      "office_name_eng": "Ministry of Social Welfare",
      "digital_nothi_code": "41.00.0000",
      "office_phone": "+৮৮০২ ৯৫৪০৪৫২",
      "office_mobile": "",
      "office_fax": "+৮৮০২ ৯৫৭৬৬৮০; +৮৮০২ ৯৫৭৬৬৮৫",
      "office_email": "sasadmin1@msw.gov.bd ",
      "office_web": "www.msw.gov.bd",
      "office_ministry_id": 41,
      "office_layer_id": 31,
      "office_origin_id": 24,
      "custom_layer_id": 19,
      "parent_office_id": 0,
      "office_address": "৪র্থ তলা, ভবন #৬, বাংলাদেশ সচিবালয়, ঢাকা-১০০০, ঢাকা, বাংলাদেশ",
      "office_ministry": {
        "id": 41,
        "name_eng": "  Ministry of Social Welfare",
        "name_bng": "সমাজকল্যাণ মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 31,
        "layer_name_eng": "Ministry",
        "layer_name_bng": "মন্ত্রণালয়",
        "layer_level": 1
      }
    },
    {
      "id": 15,
      "office_name_bng": "সমাজসেবা অধিদফতর",
      "office_name_eng": "Department of Social Services",
      "digital_nothi_code": "৪১.০১.০০০০",
      "office_phone": "+৮৮০২-৫৫০০৭০২৪",
      "office_mobile": "01707414034",
      "office_fax": "",
      "office_email": "dg@dss.gov.bd",
      "office_web": "www.dss.gov.bd",
      "office_ministry_id": 41,
      "office_layer_id": 32,
      "office_origin_id": 27,
      "custom_layer_id": 21,
      "parent_office_id": 14,
      "office_address": "সমাজসেবা ভবন\r\nই-৮/বি-১, আগারগাঁও, শেরেবাংলা নগর\r\nঢাকা-১২০৭, বাংলাদেশ।\r\nwww.dss.gov.bd\r\n",
      "office_ministry": {
        "id": 41,
        "name_eng": "  Ministry of Social Welfare",
        "name_bng": "সমাজকল্যাণ মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 32,
        "layer_name_eng": "Directorate",
        "layer_name_bng": "অধিদপ্তর/পরিদপ্তর",
        "layer_level": 2
      }
    },
    {
      "id": 16,
      "office_name_bng": "জেলা সমাজসেবা কার্যালয়, জামালপুর",
      "office_name_eng": "District Social Service Office, Jamalpur",
      "digital_nothi_code": "৪১.০১.৩৯০০",
      "office_phone": "02997772213",
      "office_mobile": "01708414141",
      "office_fax": "",
      "office_email": "dssjamalpur@gmail.com",
      "office_web": "www.dss.jamalpur.gov.bd",
      "office_ministry_id": 41,
      "office_layer_id": 33,
      "office_origin_id": 35,
      "custom_layer_id": 25,
      "parent_office_id": 6541,
      "office_address": " ছায়ানীড় হোল্ডিং নং- ৩০৬ দেওয়ানপাড়া, জামালপুর-  পোষ্ট কোড-২০০০। ",
      "office_ministry": {
        "id": 41,
        "name_eng": "  Ministry of Social Welfare",
        "name_bng": "সমাজকল্যাণ মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 33,
        "layer_name_eng": "District",
        "layer_name_bng": "জেলা অফিস",
        "layer_level": 5
      }
    },
    {
      "id": 17,
      "office_name_bng": "উপজেলা সমাজসেবা কার্যালয়, জামালপুর সদর,জামালপুর",
      "office_name_eng": "Upazila Social Service Office, Jamalpur Sadar",
      "digital_nothi_code": "৪১.০১.৩৯৩৬",
      "office_phone": "",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "usso.jamalpursadar@dss.gov.bd",
      "office_web": "dss.jamalpursadar.jamalpur.gov.bd",
      "office_ministry_id": 41,
      "office_layer_id": 34,
      "office_origin_id": 36,
      "custom_layer_id": 27,
      "parent_office_id": 16,
      "office_address": "",
      "office_ministry": {
        "id": 41,
        "name_eng": "  Ministry of Social Welfare",
        "name_bng": "সমাজকল্যাণ মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 34,
        "layer_name_eng": "Upazilla Office",
        "layer_name_bng": "উপজেলা অফিস",
        "layer_level": 6
      }
    },
    {
      "id": 18,
      "office_name_bng": "উপজেলা সমাজসেবা কার্যালয়, মেলান্দহ,জামালপুর",
      "office_name_eng": "Upazila Social Service Office, Melandaho",
      "digital_nothi_code": "৪১.০১.৩৯৬১",
      "office_phone": "0982656190",
      "office_mobile": "01708414998",
      "office_fax": "",
      "office_email": "usso.melandah@gmail.com",
      "office_web": "dss.melandah.jamalpur.gov.bd",
      "office_ministry_id": 41,
      "office_layer_id": 34,
      "office_origin_id": 36,
      "custom_layer_id": 27,
      "parent_office_id": 16,
      "office_address": "",
      "office_ministry": {
        "id": 41,
        "name_eng": "  Ministry of Social Welfare",
        "name_bng": "সমাজকল্যাণ মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 34,
        "layer_name_eng": "Upazilla Office",
        "layer_name_bng": "উপজেলা অফিস",
        "layer_level": 6
      }
    },
    {
      "id": 19,
      "office_name_bng": "জেলা সমাজসেবা কার্যালয়, রংপুর",
      "office_name_eng": "District Social Services Office, Rangpur",
      "digital_nothi_code": "৪১.০১.৮৫০০",
      "office_phone": "০২৫৮৯৯-৬২৩৮৭",
      "office_mobile": "+৮৮০১৭০৮৪১৪১৫৯",
      "office_fax": "",
      "office_email": "dd.rangpur@dss.gov.bd",
      "office_web": "www.dss.rangpur.gov.bd",
      "office_ministry_id": 41,
      "office_layer_id": 33,
      "office_origin_id": 35,
      "custom_layer_id": 25,
      "parent_office_id": 6539,
      "office_address": "লালকুঠি, রংপুর।",
      "office_ministry": {
        "id": 41,
        "name_eng": "  Ministry of Social Welfare",
        "name_bng": "সমাজকল্যাণ মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 33,
        "layer_name_eng": "District",
        "layer_name_bng": "জেলা অফিস",
        "layer_level": 5
      }
    },
    {
      "id": 20,
      "office_name_bng": "প্রাথমিক শিক্ষা অধিদপ্তর",
      "office_name_eng": "Directorate of Primary Education",
      "digital_nothi_code": "৩৮.০১.০০০০",
      "office_phone": "",
      "office_mobile": "",
      "office_fax": "02-9038122",
      "office_email": "",
      "office_web": "www.dpe.gov.bd",
      "office_ministry_id": 38,
      "office_layer_id": 36,
      "office_origin_id": 32,
      "custom_layer_id": 21,
      "parent_office_id": 222,
      "office_address": "সেকশন-২\r\nমিরপুর\r\nঢাকা-১২১৬",
      "office_ministry": {
        "id": 38,
        "name_eng": "  Ministry of Primary and Mass Education",
        "name_bng": "প্রাথমিক ও গণশিক্ষা মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 36,
        "layer_name_eng": "Directorate",
        "layer_name_bng": "অধিদপ্তর/পরিদপ্তর",
        "layer_level": 2
      }
    },
    {
      "id": 21,
      "office_name_bng": "বিভাগীয় উপপরিচালকের কার্যালয়, প্রাথমিক শিক্ষা, ঢাকা",
      "office_name_eng": "Divisional Primary Education Office, Dhaka",
      "digital_nothi_code": "38.01.3000",
      "office_phone": "02-48031069",
      "office_mobile": "02-48031069",
      "office_fax": "0248031069",
      "office_email": "ddddhaka@gmail.com",
      "office_web": "dpe.dhakadiv.gov.bd",
      "office_ministry_id": 38,
      "office_layer_id": 39,
      "office_origin_id": 38,
      "custom_layer_id": 23,
      "parent_office_id": 20,
      "office_address": "বিভাগীয় উপপরিচালকের কার্যালয়, প্রাথমিক শিক্ষা, ঢাকা",
      "office_ministry": {
        "id": 38,
        "name_eng": "  Ministry of Primary and Mass Education",
        "name_bng": "প্রাথমিক ও গণশিক্ষা মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 39,
        "layer_name_eng": "Divisional Office",
        "layer_name_bng": "বিভাগীয় অফিস",
        "layer_level": 4
      }
    },
    {
      "id": 22,
      "office_name_bng": "জেলা প্রাথমিক শিক্ষা অফিস, জামালপুর",
      "office_name_eng": "District Primary Education Office, Jamalpur",
      "digital_nothi_code": "৩৮.৩০.৩৯০০",
      "office_phone": "98163204",
      "office_mobile": "01711331835",
      "office_fax": "",
      "office_email": "dpeojamal@gmail.com",
      "office_web": "www.dpe.jamalpur.gov.bd",
      "office_ministry_id": 38,
      "office_layer_id": 37,
      "office_origin_id": 34,
      "custom_layer_id": 25,
      "parent_office_id": 2138,
      "office_address": " জামালপুর",
      "office_ministry": {
        "id": 38,
        "name_eng": "  Ministry of Primary and Mass Education",
        "name_bng": "প্রাথমিক ও গণশিক্ষা মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 37,
        "layer_name_eng": "District Office",
        "layer_name_bng": "জেলা অফিস",
        "layer_level": 5
      }
    },
    {
      "id": 23,
      "office_name_bng": "উপজেলা শিক্ষা অফিস, জামালপুর সদর, জামালপুর",
      "office_name_eng": "Upazila Education Office, Jamalpur",
      "digital_nothi_code": "৩৮.০৭.৩৯৩৬",
      "office_phone": "098164040",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "ueojamalpursadar@gmail.com",
      "office_web": "",
      "office_ministry_id": 38,
      "office_layer_id": 38,
      "office_origin_id": 37,
      "custom_layer_id": 27,
      "parent_office_id": 22,
      "office_address": "উপজেলা শিক্ষা অফিস, জামালপুর সদর, জামালপুর",
      "office_ministry": {
        "id": 38,
        "name_eng": "  Ministry of Primary and Mass Education",
        "name_bng": "প্রাথমিক ও গণশিক্ষা মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 38,
        "layer_name_eng": "Upazila Office",
        "layer_name_bng": "উপজেলা অফিস",
        "layer_level": 6
      }
    },
    {
      "id": 24,
      "office_name_bng": "উপজেলা শিক্ষা অফিস, মেলান্দহ,জামালপুর",
      "office_name_eng": "Upazila Education Office, Melandaho",
      "digital_nothi_code": "38.07.3961",
      "office_phone": "",
      "office_mobile": "01718308926",
      "office_fax": "",
      "office_email": "mustafakamal8926@gmail.com",
      "office_web": null,
      "office_ministry_id": 38,
      "office_layer_id": 38,
      "office_origin_id": 37,
      "custom_layer_id": 27,
      "parent_office_id": 22,
      "office_address": null,
      "office_ministry": {
        "id": 38,
        "name_eng": "  Ministry of Primary and Mass Education",
        "name_bng": "প্রাথমিক ও গণশিক্ষা মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 38,
        "layer_name_eng": "Upazila Office",
        "layer_name_bng": "উপজেলা অফিস",
        "layer_level": 6
      }
    },
    {
      "id": 28,
      "office_name_bng": "মন্ত্রিপরিষদ বিভাগ ",
      "office_name_eng": "Ministry",
      "digital_nothi_code": "০৪.০০.০০০০",
      "office_phone": "৮৮-০২২২৩৩৮৬৫৫৮",
      "office_mobile": "",
      "office_fax": "৮৮-০২-৯৫৬৬৫৫৯",
      "office_email": "cab_secy@cabinet.gov.bd",
      "office_web": "www.cabinet.gov.bd",
      "office_ministry_id": 4,
      "office_layer_id": 43,
      "office_origin_id": 42,
      "custom_layer_id": 19,
      "parent_office_id": 0,
      "office_address": "",
      "office_ministry": {
        "id": 4,
        "name_eng": "Cabinet Division",
        "name_bng": "মন্ত্রিপরিষদ বিভাগ"
      },
      "office_layer": {
        "id": 43,
        "layer_name_eng": "Ministry",
        "layer_name_bng": "বিভাগ",
        "layer_level": 1
      }
    },
    {
      "id": 29,
      "office_name_bng": "উপজেলা নির্বাহী অফিসারের কার্যালয়, ইসলামপুর, জামালপুর",
      "office_name_eng": "UNO Office, Islampur, Mymensingh",
      "digital_nothi_code": "০৫.৪৫.৩৯২৯",
      "office_phone": "",
      "office_mobile": "",
      "office_fax": "",
      "office_email": "",
      "office_web": "",
      "office_ministry_id": 5,
      "office_layer_id": 23,
      "office_origin_id": 17,
      "custom_layer_id": 27,
      "parent_office_id": 11,
      "office_address": "ইসলামপুর, জামালপুর",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 23,
        "layer_name_eng": "Upazilla Office",
        "layer_name_bng": "উপজেলা কার্যালয়",
        "layer_level": 6
      }
    },
    {
      "id": 32,
      "office_name_bng": "উপজেলা নির্বাহী অফিসারের কার্যালয়, সিংগাইর",
      "office_name_eng": "Office of the Upazila Nirbahi Officer, Singair",
      "digital_nothi_code": "০৫.৩০.৫৬৮২",
      "office_phone": "০২-৭৭১৭০০১",
      "office_mobile": "01713353322",
      "office_fax": "০২-৭৭১৭২৩৩",
      "office_email": "unosingair@mopa.gov.bd",
      "office_web": "http://singiar.manikganj.gov.bd",
      "office_ministry_id": 5,
      "office_layer_id": 23,
      "office_origin_id": 17,
      "custom_layer_id": 27,
      "parent_office_id": 30,
      "office_address": "সিংগাইর, মানিকগঞ্জ ",
      "office_ministry": {
        "id": 5,
        "name_eng": "Ministry of Public Administration",
        "name_bng": "জনপ্রশাসন মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 23,
        "layer_name_eng": "Upazilla Office",
        "layer_name_bng": "উপজেলা কার্যালয়",
        "layer_level": 6
      }
    },
    {
      "id": 36,
      "office_name_bng": "জেলা সমাজসেবা কার্যালয়, মানিকগঞ্জ",
      "office_name_eng": "District Social Service Office, Manikganj",
      "digital_nothi_code": "৪১.০১.৫৬০০",
      "office_phone": "০২৭৭১০৬৬৩",
      "office_mobile": "01715671046",
      "office_fax": "",
      "office_email": "dd.dss.manikganj@gmail.com",
      "office_web": "website:dss.manikganj.gov.bd",
      "office_ministry_id": 41,
      "office_layer_id": 33,
      "office_origin_id": 35,
      "custom_layer_id": 25,
      "parent_office_id": 6533,
      "office_address": "",
      "office_ministry": {
        "id": 41,
        "name_eng": "  Ministry of Social Welfare",
        "name_bng": "সমাজকল্যাণ মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 33,
        "layer_name_eng": "District",
        "layer_name_bng": "জেলা অফিস",
        "layer_level": 5
      }
    },
    {
      "id": 37,
      "office_name_bng": "উপজেলা সমাজসেবা কার্যালয়, শিবালয়, মানিকগঞ্জ",
      "office_name_eng": "Upazila Social Service Office, Shibaloy",
      "digital_nothi_code": "৪১.০১.৫৬৭৮",
      "office_phone": "০২৭৭১৬০২৪",
      "office_mobile": "০১৭৪৪৪৩৬৩৯৫",
      "office_fax": "",
      "office_email": "uisc.arua@gmail.com",
      "office_web": "http://dss.shibaloy.manikganj.gov.bd",
      "office_ministry_id": 41,
      "office_layer_id": 34,
      "office_origin_id": 36,
      "custom_layer_id": 27,
      "parent_office_id": 36,
      "office_address": "জেলা সমাজসেবা কার্যালয়, শিবালয়, মানিকগঞ্জ",
      "office_ministry": {
        "id": 41,
        "name_eng": "  Ministry of Social Welfare",
        "name_bng": "সমাজকল্যাণ মন্ত্রণালয়"
      },
      "office_layer": {
        "id": 34,
        "layer_name_eng": "Upazilla Office",
        "layer_name_bng": "উপজেলা অফিস",
        "layer_level": 6
      }
    }
  ]
}
```
