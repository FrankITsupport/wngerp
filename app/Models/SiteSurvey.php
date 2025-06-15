<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SiteSurvey extends Model
{
    protected $fillable = [
        'project_id',
        'site_visit_date',
        'project_manager',
        'client_name',
        'location',
        'attendees',
        'client_contact_person',
        'client_phone',
        'client_email',
        'project_description',
        'objectives',
        'current_condition',
        'existing_branding',
        'access_logistics',
        'parking_availability',
        'size_accessibility',
        'lifts',
        'door_sizes',
        'loading_areas',
        'site_measurements',
        'room_size',
        'constraints',
        'electrical_outlets',
        'food_refreshment',
        'branding_preferences',
        'material_preferences',
        'color_scheme',
        'brand_guidelines',
        'special_instructions',
        'project_start_date',
        'project_deadline',
        'milestones',
        'safety_conditions',
        'potential_hazards',
        'safety_requirements',
        'additional_notes',
        'special_requests',
        'action_items',
        'prepared_by',
        'prepared_signature',
        'prepared_date',
        'client_approval',
        'client_signature',
        'client_approval_date'
    ];

    protected $casts = [
        'attendees' => 'array',
        'action_items' => 'array',
        'site_visit_date' => 'date',
        'project_start_date' => 'datetime',
        'project_deadline' => 'datetime',
        'prepared_date' => 'date',
        'client_approval_date' => 'date',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}