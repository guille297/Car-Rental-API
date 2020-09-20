@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <car-component inline-template>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Make</th>
                                    <th>Model Name</th>
                                    <th>Model Year</th>
                                    <th>Mileage</th>
                                    <th>Availability</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="car in cars">
                                    <td v-text="car.id"></td>
                                    <td v-text="car.make"></td>
                                    <td v-text="car.model_name"></td>
                                    <td v-text="car.model_year"></td>
                                    <td v-text="car.mileage"></td>
                                    <td v-text="car.availability"></td>
                                    <td v-text="car.category_id"></td>
                                </tr>
                            </tbody>
                        </table>
                    </car-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
