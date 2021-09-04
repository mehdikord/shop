@if(!empty($errors->all()))
    <div class="alert alert-danger text-left" role="alert">
        <h4 class="alert-heading">خطا :</h4>
        <hr>
        <ul class="text-left">
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
        </ul>
    </div>
@endif
