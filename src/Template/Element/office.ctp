<style>
    .accordion-button {
        padding: 0.5rem;
    }

    h5 {
        margin-top: 2rem;
        margin-bottom: 0.8rem;
    }

    pre {
        color: #8A0054;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5 mt-5">
            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading11">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11"
                                aria-expanded="false" aria-controls="flush-collapse11">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/ministries/
                        </button>
                    </h2>
                    <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/ministries/</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>ministry_id</td>
                                    <td></td>
                                    <td>int</td>
                                    <td>Optional Parameter.</td>
                                </tr>
                                <tr>
                                    <td>search</td>
                                    <td></td>
                                    <td>text</td>
                                    <td>Optional Parameter.</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
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
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading12">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12"
                                aria-expanded="false" aria-controls="flush-collapse12">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/ministry/layers/
                        </button>
                    </h2>
                    <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/ministry/layers/</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>ministry_id</td>
                                    <td></td>
                                    <td>int</td>
                                    <td>Mandatory Parameter.</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 15,
        "count": 15,
        "from": 1,
        "to": 15,
        "current_page": 1,
        "per_page": 15,
        "last_page": 1
    },
    "data": [
        {
            "id": 19,
            "layer_name_bng": "মন্ত্রণালয়",
            "layer_name_eng": "Ministry",
            "parent_layer_id": 0
        },
        {
            "id": 20,
            "layer_name_bng": "অধিদপ্তর/পরিদপ্তর",
            "layer_name_eng": "Directorate",
            "parent_layer_id": 19
        },
        {
            "id": 21,
            "layer_name_bng": "বিভাগীয় কার্যালয়",
            "layer_name_eng": "Divisional Office",
            "parent_layer_id": 19
        },
        {
            "id": 22,
            "layer_name_bng": "জেলা কার্যালয়",
            "layer_name_eng": "District Office",
            "parent_layer_id": 21
        },
        {
            "id": 23,
            "layer_name_bng": "উপজেলা কার্যালয়",
            "layer_name_eng": "Upazilla Office",
            "parent_layer_id": 22
        },
        {
            "id": 40,
            "layer_name_bng": "উপজেলা ভূমি অফিস",
            "layer_name_eng": "Upazila Land Office",
            "parent_layer_id": 23
        },
        {
            "id": 64,
            "layer_name_bng": "সংস্থা/বোর্ড",
            "layer_name_eng": "Organization",
            "parent_layer_id": 19
        },
        {
            "id": 247,
            "layer_name_bng": "রাজস্ব সার্কেল",
            "layer_name_eng": "Revenue Circle",
            "parent_layer_id": 23
        },
        {
            "id": 274,
            "layer_name_bng": "একাডেমি/ প্রশিক্ষণ কেন্দ্র",
            "layer_name_eng": "Academy/Training Center",
            "parent_layer_id": 19
        },
        {
            "id": 280,
            "layer_name_bng": "কমিশন",
            "layer_name_eng": "Commission",
            "parent_layer_id": 19
        },
        {
            "id": 329,
            "layer_name_bng": "বোর্ড",
            "layer_name_eng": "Board",
            "parent_layer_id": 19
        },
        {
            "id": 335,
            "layer_name_bng": "ইনস্টিটিউট",
            "layer_name_eng": "Institute",
            "parent_layer_id": 19
        },
        {
            "id": 340,
            "layer_name_bng": "সংস্থা",
            "layer_name_eng": "Organization",
            "parent_layer_id": 19
        },
        {
            "id": 412,
            "layer_name_bng": "ইউনিয়ন ভূমি অফিস ",
            "layer_name_eng": "Union Land Office",
            "parent_layer_id": 40
        },
        {
            "id": 413,
            "layer_name_bng": "আঞ্চলিক কার্যালয়",
            "layer_name_eng": "Zonal office",
            "parent_layer_id": 19
        }
    ]
}
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading13">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13"
                                aria-expanded="false" aria-controls="flush-collapse13">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/ministry/layer/offices/
                        </button>
                    </h2>
                    <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/ministry/layer/offices/</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>ministry_id</td>
                                    <td>5</td>
                                    <td>int</td>
                                    <td>Mandatory Parameter.</td>
                                </tr>
                                <tr>
                                    <td>layer_id</td>
                                    <td>22</td>
                                    <td>int</td>
                                    <td>Mandatory Parameter.</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
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
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading14">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14"
                                aria-expanded="false" aria-controls="flush-collapse14">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/offices
                        </button>
                    </h2>
                    <div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-heading14"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/offices</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>office_ids</td>
                                    <td>28,29</td>
                                    <td>int</td>
                                    <td>Optional Parameter for Search. Can be passed as comma seperated value.</td>
                                </tr>
                                <tr>
                                    <td>search</td>
                                    <td>Commissionar</td>
                                    <td>text</td>
                                    <td>Optional Parameter for Search.</td>
                                </tr>
                                <tr>
                                    <td>layer_levels</td>
                                    <td>2</td>
                                    <td>int</td>
                                    <td>Optional Parameter for Search.</td>
                                </tr>
                                <tr>
                                    <td>page</td>
                                    <td>1</td>
                                    <td>int</td>
                                    <td>Page Number for Pagination.</td>
                                </tr>
                                <tr>
                                    <td>per_page</td>
                                    <td>250</td>
                                    <td>int</td>
                                    <td>Data Count for pagination.</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 10953,
        "count": 250,
        "from": 1,
        "to": 250,
        "current_page": 1,
        "per_page": 250,
        "last_page": 44
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
            "id": 267,
            "office_name_bng": "বাংলাদেশ পল্লী উন্নয়ন বোর্ড, উপপরিচালকের কার্যালয়, বরিশাল ",
            "office_name_eng": "Bangladesh Rural Development Board, Office of the Deputy Director, Barisal",
            "digital_nothi_code": "৪৭.৬২.০৬০০",
            "office_phone": "04312176089",
            "office_mobile": "01991132129",
            "office_fax": "",
            "office_email": "ddbarisal@brdb.gov.bd",
            "office_web": "",
            "office_ministry_id": 46,
            "office_layer_id": 79,
            "office_origin_id": 145,
            "custom_layer_id": 25,
            "parent_office_id": 112,
            "office_address": "সিএন্ডবি রোড, থানা কাউন্সিল, বরিশাল",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 79,
                "layer_name_eng": "Office/Org",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 269,
            "office_name_bng": "বাংলাদেশ পল্লী উন্নয়ন বোর্ড, উপপরিচালকের কার্যালয়, দিনাজপুর ",
            "office_name_eng": "Bangladesh Rural Development Board, Office of the Deputy Director, Dinajpur",
            "digital_nothi_code": "৪৭.৬২.২৭০০",
            "office_phone": "0531-63274",
            "office_mobile": "01991132103",
            "office_fax": "",
            "office_email": "dddianajpurbrbd@gmail.com",
            "office_web": "dddinajpur@brdb.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 79,
            "office_origin_id": 145,
            "custom_layer_id": 25,
            "parent_office_id": 268,
            "office_address": "বাংলাদেশ পল্লী উন্নয়ন বোর্ড\r\nউপপরিচালকের কার্যালয়\r\nউপশহর,দিনাজপুর ",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 79,
                "layer_name_eng": "Office/Org",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 271,
            "office_name_bng": "বাংলাদেশ পল্লী উন্নয়ন বোর্ড, উপপরিচালকের কার্যালয়, সুনামগঞ্জ ",
            "office_name_eng": "Bangladesh Rural Development Board, Office of the Deputy Director, Sunamganj",
            "digital_nothi_code": "৪৭.৬২.৯০০০",
            "office_phone": "+৮৮০৮৭১৬৩৪৭২",
            "office_mobile": "+৮৮০১৯৯১১৩২১৫০",
            "office_fax": "",
            "office_email": "brdbsunamganj@gmail.com",
            "office_web": "www.brdb.sunamganj.gov.bd ",
            "office_ministry_id": 46,
            "office_layer_id": 79,
            "office_origin_id": 145,
            "custom_layer_id": 25,
            "parent_office_id": 270,
            "office_address": "উপপরিচালকের কার্যালয়, বাংলাদেশ পল্লী উন্নয়ন বোর্ড, সুনামগঞ্জ",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 79,
                "layer_name_eng": "Office/Org",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 273,
            "office_name_bng": "জেলা প্রাণিসম্পদ দপ্তর, দিনাজপুর",
            "office_name_eng": "District Livestock Office, Dinajpur",
            "digital_nothi_code": "৩৩.০১.২৭০০",
            "office_phone": "0531-63304",
            "office_mobile": "",
            "office_fax": "0531-63304",
            "office_email": "dlo.dinajpur@yahoo.com",
            "office_web": "",
            "office_ministry_id": 33,
            "office_layer_id": 122,
            "office_origin_id": 142,
            "custom_layer_id": 25,
            "parent_office_id": 262,
            "office_address": "",
            "office_ministry": {
                "id": 33,
                "name_eng": "  Ministry of Fisheries and Livestock",
                "name_bng": "মৎস্য ও প্রাণিসম্পদ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 122,
                "layer_name_eng": "District Off",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 274,
            "office_name_bng": "উপপরিচালকের কার্যালয়, মৎস্য অধিদপ্তর, বরিশাল বিভাগ, বরিশাল",
            "office_name_eng": "Office of the Deputy Director, the Department of Fisheries, Barisal Division, Barisal",
            "digital_nothi_code": "৩৩.০২.০০০০",
            "office_phone": "০২৪৭৮৮৬১৩২৬",
            "office_mobile": "01970400203",
            "office_fax": "",
            "office_email": "ddbarisal@fisheries.gov.bd",
            "office_web": "www.fisheries.barisaldiv.gov.bd",
            "office_ministry_id": 33,
            "office_layer_id": 121,
            "office_origin_id": 158,
            "custom_layer_id": 23,
            "parent_office_id": 276,
            "office_address": "উপপরিচালকের কার্যালয়, মৎস্য অধিদপ্তর, মৎস্য ভবন, সি এন্ড বি রোড, বরিশাল। ",
            "office_ministry": {
                "id": 33,
                "name_eng": "  Ministry of Fisheries and Livestock",
                "name_bng": "মৎস্য ও প্রাণিসম্পদ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 121,
                "layer_name_eng": "Divisional Off",
                "layer_name_bng": "বিভাগীয় কার্যালয়",
                "layer_level": 4
            }
        },
        {
            "id": 275,
            "office_name_bng": "জেলা মৎস্য কর্মকর্তার কার্যালয়, বরিশাল",
            "office_name_eng": "DFO, Barisal",
            "digital_nothi_code": "৩৩.০২.০৬০০",
            "office_phone": "+৮৮০২৪৭৮৮৬১২২০",
            "office_mobile": "01769459591",
            "office_fax": "",
            "office_email": "dfobarisal@fisheries.gov.bd",
            "office_web": "www.fisheries.barisal.gov.bd",
            "office_ministry_id": 33,
            "office_layer_id": 122,
            "office_origin_id": 134,
            "custom_layer_id": 25,
            "parent_office_id": 274,
            "office_address": "জেলা মৎস্য কর্মকর্তার কার্যালয়, বরিশাল",
            "office_ministry": {
                "id": 33,
                "name_eng": "  Ministry of Fisheries and Livestock",
                "name_bng": "মৎস্য ও প্রাণিসম্পদ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 122,
                "layer_name_eng": "District Off",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 276,
            "office_name_bng": "মৎস্য অধিদপ্তর",
            "office_name_eng": "Department of Fisheries",
            "digital_nothi_code": "৩৩.০২.০০০০",
            "office_phone": "০২-২২৩৩৮২৮৬১",
            "office_mobile": "০১৭১২৫৬৮৯৫৯",
            "office_fax": "",
            "office_email": "dg@fisheries.gov.bd",
            "office_web": "www.fisheries.gov.bd",
            "office_ministry_id": 33,
            "office_layer_id": 120,
            "office_origin_id": 159,
            "custom_layer_id": 21,
            "parent_office_id": 199,
            "office_address": "মৎস্য অধিদপ্তর, বাংলাদেশ\r\n১৩, শহীদ ক্যাপ্টেন মনসুর আলী সরণী\r\nমৎস্য ভবন, রমনা, ঢাকা।",
            "office_ministry": {
                "id": 33,
                "name_eng": "  Ministry of Fisheries and Livestock",
                "name_bng": "মৎস্য ও প্রাণিসম্পদ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 120,
                "layer_name_eng": "Department",
                "layer_name_bng": "অধিদপ্তর/পরিদপ্তর",
                "layer_level": 2
            }
        },
        {
            "id": 277,
            "office_name_bng": "বিভাগীয় সমবায় কার্যালয়,বরিশাল",
            "office_name_eng": "Divisional Cooperative office, Barisal",
            "digital_nothi_code": "47.61.0000",
            "office_phone": "0247-8830204",
            "office_mobile": "01817096314",
            "office_fax": "",
            "office_email": "jr.barishal@coop.gov.bd",
            "office_web": "www.coop.barisaldiv.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 89,
            "office_origin_id": 94,
            "custom_layer_id": 23,
            "parent_office_id": 148,
            "office_address": "মীর টাওয়ার (২য় তলা),\r\nবরিশাল ঢাকা মহাসড়ক\r\n২৯০৯, ইছাকাঠী\r\nওয়ার্ড নং-২৯, বরিশাল সিটি কর্পোরেশন\r\nবরিশাল।",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 89,
                "layer_name_eng": "divisional Office",
                "layer_name_bng": "বিভাগীয় কার্যালয়",
                "layer_level": 4
            }
        },
        {
            "id": 279,
            "office_name_bng": "স্বাস্থ্য অধিদপ্তর",
            "office_name_eng": "Directorate of Health",
            "digital_nothi_code": "৪৫.০১.০০০০",
            "office_phone": "",
            "office_mobile": "01716387606",
            "office_fax": "",
            "office_email": "dg@dg.dghs.gov.bd",
            "office_web": "www.dghs.gov.bd",
            "office_ministry_id": 45,
            "office_layer_id": 112,
            "office_origin_id": 135,
            "custom_layer_id": 21,
            "parent_office_id": 5346,
            "office_address": "মহাখালী, ঢাকা-১২১২।",
            "office_ministry": {
                "id": 45,
                "name_eng": "Ministry of Health and Family Welfare",
                "name_bng": "স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 112,
                "layer_name_eng": "Directorate",
                "layer_name_bng": "অধিদপ্তর/পরিদপ্তর",
                "layer_level": 2
            }
        },
        {
            "id": 280,
            "office_name_bng": "জেলা সিভিল সার্জনের কার্যালয়, যশোর",
            "office_name_eng": "CS JESSORE",
            "digital_nothi_code": "00.00.0000",
            "office_phone": "",
            "office_mobile": "",
            "office_fax": "",
            "office_email": null,
            "office_web": null,
            "office_ministry_id": 45,
            "office_layer_id": 141,
            "office_origin_id": 136,
            "custom_layer_id": 25,
            "parent_office_id": 364,
            "office_address": "যশোর",
            "office_ministry": {
                "id": 45,
                "name_eng": "Ministry of Health and Family Welfare",
                "name_bng": "স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 141,
                "layer_name_eng": "DFPO",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 281,
            "office_name_bng": "জেলা সমবায় অফিস, বরিশাল",
            "office_name_eng": "District cooperative office, Barisal",
            "digital_nothi_code": "47.61.0600",
            "office_phone": "02478830231",
            "office_mobile": "",
            "office_fax": "",
            "office_email": "dco.barishal@coop.gov.bd",
            "office_web": "www.cooperative.barisal.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 79,
            "office_origin_id": 95,
            "custom_layer_id": 25,
            "parent_office_id": 277,
            "office_address": "জেলা সমবায় অফিস, বরিশাল",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 79,
                "layer_name_eng": "Office/Org",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 282,
            "office_name_bng": "বিভাগীয় সমবায় কার্যালয়, রংপুর",
            "office_name_eng": "Divisional Cooperative office, Rangpur",
            "digital_nothi_code": "৪৭.৬১.০০০০",
            "office_phone": "০২৫৮৮-৮১০৩৯৬",
            "office_mobile": "০১৭১৩-১৪৯১২১",
            "office_fax": "০২৫৮৮-৮১০৩৯৫",
            "office_email": "jr.rangpur@coop.gov.bd",
            "office_web": "www.coop.rangpurdiv.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 89,
            "office_origin_id": 94,
            "custom_layer_id": 23,
            "parent_office_id": 148,
            "office_address": "বিভাগীয় সদর দপ্তর, উত্তম, রংপুর-৫৪০০।",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 89,
                "layer_name_eng": "divisional Office",
                "layer_name_bng": "বিভাগীয় কার্যালয়",
                "layer_level": 4
            }
        },
        {
            "id": 283,
            "office_name_bng": "জেলা সমবায় অফিস, দিনাজপুর",
            "office_name_eng": "District Cooperative office, Dinajpur",
            "digital_nothi_code": "৪৭.৬১.২৭০০",
            "office_phone": "02589925143",
            "office_mobile": "01718834570",
            "office_fax": "",
            "office_email": "dco_dinajpur@yahoo.com",
            "office_web": "www.cooperative.dinajpur.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 79,
            "office_origin_id": 95,
            "custom_layer_id": 25,
            "parent_office_id": 282,
            "office_address": "জেলা সমবায় অফিস, দিনাজপুর",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 79,
                "layer_name_eng": "Office/Org",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 284,
            "office_name_bng": "বিভাগীয় সমবায় কার্যালয়,সিলেট",
            "office_name_eng": "Divisional Cooperative office, Sylhet",
            "digital_nothi_code": "47.61.0000",
            "office_phone": "02-996631280",
            "office_mobile": "01714294044",
            "office_fax": "",
            "office_email": "jr.sylhet2020@gmail.com",
            "office_web": "http://cooparative.sylhetdiv.gov.bd/",
            "office_ministry_id": 46,
            "office_layer_id": 89,
            "office_origin_id": 94,
            "custom_layer_id": 23,
            "parent_office_id": 148,
            "office_address": "বিভাগীয় সমবায় কার্যালয়,সিলেট বিভাগ, সিলেট।",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 89,
                "layer_name_eng": "divisional Office",
                "layer_name_bng": "বিভাগীয় কার্যালয়",
                "layer_level": 4
            }
        },
        {
            "id": 285,
            "office_name_bng": "জেলা সমবায় অফিস, সুনামগঞ্জ",
            "office_name_eng": "District Cooperative office, Sunamganj",
            "digital_nothi_code": "47.61.9000",
            "office_phone": "02996600855",
            "office_mobile": "01313343458",
            "office_fax": "",
            "office_email": "dco_sunamgonj@yahoo.com",
            "office_web": "cooperative.sunamganj.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 79,
            "office_origin_id": 95,
            "custom_layer_id": 25,
            "parent_office_id": 284,
            "office_address": "নতুন পাড়া, সুনামগঞ্জ",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 79,
                "layer_name_eng": "Office/Org",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 286,
            "office_name_bng": "উপপরিচালকের কার্যালয়, মৎস্য অধিদপ্তর, সিলেট বিভাগ, সিলেট",
            "office_name_eng": "Office of the Deputy Director, the Department of Fisheries, Sylhet Division, Sylhet",
            "digital_nothi_code": "৩৩.০২.০০০০",
            "office_phone": "০২৯৯৬৬৩৬১৫৭",
            "office_mobile": "০১৭১৬৯৯১২১৬",
            "office_fax": "",
            "office_email": "ddsylhet@fisheries.gov.bd",
            "office_web": "fisheries.sylhetdiv.gov.bd",
            "office_ministry_id": 33,
            "office_layer_id": 121,
            "office_origin_id": 158,
            "custom_layer_id": 23,
            "parent_office_id": 276,
            "office_address": "সিলেট",
            "office_ministry": {
                "id": 33,
                "name_eng": "  Ministry of Fisheries and Livestock",
                "name_bng": "মৎস্য ও প্রাণিসম্পদ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 121,
                "layer_name_eng": "Divisional Off",
                "layer_name_bng": "বিভাগীয় কার্যালয়",
                "layer_level": 4
            }
        },
        {
            "id": 287,
            "office_name_bng": "জেলা মৎস্য কর্মকর্তার কার্যালয়, সুনামগঞ্জ",
            "office_name_eng": "DFO, Sunamganj",
            "digital_nothi_code": "৩৩.০২.৯০০০",
            "office_phone": "02996600121",
            "office_mobile": "01718032119",
            "office_fax": "",
            "office_email": "dfosunamganj@fisheries.gov.bd",
            "office_web": "fisheries.sunamganj.gov.bd",
            "office_ministry_id": 33,
            "office_layer_id": 122,
            "office_origin_id": 134,
            "custom_layer_id": 25,
            "parent_office_id": 286,
            "office_address": "জেলা মৎস্য কর্মকর্তার কার্যালয়, সুনামগঞ্জ",
            "office_ministry": {
                "id": 33,
                "name_eng": "  Ministry of Fisheries and Livestock",
                "name_bng": "মৎস্য ও প্রাণিসম্পদ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 122,
                "layer_name_eng": "District Off",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 288,
            "office_name_bng": "উপপরিচালক এর কার্যালয়, কৃষি সম্প্রসারণ অধিদপ্তর, যশোর",
            "office_name_eng": "Office of the Deputy Director, Department of Agriculture Extension, Jessore",
            "digital_nothi_code": "১২.১৬.৪১০০",
            "office_phone": "042168860",
            "office_mobile": "",
            "office_fax": "",
            "office_email": "daejessore@gmail.com",
            "office_web": "dae.jessore.gov.bd",
            "office_ministry_id": 12,
            "office_layer_id": 118,
            "office_origin_id": 133,
            "custom_layer_id": 25,
            "parent_office_id": 363,
            "office_address": "খামারবাড়ি, যশোর।  ",
            "office_ministry": {
                "id": 12,
                "name_eng": "Ministry of Agriculture",
                "name_bng": "কৃষি মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 118,
                "layer_name_eng": "District Office",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 289,
            "office_name_bng": "অতিরিক্ত প্রধান প্রকৌশলীর কার্যালয়, এলজিইডি, বরিশাল বিভাগ, বরিশাল",
            "office_name_eng": "LGED, Barisal Division",
            "digital_nothi_code": "৫৬.০৪.০৬০৭",
            "office_phone": "+৮৮-০৪৩১-৭১৪৮৫",
            "office_mobile": "01708123140",
            "office_fax": "+৮৮-০৪৩১-৭১৪৮৬",
            "office_email": "ace.barisaldiv@lged.gov.bd",
            "office_web": "lged.barishaldiv.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 89,
            "office_origin_id": 104,
            "custom_layer_id": 23,
            "parent_office_id": 154,
            "office_address": "অতিরিক্ত প্রধান প্রকৌশলীর কার্যালয়, এলজিইডি, বরিশাল বিভাগ, বরিশাল",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 89,
                "layer_name_eng": "divisional Office",
                "layer_name_bng": "বিভাগীয় কার্যালয়",
                "layer_level": 4
            }
        },
        {
            "id": 290,
            "office_name_bng": "নির্বাহী প্রকৌশলীর কার্যালয়, এলজিইডি, বরিশাল ",
            "office_name_eng": "LGED, Barisal ",
            "digital_nothi_code": "৪৬.০২.৪৭০০",
            "office_phone": "+৮৮০৪৩১৭১০৫৪",
            "office_mobile": "",
            "office_fax": "+৮৮০৪৩১৭১০৫৬",
            "office_email": "xen.barisal@lged.gov.bd",
            "office_web": "lged.barisal.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 79,
            "office_origin_id": 105,
            "custom_layer_id": 25,
            "parent_office_id": 7045,
            "office_address": "নির্বাহী প্রকৌশলীর কার্যালয়, এলজিইডি, বরিশাল",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 79,
                "layer_name_eng": "Office/Org",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 291,
            "office_name_bng": "অতিরিক্ত প্রধান প্রকৌশলীর কার্যালয়, এলজিইডি, রংপুর বিভাগ, রংপুর",
            "office_name_eng": "LGED, Rangpur Division",
            "digital_nothi_code": "৪৬.০২.৫৫০০",
            "office_phone": "+88052156527",
            "office_mobile": "",
            "office_fax": "+88052156526",
            "office_email": "ace.rangpurdiv@lged.gov.bd",
            "office_web": "lged.rangpurdiv.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 89,
            "office_origin_id": 104,
            "custom_layer_id": 23,
            "parent_office_id": 154,
            "office_address": "অতিরিক্ত প্রধান প্রকৌশলীর কার্যালয়, এলজিইডি, রংপুর বিভাগ, রংপুর",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 89,
                "layer_name_eng": "divisional Office",
                "layer_name_bng": "বিভাগীয় কার্যালয়",
                "layer_level": 4
            }
        },
        {
            "id": 292,
            "office_name_bng": "নির্বাহী প্রকৌশলীর কার্যালয়, এলজিইডি, দিনাজপুর ",
            "office_name_eng": "LGED, Dinajpur District",
            "digital_nothi_code": "৪৬.০২.২৭০০",
            "office_phone": "+88053163381",
            "office_mobile": "",
            "office_fax": "+8805318864711",
            "office_email": "xen.dinajpur@lged.gov.bd",
            "office_web": "lged.dinajpur.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 79,
            "office_origin_id": 105,
            "custom_layer_id": 25,
            "parent_office_id": 7051,
            "office_address": "স্থানীয় সরকার প্রকৌশল অধিদপ্তর, দিনাজপুর ",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 79,
                "layer_name_eng": "Office/Org",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 293,
            "office_name_bng": "অতিরিক্ত প্রধান প্রকৌশলীর কার্যালয়, এলজিইডি, সিলেট বিভাগ, সিলেট",
            "office_name_eng": "LGED, Sylhet Division",
            "digital_nothi_code": "৪৬.০২.৬০০০",
            "office_phone": "+88-0821-721438",
            "office_mobile": "",
            "office_fax": "+88-0821-724232",
            "office_email": "ace.sylhetdiv@lged.gov.bd",
            "office_web": "lged.sylhetdiv.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 89,
            "office_origin_id": 104,
            "custom_layer_id": 23,
            "parent_office_id": 154,
            "office_address": "অতিরিক্ত প্রধান প্রকৌশলীর কার্যালয়, এলজিইডি, সিলেট বিভাগ, সিলেট",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 89,
                "layer_name_eng": "divisional Office",
                "layer_name_bng": "বিভাগীয় কার্যালয়",
                "layer_level": 4
            }
        },
        {
            "id": 294,
            "office_name_bng": "নির্বাহী প্রকৌশলীর কার্যালয়, এলজিইডি, সুনামগঞ্জ ",
            "office_name_eng": "LGED, Sunamganj District",
            "digital_nothi_code": "৪৬.০২.৯০০০",
            "office_phone": "0871-55426",
            "office_mobile": "01708123240",
            "office_fax": "0871-55429",
            "office_email": "xen.sunamganj@lged.gov.bd",
            "office_web": "www.lged.sunamganj.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 79,
            "office_origin_id": 105,
            "custom_layer_id": 25,
            "parent_office_id": 7043,
            "office_address": "স্থানীয় সরকার প্রকৌশল অধিদপ্তর, সুনামগঞ্জ জেলা ",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 79,
                "layer_name_eng": "Office/Org",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 295,
            "office_name_bng": "জেলা সমবায় কার্যালয়, যশোর।",
            "office_name_eng": "DCO, JESSORE",
            "digital_nothi_code": "৪৭.৬১.৪১০০",
            "office_phone": "০২৪৭৭৭৬১৩১৯",
            "office_mobile": "",
            "office_fax": "",
            "office_email": "dco.jashore@coop.gov.bd",
            "office_web": "http://cooperative.jessore.gov.bd/",
            "office_ministry_id": 46,
            "office_layer_id": 79,
            "office_origin_id": 95,
            "custom_layer_id": 25,
            "parent_office_id": 149,
            "office_address": "এম, এম, আলী রোড\r\nসমবায় ব্যাংক ভবন (৩য় তলা)\r\nযশোর।",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 79,
                "layer_name_eng": "Office/Org",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 296,
            "office_name_bng": "জেলা সিভিল সার্জনের কার্যালয়, বরিশাল \t",
            "office_name_eng": "Civil Surgeon office, Barisal",
            "digital_nothi_code": "45.00.0600",
            "office_phone": "",
            "office_mobile": "",
            "office_fax": "",
            "office_email": "",
            "office_web": "",
            "office_ministry_id": 45,
            "office_layer_id": 141,
            "office_origin_id": 136,
            "custom_layer_id": 25,
            "parent_office_id": 369,
            "office_address": "জেলা সিভিল সার্জনের কার্যালয়, বরিশাল \t",
            "office_ministry": {
                "id": 45,
                "name_eng": "Ministry of Health and Family Welfare",
                "name_bng": "স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 141,
                "layer_name_eng": "DFPO",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 297,
            "office_name_bng": "জেলা সিভিল সার্জনের কার্যালয়,  দিনাজপুর",
            "office_name_eng": "Civil Surgeon office, Dinajpur",
            "digital_nothi_code": "৪৫.০১.২৭০০",
            "office_phone": "",
            "office_mobile": "",
            "office_fax": "",
            "office_email": "dinajpur@cs.dghs.gov.bd",
            "office_web": "www.cs.dinajpur.gov.bd",
            "office_ministry_id": 45,
            "office_layer_id": 141,
            "office_origin_id": 136,
            "custom_layer_id": 25,
            "parent_office_id": 368,
            "office_address": "সিভিল সার্জনের কার্যালয়,  দিনাজপুর",
            "office_ministry": {
                "id": 45,
                "name_eng": "Ministry of Health and Family Welfare",
                "name_bng": "স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 141,
                "layer_name_eng": "DFPO",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 298,
            "office_name_bng": "জেলা সিভিল সার্জনের কার্যালয়, সুনামগঞ্জ",
            "office_name_eng": "Civil Surgeon office, Sunamganj",
            "digital_nothi_code": "৪৫.০১.৯০০০",
            "office_phone": "0871-61707",
            "office_mobile": "01753516207",
            "office_fax": "",
            "office_email": "sunamganj@cs.dghs.gov.bd",
            "office_web": "www.cs.sunamganj.gov.bd",
            "office_ministry_id": 45,
            "office_layer_id": 141,
            "office_origin_id": 136,
            "custom_layer_id": 25,
            "parent_office_id": 367,
            "office_address": "জেলা সিভিল সার্জনের কার্যালয়, সুনামগঞ্জ",
            "office_ministry": {
                "id": 45,
                "name_eng": "Ministry of Health and Family Welfare",
                "name_bng": "স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 141,
                "layer_name_eng": "DFPO",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 299,
            "office_name_bng": "পরিবার পরিকল্পনা অধিদপ্তর",
            "office_name_eng": "Directorate of Family Planning",
            "digital_nothi_code": "৫৯.১১.০০০০",
            "office_phone": "",
            "office_mobile": "",
            "office_fax": "",
            "office_email": "",
            "office_web": "www.dgfp.gov.bd",
            "office_ministry_id": 45,
            "office_layer_id": 112,
            "office_origin_id": 127,
            "custom_layer_id": 21,
            "parent_office_id": 278,
            "office_address": "পরিবার পরিকল্পনা অধিদপ্তর, ৬ কাওরান বাজার, ঢাকা-১২১৫।",
            "office_ministry": {
                "id": 45,
                "name_eng": "Ministry of Health and Family Welfare",
                "name_bng": "স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 112,
                "layer_name_eng": "Directorate",
                "layer_name_bng": "অধিদপ্তর/পরিদপ্তর",
                "layer_level": 2
            }
        },
        {
            "id": 300,
            "office_name_bng": "জেলা পরিবার পরিকল্পনা কার্যালয়, পিরোজপুর",
            "office_name_eng": "Family Planning office, Pirojpur",
            "digital_nothi_code": "৫৯.১১.৭৯০০",
            "office_phone": "০৪৬১৬২৪৬৮",
            "office_mobile": "০১৯০৪৪০৪১৯৪",
            "office_fax": "",
            "office_email": "ddfppiroj@yahoo.com",
            "office_web": "fpo.pirojpur.gov.bd",
            "office_ministry_id": 45,
            "office_layer_id": 141,
            "office_origin_id": 128,
            "custom_layer_id": 25,
            "parent_office_id": 376,
            "office_address": "জেলা পরিবার পরিকল্পনা কার্যালয়, পুরাতন ডিসি অফিস, পিরোজপুর।",
            "office_ministry": {
                "id": 45,
                "name_eng": "Ministry of Health and Family Welfare",
                "name_bng": "স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 141,
                "layer_name_eng": "DFPO",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 302,
            "office_name_bng": "মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর",
            "office_name_eng": "DIRECTORATE OF SECONDARY AND HIGHER EDUCATION",
            "digital_nothi_code": "৩৭.০২.০০০০",
            "office_phone": "+88-02-223351057",
            "office_mobile": "",
            "office_fax": "",
            "office_email": "dg@dshe.gov.bd",
            "office_web": "www.dshe.gov.bd",
            "office_ministry_id": 37,
            "office_layer_id": 97,
            "office_origin_id": 107,
            "custom_layer_id": 21,
            "parent_office_id": 5684,
            "office_address": "মাধ্যমিক ও উচ্চ শিক্ষা অধিদপ্তর",
            "office_ministry": {
                "id": 37,
                "name_eng": "  Ministry of Education",
                "name_bng": "শিক্ষা মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 97,
                "layer_name_eng": "Department",
                "layer_name_bng": "অধিদপ্তর/পরিদপ্তর",
                "layer_level": 2
            }
        },
        {
            "id": 303,
            "office_name_bng": "জেলা কর্মসংস্থান ও জনশক্তি অফিস, ফরিদপুর",
            "office_name_eng": "DWMPO, Faridpur",
            "digital_nothi_code": "00.00.0000",
            "office_phone": "",
            "office_mobile": "",
            "office_fax": "",
            "office_email": "",
            "office_web": "",
            "office_ministry_id": 49,
            "office_layer_id": 168,
            "office_origin_id": 460,
            "custom_layer_id": 25,
            "parent_office_id": 2348,
            "office_address": "জেলা কর্মসংস্থান ও জনশক্তি অফিস, ফরিদপুর",
            "office_ministry": {
                "id": 49,
                "name_eng": "Ministry of Expatriates Welfare and Overseas Employment",
                "name_bng": "প্রবাসী কল্যাণ ও বৈদেশিক কর্মসংস্থান মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 168,
                "layer_name_eng": "District Office",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 304,
            "office_name_bng": "জেলা শিক্ষা অফিস, যশোর",
            "office_name_eng": "DEO, Jessore",
            "digital_nothi_code": "37.02.4100",
            "office_phone": "02477765729",
            "office_mobile": "02477765729",
            "office_fax": "",
            "office_email": "deojessore@gmail.com",
            "office_web": "www.dshe.jessore.gov.bd",
            "office_ministry_id": 37,
            "office_layer_id": 99,
            "office_origin_id": 109,
            "custom_layer_id": 25,
            "parent_office_id": 425,
            "office_address": "যশোর",
            "office_ministry": {
                "id": 37,
                "name_eng": "  Ministry of Education",
                "name_bng": "শিক্ষা মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 99,
                "layer_name_eng": "District Office",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 305,
            "office_name_bng": "জে\u200cলা পরিবার পরিকল্পনা কার্যালয়, সুনামগঞ্জ",
            "office_name_eng": "Family Planning office, Sunamganj",
            "digital_nothi_code": "৪৫.০১.৯০০০",
            "office_phone": "087161818",
            "office_mobile": "01712140138",
            "office_fax": "087161818",
            "office_email": "ddsunamganj@dgfp.gov.bd",
            "office_web": "www.fpo.sunamganj.gov.bd",
            "office_ministry_id": 45,
            "office_layer_id": 141,
            "office_origin_id": 128,
            "custom_layer_id": 25,
            "parent_office_id": 378,
            "office_address": "জে\u200cলা পরিবার পরিকল্পনা কার্যালয়, হাজিপাড়া, সুনামগঞ্জ।",
            "office_ministry": {
                "id": 45,
                "name_eng": "Ministry of Health and Family Welfare",
                "name_bng": "স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 141,
                "layer_name_eng": "DFPO",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 306,
            "office_name_bng": "উপপরিচালকের কার্যালয়, যুব উন্নয়ন অধিদপ্তর, বরিশাল",
            "office_name_eng": "DD Office, Directorate of Youth Development, Barisal",
            "digital_nothi_code": "34.01.0600",
            "office_phone": "02478861178",
            "office_mobile": "01712003585",
            "office_fax": "",
            "office_email": "ddbarisal@dyd.gov.bd",
            "office_web": "www.youth.barisal.gov.bd​",
            "office_ministry_id": 34,
            "office_layer_id": 91,
            "office_origin_id": 97,
            "custom_layer_id": 25,
            "parent_office_id": 140,
            "office_address": "উপপরিচালকের কার্যালয়, যুব উন্নয়ন অধিদপ্তর, ,কাজী পাড়া সি এন্ড বি রোড় , বরিশাল।",
            "office_ministry": {
                "id": 34,
                "name_eng": "  Ministry of Youth and Sports",
                "name_bng": "যুব ও ক্রীড়া মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 91,
                "layer_name_eng": "District Office",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 307,
            "office_name_bng": "উপপরিচালকের কার্যালয়, যুব উন্নয়ন অধিদপ্তর, দিনাজপুর",
            "office_name_eng": "Youth Development office, Dinajpur",
            "digital_nothi_code": "34.01.2700",
            "office_phone": "02588817663",
            "office_mobile": "01712568807",
            "office_fax": "",
            "office_email": "dddinajpur@dyd.gov.bd",
            "office_web": "youth.dinajpur.gov.bd",
            "office_ministry_id": 34,
            "office_layer_id": 91,
            "office_origin_id": 97,
            "custom_layer_id": 25,
            "parent_office_id": 1027,
            "office_address": "উপ-পরিচালকের কার্যালয়, যুব উন্নয়ন অধিদপ্তর, দিনাজপুর",
            "office_ministry": {
                "id": 34,
                "name_eng": "  Ministry of Youth and Sports",
                "name_bng": "যুব ও ক্রীড়া মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 91,
                "layer_name_eng": "District Office",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 308,
            "office_name_bng": "উপপরিচালকের কার্যালয়, যুব উন্নয়ন অধিদপ্তর, সুনামগঞ্জ",
            "office_name_eng": "Youth Development office, Sunamganj",
            "digital_nothi_code": "34.01.0000",
            "office_phone": "0871-62121",
            "office_mobile": "01776438775",
            "office_fax": "0871-62121",
            "office_email": "ddsunamganj@dyd.gov.bd",
            "office_web": "youth.sunamganj.gov.bd",
            "office_ministry_id": 34,
            "office_layer_id": 91,
            "office_origin_id": 97,
            "custom_layer_id": 25,
            "parent_office_id": 140,
            "office_address": "গণপ্রজাতন্ত্রী বাংলাদেশ সরকার\r\nউপপরিচালকের কার্যালয়\r\nযুব উন্নয়ন অধিদপ্তর, সুনামগঞ্জ\r\nyouth.sunamganj.gov.bd",
            "office_ministry": {
                "id": 34,
                "name_eng": "  Ministry of Youth and Sports",
                "name_bng": "যুব ও ক্রীড়া মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 91,
                "layer_name_eng": "District Office",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 309,
            "office_name_bng": "নির্বাহী প্রকৗশলীর কার্যালয়, শিক্ষা প্রকৌশল অধিদপ্তর, যশোর",
            "office_name_eng": "EXEN, EED",
            "digital_nothi_code": "",
            "office_phone": "",
            "office_mobile": "",
            "office_fax": "",
            "office_email": "",
            "office_web": "",
            "office_ministry_id": 37,
            "office_layer_id": 99,
            "office_origin_id": 117,
            "custom_layer_id": 25,
            "parent_office_id": 151,
            "office_address": "যশোর",
            "office_ministry": {
                "id": 37,
                "name_eng": "  Ministry of Education",
                "name_bng": "শিক্ষা মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 99,
                "layer_name_eng": "District Office",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 310,
            "office_name_bng": "কৃষি সম্প্রসারণ অধিদপ্তর",
            "office_name_eng": "Department of Agricultural Extension (DAE)",
            "digital_nothi_code": "১২.০১.০০০০",
            "office_phone": "+৮৮০২৯১৪০৮৫০",
            "office_mobile": "",
            "office_fax": "",
            "office_email": "dg@dae.gov.bd",
            "office_web": "www.dae.gov.bd",
            "office_ministry_id": 12,
            "office_layer_id": 117,
            "office_origin_id": 152,
            "custom_layer_id": 21,
            "parent_office_id": 98,
            "office_address": "খামারবাড়ি, ঢাকা-১২১৫",
            "office_ministry": {
                "id": 12,
                "name_eng": "Ministry of Agriculture",
                "name_bng": "কৃষি মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 117,
                "layer_name_eng": "Directorate",
                "layer_name_bng": "অধিদপ্তর/পরিদপ্তর",
                "layer_level": 2
            }
        },
        {
            "id": 311,
            "office_name_bng": "ধর্ম বিষয়ক মন্ত্রণালয়",
            "office_name_eng": "Ministry of Religious Affairs",
            "digital_nothi_code": "16.00.0000",
            "office_phone": "+৮৮-০২-৯৫১৪৫৩৩",
            "office_mobile": "",
            "office_fax": "+৮৮-০২-৯৫১১১১৬",
            "office_email": "moragovbd@gmail.com",
            "office_web": "www.mora.gov.bd",
            "office_ministry_id": 16,
            "office_layer_id": 93,
            "office_origin_id": 99,
            "custom_layer_id": 19,
            "parent_office_id": 0,
            "office_address": "ধর্ম বিষয়ক মন্ত্রণালয়, বাংলাদেশ সচিবালয়, ঢাকা",
            "office_ministry": {
                "id": 16,
                "name_eng": "Ministry of Religious Affairs",
                "name_bng": "ধর্ম বিষয়ক মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 93,
                "layer_name_eng": "Ministry",
                "layer_name_bng": "মন্ত্রণালয়",
                "layer_level": 1
            }
        },
        {
            "id": 313,
            "office_name_bng": "জেলা তথ্য অফিস, বরিশাল",
            "office_name_eng": "District information office, Barisal",
            "digital_nothi_code": "56.04.0607",
            "office_phone": "02478830408",
            "office_mobile": "01712227859",
            "office_fax": "",
            "office_email": "ddbarisalb@gmail.com",
            "office_web": "http://www.info.barisal.gov.bd/",
            "office_ministry_id": 15,
            "office_layer_id": 133,
            "office_origin_id": 150,
            "custom_layer_id": 25,
            "parent_office_id": 2340,
            "office_address": "আলেকান্দা (আলেকান্দা সরকারী কলেজের বিপরীতে), বরিশাল সদর, বরিশাল।",
            "office_ministry": {
                "id": 15,
                "name_eng": "Ministry of Information and Broadcasting",
                "name_bng": "তথ্য ও সম্প্রচার মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 133,
                "layer_name_eng": "District off",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        },
        {
            "id": 315,
            "office_name_bng": "বাংলাদেশ পল্লী উন্নয়ন বোর্ড, উপপরিচালকের কার্যালয়, যশোর",
            "office_name_eng": "Bangladesh Rural Development Board, Office of the Deputy Director, Jeshore",
            "digital_nothi_code": "47.62.4100",
            "office_phone": "02477762534",
            "office_mobile": "01991132123",
            "office_fax": "",
            "office_email": "ddjessore@brdb.gov.bd",
            "office_web": "brdb.jessore.gov.bd",
            "office_ministry_id": 46,
            "office_layer_id": 79,
            "office_origin_id": 145,
            "custom_layer_id": 25,
            "parent_office_id": 112,
            "office_address": "প্লট নং- ৮৮, সেক্টর-২, উপশহর, যশোর।",
            "office_ministry": {
                "id": 46,
                "name_eng": "Ministry of Local Government, Rural Development and Co-operatives",
                "name_bng": "স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়"
            },
            "office_layer": {
                "id": 79,
                "layer_name_eng": "Office/Org",
                "layer_name_bng": "জেলা কার্যালয়",
                "layer_level": 5
            }
        }
    ]
}
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading15">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15"
                                aria-expanded="false" aria-controls="flush-collapse15">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/office/units/
                        </button>
                    </h2>
                    <div id="flush-collapse15" class="accordion-collapse collapse" aria-labelledby="flush-heading15"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/office/units/</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>office_ids</td>
                                    <td>65,58</td>
                                    <td>text</td>
                                    <td>Mandatory Parameter. Can be passed as comma seperated value.</td>
                                </tr>
                                <tr>
                                    <td>unit_ids</td>
                                    <td>79349</td>
                                    <td>text</td>
                                    <td>Optional Parameter for Search. Can be passed as comma seperated value.</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
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
                    "office_origin_unit_id": 20527,
                    "unit_name_bng": "টেকনোলজি",
                    "unit_name_eng": "Technology",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "010",
                    "unit_level": 10,
                    "email": "info@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 40372
                },
                {
                    "office_origin_unit_id": 23449,
                    "unit_name_bng": "হিউম্যান ডেভেলোপমেন্ট মিডিয়া",
                    "unit_name_eng": "Human Development Media",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "000",
                    "unit_level": 6,
                    "email": "info@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 57454
                },
                {
                    "office_origin_unit_id": 23448,
                    "unit_name_bng": "ডিজিটাল সার্ভিস ও পাবলিক সার্ভিস ইনোভেশন ",
                    "unit_name_eng": "",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "021",
                    "unit_level": 21,
                    "email": "info@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 57457
                },
                {
                    "office_origin_unit_id": 23450,
                    "unit_name_bng": "ডাটা এন্ড এসডিজি",
                    "unit_name_eng": "Data and SDG",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "009",
                    "unit_level": 9,
                    "email": "info@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 57460
                },
                {
                    "office_origin_unit_id": 23458,
                    "unit_name_bng": "ল্যান্ড",
                    "unit_name_eng": "Land",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 102172,
                    "unit_nothi_code": "022",
                    "unit_level": 24,
                    "email": "info@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 57477
                },
                {
                    "office_origin_unit_id": 23460,
                    "unit_name_bng": "ফিউচার অফ ওয়ার্ক ল্যাব",
                    "unit_name_eng": "Future of Work Lab ",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "018",
                    "unit_level": 18,
                    "email": "info@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 57480
                },
                {
                    "office_origin_unit_id": 23463,
                    "unit_name_bng": "প্রোগ্রাম ম্যানেজমেন্ট,রিসার্চ,এমএন্ডই ",
                    "unit_name_eng": "Programme Management, Research, M&E ",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "005",
                    "unit_level": 5,
                    "email": "info@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 57483
                },
                {
                    "office_origin_unit_id": 23461,
                    "unit_name_bng": "ডিজিটাল ফাইন্যান্সিয়াল সার্ভিস এন্ড ডিজিটাল সেন্টার",
                    "unit_name_eng": "Digital Financial Service & Digital Centre ",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "011",
                    "unit_level": 11,
                    "email": "info@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 57486
                },
                {
                    "office_origin_unit_id": 23462,
                    "unit_name_bng": "সেকেন্ডডারি এডুকেশন",
                    "unit_name_eng": "",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "023",
                    "unit_level": 23,
                    "email": "info@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 57489
                },
                {
                    "office_origin_unit_id": 26095,
                    "unit_name_bng": "কম্পোনেন্ট-১",
                    "unit_name_eng": "Component-1",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 0,
                    "unit_nothi_code": "003",
                    "unit_level": 3,
                    "email": "dewan.kabir@a2i.gov.bd",
                    "phone": "55006931-34",
                    "mobile": null,
                    "fax": "55006936",
                    "office_unit_id": 90139
                },
                {
                    "office_origin_unit_id": 26094,
                    "unit_name_bng": "কম্পোনেন্ট-২,৩",
                    "unit_name_eng": "Component-2,3",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 0,
                    "unit_nothi_code": "002",
                    "unit_level": 2,
                    "email": null,
                    "phone": null,
                    "mobile": null,
                    "fax": null,
                    "office_unit_id": 90142
                },
                {
                    "office_origin_unit_id": 2214,
                    "unit_name_bng": "এডমিন",
                    "unit_name_eng": "Admin ",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5119,
                    "unit_nothi_code": "006",
                    "unit_level": 6,
                    "email": "",
                    "phone": "",
                    "mobile": null,
                    "fax": "",
                    "office_unit_id": 90145
                },
                {
                    "office_origin_unit_id": 2216,
                    "unit_name_bng": "ফাইন্যান্স",
                    "unit_name_eng": "Finance",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5119,
                    "unit_nothi_code": "006",
                    "unit_level": 6,
                    "email": "",
                    "phone": "",
                    "mobile": null,
                    "fax": "",
                    "office_unit_id": 90148
                },
                {
                    "office_origin_unit_id": 2217,
                    "unit_name_bng": "প্রকিউরমেন্ট",
                    "unit_name_eng": "Procurement ",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5119,
                    "unit_nothi_code": "006",
                    "unit_level": 6,
                    "email": "",
                    "phone": "",
                    "mobile": null,
                    "fax": "",
                    "office_unit_id": 90151
                },
                {
                    "office_origin_unit_id": 26166,
                    "unit_name_bng": "সাউথ সাউথ কো-অপারেশন",
                    "unit_name_eng": "South-South Cooperation ",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "020",
                    "unit_level": 20,
                    "email": "",
                    "phone": "",
                    "mobile": null,
                    "fax": "",
                    "office_unit_id": 90153
                },
                {
                    "office_origin_unit_id": 26190,
                    "unit_name_bng": "হিউম্যান রিসোর্স",
                    "unit_name_eng": "Human Resource",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5119,
                    "unit_nothi_code": "006",
                    "unit_level": 6,
                    "email": "",
                    "phone": "",
                    "mobile": null,
                    "fax": "",
                    "office_unit_id": 90156
                },
                {
                    "office_origin_unit_id": 2208,
                    "unit_name_bng": "এসপিএস",
                    "unit_name_eng": "",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 102172,
                    "unit_nothi_code": "024",
                    "unit_level": 24,
                    "email": "",
                    "phone": "",
                    "mobile": null,
                    "fax": "",
                    "office_unit_id": 95516
                },
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
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading16">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse16"
                                aria-expanded="false" aria-controls="flush-collapse16">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/office/unit/designations/
                        </button>
                    </h2>
                    <div id="flush-collapse16" class="accordion-collapse collapse" aria-labelledby="flush-heading16"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/office/unit/designations/</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>unit_ids</td>
                                    <td>299,300</td>
                                    <td>text</td>
                                    <td>Mandatory Parameter. Can be passed as comma seperated value.</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
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
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading17">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse17"
                                aria-expanded="false" aria-controls="flush-collapse17">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/office/unit-designation-employee-map
                        </button>
                    </h2>
                    <div id="flush-collapse17" class="accordion-collapse collapse" aria-labelledby="flush-heading17"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/office/unit-designation-employee-map</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>office_id</td>
                                    <td>405</td>
                                    <td>int</td>
                                    <td>Mandatory Parameter.</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
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
                        "33637": {
                            "designation_id": 33637,
                            "designation_eng": "Stenographer (CA to DC)",
                            "designation_bng": "গোপনীয় সহকারী (অফিস)",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "33638": {
                            "designation_id": 33638,
                            "designation_eng": "CA",
                            "designation_bng": "গোপনীয় সহকারী (বাংলো)",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "33639": {
                            "designation_id": 33639,
                            "designation_eng": "ca",
                            "designation_bng": "নিম্নমান সহকারী",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "33640": {
                            "designation_id": 33640,
                            "designation_eng": "Office Assistant Cum Computer Typist",
                            "designation_bng": "সাঁট লিপিকার কাম কম্পিউটার অপারেটর",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": {
                                "name_eng": "EMRAN HOSSAIN CHOWDHURY",
                                "name_bng": "ইমরান হোসেন চৌধুরী",
                                "id": 297604,
                                "incharge_label": ""
                            }
                        },
                        "33641": {
                            "designation_id": 33641,
                            "designation_eng": "CA CUM UDA",
                            "designation_bng": "সিএ কাম ইউডিএ",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": {
                                "name_eng": "",
                                "name_bng": "মোঃ জামিল হোসেন তালুকদার ",
                                "id": 342100,
                                "incharge_label": "রুটিন দায়িত্ব"
                            }
                        },
                        "33642": {
                            "designation_id": 33642,
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
                        "33643": {
                            "designation_id": 33643,
                            "designation_eng": "Office Assistant Cum Computer Typist",
                            "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "33644": {
                            "designation_id": 33644,
                            "designation_eng": " Assistant Commissioner",
                            "designation_bng": "সহকারী কমিশনার (গোপনীয়)",
                            "designation_level": 5,
                            "designation_sequence": 5,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": {
                                "name_eng": "",
                                "name_bng": "মোঃ শফিকুল ইসলাম",
                                "id": 359863,
                                "incharge_label": ""
                            }
                        },
                        "33645": {
                            "designation_id": 33645,
                            "designation_eng": "",
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
                    "office_origin_unit_id": 7,
                    "unit_name_bng": "সার্বিক",
                    "unit_name_eng": "General Section",
                    "office_unit_category": "শাখা",
                    "parent_unit_id": 6675,
                    "unit_nothi_code": "০০৩",
                    "unit_level": 0,
                    "email": null,
                    "phone": null,
                    "mobile": null,
                    "fax": null,
                    "office_unit_id": 6677,
                    "designations": {
                        "33646": {
                            "designation_id": 33646,
                            "designation_eng": "ADC",
                            "designation_bng": "অতিরিক্ত জেলা প্রশাসক (সার্বিক)",
                            "designation_level": 3,
                            "designation_sequence": 3,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": {
                                "name_eng": "",
                                "name_bng": "কাজী হাফিজুল আমিন",
                                "id": 81225,
                                "incharge_label": ""
                            }
                        },
                        "33647": {
                            "designation_id": 33647,
                            "designation_eng": "Stenographer (C A)",
                            "designation_bng": "গোপনীয় সহকারী",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": {
                                "name_eng": "MD. SHAMIM AHSAN PATWARY",
                                "name_bng": "মোঃ শামীম আহসান পাটওয়ারী ",
                                "id": 314231,
                                "incharge_label": ""
                            }
                        },
                        "33648": {
                            "designation_id": 33648,
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
                        "33649": {
                            "designation_id": 33649,
                            "designation_eng": "",
                            "designation_bng": "সিএ কাম ইউডিএ",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "33650": {
                            "designation_id": 33650,
                            "designation_eng": "",
                            "designation_bng": "সাঁট-মুদ্রাক্ষরিক কাম কম্পিউটার অপারেটর",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
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
                        "33678": {
                            "designation_id": 33678,
                            "designation_eng": "",
                            "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": {
                                "name_eng": "Muhammad Mizanur Rahman",
                                "name_bng": "মুহাম্মদ মিজানুর রহমান",
                                "id": 242538,
                                "incharge_label": ""
                            }
                        },
                        "33679": {
                            "designation_id": 33679,
                            "designation_eng": "Steno Typist",
                            "designation_bng": "সাঁট লিপিকার",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "33680": {
                            "designation_id": 33680,
                            "designation_eng": "Section in Charge",
                            "designation_bng": "উচ্চমান সহকারী",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "33681": {
                            "designation_id": 33681,
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
                                "name_bng": "মোঃ মাসুদ ইসলাম",
                                "id": 311769,
                                "incharge_label": ""
                            }
                        },
                        "33682": {
                            "designation_id": 33682,
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
                                "name_bng": "জাকিয়া জারিন সুপ্তি",
                                "id": 398607,
                                "incharge_label": ""
                            }
                        },
                        "33683": {
                            "designation_id": 33683,
                            "designation_eng": "Chief Assistant",
                            "designation_bng": "প্রধান সহকারী",
                            "designation_level": 7,
                            "designation_sequence": 7,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "33684": {
                            "designation_id": 33684,
                            "designation_eng": "Assistant Commissioner",
                            "designation_bng": "সহকারী কমিশনার ",
                            "designation_level": 5,
                            "designation_sequence": 5,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": {
                                "name_eng": "",
                                "name_bng": "তানজিলা আখতার",
                                "id": 227442,
                                "incharge_label": ""
                            }
                        },
                        "33685": {
                            "designation_id": 33685,
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
                                "name_bng": "মোঃ সোহেল মিয়া",
                                "id": 298901,
                                "incharge_label": ""
                            }
                        },
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
                    "office_origin_unit_id": 2702,
                    "unit_name_bng": "ভূমি অধিগ্রহণ শাখা-১৪",
                    "unit_name_eng": "LAO-14",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 6725,
                    "unit_nothi_code": "০৩৭",
                    "unit_level": 0,
                    "email": "",
                    "phone": "",
                    "mobile": null,
                    "fax": "",
                    "office_unit_id": 6743,
                    "designations": {
                        "33898": {
                            "designation_id": 33898,
                            "designation_eng": "LAO",
                            "designation_bng": "ভূমি অধিগ্রহণ কর্মকর্তা",
                            "designation_level": 4,
                            "designation_sequence": 4,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "33899": {
                            "designation_id": 33899,
                            "designation_eng": "ALAO",
                            "designation_bng": "অতিঃ ভূমি অধিগ্রহণ কর্মকর্তা",
                            "designation_level": 6,
                            "designation_sequence": 6,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "244924": {
                            "designation_id": 244924,
                            "designation_eng": "",
                            "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
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
                    "office_origin_unit_id": 5136,
                    "unit_name_bng": "সাধারন শাখা (এল.এ)",
                    "unit_name_eng": "",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 6725,
                    "unit_nothi_code": "০৪০",
                    "unit_level": 0,
                    "email": "",
                    "phone": "",
                    "mobile": null,
                    "fax": "",
                    "office_unit_id": 8725,
                    "designations": {
                        "44860": {
                            "designation_id": 44860,
                            "designation_eng": "",
                            "designation_bng": "ভূমি অধিগ্রহণ কর্মকর্তা",
                            "designation_level": 4,
                            "designation_sequence": 4,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": {
                                "name_eng": "Md. Roknuz Zaman",
                                "name_bng": "মোঃ রোকনুজ জামান",
                                "id": 229375,
                                "incharge_label": ""
                            }
                        },
                        "44861": {
                            "designation_id": 44861,
                            "designation_eng": "",
                            "designation_bng": "অতিঃ ভূমি অধিগ্রহণ কর্মকর্তা",
                            "designation_level": 6,
                            "designation_sequence": 6,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "244891": {
                            "designation_id": 244891,
                            "designation_eng": "",
                            "designation_bng": "অফিস সহকারী কাম কম্পিউটার মুদ্রাক্ষরিক",
                            "designation_level": 999,
                            "designation_sequence": 999,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
                        },
                        "244894": {
                            "designation_id": 244894,
                            "designation_eng": "",
                            "designation_bng": "নাজির কাম ক্যাশিয়ার",
                            "designation_level": 999,
                            "designation_sequence": 999,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": {
                                "name_eng": "",
                                "name_bng": "মাহবুবুর রহমান",
                                "id": 392879,
                                "incharge_label": ""
                            }
                        }
                    }
                },
                {
                    "office_origin_unit_id": 20159,
                    "unit_name_bng": "উন্নয়ন ও মানবসম্পদ ব্যবস্থাপনা",
                    "unit_name_eng": "",
                    "office_unit_category": "",
                    "parent_unit_id": 6675,
                    "unit_nothi_code": "০০০",
                    "unit_level": 0,
                    "email": null,
                    "phone": null,
                    "mobile": null,
                    "fax": null,
                    "office_unit_id": 104332,
                    "designations": {
                        "844293": {
                            "designation_id": 844293,
                            "designation_eng": "",
                            "designation_bng": "অতিরিক্ত জেলা প্রশাসক (উন্নয়ন ও মানবসম্পদ ব্যবস্থাপনা)",
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
                    "office_origin_unit_id": 30614,
                    "unit_name_bng": "মানবসম্পদ ব্যবস্থাপনা শাখা ",
                    "unit_name_eng": "",
                    "office_unit_category": "",
                    "parent_unit_id": 104332,
                    "unit_nothi_code": "০০০",
                    "unit_level": 0,
                    "email": null,
                    "phone": null,
                    "mobile": null,
                    "fax": null,
                    "office_unit_id": 104337,
                    "designations": {
                        "844298": {
                            "designation_id": 844298,
                            "designation_eng": "",
                            "designation_bng": "সহকারী কমিশনার (মানবসম্পদ ব্যবস্থাপনা)",
                            "designation_level": 3,
                            "designation_sequence": 1,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false,
                            "employee_info": []
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
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading18">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse18"
                                aria-expanded="false" aria-controls="flush-collapse18">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/get-employee-list-by-office
                        </button>
                    </h2>
                    <div id="flush-collapse18" class="accordion-collapse collapse" aria-labelledby="flush-heading18"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/get-employee-list-by-office</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>office_id</td>
                                    <td>2958</td>
                                    <td>int</td>
                                    <td>Mandatory Parameter.</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 74,
        "count": 74,
        "from": 1,
        "to": 74
    },
    "data": [
        {
            "employee_id": 199286,
            "employee_name_eng": "KAZI FOYEZ AHMED",
            "employee_name_bng": "কাজী ফয়েজ আহমেদ",
            "office_id": 2958,
            "office_unit_id": 29372,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "গবেষণা বিভাগ",
            "unit_name_en": null,
            "designation_id": 175106,
            "designation_eng": "",
            "designation_bng": "সহ্কারী পরিচালক"
        },
        {
            "employee_id": 391480,
            "employee_name_eng": "",
            "employee_name_bng": "মোঃ রুহুল আমিন মজুমদার  ",
            "office_id": 2958,
            "office_unit_id": 29372,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "গবেষণা বিভাগ",
            "unit_name_en": null,
            "designation_id": 175108,
            "designation_eng": "",
            "designation_bng": "গবেষণা সহকারী"
        },
        {
            "employee_id": 199216,
            "employee_name_eng": "S.M. Hanif Mazumder ",
            "employee_name_bng": "এস.এম.হানিফ মজুমদার",
            "office_id": 2958,
            "office_unit_id": 29374,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "প্রকল্প বিভাগ",
            "unit_name_en": null,
            "designation_id": 175118,
            "designation_eng": "",
            "designation_bng": "প্রকল্প সহকারী"
        },
        {
            "employee_id": 381245,
            "employee_name_eng": "",
            "employee_name_bng": "শাহরিয়ার আহমেদ ",
            "office_id": 2958,
            "office_unit_id": 29376,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "প্রশাসন বিভাগ",
            "unit_name_en": null,
            "designation_id": 175124,
            "designation_eng": "",
            "designation_bng": "সহ্কারী পরিচালক"
        },
        {
            "employee_id": 381218,
            "employee_name_eng": "",
            "employee_name_bng": "মোঃ ওবায়দুল্লাহ সরদার ",
            "office_id": 2958,
            "office_unit_id": 29376,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "প্রশাসন বিভাগ",
            "unit_name_en": null,
            "designation_id": 175134,
            "designation_eng": "",
            "designation_bng": "সহকারী পরিচালক"
        },
        {
            "employee_id": 395757,
            "employee_name_eng": "",
            "employee_name_bng": "আজমল হোসাইন",
            "office_id": 2958,
            "office_unit_id": 29376,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "প্রশাসন বিভাগ",
            "unit_name_en": null,
            "designation_id": 175144,
            "designation_eng": "LDA-Cum-Computer Operator",
            "designation_bng": "নিম্নমান সহকারী-কাম-কম্পিউটার অপারেটর"
        },
        {
            "employee_id": 199294,
            "employee_name_eng": "",
            "employee_name_bng": "মোহাম্মদ নাজমুল কবির",
            "office_id": 2958,
            "office_unit_id": 29386,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "রক্ষনাবেক্ষণ শাখা",
            "unit_name_en": "",
            "designation_id": 175150,
            "designation_eng": "",
            "designation_bng": "সহকারী প্রকৌশলী"
        },
        {
            "employee_id": 199296,
            "employee_name_eng": " MOHAMMAD JAMSHED AHAMMED",
            "employee_name_bng": "মোহাম্মদ জামশেদ আহাম্মেদ",
            "office_id": 2958,
            "office_unit_id": 29386,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "রক্ষনাবেক্ষণ শাখা",
            "unit_name_en": "",
            "designation_id": 175152,
            "designation_eng": "",
            "designation_bng": "উপ-সহকারী প্রকৌশলী"
        },
        {
            "employee_id": 309564,
            "employee_name_eng": "",
            "employee_name_bng": "আনোয়ার হোসেন",
            "office_id": 2958,
            "office_unit_id": 29386,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "রক্ষনাবেক্ষণ শাখা",
            "unit_name_en": null,
            "designation_id": 175156,
            "designation_eng": "",
            "designation_bng": "উচ্চমান সহকারী"
        },
        {
            "employee_id": 199300,
            "employee_name_eng": "",
            "employee_name_bng": "রোকসানা বেগম",
            "office_id": 2958,
            "office_unit_id": 29388,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "গ্রন্থাগার শাখা",
            "unit_name_en": "",
            "designation_id": 175158,
            "designation_eng": "",
            "designation_bng": "গ্রন্থাগার সহকারী"
        },
        {
            "employee_id": 199290,
            "employee_name_eng": "Sharmin Shahria",
            "employee_name_bng": "বেগম শারমিন শাহরিয়া",
            "office_id": 2958,
            "office_unit_id": 29364,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "পল্লী শিক্ষা বিভাগ",
            "unit_name_en": null,
            "designation_id": 175034,
            "designation_eng": "",
            "designation_bng": "উপ-পরিচালক"
        },
        {
            "employee_id": 199536,
            "employee_name_eng": "Rakhi Nandi",
            "employee_name_bng": "রাখি নন্দী",
            "office_id": 2958,
            "office_unit_id": 29364,
            "office_name_bn": "বাংলাদেশ পল্লী উন্নয়ন একাডেমি",
            "office_name_en": "Bangladesh Academy for Rural Development",
            "unit_name_bn": "পল্লী শিক্ষা বিভাগ",
            "unit_name_en": null,
            "designation_id": 224961,
            "designation_eng": "",
            "designation_bng": "উপ-পরিচালক"
        }
    ]
}
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading19">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse19"
                                aria-expanded="false" aria-controls="flush-collapse19">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/office/unit-designation-map
                        </button>
                    </h2>
                    <div id="flush-collapse19" class="accordion-collapse collapse" aria-labelledby="flush-heading19"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/office/unit-designation-map</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>office_id</td>
                                    <td>65</td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
{
    "status": "success",
    "data": {
        "65": {
            "office_id": 65,
            "office_layer_id": 179,
            "office_ministry_id": 14,
            "units": [
                {
                    "office_origin_unit_id": 1860,
                    "unit_name_bng": "প্রকল্প পরিচালকের দপ্তর",
                    "unit_name_eng": "Project Director's Office ",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 0,
                    "unit_nothi_code": "001",
                    "unit_level": 1,
                    "email": "dewan.kabir@a2i.gov.bd",
                    "phone": "55006931",
                    "mobile": null,
                    "fax": "",
                    "office_unit_id": 5112,
                    "designations": {
                        "12587": {
                            "designation_id": 12587,
                            "designation_eng": "Project Director (Additional Secretary)",
                            "designation_bng": "প্রকল্প পরিচালক (অতিরিক্ত সচিব)",
                            "designation_level": 1,
                            "designation_sequence": 1,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": true
                        }
                    }
                },
                {
                    "office_origin_unit_id": 1870,
                    "unit_name_bng": "পলিসি অ্যাডভাইজর",
                    "unit_name_eng": "Policy Advisor",
                    "office_unit_category": "শাখা",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "004",
                    "unit_level": 4,
                    "email": "anir.chowdhury@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 5113,
                    "designations": {
                        "12588": {
                            "designation_id": 12588,
                            "designation_eng": "Policy Advisor",
                            "designation_bng": "পলিসি অ্যাডভাইজর",
                            "designation_level": 2,
                            "designation_sequence": 3,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": true,
                            "is_office_head": false
                        },
                        "12589": {
                            "designation_id": 12589,
                            "designation_eng": "",
                            "designation_bng": "পলিসি এসোসিয়েট",
                            "designation_level": 5,
                            "designation_sequence": 1,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        }
                    }
                },
                {
                    "office_origin_unit_id": 1872,
                    "unit_name_bng": "সিএসআই",
                    "unit_name_eng": "CSI",
                    "office_unit_category": "অধিশাখা",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "006",
                    "unit_level": 6,
                    "email": "info@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 5114,
                    "designations": {
                        "12613": {
                            "designation_id": 12613,
                            "designation_eng": "",
                            "designation_bng": "ক্যাপাসিটি ডেভেলপমেন্ট এক্সপার্ট",
                            "designation_level": 4,
                            "designation_sequence": 6,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        },
                        "375975": {
                            "designation_id": 375975,
                            "designation_eng": "",
                            "designation_bng": "ইনোভেশন ফান্ড এসোসিয়েট",
                            "designation_level": 5,
                            "designation_sequence": 12,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        }
                    }
                },
                {
                    "office_origin_unit_id": 2213,
                    "unit_name_bng": "রুরাল এ্যাসিসটেড ই-কমার্স (একশপ)",
                    "unit_name_eng": "Rural Assisted e-Commerce (Ekshop)",
                    "office_unit_category": "দপ্তর",
                    "parent_unit_id": 5112,
                    "unit_nothi_code": "012",
                    "unit_level": 12,
                    "email": "info@a2i.gov.bd",
                    "phone": "02-55006931",
                    "mobile": null,
                    "fax": "02-55006936",
                    "office_unit_id": 5115,
                    "designations": {
                        "12607": {
                            "designation_id": 12607,
                            "designation_eng": "Programme Assistant",
                            "designation_bng": "প্রোগ্রাম এসিস্ট্যান্ট",
                            "designation_level": 999,
                            "designation_sequence": 999,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        },
                        "375971": {
                            "designation_id": 375971,
                            "designation_eng": "",
                            "designation_bng": "সল্যুশন আর্কিটেকচার স্পেশালিস্ট",
                            "designation_level": 3,
                            "designation_sequence": 19,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        },
                        "375974": {
                            "designation_id": 375974,
                            "designation_eng": "National Consultant e-Commerce Implementation",
                            "designation_bng": "ন্যাশনাল কনসালটেন্ট ই-কমার্স ইমপ্লিমেন্টেশন",
                            "designation_level": 6,
                            "designation_sequence": 36,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        },
                        "821860": {
                            "designation_id": 821860,
                            "designation_eng": "",
                            "designation_bng": "ইনোভেশন কমার্শিয়ালাইজেশন এক্সপার্ট",
                            "designation_level": 999,
                            "designation_sequence": 999,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        },
                        "839732": {
                            "designation_id": 839732,
                            "designation_eng": "",
                            "designation_bng": "ন্যাশনাল কনসালটেন্ট ই-কমার্স ইমপ্লিমেন্টেশন এক্সপার্ট",
                            "designation_level": 999,
                            "designation_sequence": 999,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        },
                        "852610": {
                            "designation_id": 852610,
                            "designation_eng": "",
                            "designation_bng": "ইয়াং প্রোফেশনাল",
                            "designation_level": 999,
                            "designation_sequence": 999,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        },
                        "888585": {
                            "designation_id": 888585,
                            "designation_eng": "",
                            "designation_bng": "ই-কমার্স এসিস্ট্যান্ট",
                            "designation_level": 999,
                            "designation_sequence": 999,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        }
                    }
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
                    "office_unit_id": 102229,
                    "designations": {
                        "821825": {
                            "designation_id": 821825,
                            "designation_eng": "",
                            "designation_bng": "কনসালটেন্ট (জিআরএস)",
                            "designation_level": 999,
                            "designation_sequence": 999,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        },
                        "844761": {
                            "designation_id": 844761,
                            "designation_eng": "",
                            "designation_bng": "প্রোগ্রাম এসিস্ট্যান্ট",
                            "designation_level": 3,
                            "designation_sequence": 3,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        },
                        "865345": {
                            "designation_id": 865345,
                            "designation_eng": "",
                            "designation_bng": "জিটুবি ডিজিটালাইজেশন এক্সপার্ট",
                            "designation_level": 999,
                            "designation_sequence": 999,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        }
                    }
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
                    "office_unit_id": 162135,
                    "designations": {
                        "1214434": {
                            "designation_id": 1214434,
                            "designation_eng": "Strategy and Innovation Specialist",
                            "designation_bng": "স্ট্র্যাটেজি এন্ড ইনোভেশন স্পেশালিষ্ট",
                            "designation_level": 1,
                            "designation_sequence": 1,
                            "is_admin": false,
                            "is_unit_admin": true,
                            "is_unit_head": false,
                            "is_office_head": false
                        },
                        "1214440": {
                            "designation_id": 1214440,
                            "designation_eng": "Programme Assistant",
                            "designation_bng": "প্রোগ্রাম এসিসট্যান্ট",
                            "designation_level": 2,
                            "designation_sequence": 2,
                            "is_admin": false,
                            "is_unit_admin": false,
                            "is_unit_head": false,
                            "is_office_head": false
                        }
                    }
                }
            ]
        }
    }
}
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading20">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse20"
                                aria-expanded="false" aria-controls="flush-collapse20">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/office/unit-head-and-admin
                    </h2>
                    <div id="flush-collapse20" class="accordion-collapse collapse" aria-labelledby="flush-heading20"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/office/unit-head-and-admin</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>unit_id</td>
                                    <td>29372</td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
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
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading21">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse21"
                                aria-expanded="false" aria-controls="flush-collapse21">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/office/head-and-admin
                    </h2>
                    <div id="flush-collapse21" class="accordion-collapse collapse" aria-labelledby="flush-heading21"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/office/head-and-admin</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>office_id</td>
                                    <td>65</td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
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
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInRight" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading22">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse22"
                                aria-expanded="false" aria-controls="flush-collapse22">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/office/front-desk
                    </h2>
                    <div id="flush-collapse22" class="accordion-collapse collapse" aria-labelledby="flush-heading22"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/office/front-desk</p>
                            <h5><strong>Headers</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Content-Type</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Content-Type</td>
                                    <td>application/json</td>
                                </tr>
                                <tr>
                                    <td>Accept</td>
                                    <td>application/json</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Body Form Data</strong></h5>
                            <table class="table table-bordered">
                                <thead class="bg-gradient-light-two">
                                <tr>
                                    <th>Param</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>office_id</td>
                                    <td>53</td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: :auto;">
                                    <code> 
{
    "status": "success",
    "data":
        {
            "id": 2,
            "office_id": 53,
            "office_name": "প্রধানমন্ত্রীর কার্যালয়",
            "address": "পুরাতন সংসদ ভবন, তেজগাঁও, ঢ়াকা-১২১৫",
            "office_unit_id": 748,
            "office_unit_name": "মহাপরিচালক ৩",
            "office_unit_organogram_id": 1652,
            "designation": "কর্মকতা",
            "officer_name": "মোঃ আব্দুল বারী"
        }
}
                                    </code>
                                </pre>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>


        </div>
    </div>
</div>