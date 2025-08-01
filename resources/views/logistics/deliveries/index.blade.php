@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Delivery Planning</h4>
                    <a href="{{ route('logistics.deliveries.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Plan New Delivery
                    </a>
                </div>
                <div class="card-body">
                    <!-- Search and Filter Section -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Search deliveries...">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All Status</option>
                                <option value="planned">Planned</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="delayed">Delayed</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All Types</option>
                                <option value="setup">Setup Delivery</option>
                                <option value="setdown">Setdown Pickup</option>
                                <option value="equipment">Equipment Delivery</option>
                                <option value="materials">Materials Delivery</option>
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

                    <!-- Delivery Statistics -->
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <div class="card bg-primary text-white">
                                <div class="card-body text-center">
                                    <h5>Total Deliveries</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-warning text-white">
                                <div class="card-body text-center">
                                    <h5>Planned</h5>
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
                                    <h5>Completed</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-danger text-white">
                                <div class="card-body text-center">
                                    <h5>Delayed</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-secondary text-white">
                                <div class="card-body text-center">
                                    <h5>Today's Deliveries</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Deliveries Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Project/Event</th>
                                    <th>Delivery Type</th>
                                    <th>Pickup Location</th>
                                    <th>Delivery Location</th>
                                    <th>Schedule</th>
                                    <th>Vehicle/Driver</th>
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
                                    <td><span class="badge bg-primary">Setup</span></td>
                                    <td>Warehouse - Westlands</td>
                                    <td>KICC - Nairobi</td>
                                    <td>
                                        <div>
                                            <strong>2024-02-15</strong><br>
                                            <small class="text-muted">08:00 - 12:00</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <strong>Large Truck 1</strong><br>
                                            <small class="text-muted">John Doe</small>
                                        </div>
                                    </td>
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
                                                <i class="bi bi-map"></i>
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
                                    <td><span class="badge bg-info">Setdown</span></td>
                                    <td>Karen Country Club</td>
                                    <td>Warehouse - Westlands</td>
                                    <td>
                                        <div>
                                            <strong>2024-02-20</strong><br>
                                            <small class="text-muted">18:00 - 22:00</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <strong>Small Truck 1</strong><br>
                                            <small class="text-muted">Jane Smith</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">Planned</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-map"></i>
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
                                    <td><span class="badge bg-warning">Equipment</span></td>
                                    <td>Warehouse - Westlands</td>
                                    <td>Two Rivers Mall</td>
                                    <td>
                                        <div>
                                            <strong>2024-02-18</strong><br>
                                            <small class="text-muted">06:00 - 10:00</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <strong>Delivery Van 1</strong><br>
                                            <small class="text-muted">Mike Johnson</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">In Progress</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-map"></i>
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