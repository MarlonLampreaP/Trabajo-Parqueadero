@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])

@section('content')  
      <i><img style="width:100%" src="{{ asset('material') }}/img/cover.jpg"></i>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush