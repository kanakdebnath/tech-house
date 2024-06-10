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
                    <div class="card-header">
                        <h4> {{ __('Portfolios') }}</h4>
                        <a href="{{ route('portfolios.create') }}">
                            <button class="btn btn-sm btn-success"><i class="fa-solid fa-plus"></i></button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-active table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $item)
                                    <tr>
                                        <td> {{ $loop->iteration }} </td>
                                        <td>{{ $item?->portfolioCategory?->title }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->link }}</td>
                                        <td>{{ $item->status == App\Enum\StatusType::ACTIVE ? 'Published' : 'Unpublished' }}
                                        </td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <a href="{{ route('portfolios.edit', $item->id) }}">
                                                    <button class="btn me-2 btn-info btn-sm" type="button">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </button>
                                                </a>

                                                <form action="{{ route('portfolios.destroy', $item->id) }}"
                                                    id="delete_form_{{ $item->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm delete-btn"
                                                        data-id="{{ $item->id }}" type="button">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
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
