@extends('layouts.app')

@section('content_a')


<div class="container-fluid px-4">

    <h5 class="mt-4 textColor">Raffel Draw Puzzle</h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">

    {{-- card section --}}
    <div class="row ">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-trophy" style="color: tomato"></i>
                    Winner Name
                </div>
                <div class="card-body">
                    <h1 class="card-title text-center">
                        @php
                        $winner = DB::table('raffle_pickers')
                        ->select('*')
                        ->inRandomOrder()
                        ->limit(1)
                        ->get();
                        @endphp

                        @foreach ($winner as $item)
                        Name: {{ $item->name }}<br>
                        Number: {{ $item->ticket_number }}

                        <form action="{{ route('draw-delete',$item->id) }}" method="POST">
                            @csrf
                            @method('')
                            <button type="submit" class="btn btn-lg btn-primary"><a
                                    onClick="window.location.reload()">Back</a></button>
                        </form>
                        @endforeach
                    </h1>

                </div>
            </div>
        </div>
        <div class="col-md-2 text-center">
            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-box-open" style="color: tomato"></i>
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
                    <i class="fa-solid fa-trophy" style="color: tomato"></i>
                    Winner Table
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover myShadow rounded-lg" id="datatablesSimple">
                        <thead class="text-center bg-info">
                            <tr style="background-color: #94549c; color:whitesmoke">
                                <th colspan="4"><strong><b>Total {{ $count }} Winner</b></strong></th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Ticket Number</th>

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