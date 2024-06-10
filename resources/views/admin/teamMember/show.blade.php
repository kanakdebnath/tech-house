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
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $teamMember->name }}</td>
                                </tr>
                                <tr>
                                    <th>Designation</th>
                                    <td>{{ $teamMember->designation }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $teamMember->status == '1' ? 'Published' : 'unpublished' }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $teamMember->phone  }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $teamMember->email  }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $teamMember->address  }}</td>
                                </tr>
                                <tr>
                                    <th>Facebook</th>
                                    <td>{{ $teamMember->facebook  }}</td>
                                </tr>
                                <tr>
                                    <th>Youtube</th>
                                    <td>{{ $teamMember->youtube  }}</td>
                                </tr>
                                <tr>
                                    <th>Twitter</th>
                                    <td>{{ $teamMember->twitter  }}</td>
                                </tr>
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
