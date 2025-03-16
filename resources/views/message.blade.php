@if(!empty('success'))
    <div class="alert alert success" role="alert">
        {{ session('success') }}
    </div>
    @endif
@if(!empty('error'))
    <div class="alert alert danger" role="alert">
        {{ session('error') }}
    </div>
@endif