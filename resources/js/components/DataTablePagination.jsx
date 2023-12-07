import React from "react"
import ButtonIcon from "./ButtonIcon";
export default function DataTablePagination({table}){
    return (
        <div className="flex justify-between items-center mt-2">
        <div className="flex items-center">
            <span
                className="flex items-center gap-1
                mr-2"
            >
                <div className="text-sm md:text-base ">Mostrando</div>
                <strong>
                Página  {table.getState().pagination.pageIndex + 1} de{' '}
					{table.getPageCount()}
                </strong>
            </span>

            <ButtonIcon
                icon="material-symbols:chevron-left-sharp"
                stylesIcon={`text-dark-700`}
                onClick={() => table.previousPage()}
            />
            <ButtonIcon
                icon="material-symbols:chevron-right-sharp"
                stylesIcon={`text-dark-700`}
                onClick={() =>  table.nextPage() }
            />
        </div>
    </div>
        )
}