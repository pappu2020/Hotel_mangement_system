@extends('layouts.dashboardLayout')



@section('content')
    <div class="row">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Home Section Banner Images</h3>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Images</th>
                                <th scope="col">Created By</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($allHeroSectionContent as $key => $HeroSectionContent)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td><img src="{{ asset('uploads/heroSection') }}/{{ $HeroSectionContent->bannerImg }}"
                                            alt="" width="300px" height="300px"></td>
                                    <td>{{ $HeroSectionContent->rel_to_users->name }}</td>
                                    <td>{{ $HeroSectionContent->created_at->diffForHumans() }}</td>
                                    <td><a href="{{ route('heroSectionImgDelete', $HeroSectionContent->id) }}"
                                            class="btn btn-danger">Delete</a></td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Banner Picture</h4>

                    <form action="{{ route('heroSectionBannerImgInsert') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <img src="" alt="" width="250px" height="250px" id="heroImageView">

                        <input type="file" class="form-control mt-3 mb-3" name="heroPageImg"
                            onchange="document.getElementById('heroImageView').src = window.URL.createObjectURL(this.files[0])">

                        @error('heroPageImg')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
@endsection
