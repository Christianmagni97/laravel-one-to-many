@extends('admin.layouts.create-or-edit')
@section('page-title')


@endsection

@section('form-action')

{{ route('admin.posts.store') }}

@endsection


@section('form-method')

    @method('POST')

@endsection