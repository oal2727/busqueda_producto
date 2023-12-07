import { createColumnHelper } from '@tanstack/react-table';
export default function ItemTableColumn() {

    const columnHelper = createColumnHelper();
    const columns = [
        columnHelper.accessor('codigo', {
            header: 'Codigo Producto',
            footer: (info) => info.column.id,
        }),
        columnHelper.accessor('tipo_ua', {
            header: 'Tipo UA',
            footer: (info) => info.column.id,
        }),
        columnHelper.accessor('marca', {
            header: 'Marca',
            footer: (info) => info.column.id,
        }),
        columnHelper.accessor('procesador', {
            header: 'Procesador',
            footer: (info) => info.column.id,
        }),
        columnHelper.accessor('generacion', {
            header: 'Generacion',
            footer: (info) => info.column.id,
        }),
        columnHelper.accessor('nombre_cliente', {
            header: 'Nombre Cliente',
            footer: (info) => info.column.id,
        }),
        columnHelper.accessor('rubro_cliente', {
            header: 'Rubro Cliente',
            footer: (info) => info.column.id,
        }),
        columnHelper.accessor('nombre_asesor', {
            header: 'Nombre Asesor',
            footer: (info) => info.column.id,
        }),
    ];

	return columns
}
