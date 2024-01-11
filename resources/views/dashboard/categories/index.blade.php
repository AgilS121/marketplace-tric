<a href="/dashboard/categories/create">tambah data</a>
<table>
    <tr>
        <td>
            No 
        </td>
        <td>
            Nama category
        </td>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>
                {{ $item->id }}
            </td>
            <td>
                {{ $item->name }}
            </td>
        </tr>
    @endforeach
</table>