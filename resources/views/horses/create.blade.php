@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Horse</div>
                <div class="card-body">
                    <form
                        method="POST"
                        action="/horses"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="form-group row">
                            <label
                                class="col-md-4 col-form-label text-md-right"
                                for="name"
                            >
                                Name
                            </label>
                            <div class="col-md-6">
                                <input
                                    class="form-control"
                                    type="text"
                                    name="name"
                                    id="name"
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-md-4 col-form-label text-md-right"
                                for="gender"
                            >
                                Gender
                            </label>
                            <div class="col-md-6">
                                <select
                                    class="form-control"
                                    name="gender"
                                    id="gender"
                                >
                                    <option value="mare">Mare</option>
                                    <option value="gelding">Gelding</option>
                                    <option value="stallion">Stallion</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-md-4 col-form-label text-md-right"
                                for="breed"
                            >
                                Breed
                            </label>
                            <div class="col-md-6">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="breed"
                                    id="breed"
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-md-4 col-form-label text-md-right"
                                for="color"
                            >
                                Color
                            </label>
                            <div class="col-md-6">
                                <input
                                    class="form-control"
                                    type="text"
                                    name="color"
                                    id="color"
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                                class="col-md-4 col-form-label text-md-right"
                                for="height"
                            >
                                Height (hh)
                            </label>
                            <div></div>
                            <div class="col-md-6">
                                <input
                                    class="form-control"
                                    type="text"
                                    name="height"
                                    id="height"
                                />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
