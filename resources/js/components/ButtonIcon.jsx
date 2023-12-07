import React from "react"
import PropTypes from 'prop-types';
// import DynamicIcon from "../DynamicIcon"
import { Icon } from '@iconify/react';


const ButtonIcon =({icon,styleBox,disabled,onClick})=>{
    return(
        <button className={`inline-flex items-center px-2 py-2 
        disabled:opacity-50
        rounded-full shadow-xl cursor-pointer ` +styleBox } 
        onClick={onClick} disabled={disabled}>
            <Icon icon={icon} />
        </button>
    )
}

export default ButtonIcon;