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
                    <div class="card-header">{{ __('Update Portfolio') }}</div>
                    <div class="card-body">
                        <form action="{{ route('portfolios.update') }}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group mb-4">
                                <label for="">{{ __('Portfolio Category') }}</label>
                                <select name="portfolio_category_id" id="" class="form-select">
                                    <option value="">select Portfolio Category</option>
                                    @foreach ( $portfolioCategories as $portfolioCategory)
                                    <option {{ $portfolio?->portfolioCategory?->id }} value="{{ $portfolioCategory->id }}">{{ $portfolioCategory->title }}</option>
                                    @endforeach
                                </select>
                                @error('portfolio_category_id')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Title') }}</label>
                                <input type="text" name="title" placeholder="Enter name" class="form-control"
                                    value="{{ $portfolio->title }}">
                                @error('title')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Link') }}</label>
                                <input type="text" name="link" placeholder="Enter portfolio link" class="form-control"
                                    value="{{ $portfolio->link }}">
                                @error('link')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Status') }}</label>
                                <select name="status" id="" class="form-select">
                                    <option value="">select status</option>
                                    <option {{ $portfolio->status == 1 ? 'selected' : '' }} value="1">Published</option>
                                    <option {{ $portfolio->status == 0 ? 'selected' : '' }} value="0">UnPublished</option>
                                </select>
                                @error('status')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="images" class="drop-container" id="dropcontainer">
                                    <span class="drop-title">Drop files here</span>
                                    or
                                    <input type="file" name="image" id="images" accept="image/*">
                                </label>
                                @error('image')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <button class="btn btn-success mt-4" type="submit">Submit</button>
                            <a href="{{ route('expertise.index') }}">
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
@endpush
