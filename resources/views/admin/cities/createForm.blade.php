@extends('admin.home')
@inject('governorates','App\Models\Governorate')

@section('title', 'Cities Page')
@section('small-title', 'Simple title')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="box box-default color-palette-box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-save"></i> Store a new city</h3>
            </div>
            <div class="box-body">
        <form role="form" action="{{ route('cities.store') }}" method="post">
            {{ csrf_field() }}     <!-- For security Reasons. -->
            <div class="box-body">
                <div class="form-group">
                    <label> Name </label>
                    @error('name')
                        <div class="callout callout-danger">{{ $errors->first('name') }}</div>
                    @enderror
                    <input type="text" name="name" class="form-control" placeholder="Enter the name of the category ?">
                </div>
                <div class="form-group">
                    <label> Governorate </label>
                    <select name="governorate_id" class="form-control">
                        @foreach($governorates::getAll() as $governorate)
                            <option value="{{$governorate->id}}"> {{$governorate->name}} </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
