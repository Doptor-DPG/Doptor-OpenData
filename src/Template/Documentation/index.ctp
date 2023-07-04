

<div class="container mb-5">
      <div class="row">
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $this->request->webroot ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= $this->Url->build(['controller'=>'Documentation', 'action'=>'index']) ?>">Documentation</a></li>
              <li class="breadcrumb-item active" aria-current="page">Version One</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-geo-location-tab" data-bs-toggle="tab" data-bs-target="#nav-geo-location" type="button" role="tab" aria-controls="nav-geo-location" aria-selected="true"><h3>Geo Location</h3></button>
              <button class="nav-link" id="nav-office-structure-tab" data-bs-toggle="tab" data-bs-target="#nav-office-structure" type="button" role="tab" aria-controls="nav-office-structure" aria-selected="false"><h3>Office Structure</h3></button>
              <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab" data-bs-target="#nav-faq" type="button" role="tab" aria-controls="nav-faq" aria-selected="false"><h3>Documentation</h3></button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-geo-location" role="tabpanel" aria-labelledby="nav-geo-location-tab" tabindex="0">
              <?= $this->element('geo') ?>
            </div>
            <div class="tab-pane fade" id="nav-office-structure" role="tabpanel" aria-labelledby="nav-office-structure-tab" tabindex="0">
              <?= $this->element('office') ?>
            </div>
            <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab" tabindex="0">
              <?= $this->element('faqtab') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <script>
    function callApi(apiurl, id)
    {
        console.log(apiurl);
        $("#response"+id).empty();
        var html= '';
        html += '<div class="d-flex justify-content-center mt-3"><img src="'+<?= json_encode($this->request->webroot,true) ?>+'img/loading.gif" style="width:50px"></div>';
        $("#response"+id).append(html);
        var data_parse_url= <?= json_encode($this->Url->build(['controller'=>'Home', 'action'=>'callApi']),true) ?>;
        var formData = $('#form'+id).serializeArray();
        var dataObject = {};
        $(formData).each(function(index, field){
          dataObject[field.name] = field.value;
        });
        var requestData= {
            callurl: apiurl,
            params: dataObject
        }
        $.ajax({
            url: data_parse_url,
            type: "POST",
            dataType: "json",
            data: JSON.stringify(requestData),
            contentType: "application/json",
            success: function(response) {
                $("#response"+id).empty();
                var responseData = JSON.parse(response);
                var codeResponse = JSON.stringify(responseData, null, 2);
                var html='';
                html += '<h5><strong>Response: 200</strong></h5>';
                html += '<div class="d-flex justify-content-end"><button class="btn btn-danger btn-sm" onclick="closeResponse('+id+')">&times; Close</button></div>';
                html += '<p><pre style="height: 300px; overflow-y: auto">';
                html += '<code>' + codeResponse + '</code>';
                html += '</pre></p><br>';
                $("#response"+id).append(html);
            },
            error: function(xhr, status, error) {
                console.log("Error:", error);
            }
        });
    }


    function closeResponse(id)
    {
      $("#response"+id).empty();
    }
</script>

