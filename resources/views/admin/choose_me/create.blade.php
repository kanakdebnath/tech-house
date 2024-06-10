@extends('admin.layout.default')

@push('css')
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css"
        rel="stylesheet">

    <style>
        .drop-container {
            position: relative;
            display: flex;
            gap: 10px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 200px;
            padding: 20px;
            border-radius: 10px;
            border: 2px dashed #555;
            color: #444;
            cursor: pointer;
            transition: background .2s ease-in-out, border .2s ease-in-out;
        }

        .drop-container:hover {
            background: #eee;
            border-color: #111;
        }

        .drop-container:hover .drop-title {
            color: #222;
        }

        .drop-title {
            color: #444;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            transition: color .2s ease-in-out;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">{{ __('Why choose me') }}</div>
                    <div class="card-body">
                        <form action="{{ route('choose-me.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="">{{ __('Title') }}</label>
                                <input type="text" name="title" placeholder="Enter title" class="form-control"
                                    value="{{ $choose?->title }}">
                                @error('title')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Sub Title') }}</label>
                                <input type="text" name="sub_title" placeholder="Enter sub_title" class="form-control"
                                    value="{{ $choose?->sub_title }}">
                                @error('sub_title')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="images" class="drop-container" id="dropcontainer">
                                    <span class="drop-title">Drop files here</span>
                                    or
                                    <input type="file" name="photo" id="images" accept="image/*">
                                </label>
                                @error('photo')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Description') }}</label>
                                <textarea name="description" id="package" cols="30" rows="10">{{ $choose?->description }}</textarea>
                                @error('description')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <button class="btn btn-success mt-4" type="submit">Submit</button>
                            <a href="{{ route('packages.index') }}">
                                <button class="btn btn-sm btn-success mt-4" type="button">Back</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('inline-scripts')
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js">
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#package'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
