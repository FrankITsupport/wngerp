@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-gradient-primary text-white">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="mb-2">Logistics Dashboard</h2>
                            <p class="mb-0">Welcome to the Logistics Management System</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <i class="bi bi-truck display-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Statistics -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">4</h4>
                            <p class="mb-0">Total Vehicles</p>
                        </div>
                        <div class="align-self-center">
                            <i class="bi bi-truck display-6"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">3</h4>
                            <p class="mb-0">Active Drivers</p>
                        </div>
                        <div class="align-self-center">
                            <i class="bi bi-person-badge display-6"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">5</h4>
                            <p class="mb-0">Today's Deliveries</p>
                        </div>
                        <div class="align-self-center">
                            <i class="bi bi-calendar-check display-6"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">2</h4>
                            <p class="mb-0">Pending Inspections</p>
                        </div>
                        <div class="align-self-center">
                            <i class="bi bi-clipboard-check display-6"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="row">
        <!-- Quick Actions -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('logistics.fleet.create') }}" class="btn btn-outline-primary">
                            <i class="bi bi-plus-circle me-2"></i>Add New Vehicle
                        </a>
                        <a href="{{ route('logistics.drivers.create') }}" class="btn btn-outline-success">
                            <i class="bi bi-person-plus me-2"></i>Add New Driver
                        </a>
                        <a href="{{ route('logistics.deliveries.create') }}" class="btn btn-outline-warning">
                            <i class="bi bi-calendar-plus me-2"></i>Plan New Delivery
                        </a>
                        <a href="{{ route('logistics.inspections.create') }}" class="btn btn-outline-info">
                            <i class="bi bi-clipboard-plus me-2"></i>Schedule Inspection
                        </a>
                        <a href="{{ route('logistics.incidents.create') }}" class="btn btn-outline-danger">
                            <i class="bi bi-exclamation-triangle me-2"></i>Report Incident
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Recent Activities</h5>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker bg-success"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Delivery Completed</h6>
                                <p class="mb-1">Corporate Event - Tech Summit delivery completed successfully</p>
                                <small class="text-muted">2 hours ago</small>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-warning"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Vehicle Inspection Scheduled</h6>
                                <p class="mb-1">Large Truck 1 scheduled for annual inspection on Feb 25</p>
                                <small class="text-muted">4 hours ago</small>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-info"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">New Driver Added</h6>
                                <p class="mb-1">Mike Johnson added to the driver roster</p>
                                <small class="text-muted">1 day ago</small>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-danger"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Incident Reported</h6>
                                <p class="mb-1">Minor damage reported on Small Truck 1 during loading</p>
                                <small class="text-muted">2 days ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vehicle Status Overview -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Vehicle Status Overview</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="text-center">
                                <div class="position-relative">
                                    <img src="https://via.placeholder.com/120x80" class="img-fluid rounded" alt="Large Truck">
                                    <span class="position-absolute top-0 start-0 badge bg-success m-2">Available</span>
                                </div>
                                <h6 class="mt-2">Large Truck 1</h6>
                                <small class="text-muted">KCA 123A</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <div class="position-relative">
                                    <img src="https://via.placeholder.com/120x80" class="img-fluid rounded" alt="Small Truck">
                                    <span class="position-absolute top-0 start-0 badge bg-warning m-2">In Use</span>
                                </div>
                                <h6 class="mt-2">Small Truck 1</h6>
                                <small class="text-muted">KCB 456B</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <div class="position-relative">
                                    <img src="https://via.placeholder.com/120x80" class="img-fluid rounded" alt="Van">
                                    <span class="position-absolute top-0 start-0 badge bg-info m-2">Maintenance</span>
                                </div>
                                <h6 class="mt-2">Delivery Van 1</h6>
                                <small class="text-muted">KCC 789C</small>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <div class="position-relative">
                                    <img src="https://via.placeholder.com/120x80" class="img-fluid rounded" alt="Motorbike">
                                    <span class="position-absolute top-0 start-0 badge bg-success m-2">Available</span>
                                </div>
                                <h6 class="mt-2">Motorbike 1</h6>
                                <small class="text-muted">KCD 012D</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Deliveries -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Today's Deliveries</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Wedding - Sarah & Mike</h6>
                                <small class="text-muted">Setup Delivery - 08:00 AM</small>
                            </div>
                            <span class="badge bg-warning">Planned</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Product Launch - XYZ Corp</h6>
                                <small class="text-muted">Equipment Delivery - 10:30 AM</small>
                            </div>
                            <span class="badge bg-info">In Progress</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Corporate Event - Tech Summit</h6>
                                <small class="text-muted">Setdown Pickup - 06:00 PM</small>
                            </div>
                            <span class="badge bg-success">Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alerts & Notifications -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Alerts & Notifications</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning" role="alert">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        <strong>License Expiring:</strong> John Doe's license expires in 30 days
                    </div>
                    <div class="alert alert-info" role="alert">
                        <i class="bi bi-info-circle me-2"></i>
                        <strong>Insurance Due:</strong> Large Truck 1 insurance expires in 15 days
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <i class="bi bi-exclamation-circle me-2"></i>
                        <strong>Maintenance Due:</strong> Small Truck 1 requires service
                    </div>
                    <div class="alert alert-success" role="alert">
                        <i class="bi bi-check-circle me-2"></i>
                        <strong>Inspection Passed:</strong> Delivery Van 1 passed annual inspection
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.timeline {
    position: relative;
    padding-left: 30px;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 15px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #e9ecef;
}

.timeline-item {
    position: relative;
    margin-bottom: 20px;
}

.timeline-marker {
    position: absolute;
    left: -22px;
    top: 0;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: 2px solid #fff;
    box-shadow: 0 0 0 2px #e9ecef;
}

.timeline-content {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 5px;
    border-left: 3px solid #007bff;
}
</style>
@endsection 