@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Logistics Reports & Analytics</h4>
                    <div>
                        <button class="btn btn-success me-2">
                            <i class="bi bi-download"></i> Export Report
                        </button>
                        <button class="btn btn-primary">
                            <i class="bi bi-calendar"></i> Generate Report
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Report Filters -->
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <label class="form-label">Report Type</label>
                            <select class="form-select">
                                <option value="">Select Report</option>
                                <option value="fleet_utilization">Fleet Utilization</option>
                                <option value="driver_performance">Driver Performance</option>
                                <option value="delivery_summary">Delivery Summary</option>
                                <option value="incident_analysis">Incident Analysis</option>
                                <option value="cost_analysis">Cost Analysis</option>
                                <option value="maintenance_schedule">Maintenance Schedule</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Date Range</label>
                            <select class="form-select">
                                <option value="today">Today</option>
                                <option value="week">This Week</option>
                                <option value="month" selected>This Month</option>
                                <option value="quarter">This Quarter</option>
                                <option value="year">This Year</option>
                                <option value="custom">Custom Range</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Vehicle</label>
                            <select class="form-select">
                                <option value="">All Vehicles</option>
                                <option value="1">Large Truck 1</option>
                                <option value="2">Small Truck 1</option>
                                <option value="3">Delivery Van 1</option>
                                <option value="4">Motorbike 1</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Driver</label>
                            <select class="form-select">
                                <option value="">All Drivers</option>
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                                <option value="3">Mike Johnson</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option value="">All Status</option>
                                <option value="completed">Completed</option>
                                <option value="in_progress">In Progress</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">&nbsp;</label>
                            <button class="btn btn-primary d-block w-100">
                                <i class="bi bi-search"></i> Generate
                            </button>
                        </div>
                    </div>

                    <!-- Key Performance Indicators -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="card bg-primary text-white">
                                <div class="card-body text-center">
                                    <h5>Total Deliveries</h5>
                                    <h3>156</h3>
                                    <small>This Month</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-success text-white">
                                <div class="card-body text-center">
                                    <h5>Completed</h5>
                                    <h3>142</h3>
                                    <small>91% Success Rate</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-warning text-white">
                                <div class="card-body text-center">
                                    <h5>Fleet Utilization</h5>
                                    <h3>78%</h3>
                                    <small>Average</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-info text-white">
                                <div class="card-body text-center">
                                    <h5>Total Distance</h5>
                                    <h3>2,847 km</h3>
                                    <small>This Month</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Report Content -->
                    <div class="row">
                        <!-- Fleet Utilization Chart -->
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Fleet Utilization</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Vehicle</th>
                                                    <th>Utilization %</th>
                                                    <th>Trips</th>
                                                    <th>Distance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Large Truck 1</td>
                                                    <td>
                                                        <div class="progress" style="height: 20px;">
                                                            <div class="progress-bar bg-success" style="width: 85%">85%</div>
                                                        </div>
                                                    </td>
                                                    <td>45</td>
                                                    <td>1,234 km</td>
                                                </tr>
                                                <tr>
                                                    <td>Small Truck 1</td>
                                                    <td>
                                                        <div class="progress" style="height: 20px;">
                                                            <div class="progress-bar bg-warning" style="width: 72%">72%</div>
                                                        </div>
                                                    </td>
                                                    <td>38</td>
                                                    <td>987 km</td>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Van 1</td>
                                                    <td>
                                                        <div class="progress" style="height: 20px;">
                                                            <div class="progress-bar bg-info" style="width: 91%">91%</div>
                                                        </div>
                                                    </td>
                                                    <td>52</td>
                                                    <td>1,456 km</td>
                                                </tr>
                                                <tr>
                                                    <td>Motorbike 1</td>
                                                    <td>
                                                        <div class="progress" style="height: 20px;">
                                                            <div class="progress-bar bg-secondary" style="width: 65%">65%</div>
                                                        </div>
                                                    </td>
                                                    <td>21</td>
                                                    <td>170 km</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Driver Performance -->
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Driver Performance</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Driver</th>
                                                    <th>Trips</th>
                                                    <th>Hours</th>
                                                    <th>Rating</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>John Doe</td>
                                                    <td>45</td>
                                                    <td>180</td>
                                                    <td>
                                                        <span class="text-warning">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                        </span>
                                                    </td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Jane Smith</td>
                                                    <td>38</td>
                                                    <td>152</td>
                                                    <td>
                                                        <span class="text-warning">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </span>
                                                    </td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Mike Johnson</td>
                                                    <td>32</td>
                                                    <td>128</td>
                                                    <td>
                                                        <span class="text-warning">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                            <i class="bi bi-star"></i>
                                                        </span>
                                                    </td>
                                                    <td><span class="badge bg-warning">On Leave</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delivery Summary -->
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Delivery Summary</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Count</th>
                                                    <th>Success Rate</th>
                                                    <th>Avg Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Setup Delivery</td>
                                                    <td>89</td>
                                                    <td><span class="badge bg-success">95%</span></td>
                                                    <td>2.5 hrs</td>
                                                </tr>
                                                <tr>
                                                    <td>Setdown Pickup</td>
                                                    <td>67</td>
                                                    <td><span class="badge bg-success">92%</span></td>
                                                    <td>1.8 hrs</td>
                                                </tr>
                                                <tr>
                                                    <td>Equipment Return</td>
                                                    <td>34</td>
                                                    <td><span class="badge bg-warning">88%</span></td>
                                                    <td>3.2 hrs</td>
                                                </tr>
                                                <tr>
                                                    <td>Urgent Delivery</td>
                                                    <td>12</td>
                                                    <td><span class="badge bg-success">100%</span></td>
                                                    <td>1.2 hrs</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cost Analysis -->
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Cost Analysis</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Amount (KES)</th>
                                                    <th>% of Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Fuel</td>
                                                    <td>45,600</td>
                                                    <td>
                                                        <div class="progress" style="height: 15px;">
                                                            <div class="progress-bar bg-danger" style="width: 65%">65%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Maintenance</td>
                                                    <td>12,300</td>
                                                    <td>
                                                        <div class="progress" style="height: 15px;">
                                                            <div class="progress-bar bg-warning" style="width: 18%">18%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Hired Vehicles</td>
                                                    <td>8,500</td>
                                                    <td>
                                                        <div class="progress" style="height: 15px;">
                                                            <div class="progress-bar bg-info" style="width: 12%">12%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Other</td>
                                                    <td>3,600</td>
                                                    <td>
                                                        <div class="progress" style="height: 15px;">
                                                            <div class="progress-bar bg-secondary" style="width: 5%">5%</div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="table-dark">
                                                    <td><strong>Total</strong></td>
                                                    <td><strong>70,000</strong></td>
                                                    <td><strong>100%</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Incidents -->
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Recent Incidents</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Type</th>
                                                    <th>Vehicle/Driver</th>
                                                    <th>Location</th>
                                                    <th>Severity</th>
                                                    <th>Status</th>
                                                    <th>Cost</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2024-02-15</td>
                                                    <td><span class="badge bg-danger">Accident</span></td>
                                                    <td>Large Truck 1 / John Doe</td>
                                                    <td>Mombasa Road, Nairobi</td>
                                                    <td><span class="badge bg-danger">High</span></td>
                                                    <td><span class="badge bg-info">Investigating</span></td>
                                                    <td>25,000</td>
                                                </tr>
                                                <tr>
                                                    <td>2024-02-18</td>
                                                    <td><span class="badge bg-warning">Damage</span></td>
                                                    <td>Small Truck 1 / Jane Smith</td>
                                                    <td>Warehouse Loading Bay</td>
                                                    <td><span class="badge bg-warning">Medium</span></td>
                                                    <td><span class="badge bg-success">Resolved</span></td>
                                                    <td>8,500</td>
                                                </tr>
                                                <tr>
                                                    <td>2024-02-20</td>
                                                    <td><span class="badge bg-info">Setdown</span></td>
                                                    <td>Delivery Van 1 / Mike Johnson</td>
                                                    <td>Thika Road, Near Juja</td>
                                                    <td><span class="badge bg-success">Low</span></td>
                                                    <td><span class="badge bg-warning">Reported</span></td>
                                                    <td>2,300</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Export Options -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Export Options</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <button class="btn btn-outline-primary w-100 mb-2">
                                                <i class="bi bi-file-pdf"></i> Export as PDF
                                            </button>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-outline-success w-100 mb-2">
                                                <i class="bi bi-file-excel"></i> Export as Excel
                                            </button>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-outline-info w-100 mb-2">
                                                <i class="bi bi-file-text"></i> Export as CSV
                                            </button>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-outline-secondary w-100 mb-2">
                                                <i class="bi bi-printer"></i> Print Report
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 