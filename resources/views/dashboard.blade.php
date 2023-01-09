@extends('layouts.app')

@section('content_a')

<div class="container-fluid px-4">
    <h5 class="mt-4 textColor">Admin Dashboard
    </h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">
    {{-- card section --}}
    <div class="row justify-content-center">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Total Ticke Sale</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{ $sale }}</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4 myShadow">
                <div class="card-header">
                    <i class="fas fa-money-bill-alt fa-2x myShadow2" aria-hidden="true" style="float:left;">
                    </i>
                    <h5 class="text-right" style="margin-top: 1px">Total Ammount</h5>
                </div>
                <div class="card-body">
                    <h5 class="text-center">{{ $amounts }}</h5>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                </div>
            </div>
        </div>
        <div class="col-md-7 ">
            <table class="table table-bordered table-hover myShadow rounded-lg" id="datatablesSimple">
                <thead class="text-center bg-info">
                    <tr style="background-color: #94549c; color:whitesmoke">
                        {{-- <th><i class="fa-solid fa-equals"></i></th> --}}
                        <th colspan="5"><strong><b>Total Ticket Sale {{ $sale }} </b></strong></th>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Ticket</th>
                        <th>Tk</th>

                    </tr>

                </thead>

                <tbody class="text-center">

                    @foreach ($participents as $item)
                    <tr class="table-secondary">
                        <td><i class="fa-solid fa-users"></i></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->ticket_number }}</td>
                        <td>{{ $item->amount }}</td>
                        @endforeach
                    </tr>

                </tbody>

            </table>
        </div>

    </div>



    @endsection