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
                    <div class="card-header">{{ __('Add Service Category') }}</div>
                    <div class="card-body">
                        <form action="{{ route('service-categories.update', $serviceCategory->id) }}" method="post"
                            >
                            @method('put')
                            @csrf
                            <div class="form-group mb-4">
                                <label for="">{{ __('Title') }}</label>
                                <input type="text" name="title" placeholder="Enter title" class="form-control"
                                    value="{{ $serviceCategory?->title }}">
                                @error('title')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Status') }}</label>
                                <select name="status" id="" class="form-select">
                                    <option value="">select status</option>
                                    <option {{ $serviceCategory->status == App\Enum\StatusType::ACTIVE ? 'selected' : '' }}
                                        value="{{ App\Enum\StatusType::ACTIVE }}">Published</option>
                                    <option {{ $serviceCategory->status == App\Enum\StatusType::INACTIVE ? 'selected' : '' }}
                                        value="{{ App\Enum\StatusType::INACTIVE }}">UnPublished</option>
                                </select>
                                @error('status')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <button class="btn btn-success mt-4" type="submit">Submit</button>
                            <a href="{{ route('service-categories.index') }}">
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
