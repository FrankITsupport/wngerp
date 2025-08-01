@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Report New Incident</h4>
                    <a href="{{ route('logistics.incidents.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Incidents
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('logistics.incidents.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <!-- Incident Details -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Incident Details</h5>
                                
                                <div class="mb-3">
                                    <label for="incident_type" class="form-label">Incident Type *</label>
                                    <select class="form-select @error('incident_type') is-invalid @enderror" id="incident_type" name="incident_type" required>
                                        <option value="">Select Incident Type</option>
                                        <option value="accident" {{ old('incident_type') == 'accident' ? 'selected' : '' }}>Vehicle Accident</option>
                                        <option value="damage" {{ old('incident_type') == 'damage' ? 'selected' : '' }}>Vehicle Damage</option>
                                        <option value="theft" {{ old('incident_type') == 'theft' ? 'selected' : '' }}>Theft</option>
                                        <option value="setdown" {{ old('incident_type') == 'setdown' ? 'selected' : '' }}>Vehicle Setdown</option>
                                        <option value="injury" {{ old('incident_type') == 'injury' ? 'selected' : '' }}>Personal Injury</option>
                                        <option value="other" {{ old('incident_type') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('incident_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="severity" class="form-label">Severity Level *</label>
                                    <select class="form-select @error('severity') is-invalid @enderror" id="severity" name="severity" required>
                                        <option value="">Select Severity</option>
                                        <option value="low" {{ old('severity') == 'low' ? 'selected' : '' }}>Low - Minor damage/no injury</option>
                                        <option value="medium" {{ old('severity') == 'medium' ? 'selected' : '' }}>Medium - Moderate damage/minor injury</option>
                                        <option value="high" {{ old('severity') == 'high' ? 'selected' : '' }}>High - Significant damage/serious injury</option>
                                        <option value="critical" {{ old('severity') == 'critical' ? 'selected' : '' }}>Critical - Major damage/fatal injury</option>
                                    </select>
                                    @error('severity')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="vehicle_id" class="form-label">Vehicle Involved</label>
                                    <select class="form-select @error('vehicle_id') is-invalid @enderror" id="vehicle_id" name="vehicle_id">
                                        <option value="">Select Vehicle</option>
                                        <option value="1" {{ old('vehicle_id') == '1' ? 'selected' : '' }}>Large Truck 1 (KCA 123A)</option>
                                        <option value="2" {{ old('vehicle_id') == '2' ? 'selected' : '' }}>Small Truck 1 (KCB 456B)</option>
                                        <option value="3" {{ old('vehicle_id') == '3' ? 'selected' : '' }}>Delivery Van 1 (KCC 789C)</option>
                                        <option value="4" {{ old('vehicle_id') == '4' ? 'selected' : '' }}>Motorbike 1 (KCD 012D)</option>
                                        <option value="0" {{ old('vehicle_id') == '0' ? 'selected' : '' }}>No Vehicle Involved</option>
                                    </select>
                                    @error('vehicle_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="driver_id" class="form-label">Driver Involved</label>
                                    <select class="form-select @error('driver_id') is-invalid @enderror" id="driver_id" name="driver_id">
                                        <option value="">Select Driver</option>
                                        <option value="1" {{ old('driver_id') == '1' ? 'selected' : '' }}>John Doe (KCA123456)</option>
                                        <option value="2" {{ old('driver_id') == '2' ? 'selected' : '' }}>Jane Smith (KCB789012)</option>
                                        <option value="3" {{ old('driver_id') == '3' ? 'selected' : '' }}>Mike Johnson (KCC345678)</option>
                                        <option value="0" {{ old('driver_id') == '0' ? 'selected' : '' }}>No Driver Involved</option>
                                    </select>
                                    @error('driver_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="incident_date" class="form-label">Incident Date *</label>
                                    <input type="date" class="form-control @error('incident_date') is-invalid @enderror" 
                                           id="incident_date" name="incident_date" value="{{ old('incident_date') }}" required>
                                    @error('incident_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="incident_time" class="form-label">Incident Time *</label>
                                    <input type="time" class="form-control @error('incident_time') is-invalid @enderror" 
                                           id="incident_time" name="incident_time" value="{{ old('incident_time') }}" required>
                                    @error('incident_time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Location & Description -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Location & Description</h5>
                                
                                <div class="mb-3">
                                    <label for="location" class="form-label">Incident Location *</label>
                                    <input type="text" class="form-control @error('location') is-invalid @enderror" 
                                           id="location" name="location" value="{{ old('location') }}" placeholder="Street address or landmark" required>
                                    @error('location')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="city" class="form-label">City/Town</label>
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" 
                                           id="city" name="city" value="{{ old('city') }}" placeholder="City or town name">
                                    @error('city')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="gps_coordinates" class="form-label">GPS Coordinates</label>
                                    <input type="text" class="form-control @error('gps_coordinates') is-invalid @enderror" 
                                           id="gps_coordinates" name="gps_coordinates" value="{{ old('gps_coordinates') }}" placeholder="Latitude, Longitude">
                                    @error('gps_coordinates')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Incident Description *</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                              id="description" name="description" rows="4" placeholder="Provide a detailed description of what happened" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="weather_conditions" class="form-label">Weather Conditions</label>
                                    <select class="form-select @error('weather_conditions') is-invalid @enderror" id="weather_conditions" name="weather_conditions">
                                        <option value="">Select Weather</option>
                                        <option value="clear" {{ old('weather_conditions') == 'clear' ? 'selected' : '' }}>Clear</option>
                                        <option value="rainy" {{ old('weather_conditions') == 'rainy' ? 'selected' : '' }}>Rainy</option>
                                        <option value="foggy" {{ old('weather_conditions') == 'foggy' ? 'selected' : '' }}>Foggy</option>
                                        <option value="windy" {{ old('weather_conditions') == 'windy' ? 'selected' : '' }}>Windy</option>
                                        <option value="stormy" {{ old('weather_conditions') == 'stormy' ? 'selected' : '' }}>Stormy</option>
                                    </select>
                                    @error('weather_conditions')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Damage & Injuries -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Damage & Injuries</h5>
                                
                                <div class="mb-3">
                                    <label for="vehicle_damage" class="form-label">Vehicle Damage</label>
                                    <textarea class="form-control @error('vehicle_damage') is-invalid @enderror" 
                                              id="vehicle_damage" name="vehicle_damage" rows="3" placeholder="Describe any damage to the vehicle">{{ old('vehicle_damage') }}</textarea>
                                    @error('vehicle_damage')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="property_damage" class="form-label">Property Damage</label>
                                    <textarea class="form-control @error('property_damage') is-invalid @enderror" 
                                              id="property_damage" name="property_damage" rows="3" placeholder="Describe any damage to other property">{{ old('property_damage') }}</textarea>
                                    @error('property_damage')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="injuries" class="form-label">Injuries</label>
                                    <textarea class="form-control @error('injuries') is-invalid @enderror" 
                                              id="injuries" name="injuries" rows="3" placeholder="Describe any injuries sustained">{{ old('injuries') }}</textarea>
                                    @error('injuries')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="medical_attention" class="form-label">Medical Attention Required</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="medical_attention" name="medical_attention" value="1" {{ old('medical_attention') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="medical_attention">Medical attention was required</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="estimated_damage_cost" class="form-label">Estimated Damage Cost (KES)</label>
                                    <input type="number" class="form-control @error('estimated_damage_cost') is-invalid @enderror" 
                                           id="estimated_damage_cost" name="estimated_damage_cost" value="{{ old('estimated_damage_cost') }}" step="0.01">
                                    @error('estimated_damage_cost')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Response & Actions -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Response & Actions</h5>
                                
                                <div class="mb-3">
                                    <label for="police_involved" class="form-label">Police Involvement</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="police_involved" name="police_involved" value="1" {{ old('police_involved') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="police_involved">Police were involved</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="police_report_number" class="form-label">Police Report Number</label>
                                    <input type="text" class="form-control @error('police_report_number') is-invalid @enderror" 
                                           id="police_report_number" name="police_report_number" value="{{ old('police_report_number') }}" placeholder="Police report number if applicable">
                                    @error('police_report_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="witnesses" class="form-label">Witnesses</label>
                                    <textarea class="form-control @error('witnesses') is-invalid @enderror" 
                                              id="witnesses" name="witnesses" rows="3" placeholder="List any witnesses and their contact information">{{ old('witnesses') }}</textarea>
                                    @error('witnesses')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="immediate_actions" class="form-label">Immediate Actions Taken</label>
                                    <textarea class="form-control @error('immediate_actions') is-invalid @enderror" 
                                              id="immediate_actions" name="immediate_actions" rows="3" placeholder="Describe immediate actions taken after the incident">{{ old('immediate_actions') }}</textarea>
                                    @error('immediate_actions')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Incident Status *</label>
                                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="reported" {{ old('status') == 'reported' ? 'selected' : '' }}>Reported</option>
                                        <option value="investigating" {{ old('status') == 'investigating' ? 'selected' : '' }}>Investigating</option>
                                        <option value="resolved" {{ old('status') == 'resolved' ? 'selected' : '' }}>Resolved</option>
                                        <option value="closed" {{ old('status') == 'closed' ? 'selected' : '' }}>Closed</option>
                                        <option value="insurance_claim" {{ old('status') == 'insurance_claim' ? 'selected' : '' }}>Insurance Claim Filed</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Photos & Documentation -->
                            <div class="col-12">
                                <h5 class="mb-3">Photos & Documentation</h5>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="incident_photos" class="form-label">Incident Photos</label>
                                            <input type="file" class="form-control @error('incident_photos') is-invalid @enderror" 
                                                   id="incident_photos" name="incident_photos[]" accept="image/*" multiple>
                                            <small class="form-text text-muted">Upload photos of the incident scene</small>
                                            @error('incident_photos')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="damage_photos" class="form-label">Damage Photos</label>
                                            <input type="file" class="form-control @error('damage_photos') is-invalid @enderror" 
                                                   id="damage_photos" name="damage_photos[]" accept="image/*" multiple>
                                            <small class="form-text text-muted">Upload photos of any damage</small>
                                            @error('damage_photos')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="documents" class="form-label">Documents</label>
                                            <input type="file" class="form-control @error('documents') is-invalid @enderror" 
                                                   id="documents" name="documents[]" accept=".pdf,.doc,.docx" multiple>
                                            <small class="form-text text-muted">Upload any related documents</small>
                                            @error('documents')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('logistics.incidents.index') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-save"></i> Save Incident Report
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