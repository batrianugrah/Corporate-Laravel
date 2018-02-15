@extends(env('THEME') . '.layouts.site')

@section('nav')
    {!! $nav !!}
@endsection

@section('content')
    {!! $content !!}
@endsection

@section('sidebar')
    {!! $sidebarRight !!}
@endsection

@section('footer')
    {!! $footer !!}
@endsection