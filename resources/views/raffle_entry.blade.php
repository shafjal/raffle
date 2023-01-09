@extends('layouts.app')

@section('content_a')


<div class="container-fluid px-4">

    <h5 class="mt-4 textColor">Paticipent Entry</h5>
    <hr style="width:100%;text-align:left;margin-left:0; border: 1px solid white;">

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    {{-- card section --}}
    <div class="row ">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"> <i class="fa-solid fa-users" style="color: tomato"></i> {{ __('Participant
                    Entry Tool') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('raffle.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"> <i
                                    class="fa-solid fa-file-signature" style="color: tomato"></i> {{ __('Participant
                                Name')
                                }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right"> <i
                                    class="fa-solid fa-phone-volume" style="color: tomato"></i> {{ __('Participant
                                Phone')
                                }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ticket_number" class="col-md-4 col-form-label text-md-right"><i
                                    class="fa-solid fa-ticket" style="color: tomato"></i> {{ __('Ticket Number')
                                }}</label>

                            <div class="col-md-6">
                                <input id="ticket_number" type="number"
                                    class="form-control @error('ticket_number') is-invalid @enderror"
                                    name="ticket_number" value="{{ old('ticket_number') }}" required
                                    autocomplete="ticket_number">

                                @error('ticket_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right"><i
                                    class="fa-solid fa-money-bill" style="color: tomato"></i> {{ __('Total Prize')
                                }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="number"
                                    class="form-control @error('amount') is-invalid @enderror" name="amount" value="20"
                                    required autocomplete="amount" readonly>

                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <img src="{{url('/title.png')}}" alt="" height="30" width="30">
                                    {{ __('Entry Tricket') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7 ">
            <table class="table table-bordered table-hover myShadow rounded-lg" id="datatablesSimple">
                <thead class="text-center bg-info">
                    <tr style="background-color: #94549c; color:whitesmoke">
                        {{-- <th><i class="fa-solid fa-equals"></i></th> --}}
                        <th colspan="5"><strong><b>Total Ticket Sale {{ $count }} </b></strong></th>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Email</th>

                    </tr>

                </thead>

                <tbody class="text-center">

                    @foreach ($participents as $item)
                    <tr class="table-secondary">
                        <td><i class="fa-solid fa-users"></i> {{ $no++ }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->ticket_number }}</td>
                        @endforeach
                    </tr>

                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection