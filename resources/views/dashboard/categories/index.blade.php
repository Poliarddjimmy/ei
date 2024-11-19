@extends('layouts.dash')

@section('content')
<div class="card shadow-none">
    <div class="card-body p-0 pb-3">
        <div class="d-flex align-items-center justify-content-between my-3 px-3">
            <h3>Categories</h3>
            <div>
                <div id="bulk-select-replace-element">
                    <a href="{{ route('dashboard.categories.create') }}" class="btn btn-falcon-success btn-sm"
                        type="button" data-bs-toggle="modal" data-bs-target="#addslider">
                        <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                        <span class="ms-1">New</span>
                    </a>
                </div>
                <div class="d-none ms-3" id="bulk-select-actions">
                    <div class="d-flex">
                        <select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="selected">Bulk actions</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                        </select>
                        <button class="btn btn-falcon-danger btn-sm ms-2" type="button">Apply</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive scrollbar">
            <table class="table mb-0">
                <thead class="text-black bg-200">
                    <tr>
                        <th>#</th>
                        <th class="text-center">Icon</th>
                        <th>name</th>
                        <th>description</th>
                        <th>Tags</th>
                        <th class="">Published</th>
                        <th class="">Action</th>
                    </tr>
                </thead>
                <tbody id="bulk-select-body">
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <img src="{{ asset('/storage/'. $category->icon) }}" alt="icon" class="img-fluid" style="width:30px">
                            </td>
                            <td>{{ $category->name }}</td>
                            <td>{!! str_limit($category->description, 70) !!}</td>
                            <td>
                                @foreach ($category->tags as $tag)
                                    <span class="tags badge bg-info">{{ $tag }}</span>
                                @endforeach
                            </td>
                            <td class="text-center">
                                <span class="form-check form-switch"><input type="checkbox"
                                        class="form-check-input" id="formSwitch1"></span>
                            </td>
                            <td class="text-center">
                                <ul class="d-flex list-unstyled mb-0">
                                    <li class="me-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#addslider{{ $category->id }}">
                                            <i class="link-icon" data-feather="edit"></i>
                                        </a>
                                        
                                        <div class="modal fade" id="addslider{{ $category->id }}" tabindex="-1" aria-labelledby="addslider{{ $category->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        @include('dashboard.categories._form', ['action'=> route('dashboard.categories.update', $category), 'method' => 'PATCH', 'cat' => $category, 'catId' => $category->id])
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deletecategory{{ $category->id }}">
                                            <i class="link-icon" data-feather="delete"></i>
                                        </a>
                                        
                                        <div class="modal fade" id="deletecategory{{ $category->id }}" tabindex="-1" aria-labelledby="deletecategory{{ $category->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Category {{ $category->name }}</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete this category "{{ $category->name }}"?</p>
                                                        <form action="{{ route('dashboard.categories.destroy', $category) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="addslider" tabindex="-1" aria-labelledby="addslider" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">Add Main Category</h5>
            </div>
            <div class="modal-body">
                @include('dashboard.categories._form', ['action'=> route('dashboard.categories.store'), 'method' => 'POST', 'cat' => new App\Models\Category, 'catId' => null])
            </div>
        </div>
    </div>
</div>
@endsection