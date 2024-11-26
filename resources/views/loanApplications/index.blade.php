<x-site-layout title="Your Loan Applications">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-md mb-4 shadow-sm">
                {{ session('success') }}
            </div>
        @endif


        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300 rounded-lg shadow-sm">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Loan Name</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Terms</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Salary</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loanApplications as $loanApplication)
                        <tr class="even:bg-gray-100 odd:bg-white">
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">{{ $loanApplication->loan->loan_name }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">{{ $loanApplication->terms }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">€{{ number_format($loanApplication->salary, 2) }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-sm text-gray-700">
                                <div class="flex space-x-2">
                         
                                    <form action="{{ route('loanApplications.destroy', $loanApplication->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this loan application?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                                            Delete
                                        </button>
                                    </form>
                            
                                    <a href="{{ route('loanApplications.edit', $loanApplication->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        Edit
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-site-layout>
