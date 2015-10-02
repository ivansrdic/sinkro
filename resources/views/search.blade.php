@extends('layouts.main')

@section('title')
Pretraga
@stop
    
@section('main')
  <section id="product-list" class="container">
    <div class="product-list">
      <div class="row">
        <aside class="col-md-4">
          <form name="search-form" method="get" action="{{ route('search') }}">
            <div class="widget search">
              <input type="text" name="p" class="form-control search_box" autocomplete="off" placeholder="Pretaži po modelu...">
            </div><!--/.search-->
            <div class="accordion">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading active">
                    <h3 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Tip industrije
                        <i class="fa fa-angle-right pull-right"></i>
                      </a>
                    </h3>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="media accordion-inner">
                        @foreach ($industryTypes as $industryType)
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="ti[]" value="{{ $industryType->ID }}"> {{ $industryType->name_hr }}
                          </label>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        Tip proizvoda
                        <i class="fa fa-angle-right pull-right"></i>
                      </a>
                    </h3>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="media accordion-inner">
                        @foreach ($productTypes as $productType)
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="tp[]" value="{{ $productType->ID }}"> {{ $productType->name_hr }}
                          </label>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Promjer
                        <i class="fa fa-angle-right pull-right"></i>
                      </a>
                    </h3>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="media accordion-inner">
                        @foreach ($diameters as $diameter)
                        <div class="checkbox-inline no-indent" style="margin-top:0;">
                          <label>
                            <input type="checkbox" name="d[]" value="{{ $diameter->diameter }}"> {{ $diameter->diameter }}mm
                          </label>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                        Nosivost
                        <i class="fa fa-angle-right pull-right"></i>
                      </a>
                    </h3>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                      <div class="media accordion-inner">
                        @foreach ($carryingCapacities as $carryingCapacity)
                        <div class="checkbox-inline no-indent" style="margin-top:0;">
                          <label>
                            <input type="checkbox" name="n[]" value="{{ $carryingCapacity->carrying_capacity }}"> {{ $carryingCapacity->carrying_capacity }}kg
                          </label>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div><!--/#accordion1-->
            </div>

            <button type="submit" class="btn btn-primary btn-lg">Pretraži</button>
          </form>
        </aside>
        <div class="col-md-8">
            @foreach ($products as $product)
            <div class="product-list-item">
                <div class="row">
                  <div class="col-xs-12 product-list-content">
                    <div class="col-xs-3">
                      <a href="{{ route('product', ['id' => $product->ID, 'name' => str_replace(' ', '-', $product->model)]) }}"><img class="img-responsive product-list-item-img" src="{{ asset('images/products/thumbnails/'.$product->image) }}" alt="{{ $product->model }}" /></a>
                    </div>
                    <div class="col-xs-9">
                      <h2><a href="{{ route('product', ['id' => $product->ID, 'name' => str_replace(' ', '-', $product->model)]) }}">{{ $product->model }}</a></h2>
                      <h3>{{ $product->description_en }}</h3>
                      <a class="btn btn-primary readmore" href="{{ route('product', ['id' => $product->ID, 'name' => str_replace(' ', '-', $product->model)]) }}">Detaljnije <i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                </div>    
            </div><!--/.product-list-item-->
            @endforeach

            {!! $products->appends(Request::except('page'))->render() !!}

        </div><!--/.col-md-8-->
      </div><!--/.row-->
    </div>
  </section><!--/#product-list-->
@stop

@section('footer')
@parent
@stop

@section('javascript')
@parent
@stop