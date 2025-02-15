<div>

    @if (session('message'))
    <div class="alert alert-success my-success-alert">{{ session('message') }}</div>
    @endif

</div>