<x-site-layout title="{{ $loan->loan_name }}">
<div class="mt-4 border border-gray-300 rounded-lg bg-white p-4">
   
  
    <p>{{ $loan->long_description }}</p>
    <p class="mb-4"></p>
    <p>Interest Rate: {{ $loan->interest_rate }}%</p>
    <p>Amount: €{{ number_format($loan->amount, 2) }}</p>
    <p>Terms: {{ $loan->terms }}</p>
    <p class="mb-4"></p>
    <a href="{{ route('loanApplications.create', $loan->id) }}" class="bg-stone-500 text-white px-4 py-2 rounded hover:bg-gray-600">Apply Now</a>
</div>
    </x-site-layout>


