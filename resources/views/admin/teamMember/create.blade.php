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
                    <div class="card-header">{{ __('Team Member Add') }}</div>
                    <div class="card-body">
                        <form action="{{ route('team-members.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="">{{ __('Name') }}</label>
                                <input type="text" name="name" placeholder="Enter name" class="form-control"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Designation') }}</label>
                                <input type="text" name="designation" placeholder="Enter Designation" class="form-control"
                                    value="{{ old('designation') }}">
                                @error('designation')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Phone') }}</label>
                                <input type="text" name="phone" placeholder="Enter Phone" class="form-control"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Email') }}</label>
                                <input type="email" name="email" placeholder="Enter Email" class="form-control"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <div class="form-group mb-4">
                                <label for="">{{ __('Address') }}</label>
                                <input type="text" name="address" placeholder="Enter Address" class="form-control"
                                    value="{{ old('address') }}">
                                @error('address')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Youtube') }}</label>
                                <input type="text" name="youtube" placeholder="Enter youtube url" class="form-control"
                                    value="{{ old('youtube') }}">
                                @error('youtube')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Facebook') }}</label>
                                <input type="text" name="facebook" placeholder="Enter Facebook Url" class="form-control"
                                    value="{{ old('facebook') }}">
                                @error('facebook')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('Twitter') }}</label>
                                <input type="text" name="twitter" placeholder="Enter twitter Url" class="form-control"
                                    value="{{ old('twitter') }}">
                                @error('twitter')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <label for="">{{ __('status') }}</label>
                                <select name="status" id="" class="form-select">
                                    <option value="">select status</option>
                                    <option value="1">Published</option>
                                    <option value="0">UnPublished</option>
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
                                    <input type="file" name="photo" id="images" accept="image/*" required>
                                </label>
                                @error('photo')
                                    <p class="mb-0 position-absolute text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>


                            <button class="btn btn-success mt-4" type="submit">Submit</button>
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
