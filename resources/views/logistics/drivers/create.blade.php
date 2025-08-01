@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add New Driver</h4>
                    <a href="{{ route('logistics.drivers.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Drivers
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('logistics.drivers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <!-- Personal Information -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Personal Information</h5>
                                
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                           id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                           id="phone" name="phone" value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" 
                                           id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                                    @error('date_of_birth')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="national_id" class="form-label">National ID Number</label>
                                    <input type="text" class="form-control @error('national_id') is-invalid @enderror" 
                                           id="national_id" name="national_id" value="{{ old('national_id') }}">
                                    @error('national_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" 
                                              id="address" name="address" rows="3">{{ old('address') }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- License & Qualifications -->
                            <div class="col-md-6">
                                <h5 class="mb-3">License & Qualifications</h5>
                                
                                <div class="mb-3">
                                    <label for="license_number" class="form-label">License Number *</label>
                                    <input type="text" class="form-control @error('license_number') is-invalid @enderror" 
                                           id="license_number" name="license_number" value="{{ old('license_number') }}" required>
                                    @error('license_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="license_class" class="form-label">License Class *</label>
                                    <select class="form-select @error('license_class') is-invalid @enderror" id="license_class" name="license_class" required>
                                        <option value="">Select License Class</option>
                                        <option value="A" {{ old('license_class') == 'A' ? 'selected' : '' }}>Class A - Motorcycle</option>
                                        <option value="B" {{ old('license_class') == 'B' ? 'selected' : '' }}>Class B - Light Vehicle</option>
                                        <option value="C" {{ old('license_class') == 'C' ? 'selected' : '' }}>Class C - Heavy Vehicle</option>
                                        <option value="D" {{ old('license_class') == 'D' ? 'selected' : '' }}>Class D - Heavy Commercial</option>
                                        <option value="E" {{ old('license_class') == 'E' ? 'selected' : '' }}>Class E - Tractor</option>
                                        <option value="F" {{ old('license_class') == 'F' ? 'selected' : '' }}>Class F - Construction Equipment</option>
                                    </select>
                                    @error('license_class')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="license_issue_date" class="form-label">License Issue Date</label>
                                    <input type="date" class="form-control @error('license_issue_date') is-invalid @enderror" 
                                           id="license_issue_date" name="license_issue_date" value="{{ old('license_issue_date') }}">
                                    @error('license_issue_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="license_expiry_date" class="form-label">License Expiry Date *</label>
                                    <input type="date" class="form-control @error('license_expiry_date') is-invalid @enderror" 
                                           id="license_expiry_date" name="license_expiry_date" value="{{ old('license_expiry_date') }}" required>
                                    @error('license_expiry_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="vehicle_types" class="form-label">Authorized Vehicle Types</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vehicle_motorbike" name="vehicle_types[]" value="motorbike" {{ in_array('motorbike', old('vehicle_types', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="vehicle_motorbike">Motorbike</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vehicle_van" name="vehicle_types[]" value="van" {{ in_array('van', old('vehicle_types', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="vehicle_van">Van</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vehicle_small_truck" name="vehicle_types[]" value="small_truck" {{ in_array('small_truck', old('vehicle_types', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="vehicle_small_truck">Small Truck</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="vehicle_large_truck" name="vehicle_types[]" value="large_truck" {{ in_array('large_truck', old('vehicle_types', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="vehicle_large_truck">Large Truck</label>
                                    </div>
                                    @error('vehicle_types')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Employment Details -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Employment Details</h5>
                                
                                <div class="mb-3">
                                    <label for="employment_type" class="form-label">Employment Type *</label>
                                    <select class="form-select @error('employment_type') is-invalid @enderror" id="employment_type" name="employment_type" required>
                                        <option value="">Select Employment Type</option>
                                        <option value="full_time" {{ old('employment_type') == 'full_time' ? 'selected' : '' }}>Full Time</option>
                                        <option value="part_time" {{ old('employment_type') == 'part_time' ? 'selected' : '' }}>Part Time</option>
                                        <option value="contract" {{ old('employment_type') == 'contract' ? 'selected' : '' }}>Contract</option>
                                        <option value="hired" {{ old('employment_type') == 'hired' ? 'selected' : '' }}>Hired Driver</option>
                                    </select>
                                    @error('employment_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="hire_date" class="form-label">Hire Date</label>
                                    <input type="date" class="form-control @error('hire_date') is-invalid @enderror" 
                                           id="hire_date" name="hire_date" value="{{ old('hire_date') }}">
                                    @error('hire_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="daily_rate" class="form-label">Daily Rate (KES)</label>
                                    <input type="number" class="form-control @error('daily_rate') is-invalid @enderror" 
                                           id="daily_rate" name="daily_rate" value="{{ old('daily_rate') }}" step="0.01">
                                    @error('daily_rate')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status *</label>
                                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        <option value="suspended" {{ old('status') == 'suspended' ? 'selected' : '' }}>Suspended</option>
                                        <option value="on_leave" {{ old('status') == 'on_leave' ? 'selected' : '' }}>On Leave</option>
                                        <option value="terminated" {{ old('status') == 'terminated' ? 'selected' : '' }}>Terminated</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Emergency Contact -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Emergency Contact</h5>
                                
                                <div class="mb-3">
                                    <label for="emergency_contact_name" class="form-label">Emergency Contact Name</label>
                                    <input type="text" class="form-control @error('emergency_contact_name') is-invalid @enderror" 
                                           id="emergency_contact_name" name="emergency_contact_name" value="{{ old('emergency_contact_name') }}">
                                    @error('emergency_contact_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="emergency_contact_phone" class="form-label">Emergency Contact Phone</label>
                                    <input type="tel" class="form-control @error('emergency_contact_phone') is-invalid @enderror" 
                                           id="emergency_contact_phone" name="emergency_contact_phone" value="{{ old('emergency_contact_phone') }}">
                                    @error('emergency_contact_phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="emergency_contact_relationship" class="form-label">Relationship</label>
                                    <input type="text" class="form-control @error('emergency_contact_relationship') is-invalid @enderror" 
                                           id="emergency_contact_relationship" name="emergency_contact_relationship" value="{{ old('emergency_contact_relationship') }}">
                                    @error('emergency_contact_relationship')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="blood_group" class="form-label">Blood Group</label>
                                    <select class="form-select @error('blood_group') is-invalid @enderror" id="blood_group" name="blood_group">
                                        <option value="">Select Blood Group</option>
                                        <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>
                                        <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>
                                        <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>
                                        <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>
                                        <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                        <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-</option>
                                        <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>
                                        <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>
                                    </select>
                                    @error('blood_group')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Medical & Safety -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Medical & Safety</h5>
                                
                                <div class="mb-3">
                                    <label for="medical_certificate_expiry" class="form-label">Medical Certificate Expiry</label>
                                    <input type="date" class="form-control @error('medical_certificate_expiry') is-invalid @enderror" 
                                           id="medical_certificate_expiry" name="medical_certificate_expiry" value="{{ old('medical_certificate_expiry') }}">
                                    @error('medical_certificate_expiry')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="defensive_driving_certificate" class="form-label">Defensive Driving Certificate</label>
                                    <input type="text" class="form-control @error('defensive_driving_certificate') is-invalid @enderror" 
                                           id="defensive_driving_certificate" name="defensive_driving_certificate" value="{{ old('defensive_driving_certificate') }}">
                                    @error('defensive_driving_certificate')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="defensive_driving_expiry" class="form-label">Defensive Driving Expiry</label>
                                    <input type="date" class="form-control @error('defensive_driving_expiry') is-invalid @enderror" 
                                           id="defensive_driving_expiry" name="defensive_driving_expiry" value="{{ old('defensive_driving_expiry') }}">
                                    @error('defensive_driving_expiry')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Documents & Notes -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Documents & Notes</h5>
                                
                                <div class="mb-3">
                                    <label for="license_photo" class="form-label">License Photo</label>
                                    <input type="file" class="form-control @error('license_photo') is-invalid @enderror" 
                                           id="license_photo" name="license_photo" accept="image/*">
                                    @error('license_photo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="driver_photo" class="form-label">Driver Photo</label>
                                    <input type="file" class="form-control @error('driver_photo') is-invalid @enderror" 
                                           id="driver_photo" name="driver_photo" accept="image/*">
                                    @error('driver_photo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="notes" class="form-label">Notes</label>
                                    <textarea class="form-control @error('notes') is-invalid @enderror" 
                                              id="notes" name="notes" rows="3">{{ old('notes') }}</textarea>
                                    @error('notes')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('logistics.drivers.index') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-save"></i> Save Driver
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
@endsection 