@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Load Condition Tracking</h4>
                    <a href="{{ route('logistics.load-conditions.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> New Condition Assessment
                    </a>
                </div>
                <div class="card-body">
                    <!-- Search and Filter Section -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Search assessments...">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All Status</option>
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                                <option value="damaged">Damaged</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All Types</option>
                                <option value="pre_delivery">Pre-Delivery</option>
                                <option value="post_delivery">Post-Delivery</option>
                                <option value="damage_report">Damage Report</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="date" class="form-control" placeholder="Date">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-outline-secondary">
                                <i class="bi bi-funnel"></i> Filter
                            </button>
                        </div>
                    </div>

                    <!-- Load Condition Statistics -->
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <div class="card bg-primary text-white">
                                <div class="card-body text-center">
                                    <h5>Total Assessments</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-warning text-white">
                                <div class="card-body text-center">
                                    <h5>Pending</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-info text-white">
                                <div class="card-body text-center">
                                    <h5>In Progress</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-success text-white">
                                <div class="card-body text-center">
                                    <h5>Good Condition</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-danger text-white">
                                <div class="card-body text-center">
                                    <h5>Damaged</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-secondary text-white">
                                <div class="card-body text-center">
                                    <h5>Today's Assessments</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Load Conditions Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Project/Event</th>
                                    <th>Assessment Type</th>
                                    <th>Equipment/Items</th>
                                    <th>Vehicle</th>
                                    <th>Assessment Date</th>
                                    <th>Condition</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample data for demonstration -->
                                <tr>
                                    <td>
                                        <div>
                                            <strong>Corporate Event - Tech Summit</strong><br>
                                            <small class="text-muted">Project ID: PRJ001</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">Pre-Delivery</span></td>
                                    <td>
                                        <div>
                                            <strong>Audio Equipment, Lighting</strong><br>
                                            <small class="text-muted">15 items</small>
                                        </div>
                                    </td>
                                    <td>Large Truck 1</td>
                                    <td>2024-02-15 07:30</td>
                                    <td><span class="badge bg-success">Excellent</span></td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-images"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <strong>Wedding - Sarah & Mike</strong><br>
                                            <small class="text-muted">Project ID: PRJ002</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">Post-Delivery</span></td>
                                    <td>
                                        <div>
                                            <strong>Chairs, Tables, Decorations</strong><br>
                                            <small class="text-muted">8 items</small>
                                        </div>
                                    </td>
                                    <td>Small Truck 1</td>
                                    <td>2024-02-20 22:30</td>
                                    <td><span class="badge bg-warning">Minor Damage</span></td>
                                    <td><span class="badge bg-danger">Damaged</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-images"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <strong>Product Launch - XYZ Corp</strong><br>
                                            <small class="text-muted">Project ID: PRJ003</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">Damage Report</span></td>
                                    <td>
                                        <div>
                                            <strong>Display Boards, Signage</strong><br>
                                            <small class="text-muted">5 items</small>
                                        </div>
                                    </td>
                                    <td>Delivery Van 1</td>
                                    <td>2024-02-18 10:15</td>
                                    <td><span class="badge bg-danger">Severe Damage</span></td>
                                    <td><span class="badge bg-danger">Damaged</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-images"></i>
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