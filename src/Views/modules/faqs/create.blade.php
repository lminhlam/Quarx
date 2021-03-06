@extends('quarx::layouts.dashboard')

@section('content')

    <div class="row">
        <h1 class="page-header">FAQS</h1>
    </div>

    @include('quarx::modules.faqs.breadcrumbs', ['location' => ['create']])

    {!! Form::open(['route' => 'quarx.faqs.store', 'class' => 'add']) !!}

        {!! FormMaker::fromTable('faqs', Config::get('quarx.forms.faqs')) !!}

        <div class="form-group text-right">
            <a href="{!! URL::to('quarx/faqs') !!}" class="btn btn-default raw-left">Cancel</a>
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@endsection
