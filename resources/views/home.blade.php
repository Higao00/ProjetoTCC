@extends('layouts.app')

@section('content')

    <iframe src="{{ route('calendar') }}" frameborder="0" style="width:100%; height:100%; border:none;overflow:hidden;"></iframe>
@endsection
