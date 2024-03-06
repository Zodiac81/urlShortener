<form class=" g-3 needs-validation" method="POST" action="{{ route('url.store') }}" novalidate>
    @csrf
    <div class="col-md-8 mt-2">
        <label for="validationCustomUsername" class="form-label">URL</label>
        <div class="input-group has-validation">
            <input type="text" name="original_url" class="form-control" id="validationCustomUsername" value="{{ old('original_url') }}" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please type URL
            </div>
        </div>
    </div>

    <div class="col-md-8 mt-2">
        <label for="visitApplyNumber" class="form-label">Apply Visit Number</label>
        <div class="input-group has-validation">
            <input type="number" name="allow_visit" class="form-control" id="visitApplyNumber" min="0" value="{{ old('allow_visit', 0) }}" data-bind="value:replyNumber" required />
            <div class="invalid-feedback">
                Please provide a valid number
            </div>
        </div>
    </div>

    <div class="col-md-8 mt-2">
        <label for="datetimepicker" class="form-label">Short URL Lifetime</label>
        <div class="input-group has-validation">
            <input name="disabled_at" type="datetime-local" class="form-control" id="datetimepicker" value="{{ old('disabled_at') }}" required>
            <div class="invalid-feedback">
                Please provide a valid date
            </div>
        </div>
    </div>
    <br>
    <div class="col-12">
        <button class="btn btn-primary mb-3" type="submit">Submit</button>
    </div>
</form>

