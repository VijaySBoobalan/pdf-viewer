@extends('layouts.master')
@section('title', 'Dashboard')
@section('css-plugin')
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        @if (Request::segment(1) != NULL)
                            <form action="{{ route('update_files',Request::segment(1)) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="input-group">
                                    <input type="file" name="file_upload" id="file_upload" class="form-control">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                                @if ($errors->has('file_upload'))
                                    <strong style="color: red">{{ $errors->first('file_upload') }}</strong>
                                @endif
                            </form>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                @if (!empty($streampdf))
                    <embed class="loadpdf" src="{{asset('uploads/PdfFiles/' . $streampdf->saveasfilename."#toolbar=0&navpanes=0&scrollbar=0")}}" style="width: 100%; max-width: 100%; height: 600px;"/>
                @endif
            </div>
        </div>
    </div>
@endsection
