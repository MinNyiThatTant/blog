@extends('admin.layout.master')

@section('content')

<div class="card">
            <div class="card-header">
                <h4 class="card-title">New Course</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Name</label>
                            <input type="text" class="form-control" id="basicInput" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label for="basicInput">Teacher</label>
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect">
                                    <option>Teacher A</option>
                                    <option>Teacher B</option>
                                    <option>Teacher C</option>
                                </select>
                            </fieldset>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="basicInput">Duration</label>
                            <input type="text" class="form-control" id="basicInput" placeholder="Enter Duration">
                        </div>

                        <div class="form-group">
                            <label for="basicInput">Start Date</label>
                            <input type="text" class="form-control" id="basicInput" placeholder="Enter Start Date">
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                    <div class="button my-3">
                            <a href="#" class="btn btn-primary">Save </a>
                    </div>
                </div>
            </div>
        </div>

@endsection