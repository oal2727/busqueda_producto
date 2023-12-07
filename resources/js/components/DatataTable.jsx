import {
	flexRender,
	getCoreRowModel,
	useReactTable,
} from '@tanstack/react-table'
import React from "react"
import DataTablePagination from './DataTablePagination'
export default function DataTable({data,columns,filters,pagination,pageCount,onPaginate}){

    const manualPagination = true
    const table = useReactTable({
		data: data || [],
		columns,
		getCoreRowModel: getCoreRowModel(),
		manualPagination,
		pageCount: pageCount ?? -1,
		state: {
			pagination,
		},
		onPaginationChange: onPaginate,
	})
    return (
        <div className='w-full px-6 md:w-3/4 m-auto'>
            <div className="overflow-x-auto ">
            <div className="flex flex-col lg:flex-row mb-4 lg:items-center space-y-2 lg:space-y-0 lg:justify-between">
				<div className="flex flex-1 items-center space-x-2">
					<div className="w-[300px]">
                    {filters}
                    </div>
				</div>
			</div>
				<table className="bg-white shadow-md rounded-xl w-full">
					<thead className='bg-blue-500'>
						{table.getHeaderGroups().map((headerGroup) => (
							<tr key={headerGroup.id} className="bg-blue-gray-100 text-gray-700">
								{headerGroup.headers.map((header) => {
									return (
										<td key={header.id}  className="py-3 px-4 text-left text-white">
											{header.isPlaceholder
                                                    ? null
                                                    : flexRender(header.column.columnDef.header, header.getContext())}
										</td>
									)
								})}
							</tr>
						))}
					</thead>
					<tbody className="text-blue-gray-900">
						{table.getRowModel().rows?.length ? (
							table.getRowModel().rows.map((row) => (
								<tr
                                    className="border-b border-blue-gray-200"
									key={row.id}
									data-state={row.getIsSelected() && 'selected'}
								>
									{row.getVisibleCells().map((cell) => (
										<td
                                        className="py-3 px-4"
                                        key={cell.id}>
											{flexRender(cell.column.columnDef.cell, cell.getContext())}
										</td>
									))}
								</tr>
							))
						) : (
							<tr>
								<td colSpan={columns.length} className="h-24 text-center">
		                       	 Sin resultados
								</td>
							</tr>
						)}
					</tbody>
				</table>
			</div>
			<DataTablePagination table={table} />
        </div>
    )
}