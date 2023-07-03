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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/ministries/', '11', {})"> Try it now!</button>
                            <div id="response11">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/ministry/layers/', '12', {ministry_id:1})"> Try it now!</button>
                            <div id="response12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/ministry/layer/offices/', '13', {ministry_id:5, layer_id:22})"> Try it now!</button>
                            <div id="response13">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/offices', '14', {})"> Try it now!</button>
                            <div id="response14">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/office/units/', '15', {office_ids:'65,58'})"> Try it now!</button>
                            <div id="response15">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/office/unit/designations/', '16', {unit_ids:'299,300'})"> Try it now!</button>
                            <div id="response16">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/office/unit-designation-employee-map', '17', {office_id:405})"> Try it now!</button>
                            <div id="response17">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/get-employee-list-by-office', '18', {office_id:2958})"> Try it now!</button>
                            <div id="response18">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/office/unit-designation-map', '19', {office_id:65})"> Try it now!</button>
                            <div id="response19">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/office/unit-head-and-admin', '20', {unit_id:29372})"> Try it now!</button>
                            <div id="response20">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/office/head-and-admin', '21', {office_id:65})"> Try it now!</button>
                            <div id="response21">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


            <div class="accordion accordion-flush wow fadeInUp" id="accordionFlushExample">
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
                            <button type="button" class="custom-btn-primary" onclick="callApi('https://dpgdata.doptor.gov.bd/api/v1/office/front-desk', '22', {office_id:53})"> Try it now!</button>
                            <div id="response22">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>


        </div>
    </div>
</div>