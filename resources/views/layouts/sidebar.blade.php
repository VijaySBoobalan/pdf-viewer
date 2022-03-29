<aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="{{route('/')}}" class="brand-link navbar-primary">
        <img src="{{ asset('img/user-160x160.png') . '?v=' . config('app.versionnumber') }}" alt="{{config('app.name')}} Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-bold text-white">{{config('app.name')}}</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user-160x160.png') . '?v=' . config('app.versionnumber') }}" class="img-circle elevation-2" alt="{{config('app.name')}} User Image">
            </div>
            <div class="info">
                <a href="{{route('/')}}" class="d-block">{{ucfirst(Auth::user()->name)}}</a>
            </div>
        </div>

         <!-- search form (Optional) -->
        <form action="{{ route('upload_files') }}" method="post" class="sidebar-form" enctype="multipart/form-data">
            @csrf
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
        <!-- /.search form -->

        <nav class="mt-2 mb-5">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if(count($pdfFiles)>0)
                    @foreach ($pdfFiles as $pdf)
                        <li class="nav-item">
                            <a href="{{route('viewfile',$pdf->id)}}" class="nav-link @if (Request::segment(1) == $pdf->id) active @endif">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>{{ $pdf->original_name }}</p>
                            </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </nav>
    </div>
</aside>