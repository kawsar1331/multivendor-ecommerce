@extends('backend.master')


@section('main-content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Category</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Manage Category</li>
            </ol>
        </nav>
    </div>
</div>
<h6 class="mb-0 text-uppercase">Category List</h6>
<hr />
<div id="catemsg"></div>
<button type="button" class="btn btn-primary px-5 mb-2" data-bs-toggle="modal" data-bs-target="#modalAddCate"><i
        class="bx bx-plus mr-1"></i>Add Category</button>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Category Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sl No</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Category Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade" id="modalAddCate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group my-2">
                        <label for="name">Category Name</label>
                        <input type="text" id="name" class="form-control mt-2" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group my-2">
                        <label for="description">Category Description</label>
						<textarea id="description" rows="4"class="form-control mt-2" placeholder="Enter Category Description"></textarea>
                    </div>
                    <div class="form-group my-2">
                        <label for="status">Category Status</label>
                        <select id="status" class="form-control mt-2">
                            <option value="">---------- Select Status ----------</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
					<button type="button" class="btn btn-primary" id="addCategory">Add Category</button>
				</div>
			</div>
        </div>
    </div>
    <!-- Delete Category Modal -->
    <div class="modal fade" id="modalDelCate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <h6 class="text-warning">Are you sure you want to delete this category?</h6>
                </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
					<button type="button" class="btn btn-danger" id="delCategory">Yes</button>
				</div>
			</div>
        </div>
    </div>
    <!-- Edit Category Modal -->
    <div class="modal fade" id="modalEditCate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group my-2">
                        <label for="kname">Category Name</label>
                        <input type="text" id="kname" class="form-control mt-2" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group my-2">
                        <label for="kdescription">Category Description</label>
						<textarea id="kdescription" rows="4"class="form-control mt-2" placeholder="Enter Category Description"></textarea>
                    </div>
                    <div class="form-group my-2">
                        <label for="kstatus">Category Status</label>
                        <select id="kstatus" class="form-control mt-2">
                            <option value="">---------- Select Status ----------</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
					<button type="button" class="btn btn-success" id="updateCategory">Update Category</button>
				</div>
			</div>
        </div>
    </div>
</div>
</div>
@endsection
