@extends('layouts.dashboardLayout')



@section('content')
    <div class="caontainer-fluid">
        <div class="row">

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Main Food Item</h5>
                        <form action="{{route("insertMainFood")}}" method="post">
                            @csrf
                            <div class="mt-2 mb-2">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" name="price">
                                @error('price')
                                    <p class="text-danger mt-2 mb-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-2 mb-2">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                                @error('name')
                                    <p class="text-danger mt-2 mb-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-2 mb-2">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control border border-dark" placeholder="Leave a Description here" id="floatingTextarea2"
                                    style="height: 100px" name="description"></textarea>

                                @error('description')
                                    <p class="text-danger mt-2 mb-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <button class="btn btn-success mt-3 w-100" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Desserts Food Item</h5>
                        <form action="{{route("insertDesertFood")}}" method="post">
                            @csrf
                            <div class="mt-2 mb-2">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" name="desertprice">
                                @error('desertprice')
                                    <p class="text-danger mt-2 mb-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-2 mb-2">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="desertname">
                                @error('desertname')
                                    <p class="text-danger mt-2 mb-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-2 mb-2">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control border border-dark" placeholder="Leave a Description here" id="floatingTextarea2"
                                    style="height: 100px" name="desertdescription"></textarea>

                                @error('desertdescription')
                                    <p class="text-danger mt-2 mb-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <button class="btn btn-success mt-3 w-100" type="submit">Submit</button>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Drinks Food Item</h5>
                        <form action="{{route("insertdrinksFood")}}" method="post">
                            @csrf
                            <div class="mt-2 mb-2">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" name="drinksprice">
                                @error('drinksprice')
                                    <p class="text-danger mt-2 mb-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-2 mb-2">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="drinksname">
                                @error('drinksname')
                                    <p class="text-danger mt-2 mb-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-2 mb-2">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control border border-dark" placeholder="Leave a Description here" id="floatingTextarea2"
                                    style="height: 100px" name="drinksdescription"></textarea>

                                @error('drinksdescription')
                                    <p class="text-danger mt-2 mb-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <button class="btn btn-success mt-3 w-100" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
