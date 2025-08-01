@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Driver Management</h4>
                    <a href="{{ route('logistics.drivers.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Add New Driver
                    </a>
                </div>
                <div class="card-body">
                    <!-- Search and Filter Section -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Search drivers...">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="suspended">Suspended</option>
                                <option value="on_leave">On Leave</option>
                                <option value="terminated">Terminated</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All License Classes</option>
                                <option value="A">Class A - Motorcycle</option>
                                <option value="B">Class B - Light Vehicle</option>
                                <option value="C">Class C - Heavy Vehicle</option>
                                <option value="D">Class D - Heavy Commercial</option>
                                <option value="E">Class E - Tractor</option>
                                <option value="F">Class F - Construction Equipment</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-outline-secondary">
                                <i class="bi bi-funnel"></i> Filter
                            </button>
                        </div>
                    </div>

                    <!-- Driver Statistics -->
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <div class="card bg-primary text-white">
                                <div class="card-body text-center">
                                    <h5>Total Drivers</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-success text-white">
                                <div class="card-body text-center">
                                    <h5>Active</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-warning text-white">
                                <div class="card-body text-center">
                                    <h5>On Leave</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-danger text-white">
                                <div class="card-body text-center">
                                    <h5>Suspended</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-info text-white">
                                <div class="card-body text-center">
                                    <h5>License Expiring</h5>
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

                    <!-- Drivers Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Driver</th>
                                    <th>License</th>
                                    <th>Status</th>
                                    <th>Employment</th>
                                    <th>License Expiry</th>
                                    <th>Medical Expiry</th>
                                    <th>Contact</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample data for demonstration -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/40x40" class="rounded-circle me-2" alt="Driver">
                                            <div>
                                                <strong>John Doe</strong><br>
                                                <small class="text-muted">ID: DRV001</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <strong>KCA123456</strong><br>
                                            <small class="text-muted">Class C</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><span class="badge bg-primary">Full Time</span></td>
                                    <td>2025-06-15</td>
                                    <td>2024-12-31</td>
                                    <td>
                                        <div>
                                            <small>john.doe@email.com</small><br>
                                            <small>+254 700 123 456</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-calendar"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/40x40" class="rounded-circle me-2" alt="Driver">
                                            <div>
                                                <strong>Jane Smith</strong><br>
                                                <small class="text-muted">ID: DRV002</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <strong>KCB789012</strong><br>
                                            <small class="text-muted">Class B</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">On Leave</span></td>
                                    <td><span class="badge bg-primary">Full Time</span></td>
                                    <td>2024-08-20</td>
                                    <td>2024-10-15</td>
                                    <td>
                                        <div>
                                            <small>jane.smith@email.com</small><br>
                                            <small>+254 700 789 012</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-calendar"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/40x40" class="rounded-circle me-2" alt="Driver">
                                            <div>
                                                <strong>Mike Johnson</strong><br>
                                                <small class="text-muted">ID: DRV003</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <strong>KCC345678</strong><br>
                                            <small class="text-muted">Class D</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-secondary">Hired</span></td>
                                    <td><span class="badge bg-info">Contract</span></td>
                                    <td>2025-03-10</td>
                                    <td>2024-11-30</td>
                                    <td>
                                        <div>
                                            <small>mike.johnson@email.com</small><br>
                                            <small>+254 700 345 678</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-calendar"></i>
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