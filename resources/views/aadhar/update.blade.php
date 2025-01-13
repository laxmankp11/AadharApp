@extends('layouts.layout')

@section('title', 'Update Aadhar')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header text-center bg-primary text-white">
                <h4>Update Aadhar</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('update-aadhar') }}">
                    @csrf
                    
                    @if($lastFour)
                        <div class="mb-3">
                            <label for="current_aadhar" class="form-label">Current Aadhar (Last 4 digits)</label>
                            <input type="text" class="form-control" id="current_aadhar" value="**** **** **** {{ $lastFour }}" disabled>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="new_aadhar" class="form-label">New Aadhar</label>
                        <input type="text" class="form-control" id="new_aadhar" name="aadhar_number" placeholder="Enter 12-digit Aadhar Number" required>
                        @error('aadhar_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Update Aadhar</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
