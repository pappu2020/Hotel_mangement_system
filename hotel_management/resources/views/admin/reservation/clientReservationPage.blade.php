@extends('layouts.dashboardLayout')



@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Reservations List</h4>
            <form action="{{ route('reservationAction') }}" method="post">
                @csrf
                <table class="table" id="myRevTable">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Room Name</th>
                            <th scope="col">Room Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Adult</th>
                            <th scope="col">Children</th>
                            <th scope="col">Check In</th>
                            <th scope="col">Check Out</th>
                            <th scope="col">Reservation Date</th>
                            <th scope="col">Note</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($allReserveInfo as $key => $ReserveInfo)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $ReserveInfo->rel_to_room->name }}</td>
                                <td>{{ $ReserveInfo->rel_to_room->roomNum }}</td>
                                <td>{{ $ReserveInfo->customer_name }}</td>
                                <td>{{ $ReserveInfo->customer_phone }}</td>
                                <td>{{ $ReserveInfo->customer_email }}</td>
                                <td>{{ $ReserveInfo->customer_address }}</td>
                                <td>{{ $ReserveInfo->adult_number }}</td>
                                <td>{{ $ReserveInfo->children_number }}</td>
                                <td>{{ $ReserveInfo->check_in_date }}</td>
                                <td>{{ $ReserveInfo->check_out_date }}</td>
                                <td>{{ $ReserveInfo->created_at->diffForHumans() }}</td>
                                <td>{{ $ReserveInfo->notes }}</td>
                                <td><span
                                        class="badge badge-{{ $ReserveInfo->status == 'Booked' ? 'danger' : 'success' }}">{{ $ReserveInfo->status == 'Booked' ? $ReserveInfo->status : 'Open' }}</span>
                                </td>

                                <td>
                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24">
                                                </rect>
                                                <circle fill="#000000" cx="5" cy="12" r="2">
                                                </circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2">
                                                </circle>
                                                <circle fill="#000000" cx="19" cy="12" r="2">
                                                </circle>
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start"
                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">


                                        <button
                                            value="{{ $ReserveInfo->id . ',' . 'Booked' . ',' . $ReserveInfo->room_id }}"
                                            type="submit" name="stutusButton"
                                            class="dropdown-item btn-primary">Booked</button>
                                        <button
                                            value="{{ $ReserveInfo->id . ',' . 'Open' . ',' . $ReserveInfo->room_id}}"
                                            type="submit" name="stutusButton"
                                            class="dropdown-item btn-primary">Open</button>





                                    </div>

                                </td>

                                <td><a href="" class="btn btn-danger">Delete</a></td>


                            </tr>
                        @endforeach

                    </tbody>
            </form>
            </table>
        </div>
    </div>
@endsection

@section('javascriptSection')
    <script>
        $(document).ready(function() {
            $('#myRevTable').DataTable();
        });
    </script>
@endsection
