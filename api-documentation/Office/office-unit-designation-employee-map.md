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

| Param     | Value | Type | Comment              |
|-----------|-------|------|----------------------|
| office_id | 405   | int  | Mandatory Parameter. |

### Response: 200

```json
{
  "status": "success",
  "data": {
    "405": {
      "office_id": 405,
      "office_layer_id": 5,
      "office_ministry_id": 5,
      "units": [
        {
          "office_origin_unit_id": 4,
          "unit_name_bng": "জেলা প্রশাসকের কার্যালয়",
          "unit_name_eng": "Deputy Commissioner Office",
          "office_unit_category": "দপ্তর",
          "parent_unit_id": 0,
          "unit_nothi_code": "000",
          "unit_level": 0,
          "email": "dcdhaka@mopa.gov.bd",
          "phone": "02223389786",
          "mobile": null,
          "fax": "48316326",
          "office_unit_id": 6675,
          "designations": {
            "33635": {
              "designation_id": 33635,
              "designation_eng": "",
              "designation_bng": "জেলা ম্যাজিস্ট্রেট",
              "designation_level": 1,
              "designation_sequence": 1,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "মোহাম্মদ মমিনুর রহমান",
                "id": 79806,
                "incharge_label": ""
              }
            },
            "33636": {
              "designation_id": 33636,
              "designation_eng": "DC",
              "designation_bng": "জেলা প্রশাসক",
              "designation_level": 1,
              "designation_sequence": 1,
              "is_admin": true,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": true,
              "employee_info": {
                "name_eng": "",
                "name_bng": "মোহাম্মদ মমিনুর রহমান",
                "id": 79806,
                "incharge_label": ""
              }
            }
          }
        },
        {
          "office_origin_unit_id": 5,
          "unit_name_bng": "গোপনীয় শাখা",
          "unit_name_eng": "Confidential Section",
          "office_unit_category": "শাখা",
          "parent_unit_id": 6675,
          "unit_nothi_code": "০০১",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 6676,
          "designations": {
            "33651": {
              "designation_id": 33651,
              "designation_eng": "OACCT",
              "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            }
          }
        },
        {
          "office_origin_unit_id": 10,
          "unit_name_bng": "সাধারণ শাখা",
          "unit_name_eng": "General Section",
          "office_unit_category": "শাখা",
          "parent_unit_id": 6677,
          "unit_nothi_code": "০০৯",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 6678,
          "designations": {
            "814369": {
              "designation_id": 814369,
              "designation_eng": "",
              "designation_bng": "সার্ভেয়ার",
              "designation_level": 999,
              "designation_sequence": 999,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "814374": {
              "designation_id": 814374,
              "designation_eng": "Office assistant cum-computer typist",
              "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
              "designation_level": 999,
              "designation_sequence": 999,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "মো: সাদ্দাম হোসেন",
                "id": 402742,
                "incharge_label": ""
              }
            },
            "891955": {
              "designation_id": 891955,
              "designation_eng": "",
              "designation_bng": "প্রশাসনিক কর্মকর্তা",
              "designation_level": 999,
              "designation_sequence": 999,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            }
          }
        },
        {
          "office_origin_unit_id": 11,
          "unit_name_bng": "নেজারত শাখা",
          "unit_name_eng": "Nejarot Section",
          "office_unit_category": "শাখা",
          "parent_unit_id": 6677,
          "unit_nothi_code": "০১০",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 6679,
          "designations": {
            "33686": {
              "designation_id": 33686,
              "designation_eng": "assistant najir",
              "designation_bng": "সহকারী নাজির",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33687": {
              "designation_id": 33687,
              "designation_eng": "",
              "designation_bng": "অফিস সহকারী (যানবাহন নাজির)",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33688": {
              "designation_id": 33688,
              "designation_eng": "",
              "designation_bng": "অফিস সহকারী (প্রটোকল নাজির)",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33689": {
              "designation_id": 33689,
              "designation_eng": "",
              "designation_bng": "অফিস সহকারী (পরিবহন নাজির)",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "মোঃ মনির হোসেন",
                "id": 312227,
                "incharge_label": ""
              }
            },
            "33690": {
              "designation_id": 33690,
              "designation_eng": "",
              "designation_bng": "উচ্চমান সহকারী",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33691": {
              "designation_id": 33691,
              "designation_eng": "OA",
              "designation_bng": "সাঁট মুদ্রাক্ষরিক",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33692": {
              "designation_id": 33692,
              "designation_eng": "Nezarat Deputy Collector",
              "designation_bng": "নেজারত ডেপুটি কালেক্টর",
              "designation_level": 5,
              "designation_sequence": 5,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "MOHAMMAD RAHMAT ULLAH",
                "name_bng": "মোহাম্মদ রহমত উল্লাহ",
                "id": 183457,
                "incharge_label": ""
              }
            },
            "33693": {
              "designation_id": 33693,
              "designation_eng": "District Nazir",
              "designation_bng": " নাজির",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33694": {
              "designation_id": 33694,
              "designation_eng": "Steno Typist",
              "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "MD. AL-AMIN",
                "name_bng": "মোঃ আল-আমিন",
                "id": 219810,
                "incharge_label": ""
              }
            },
            "469677": {
              "designation_id": 469677,
              "designation_eng": "",
              "designation_bng": "সহকারী নাজির",
              "designation_level": 999,
              "designation_sequence": 999,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "MD. ADIL MAHMUD",
                "name_bng": "মোঃ আদিল মাহমুদ ",
                "id": 267012,
                "incharge_label": ""
              }
            },
            "469836": {
              "designation_id": 469836,
              "designation_eng": "",
              "designation_bng": "সহকারী নাজির (অনুদান)",
              "designation_level": 999,
              "designation_sequence": 999,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "891960": {
              "designation_id": 891960,
              "designation_eng": "",
              "designation_bng": "প্রশাসনিক কর্মকর্তা",
              "designation_level": 999,
              "designation_sequence": 999,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            }
          }
        },
        {
          "office_origin_unit_id": 12,
          "unit_name_bng": "সংস্থাপন শাখা",
          "unit_name_eng": "Establishment Section",
          "office_unit_category": "শাখা",
          "parent_unit_id": 6677,
          "unit_nothi_code": "০০৮",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 6680,
          "designations": {
            "33695": {
              "designation_id": 33695,
              "designation_eng": "",
              "designation_bng": "অফিস সহকারী",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33696": {
              "designation_id": 33696,
              "designation_eng": "",
              "designation_bng": "প্রশাসনিক কর্মকর্তা",
              "designation_level": 6,
              "designation_sequence": 6,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "s m jahidul islam",
                "name_bng": "এস এম জাহিদুল ইসলাম",
                "id": 81189,
                "incharge_label": ""
              }
            },
            "33697": {
              "designation_id": 33697,
              "designation_eng": "office assistant cum computer operator",
              "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "Siful Islam Apu",
                "name_bng": "সাইফুল ইসলাম (অপু)",
                "id": 390306,
                "incharge_label": ""
              }
            },
            "33698": {
              "designation_id": 33698,
              "designation_eng": "",
              "designation_bng": "সহকারী কমিশনার",
              "designation_level": 5,
              "designation_sequence": 5,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33699": {
              "designation_id": 33699,
              "designation_eng": "Office Assistant Cum Computer Typist",
              "designation_bng": "সাঁট মুদ্রাক্ষরিক",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33700": {
              "designation_id": 33700,
              "designation_eng": "UDA",
              "designation_bng": "উচ্চমান সহকারী",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33701": {
              "designation_id": 33701,
              "designation_eng": "",
              "designation_bng": "টাইপিস্ট/কপিস্ট",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "রাশিদুল ইসলাম",
                "id": 302906,
                "incharge_label": ""
              }
            },
            "484226": {
              "designation_id": 484226,
              "designation_eng": "",
              "designation_bng": "হিসাব সহকারি",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "মো: দেলোয়ার হোসেন",
                "id": 327831,
                "incharge_label": ""
              }
            },
            "484332": {
              "designation_id": 484332,
              "designation_eng": "",
              "designation_bng": "হিসাব সহকারী",
              "designation_level": 999,
              "designation_sequence": 999,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "মোঃ মহিউদ্দীন",
                "id": 291298,
                "incharge_label": ""
              }
            },
            "529360": {
              "designation_id": 529360,
              "designation_eng": "",
              "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
              "designation_level": 999,
              "designation_sequence": 999,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "Md. Sabuj Hossain",
                "name_bng": "মো: সবুজ হোসেন",
                "id": 390311,
                "incharge_label": ""
              }
            }
          }
        },
        {
          "office_origin_unit_id": 13,
          "unit_name_bng": "তথ্য ও অভিযোগ শাখা",
          "unit_name_eng": "Information & Complain Section",
          "office_unit_category": "শাখা",
          "parent_unit_id": 6677,
          "unit_nothi_code": "০১৯",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 6681,
          "designations": {
            "33702": {
              "designation_id": 33702,
              "designation_eng": "Senior assistant Commissioner",
              "designation_bng": "সহকারী কমিশনার",
              "designation_level": 5,
              "designation_sequence": 5,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "মোঃ রাকীন মাশরুর খান",
                "id": 200979,
                "incharge_label": ""
              }
            },
            "33703": {
              "designation_id": 33703,
              "designation_eng": "",
              "designation_bng": "উচ্চমান সহকারী",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33704": {
              "designation_id": 33704,
              "designation_eng": "",
              "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "PARVEN BEGUM",
                "name_bng": "পারভীন বেগম",
                "id": 301367,
                "incharge_label": ""
              }
            }
          }
        },
        {
          "office_origin_unit_id": 14,
          "unit_name_bng": "ত্রাণ ও পুনর্বাসন শাখা",
          "unit_name_eng": "District Relief &  Rehabilitation Section",
          "office_unit_category": "শাখা",
          "parent_unit_id": 6677,
          "unit_nothi_code": "০১৮",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 6682,
          "designations": {
            "33705": {
              "designation_id": 33705,
              "designation_eng": "",
              "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "সুলতানা আক্তার",
                "id": 82202,
                "incharge_label": ""
              }
            },
            "33706": {
              "designation_id": 33706,
              "designation_eng": "head assistant",
              "designation_bng": "প্রধান সহকারী",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "সুলতানা আক্তার",
                "id": 82202,
                "incharge_label": ""
              }
            },
            "33707": {
              "designation_id": 33707,
              "designation_eng": "",
              "designation_bng": "উচ্চমান সহকারী",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33708": {
              "designation_id": 33708,
              "designation_eng": "",
              "designation_bng": "অফিস সহকারী ",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33709": {
              "designation_id": 33709,
              "designation_eng": "DRRO",
              "designation_bng": "জেলা ত্রাণ ও পুনর্বাসন কর্মকর্তা",
              "designation_level": 6,
              "designation_sequence": 6,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "Md. Abdur Rahman",
                "name_bng": "মো: আব্দুর রহমান",
                "id": 188041,
                "incharge_label": ""
              }
            },
            "33710": {
              "designation_id": 33710,
              "designation_eng": "Wireless Operator",
              "designation_bng": "ওয়ারলেস অপারেটর",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "Md.Zahirul Islam Sarker",
                "name_bng": "মো: জহিরুল ইসলাম সরকার ",
                "id": 101677,
                "incharge_label": ""
              }
            },
            "33711": {
              "designation_id": 33711,
              "designation_eng": "",
              "designation_bng": " সহকারী জেলা ত্রাণ ও পুনর্বাসন কর্মকর্তা",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            }
          }
        },
        {
          "office_origin_unit_id": 249,
          "unit_name_bng": "প্রবাসী কল্যাণ শাখা ",
          "unit_name_eng": "Foreign welfare Section",
          "office_unit_category": "শাখা",
          "parent_unit_id": 6677,
          "unit_nothi_code": "০৩০",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 6686,
          "designations": {
            "33729": {
              "designation_id": 33729,
              "designation_eng": "",
              "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "মোঃ নুরুল হক",
                "id": 287850,
                "incharge_label": ""
              }
            },
            "33730": {
              "designation_id": 33730,
              "designation_eng": "",
              "designation_bng": "উচ্চমান সহকারী",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": []
            },
            "33731": {
              "designation_id": 33731,
              "designation_eng": "Assistant Commissioner",
              "designation_bng": "সহকারী কমিশনার",
              "designation_level": 7,
              "designation_sequence": 7,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "সায়েম ইমরান",
                "id": 359614,
                "incharge_label": ""
              }
            }
          }
        },
        {
          "office_origin_unit_id": 30617,
          "unit_name_bng": "প্রকল্প পরিবীক্ষণ ও মূল্যায়ন শাখা",
          "unit_name_eng": "",
          "office_unit_category": "",
          "parent_unit_id": 104332,
          "unit_nothi_code": "০০০",
          "unit_level": 0,
          "email": null,
          "phone": null,
          "mobile": null,
          "fax": null,
          "office_unit_id": 104342,
          "designations": {
            "844303": {
              "designation_id": 844303,
              "designation_eng": "",
              "designation_bng": "সহকারী কমিশনার (উন্নয়ন প্রশাসন)",
              "designation_level": 999,
              "designation_sequence": 999,
              "is_admin": false,
              "is_unit_admin": false,
              "is_unit_head": false,
              "is_office_head": false,
              "employee_info": {
                "name_eng": "",
                "name_bng": "মোঃ রাকীন মাশরুর খান",
                "id": 200979,
                "incharge_label": ""
              }
            }
          }
        }
      ]
    }
  }
}
```
