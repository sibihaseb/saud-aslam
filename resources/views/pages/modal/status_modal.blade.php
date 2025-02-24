{{--  status modal  --}}
<div id="statusModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title-delete">{{ __('Confirmation') }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">{{ __('Are you sure you want to change status?') }}</h4>
            </div>
            <div class="modal-footer">
                <button type="button" name="confirm_status" id="confirm_status"
                    class="btn btn-danger">{{ __('OK') }}</button>
                <button type="button" id="closemybt" class="btn btn-secondary"
                    data-bs-dismiss="modal">{{ __('Cancel') }}</button>
            </div>
        </div>
    </div>
</div>