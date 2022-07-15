<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
      <div class="row">
        <div class="col">
          @includeUnless(empty($companies), 'contacts._company-selection')
        </div>
        <div class="col">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-refresh"></i>
                  </button>
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>