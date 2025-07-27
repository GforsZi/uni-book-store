<form class="d-flex input-group my-2" role="search" action="{{ $url }}" method="get">
    <input class="form-control" name="search" type="search" placeholder="{{ $placeholder }}" aria-label="Text input with dropdown button" />
    <div class="w-25">
    <select class="form-select" name="type" style="border-radius:0px;" id="autoSizingSelect">
      <option selected>search by</option>
      {{ $slot }}
    </select>
    </div>
    <button class="btn btn-outline-success" type="submit">Search</button>
    
</form>