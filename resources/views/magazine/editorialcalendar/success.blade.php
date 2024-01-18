@extends('../layouts/app')
@section('style')
<meta http-equiv="refresh" content="4;URL='{{url('/')}}/editorialcalendardwnlink'" />  
@endsection

@section('content')


    <div class="clearfix"></div>

    <div class="row">
      <div class="container">
        <div class="pt-5 d-sm-none d-xs-none"></div>
        <div class="col-lg-10 offset-lg-1 pt-5 pb-5">
            <h3 class="text-center display-4 font-weight-bold" style="color: green;"><b>Thank You...!</b></h3> 
            <p style="line-height: 150%;" align="center"><b>Your Editorial calendar request was successfully submitted</b></p>
            <p style="line-height: 150%;" align="center">Thank you for showing interest in our Editorial Calendar, our representative will reach you shortly.
            </p>
        </div>
        <div class="pt-5 pb-5"></div>
      </div>
    </div>

  @if(session('status') == 'true') 
  <a id="fileopen" target="_blank" style="display: none" href="{{ trans('messages.editorial_calendar_pdf') }}">download</a>
  
  @endif  
@endsection

@section('scripts')
  @if(Session('status') == 'true') 
    <script type="text/javascript">   
      for (let link of document.querySelectorAll('a[id="fileopen"]'))
        link.click();
    </script>
  @endif  
@endsection