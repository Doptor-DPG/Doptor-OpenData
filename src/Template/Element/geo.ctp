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
                    <h2 class="accordion-header" id="flush-heading1">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                aria-expanded="false" aria-controls="flush-collapse1">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/geo/divisions
                        </button>
                    </h2>
                    <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/geo/divisions</p>
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
                                    <td>id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_bng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_bng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>bbs_code</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: auto">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 8,
        "count": 7,
        "from": 1,
        "to": 7,
        "current_page": 1,
        "per_page": 25,
        "last_page": 1
    },
    "data": [
        {
            "bbs_code": "20",
            "name_eng": "Chittagong",
            "name_bng": "চট্টগ্রাম",
            "id": 2
        },
        {
            "bbs_code": "30",
            "name_eng": "Dhaka",
            "name_bng": "ঢাকা",
            "id": 3
        },
        {
            "bbs_code": "40",
            "name_eng": "Khulna",
            "name_bng": "খুলনা",
            "id": 4
        },
        {
            "bbs_code": "50",
            "name_eng": "Rajshahi",
            "name_bng": "রাজশাহী",
            "id": 5
        },
        {
            "bbs_code": "55",
            "name_eng": "Rangpur",
            "name_bng": "রংপুর",
            "id": 6
        },
        {
            "bbs_code": "60",
            "name_eng": "Sylhet",
            "name_bng": "সিলেট",
            "id": 7
        },
        {
            "bbs_code": "45",
            "name_eng": "Mymensingh",
            "name_bng": "ময়মনসিংহ",
            "id": 9
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
                    <h2 class="accordion-header" id="flush-heading2">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2"
                                aria-expanded="false" aria-controls="flush-collapse2">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/geo/districts
                        </button>
                    </h2>
                    <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/geo/districts</p>
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
                                    <td>name_eng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_bng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>bbs_code</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>division_eng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: auto">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 64,
        "count": 63,
        "from": 1,
        "to": 63,
        "current_page": 1,
        "per_page": 200,
        "last_page": 1
    },
    "data": [
        {
            "division_id": 1,
            "bbs_code": "06",
            "name_eng": "BARISAL",
            "name_bng": "বরিশাল",
            "id": 2
        },
        {
            "division_id": 1,
            "bbs_code": "09",
            "name_eng": "BHOLA",
            "name_bng": "ভোলা",
            "id": 3
        },
        {
            "division_id": 1,
            "bbs_code": "42",
            "name_eng": "JHALOKATI",
            "name_bng": "ঝালকাঠি",
            "id": 4
        },
        {
            "division_id": 1,
            "bbs_code": "78",
            "name_eng": "PATUAKHALI",
            "name_bng": "পটুয়াখালী ",
            "id": 5
        },
        {
            "division_id": 1,
            "bbs_code": "79",
            "name_eng": "PIROJPUR",
            "name_bng": "পিরোজপুর ",
            "id": 6
        },
        {
            "division_id": 2,
            "bbs_code": "03",
            "name_eng": "BANDARBAN",
            "name_bng": "বান্দরবান",
            "id": 7
        },
        {
            "division_id": 2,
            "bbs_code": "12",
            "name_eng": "BRAHMANBARIA",
            "name_bng": "ব্রাহ্মণবাড়িয়া",
            "id": 8
        },
        {
            "division_id": 2,
            "bbs_code": "13",
            "name_eng": "CHANDPUR",
            "name_bng": "চাঁদপুর",
            "id": 9
        },
        {
            "division_id": 2,
            "bbs_code": "15",
            "name_eng": "CHITTAGONG",
            "name_bng": "চট্টগ্রাম",
            "id": 10
        },
        {
            "division_id": 2,
            "bbs_code": "19",
            "name_eng": "COMILLA",
            "name_bng": "কুমিল্লা",
            "id": 11
        },
        {
            "division_id": 2,
            "bbs_code": "22",
            "name_eng": "COX'S BAZAR",
            "name_bng": "কক্সবাজার ",
            "id": 12
        },
        {
            "division_id": 2,
            "bbs_code": "30",
            "name_eng": "FENI",
            "name_bng": "ফেনী",
            "id": 13
        },
        {
            "division_id": 2,
            "bbs_code": "46",
            "name_eng": "KHAGRACHHARI",
            "name_bng": "খাগড়াছড়ি",
            "id": 14
        },
        {
            "division_id": 2,
            "bbs_code": "51",
            "name_eng": "LAKSHMIPUR",
            "name_bng": "লক্ষ্মীপুর",
            "id": 15
        },
        {
            "division_id": 2,
            "bbs_code": "75",
            "name_eng": "NOAKHALI",
            "name_bng": "নোয়াখালী",
            "id": 16
        },
        {
            "division_id": 2,
            "bbs_code": "84",
            "name_eng": "RANGAMATI",
            "name_bng": "রাঙ্গামাটি",
            "id": 17
        },
        {
            "division_id": 3,
            "bbs_code": "26",
            "name_eng": "DHAKA",
            "name_bng": "ঢাকা ",
            "id": 18
        },
        {
            "division_id": 3,
            "bbs_code": "29",
            "name_eng": "FARIDPUR",
            "name_bng": "ফরিদপুর ",
            "id": 19
        },
        {
            "division_id": 3,
            "bbs_code": "33",
            "name_eng": "GAZIPUR",
            "name_bng": "গাজীপুর ",
            "id": 20
        },
        {
            "division_id": 3,
            "bbs_code": "35",
            "name_eng": "GOPALGANJ",
            "name_bng": "গোপালগঞ্জ",
            "id": 21
        },
        {
            "division_id": 9,
            "bbs_code": "39",
            "name_eng": "JAMALPUR",
            "name_bng": "জামালপুর ",
            "id": 22
        },
        {
            "division_id": 3,
            "bbs_code": "48",
            "name_eng": "KISHOREGONJ",
            "name_bng": "কিশোরগঞ্জ ",
            "id": 23
        },
        {
            "division_id": 3,
            "bbs_code": "54",
            "name_eng": "MADARIPUR",
            "name_bng": "মাদারীপুর ",
            "id": 24
        },
        {
            "division_id": 3,
            "bbs_code": "56",
            "name_eng": "MANIKGANJ",
            "name_bng": "মানিকগঞ্জ ",
            "id": 25
        },
        {
            "division_id": 3,
            "bbs_code": "59",
            "name_eng": "MUNSHIGANJ",
            "name_bng": "মুন্সিগঞ্জ ",
            "id": 26
        },
        {
            "division_id": 9,
            "bbs_code": "61",
            "name_eng": "MYMENSINGH",
            "name_bng": "ময়মনসিংহ ",
            "id": 27
        },
        {
            "division_id": 3,
            "bbs_code": "67",
            "name_eng": "NARAYANGANJ",
            "name_bng": "নারায়ণগঞ্জ ",
            "id": 28
        },
        {
            "division_id": 3,
            "bbs_code": "68",
            "name_eng": "NARSINGDI",
            "name_bng": "নরসিংদী ",
            "id": 29
        },
        {
            "division_id": 9,
            "bbs_code": "72",
            "name_eng": "NETRAKONA",
            "name_bng": "নেত্রকোণা ",
            "id": 30
        },
        {
            "division_id": 3,
            "bbs_code": "82",
            "name_eng": "RAJBARI",
            "name_bng": "রাজবাড়ী ",
            "id": 31
        },
        {
            "division_id": 3,
            "bbs_code": "86",
            "name_eng": "SHARIATPUR",
            "name_bng": "শরীয়তপুর  ",
            "id": 32
        },
        {
            "division_id": 9,
            "bbs_code": "89",
            "name_eng": "SHERPUR",
            "name_bng": "শেরপুর ",
            "id": 33
        },
        {
            "division_id": 3,
            "bbs_code": "93",
            "name_eng": "TANGAIL",
            "name_bng": "টাঙ্গাইল ",
            "id": 34
        },
        {
            "division_id": 4,
            "bbs_code": "01",
            "name_eng": "BAGERHAT",
            "name_bng": "বাগেরহাট",
            "id": 35
        },
        {
            "division_id": 4,
            "bbs_code": "18",
            "name_eng": "CHUADANGA",
            "name_bng": "চুয়াডাঙ্গা ",
            "id": 36
        },
        {
            "division_id": 4,
            "bbs_code": "41",
            "name_eng": "JESSORE",
            "name_bng": "যশোর ",
            "id": 37
        },
        {
            "division_id": 4,
            "bbs_code": "44",
            "name_eng": "JHENAIDAH",
            "name_bng": "ঝিনাইদহ ",
            "id": 38
        },
        {
            "division_id": 4,
            "bbs_code": "47",
            "name_eng": "KHULNA",
            "name_bng": "খুলনা ",
            "id": 39
        },
        {
            "division_id": 4,
            "bbs_code": "50",
            "name_eng": "KUSHTIA",
            "name_bng": "কুষ্টিয়া ",
            "id": 40
        },
        {
            "division_id": 4,
            "bbs_code": "55",
            "name_eng": "MAGURA",
            "name_bng": "মাগুরা",
            "id": 41
        },
        {
            "division_id": 4,
            "bbs_code": "57",
            "name_eng": "MEHERPUR",
            "name_bng": "মেহেরপুর ",
            "id": 42
        },
        {
            "division_id": 4,
            "bbs_code": "65",
            "name_eng": "NARAIL",
            "name_bng": "নড়াইল ",
            "id": 43
        },
        {
            "division_id": 4,
            "bbs_code": "87",
            "name_eng": "SATKHIRA",
            "name_bng": "সাতক্ষীরা ",
            "id": 44
        },
        {
            "division_id": 5,
            "bbs_code": "10",
            "name_eng": "BOGRA",
            "name_bng": "বগুড়া ",
            "id": 45
        },
        {
            "division_id": 5,
            "bbs_code": "38",
            "name_eng": "JOYPURHAT",
            "name_bng": "জয়পুরহাট",
            "id": 46
        },
        {
            "division_id": 5,
            "bbs_code": "64",
            "name_eng": "NAOGAON",
            "name_bng": "নওগাঁ ",
            "id": 47
        },
        {
            "division_id": 5,
            "bbs_code": "69",
            "name_eng": "NATORE",
            "name_bng": "নাটোর ",
            "id": 48
        },
        {
            "division_id": 5,
            "bbs_code": "70",
            "name_eng": "CHAPAI NABABGANJ",
            "name_bng": "চাঁপাই নাবাবগঞ্জ ",
            "id": 49
        },
        {
            "division_id": 5,
            "bbs_code": "76",
            "name_eng": "PABNA",
            "name_bng": "পাবনা",
            "id": 50
        },
        {
            "division_id": 5,
            "bbs_code": "81",
            "name_eng": "RAJSHAHI",
            "name_bng": "রাজশাহী ",
            "id": 51
        },
        {
            "division_id": 5,
            "bbs_code": "88",
            "name_eng": "SIRAJGANJ",
            "name_bng": "সিরাজগঞ্জ",
            "id": 52
        },
        {
            "division_id": 6,
            "bbs_code": "27",
            "name_eng": "DINAJPUR",
            "name_bng": "দিনাজপুর ",
            "id": 53
        },
        {
            "division_id": 6,
            "bbs_code": "32",
            "name_eng": "GAIBANDHA",
            "name_bng": "গাইবান্ধা ",
            "id": 54
        },
        {
            "division_id": 6,
            "bbs_code": "49",
            "name_eng": "KURIGRAM",
            "name_bng": "কুড়িগ্রাম ",
            "id": 55
        },
        {
            "division_id": 6,
            "bbs_code": "52",
            "name_eng": "LALMONIRHAT",
            "name_bng": "লালমনিরহাট ",
            "id": 56
        },
        {
            "division_id": 6,
            "bbs_code": "73",
            "name_eng": "NILPHAMARI",
            "name_bng": "নীলফামারী",
            "id": 57
        },
        {
            "division_id": 6,
            "bbs_code": "77",
            "name_eng": "PANCHAGARH",
            "name_bng": "পঞ্চগড় ",
            "id": 58
        },
        {
            "division_id": 6,
            "bbs_code": "85",
            "name_eng": "RANGPUR",
            "name_bng": "রংপুর ",
            "id": 59
        },
        {
            "division_id": 6,
            "bbs_code": "94",
            "name_eng": "THAKURGAON",
            "name_bng": "ঠাকুরগাঁও",
            "id": 60
        },
        {
            "division_id": 7,
            "bbs_code": "36",
            "name_eng": "HABIGANJ",
            "name_bng": "হবিগঞ্জ ",
            "id": 61
        },
        {
            "division_id": 7,
            "bbs_code": "58",
            "name_eng": "MAULVIBAZAR",
            "name_bng": "মৌলভীবাজার ",
            "id": 62
        },
        {
            "division_id": 7,
            "bbs_code": "90",
            "name_eng": "SUNAMGANJ",
            "name_bng": "সুনামগঞ্জ ",
            "id": 63
        },
        {
            "division_id": 7,
            "bbs_code": "91",
            "name_eng": "SYLHET",
            "name_bng": "সিলেট",
            "id": 64
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
                    <h2 class="accordion-header" id="flush-heading3">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3"
                                aria-expanded="false" aria-controls="flush-collapse3">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/geo/upazilas
                        </button>
                    </h2>
                    <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/geo/upazilas</p>
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
                                    <td>id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_eng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_bng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>bbs_code</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>division_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>district_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>page</td>
                                    <td>1</td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>per_page</td>
                                    <td>25</td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: auto">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 295,
        "count": 25,
        "from": 1,
        "to": 25,
        "current_page": 1,
        "per_page": 25,
        "last_page": 12
    },
    "data": [
        {
            "division_id": 1,
            "bbs_code": "19",
            "district_id": 1,
            "name_eng": "BAMNA",
            "name_bng": "বামনা ",
            "id": 2
        },
        {
            "division_id": 1,
            "bbs_code": "28",
            "district_id": 1,
            "name_eng": "BARGUNA SADAR",
            "name_bng": "বরগুনা সদর ",
            "id": 3
        },
        {
            "division_id": 1,
            "bbs_code": "47",
            "district_id": 1,
            "name_eng": "BETAGI",
            "name_bng": "বেতাগী ",
            "id": 4
        },
        {
            "division_id": 1,
            "bbs_code": "85",
            "district_id": 1,
            "name_eng": "PATHARGHATA",
            "name_bng": "পাথরঘাটা ",
            "id": 5
        },
        {
            "division_id": 1,
            "bbs_code": "90",
            "district_id": 1,
            "name_eng": "TALTALI",
            "name_bng": "তালতলি ",
            "id": 6
        },
        {
            "division_id": 1,
            "bbs_code": "2",
            "district_id": 2,
            "name_eng": "AGAILJHARA",
            "name_bng": "আগৈলঝাড়া",
            "id": 7
        },
        {
            "division_id": 1,
            "bbs_code": "3",
            "district_id": 2,
            "name_eng": "BABUGANJ",
            "name_bng": "বাবুগঞ্জ ",
            "id": 8
        },
        {
            "division_id": 1,
            "bbs_code": "7",
            "district_id": 2,
            "name_eng": "BAKERGANJ",
            "name_bng": "বাকেরগঞ্জ",
            "id": 9
        },
        {
            "division_id": 1,
            "bbs_code": "10",
            "district_id": 2,
            "name_eng": "BANARI PARA",
            "name_bng": "বানারীপাড়া ",
            "id": 10
        },
        {
            "division_id": 1,
            "bbs_code": "32",
            "district_id": 2,
            "name_eng": "GAURNADI",
            "name_bng": "গৌরনদী ",
            "id": 11
        },
        {
            "division_id": 1,
            "bbs_code": "36",
            "district_id": 2,
            "name_eng": "HIZLA",
            "name_bng": "হিজলা ",
            "id": 12
        },
        {
            "division_id": 1,
            "bbs_code": "51",
            "district_id": 2,
            "name_eng": "BARISAL SADAR (KOTWALI)",
            "name_bng": "বরিশাল সদর (কোতোয়ালী)",
            "id": 13
        },
        {
            "division_id": 1,
            "bbs_code": "62",
            "district_id": 2,
            "name_eng": "MEHENDIGANJ",
            "name_bng": "মেহেন্দিগঞ্জ ",
            "id": 14
        },
        {
            "division_id": 1,
            "bbs_code": "69",
            "district_id": 2,
            "name_eng": "MULADI",
            "name_bng": "মুলাদী  ",
            "id": 15
        },
        {
            "division_id": 1,
            "bbs_code": "94",
            "district_id": 2,
            "name_eng": "WAZIRPUR",
            "name_bng": "উজিরপুর  ",
            "id": 16
        },
        {
            "division_id": 1,
            "bbs_code": "18",
            "district_id": 3,
            "name_eng": "BHOLA SADAR",
            "name_bng": "ভোলা সদর",
            "id": 17
        },
        {
            "division_id": 1,
            "bbs_code": "21",
            "district_id": 3,
            "name_eng": "BURHANUDDIN",
            "name_bng": "বোরহানউদ্দিন ",
            "id": 18
        },
        {
            "division_id": 1,
            "bbs_code": "29",
            "district_id": 3,
            "name_eng": "DAULAT KHAN",
            "name_bng": "দৌলতখান",
            "id": 19
        },
        {
            "division_id": 1,
            "bbs_code": "54",
            "district_id": 3,
            "name_eng": "LALMOHAN",
            "name_bng": "লালমোহন ",
            "id": 20
        },
        {
            "division_id": 1,
            "bbs_code": "65",
            "district_id": 3,
            "name_eng": "MANPURA",
            "name_bng": "মনপুরা ",
            "id": 21
        },
        {
            "division_id": 1,
            "bbs_code": "91",
            "district_id": 3,
            "name_eng": "TAZUMUDDIN",
            "name_bng": "তজুমদ্দিন ",
            "id": 22
        },
        {
            "division_id": 1,
            "bbs_code": "40",
            "district_id": 4,
            "name_eng": "JHALOKATI SADAR",
            "name_bng": "ঝালকাঠি সদর",
            "id": 23
        },
        {
            "division_id": 1,
            "bbs_code": "73",
            "district_id": 4,
            "name_eng": "NALCHITY",
            "name_bng": "নলছিটি ",
            "id": 24
        },
        {
            "division_id": 1,
            "bbs_code": "43",
            "district_id": 4,
            "name_eng": "KATHALIA",
            "name_bng": "কাঠালিয়া",
            "id": 25
        },
        {
            "division_id": 1,
            "bbs_code": "38",
            "district_id": 5,
            "name_eng": "BAUPHAL",
            "name_bng": "বাউফল ",
            "id": 26
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
                    <h2 class="accordion-header" id="flush-heading4">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4"
                                aria-expanded="false" aria-controls="flush-collapse4">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/geo/unions
                        </button>
                    </h2>
                    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/geo/unions</p>
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
                                    <td>id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_eng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_bng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>bbs_code</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>division_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>upazila_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>page</td>
                                    <td>1</td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>per_page</td>
                                    <td>50</td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: auto">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 689,
        "count": 50,
        "from": 1,
        "to": 50,
        "current_page": 1,
        "per_page": 50,
        "last_page": 14
    },
    "data": [
        {
            "id": 2,
            "bbs_code": "27",
            "name_eng": "CHAMPAPUR",
            "name_bng": "চাঁপাপুর",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 329
        },
        {
            "id": 3,
            "bbs_code": "40",
            "name_eng": "CHHATIANGRAM",
            "name_bng": "ছাতিয়ানগ্রাম",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 329
        },
        {
            "id": 4,
            "bbs_code": "54",
            "name_eng": "KUNDAGRAM",
            "name_bng": "কুন্দগ্রাম",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 329
        },
        {
            "id": 5,
            "bbs_code": "67",
            "name_eng": "NASRATPUR",
            "name_bng": "নশরৎপুর",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 329
        },
        {
            "id": 6,
            "bbs_code": "81",
            "name_eng": "SHANTAHAR",
            "name_bng": "সান্তাহার",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 329
        },
        {
            "id": 7,
            "bbs_code": "23",
            "name_eng": "ERULIA",
            "name_bng": "এরুলিয়া",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 8,
            "bbs_code": "25",
            "name_eng": "FAPORE",
            "name_bng": "ফাঁপোর",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 9,
            "bbs_code": "34",
            "name_eng": "GOKUL",
            "name_bng": "গোকুল",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 10,
            "bbs_code": "47",
            "name_eng": "LAHIRI PARA",
            "name_bng": "লাহিড়ীপাড়া",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 11,
            "bbs_code": "60",
            "name_eng": "NAMUJA",
            "name_bng": "নামুজা",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 12,
            "bbs_code": "64",
            "name_eng": "NISHINDARA",
            "name_bng": "নিশিন্দারা",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 13,
            "bbs_code": "69",
            "name_eng": "NOONGOLA",
            "name_bng": "নুনগোলা",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 14,
            "bbs_code": "73",
            "name_eng": "RAJAPUR",
            "name_bng": "রাজাপুর",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 15,
            "bbs_code": "77",
            "name_eng": "SHABGRAM",
            "name_bng": "সাবগ্রাম",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 16,
            "bbs_code": "82",
            "name_eng": "SHAKHARIA",
            "name_bng": "শাখারিয়া",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 17,
            "bbs_code": "86",
            "name_eng": "SEKHERKOLA",
            "name_bng": "শেখেরকোলা",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 18,
            "bbs_code": "98",
            "name_eng": "BOGRA CANTONMENT",
            "name_bng": "বগুড়া সেনানিবাস",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 330
        },
        {
            "id": 19,
            "bbs_code": "15",
            "name_eng": "BHANDARBARI",
            "name_bng": "ভান্ডারবাড়ী",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 331
        },
        {
            "id": 20,
            "bbs_code": "19",
            "name_eng": "CHAUKIBARI",
            "name_bng": "চৌকিবাড়ি",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 331
        },
        {
            "id": 21,
            "bbs_code": "28",
            "name_eng": "CHIKASHI",
            "name_bng": "চিকাশী",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 331
        },
        {
            "id": 22,
            "bbs_code": "38",
            "name_eng": "DHUNAT",
            "name_bng": "ধুনট",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 331
        },
        {
            "id": 23,
            "bbs_code": "47",
            "name_eng": "ELANGI",
            "name_bng": "এলাঙ্গী",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 331
        },
        {
            "id": 24,
            "bbs_code": "57",
            "name_eng": "GOPALNAGAR",
            "name_bng": "গোপালনগর",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 331
        },
        {
            "id": 25,
            "bbs_code": "66",
            "name_eng": "GOSAINBARI",
            "name_bng": "গোসাইবাড়ী",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 331
        },
        {
            "id": 26,
            "bbs_code": "76",
            "name_eng": "KALER PARA",
            "name_bng": "কলেরপাড়া",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 331
        },
        {
            "id": 27,
            "bbs_code": "85",
            "name_eng": "MATHURAPUR",
            "name_bng": "মখুরপুর",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 331
        },
        {
            "id": 28,
            "bbs_code": "95",
            "name_eng": "NIMGACHHI",
            "name_bng": "নিমগাছি",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 331
        },
        {
            "id": 29,
            "bbs_code": "13",
            "name_eng": "CHAMRUL UNION",
            "name_bng": "চামরুল",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 332
        },
        {
            "id": 30,
            "bbs_code": "27",
            "name_eng": "DHUPCHANCHIA",
            "name_bng": "দুপচাচিঁয়া",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 332
        },
        {
            "id": 31,
            "bbs_code": "40",
            "name_eng": "GOBINDAPUR",
            "name_bng": "গোবিন্দপুর",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 332
        },
        {
            "id": 32,
            "bbs_code": "54",
            "name_eng": "GUNAHAR",
            "name_bng": "গুনাহার",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 332
        },
        {
            "id": 33,
            "bbs_code": "67",
            "name_eng": "TALORA UNION",
            "name_bng": "তালোড়া",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 332
        },
        {
            "id": 34,
            "bbs_code": "81",
            "name_eng": "ZIANAGAR",
            "name_bng": "তালোড়া",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 332
        },
        {
            "id": 35,
            "bbs_code": "11",
            "name_eng": "BALIA DIGHI",
            "name_bng": "বালিয়াদিঘী",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 333
        },
        {
            "id": 36,
            "bbs_code": "17",
            "name_eng": "DAKSHINPARA",
            "name_bng": "দক্ষিণপাড়া",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 333
        },
        {
            "id": 37,
            "bbs_code": "27",
            "name_eng": "DURGAHATA",
            "name_bng": "দুর্গাহাটা",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 333
        },
        {
            "id": 38,
            "bbs_code": "33",
            "name_eng": "GABTALI",
            "name_bng": "গাবতলি",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 333
        },
        {
            "id": 39,
            "bbs_code": "47",
            "name_eng": "KAGAIL",
            "name_bng": "কাগইল",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 333
        },
        {
            "id": 40,
            "bbs_code": "54",
            "name_eng": "MAHISHABAN",
            "name_bng": "মহিষাবান",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 333
        },
        {
            "id": 41,
            "bbs_code": "61",
            "name_eng": "NARUAMALA",
            "name_bng": "নাড়ুয়ামালা",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 333
        },
        {
            "id": 42,
            "bbs_code": "67",
            "name_eng": "NASIPUR",
            "name_bng": "নশিপুর",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 333
        },
        {
            "id": 43,
            "bbs_code": "74",
            "name_eng": "NEPALTALI",
            "name_bng": "নেপালতলি",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 333
        },
        {
            "id": 44,
            "bbs_code": "81",
            "name_eng": "RAMESHWARPUR",
            "name_bng": "রামেশ্বরপুর",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 333
        },
        {
            "id": 45,
            "bbs_code": "88",
            "name_eng": "SONARAI",
            "name_bng": "সোনারায়",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 333
        },
        {
            "id": 46,
            "bbs_code": "13",
            "name_eng": "BIR KEDAR",
            "name_bng": "বীরকেদার",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 334
        },
        {
            "id": 47,
            "bbs_code": "19",
            "name_eng": "DURGAPUR",
            "name_bng": "দূর্গাপুর",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 334
        },
        {
            "id": 48,
            "bbs_code": "28",
            "name_eng": "JAMGAON",
            "name_bng": "জামগ্রাম",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 334
        },
        {
            "id": 49,
            "bbs_code": "38",
            "name_eng": "KAHALOO",
            "name_bng": "কাহালু",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 334
        },
        {
            "id": 50,
            "bbs_code": "47",
            "name_eng": "KALAI MAJH PARA",
            "name_bng": "কালাই",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 334
        },
        {
            "id": 51,
            "bbs_code": "57",
            "name_eng": "MALANCHA",
            "name_bng": "মালঞ্চা",
            "division_id": 5,
            "district_id": 45,
            "upazila_id": 334
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
                    <h2 class="accordion-header" id="flush-heading5">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5"
                                aria-expanded="false" aria-controls="flush-collapse5">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/geo/city-corporations
                        </button>
                    </h2>
                    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/geo/city-corporations</p>
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
                                    <td>id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_eng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_bng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>bbs_code</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>division_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>district_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>page</td>
                                    <td>1</td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>per_page</td>
                                    <td>25</td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: auto">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 3,
        "count": 2,
        "from": 1,
        "to": 2,
        "current_page": 1,
        "per_page": 25,
        "last_page": 1
    },
    "data": [
        {
            "bbs_code": "50",
            "name_eng": "COMILLA CITY CORP.",
            "name_bng": "কুমিল্লা সিটি কর্পোরেশন",
            "division_id": 2,
            "district_id": 11,
            "id": 3
        },
        {
            "bbs_code": "25",
            "name_eng": "DHAKA UTTAR CITY CORP.",
            "name_bng": "ঢাকা উত্তর সিটি কর্পোরেশন",
            "division_id": 3,
            "district_id": 18,
            "id": 5
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
                    <h2 class="accordion-header" id="flush-heading6">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6"
                                aria-expanded="false" aria-controls="flush-collapse6">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/geo/city-corporation-wards
                        </button>
                    </h2>
                    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/geo/city-corporation-wards</p>
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
                                    <td>id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_eng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_bng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>bbs_code</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>division_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>district_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>citycorporation_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>page</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>per_page</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: auto">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 0,
        "count": 0,
        "from": 1,
        "to": 0,
        "current_page": 1,
        "per_page": 500,
        "last_page": 0
    },
    "data": []
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
                    <h2 class="accordion-header" id="flush-heading7">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7"
                                aria-expanded="false" aria-controls="flush-collapse7">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/geo/municipalities
                        </button>
                    </h2>
                    <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/geo/municipalities</p>
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
                                    <td>id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_bng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_eng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>bbs_code</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>division_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>district_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>upazila_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>page</td>
                                    <td>1</td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>per_page</td>
                                    <td>50</td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: auto">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 1,
        "count": 1,
        "from": 1,
        "to": 1,
        "current_page": 1,
        "per_page": 50,
        "last_page": 1
    },
    "data": [
        {
            "id": 5,
            "name_eng": "LAMA PAURASHAVA",
            "name_bng": "লামা পৌরসভা",
            "bbs_code": "62",
            "district_id": 7,
            "upazila_id": 42,
            "division_id": 2
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
                    <h2 class="accordion-header" id="flush-heading8">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8"
                                aria-expanded="false" aria-controls="flush-collapse8">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/geo/municipality-wards
                        </button>
                    </h2>
                    <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/geo/municipality-wards</p>
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
                                    <td>id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_bng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_eng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>bbs_code</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>division_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>district_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>upazila_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>municipality_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>page</td>
                                    <td>1</td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>per_page</td>
                                    <td>50</td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: auto">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 1,
        "count": 0,
        "from": 1,
        "to": 0,
        "current_page": 1,
        "per_page": 50,
        "last_page": 1
    },
    "data": []
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
                    <h2 class="accordion-header" id="flush-heading9">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9"
                                aria-expanded="false" aria-controls="flush-collapse9">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/geo/thanas
                        </button>
                    </h2>
                    <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading8"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/geo/thanas</p>
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
                                    <td>id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_bng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_eng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>bbs_code</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>division_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>district_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>page</td>
                                    <td>1</td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>per_page</td>
                                    <td>50</td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: auto">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 557,
        "count": 50,
        "from": 1,
        "to": 50,
        "current_page": 1,
        "per_page": 50,
        "last_page": 12
    },
    "data": [
        {
            "id": 2,
            "name_eng": "CHITALMARI",
            "name_bng": "চিতলমারী",
            "bbs_code": "14",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 3,
            "name_eng": "FAKIRHAT",
            "name_bng": "ফকিরহাট",
            "bbs_code": "34",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 4,
            "name_eng": "KACHUA",
            "name_bng": "কচুয়া",
            "bbs_code": "38",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 5,
            "name_eng": "MOLLAHAT",
            "name_bng": "মোল্লাহাট",
            "bbs_code": "56",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 6,
            "name_eng": "MONGLA",
            "name_bng": "মোংলা",
            "bbs_code": "58",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 7,
            "name_eng": "MORRELGANJ",
            "name_bng": "মোড়লগঞ্জ",
            "bbs_code": "60",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 8,
            "name_eng": "RAMPAL",
            "name_bng": "রামপাল",
            "bbs_code": "73",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 9,
            "name_eng": "SARANKHOLA",
            "name_bng": "শরণখোলা",
            "bbs_code": "77",
            "division_id": 4,
            "district_id": 35
        },
        {
            "id": 10,
            "name_eng": "ALIKADAM",
            "name_bng": "আলীকদম",
            "bbs_code": "04",
            "division_id": 2,
            "district_id": 7
        },
        {
            "id": 11,
            "name_eng": "BANDARBAN SADAR",
            "name_bng": "বান্দরবান সদর",
            "bbs_code": "14",
            "division_id": 2,
            "district_id": 7
        },
        {
            "id": 12,
            "name_eng": "LAMA",
            "name_bng": "লামা",
            "bbs_code": "51",
            "division_id": 2,
            "district_id": 7
        },
        {
            "id": 13,
            "name_eng": "NAIKHONGCHHARI",
            "name_bng": "নাইক্ষ্যংছড়ি",
            "bbs_code": "73",
            "division_id": 2,
            "district_id": 7
        },
        {
            "id": 14,
            "name_eng": "ROWANGCHHARI",
            "name_bng": "রোয়াংছড়ি",
            "bbs_code": "89",
            "division_id": 2,
            "district_id": 7
        },
        {
            "id": 15,
            "name_eng": "RUMA",
            "name_bng": "রুমা",
            "bbs_code": "91",
            "division_id": 2,
            "district_id": 7
        },
        {
            "id": 16,
            "name_eng": "THANCHI",
            "name_bng": "থান্\u200cচি",
            "bbs_code": "95",
            "division_id": 2,
            "district_id": 7
        },
        {
            "id": 17,
            "name_eng": "AMTALI",
            "name_bng": "আমতলী",
            "bbs_code": "09",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 18,
            "name_eng": "BAMNA",
            "name_bng": "বামনা",
            "bbs_code": "19",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 19,
            "name_eng": "BARGUNA SADAR",
            "name_bng": "বরগুনা সদর",
            "bbs_code": "28",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 20,
            "name_eng": "BETAGI",
            "name_bng": "বেতাগী",
            "bbs_code": "47",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 21,
            "name_eng": "PATHARGHATA",
            "name_bng": "পাথরঘাটা",
            "bbs_code": "85",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 22,
            "name_eng": "TALTALI",
            "name_bng": "তালতলী",
            "bbs_code": "90",
            "division_id": 1,
            "district_id": 1
        },
        {
            "id": 23,
            "name_eng": "AGAILJHARA",
            "name_bng": "আগৈলঝাড়া",
            "bbs_code": "02",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 24,
            "name_eng": "BABUGANJ",
            "name_bng": "বাবুগঞ্জ",
            "bbs_code": "03",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 25,
            "name_eng": "BAKERGANJ",
            "name_bng": "বাকেরগঞ্জ",
            "bbs_code": "07",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 26,
            "name_eng": "BANARI PARA",
            "name_bng": "বানারী পাড়া",
            "bbs_code": "10",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 27,
            "name_eng": "GAURNADI",
            "name_bng": "গৌরনদী",
            "bbs_code": "32",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 28,
            "name_eng": "HIZLA",
            "name_bng": "হিজলা",
            "bbs_code": "36",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 29,
            "name_eng": "BARISAL SADAR (KOTWALI)",
            "name_bng": "বরিশাল সদর",
            "bbs_code": "51",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 30,
            "name_eng": "MEHENDIGANJ",
            "name_bng": "মেহেন্দীগঞ্জ",
            "bbs_code": "62",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 31,
            "name_eng": "MULADI",
            "name_bng": "মুলাদী",
            "bbs_code": "69",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 32,
            "name_eng": "WAZIRPUR",
            "name_bng": "উজিরপুর",
            "bbs_code": "94",
            "division_id": 1,
            "district_id": 2
        },
        {
            "id": 33,
            "name_eng": "BHOLA SADAR",
            "name_bng": "ভোলা সদর",
            "bbs_code": "18",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 34,
            "name_eng": "BURHANUDDIN",
            "name_bng": "বোরহানউদ্দীন",
            "bbs_code": "21",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 35,
            "name_eng": "CHAR FASSON",
            "name_bng": "চরফ্যাশন",
            "bbs_code": "25",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 36,
            "name_eng": "DAULAT KHAN",
            "name_bng": "দৌলত খান",
            "bbs_code": "29",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 37,
            "name_eng": "LALMOHAN",
            "name_bng": "লালমোহন",
            "bbs_code": "54",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 38,
            "name_eng": "MANPURA",
            "name_bng": "মনপুরা",
            "bbs_code": "65",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 39,
            "name_eng": "TAZUMUDDIN",
            "name_bng": "তজুমুদ্দিন",
            "bbs_code": "91",
            "division_id": 1,
            "district_id": 3
        },
        {
            "id": 40,
            "name_eng": "ADAMDIGHI",
            "name_bng": "আদমদিঘী",
            "bbs_code": "06",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 41,
            "name_eng": "BOGRA SADAR",
            "name_bng": "বগুড়া সদর",
            "bbs_code": "20",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 42,
            "name_eng": "DHUNAT",
            "name_bng": "ধুনট",
            "bbs_code": "27",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 43,
            "name_eng": "DHUPCHANCHIA",
            "name_bng": "ধুপচাঁচিয়া",
            "bbs_code": "33",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 44,
            "name_eng": "GABTALI",
            "name_bng": "গাবতলী",
            "bbs_code": "40",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 45,
            "name_eng": "KAHALOO",
            "name_bng": "কাহালু",
            "bbs_code": "54",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 46,
            "name_eng": "NANDIGRAM",
            "name_bng": "নন্দীগ্রাম",
            "bbs_code": "67",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 47,
            "name_eng": "SARIAKANDI",
            "name_bng": "সারিয়াকান্দি",
            "bbs_code": "81",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 48,
            "name_eng": "SHAJAHANPUR",
            "name_bng": "শাহজাহানপুর",
            "bbs_code": "85",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 49,
            "name_eng": "SHERPUR",
            "name_bng": "শেরপুর",
            "bbs_code": "88",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 50,
            "name_eng": "SHIBGANJ",
            "name_bng": "শিব্\u200cগঞ্জ",
            "bbs_code": "94",
            "division_id": 5,
            "district_id": 45
        },
        {
            "id": 51,
            "name_eng": "SONATOLA",
            "name_bng": "সোনাতলা",
            "bbs_code": "95",
            "division_id": 5,
            "district_id": 45
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
                    <h2 class="accordion-header" id="flush-heading10">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10"
                                aria-expanded="false" aria-controls="flush-collapse10">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/geo/post-offices
                        </button>
                    </h2>
                    <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/geo/post-offices</p>
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
                                    <td>id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_bng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>name_eng</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>bbs_code</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>division_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>district_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>upazila_id</td>
                                    <td></td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>page</td>
                                    <td>1</td>
                                    <td>text</td>
                                </tr>
                                <tr>
                                    <td>per_page</td>
                                    <td>50</td>
                                    <td>text</td>
                                </tr>
                                </tbody>
                            </table>

                            <h5><strong>Response: 200</strong></h5>
                            <p>
                            <pre style="height: 300px; overflow-y: auto">
                                    <code> 
{
    "status": "success",
    "meta": {
        "total": 1,
        "count": 0,
        "from": 1,
        "to": 0,
        "current_page": 1,
        "per_page": 50,
        "last_page": 1
    },
    "data": []
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




