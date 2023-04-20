@extends('layouts.dashboardLayout')

<style>
    .addRoomForm{
       padding-left: 20px;
       padding-top: 10px;
    }
</style>

@section('content')
    <div class="caontainer-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="card addRoomForm">
                    <div class="card-body">
                        <h4 class="mb-3">Add Rooms</h4>
                        <form action="{{route("roomInsert")}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control border border-dark">
                                    @error("name")

                                    <p class="mt-1 text-danger">{{$message}}</p>
                                        
                                    @enderror
                                </div>

                                <div class="col-lg-2">
                                    <label for="roomNum" class="form-label">Room Number</label>
                                    <input type="number" name="roomNum" class="form-control border border-dark">
                                    @error("roomNum")

                                    <p class="mt-1 text-danger">{{$message}}</p>
                                        
                                    @enderror
                                </div>

                                <div class="col-lg-2">
                                    <label for="roomPrice" class="form-label">Room Price</label>
                                    <input type="number" name="roomPrice" class="form-control border border-dark">
                                     @error("roomPrice")

                                    <p class="mt-1 text-danger">{{$message}}</p>
                                        
                                    @enderror
                                </div>

                                <div class="col-lg-2">
                                    <label for="roomPerson" class="form-label">Person</label>
                                    <input type="number" name="roomPerson" class="form-control border border-dark">
                                     @error("roomPerson")

                                    <p class="mt-1 text-danger">{{$message}}</p>
                                        
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-10">
                                    <div class="form-floating">
                                        <label for="floatingTextarea2">Description</label>
                                        <textarea class="form-control border border-dark" placeholder="Leave a Description here" id="floatingTextarea2" style="height: 100px"
                                            name="description"></textarea>

                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-2">
                                    <label for="ac_nonac" class="form-label">Ac/Non-Ac</label>
                                    <select class="form-select border border-dark" aria-label="Default select example" name="ac_nonac">
                                       
                                        <option value="AC">AC</option>
                                        <option value="Non_AC">Non AC</option>
                                    
                                    </select>
                                </div>

                                 <div class="col-lg-3">
                                    <label for="location" class="form-label">Which Floor ? </label>
                                    <select class="form-select border border-dark" aria-label="Default select example" name="location">
                                       
                                        <option value="First">First</option>
                                        <option value="Second">Second</option>
                                        <option value="Third">Third</option>
                                        <option value="Fourth">Fourth</option>
                                        <option value="Fourth">Fifth</option>
                                        <option value="Sixth">Sixth</option>
                                        <option value="Seventh">Seventh</option>
                                        <option value="Eight">Eight</option>
                                    
                                    </select>
                                </div>

                                {{-- <div class="col-lg-3">
                                    <label for="location" class="form-label">Avavility</label>
                                    <select class="form-select border border-dark" aria-label="Default select example" name="avability">
                                       
                                        <option value="Booked">Booked</option>
                                        <option value="Non_Booked">Non Booked</option>
                                        
                                    
                                    </select>
                                </div> --}}
                            </div>


                            <div class="row mt-4">
                                
                                <div class="col-lg-4">
                                    <img src="" alt="" width="200px" height="200px" class="d-block">
                                    <label for="picture" class="form-label mt-3">Add Picture</label>
                                    <input type="file" name="picture" class="form-control">
                                     @error("picture")

                                    <p class="mt-1 text-danger">{{$message}}</p>
                                        
                                    @enderror
                                </div>

                            </div>


                            <button class="btn btn-success mt-4 w-100" type="submit">Submit</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
