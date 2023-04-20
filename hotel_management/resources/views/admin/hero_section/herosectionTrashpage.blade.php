@extends('layouts.dashboardLayout')



@section('content')
    <div class="row">
        <div class="col-lg-10">

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Home Section Banner Images Trash Bin</h3>

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
                                    <td><a href="{{ route('heroSectionImgRes', $HeroSectionContent->id) }}"
                                            class="btn btn-danger">Restore</a>
                                            <a href="{{ route('heroSectionImgParDelete', $HeroSectionContent->id) }}"
                                            class="btn btn-danger">Parmanent Delete</a></td>


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>



    </div>
@endsection
