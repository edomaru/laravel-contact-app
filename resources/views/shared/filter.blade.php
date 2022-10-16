<div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col">
          <a href="{{ request()->fullUrlWithQuery(['trash' => false]) }}" class="btn {{ !request()->query('trash') ? 'text-primary' : 'text-secondary' }}">All</a> | 
          <a href="{{ request()->fullUrlWithQuery(['trash' => true]) }}" class="btn {{ request()->query('trash') ? 'text-primary' : 'text-secondary' }}">Trash</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form id="search-form">
        <input type="hidden" name="trash" value="{{ request()->query('trash') }}">
        <div class="row">
          <div class="col">
            @isset($filterView)
                @includeIf($filterView)
            @endisset
          </div>
          <div class="col">
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="search" value="{{ request()->query('search') }}" id="search-input" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="reset-filter-btn">
                    <i class="fa fa-refresh"></i>
                </button>
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  @push('scripts')
      <script>
        (function () {
          let query = location.search,
              pattern = /[?&]search=/,
              button = document.getElementById("reset-filter-btn")
          if (pattern.test(query)) {
              button.style.display = 'block'
          } else{
              button.style.display = 'none'
          }
        })();

        document.getElementById('reset-filter-btn').addEventListener('click', () => {
          let input = document.getElementById('search-input'),
              selects = document.querySelectorAll('.search-select');

          if (input) {
            input.value = "";
          }

          selects.forEach(select => {
            select.selectedIndex = 0;
          });

          window.location.href = window.location.href.split('?')[0]
        })
      </script>
  @endpush