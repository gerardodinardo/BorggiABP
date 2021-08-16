@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
          <strong>Oops, sembla que hi ha hagut un error!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
@endif
