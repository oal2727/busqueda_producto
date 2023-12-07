import React from "react"
export default function Input({onChange,name,placeholder}){
    return(
        <input
        onChange={onChange}
        name={name}
        placeholder={placeholder}
        class="shadow appearance-none border rounded w-full py-2 px-3
        text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
        id="username" type="text"/>
    )
}