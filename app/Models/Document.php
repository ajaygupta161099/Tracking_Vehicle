<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';

    protected $fillable = [
        'document_name',
        'document_type',
        'gst_status',
        'document_expense_ledger',
        'prepaid_function',
        'prepaid_ledger',
        'monthly_amount',
        'max_validity',
        'reference_number',
        'valid_from',
        'valid_to',
        'authority',
        'upload_image',
        'ncb',
        'idv',
        'document_amount',
        'vehicle_number',
        'status',
        'approval_status',
    ];
}
