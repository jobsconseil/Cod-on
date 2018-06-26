@if (session('success'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ session('success') }}</p>
        <div class="clearfix"></div>
    </div>
@endif