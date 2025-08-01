@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Incident Reports</h4>
                    <a href="{{ route('logistics.incidents.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Report New Incident
                    </a>
                </div>
                <div class="card-body">
                    <!-- Search and Filter Section -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Search incidents...">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All Status</option>
                                <option value="reported">Reported</option>
                                <option value="investigating">Investigating</option>
                                <option value="resolved">Resolved</option>
                                <option value="closed">Closed</option>
                                <option value="insurance_claim">Insurance Claim</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All Types</option>
                                <option value="accident">Vehicle Accident</option>
                                <option value="damage">Vehicle Damage</option>
                                <option value="theft">Theft</option>
                                <option value="setdown">Setdown</option>
                                <option value="other">Other</option>
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

                    <!-- Incident Statistics -->
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <div class="card bg-primary text-white">
                                <div class="card-body text-center">
                                    <h5>Total Incidents</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-warning text-white">
                                <div class="card-body text-center">
                                    <h5>Reported</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-info text-white">
                                <div class="card-body text-center">
                                    <h5>Investigating</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-success text-white">
                                <div class="card-body text-center">
                                    <h5>Resolved</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-danger text-white">
                                <div class="card-body text-center">
                                    <h5>This Month</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-secondary text-white">
                                <div class="card-body text-center">
                                    <h5>Insurance Claims</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Incidents Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Incident ID</th>
                                    <th>Type</th>
                                    <th>Vehicle/Driver</th>
                                    <th>Location</th>
                                    <th>Date & Time</th>
                                    <th>Severity</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample data for demonstration -->
                                <tr>
                                    <td>
                                        <div>
                                            <strong>INC-2024-001</strong><br>
                                            <small class="text-muted">Reported by: John Doe</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">Accident</span></td>
                                    <td>
                                        <div>
                                            <strong>Large Truck 1</strong><br>
                                            <small class="text-muted">John Doe</small>
                                        </div>
                                    </td>
                                    <td>Mombasa Road, Nairobi</td>
                                    <td>2024-02-15 14:30</td>
                                    <td><span class="badge bg-danger">High</span></td>
                                    <td><span class="badge bg-info">Investigating</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-file-earmark-text"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <strong>INC-2024-002</strong><br>
                                            <small class="text-muted">Reported by: Jane Smith</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">Damage</span></td>
                                    <td>
                                        <div>
                                            <strong>Small Truck 1</strong><br>
                                            <small class="text-muted">Jane Smith</small>
                                        </div>
                                    </td>
                                    <td>Warehouse Loading Bay</td>
                                    <td>2024-02-18 09:15</td>
                                    <td><span class="badge bg-warning">Medium</span></td>
                                    <td><span class="badge bg-success">Resolved</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-file-earmark-text"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <strong>INC-2024-003</strong><br>
                                            <small class="text-muted">Reported by: Mike Johnson</small>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">Setdown</span></td>
                                    <td>
                                        <div>
                                            <strong>Delivery Van 1</strong><br>
                                            <small class="text-muted">Mike Johnson</small>
                                        </div>
                                    </td>
                                    <td>Thika Road, Near Juja</td>
                                    <td>2024-02-20 16:45</td>
                                    <td><span class="badge bg-success">Low</span></td>
                                    <td><span class="badge bg-warning">Reported</span></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-file-earmark-text"></i>
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