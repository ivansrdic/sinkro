@extends('layouts.main')

@section('title')
{{ $product->model }} - {{ $productType->name_hr }}
@stop
    
@section('main')
<section id="product" class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="product-image">
        <a class="preview" href="{{ asset('images/products/'.$product->image) }}" rel="prettyPhoto"><img src="{{ asset('images/products/'.$product->image) }}" alt="{{ $product->model }}" title="{{ $product->model }}"></a>
      </div>
      <a class="btn btn-primary" onclick="window.history.back()"><i class="fa fa-angle-left"></i> Povratak</a>
    </div>
    <div class="col-md-9">
      <h1>{{ $product->model }}</h1>
      <div class="product-features row">
        @foreach ($features as $feature)
          @if($product[$feature])
            <div class="product-feature pull-left">
              <div class="product-feature-image">
                @if($feature === "hole_diameter")
                <img src="{{ asset('images/features/'.$feature.'_'.$product->category.'.gif') }}" alt="{{ $feature }}" title="{{ $feature }}">
                @else
                <img src="{{ asset('images/features/'.$feature.'.gif') }}" alt="{{ $feature }}" title="{{ $feature }}">
                @endif
              </div>
              <div class="product-feature-span">
                <span>{{ $product[$feature] }}</span>
              </div>
            </div>
          @endif
        @endforeach
      </div>
      <div class="product-details row">
        <table class="table table-striped">
          <tbody>
          @foreach ($details as $detail)
            @if($product[$detail])
            <tr>
              <td>{{ $details_hr[$detail] }}</td>
              <td>{{ $product[$detail] }}</td>
            </tr>
            @endif
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section><!--/#product-->
@stop

@section('footer')
@parent
@stop

@section('javascript')
@parent
@stop