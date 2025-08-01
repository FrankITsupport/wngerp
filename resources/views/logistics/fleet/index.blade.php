@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Fleet Management</h4>
                    <a href="{{ route('logistics.fleet.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Add New Vehicle
                    </a>
                </div>
                <div class="card-body">
                    <!-- Search and Filter Section -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Search vehicles...">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All Types</option>
                                <option value="large_truck">Large Truck</option>
                                <option value="small_truck">Small Truck</option>
                                <option value="van">Van</option>
                                <option value="motorbike">Motorbike</option>
                                <option value="hired">Hired Vehicle</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All Status</option>
                                <option value="available">Available</option>
                                <option value="in_use">In Use</option>
                                <option value="maintenance">Under Maintenance</option>
                                <option value="repair">Under Repair</option>
                                <option value="inspection">Under Inspection</option>
                                <option value="out_of_service">Out of Service</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-outline-secondary">
                                <i class="bi bi-funnel"></i> Filter
                            </button>
                        </div>
                    </div>

                    <!-- Fleet Statistics -->
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <div class="card bg-primary text-white">
                                <div class="card-body text-center">
                                    <h5>Total Vehicles</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-success text-white">
                                <div class="card-body text-center">
                                    <h5>Available</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-warning text-white">
                                <div class="card-body text-center">
                                    <h5>In Use</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-info text-white">
                                <div class="card-body text-center">
                                    <h5>Maintenance</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-danger text-white">
                                <div class="card-body text-center">
                                    <h5>Out of Service</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-secondary text-white">
                                <div class="card-body text-center">
                                    <h5>Hired</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicles Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Vehicle</th>
                                    <th>Type</th>
                                    <th>Registration</th>
                                    <th>Status</th>
                                    <th>Current Mileage</th>
                                    <th>Next Service</th>
                                    <th>Insurance Expiry</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample data for demonstration -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/40x30" class="me-2" alt="Vehicle">
                                            <div>
                                                <strong>Large Truck 1</strong><br>
                                                <small class="text-muted">Toyota Dyna</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">Large Truck</span></td>
                                    <td>KCA 123A</td>
                                    <td><span class="badge bg-success">Available</span></td>
                                    <td>45,000 km</td>
                                    <td>2024-02-15</td>
                                    <td>2024-12-31</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-tools"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/40x30" class="me-2" alt="Vehicle">
                                            <div>
                                                <strong>Small Truck 1</strong><br>
                                                <small class="text-muted">Nissan Atlas</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">Small Truck</span></td>
                                    <td>KCB 456B</td>
                                    <td><span class="badge bg-warning">In Use</span></td>
                                    <td>32,500 km</td>
                                    <td>2024-03-20</td>
                                    <td>2024-11-30</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-tools"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/40x30" class="me-2" alt="Vehicle">
                                            <div>
                                                <strong>Delivery Van 1</strong><br>
                                                <small class="text-muted">Toyota Hiace</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-secondary">Van</span></td>
                                    <td>KCC 789C</td>
                                    <td><span class="badge bg-info">Maintenance</span></td>
                                    <td>28,750 km</td>
                                    <td>2024-01-10</td>
                                    <td>2024-10-15</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-tools"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div>
                            Showing 0 to 0 of 0 entries
                        </div>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 