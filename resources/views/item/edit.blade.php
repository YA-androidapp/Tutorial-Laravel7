@extends('layouts.app')

@php
$title = __('Items');
@endphp
@section('content')
<div class="container">
    <h1><a href="{{ url('item/') }}" class="text-dark">{{ $title }}</a></h1>
    <form action="{{ url('item/'.$item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$item->id}}">
        <div class="card">
            <div class="card-header">
                {{ __('Edit') }}
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-md-2">{{ __('Title') }}</dt>
                    <dd class="col-md-10"><input type="text" class="form-control" name="title" id="title"
                            value="{{ $item->title }}"></dd>
                    <dt class="col-md-2">{{ __('Content') }}</dt>
                    <dd class="col-md-10"><input type="text" class="form-control" name="content" id="content"
                            value="{{ $item->content }}">
                    </dd>
                </dl>
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-primary" type="submit">{{ __('Update')}}</button>
            </div>
        </div>
    </form>
</div>
@endsection

{{-- Copyright (c) 2020 YA-androidapp(https://github.com/YA-androidapp) All rights reserved. --}}