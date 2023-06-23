

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
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-geo-location" role="tabpanel" aria-labelledby="nav-geo-location-tab" tabindex="0">
              <?= $this->element('geo') ?>
            </div>
            <div class="tab-pane fade" id="nav-office-structure" role="tabpanel" aria-labelledby="nav-office-structure-tab" tabindex="0">
              <?= $this->element('office') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

