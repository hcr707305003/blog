@extends('common.base')
@section('content')    
     {{-- 这里是Blade注释 --}} 
    <section class="section-wrap contact pt-mdm-60">
        <div class="page-header text-center">
            <span style="display: block; padding-bottom: 20px; font-size: 36px;line-height: 1.1;font-family: inherit;line-height: 36px;">{{$article->title}}</span>
        </div> 
        <div class="container relative">
            <div class="row">
                @if (empty(trim($article->images)))
                    <div class="col-sm-10 col-sm-offset-1">
                        <p>
                            {{$article->content}}
                        </p>
                    </div>
                @else
                    <div class="col-md-5">
                        {{$article->content}}            
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="{{$article->images}}" class="img-responsive center-block" alt="">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section> <!-- end content -->
@endsection