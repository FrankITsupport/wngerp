@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">New Condition Assessment</h4>
                    <a href="{{ route('logistics.load-conditions.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Load Conditions
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('logistics.load-conditions.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <!-- Assessment Details -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Assessment Details</h5>
                                
                                <div class="mb-3">
                                    <label for="project_id" class="form-label">Project/Event *</label>
                                    <select class="form-select @error('project_id') is-invalid @enderror" id="project_id" name="project_id" required>
                                        <option value="">Select Project/Event</option>
                                        <option value="1" {{ old('project_id') == '1' ? 'selected' : '' }}>Corporate Event - Tech Summit (ABC Corp)</option>
                                        <option value="2" {{ old('project_id') == '2' ? 'selected' : '' }}>Wedding - Sarah & Mike (Private)</option>
                                        <option value="3" {{ old('project_id') == '3' ? 'selected' : '' }}>Product Launch - XYZ Corp (XYZ Corp)</option>
                                        <option value="4" {{ old('project_id') == '4' ? 'selected' : '' }}>Conference - Digital Marketing (DEF Ltd)</option>
                                    </select>
                                    @error('project_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="assessment_type" class="form-label">Assessment Type *</label>
                                    <select class="form-select @error('assessment_type') is-invalid @enderror" id="assessment_type" name="assessment_type" required>
                                        <option value="">Select Assessment Type</option>
                                        <option value="pre_delivery" {{ old('assessment_type') == 'pre_delivery' ? 'selected' : '' }}>Pre-Delivery Assessment</option>
                                        <option value="post_delivery" {{ old('assessment_type') == 'post_delivery' ? 'selected' : '' }}>Post-Delivery Assessment</option>
                                        <option value="damage_report" {{ old('assessment_type') == 'damage_report' ? 'selected' : '' }}>Damage Report</option>
                                        <option value="routine_check" {{ old('assessment_type') == 'routine_check' ? 'selected' : '' }}>Routine Check</option>
                                    </select>
                                    @error('assessment_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

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
                                    <label for="assessment_date" class="form-label">Assessment Date *</label>
                                    <input type="date" class="form-control @error('assessment_date') is-invalid @enderror" 
                                           id="assessment_date" name="assessment_date" value="{{ old('assessment_date') }}" required>
                                    @error('assessment_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="assessment_time" class="form-label">Assessment Time</label>
                                    <input type="time" class="form-control @error('assessment_time') is-invalid @enderror" 
                                           id="assessment_time" name="assessment_time" value="{{ old('assessment_time') }}">
                                    @error('assessment_time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Equipment & Items -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Equipment & Items</h5>
                                
                                <div class="mb-3">
                                    <label for="equipment_list" class="form-label">Equipment/Items List *</label>
                                    <textarea class="form-control @error('equipment_list') is-invalid @enderror" 
                                              id="equipment_list" name="equipment_list" rows="4" placeholder="List all equipment and items being assessed" required>{{ old('equipment_list') }}</textarea>
                                    @error('equipment_list')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="total_items" class="form-label">Total Number of Items</label>
                                    <input type="number" class="form-control @error('total_items') is-invalid @enderror" 
                                           id="total_items" name="total_items" value="{{ old('total_items') }}" min="1">
                                    @error('total_items')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="estimated_value" class="form-label">Estimated Value (KES)</label>
                                    <input type="number" class="form-control @error('estimated_value') is-invalid @enderror" 
                                           id="estimated_value" name="estimated_value" value="{{ old('estimated_value') }}" step="0.01">
                                    @error('estimated_value')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="special_handling" class="form-label">Special Handling Requirements</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="fragile_items" name="special_handling[]" value="fragile_items" {{ in_array('fragile_items', old('special_handling', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="fragile_items">Fragile Items</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="heavy_equipment" name="special_handling[]" value="heavy_equipment" {{ in_array('heavy_equipment', old('special_handling', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="heavy_equipment">Heavy Equipment</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="temperature_sensitive" name="special_handling[]" value="temperature_sensitive" {{ in_array('temperature_sensitive', old('special_handling', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="temperature_sensitive">Temperature Sensitive</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="security_required" name="special_handling[]" value="security_required" {{ in_array('security_required', old('special_handling', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="security_required">Security Required</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Condition Assessment -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Condition Assessment</h5>
                                
                                <div class="mb-3">
                                    <label for="overall_condition" class="form-label">Overall Condition *</label>
                                    <select class="form-select @error('overall_condition') is-invalid @enderror" id="overall_condition" name="overall_condition" required>
                                        <option value="">Select Overall Condition</option>
                                        <option value="excellent" {{ old('overall_condition') == 'excellent' ? 'selected' : '' }}>Excellent - No issues</option>
                                        <option value="good" {{ old('overall_condition') == 'good' ? 'selected' : '' }}>Good - Minor wear</option>
                                        <option value="fair" {{ old('overall_condition') == 'fair' ? 'selected' : '' }}>Fair - Some damage</option>
                                        <option value="poor" {{ old('overall_condition') == 'poor' ? 'selected' : '' }}>Poor - Significant damage</option>
                                        <option value="damaged" {{ old('overall_condition') == 'damaged' ? 'selected' : '' }}>Damaged - Requires repair</option>
                                    </select>
                                    @error('overall_condition')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="damage_details" class="form-label">Damage Details</label>
                                    <textarea class="form-control @error('damage_details') is-invalid @enderror" 
                                              id="damage_details" name="damage_details" rows="3" placeholder="Describe any damage found">{{ old('damage_details') }}</textarea>
                                    @error('damage_details')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="repair_required" class="form-label">Repair Required</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="repair_required" name="repair_required" value="1" {{ old('repair_required') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="repair_required">Repair is required</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="repair_cost_estimate" class="form-label">Repair Cost Estimate (KES)</label>
                                    <input type="number" class="form-control @error('repair_cost_estimate') is-invalid @enderror" 
                                           id="repair_cost_estimate" name="repair_cost_estimate" value="{{ old('repair_cost_estimate') }}" step="0.01">
                                    @error('repair_cost_estimate')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Assessment Results -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Assessment Results</h5>
                                
                                <div class="mb-3">
                                    <label for="status" class="form-label">Assessment Status *</label>
                                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="damaged" {{ old('status') == 'damaged' ? 'selected' : '' }}>Damaged</option>
                                        <option value="requires_attention" {{ old('status') == 'requires_attention' ? 'selected' : '' }}>Requires Attention</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="assessor_name" class="form-label">Assessor Name *</label>
                                    <input type="text" class="form-control @error('assessor_name') is-invalid @enderror" 
                                           id="assessor_name" name="assessor_name" value="{{ old('assessor_name') }}" required>
                                    @error('assessor_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="witness_name" class="form-label">Witness Name</label>
                                    <input type="text" class="form-control @error('witness_name') is-invalid @enderror" 
                                           id="witness_name" name="witness_name" value="{{ old('witness_name') }}">
                                    @error('witness_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="notes" class="form-label">Assessment Notes</label>
                                    <textarea class="form-control @error('notes') is-invalid @enderror" 
                                              id="notes" name="notes" rows="3" placeholder="Additional notes about the assessment">{{ old('notes') }}</textarea>
                                    @error('notes')
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
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="condition_photos" class="form-label">Condition Photos</label>
                                            <input type="file" class="form-control @error('condition_photos') is-invalid @enderror" 
                                                   id="condition_photos" name="condition_photos[]" accept="image/*" multiple>
                                            <small class="form-text text-muted">Upload multiple photos showing the condition of items</small>
                                            @error('condition_photos')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="damage_photos" class="form-label">Damage Photos (if any)</label>
                                            <input type="file" class="form-control @error('damage_photos') is-invalid @enderror" 
                                                   id="damage_photos" name="damage_photos[]" accept="image/*" multiple>
                                            <small class="form-text text-muted">Upload photos of any damage found</small>
                                            @error('damage_photos')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="additional_documents" class="form-label">Additional Documents</label>
                                    <input type="file" class="form-control @error('additional_documents') is-invalid @enderror" 
                                           id="additional_documents" name="additional_documents[]" accept=".pdf,.doc,.docx" multiple>
                                    <small class="form-text text-muted">Upload any additional documentation (PDF, DOC, DOCX)</small>
                                    @error('additional_documents')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('logistics.load-conditions.index') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-save"></i> Save Assessment
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