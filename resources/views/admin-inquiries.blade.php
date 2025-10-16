<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Inquiries Page's Content") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Service</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Inqury</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inquiries as $inquiry)
                            <tr>
                                <td class="fw-bold">{{ $inquiry->name }}</td>
                                <td class="text-success fw-bold">{{ $inquiry->service }}</td>
                                <td class="fw-bold">{{ $inquiry->phone_number }}</td>
                                <td><a style="text-decoration: underline;" class="text-primary" href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a></td>
                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#descriptionViewModal{{$inquiry->id}}">
                                        <i class="fa-solid fa-message fa-2x text-success"></i>
                                    </a>
                                </td>

                                <td>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal{{$inquiry->id}}">
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


    <!-- Inquiries View Modal Start -->
     @foreach($inquiries as $inquiry)
    <div class="modal fade" id="descriptionViewModal{{$inquiry->id}}" tabindex="-1" aria-labelledby="descriptionViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="descriptionViewModalLabel">{{ $inquiry->name }}'s Inquiry</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fw-bold">{{ $inquiry->inquiry }}</p>
                </div>

            </div>
        </div>
    </div>
    @endforeach
    <!-- Inquiries View Modal End -->




    <!-- Delete Modal Start -->
     @foreach($inquiries as $inquiry)
    <div class="modal fade" id="DeleteModal{{$inquiry->id}}" tabindex="-1" aria-labelledby="DeleteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteModal">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this information?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('admin-inquiries.delete', $inquiry->id) }}" method="POST">
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