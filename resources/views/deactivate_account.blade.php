
<div class="modal fade" id="deactivate_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class='col-md-10'>
                    <h5 class="modal-title" id="exampleModalLabel">Deactivate Account</h5>
                </div>
                <div class='col-md-2'>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <form method='POST' action='deactivate-account' onsubmit='show();'  >
                <div class="modal-body">
                    {{ csrf_field() }}
                    
                    <input class='form-control' name='id' id='id_deactivate' type='hidden' required>
                   
                  
                   
                    <div class='row'>
                        <div class='col-md-12'>
                            Remarks :
                            <textarea class='form-control' name='remarks' placeholder="" required></textarea>
                        </div>
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type='submit'  class="btn btn-primary" >Submit</button>
                </div>
            </form>
        </div>  
    </div>
</div>
<script>
    function deactivate_account(id)
    {
        var transfer_account = {!! json_encode($inventories->toArray()) !!};
        document.getElementById("id_deactivate").value = transfer_account[id].id;
    }
</script>
