@extends('layouts.app')

@section('content_a')


<div class="container-fluid px-4">

    <h5 class="mt-4 textColor">Winners</h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">

    {{-- card section --}}
    <div class="row justify-content-center">

        <div class="col-md-2 text-center">
            <div class="card">
                <div class="card-header">
                    Total Draw Occered
                </div>
                <div class="card-body">
                    {{-- In Line Php --}}
                    <button type="button" class="btn btn-lg btn-primary" disabled>
                        @php
                        $count = DB::table('winners')->count();
                        echo $count;
                        @endphp
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Winner Table
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover myShadow rounded-lg" id="datatablesSimple">
                        <thead class="text-center bg-info">
                            <tr style="background-color: #94549c; color:whitesmoke">
                                <th colspan="4"><strong><b>Total Account Request </b></strong></th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Email</th>

                            </tr>

                        </thead>

                        <tbody class="text-center">
                            @php
                            $winner = DB::table('winners')
                            ->select('*')
                            ->orderBy('id','desc')
                            ->get();
                            $no = $count;
                            @endphp
                            @foreach ($winner as $item)
                            <tr class="table-secondary">
                                <td><i class="fa-solid fa-users"></i>Winner</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->ticket_number }}</td>
                                @endforeach
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection