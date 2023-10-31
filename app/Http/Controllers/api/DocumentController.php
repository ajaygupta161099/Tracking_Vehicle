<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Document;

class DocumentController extends Controller
{
    public function insert(Request $request)
    {
        //echo '<pre>'; print_r($request->all()); die;

    // Define the validation rules
    $rules = [
        'document_name'             => 'required|string|unique:documents',
        'document_type'             => 'required|integer',
        'gst_status'                => 'required|integer',
        'document_expense_ledger'   => 'required|integer',
        'prepaid_function'          => 'required|integer',
        'prepaid_ledger'            => 'required|integer',
        'monthly_amount'            => 'required|integer',
        'max_validity'              => 'required|integer',
        'reference_number'          => 'required|string',
        'valid_from'                => 'required|date',
        'valid_to'                  => 'required|date',
        'authority'                 => 'required|string',
        'upload_image'              => 'required|integer',
        'ncb'                       => 'required|integer',
        'idv'                       => 'required|integer',
        'document_amount'           => 'required|integer',
        'vehicle_number'            => 'required|integer',
        'status'                    => 'required|integer',
        'approval_status'           => 'required|integer',
    ];


    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return response()->json($validator->errors());


    }

    $document = Document::create($request->all());

    return response()->json('Document data successfully inserted', 200);

    }

    public function update(Request $request, $id)
    {
        // Define the validation rules
        $rules = [
            'document_name'             => 'required|string|unique:documents,document_name, '. $id,
            'document_type'             => 'required|integer',
            'gst_status'                => 'required|integer',
            'document_expense_ledger'   => 'required|integer',
            'prepaid_function'          => 'required|integer',
            'prepaid_ledger'            => 'required|integer',
            'monthly_amount'            => 'required|integer',
            'max_validity'              => 'required|integer',
            'reference_number'          => 'required|string',
            'valid_from'                => 'required|date',
            'valid_to'                  => 'required|date',
            'authority'                 => 'required|string',
            'upload_image'              => 'required|integer',
            'ncb'                       => 'required|integer',
            'idv'                       => 'required|integer',
            'document_amount'           => 'required|integer',
            'vehicle_number'            => 'required|integer',
            'status'                    => 'required|integer',
            'approval_status'           => 'required|integer',
        ];


        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Check if the document with the specified ID exists
        $document = Document::find($id);

        if (!$document) {
            return response()->json('Document not found', 404);


        // Update the document with the provided data

    }
    $document->update($request->all());

        return response()->json('Document data updated successfully', 200);
    }

}
