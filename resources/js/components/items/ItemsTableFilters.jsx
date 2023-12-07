import Input from '../Input';
import React from "react"
export default function ItemTableFilters({onChange}){
    return(
        <>
            <Input
            name="filter"
            placeholder={"Buscar por Nombre del Asesor"}
            onChange={onChange}
            />
        </>
    )
}