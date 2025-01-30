<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
    <thead>
    <tr>
        @foreach (array_keys((array) $tableData->first() ?? []) as $heading)
            <th scope="col" class="px-6 py-3">
                {{ ucfirst($heading) }}
            </th>    
        @endforeach
    </tr>
</thead>
<tbody>
    @foreach ($tableData as $row)
        <tr class="{{ $loop->even ? 'bg-grey' : 'bg-blue-100' }} border-b">
            @foreach ((array) $row as $cell)
                <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                    {{$cell}}
                </td>
            @endforeach
        </tr>
    @endforeach
</tbody>

    </table>
</div>
