
@if (count($errors) > 0)
<!-- Form Error List -->
<br>
<div class="alert alert-danger">
    <strong>Whoops! Something went wrong!</strong>

    <br>

    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('msgSuc'))
    <div class="alert alert-success">
        {{session('msgSuc')}}
    </div>
@endif


@if(session('msgErr'))
    <div class="alert alert-danger">
        {{session('msgErr')}}
    </div>
@endif



