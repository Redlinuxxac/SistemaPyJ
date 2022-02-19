@extends('Layout.index')
@section('title')
Dashboard
@endsection
@section('menu')
    @include('Layout.partial.menuprincial',['seccion'=>'Dashboard'])    
    @include('Layout.partial.menusecundario',['seccion'=>'Dashboard'])
@endsection
@section('body')
    
@endsection
@section('footer')
    @include('Layout.partial.footer')
@endsection