{{-- Edit account details --}}
<!-- Modal -->
<div class="modal fade" id="editAccountModal" tabindex="-1" role="dialog" aria-labelledby="editAccountModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editAccountModal">Edit</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('update.account', ['id' => Auth::user()->id ]) }}" id="updateAccountForm">
                @csrf
                <p>Update Data</p>
                <input name="updateAccountField" type="" id="updateAccountField" value="" required>
                <input name="updateTypeField" type="hidden" id="updateTypeField" value="">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="updateAccountData">Update</button>
        </div>
      </div>
    </div>
</div>