<!-- Stored in storage/view/child.blade.php -->

@extends('layouts.app')

@section('title','Page Title')

@section('sidebar')
    @parent

    <p>This is aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaappended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection