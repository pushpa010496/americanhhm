@extends('../layouts/app')
@section('style')
@endsection
@section('content')
    <div class="clearfix"></div>
    <div class="container">
      <div class="row">
        <div class="pt-5 d-sm-none d-xs-none"></div>
        <div class="col-lg-10 offset-lg-1 pt-5 pb-5">
            <h1 class="text-center display-4 font-weight-bold" style="color: blue;"><u>Thank You</u></h1> 
            <h1 class="text-center display-4 font-weight-bold" style="color: blue;">Your Media Pack request was successfully submitted</h1>
            <p style="line-height: 150%;font-size: 20px;" align="center"><em> Thank you for your interest in AmHHM Media Pack. Our team extends its gratitude for your interest in AmHHM Magazine. We have sent a direct download link to your registered email-id.</em></p>
        <p style="line-height: 150%;font-size: 20px;" align="center">We look forward to approaching you soon. In the interim, please feel free to explore AmHHM by subscribing to our e-book and e-Newsletter. </p>
          <p style="line-height: 150%;font-size: 20px;" align="center">A world of Medical insights and industrial acumen awaits you!</p>
      </div>
        <div class="pt-5 pb-5"></div>
      </div>
    </div>
    <!--
  @if(Session('status') == 'true') 
  <a id="filedownload" download style="display: none" href="{{ trans('messages.mediapack_download_path') }}">Download</a>

  @endif  
-->
@endsection
<!--
@section('scripts')
  @if(Session('status') == 'true') 
    <script type="text/javascript">   
      for (let link of document.querySelectorAll('a[download]'))
        link.click();
    </script>
  @endif  
@endsection
-->