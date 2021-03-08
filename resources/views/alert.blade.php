@if (session()->has('success'))
<div class="container">
    <div class="alert alert-success alert-dismissible fade show alert-has-icon" role="alert">
        <div class="alert-icon">
            <i class="far fa-check-circle"></i>
        </div>
        <div class="alert-body">
            <div class="alert-title" style="font-weight:normal">Success</div>
            {{ session()->get('success') }}
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif
@if (session()->has('error'))
<div class="container">
    <div class="alert alert-danger alert-dismissible fade show alert-has-icon" role="alert">
        <div class="alert-icon">
            <i class="far fa-trash-alt"></i>
        </div>
        <div class="alert-body">
            <div class="alert-title" style="font-weight:normal">Warning</div>
            {{ session()->get('error') }}
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif