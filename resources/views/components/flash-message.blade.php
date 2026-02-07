@if (session('sucess'))
    <div style='color: green'>
        {{ session('sucess') }}
    </div>
@endif

@if (session('error'))
    <div style='color: red'>
        {{ session('error') }}
    </div>
@endif