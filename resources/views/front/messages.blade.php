@if ($errors->any())
<div class="alert alert-danger float-right" dir="rtl" style="margin-left: 15%;margin-right: 15%; " dir="rtl" >
    <ul>
        @foreach ($errors->all() as $error)
        <li class="float-right">
            <p >{{$error}}</p>
        </li>
        <br>
        @endforeach
    </ul>
</div>
@endif

@if (session('success'))
<div class="alert alert-success float-right"  dir="rtl" style="margin-left: 15%;margin-right: 15%; " dir="rtl" >
   <p> {{session('success')}}</p>
</div>
@endif

@if (session('warning'))
<div class="alert alert-danger float-right" dir="rtl" style="margin-left: 15%;margin-right: 15%; " dir="rtl">
   <p style=""> یک خطا رخ داد.کد خطا: {{session('warning')}}</p>
</div>
@endif
