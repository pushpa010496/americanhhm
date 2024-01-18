@extends('../layouts/app')
@section('style')

@endsection

@section('content')


<div class="clearfix"></div>

<div class="container">

  <div class="row PF-MobP030">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{url('magazine')}}">{{trans('messages.magazine_title')}} </a>
        </li>

      </ol>
    </nav>
  </div>

  <div class="row">
    <!-- // RIGHT SECTION --> 
    <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
        <!--  <h1 class="PF-Bshelf pt-2">{{trans('messages.magazine_title')}}</h1>     -->        
        </div>

       {{--  <p>{{trans('messages.magazine_text')}}</p> --}}
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-12">                                  
        
          <div class="text-center">  
          
          <img src="{{ config('app.url').'ebooks/magazine_Coming_soon.jpg' }}" alt="Magazine" title="Magazine" class="img-fluid" />    
      
        </div>
      
      </div>


      <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
   
      </div>

    </div>
    
      <!-- // RIGHT SECTION // --> 

      <!--// RIGHT SECTION - Square Banners -->
      <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
       <div class="bg-gray border-secondary">
        <div class="text-center">
          {{-- <h3 class="adv-title">Advertisements</h3> --}}
        </div>

        @include('layouts.partials._square_banner')
        </div>
      </div>
      <!-- RIGHT SECTION - Square Banners // --> 

  </div>

</div>


@endsection

@section('scripts')

@endsection