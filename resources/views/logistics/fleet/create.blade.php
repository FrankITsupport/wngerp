@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add New Vehicle</h4>
                    <a href="{{ route('logistics.fleet.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Fleet
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('logistics.fleet.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <!-- Basic Vehicle Information -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Basic Information</h5>
                                
                                <div class="mb-3">
                                    <label for="name" class="form-label">Vehicle Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="type" class="form-label">Vehicle Type *</label>
                                    <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" required>
                                        <option value="">Select Vehicle Type</option>
                                        <option value="large_truck" {{ old('type') == 'large_truck' ? 'selected' : '' }}>Large Truck</option>
                                        <option value="small_truck" {{ old('type') == 'small_truck' ? 'selected' : '' }}>Small Truck</option>
                                        <option value="van" {{ old('type') == 'van' ? 'selected' : '' }}>Van</option>
                                        <option value="motorbike" {{ old('type') == 'motorbike' ? 'selected' : '' }}>Motorbike</option>
                                        <option value="hired" {{ old('type') == 'hired' ? 'selected' : '' }}>Hired Vehicle</option>
                                    </select>
                                    @error('type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="registration" class="form-label">Registration Number *</label>
                                    <input type="text" class="form-control @error('registration') is-invalid @enderror" 
                                           id="registration" name="registration" value="{{ old('registration') }}" required>
                                    @error('registration')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="make" class="form-label">Make</label>
                                    <input type="text" class="form-control @error('make') is-invalid @enderror" 
                                           id="make" name="make" value="{{ old('make') }}">
                                    @error('make')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="model" class="form-label">Model</label>
                                    <input type="text" class="form-control @error('model') is-invalid @enderror" 
                                           id="model" name="model" value="{{ old('model') }}">
                                    @error('model')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="year" class="form-label">Year</label>
                                    <input type="number" class="form-control @error('year') is-invalid @enderror" 
                                           id="year" name="year" value="{{ old('year') }}" min="1990" max="{{ date('Y') + 1 }}">
                                    @error('year')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Vehicle Specifications -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Specifications</h5>
                                
                                <div class="mb-3">
                                    <label for="capacity" class="form-label">Capacity (kg/tonnes)</label>
                                    <input type="number" class="form-control @error('capacity') is-invalid @enderror" 
                                           id="capacity" name="capacity" value="{{ old('capacity') }}" step="0.1">
                                    @error('capacity')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="fuel_type" class="form-label">Fuel Type</label>
                                    <select class="form-select @error('fuel_type') is-invalid @enderror" id="fuel_type" name="fuel_type">
                                        <option value="">Select Fuel Type</option>
                                        <option value="petrol" {{ old('fuel_type') == 'petrol' ? 'selected' : '' }}>Petrol</option>
                                        <option value="diesel" {{ old('fuel_type') == 'diesel' ? 'selected' : '' }}>Diesel</option>
                                        <option value="electric" {{ old('fuel_type') == 'electric' ? 'selected' : '' }}>Electric</option>
                                        <option value="hybrid" {{ old('fuel_type') == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                                    </select>
                                    @error('fuel_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="fuel_capacity" class="form-label">Fuel Tank Capacity (L)</label>
                                    <input type="number" class="form-control @error('fuel_capacity') is-invalid @enderror" 
                                           id="fuel_capacity" name="fuel_capacity" value="{{ old('fuel_capacity') }}" step="0.1">
                                    @error('fuel_capacity')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="color" class="form-label">Color</label>
                                    <input type="text" class="form-control @error('color') is-invalid @enderror" 
                                           id="color" name="color" value="{{ old('color') }}">
                                    @error('color')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status *</label>
                                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available</option>
                                        <option value="in_use" {{ old('status') == 'in_use' ? 'selected' : '' }}>In Use</option>
                                        <option value="maintenance" {{ old('status') == 'maintenance' ? 'selected' : '' }}>Under Maintenance</option>
                                        <option value="repair" {{ old('status') == 'repair' ? 'selected' : '' }}>Under Repair</option>
                                        <option value="inspection" {{ old('status') == 'inspection' ? 'selected' : '' }}>Under Inspection</option>
                                        <option value="out_of_service" {{ old('status') == 'out_of_service' ? 'selected' : '' }}>Out of Service</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Maintenance & Insurance -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Maintenance & Insurance</h5>
                                
                                <div class="mb-3">
                                    <label for="last_service_date" class="form-label">Last Service Date</label>
                                    <input type="date" class="form-control @error('last_service_date') is-invalid @enderror" 
                                           id="last_service_date" name="last_service_date" value="{{ old('last_service_date') }}">
                                    @error('last_service_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="next_service_date" class="form-label">Next Service Date</label>
                                    <input type="date" class="form-control @error('next_service_date') is-invalid @enderror" 
                                           id="next_service_date" name="next_service_date" value="{{ old('next_service_date') }}">
                                    @error('next_service_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="service_interval_km" class="form-label">Service Interval (km)</label>
                                    <input type="number" class="form-control @error('service_interval_km') is-invalid @enderror" 
                                           id="service_interval_km" name="service_interval_km" value="{{ old('service_interval_km') }}">
                                    @error('service_interval_km')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="current_mileage" class="form-label">Current Mileage (km)</label>
                                    <input type="number" class="form-control @error('current_mileage') is-invalid @enderror" 
                                           id="current_mileage" name="current_mileage" value="{{ old('current_mileage') }}">
                                    @error('current_mileage')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Insurance & Compliance -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Insurance & Compliance</h5>
                                
                                <div class="mb-3">
                                    <label for="insurance_provider" class="form-label">Insurance Provider</label>
                                    <input type="text" class="form-control @error('insurance_provider') is-invalid @enderror" 
                                           id="insurance_provider" name="insurance_provider" value="{{ old('insurance_provider') }}">
                                    @error('insurance_provider')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="insurance_policy_number" class="form-label">Insurance Policy Number</label>
                                    <input type="text" class="form-control @error('insurance_policy_number') is-invalid @enderror" 
                                           id="insurance_policy_number" name="insurance_policy_number" value="{{ old('insurance_policy_number') }}">
                                    @error('insurance_policy_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="insurance_expiry_date" class="form-label">Insurance Expiry Date</label>
                                    <input type="date" class="form-control @error('insurance_expiry_date') is-invalid @enderror" 
                                           id="insurance_expiry_date" name="insurance_expiry_date" value="{{ old('insurance_expiry_date') }}">
                                    @error('insurance_expiry_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="tracker_provider" class="form-label">Tracker Provider</label>
                                    <input type="text" class="form-control @error('tracker_provider') is-invalid @enderror" 
                                           id="tracker_provider" name="tracker_provider" value="{{ old('tracker_provider') }}">
                                    @error('tracker_provider')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="tracker_payment_due" class="form-label">Tracker Payment Due Date</label>
                                    <input type="date" class="form-control @error('tracker_payment_due') is-invalid @enderror" 
                                           id="tracker_payment_due" name="tracker_payment_due" value="{{ old('tracker_payment_due') }}">
                                    @error('tracker_payment_due')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Hired Vehicle Details (Conditional) -->
                            <div class="col-12" id="hired_vehicle_section" style="display: none;">
                                <h5 class="mb-3">Hired Vehicle Details</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="hire_provider" class="form-label">Hire Provider</label>
                                            <input type="text" class="form-control @error('hire_provider') is-invalid @enderror" 
                                                   id="hire_provider" name="hire_provider" value="{{ old('hire_provider') }}">
                                            @error('hire_provider')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="daily_hire_rate" class="form-label">Daily Hire Rate (KES)</label>
                                            <input type="number" class="form-control @error('daily_hire_rate') is-invalid @enderror" 
                                                   id="daily_hire_rate" name="daily_hire_rate" value="{{ old('daily_hire_rate') }}" step="0.01">
                                            @error('daily_hire_rate')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Notes & Documents -->
                            <div class="col-12">
                                <h5 class="mb-3">Additional Information</h5>
                                
                                <div class="mb-3">
                                    <label for="notes" class="form-label">Notes</label>
                                    <textarea class="form-control @error('notes') is-invalid @enderror" 
                                              id="notes" name="notes" rows="3">{{ old('notes') }}</textarea>
                                    @error('notes')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="vehicle_photo" class="form-label">Vehicle Photo</label>
                                    <input type="file" class="form-control @error('vehicle_photo') is-invalid @enderror" 
                                           id="vehicle_photo" name="vehicle_photo" accept="image/*">
                                    @error('vehicle_photo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('logistics.fleet.index') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-save"></i> Save Vehicle
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const vehicleTypeSelect = document.getElementById('type');
    const hiredVehicleSection = document.getElementById('hired_vehicle_section');
    
    function toggleHiredVehicleSection() {
        if (vehicleTypeSelect.value === 'hired') {
            hiredVehicleSection.style.display = 'block';
        } else {
            hiredVehicleSection.style.display = 'none';
        }
    }
    
    vehicleTypeSelect.addEventListener('change', toggleHiredVehicleSection);
    toggleHiredVehicleSection(); // Initial check
});
</script>
@endpush
@endsection 