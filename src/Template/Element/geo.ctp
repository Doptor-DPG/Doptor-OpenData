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


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/geo/divisions', '1', {})"> Try it now!</button>

                            <div id="response1" >

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/geo/districts', '2', {})"> Try it now!</button>
                            <div id="response2" >

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading3">
                        <button class="accordion-button collapsed bg-gradient-light border rounded-3 shadow-sm"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3"
                                aria-expanded="false" aria-controls="flush-collapse3">
                            <span class="bg-dark text-light border rounded-2 p-2 me-5">POST</span>
                            {{domain}}/api/v1/geo/upazillas
                        </button>
                    </h2>
                    <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body border border-info">
                            <h5><strong>Endpoint</strong></h5>
                            <p class="text-reset">[POST] {{domain}}/api/v1/geo/upazillas</p>
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/geo/upazillas', '3', {page:1, per_page:25})"> Try it now!</button>
                            <div id="response3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/geo/unions', '4', {})"> Try it now!</button>
                            <div id="response4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/geo/city-corporations', '5', {})"> Try it now!</button>
                            <div id="response5">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/geo/city-corporation-wards', '6', {})"> Try it now!</button>
                            <div id="response6">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/geo/municipalities', '7', {})"> Try it now!</button>
                            <div id="response7">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/geo/municipality-wards', '8', {})"> Try it now!</button>
                            <div id="response8">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/geo/thanas', '9', {})"> Try it now!</button>
                            <div id="response9">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/geo/post-offices', '10', {})"> Try it now!</button>
                            <div id="response10">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>




