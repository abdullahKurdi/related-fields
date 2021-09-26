@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            Add Places
        </div>
        <div class="card-body">
            <form action="{{route('places.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <label for="country_id"></label>
                        <select name="country_id" id="country_id" class="form-control">
                            <option value="">---</option>
                            @foreach($countries as $country)
                            <option value="{{$country->id}}" {{old('country_id') == $country->id ? 'selected':''}}>{{$country->name}}</option>
                            @endforeach
                        </select>
                        @error('country_id')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        <label for="city_id"></label>
                        <select name="city_id" id="city_id" class="form-control">
                            <option value="">---</option>
                        </select>
                        @error('city_id')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    <div class="col-4">
                        <label for="district_id"></label>
                        <select name="district_id" id="district_id" class="form-control">
                            <option value="">---</option>
                        </select>
                        @error('district_id')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" class="btn btn-primary" value="Save Place">
                </div>
            </form>
        </div>
        <div class="card">
            <div class="card-header">
                ALL Places
            </div>
            <div class="table-responsive">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>District</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($locations as $location)
                            <tr>
                                <td>{{$location->title}}</td>
                                <td>{{$location->country->name}}</td>
                                <td>{{$location->city->name}}</td>
                                <td>{{$location->district->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="4">
                                {{$locations->links()}}
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <script>
            $(function () {
                populateCities();
                populateDistricts();
                $(document).on('change', '#country_id', function() {
                    populateCities();
                    populateDistricts();
                    return false;
                });
                $(document).on('change', '#city_id', function() {
                    populateDistricts();
                    return false;
                });
                function populateCities() {
                    $('option', $('#city_id')).remove();
                    $('#city_id').append($('<option></option>').val('').html(' --- '));
                    var countryIdVal = $('#country_id').val() != null ? $('#country_id').val() : '{{ old('country_id') }}';
                    $.get("{{ route('cities.index') }}", { country_id: countryIdVal }, function (data) {
                        $.each(data, function(val, text) {
                            var selectedVal = val == '{{ old('city_id') }}' ? "selected" : "";
                            $('#city_id').append($('<option ' + selectedVal + '></option>').val(val).html(text));
                        })
                    }, "json");
                }
                function populateDistricts() {
                    $('option', $('#district_id')).remove();
                    $('#district_id').append($('<option></option>').val('').html(' --- '));
                    var cityIdVal = $('#city_id').val() != null ? $('#city_id').val() : '{{ old('city_id') }}';
                    $.get("{{ route('districts.store') }}", { city_id: cityIdVal }, function (data) {
                        $.each(data, function(val, text) {
                            var selectedVal = val == '{{ old('district_id') }}' ? "selected" : "";
                            $('#district_id').append($('<option ' + selectedVal + '></option>').val(val).html(text));
                        })
                    }, "json");
                }
            });
        </script>
    @endsection
@endsection
