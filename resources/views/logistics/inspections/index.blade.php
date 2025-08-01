@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Vehicle Inspections</h4>
                    <a href="{{ route('logistics.inspections.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Schedule Inspection
                    </a>
                </div>
                <div class="card-body">
                    <!-- Search and Filter Section -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Search inspections...">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All Status</option>
                                <option value="scheduled">Scheduled</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                                <option value="passed">Passed</option>
                                <option value="failed">Failed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option value="">All Types</option>
                                <option value="annual">Annual Inspection</option>
                                <option value="renewal">License Renewal</option>
                                <option value="commercial">Commercial Vehicle</option>
                                <option value="safety">Safety Inspection</option>
                                <option value="re_inspection">Re-inspection</option>
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

                    <!-- Inspection Statistics -->
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <div class="card bg-primary text-white">
                                <div class="card-body text-center">
                                    <h5>Total Inspections</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-warning text-white">
                                <div class="card-body text-center">
                                    <h5>Scheduled</h5>
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
                                    <h5>Passed</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-danger text-white">
                                <div class="card-body text-center">
                                    <h5>Failed</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card bg-secondary text-white">
                                <div class="card-body text-center">
                                    <h5>Due This Month</h5>
                                    <h3>0</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Inspections Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Vehicle</th>
                                    <th>Inspection Type</th>
                                    <th>Center</th>
                                    <th>Driver</th>
                                    <th>Scheduled Date</th>
                                    <th>Status</th>
                                    <th>Result</th>
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
                                                <small class="text-muted">KCA 123A</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">Annual</span></td>
                                    <td>NTSA Westlands</td>
                                    <td>John Doe</td>
                                    <td>2024-02-15 09:00</td>
                                    <td><span class="badge bg-success">Completed</span></td>
                                    <td><span class="badge bg-success">Passed</span></td>
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
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/40x30" class="me-2" alt="Vehicle">
                                            <div>
                                                <strong>Small Truck 1</strong><br>
                                                <small class="text-muted">KCB 456B</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">Commercial</span></td>
                                    <td>NTSA Mombasa</td>
                                    <td>Jane Smith</td>
                                    <td>2024-02-20 14:30</td>
                                    <td><span class="badge bg-warning">Scheduled</span></td>
                                    <td><span class="badge bg-secondary">Pending</span></td>
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
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/40x30" class="me-2" alt="Vehicle">
                                            <div>
                                                <strong>Delivery Van 1</strong><br>
                                                <small class="text-muted">KCC 789C</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">Safety</span></td>
                                    <td>NTSA Nakuru</td>
                                    <td>Mike Johnson</td>
                                    <td>2024-02-18 11:00</td>
                                    <td><span class="badge bg-danger">Failed</span></td>
                                    <td><span class="badge bg-danger">Failed</span></td>
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