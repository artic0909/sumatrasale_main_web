<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Services Page's Content") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Logo</th>
                                <th scope="col">Title</th>
                                <th scope="col">Type</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr>
                                <td><img class="rounded-3" width="50" height="50" src="{{ asset('storage/' . $service->image) }}" alt=""></td>
                                <td class="text-success fw-bold" style="text-transform: capitalize;">{{ $service->title }}</td>
                                <td class="text-success fw-bold" style="text-transform: capitalize;">{{ $service->type }}</td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#EditmModal{{$service->id}}">
                                        <i class="fa-solid fa-pen-to-square fa-2x text-primary"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeletemModal{{$service->id}}">
                                        <i class="fa-solid fa-trash-can fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Add Modal Start-->
    <button type="button" class="btn btn-danger floating-button" data-bs-toggle="modal" data-bs-target="#AddModal">
        Add Services
    </button>


    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AddModalLabel">Add Service Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="image" class="form-label fw-bold mb-2">Service Logo<span class="text-danger">*</span></label>
                            <input type="file" id="image" name="image" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="title" class="form-label fw-bold mb-2">Service Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="title" id="title" placeholder="Enter Services Title" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="type" class="form-label fw-bold mb-2">Service Title<span class="text-danger">*</span></label>
                            <select name="type" id="type" class="form-control">
                                <option value="Marketing & Business Growth">Marketing & Business Growth</option>
                                <option value="Digital Marketing & Online Presence">Digital Marketing & Online Presence</option>
                                <option value="Website & App Development">Website & App Development</option>
                                <option value="Software Solutions (Graphicode India)">Software Solutions (Graphicode India)</option>
                                <option value="Educational Services (Schoolwala)">Educational Services (Schoolwala)</option>
                                <option value="Creative & Design Studio">Creative & Design Studio</option>
                                <option value="Consultancy & Business Support">Consultancy & Business Support</option>
                                <option value="Offline Field Services">Offline Field Services</option>
                            </select>
                        </div>

                        <div class="modal-footer1 d-flex align-items-center justify-end gap-3">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger2">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Add Modal End-->



    <!-- Edit Modal Start-->
    @foreach($services as $service)
    <div class="modal fade" id="EditmModal{{$service->id}}" tabindex="-1" aria-labelledby="EditmModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditmModal">Edit Service Data</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin-services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="image" class="form-label fw-bold mb-2">Service Logo<span class="text-danger">*</span></label>
                            <input type="file" id="image" name="image" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="title" class="form-label fw-bold mb-2">Service Title<span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" name="title" id="title" value="{{ $service->title }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="type" class="form-label fw-bold mb-2">Service Title<span class="text-danger">*</span></label>
                            <select name="type" id="type" class="form-control">
                                @if($service->type)
                                    <option selected value="{{ $service->type }}">{{ $service->type }}</option>
                                @endif
                                <option value="Marketing & Business Growth">Marketing & Business Growth</option>
                                <option value="Digital Marketing & Online Presence">Digital Marketing & Online Presence</option>
                                <option value="Website & App Development">Website & App Development</option>
                                <option value="Software Solutions (Graphicode India)">Software Solutions (Graphicode India)</option>
                                <option value="Educational Services (Schoolwala)">Educational Services (Schoolwala)</option>
                                <option value="Creative & Design Studio">Creative & Design Studio</option>
                                <option value="Consultancy & Business Support">Consultancy & Business Support</option>
                                <option value="Offline Field Services">Offline Field Services</option>
                            </select>
                        </div>

                        <div class="modal-footer1 d-flex align-items-center justify-end gap-3">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger2">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    <!-- Edit Modal End-->


    <!-- Delete Modal Start -->
    @foreach($services as $service)
    <div class="modal fade" id="DeletemModal{{$service->id}}" tabindex="-1" aria-labelledby="DeletemModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeletemModal">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this information?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin-services.delete', $service->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn" style="background-color: red; color: white;">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Delete Modal End -->




</x-app-layout>