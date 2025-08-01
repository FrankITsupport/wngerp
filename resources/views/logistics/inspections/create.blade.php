@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Schedule Vehicle Inspection</h4>
                    <a href="{{ route('logistics.inspections.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Inspections
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('logistics.inspections.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <!-- Inspection Details -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Inspection Details</h5>
                                
                                <div class="mb-3">
                                    <label for="vehicle_id" class="form-label">Vehicle *</label>
                                    <select class="form-select @error('vehicle_id') is-invalid @enderror" id="vehicle_id" name="vehicle_id" required>
                                        <option value="">Select Vehicle</option>
                                        <option value="1" {{ old('vehicle_id') == '1' ? 'selected' : '' }}>Large Truck 1 (KCA 123A)</option>
                                        <option value="2" {{ old('vehicle_id') == '2' ? 'selected' : '' }}>Small Truck 1 (KCB 456B)</option>
                                        <option value="3" {{ old('vehicle_id') == '3' ? 'selected' : '' }}>Delivery Van 1 (KCC 789C)</option>
                                        <option value="4" {{ old('vehicle_id') == '4' ? 'selected' : '' }}>Motorbike 1 (KCD 012D)</option>
                                    </select>
                                    @error('vehicle_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="inspection_center_id" class="form-label">Inspection Center *</label>
                                    <select class="form-select @error('inspection_center_id') is-invalid @enderror" id="inspection_center_id" name="inspection_center_id" required>
                                        <option value="">Select Inspection Center</option>
                                        <option value="1" {{ old('inspection_center_id') == '1' ? 'selected' : '' }}>NTSA Westlands - Nairobi</option>
                                        <option value="2" {{ old('inspection_center_id') == '2' ? 'selected' : '' }}>NTSA Mombasa - Mombasa</option>
                                        <option value="3" {{ old('inspection_center_id') == '3' ? 'selected' : '' }}>NTSA Nakuru - Nakuru</option>
                                        <option value="4" {{ old('inspection_center_id') == '4' ? 'selected' : '' }}>NTSA Kisumu - Kisumu</option>
                                    </select>
                                    @error('inspection_center_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="driver_id" class="form-label">Driver</label>
                                    <select class="form-select @error('driver_id') is-invalid @enderror" id="driver_id" name="driver_id">
                                        <option value="">Select Driver</option>
                                        <option value="1" {{ old('driver_id') == '1' ? 'selected' : '' }}>John Doe (KCA123456)</option>
                                        <option value="2" {{ old('driver_id') == '2' ? 'selected' : '' }}>Jane Smith (KCB789012)</option>
                                        <option value="3" {{ old('driver_id') == '3' ? 'selected' : '' }}>Mike Johnson (KCC345678)</option>
                                    </select>
                                    @error('driver_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="scheduled_date" class="form-label">Scheduled Date *</label>
                                    <input type="date" class="form-control @error('scheduled_date') is-invalid @enderror" 
                                           id="scheduled_date" name="scheduled_date" value="{{ old('scheduled_date') }}" required>
                                    @error('scheduled_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="scheduled_time" class="form-label">Scheduled Time</label>
                                    <input type="time" class="form-control @error('scheduled_time') is-invalid @enderror" 
                                           id="scheduled_time" name="scheduled_time" value="{{ old('scheduled_time') }}">
                                    @error('scheduled_time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="inspection_type" class="form-label">Inspection Type *</label>
                                    <select class="form-select @error('inspection_type') is-invalid @enderror" id="inspection_type" name="inspection_type" required>
                                        <option value="">Select Inspection Type</option>
                                        <option value="annual" {{ old('inspection_type') == 'annual' ? 'selected' : '' }}>Annual Inspection</option>
                                        <option value="renewal" {{ old('inspection_type') == 'renewal' ? 'selected' : '' }}>License Renewal</option>
                                        <option value="commercial" {{ old('inspection_type') == 'commercial' ? 'selected' : '' }}>Commercial Vehicle</option>
                                        <option value="safety" {{ old('inspection_type') == 'safety' ? 'selected' : '' }}>Safety Inspection</option>
                                        <option value="re_inspection" {{ old('inspection_type') == 're_inspection' ? 'selected' : '' }}>Re-inspection</option>
                                    </select>
                                    @error('inspection_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Pre-Inspection Checklist -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Pre-Inspection Checklist</h5>
                                
                                <div class="mb-3">
                                    <label class="form-label">Vehicle Preparation</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="prep_clean" name="pre_inspection_checklist[]" value="vehicle_clean" {{ in_array('vehicle_clean', old('pre_inspection_checklist', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="prep_clean">Vehicle is clean and presentable</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="prep_documents" name="pre_inspection_checklist[]" value="documents_ready" {{ in_array('documents_ready', old('pre_inspection_checklist', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="prep_documents">All documents are ready</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="prep_repairs" name="pre_inspection_checklist[]" value="repairs_completed" {{ in_array('repairs_completed', old('pre_inspection_checklist', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="prep_repairs">Previous repairs completed</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="prep_maintenance" name="pre_inspection_checklist[]" value="maintenance_up_to_date" {{ in_array('maintenance_up_to_date', old('pre_inspection_checklist', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="prep_maintenance">Maintenance is up to date</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="estimated_cost" class="form-label">Estimated Cost (KES)</label>
                                    <input type="number" class="form-control @error('estimated_cost') is-invalid @enderror" 
                                           id="estimated_cost" name="estimated_cost" value="{{ old('estimated_cost') }}" step="0.01">
                                    @error('estimated_cost')
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
                                    <a href="{{ route('logistics.inspections.index') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-save"></i> Schedule Inspection
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