@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			


<div class="col-md-3 col-xs-6 bg-red">
          <!-- small box -->
          <div class="small-box">
            <div class="inner col-xs-6">
              <h3>65º</h3>

              <p>Despacho - Temperatura Ambiente</p>
            </div>
            <div class="icon col-xs-6">
            	<img width="100%" src="../img/rojo.gif" alt="User Avatar">
            
            </div>
            <a href="#" class="small-box-footer col-md-12">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>


<div class="col-md-3 col-xs-6 bg-red">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner col-xs-6">
              <h3>65º</h3>

              <p>Despacho - Temperatura Ambiente</p>
            </div>
            <div class="icon col-xs-6">
            	<img width="100%" src="../img/rojo.gif" alt="User Avatar">
            
            </div>
            <a href="#" class="small-box-footer col-md-12">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>



	
			

		
		</div>
	</div>
@endsection
