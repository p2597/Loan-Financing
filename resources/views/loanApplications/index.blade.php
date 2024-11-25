<x-site-layout title="Your Loan Applications">

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">Loan Name</th>
                <th class="border border-gray-300 px-4 py-2">Terms</th>
                <th class="border border-gray-300 px-4 py-2">Salary</th>
                <th class="border border-gray-300 px-4 py-2">Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loanApplications as $loanApplication)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $loanApplication->loan->loan_name }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $loanApplication->terms }}</td>
                    <td class="border border-gray-300 px-4 py-2">€{{ number_format($loanApplication->salary, 2) }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                    <form action="{{ route('loanApplications.destroy', $loanApplication->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this loan application?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
        <a href="{{ route('loanApplications.edit', $loanApplication->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
    Edit
</a>
    </form>
</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-site-layout>
