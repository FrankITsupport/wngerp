@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Plan New Delivery</h4>
                    <a href="{{ route('logistics.deliveries.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back to Deliveries
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('logistics.deliveries.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <!-- Delivery Details -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Delivery Details</h5>
                                
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
                                    <label for="delivery_type" class="form-label">Delivery Type *</label>
                                    <select class="form-select @error('delivery_type') is-invalid @enderror" id="delivery_type" name="delivery_type" required>
                                        <option value="">Select Delivery Type</option>
                                        <option value="setup" {{ old('delivery_type') == 'setup' ? 'selected' : '' }}>Setup Delivery</option>
                                        <option value="setdown" {{ old('delivery_type') == 'setdown' ? 'selected' : '' }}>Setdown Pickup</option>
                                        <option value="equipment_return" {{ old('delivery_type') == 'equipment_return' ? 'selected' : '' }}>Equipment Return</option>
                                        <option value="urgent" {{ old('delivery_type') == 'urgent' ? 'selected' : '' }}>Urgent Delivery</option>
                                    </select>
                                    @error('delivery_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="priority" class="form-label">Priority *</label>
                                    <select class="form-select @error('priority') is-invalid @enderror" id="priority" name="priority" required>
                                        <option value="">Select Priority</option>
                                        <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Low</option>
                                        <option value="medium" {{ old('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                                        <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>High</option>
                                        <option value="urgent" {{ old('priority') == 'urgent' ? 'selected' : '' }}>Urgent</option>
                                    </select>
                                    @error('priority')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status *</label>
                                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="planned" {{ old('status') == 'planned' ? 'selected' : '' }}>Planned</option>
                                        <option value="assigned" {{ old('status') == 'assigned' ? 'selected' : '' }}>Assigned</option>
                                        <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Schedule & Location -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Schedule & Location</h5>
                                
                                <div class="mb-3">
                                    <label for="pickup_date" class="form-label">Pickup Date *</label>
                                    <input type="date" class="form-control @error('pickup_date') is-invalid @enderror" 
                                           id="pickup_date" name="pickup_date" value="{{ old('pickup_date') }}" required>
                                    @error('pickup_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="pickup_time" class="form-label">Pickup Time</label>
                                    <input type="time" class="form-control @error('pickup_time') is-invalid @enderror" 
                                           id="pickup_time" name="pickup_time" value="{{ old('pickup_time') }}">
                                    @error('pickup_time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="delivery_date" class="form-label">Delivery Date *</label>
                                    <input type="date" class="form-control @error('delivery_date') is-invalid @enderror" 
                                           id="delivery_date" name="delivery_date" value="{{ old('delivery_date') }}" required>
                                    @error('delivery_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="delivery_time" class="form-label">Delivery Time</label>
                                    <input type="time" class="form-control @error('delivery_time') is-invalid @enderror" 
                                           id="delivery_time" name="delivery_time" value="{{ old('delivery_time') }}">
                                    @error('delivery_time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="pickup_location" class="form-label">Pickup Location</label>
                                    <input type="text" class="form-control @error('pickup_location') is-invalid @enderror" 
                                           id="pickup_location" name="pickup_location" value="{{ old('pickup_location') }}">
                                    @error('pickup_location')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="delivery_location" class="form-label">Delivery Location *</label>
                                    <input type="text" class="form-control @error('delivery_location') is-invalid @enderror" 
                                           id="delivery_location" name="delivery_location" value="{{ old('delivery_location') }}" required>
                                    @error('delivery_location')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Resource Assignment -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Resource Assignment</h5>
                                
                                <div class="mb-3">
                                    <label for="vehicle_id" class="form-label">Vehicle *</label>
                                    <select class="form-select @error('vehicle_id') is-invalid @enderror" id="vehicle_id" name="vehicle_id" required>
                                        <option value="">Select Vehicle</option>
                                        <option value="1" {{ old('vehicle_id') == '1' ? 'selected' : '' }}>Large Truck 1 (KCA 123A) - Available</option>
                                        <option value="2" {{ old('vehicle_id') == '2' ? 'selected' : '' }}>Small Truck 1 (KCB 456B) - In Use</option>
                                        <option value="3" {{ old('vehicle_id') == '3' ? 'selected' : '' }}>Delivery Van 1 (KCC 789C) - Maintenance</option>
                                        <option value="4" {{ old('vehicle_id') == '4' ? 'selected' : '' }}>Motorbike 1 (KCD 012D) - Available</option>
                                    </select>
                                    @error('vehicle_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="driver_id" class="form-label">Driver *</label>
                                    <select class="form-select @error('driver_id') is-invalid @enderror" id="driver_id" name="driver_id" required>
                                        <option value="">Select Driver</option>
                                        <option value="1" {{ old('driver_id') == '1' ? 'selected' : '' }}>John Doe (KCA123456) - Active</option>
                                        <option value="2" {{ old('driver_id') == '2' ? 'selected' : '' }}>Jane Smith (KCB789012) - On Leave</option>
                                        <option value="3" {{ old('driver_id') == '3' ? 'selected' : '' }}>Mike Johnson (KCC345678) - Hired</option>
                                    </select>
                                    @error('driver_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="assistant_driver_id" class="form-label">Assistant Driver</label>
                                    <select class="form-select @error('assistant_driver_id') is-invalid @enderror" id="assistant_driver_id" name="assistant_driver_id">
                                        <option value="">Select Assistant Driver</option>
                                        <option value="1" {{ old('assistant_driver_id') == '1' ? 'selected' : '' }}>John Doe (KCA123456)</option>
                                        <option value="2" {{ old('assistant_driver_id') == '2' ? 'selected' : '' }}>Jane Smith (KCB789012)</option>
                                        <option value="3" {{ old('assistant_driver_id') == '3' ? 'selected' : '' }}>Mike Johnson (KCC345678)</option>
                                    </select>
                                    @error('assistant_driver_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Equipment & Load -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Equipment & Load</h5>
                                
                                <div class="mb-3">
                                    <label for="equipment_list" class="form-label">Equipment List</label>
                                    <textarea class="form-control @error('equipment_list') is-invalid @enderror" 
                                              id="equipment_list" name="equipment_list" rows="3" placeholder="List all equipment to be transported">{{ old('equipment_list') }}</textarea>
                                    @error('equipment_list')
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

                                <div class="mb-3">
                                    <label for="estimated_weight" class="form-label">Estimated Weight (kg)</label>
                                    <input type="number" class="form-control @error('estimated_weight') is-invalid @enderror" 
                                           id="estimated_weight" name="estimated_weight" value="{{ old('estimated_weight') }}" step="0.1">
                                    @error('estimated_weight')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="estimated_volume" class="form-label">Estimated Volume (m³)</label>
                                    <input type="number" class="form-control @error('estimated_volume') is-invalid @enderror" 
                                           id="estimated_volume" name="estimated_volume" value="{{ old('estimated_volume') }}" step="0.1">
                                    @error('estimated_volume')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Route & Cost -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Route & Cost</h5>
                                
                                <div class="mb-3">
                                    <label for="estimated_distance" class="form-label">Estimated Distance (km)</label>
                                    <input type="number" class="form-control @error('estimated_distance') is-invalid @enderror" 
                                           id="estimated_distance" name="estimated_distance" value="{{ old('estimated_distance') }}" step="0.1">
                                    @error('estimated_distance')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="estimated_duration" class="form-label">Estimated Duration (hours)</label>
                                    <input type="number" class="form-control @error('estimated_duration') is-invalid @enderror" 
                                           id="estimated_duration" name="estimated_duration" value="{{ old('estimated_duration') }}" step="0.5">
                                    @error('estimated_duration')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="fuel_cost" class="form-label">Estimated Fuel Cost (KES)</label>
                                    <input type="number" class="form-control @error('fuel_cost') is-invalid @enderror" 
                                           id="fuel_cost" name="fuel_cost" value="{{ old('fuel_cost') }}" step="0.01">
                                    @error('fuel_cost')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="total_cost" class="form-label">Total Estimated Cost (KES)</label>
                                    <input type="number" class="form-control @error('total_cost') is-invalid @enderror" 
                                           id="total_cost" name="total_cost" value="{{ old('total_cost') }}" step="0.01">
                                    @error('total_cost')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Additional Information -->
                            <div class="col-md-6">
                                <h5 class="mb-3">Additional Information</h5>
                                
                                <div class="mb-3">
                                    <label for="client_contact" class="form-label">Client Contact Person</label>
                                    <input type="text" class="form-control @error('client_contact') is-invalid @enderror" 
                                           id="client_contact" name="client_contact" value="{{ old('client_contact') }}">
                                    @error('client_contact')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="client_phone" class="form-label">Client Contact Phone</label>
                                    <input type="tel" class="form-control @error('client_phone') is-invalid @enderror" 
                                           id="client_phone" name="client_phone" value="{{ old('client_phone') }}">
                                    @error('client_phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="special_instructions" class="form-label">Special Instructions</label>
                                    <textarea class="form-control @error('special_instructions') is-invalid @enderror" 
                                              id="special_instructions" name="special_instructions" rows="3">{{ old('special_instructions') }}</textarea>
                                    @error('special_instructions')
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
                                    <a href="{{ route('logistics.deliveries.index') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-save"></i> Plan Delivery
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
    // Auto-calculate total cost when fuel cost changes
    const fuelCostInput = document.getElementById('fuel_cost');
    const totalCostInput = document.getElementById('total_cost');
    
    fuelCostInput.addEventListener('input', function() {
        const fuelCost = parseFloat(this.value) || 0;
        const currentTotal = parseFloat(totalCostInput.value) || 0;
        const otherCosts = currentTotal - (parseFloat(totalCostInput.dataset.fuelCost) || 0);
        totalCostInput.value = (fuelCost + otherCosts).toFixed(2);
        totalCostInput.dataset.fuelCost = fuelCost;
    });
    
    // Auto-calculate distance based on pickup and delivery locations
    const pickupLocationInput = document.getElementById('pickup_location');
    const deliveryLocationInput = document.getElementById('delivery_location');
    const distanceInput = document.getElementById('estimated_distance');
    
    // This would integrate with a mapping API in a real implementation
    function updateDistance() {
        // Placeholder for distance calculation
        // In real implementation, this would call a mapping API
    }
    
    pickupLocationInput.addEventListener('change', updateDistance);
    deliveryLocationInput.addEventListener('change', updateDistance);
});
</script>
@endpush
@endsection 