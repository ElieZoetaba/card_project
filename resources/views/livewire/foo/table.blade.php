
<table class="table-auto w-full border-2">
    <thead class=" border-b-2 border-gray-200 text-left text-xs whitespace-no-wrap font-medium leading-6 text-gray-700 border-solid">
        <tr>
            <th class="px-4 py-2 text-center">Task</th>
            <th class="px-4 py-2 text-center">Description</th>
            <th class="px-4 py-2 text-center">Status</th>
            <th class="px-4 py-2 text-center">Assigned To</th>
            <th class="px-4 py-2 text-center">Due Date</th>
            <th class="px-4 py-2 text-center">Created By</th>
            <th class="px-4 py-2 text-center">Created At</th>
            <th class="px-4 py-2 text-center">Updated At</th>
            <th class="px-4 py-2 text-center">Setting</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($tasks as $task) --}}
            <tr>
                <td class="border px-4 py-2 text-center">A</td>
                <td class="border px-4 py-2 text-center">B</td>
                <td class="border px-4 py-2 text-center">C</td>
                <td class="border px-4 py-2 text-center">D</td>
                <td class="border px-4 py-2 text-center">E</td>
                <td class="border px-4 py-2 text-center">F</td>
                <td class="border px-4 py-2 text-center">G</td>
                <td class="border px-4 py-2 text-center">H</td>
                <td class="border px-4 py-2 text-center">
                    <a href="#" class="text-blue-500 hover:text-blue-700">
                        <span class="sr-only">Edit</span>
                        <span class="icon">
                            <i class="fa fa-edit"></i>
                        </span>
                    </a>
                    <a href="#" class="text-red-500 hover:text-red-700">
                        <span class="sr-only">Delete</span>
                        <span class="icon">
                            <i class="fa fa-trash"></i>
                        </span>
                    </a>
                    {{-- veiw --}}
                    <a href="#" class="text-blue-500 hover:text-blue-700">
                        <span class="sr-only">View</span>
                        <span class="icon">
                            <i class="fa fa-eye"></i>
                        </span>
                    </a>
                </td>

            </tr>
        {{-- @endforeach --}}
    </tbody>
</table>



{{-- add an subscriber in the database white the form --}}

